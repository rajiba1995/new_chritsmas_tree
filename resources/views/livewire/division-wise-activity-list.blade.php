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
                    @if(count($divisions)>0)
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
                                    Divisions
                                 </span>
                            </label>
                            <select 
                                name="division_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="FilterCabByDivision($event.target.value)" 
                                wire:key="division-0">
                                <option value="" hidden>Filter Divisions</option>
                                @foreach ($divisions as $division_item)
                                    <option 
                                        value="{{ $division_item->id }}" 
                                        {{$selectedDivision==$division_item->id?"selected":""}} 
                                        wire:key="division-{{ $division_item->id }}">
                                        {{ $division_item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 hover:grid-cols-6">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                   Type
                                </span>
                            </label>
                            <select 
                                name="payment_type" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="FilterCabByPaymentType($event.target.value)" 
                                wire:key="select-payment-type">
                                <option value="" hidden>Filter Type</option>
                                {{-- <option value="0" wire:key="select-payment-type-0">All</option> --}}
                                    <option value="PAID" wire:key="select-payment-type-1">Paid</option>
                                    <option value="UNPAID" wire:key="select-payment-type-2">Unpaid</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="prism-toggle mt-5">
                        <a href="javascript:void(0)" wire:click="OpenNewCabModal('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add New Activity</a>
                    </div>
                    @endif
                    <div class="mt-5">
                        <a href="{{route('admin.route.division_wise_activity_list')}}" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="flex justify-between">
                        <div class="badge bg-outline-success cursor-pointer">
                            <span>No of Result: {{$division_wise_cabs->count()}}</span>
                        </div>
                        <div>
                            {{-- <input type="text" class="badge bg-outline-primary !w-56" placeholder="Quick Search.."> --}}
                            {{-- @foreach ($seasion_types as $types_item)
                            <div class="badge bg-outline-primary cursor-pointer {{$selected_season_type==$types_item->id?"active-primary-badge":""}}" wire:click="FilterCabBySeasionType({{$types_item->id}})" wire:key="seasion-type-{{ $types_item->id }}">
                                <span>{{ strtoupper($types_item->title) }}</span>
                            </div>
                            @endforeach --}}
                            {{-- <div class="badge bg-outline-primary cursor-pointer {{$selected_season_type==0?"active-primary-badge":""}}" wire:click="FilterCabBySeasionType(0)" wire:key="seasion-type-0">
                                <span>ALL</span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="table-responsive">
                            <table
                                class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30">
                                        <th scope="col" class="!text-center">SL No.</th>
                                        <th scope="col" class="!text-center">Activity Name</th>
                                        {{-- <th scope="col" class="!text-center">Seasion</th> --}}
                                        <th scope="col" class="!text-center">Activity Type</th>
                                        <th scope="col" class="!text-center">Activity Price</th>
                                        <th scope="col" class="!text-center">Ticket Price (PP)</th>
                                        <th scope="col" class="!text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($division_wise_cabs as $key=>$cab_item)
                                    <tr>
                                        <th scope="row" class="!text-center">
                                            <span class="badge bg-primary/10 text-primary">
                                               {{$key+1}}
                                            </span>
                                        </th>
                                        <td class="!text-center" wire:key="cab-item-{{$cab_item->id}}">
                                            <span>{{ucwords($cab_item->name)}}</span> 
                                            <span class="button-control" wire:click="ShowItemContent({{$cab_item->id}})"></span>
                                        </td>
                                        
                                        {{-- <td class="!text-center">
                                            @if($cab_item->seasonType)
                                                <span class="badge badge-{{ $cab_item->seasion_type_id == 3 ? 'purple' : ($cab_item->seasion_type_id == 1 ? 'info' : 'warning') }}-gradient">
                                                    {{$cab_item->seasonType?$cab_item->seasonType->title:"N/A"}}
                                                </span>
                                            @endif
                                        </td> --}}

                                        <td class="!text-center">
                                            <span class="badge {{$cab_item->type=="PAID"?"bg-primary text-light":"bg-light text-dark"}}">{{$cab_item->type}}</span>
                                        </td>
                                        <td class="!text-center">
                                           {{env('DEFAULT_CURRENCY_SYMBOL')}}{{number_format($cab_item->price, 2)}}
                                        </td>
                                        <td class="!text-center">
                                            {{env('DEFAULT_CURRENCY_SYMBOL')}}{{number_format($cab_item->ticket_price,2)}}
                                        </td>
                                        <td class="!text-center">
                                            <x-tooltip-button 
                                                button-class="ti-btn-soft-primary" 
                                                border-class="primary" 
                                                action="ShowItemImage"
                                                :item-id="$cab_item->id" 
                                                key="show-item-image" 
                                                icon="ti ti-photo" 
                                                tooltip="View Image"
                                            />

                                            <x-tooltip-button 
                                                button-class="ti-btn-soft-info" 
                                                border-class="info" 
                                                action="EditActivityItem" 
                                                :item-id="$cab_item->id" 
                                                key="edit-item" 
                                                icon="ti ti-pencil" 
                                                tooltip="Edit Item"
                                            />

                                            <x-tooltip-button 
                                                button-class="ti-btn-soft-danger" 
                                                border-class="danger" 
                                                action="DeleteActivityItem" 
                                                :item-id="$cab_item->id" 
                                                key="delete-item" 
                                                icon="ti ti-trash" 
                                                tooltip="Delete Item"
                                            />

                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">
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
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_sm_width bg-white rounded-lg">
            <div class="ti-modal-content p-20">
                <div class="ti-modal-header flex justify-end items-center">
                    <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="OpenNewCabModal('no')">
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
                                    Divisions
                                </span>
                            </label>
                            <select 
                                name="division_list" 
                                class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                wire:change="FilterCabByDivision($event.target.value)" 
                                wire:key="division-0">
                                <option value="" hidden>Filter Divisions</option>
                                @foreach ($divisions as $division_item)
                                    <option 
                                        value="{{ $division_item->id }}" 
                                        {{$selectedDivision==$division_item->id?"selected":""}} 
                                        wire:key="division-{{ $division_item->id }}">
                                        {{ $division_item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="my-3">
                        <div clas="flex item-center">
                            <label for="">
                                <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                    Seasion Type
                                 </span>
                            </label>
                            @foreach ($seasion_types as $types_item)
                            <div class="badge bg-outline-primary cursor-pointer !py-2 {{$selected_season_type==$types_item->id?"active-primary-badge":""}}" wire:click="FilterCabBySeasionType({{$types_item->id}})" wire:key="seasion-type-{{ $types_item->id }}">
                                <span>{{ strtoupper($types_item->title) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div> --}}
                    <form wire:submit.prevent="submitForm">
                        <div class="table-responsive">
                            <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30">
                                        <th scope="col" class="!text-center w-1/2">Activity Name</th> <!-- Example for 50% width -->
                                        <th scope="col" class="!text-center w-1/5">Activity Type</th> <!-- Example for 20% width -->
                                        <th scope="col" class="!text-center w-1/8">Activity Price</th> <!-- Example for 12.5% width -->
                                        <th scope="col" class="!text-center w-1/10">Ticket Price (PP)</th> <!-- Example for 10% width -->
                                        <th scope="col" class="!text-center w-1/20">
                                            <button type="button" wire:click.prevent="addActivity" class="ti-btn ti-btn-sm ti-btn-soft-success !border !border-success/20">
                                                <i class="fa-solid fa-plus text-lg text-dark"></i>
                                            </button>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($activities as $index => $activity)
                                            <tr>
                                                <td class="!text-center">
                                                    <div>
                                                        <input type="text" wire:model="activities.{{ $index }}.name" class="form-control form-control-sm text-center" placeholder="Enter activity name">
                                                    </div>
                                                    @error('activities.' . $index . '.name') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                                <td class="!text-center border-x-0">
                                                    <div>
                                                        <label class="badge !rounded-full bg-outline-secondary cursor-pointer {{ isset($activities[$index]['type']) && $activities[$index]['type'] === 'PAID' ? 'active' : '' }}">
                                                            <input 
                                                                type="radio"
                                                                name="type" 
                                                                value="PAID" 
                                                                class="contents" 
                                                                wire:change="updateType('{{ $index }}', 'PAID')"
                                                                wire:key="radio-{{ $index }}-PAID"> 
                                                            PAID
                                                        </label>
                                                        <label class="badge !rounded-full bg-outline-secondary cursor-pointer {{ isset($activities[$index]['type']) && $activities[$index]['type'] === 'UNPAID' ? 'active' : '' }}">
                                                            <input 
                                                                type="radio"
                                                                name="type" 
                                                                value="UNPAID" 
                                                                class="contents" 
                                                                wire:change="updateType('{{ $index }}', 'UNPAID')" 
                                                                wire:key="radio-{{ $index }}-UNPAID"> 
                                                            UNPAID
                                                        </label>
                                                    </div>
                                                    @error('activities.' . $index . '.type') 
                                                        <span class="text-danger">{{ $message }}</span> 
                                                    @enderror
                                                </td>
                                                <td class="!text-center border-x-0">
                                                   <div>
                                                        <input type="text" wire:model="activities.{{ $index }}.price" class="form-control form-control-sm text-center {{ isset($activities[$index]['type']) && $activities[$index]['type'] === 'UNPAID' ? 'placeholder:text-textmuted' : '' }}" placeholder="Price" 
                                                        onkeyup="validateNumber(this)" {{ isset($activities[$index]['type']) && $activities[$index]['type'] === 'UNPAID' ? 'disabled' : '' }} >
                                                   </div>
                                                    @error('activities.' . $index . '.price') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                                <td class="!text-center border-x-0">
                                                   <div>
                                                        <input type="text" wire:model="activities.{{ $index }}.ticket_price" class="form-control form-control-sm text-center {{ isset($activities[$index]['type']) && $activities[$index]['type'] === 'UNPAID' ? 'placeholder:text-textmuted' : '' }}" placeholder="Price"
                                                        onkeyup="validateNumber(this)" {{ isset($activities[$index]['type']) && $activities[$index]['type'] === 'UNPAID' ? 'disabled' : '' }}>
                                                   </div>
                                                    @error('activities.' . $index . '.ticket_price') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                                <td class="!text-center border-l-0">
                                                    <button type="button" wire:click.prevent="removeActivity({{ $index }})" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr class="border-t-0">
                                                <td colspan="5" class="border-l-0">
                                                   
                                                </td>
                                            </tr>
                                            <tr class="border-t-0">
                                                <td colspan="3">
                                                    <!-- Display Selected Image Previews -->
                                                        @if (isset($files[$index]) && is_array($files[$index]) && count($files[$index]) > 0)
                                                            <div class="image-preview-container">
                                                                @foreach ($files[$index] as $file)
                                                                    <div class="image-preview">
                                                                        <img src="{{ $file->temporaryUrl() }}" alt="Image Preview" class="image-thumbnail">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    <!-- Display Error Message for File Upload -->
                                                    @error('files.' . $index) 
                                                        <span class="text-danger">{{ $message }}</span> 
                                                    @enderror
                                                </td>
                                                <td colspan="2" class="border-l-0">
                                                     <!-- Custom File Upload Design -->
                                                     <label class="file-upload-container">
                                                        <span class="choose-text">Choose Images</span>
                                                        <input type="file" wire:model="files.{{ $index }}" class="file-input" accept="image/*" multiple>
                                                    </label>
                                                </td>
                                            </tr>
                                            
                                        @endforeach
                                </tbody>
                            </table>
                        </div>
                    
                        @if (session('new-activity-error'))
                            <div class="alert alert-danger">
                                {{ session('new-activity-error') }}
                            </div>
                        @endif
                    
                        <div class="text-end mt-3">
                            <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                <i class="fa-solid fa-save"></i> Save
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- Model --}}
    {{-- Start Update Activity Modal --}}
        <div id="assign_cab_update" class="hs-overlay {{$active_assign_update_modal==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_sm_width bg-white rounded-lg">
                <div class="ti-modal-content p-20">
                    <div class="ti-modal-header flex justify-end items-center">
                        <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="CloseEditModal">
                            <i class="fa-solid fa-xmark text-lg text-dark"></i>
                        </button>
                    </div>
                    @if(!empty($edit_activities))
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
                                            Divisions
                                        </span>
                                    </label>
                                    <select 
                                        name="division_list" 
                                        class="placeholder:text-textmuted text-sm selected_seasion_type"  
                                        wire:change="FilterCabByDivision($event.target.value)" 
                                        wire:key="division-0">
                                        <option value="" hidden>Filter Divisions</option>
                                        @foreach ($divisions as $division_item)
                                            <option 
                                                value="{{ $division_item->id }}" 
                                                {{$selectedDivision==$division_item->id?"selected":""}} 
                                                wire:key="division-{{ $division_item->id }}">
                                                {{ $division_item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="my-3">
                                <div clas="flex item-center">
                                    <label for="">
                                        <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                                            Seasion Type
                                        </span>
                                    </label>
                                    @foreach ($seasion_types as $types_item)
                                    <div class="badge bg-outline-primary cursor-pointer !py-2 {{$edit_activities['seasion_type_id']==$types_item->id?"active-primary-badge":""}}" wire:click="UpdateSeasonType({{$types_item->id}})" wire:key="seasion-type-{{ $types_item->id }}">
                                        <span>{{ strtoupper($types_item->title) }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div> --}}
                            <form wire:submit.prevent="updateActivity">
                                <div class="table-responsive">
                                    <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                        <thead class="uppercase">
                                            <tr class="border-b !border-primary/30">
                                                <th scope="col" class="!text-center w-1/2">Activity Name</th> <!-- Example for 50% width -->
                                                <th scope="col" class="!text-center w-1/5">Activity Type</th> <!-- Example for 20% width -->
                                                <th scope="col" class="!text-center w-1/8">Activity Price</th> <!-- Example for 12.5% width -->
                                                <th scope="col" class="!text-center w-1/10">Ticket Price (PP)</th> <!-- Example for 10% width -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="!text-center">
                                                    <div>
                                                        <input type="text" wire:model="edit_activities.name" class="form-control form-control-sm text-center" placeholder="Edit activity name">
                                                    </div>
                                                    @error('edit_activities.name') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                                <td class="!text-center border-x-0">
                                                    <div>
                                                        <label class="badge !rounded-full bg-outline-secondary cursor-pointer {{ isset($edit_activities['type']) && $edit_activities['type'] === 'PAID' ? 'active' : '' }}">
                                                            <input 
                                                                type="radio"
                                                                name="type" 
                                                                value="PAID" 
                                                                class="contents" 
                                                                wire:change="UpdateTypeFromEdit('PAID')"
                                                                wire:key="radio-edit-PAID"> 
                                                            PAID
                                                        </label>
                                                        <label class="badge !rounded-full bg-outline-secondary cursor-pointer {{ isset($edit_activities['type']) && $edit_activities['type'] === 'UNPAID' ? 'active' : '' }}">
                                                            <input 
                                                            type="radio"
                                                            name="type" 
                                                            value="PAID" 
                                                            class="contents" 
                                                            wire:change="UpdateTypeFromEdit('UNPAID')"
                                                            wire:key="radio-edit-UNPAID">  
                                                            UNPAID
                                                        </label>
                                                    </div>
                                                    @error('edit_activities.type') 
                                                        <span class="text-danger">{{ $message }}</span> 
                                                    @enderror
                                                </td>
                                                <td class="!text-center border-x-0">
                                                <div>
                                                        <input type="text" wire:model="edit_activities.price" class="form-control form-control-sm text-center {{ isset($edit_activities['type']) && $edit_activities['type'] === 'UNPAID' ? 'placeholder:text-textmuted' : '' }}" placeholder="Price" 
                                                        onkeyup="validateNumber(this)" {{ isset($edit_activities['type']) && $edit_activities['type'] === 'UNPAID' ? 'disabled' : '' }} >
                                                </div>
                                                    @error('edit_activities.price') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                                <td class="!text-center border-x-0">
                                                <div>
                                                        <input type="text" wire:model="edit_activities.ticket_price" class="form-control form-control-sm text-center {{ isset($edit_activities['type']) && $edit_activities['type'] === 'UNPAID' ? 'placeholder:text-textmuted' : '' }}" placeholder="Price"
                                                        onkeyup="validateNumber(this)" {{ isset($edit_activities['type']) && $edit_activities['type'] === 'UNPAID' ? 'disabled' : '' }}>
                                                </div>
                                                    @error('edit_activities.ticket_price') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                            </tr>
                                            <tr class="border-t-0">
                                                <td colspan="3">
                                                    <!-- Display Selected Image Previews -->
                                                      
                                                    <div class="image-preview-container">
                                                        @if (count($edit_activities['images'])>0)
                                                            @foreach ($edit_activities['images'] as $edit_file)
                                                                <div class="image-preview">
                                                                    <img src="{{ asset($edit_file['file_path']) }}" alt="Image Preview" class="image-thumbnail">
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                        @if (isset($update_files[$index]) && is_array($update_files[$index]) && count($update_files[$index]) > 0)
                                                        @foreach ($update_files[$index] as $file)
                                                            <div class="image-preview">
                                                                <img src="{{ $file->temporaryUrl() }}" alt="Image Preview" class="image-thumbnail">
                                                            </div>
                                                        @endforeach
                                                        @endif
                                                    </div>
                                                    <!-- Display Error Message for File Upload -->
                                                    @error('update_files.' . $index) 
                                                        <span class="text-danger">{{ $message }}</span> 
                                                    @enderror
                                                </td>
                                                <td colspan="2" class=" border-l-0">
                                                    <!-- Custom File Upload Design -->
                                                    <label class="file-upload-container">
                                                        <span class="choose-text">Choose Images</span>
                                                        <input type="file" wire:model="update_files.{{ $index }}" class="file-input" accept="image/*" multiple>
                                                    </label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                @if (session('edit-activity-error'))
                                    <div class="alert alert-danger">
                                        {{ session('edit-activity-error') }}
                                    </div>
                                @endif
                                <div class="text-end mt-3">
                                    <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                        <i class="fa-solid fa-save"></i> Save
                                    </button>
                                </div>
                            </form>
                            
                        </div>
                    @endif
                </div>
            </div>
        </div>
    {{-- End Update Activity Modal --}}

    {{-- Start Model For Activity Images --}}
    <div id="show_images" class="hs-overlay {{$active_modal_for_image==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_sm_width bg-white rounded-lg">
            <div class="ti-modal-content p-20">
                <div class="ti-modal-header flex justify-end items-center">
                    <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="CloseImageModal">
                        <i class="fa-solid fa-xmark text-lg text-dark"></i>
                    </button>
                </div>
                <div class="ti-modal-body text-start mt-2">
                    <div class="grid grid-cols-12 gap-x-6">
                        @forelse ($active_activity_images as $image)
                            <div class="lg:col-span-3 md:col-span-3 sm:col-span-6 col-span-12 relative">
                                <!-- Image -->
                                <img src="{{ asset($image->file_path) }}" alt="image" class="box thumbnail-image">
                
                                <!-- Delete Button -->
                                <button 
                                    wire:click="deleteItemImage({{ $image->id }})" 
                                    class="absolute top-2 right-2 ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20 z-10"
                                    title="Delete Image">
                                    <i class="fas fa-trash-alt"></i> <!-- You can use any icon you prefer -->
                                </button>
                            </div>
                        @empty
                            <div class="xl:col-span-12 col-span-12">
                                <div class="alert alert-danger">
                                    Result not found
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    {{-- End Model For Activity Images --}}
    {{-- Start Model For Activity Content --}}
    <div id="show_images" class="hs-overlay {{$active_modal_for_content==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_sm_width bg-white rounded-lg">
            <div class="ti-modal-content p-20">
                <div class="ti-modal-header flex justify-end items-center">
                    <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="CloseContentModal">
                        <i class="fa-solid fa-xmark text-lg text-dark"></i>
                    </button>
                </div>
                <div class="ti-modal-body text-start mt-2">
                    <form id="updateForm">
                        @csrf
                        <div class="badge bg-outline-primary cursor-pointer">
                            <h6 class="uppercase">{{$content_name}}</6>
                        </div>
                        <div>
                            <input type="hidden" name="activity_id" id="activity_id" value="{{$update_description_id}}">
                            <label for="">Description</label>
                            <textarea cols="30" rows="10" name="description" class="form-control form-control-sm text-center" id="description">
                                {{$description}}
                            </textarea>
                        </div>
                        <div class="text-end mt-3">
                            @if (session('activity-update-error'))
                                    <div class="alert alert-danger">
                                        {{ session('activity-update-error') }}
                                    </div>
                                @endif
                            <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                <i class="fa-solid fa-save"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
                
                
            </div>
        </div>
    </div>
    {{-- End Model For Activity Content --}}

    <div wire:loading class="loader">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>
@section('scripts')
<script type="text/javascript" src="{{ asset('build/ckeditor/ckeditor.js') }}"></script>
{{-- CK Editor --}}
<script>
   window.addEventListener('editor_load', function (event) {
    // Get the textarea element
    var descriptionTextArea = document.getElementById('description');

    if (descriptionTextArea) {
        // Ensure event.detail[0] exists and contains setDescriptionValue
        if (event.detail && event.detail[0] && event.detail[0].setDescriptionValue !== undefined) {
            let setDescriptionValue = event.detail[0].setDescriptionValue;
            // alert("Existing Description: " + setDescriptionValue);
        } else {
            console.warn("No description value received in event.");
        }

        // Check if CKEditor instance already exists and destroy it
        if (CKEDITOR.instances['description']) {
            CKEDITOR.instances['description'].destroy(true);
        }

        // Initialize CKEditor
        if (typeof CKEDITOR !== 'undefined') {
            CKEDITOR.replace('description');

            // Set the received description value to CKEditor
            if (event.detail && event.detail[0] && event.detail[0].setDescriptionValue !== undefined) {
                CKEDITOR.instances['description'].setData(event.detail[0].setDescriptionValue);
            }

            // // Sync CKEditor data to Livewire
            // CKEDITOR.instances['description'].on('change', function () {
            //     @this.set('description', CKEDITOR.instances['description'].getData());
            // });
        } else {
            console.error('CKEditor is not defined!');
        }
    }
});


</script>
<script>
    document.getElementById("updateForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission
        // Ensure CKEditor instance exists and get its data
        if (CKEDITOR.instances['description']) {
            CKEDITOR.instances['description'].updateElement(); // ✅ Sync CKEditor data to textarea
        }
        let formData = new FormData(this); // Get form data
        // let description = document.getElementById('description').value;
        // let activity_id = document.getElementById('activity_id').value;
        // console.log(description);
        // return false;
        fetch("{{ route('admin.route.division_wise_activity_update_content') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value // Get CSRF token
            },
            body: formData
        })
        .then(response => response.json()) // Convert response to JSON
        .then(data => {
            if (data.success) {
                @this.call('UpdateDescription', 'true');
                // window.location.reload(); // ✅ Corrected window reload
            } else {
                @this.call('UpdateDescription', 'false');
            }
        })
        .catch(error => {
            console.error("Error:", error);
            alert("An error occurred. Please try again.");
        });
    });
</script>

{{-- Alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
