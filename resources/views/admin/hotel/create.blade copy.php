@extends('layouts.master')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('build/assets/libs/dragula/dragula.min.css') }}">
@endsection
@section('title', $common['pageTitle']) <!-- This sets the page title dynamically -->
@section('content')
<div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">{{$common['childHeader']}}</h5>
        <nav>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                        href="javascript:void(0);"> {{$common['parentHeader']}} <i
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                    </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                        href="javascript:void(0);">{{$common['childHeader']}}
                    </a> </li>
            </ol>
        </nav>
    </div>

    <div class="ti-btn-list">
        <a href="{{route('admin.hotel.index')}}"
            class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i
                class="fa-solid fa-caret-left"></i>Back</a>
    </div>
</div>
<!-- Start:: row-10 -->
<div class="grid grid-cols-10 gap-3">
    <div class="xl:col-span-10 col-span-10">
        <div class="box custom-box">
            <div class="box-body">
                <form action="{{ route('admin.hotel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <!-- resources/views/create-lead.blade.php -->
                    <span class="badge gap-2 bg-primary/10 text-primary">
                        <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                        BASIC INFORMATION
                    </span>
                    <div class="container mx-auto px-4">
                        <div class="grid lg:grid-cols-2 gap-3">
                            <div class="space-y-2">
                                <x-form-field 
                                type="text" 
                                name="name" 
                                label="Hotel Name" 
                                :options="[]" 
                                :value="old('name')" 
                                class="!bg-gray-100 !form-control-lg placeholder:text-textmuted"/>
                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <x-form-field 
                                    type="select" 
                                    name="hotel_category" 
                                    label="Hotel Category" 
                                    :options="$hotel_categories->pluck('name', 'id')" 
                                    :value="old('hotel_category')" 
                                    class="form-control-lg"
                                />
                                @error('hotel_category')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <livewire:destination-wise-division :oldDivision="old('division')" />
                        <div class="grid grid-cols-4 gap-4">
                            <div class="space-y-2">
                                <x-phone-input 
                                    id="mobile" 
                                    name="mobile" 
                                    placeholder="Example: 9876543210" 
                                    :countries="['+91']" 
                                    selected-country="{{ old('mobile-country', '+91') }}" 
                                    :value="old('mobile')" 
                                />
                                @error('mobile')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="space-y-2">
                                <x-phone-input 
                                    id="whatsapp" 
                                    name="whatsapp" 
                                    placeholder="Example: 9876543210" 
                                    :countries="['+91']" 
                                    selected-country="{{ old('whatsapp_country', '+91') }}" 
                                    :value="old('whatsapp')" 
                                />
                                @error('whatsapp')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="space-y-2">
                                <x-form-field 
                                    type="text" 
                                    name="email" 
                                    label="Email 1" 
                                    :options="[]" 
                                    :value="old('email')"
                                    class="placeholder:text-textmuted"
                                />
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="space-y-2">
                                <x-form-field 
                                    type="text" 
                                    name="secndary_email" 
                                    label="Email 2" 
                                    :options="[]" 
                                    :value="old('secndary_email')"
                                    class="placeholder:text-textmuted"
                                />
                                @error('secndary_email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-3 gap-3">
                            <div class="space-y-2">
                                <x-form-field 
                                    type="textarea" 
                                    name="address" 
                                    label="Hotel Address" 
                                    :options="[]" 
                                    :value="old('address')"
                                    class="placeholder:text-textmuted"
                                />
                                @error('address')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <span class="badge gap-2 bg-primary/10 text-primary">
                            <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                            HOTEL IMAGES
                        </span>
                        <div class="container mx-auto px-4">
                            <livewire:image-preview 
                                :oldImages="old('images', [])" 
                                inputName="images[]" 
                            />
                            @error('images')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <span class="badge gap-2 bg-primary/10 text-primary">
                            <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                            ROOMS INFORMATION
                        </span>
                    <div class="container mx-auto px-4 my-4" id="room_div">
                       @php
                           $room_loop = 0;
                       @endphp
                        {{-- For old return data --}}
                        @if(old('room') || old('no_of_room') || old('capacity') || old('no_of_bed') || old('mattress') || old('room_type'))
                            @php
                                $room_item = old('room', ['']); 
                                $no_of_room_item = old('no_of_room', ['']);
                                $capacity_item = old('capacity', ['']);
                                $no_of_bed_item = old('no_of_bed', ['']);
                                $mattress_item = old('mattress', ['']);
                                $room_type_item = old('room_type', ['']);
                                $ammenity_item = old('ammenity', ['']);
                                // dd($ammenity_item);
                                $room_loop = count($room_item);
                            @endphp
                            @foreach($room_item as $old_key => $value)
                                <div id="old_return_data">
                                    <div class="sm:flex flex-wrap rounded-sm mt-2">
                                        <div class="w-full sm:w-auto w-15">
                                            <x-input-label for="" class="label-text" :value="__('Room Name')" />
                                            <x-select-field 
                                                name="room[]" 
                                                class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5" 
                                                ariaLabel="Room name" 
                                                selectedText="Select Room"
                                                :options="$room_categories->pluck('name', 'name')->toArray()"
                                                :selected="old('room')[$old_key] ?? ''"
                                            />
                                            @error("room.$old_key")
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full sm:w-auto w-12">
                                            <x-input-label for="" class="label-text" :value="__('No of Rooms')" />
                                            <x-input-field 
                                                type="number" 
                                                name="no_of_room[]" 
                                                placeholder="No of Room" 
                                                ariaLabel="no of room" 
                                                class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                                                value="{{$no_of_room_item[$old_key]}}" 
                                            />
                                            @error("no_of_room.$old_key")
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full sm:w-auto w-12">
                                            <x-input-label for="" class="label-text" :value="__('Capacity')" />
                                            <x-input-field 
                                                type="number" 
                                                name="capacity[]" 
                                                placeholder="Capacity" 
                                                ariaLabel="capacity" 
                                                class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                                                value="{{ $capacity_item[$old_key] }}" 
                                            />
                                            @error("capacity.$old_key")
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full sm:w-auto w-12">
                                            <x-input-label for="" class="label-text" :value="__('No of Bed')" />
                                            <x-input-field 
                                                type="number" 
                                                name="no_of_bed[]" 
                                                placeholder="No of Bed" 
                                                ariaLabel="no_of_bed" 
                                                class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                                                value="{{ $no_of_bed_item[$old_key] }}" 
                                            />
                                            @error("no_of_bed.$old_key")
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full sm:w-auto w-12">
                                            <x-input-label for="" class="label-text" :value="__('mattress')" />
                                            <x-input-field 
                                                type="number" 
                                                name="mattress[]" 
                                                placeholder="Mattress" 
                                                ariaLabel="mattress" 
                                                class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                                                value="{{ $mattress_item[$old_key] }}" 
                                            />
                                            @error("mattress.$old_key")
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full sm:w-auto w-15">
                                            <x-input-label for="" class="label-text" :value="__('Room Type')" />
                                            <x-select-field 
                                                name="room_type[]" 
                                                class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5" 
                                                ariaLabel="room type" 
                                                selectedText="Select type"
                                                :options="['AC' => 'AC', 'Non-AC' => 'Non-AC']"
                                                :selected="$room_type_item[$old_key] ?? ''"
                                            />
                                            @error("room_type.$old_key")
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="w-full sm:w-auto w-11">
                                            <x-input-label for="" class="label-text" :value="__('Ammenity')" />
                                            <div class="select-group">
                                                <button type="button" class="show-btm bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Choose Amminity
                                                </button>
                                                <div class="list-group" >
                                                    @foreach($hotel_ammenities as $ammenity_key=> $ammenity)
                                                    @php
                                                        // $is_checked = isset($ammenity_item[$old_key+1]) && is_array($ammenity_item[$old_key+1]) && in_array(ucwords($ammenity->name), $ammenity_item[$old_key+1]);
                                                    @endphp
                                                        <label>
                                                            <x-input-field 
                                                                type="checkbox" 
                                                                name="ammenity[{{$old_key}}][]" 
                                                                placeholder="" 
                                                                ariaLabel="" 
                                                                class="" 
                                                                value="{{ucwords($ammenity->name)}}"
                                                                {{-- @if($is_checked) checked @endif   --}}
                                                            /> 
                                                            {{ucwords($ammenity->name)}}
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @error('ammenity.*')
                                                <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        @if($old_key<=0)
                                            <div class="w-full sm:w-auto w-10 mt-22">
                                                <button type="button" class="change-text-button ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave me-[0.375rem]" id="add_more_item">
                                                    <i class="ri-add-circle-line add-more-btn"></i>
                                                </button>
                                            </div>
                                        @else
                                            <div class="w-full sm:w-auto w-10">
                                                <button type="button" class="change-text-button ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave me-[0.375rem]" onclick="removeRoom(this)">
                                                    <i class="ri-delete-back-2-line remove-btn"></i>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @else
                        @php
                            $room_loop = 1;
                        @endphp
                            <div id="room_single_data">
                                <div class="sm:flex flex-wrap rounded-sm mt-2">
                                    <div class="w-full sm:w-auto w-15">
                                        <x-input-label for="" class="label-text" :value="__('Room Category')" />
                                        <x-select-field 
                                            name="room[]" 
                                            class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5" 
                                            ariaLabel="Room name" 
                                            selectedText="Select Room"
                                            :options="$room_categories->pluck('name', 'name')->toArray()"
                                            :selected="old('room')[0] ?? ''"
                                        />
                                        @error('room.*')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-auto w-12">
                                        <x-input-label for="" class="label-text" :value="__('No of Rooms')" />
                                        <x-input-field 
                                            type="number" 
                                            name="no_of_room[]" 
                                            placeholder="No of Room" 
                                            ariaLabel="no of room" 
                                            class="ti-form-input rounded-none placeholder:text-textmuted text-sm @error('no_of_room.*') border-red-500 @enderror form-control-sm" 
                                            value="{{ old('no_of_room.*') }}" 
                                        />
                                        @error('no_of_room.*')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-auto w-12">
                                        <x-input-label for="" class="label-text" :value="__('Capacity')" />
                                        <x-input-field 
                                            type="number" 
                                            name="capacity[]" 
                                            placeholder="Capacity" 
                                            ariaLabel="capacity" 
                                            class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                                            value="{{ old('capacity.*') }}" 
                                        />
                                        @error('capacity.*')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-auto w-12">
                                        <x-input-label for="" class="label-text" :value="__('No of Bed')" />
                                        <x-input-field 
                                            type="number" 
                                            name="no_of_bed[]" 
                                            placeholder="No of Bed" 
                                            ariaLabel="no_of_bed" 
                                            class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                                            value="{{ old('no_of_bed.*') }}" 
                                        />
                                        @error('no_of_bed')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-auto w-12">
                                        <x-input-label for="" class="label-text" :value="__('Mattress')" />
                                        <x-input-field 
                                            type="number" 
                                            name="mattress[]" 
                                            placeholder="Mattress" 
                                            ariaLabel="mattress" 
                                            class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                                            value="{{ old('mattress.*') }}" 
                                        />
                                        @error('mattress.*')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-auto w-15">
                                        <x-input-label for="" class="label-text" :value="__('Room Type')" />
                                        <x-select-field 
                                            name="room_type[]" 
                                            class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5" 
                                            ariaLabel="room type" 
                                            selectedText="Select type"
                                            :options="['AC' => 'AC', 'Non-AC' => 'Non-AC']"
                                            :selected="old('room_type')[0] ?? ''"
                                        />
                                        @error('room_type.*')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-auto w-11">
                                        <x-input-label for="" class="label-text" :value="__('Ammenity')" />
                                        <div class="select-group">
                                            <button type="button" class="show-btm bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Choose Amminity
                                            </button>
                                            <div class="list-group" >
                                                @foreach($hotel_ammenities as $ammenity)
                                                    <label>
                                                        <x-input-field 
                                                            type="checkbox" 
                                                            name="ammenity[1][]" 
                                                            placeholder="" 
                                                            ariaLabel="" 
                                                            class="" 
                                                            value=" {{ucwords($ammenity->name)}}" 
                                                        /> 
                                                        {{ucwords($ammenity->name)}}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                        @error('ammenity.*')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="w-full sm:w-auto w-10 mt-22">
                                        <button type="button" class="change-text-button ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave me-[0.375rem]" id="add_more_item">
                                            <i class="ri-add-circle-line add-more-btn"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div id="room_appended_data">

                        </div>

                    </div>
                    <div class="flex justify-end">
                        
                        <x-input-field type="hidden" name="user_id" value="{{auth()->user()->id}}" />
                        <x-form-submit-button text="Submit"
                            class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->
@endsection

@section('scripts')
<!-- Jquery Cdn -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!-- Select2 Cdn -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@vite('resources/assets/js/select2.js')
<script>
document.addEventListener('DOMContentLoaded', function () {
    // First Item
   
    const roomAppendedData = document.getElementById('room_appended_data');
    const addMoreButton = document.getElementById('add_more_item');

  
   // Add more items dynamically
    const hotelAmenities = @json($hotel_ammenities); // Laravel data to JavaScript
    let appendCounter = "{{$room_loop}}";

    addMoreButton.addEventListener("click", function (e) {
        e.preventDefault();
        const newRoomDiv = document.createElement("div");
        appendCounter++;
        newRoomDiv.classList.add("sm:flex", "flex-wrap", "rounded-sm", "mt-2");

        // Static HTML for most inputs
        newRoomDiv.innerHTML = `
            <div class="w-full sm:w-auto w-15">
                <select name="room[]" class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5">
                     <option value="" selected hidden>Select Room</option>
                    ${Object.entries(@json($room_categories->pluck('name', 'name'))).map(([id, name]) => `<option value="${name}">${name}</option>`).join('')}
                </select>
            </div>
            <div class="w-full sm:w-auto w-12">
                <x-input-field 
                    type="number" 
                    name="no_of_room[]" 
                    placeholder="No of Room" 
                    ariaLabel="no of room" 
                    class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                    value="" 
                />
            </div>
            <div class="w-full sm:w-auto w-12">
                <x-input-field 
                    type="number" 
                    name="capacity[]" 
                    placeholder="Capacity" 
                    ariaLabel="capacity" 
                    class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                    value="" 
                />
            </div>
            <div class="w-full sm:w-auto w-12">
                <x-input-field 
                    type="number" 
                    name="no_of_bed[]" 
                    placeholder="No of Bed" 
                    ariaLabel="no_of_bed" 
                    class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                    value="" 
                />
            </div>
            <div class="w-full sm:w-auto w-12">
                <x-input-field 
                    type="number" 
                    name="mattress[]" 
                    placeholder="Mattress" 
                    ariaLabel="mattress" 
                    class="ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" 
                    value="" 
                />
            </div>
            <div class="w-full sm:w-auto w-15">
                <x-select-field 
                    name="room_type[]" 
                    class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5" 
                    ariaLabel="room type" 
                    selectedText="Select type"
                    :options="['AC' => 'AC', 'Non-AC' => 'Non-AC']"
                    :selected="''"
                />
            </div>
            <div class="w-full sm:w-auto w-11">
                <div class="select-group">
                    <button type="button" class="show-btm bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Choose Amenity</button>
                    <div class="list-group" ></div>
                </div>
            </div>
            <div class="w-full sm:w-auto w-10">
                <button type="button" class="change-text-button ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave me-[0.375rem]" onclick="removeRoom(this)">
                    <i class="ri-delete-back-2-line remove-btn"></i>
                </button>
            </div>
        `;

        // Dynamically add amenities checkboxes
        const listGroup = newRoomDiv.querySelector(".list-group");
        hotelAmenities.forEach((amenity) => {
            const label = document.createElement("label");
            label.innerHTML = `
                <input type="checkbox" class="form-control" name="ammenity[${appendCounter}][]" value="${amenity.name}" /> ${amenity.name}
            `;
            listGroup.appendChild(label);
        });

        // Append the newly created room div to the container
        roomAppendedData.appendChild(newRoomDiv);
    });
// Remove a room
function removeRoom(button) {
    const roomDiv = button.closest("div.sm\\:flex");
    roomDiv.remove();
}

});

// Function to remove a room input group
function removeRoom(button) {
    const roomDiv = button.closest('.flex-wrap');
    if (roomDiv) roomDiv.remove();
}
</script>
@endsection

