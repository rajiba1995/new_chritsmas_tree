<?php
namespace App\Livewire\Hotel;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\State;
use App\Models\RoomCategory;
use App\Models\Ammenity;
use App\Models\City;
use Illuminate\Validation\Rule;
use App\Repositories\HotelRepository; 

class HotelCreate extends Component
{
    use WithFileUploads;
    protected $hotelRepository;

    public $name, $hotel_category, $destination, $division, $mobile, $whatsapp, $email, $secndary_email, $address;
    public $image;
    public $images = [];
    public $imagePreview;
    public $imagePreviews = [];

    public $destinations = [];
    public $divisions = [];
    public $hotel_categories = [];
    public $hotel_ammenities = [];
    public $room_categories = [];
    public $rooms = [];


    public function mount(){
        $this->hotel_categories = Category::where('status', 1)->get();
        $this->hotel_ammenities = Ammenity::where('status', 1)->get();
        $this->room_categories = RoomCategory::where('status', 1)->orderBy('name','ASC')->get();
        $this->destinations = State::where('status', 1)->orderBy('name', 'ASC')->get();
        $this->addRoom();
    }

    public function updatedImage()
    {
        $this->imagePreview = $this->image->temporaryUrl();
    }

    public function addRoom()
    {
        $this->rooms[] = [
            'room' => '',
            'no_of_room' => '',
            'capacity' => '',
            'no_of_bed' => '',
            'mattress' => '',
            'room_type' => '',
            'amenities' => []
        ];
    }
    public function updatedImages()
    {
        $this->imagePreviews = collect($this->images)->map(fn($image) => $image->temporaryUrl())->toArray();
    }
    public function removeImage($index){
        unset($this->imagePreviews[$index]);
        $this->imagePreviews = array_values($this->imagePreviews); // Re-index the array
    }

    public function removeRoom($index)
    {
        unset($this->rooms[$index]);
        $this->rooms = array_values($this->rooms); // Re-index the array
    }
    public function ChangeDestination($value){
        $this->divisions = City::where('status', 1)->where('state_id', $value)->orderBy('name', 'ASC')->get();
    }

    public function saveHotel()
    {
        // dd($this->all());
        $validatedData = $this->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('hotels', 'name')
                    ->whereNull('deleted_at')
                    ->where('destination', $this->destination)
                    ->where('division', $this->division),
            ],
            'destination' => ['required', 'integer'], // Change from string to integer
            'division' => ['nullable', 'string', 'max:255'], // Division can be nullable
            'hotel_category' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'min:10', 'max:10', 'regex:/^\d{10}$/'], // Regex to ensure only numbers
            'whatsapp' => ['required', 'string', 'min:10', 'max:10', 'regex:/^\d{10}$/'], // Regex for valid number format
            'email' => ['required', 'email', 'max:255'],
            'secndary_email' => ['nullable', 'email', 'max:255'], // Secondary email is nullable
        
            // Seasion Type
            'rooms.*.room' => 'required|string|max:255',
            'rooms.*.no_of_room' => 'required|integer|min:1',
            'rooms.*.capacity' => 'required|integer|min:1',
            'rooms.*.no_of_bed' => 'required|integer|min:1',
            'rooms.*.mattress' => 'nullable|integer|min:0',
            'rooms.*.room_type' => 'required|in:AC,Non-AC',
            'rooms.*.amenities' => 'nullable|array',
            // Validate as string for room type
        ], [
            'name.required' => 'The hotel name is required.',
            'name.unique' => 'The name has already been taken for the selected destination and division.',
            'destination.required' => 'The destination is required.',
            'destination.integer' => 'The destination must be a valid ID.',
            'division.required' => 'The division is required.',
            'hotel_category.required' => 'The hotel category is required.',
            'mobile.min' => 'The mobile number must be at least 10 digits.',
            'mobile.max' => 'The mobile number must not be more than 10 digits.',
            'whatsapp.min' => 'The WhatsApp number must be at least 10 digits.',
            'whatsapp.max' => 'The WhatsApp number must not be more than 10 digits.',
            'email.email' => 'The email must be a valid email address.',
            'secndary_email.email' => 'The secondary email must be a valid email address.',
        
        
            'rooms.required' => 'At least one room is required.',
            'rooms.min' => 'You must add at least one room.',
        
            'rooms.*.room.required' => 'The room name is required.',
            'rooms.*.room.string' => 'The room name must be a valid string.',
            'rooms.*.room.max' => 'The room name must not exceed 255 characters.',
        
            'rooms.*.no_of_room.required' => 'The number of rooms is required.',
            'rooms.*.no_of_room.integer' => 'The number of rooms must be an integer.',
            'rooms.*.no_of_room.min' => 'The number of rooms must be at least 1.',
        
            'rooms.*.capacity.required' => 'Room capacity is required.',
            'rooms.*.capacity.integer' => 'Room capacity must be an integer.',
            'rooms.*.capacity.min' => 'Room capacity must be at least 1.',
        
            'rooms.*.no_of_bed.required' => 'The number of beds is required.',
            'rooms.*.no_of_bed.integer' => 'The number of beds must be an integer.',
            'rooms.*.no_of_bed.min' => 'The number of beds must be at least 1.',
        
            'rooms.*.mattress.integer' => 'The number of mattresses must be an integer.',
            'rooms.*.mattress.min' => 'The number of mattresses cannot be negative.',
        
            'rooms.*.room_type.required' => 'The room type is required.',
            'rooms.*.room_type.in' => 'The room type must be either AC or Non-AC.',
            
            'rooms.*.amenities.array' => 'The amenities must be a valid array.',
        ]);
        
        // Now pass only the validated data to the repository
        // dd($this->all());
        try {
            $hotelRepository = app(HotelRepository::class);
            $hotelRepository->storeHotel([
                'name' => $this->name,
                'destination' => $this->destination,
                'division' => $this->division,
                'hotel_category' => $this->hotel_category,
                'mobile' => $this->mobile,
                'whatsapp' => $this->whatsapp,
                'email' => $this->email,
                'address' => $this->address,
                'secndary_email' => $this->secndary_email,
                'rooms' => $this->rooms,
                'image' => $this->image,
                'images' => $this->images,
            ]);
            

            session()->flash('message', 'Hotel created successfully.');
            return redirect()->route('admin.hotel.index'); // Redirect to the hotel listing page
        } catch (\Exception $e) {
            // dd($e->getMessage());
            session()->flash('error', $e->getMessage());
            // return redirect()->back()->with('error', $e->getMessage());
        }
       
    }

    public function render()
    {
        return view('livewire.hotel.hotel-create');
    }
}

