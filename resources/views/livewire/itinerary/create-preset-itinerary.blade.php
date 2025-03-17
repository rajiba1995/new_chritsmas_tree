<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box custom-box">
                <div class="mt-2 mx-2 mb-1">
                    @if (session('success'))
                        <div id="success-message" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {!! session('error') !!}
                        </div>
                    @endif
                </div>
                <div class="box-header">
                    {{-- <div>
                        <a href="{{route('admin.itinerary.preset.builder',[$destinationId,$categoryId])}}" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div> --}}
                    <div class="flex justify-between">
                        <div class="flex">
                            <div class="mx-2">
                                <p class="badge gap-2 bg-danger/10 text-danger uppercase">Destination</p><hr>
                                <div class="badge bg-outline-primary cursor-pointer !font-normal !text-sm uppercase">
                                    <span> {{$destinationName}}</span>
                                </div>
                            </div>
                            <div class="mx-2">
                                <p class="badge gap-2 bg-danger/10 text-danger uppercase">Hotel Category</p><hr>
                                <div class="badge bg-outline-primary cursor-pointer !font-normal !text-sm uppercase">
                                    <span>    {{$categoryName}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <form wire:submit.prevent="submitForm">
                        <div class="table-responsive mb-2">
                            <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30 bg-warning/10">
                                        <th scope="col" class="!text-center w-4/5">
                                            <div class="custom-fulldiv">
                                                <div>
                                                    Name Of Itinerary
                                                </div>
                                                <div class="nd-field">
                                                    <input type="text" wire:model="itinerary_syntax" class="form-control form-control-sm text-center" readonly>
                                                </div>
                                                <div class="nd-field" style="max-width: none">
                                                    <input type="text" wire:model="itinerary_journey" class="form-control form-control-sm text-center" readonly>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="!text-center w-1/5">
                                            <button type="submit" class="ti-btn ti-btn-success-full !py-1 !px-4 ti-btn-wave  me-[0.375rem]">SAVE</button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                        <thead class="bg-primary/10">
                                            <tr>
                                                <th class="!text-center">BANNER SECTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-6 col-span-12 mb-4">
                                                            <label class="">Name of Lead</label>
                                                            <input type="text" wire:model="name_of_lead" class="form-control form-control-sm placeholder:text-textmuted" wire:keyup="UpdateByKeyUp('banner_section','name_of_lead',$event.target.value)">
                                                        </div>
                                                        <div class="md:col-span-6 col-span-12 mb-4">
                                                            <label class="">Welcome To</label>
                                                            <input type="text" 
                                                            wire:model="welcome_to" 
                                                            class="form-control form-control-sm placeholder:text-textmuted" 
                                                            wire:keyup="UpdateByKeyUp('banner_section','welcome_to',$event.target.value)">
                                                        </div>
                                                    </div>
                                                    <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Main Banner</span>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-10 col-span-12 mb-4 itinerary-build">
                                                            <div class="image-preview-container">
                                                                @foreach ($mainBanner as $index => $main_banner)
                                                                    <label class="image-preview-label px-1">
                                                                        <input type="radio" name="main_banner" wire:model="main_banner" value="{{ $main_banner->image }}" class="hidden peer" wire:change="UpdateByKeyUp('banner_section','main_banner',$event.target.value)">
                                                                        <div class="image-preview peer-checked:border-blue-500 relative">
                                                                            <img src="{{ asset($main_banner->image) }}" alt="Image Preview" class="image-thumbnail">
                                                                            <!-- Selected Text -->
                                                                            <div class="absolute bottom-0 left-0 right-0 bg-white text-center text-sm font-semibold py-1 hidden peer-checked:block">
                                                                                Selected
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="md:col-span-2 col-span-12 mb-4">
                                                            <div class="border-l-0 sightseeing_images">
                                                                <label class="file-upload-container">
                                                                    <span class="choose-text">Upload New Banner</span>
                                                                    <input type="file" wire:model="uploadMainBanner" class="file-input" accept="image">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                        <thead class="bg-primary/10">
                                            <tr>
                                                <th class="!text-center uppercase">About Destination</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label "> Title</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            <input type="text" class="form-control form-control-sm" wire:model="about_destination_title" wire:keyup="UpdateByKeyUp('about_destination','about_destination_title',$event.target.value)">
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label">Text</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            <textarea wire:model="about_destination_text" class="form-control form-control-sm" rows="3" wire:keyup="UpdateByKeyUp('about_destination','about_destination_text',$event.target.value)">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label">Trip Highlights</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            @foreach ($trip_highlights as $index => $highlight)
                                                                <div class="flex items-center gap-2 mb-2">
                                                                    <input type="text" class="form-control form-control-sm" 
                                                                        wire:model="trip_highlights.{{ $index }}" 
                                                                        wire:keyup="UpdateByKeyUp('about_destination','trip_highlights_{{ $index }}',$event.target.value)">
                                                        
                                                                    {{-- @if ($index > 0)  --}}
                                                                        <button type="button" wire:click="removeAboutDescHighlight({{ $index }})" 
                                                                            class="badge bg-outline-danger cursor-pointer !font-normal !text-sm uppercase">
                                                                            Remove
                                                                        </button>
                                                                    {{-- @endif --}}
                                                                </div>
                                                            @endforeach
                                                        
                                                            <div class="text-end">
                                                                <button type="button" wire:click="addAboutDescHighlight" 
                                                                    class="badge bg-outline-success cursor-pointer !font-normal !text-sm uppercase">
                                                                    Add Trip Highlights
                                                                </button>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Destination Slider images</span>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-10 col-span-12 mb-4 itinerary-build">
                                                            <div class="image-preview-container">
                                                                @foreach ($destinationImages as $slider_index => $slider_image)
                                                                    {{-- <label class="image-preview-label px-1 relative" wire:key="destination-image-{{ $slider_index }}"> --}}
                                                                        <div class="image-preview peer-checked:border-blue-500 relative !overflow-visible">
                                                                            <!-- Delete Button (Top-Right Corner) -->
                                                                            <button type="button"
                                                                                class="delete-icon"
                                                                                wire:click="ItineraryImageDelete('{{ $slider_image }}')">
                                                                                ✖
                                                                            </button>
                                                                            <!-- Image -->
                                                                            <img src="{{ asset($slider_image) }}" alt="Image Preview" class="image-thumbnail cursor-pointer" wire:click="showImageModal('{{ $slider_image }}')">
                                                                        </div>
                                                                    {{-- </label> --}}
                                                                @endforeach
                                                            </div>
                                                            @error('uploadDestinationSlider.*') 
                                                                <span class="text-red-500">{{ $message }}</span> 
                                                            @enderror
                                                        </div>
                                                        
                                                        <div class="md:col-span-2 col-span-12 mb-4">
                                                            <div class="border-l-0 sightseeing_images">
                                                                <label class="file-upload-container">
                                                                    <span class="choose-text">Upload Slider Images</span>
                                                                    <input type="file" wire:model="uploadDestinationSlider" class="file-input" accept="image/*" multiple>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @foreach($day_by_divisions as $division_index=>$division_item)
                                        <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                            <thead class="bg-primary/10">
                                                <tr>
                                                    <th class="!text-center uppercase">Day {{$division_index}} ({{$division_item['division_name']}})</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="grid grid-cols-12 mb-4">
                                                            <label class="sm:col-span-2 col-span-12 col-form-label">Text</label>
                                                            <div class="sm:col-span-10 col-span-12">
                                                                <textarea wire:model="day_texts.day_{{ $division_index }}_text" 
                                                                class="form-control form-control-sm" 
                                                                rows="3"
                                                                wire:keyup="UpdateByKeyUp('day_{{ $division_index }}', 'day_{{ $division_index }}_text', $event.target.value)"></textarea>
                                                            </div>
                                                        </div>
                                                    
                                                        <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Day {{$division_index}} in {{$division_item['division_name']}}</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                            <div class="md:col-span-10 col-span-12 mb-4 itinerary-build">
                                                                <div class="image-preview-container">
                                                                    {{-- {{dd($dayImages[$index])}} --}}
                                                                    @foreach ($dayImages[$division_index] ?? [] as $img_index=> $img)
                                                                    {{-- <label class="image-preview-label px-1 relative" wire:key="day-image-{{$division_index}}-{{ $img_index }}"> --}}
                                                                        <div class="image-preview peer-checked:border-blue-500 relative !overflow-visible">
                                                                            <!-- Delete Button (Top-Right Corner) -->
                                                                            <button type="button"
                                                                                class="delete-icon"
                                                                                wire:click="deleteDayImage('{{ $img }}', {{ $division_index }})">
                                                                                ✖
                                                                            </button>
                                                                            <!-- Image -->
                                                                            <img src="{{ asset($img) }}" alt="Image Preview" class="image-thumbnail cursor-pointer" wire:click="showImageModal('{{ $img }}')">
                                                                        </div>
                                                                    {{-- </label> --}}
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="md:col-span-2 col-span-12 mb-4">
                                                                <div class="border-l-0 sightseeing_images">
                                                                    <label class="file-upload-container">
                                                                        <span class="choose-text">Upload Day {{$division_index}} Images</span>
                                                                        <input type="file" wire:model="uploadDayImages.{{ $division_index }}" class="file-input" accept="image/*" multiple>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full mt-4">
                                                            <thead class="">
                                                                <tr>
                                                                    <th class="!text-center uppercase">SL No.</th>
                                                                    <th class="!text-center uppercase">ROUTE</th>
                                                                    <th class="!text-center uppercase">ACTIVITY</th>
                                                                    <th class="!text-center uppercase">SIGHTSEEINGS</th>
                                                                    <th class="!text-center uppercase">
                                                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-success !border !border-success/20">
                                                                            <i class="fa-solid fa-plus text-lg text-dark"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="!text-center">
                                                                        <span class="badge bg-primary/10 text-primary">1</span>
                                                                    </td>
                                                                    <td class="!text-center"></td>
                                                                    <td class="!text-center"></td>
                                                                    <td class="!text-center"></td>
                                                                    <td class="!text-center">
                                                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                                                            <i class="ti ti-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="mt-4">
                                                            <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small m-2"><i class="fas fa-hotel"></i> Hotel  <span class="custom-header-separator">|</span> 1 Night<span class="custom-header-separator">|</span> in {{$division_item['division_name']}}</span>
                                                            <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                                <div class="md:col-span-8 col-span-12 mb-4 mx-2 itinerary-build">
                                                                    <div class="custom-card">
                                                                        
                                                                        @if(count($division_item['day_hotel'])>0)
                                                                            <div class="custom-hotel-container relative !overflow-visible">
                                                                                <div class="custom-hotel-content">
                                                                                    <div class="custom-hotel-image-container">
                                                                                        {{-- <p class="custom-hotel-rating">4.2<small>/5</small></p> --}}
                                                                                        <div class="custom-image-carousel">
                                                                                            <div class="custom-image-wrapper" style="width: 225px; height: 120px;">
                                                                                                <img class="custom-hotel-image" width="225" height="120" 
                                                                                                    src="{{asset('build/assets/images/logo/hotel.jpg')}}" 
                                                                                                    alt="Hotel Image">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                  
                                                                                    <div class="custom-hotel-details">
                                                                                        <div class="custom-hotel-details-top">
                                                                                            <p class="text-black-600 text-base italic">{{$division_item['day_hotel']['hotel_name']}}</p>
                                                                                            <p class="text-gray-500 text-small">{{$division_item['day_hotel']['hotel_address']}}</p>
                                                                                            <p class="badge gap-2 bg-danger/10 text-danger uppercase text-small my-2">Rooms</p>
                                                                                            <div>
                                                                                                @forelse ($division_item['day_hotel']['hotel_rooms'] as $room)
                                                                                                    <label class="hotel-preview-label relative cursor-pointer">
                                                                                                        <input 
                                                                                                            type="radio"
                                                                                                            name="selected_day_wise_itinerary_hotel.{{ $division_index }}.room" 
                                                                                                            value="{{ $room->id ?? '' }}" 
                                                                                                            class="hidden peer"
                                                                                                            wire:click="getRoom({{$division_index}},{{ $room->id}})" 
                                                                                                            wire:model="selected_day_wise_itinerary_hotel.{{ $division_index }}.room"
                                                                                                            wire:key="hotel-{{ $division_index }}-room-{{ $room->id }}">
                                                                                                        <!-- Hotel Selection Box -->
                                                                                                        <div class="hotel-card">
                                                                                                            <span class="hotel-name">{{$room->room_name}}</span>
                                                                                                            <!-- Selected Indicator -->
                                                                                                            <span class="checkmark">✓</span>
                                                                                                        </div>
                                                                                                    </label>
                                                                                                @empty
                                                                                                    <div class="alert alert-warning text-sm italic">
                                                                                                        rooms not added on this hotel
                                                                                                    </div>
                                                                                                @endforelse
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <button type="button" wire:click="RemoveDayHotel({{$division_index}},'day_hotel', {{$division_item['day_hotel']['hotel_id']}})" class="delete-icon">✖
                                                                                </button>
                                                                            </div>
                                                                        @else
                                                                             <div class="alert alert-warning text-sm italic">
                                                                                Hotel not added
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="md:col-span-4 col-span-12 mb-4 mx-2 itinerary-build">
                                                                    <div class="custom-card">
                                                                        <div class="custom-hotel-container">
                                                                            <label for="">
                                                                                <span class="badge gap-2 bg-primary/10 text-primary uppercase">
                                                                                    Hotels
                                                                                 </span>
                                                                            </label>
                                                                            <select
                                                                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                                                                wire:change="getHotel({{$division_index}},$event.target.value)" 
                                                                                wire:key="hotel-{{ $division_index }}-100">
                                                                                <option value="" hidden>Choose hotel</option>
                                                                                @if (!empty($division_item['division_hotels']) && count($division_item['division_hotels']) > 0)
                                                                                    @foreach ($division_item['division_hotels'] as $hotel_index => $hotel_item)
                                                                                        <option 
                                                                                            value="{{ $hotel_item['id'] ?? '' }}"
                                                                                            wire:key="hotel-{{ $division_index }}-{{ $hotel_index }}">
                                                                                            {{ $hotel_item['name'] ?? 'No Name' }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                @else
                                                                                    <option value="" disabled>No hotels available</option>
                                                                                @endif
                                                                            </select>
                                                                            @error('errorHotel.{{$division_index}}') 
                                                                                <span class="text-red-500">{{ $message }}</span> 
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Livewire Modal -->
    @if($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
            wire:click="closeModal">

            <div class="relative bg-white p-4 rounded-lg shadow-lg max-w-2xl w-full"
                wire:click.stop> <!-- Prevent closing when clicking inside -->

                <!-- Close Button -->
                <button class="delete-icon" wire:click="closeModal">✖</button>

                <!-- Display Image -->
                <img src="{{ asset($modalImage) }}" class="w-full h-auto rounded-md">
            </div>
        </div>
    @endif

    <div wire:loading class="loader">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>
