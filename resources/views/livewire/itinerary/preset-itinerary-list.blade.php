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
                <div class="box-header flex justify-end">
                    <div>
                       <div class="grid grid-cols-1 hover:grid-cols-6">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Type
                                 </span>
                            </label>
                            <select 
                                name="itinerary_type" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="filterType($event.target.value)" 
                                wire:key="itinerary-type-0">
                                <option value="" hidden>Filter type</option>
                                <option value="preset">Preset</option>
                                <option value="post_inquiry">Post Inquiry</option>
                            </select>
                       </div>
                    </div>
                    <div>
                       <div class="grid grid-cols-1 hover:grid-cols-6">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Destinations
                                 </span>
                            </label>
                            <select 
                                name="destination_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="getDestination($event.target.value)" 
                                wire:key="destination-0">
                                <option value="" hidden>Filter Destinations</option>
                                @foreach ($desitinations as $destination_item)
                                    <option 
                                        value="{{ $destination_item->id }}" 
                                        {{$selectedDestination == $destination_item->id ? "selected" : ""}} 
                                        wire:key="destination-{{ $destination_item->id }}">
                                        {{ $destination_item->name }}
                                    </option>
                                @endforeach
                            </select>
                       </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 hover:grid-cols-6">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                   Hotel Category
                                 </span>
                            </label>
                            <select 
                                name="division_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="GetCategory($event.target.value)" 
                                wire:key="category-0">
                                <option value="" hidden>Filter category</option>
                                @foreach ($categories as $category)
                                    <option 
                                        value="{{ $category->id }}" 
                                        {{$selectedCategory==$category->id?"selected":""}} 
                                        wire:key="category-{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                       </div>
                    </div>
                    
                    <div class="prism-toggle mt-5">
                        <a href="javascript:void(0)" wire:click="NewPresetItinerary('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Preset Itinerary Builder</a>
                    </div>
                    <div class="mt-5">
                        <a href="{{route('admin.itinerary.preset.list')}}" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="flex justify-between">
                        <div class="badge bg-outline-success cursor-pointer">
                            <span>No of Result: {{count($preset_itineraries)}}</span>
                        </div>
                        <div>
                            <input type="text" class="badge bg-outline-primary w-xs" wire:keyup="QuickSearch($event.target.value)" placeholder="Quick Search..">
                            <a href="javascript:void(0)" class="badge bg-outline-danger cursor-pointer">
                                Reset
                            </a>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="table-responsive">
                            <table
                                class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30">
                                        <th scope="col" class="!text-center">SL No.</th>
                                        <th scope="col" class="!text-center">Type</th>
                                        <th scope="col" class="!text-center">Destination</th>
                                        <th scope="col" class="!text-center">H. Category</th>
                                        <th scope="col" class="!text-center">Name of Itinerary</th>
                                        <th scope="col" class="!text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @forelse ($preset_itineraries as $k=> $pre_item)
                                    <tr>
                                        <td class="!text-center"><span class="badge bg-primary/10 text-primary">{{$k+1}}</span> </td>
                                        <td class="!text-center">{{ucwords($pre_item->type)}}</td>
                                        <td class="!text-center">{{$pre_item->destination->name}}</td>
                                        <td class="!text-center">{{$pre_item->hotelCategory->name}}</td>
                                        <td class="!text-center">
                                            {{$pre_item->itinerary_syntax}}
                                            <span class="badge bg-danger/10 text-danger">{{$pre_item->itinerary_journey}}</span>
                                        </td>
                                        <td class="!text-center">
                                            @php
                                                $encryptedId = Crypt::encrypt($pre_item->id);
                                            @endphp
                                            <a href="{{route('admin.itinerary.preset.build', $encryptedId)}}" class="badge bg-primary/10 text-primary">Build</a>
                                        </td>
                                    </tr>
                                   @empty
                                   <tr>
                                        <td colspan="6">
                                            <div class="alert alert-danger">
                                                Result not found
                                            </div>
                                        </td>
                                    </tr>
                                   @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Model --}}
    <div id="assign_cab" class="hs-overlay {{$active_assign_new_modal==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_md_width bg-white rounded-lg">
            <div class="ti-modal-content p-20">
                <div class="ti-modal-header flex justify-end items-center">
                    <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="NewPresetItinerary('no')">
                        <i class="fa-solid fa-xmark text-lg text-dark"></i>
                    </button>
                </div>
                <div class="ti-modal-body text-start">
                    <div class="flex items-center mb-2">
                        <div class="grid grid-cols-1 hover:grid-cols-6 mx-1">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Destination
                                 </span>
                            </label>
                            <select 
                                name="destination_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="getDestination($event.target.value)" 
                                wire:key="destination-0">
                                <option value="" hidden>Filter Destinations</option>
                                @foreach ($desitinations as $destination_item)
                                    <option 
                                        value="{{ $destination_item->id }}" 
                                        {{$selectedDestination == $destination_item->id ? "selected" : ""}} 
                                        wire:key="destination-{{ $destination_item->id }}">
                                        {{ $destination_item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="grid grid-cols-1 hover:grid-cols-6 mx-1">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Category
                                </span>
                            </label>
                            <select 
                                name="division_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="GetCategory($event.target.value)" 
                                wire:key="category-0">
                                <option value="" hidden>Filter category</option>
                                @foreach ($categories as $category)
                                    <option 
                                        value="{{ $category->id }}" 
                                        {{$selectedCategory==$category->id?"selected":""}} 
                                        wire:key="category-{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <form wire:submit.prevent="submitForm">
                        <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                            <thead class="uppercase">
                                <tr class="border-b !border-primary/30 bg-warning/10">
                                    <th scope="col" class="!text-center">
                                        Name Of Itinerary
                                    </th>
                                </tr>
                                <tr class="border-b !border-primary/30 bg-warning/10">
                                    <th scope="col" class="!text-center">
                                        <div class="custom-fulldiv">
                                            <div class="nd-field">
                                                <div class="nd-group">
                                                    <input type="text" wire:model="day" wire:keyup="validateDaysAndNights($event.target.value)"
                                                        class="form-control form-control-sm refresh_component">
                                                    <span>D</span>
                                                </div>
                                                <div class="spacer">/</div>
                                                <div class="nd-group">
                                                    <input type="text" wire:model="night" wire:keyup="validateDaysAndNights($event.target.value)"
                                                        class="form-control form-control-sm refresh_component">
                                                    <span>N</span>
                                                </div>
                                            </div>
                                            @if($active_night_distribution==1)
                                                <div class="nd-group-wide">
                                                    <input type="text" wire:model="night_distribution" wire:keyup="validateNightDistribution"
                                                    class="nd-input-placeholder form-control form-control-sm !text-center refresh_component" placeholder="Night distributaion">
                                                    <span>Example: (4+2+1)</span>
                                                </div>
                                            @endif
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($itinerary_journey) > 0)
                                    @foreach($itinerary_journey as $index => $item)
                                        <tr>
                                            <td>
                                                <div class="custom-fulldiv">
                                                    <div class="night-group max-w-75">
                                                        <input type="text" wire:model="itinerary_journey.{{ $index }}"
                                                            class="form-control form-control-sm" readonly>
                                                        <span>N</span>
                                                    </div>
                                                    <div>
                                                        <select 
                                                            wire:model="itinerary_journey_divisions.{{$index}}" 
                                                            class="placeholder:text-textmuted text-sm selected_seasion_type" wire:key="itinerary-journey-divisions-{{$index}}-0" wire:change="updateJourneyDivision({{$index}},$event.target.value)">
                                                            <option value="" hidden>Select Divisions</option>
                                                            @foreach ($divisions as $division)
                                                                <option 
                                                                    value="{{ $division->id }}"
                                                                    wire:key="itinerary-journey-divisions-{{$index}}-{{ $division->id }}">
                                                                    {{ $division->name }}({{$division->code}})
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            
                                <tr>
                                    <td>
                                        @if($newPresetError)
                                            <div class="alert alert-danger">
                                                {{ $newPresetError }}
                                            </div>
                                        @endif
                                        @if(count($itinerary_journey)==count($itinerary_journey_divisions))
                                            <div class="text-end mt-3">
                                                <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                                    <i class="fa-solid fa-save"></i> Save
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Model --}}

    <div wire:loading class="loader">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('refreshComponent', function (event) {
        document.querySelectorAll('.refresh_component').forEach(element => {
            element.value = ''; // Clear input fields
        });
    });
    window.addEventListener('showConfirm', function (event) {
        let itemId = event.detail[0].itemId;
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('deleteItem', itemId); // Calls Livewire method directly
                Swal.fire("Deleted!", "Your item has been deleted.", "success");
            }
        });
    });
</script>
@endsection
