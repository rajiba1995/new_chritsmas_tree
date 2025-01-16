<table class="table whitespace-nowrap min-w-full">
    <thead>
        <tr>
            <th>SL</th>
            @foreach ($fields as $field)
                <th scope="col" class="text-start">{{ strtoupper(str_replace('_', ' ', $field)) }}</th>
            @endforeach
            @if($dataType!='country_codes')
            <th scope="col" class="text-start">ACTIONS</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $index => $item)
            @if ($dataType === 'leads')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="text-start !p-1">{{ $index + 1 }}</td>
                    <td>
                        <p class="badge bg-primary text-white">{{$item->unique_id }}</p>
                        <p class="mt-1"> {{ $item->customer_name }}
                                <span class="badge gap-2 bg-success/10 text-success">
                                    <span class="w-1.5 h-1.5 inline-block bg-success rounded-full"></span>Online
                                </span>
                        </p>
                        @php
                            $createdAt = \Carbon\Carbon::parse($item->created_at);
                            $diffInMinutes = $createdAt->diffInMinutes();
                            $hours = floor($diffInMinutes / 60);
                            $minutes = $diffInMinutes % 60;
                        @endphp
                        <button type="button" class="badge bg-outline-secondary my-3 me-2">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y h.i A') }}
                            <span class="badge bg-secondary ms-2 text-white"> {{ $hours > 0 ? $hours . ' hr' : '' }} {{ $minutes > 0 ? $minutes . ' min' : '' }} ago</span>
                        </button>
                    </td>
                    <td>
                        {{ $item->lead_source }} 
                        <span class="badge bg-primary text-white">{{ $item->lead_type }} </span>
                    </td>
                    <td>
                        <div>
                            <i class="fa-regular fa-envelope text-danger"></i>
                            {{ $item->customer_email }}
                        </div>
                        <div>
                            <i class="fa-solid fa-phone text-success"></i>
                            +{{ $item->country_code }}{{ $item->customer_mobile }}
                        </div>
                        <div>
                            <i class="fa-brands fa-whatsapp text-success"></i>
                            +{{ $item->country_code }}{{ $item->customer_whatsapp }}
                        </div>
                    </td>
                    <td>
                        <div>
                            @if($item->package)
                            <span class="badge bg-outline-primary">{{ $item->package }}</span>
                            @endif
                        </div>
                        <div>
                            <i class="ri-map-pin-line"></i>
                            {{ $item->city?$item->city->name:"..." }}
                        </div>
                        <div>
                            <i class="fa-regular fa-clock text-danger"></i>
                            Start Date: {{ \Carbon\Carbon::parse($item->travel_date)->format('d M Y') }}
                        </div>
                        <div>
                            <i class="fa-regular fa-clock text-danger"></i>
                            Trip Duration: {{ $item->travel_duration }}
                        </div>
                    </td>
                    <td>
                        <a href="javascript:void(0);" class="hs-dropdown-toggle badge {{ \App\Helpers\CustomHelper::getLeadStatus($item->status)['color'] }} text-white" data-hs-overlay="#leads-{{ $item->id }}">
                            {{ \App\Helpers\CustomHelper::getLeadStatus($item->status)['name'] }}
                        </a>
                    </td>
                    <td>
                        <a class="ti-btn ti-btn-outline-primary ti-btn-wave !py-1 !px-2 me-[0.375rem]" >View</a>
                        <button class="ti-btn ti-btn-outline-primary ti-btn-wave !py-1 !px-2 me-[0.375rem]" title="Edit Lead"><i class="fa-regular fa-pen-to-square"></i>Edit</button>

                    </td>
                    <x-global-modal
                        id="{{ $item->id }}"
                        type="leads"
                        title="Update Lead Status for {{ $item->unique_id }}"
                        content="Your content here"
                        :statuses="$extra['status']"
                        formAction="{{ route('admin.leads.update_status', $item->id) }}"
                        formMethod="POST"
                        formButton="submit"
                        selectedStatus="{{$item->status}}"
                    />
                </tr>
            @elseif($dataType=='country_codes')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" style="text-align: center;" class="text-start !p-1">{{ $index + 1 }}</td>
                    <td scope="row" style="text-align: center;" class="!p-1">{{$item->country_code}}</td>
                    <td scope="row" style="text-align: center;" class="!p-1">{{$item->country_name}}</td>
                    <td scope="row" style="text-align: center;" class="!p-1">{{$item->phone_code}}</td>
                    <td scope="row" style="text-align: center;" class="!p-1">{{$item->phone_length}}</td>
                </tr>
            @elseif($dataType=='states')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="text-start !p-1">{{ $index + 1 }}</td>
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">{{$item->country?$item->country->country_name:""}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="State" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.state.index',['update_id'=>$item->id]) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.state.destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                </tr>
            @elseif($dataType=='cab')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="" width="4%">
                        <span class="ti-btn ti-btn-sm ti-btn-soft-info"><strong>{{ $index + 1 }}</strong></span></td>
                    <td scope="row" class="!p-1" width="20%">
                        <img src="{{asset('assets/img/cab.png')}}" alt="Cab Image" width="90%">
                    </td>
                    <td scope="row" class="!p-1">{{$item->title}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="Cab" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.cab.index',['update_id'=>$item->id]) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.cab.destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                </tr>
            @elseif($dataType=='division')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="text-start !p-1">{{ $index + 1 }}</td>
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">{{$item->DestinationData?$item->DestinationData->name:""}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="City" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.division.index',['update_id'=>$item->id]) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.division.destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                </tr>
            @elseif($dataType=='categories')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="text-start !p-1">{{ $index + 1 }}</td>
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="Category" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.category.index',['update_id'=>$item->id]) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.category.destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                </tr>
            @elseif($dataType=='roomCategories')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="text-start !p-1">{{ $index + 1 }}</td>
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="RoomCategory" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.room.category.index',['update_id'=>$item->id]) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.room.category.destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                </tr>
            @elseif($dataType=='ammenities')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="text-start !p-1">{{ $index + 1 }}</td>
                    <td scope="row" class="!p-1">{{$item->name}}</td>
                    <td scope="row" class="!p-1">
                        <livewire:master-status-toggle 
                            modelName="Ammenity" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="!p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.ammenity.index',['update_id'=>$item->id]) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.ammenity.destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                </tr>
            @elseif($dataType==='hotel')
                <tr class="text-grey" id="delete{{$item->id}}">
                    <td scope="row" class="align-top text-start !p-1" width="5%">{{ $index + 1 }}</td>
                    <td scope="row" class="align-top !p-1 w-[25%]">
                        <div class="mb-1 text-[0.875rem] font-semibold">
                            <a href="javascript:void(0);" class="badge bg-danger/10 text-danger custom_button_text">{{$item->name}}</a>
                        </div>
                        <div class="flex items-center">
                            <div class="me-4">
                                <span class="avatar avatar-xxl bg-light">
                                    <img src="{{asset('build/assets/images/logo/hotel.jpg')}}" alt="">
                                </span>
                            </div>
                            <div>
                                <div class="mb-1 flex items-center align-middle">
                                    <span class="me-1">Destination:</span><span class="font-semibold text-textmuted">{{$item->DestinationData?$item->DestinationData->name:""}}</span>
                                </div>
                                <div class="mb-1 flex items-center align-middle">
                                    <span class="me-1">City:</span><span class="font-semibold text-textmuted">{{$item->DivisionData?$item->DivisionData->name:""}}</span>
                                </div>
                                <div class="mb-1 flex items-center align-middle">
                                    <span class="me-1">Category:</span><span class="font-semibold text-textmuted">{{$item->CategoryData?$item->CategoryData->name:""}}</span>
                                </div>
                                <div class="mb-1 flex items-center align-middle">
                                    <i class="fa-solid fa-phone text-success mr-2"></i> <span class="font-semibold text-textmuted"> {{ $item->phone_code }}{{ $item->mobile_number }} </span>
                                </div>
                                <div class="mb-1 flex items-center align-middle">
                                    <i class="fa-brands fa-whatsapp text-success mr-2"></i>  <span class="font-semibold text-textmuted">{{ $item->phone_code }}{{ $item->whatsapp_number }}</span>
                                </div>
                                <div class="mb-1 flex items-center align-middle">
                                    <i class="fa-regular fa-envelope text-danger mr-2"></i>  <span class="font-semibold text-textmuted">{{ $item->email1 }}</span>
                                </div>
                                <div class="mb-1 flex items-center align-middle">
                                    <i class="fa-regular fa-envelope text-danger mr-2"></i>  <span class="font-semibold text-textmuted">{{ $item->email2 }}</span>
                                </div>
                                <div class="mb-1 flex items-center align-middle">
                                    <span class="me-1">No of Rooms:</span><span class="font-semibold text-textmuted">{{$item->number_of_rooms}}</span>
                                </div>
                            </div>
                        </div>
                        <button 
                        class="badge bg-outline-warning !py-1 !px-2 custom_button_text" 
                            data-title="" 
                            id="" 
                            onclick="showImages(this)" 
                            data-images='@json($item->images->pluck("image_path"))'
                            >
                            View Gallery
                        </button>
                        
                    </td>
                    <td scope="row" class="align-top !p-1">
                        <table class="table min-w-full hotel_room_table">
                            <thead>
                                <tr class="alert alert-primary">
                                    <th>Room Name</th>
                                    <th>No of Room</th>
                                    <th>Capacity</th>
                                    <th>Mattress</th>
                                    <th>No of Beds</th>
                                    <th>Ammenities</th>
                                    <th>Price Chart</th>
                                    <th>Inventory</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($item->rooms as $room)
                                @php
                                     $isComplete  = \App\Helpers\CustomHelper::IncompleteHotelPriceChart($item->id,$room->id);
                                @endphp
                                <tr>
                                    <td class="align-top">{{$room->room_name}}</td>
                                    <td class="align-top">{{$room->no_of_rooms}}</td>
                                    <td class="align-top">{{$room->capacity}}</td>
                                    <td class="align-top">{{$room->no_of_beds}}</td>
                                    <td class="align-top">{{$room->mattress}}</td>
                                    <td class="align-top text-center">
                                        <div class="badge-container">
                                            <p class="badge rounded-full bg-light text-dark mb-1 ammenity_icon" 
                                                data-title="{{$room->ammenities?$room->ammenities:"No Data Found"}}" 
                                                id="amenity-{{$room->id}}" 
                                                onclick="showAmenities(this)">
                                                    <i class="ri-eye-line"></i>
                                                </p>
                                        </div>
                                    </td>
                                    <td class="align-top">
                                        
                                        <p class="ti-btn ti-btn-sm ti-btn-soft-{{$isComplete?"secondary":"danger"}} !border !border-{{$isComplete?"secondary":"danger"}}/20 ammenity_icon hs-dropdown-toggle price_chart_icon" onclick="openModal('price-chart{{$room->id}}')">
                                            <i class="fa-sharp fa-solid fa-indian-rupee-sign"></i>
                                        </p>
                                        
                                        {{-- Modal for Price Chart --}}
                                        <div id="price-chart{{$room->id}}" class="hs-overlay hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" onclick="closeModal('price-chart{{$room->id}}')">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_width bg-white rounded-lg" onclick="event.stopPropagation()">
                                                <div class="ti-modal-content p-20">
                                                    <div class="ti-modal-header">
                                                        <h6 class="ti-modal-title">
                                                           Price Chart For <span class="badge gap-2 bg-primary/10 text-primary">{{$room->room_name}}</span>
                                                        </h6>
                                                    </div>
                                                    <div class="ti-modal-body text-start">
                                                        <form method="POST" id="hotelPriceForm{{ $room->id }}">
                                                            @csrf
                                                            <p class="badge gap-2 bg-danger/10 text-danger">
                                                                <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full"></span> Actual Price Chart
                                                                <x-input-field type="hidden" name="title[]" value="Actual Price Chart" />
                                                                <x-input-field type="hidden" name="hotel_id" value="{{$item->id}}" />
                                                                <x-input-field type="hidden" name="room_id" value="{{$room->id}}" />
                                                                <x-input-field type="hidden" name="chart_type[]" value="1" />
                                                            </p>
                                                            <div class="table-responsive my-4">
                                                                <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full price_chat_table">
                                                                    <thead>
                                                                        <tr class="border-b !border-primary/30">
                                                                            <th scope="col" class="!text-center">Rack Rate</th>
                                                                            <th scope="col" class="!text-center">GST</th>
                                                                            @foreach ($extra['hotel_seasion_plan'] as $plan_key => $plan_item)
                                                                                <x-input-field type="hidden" name="plan_title[0][]" value="{{ucwords($plan_item->title)}}" />
                                                                                <th scope="col" class="!text-center">{{ucwords($plan_item->title)}}</th>
                                                                            @endforeach
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <x-input-field type="text" name="rack_rate[]" placeholder="" ariaLabel="" class="form-control form-control-sm cw-70 " value="" onkeyup="validateNumber(this)"/>
                                                                            </th>
                                                                            <th scope="row">
                                                                                <x-input-field type="text" name="gst[]" placeholder="" ariaLabel="" class="form-control form-control-sm cw-70" value="" onkeyup="validateNumber(this)"/>
                                                                            </th>
                                                                            @foreach ($extra['hotel_seasion_plan'] as $plan_key => $plan_item)
                                                                                @if(isset($plan_item->plan_item))
                                                                                @php
                                                                                    $plan_items = explode(', ',$plan_item->plan_item);
                                                                                @endphp
                                                                                <td>
                                                                                    @foreach ($plan_items as $k=> $item_value)
                                                                                        <div class="flex gap-4 items-center mb-2 justify-between">
                                                                                            <x-input-field type="hidden" name="plan_item[0][{{ucwords($plan_item->title)}}][]" value="{{strtoupper($item_value)}}" />
                                                                                            <label  class="col-form-label">
                                                                                                <p class="badge gap-2 bg-secondary/10 text-secondary">
                                                                                                    <span class="w-1.5 h-1.5 inline-block bg-secondary rounded-full"></span>{{strtoupper($item_value)}}
                                                                                                </p>
                                                                                            </label>
                                                                                            <x-input-field type="text" name="item_price[0][{{ucwords($plan_item->title)}}][]" value="{{\App\Helpers\CustomHelper::getHotelPriceChart($item->id,$room->id, 'Actual Price Chart', ucwords($plan_item->title), strtoupper($item_value))}}" placeholder="" ariaLabel="" class="form-control cw-60 form-control-sm max-w-16" onkeyup="validateNumber(this)"/>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </td>
                                                                                @endif
                                                                            @endforeach
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                            <p class="badge gap-2 bg-danger/10 text-danger">
                                                                <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full"></span> Selling Price Chart
                                                                <x-input-field type="hidden" name="title[]" value="Selling Price Chart" />
                                                                <x-input-field type="hidden" name="chart_type[]" value="2" />
                                                            </p>
                                                            <div class="table-responsive my-4">
                                                                <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full price_chat_table">
                                                                    <thead>
                                                                        <tr class="border-b !border-primary/30">
                                                                            <th scope="col" class="!text-center">Rack Rate</th>
                                                                            <th scope="col" class="!text-center">GST</th>
                                                                            @foreach ($extra['hotel_seasion_plan'] as $plan_key => $plan_item)
                                                                                <x-input-field type="hidden" name="plan_title[1][]" value="{{ucwords($plan_item->title)}}" />
                                                                                <th scope="col" class="!text-center">{{ucwords($plan_item->title)}}</th>
                                                                            @endforeach
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th scope="row">
                                                                                <x-input-field type="text" name="rack_rate[]" placeholder="" ariaLabel="" class="form-control form-control-sm cw-70" value="" onkeyup="validateNumber(this)"/>
                                                                            </th>
                                                                            <th scope="row">
                                                                                <x-input-field type="text" name="gst[]" placeholder="" ariaLabel="" class="form-control form-control-sm cw-70" value="" onkeyup="validateNumber(this)"/>
                                                                            </th>
                                                                            @foreach ($extra['hotel_seasion_plan'] as $plan_key => $plan_item)
                                                                                @if(isset($plan_item->plan_item))
                                                                                @php
                                                                                    $plan_items = explode(', ',$plan_item->plan_item);
                                                                                   
                                                                                @endphp
                                                                                <td>
                                                                                    @foreach ($plan_items as $k=> $item_value)
                                                                                        <div class="flex gap-4 items-center mb-2 justify-between">
                                                                                            <x-input-field type="hidden" name="plan_item[1][{{ucwords($plan_item->title)}}][]" value="{{strtoupper($item_value)}}" />
                                                                                            <label  class="col-form-label">
                                                                                                <p class="badge gap-2 bg-secondary/10 text-secondary">
                                                                                                    <span class="w-1.5 h-1.5 inline-block bg-secondary rounded-full"></span>{{strtoupper($item_value)}}
                                                                                                </p>
                                                                                            </label>
                                                                                            <x-input-field type="text" name="item_price[1][{{ucwords($plan_item->title)}}][]" value="{{\App\Helpers\CustomHelper::getHotelPriceChart($item->id,$room->id, 'Selling Price Chart', ucwords($plan_item->title), strtoupper($item_value))}}" placeholder="" ariaLabel="" class="form-control cw-60 form-control-sm max-w-16" onkeyup="validateNumber(this)"/>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </td>
                                                                                @endif
                                                                            @endforeach
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="flex justify-end">
                                                                <button type="button" 
                                                                    class="ti-btn ti-btn-primary-full ti-btn-loader !py-1 !px-2" 
                                                                    onclick="PriceChartFormSubmit(this, {{ $room->id }})">
                                                                    <span>Update</span> <span class="loading"></span>
                                                                </button>
                                                            </div>
                                                            <div class="form-message mt-4 text-sm flex justify-end"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td class="align-top"></td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="8"><p>No rooms available.</p></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </td>
                    <td scope="row" class="align-top !p-1">
                        <livewire:master-status-toggle 
                            modelName="Hotel" 
                            :item="$item" 
                            wire:key="status-toggle-{{ $item->id }}" 
                        />
                    </td>
                    <td scope="row" class="align-top !p-1" width="10%">
                        <div>
                            <x-action-button type="edit" url="{{ route('admin.hotel.edit',$item->id) }}" itemId="{{ $item->id }}" />
                            <x-action-button type="delete" url="{{ route('admin.hotel.destroy', $item->id) }}" itemId="{{ $item->id }}" />
                        </div>
                    </td>
                </tr>
            @else
            @endif
        @endforeach
    </tbody>
</table>
