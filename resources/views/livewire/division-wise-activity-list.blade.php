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
                                <option value="0" wire:key="select-payment-type-0">All</option>
                                    <option value="1" wire:key="select-payment-type-1">Paid</option>
                                    <option value="2" wire:key="select-payment-type-2">Unpaid</option>
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
                            <input type="text" class="badge bg-outline-primary !w-56" placeholder="Quick Search..">
                            @foreach ($seasion_types as $types_item)
                            <div class="badge bg-outline-primary cursor-pointer {{$selected_season_type==$types_item->id?"active-primary-badge":""}}" wire:click="FilterCabBySeasionType({{$types_item->id}})" wire:key="seasion-type-{{ $types_item->id }}">
                                <span>{{ strtoupper($types_item->title) }}</span>
                            </div>
                            @endforeach
                            <div class="badge bg-outline-primary cursor-pointer {{$selected_season_type==0?"active-primary-badge":""}}" wire:click="FilterCabBySeasionType(0)" wire:key="seasion-type-0">
                                <span>ALL</span>
                            </div>
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
                                        <th scope="col" class="!text-center">Activity Type</th>
                                        <th scope="col" class="!text-center">Activity Price</th>
                                        <th scope="col" class="!text-center">Ticket Price (PP)</th>
                                        <th scope="col" class="!text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($division_wise_cabs as $cab_item)
                                    <tr>
                                        <th scope="row" class="!text-center">
                                            <span class="badge bg-primary/10 text-primary">
                                                1
                                            </span>
                                        </th>
                                        <td class="!text-center">
                                            <span class="badge bg-light text-dark">26-04-2022</span>
                                        </td>
                                        <td class="!text-center">
                                            <span class="badge bg-light text-dark">26-04-2022</span>
                                        </td>
                                        <td class="!text-center">
                                            <span class="badge bg-light text-dark">26-04-2022</span>
                                        </td>
                                        <td class="!text-center">
                                            <div class="flex items-center">
                                                <span class="avatar avatar-xs me-2 online avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                                </span>Mayor Kelly
                                            </div>
                                        </td>
                                        <td class="!text-center">
                                            <span class="badge bg-primary/10 text-primary">Booked</span>
                                        </td>
                                    </tr>
                                    @empty
                                        <div class="xl:col-span-12 col-span-2">
                                            <div class="alert alert-danger">
                                                Result not found
                                            </div>
                                        </div>
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
                    <div class="flex items-center">
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
                    <div class="my-3">
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
                    </div>
                    <form wire:submit.prevent="submitForm">
                        <div class="table-responsive">
                            <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30">
                                        <th scope="col" class="!text-center">Activity Name</th>
                                        <th scope="col" class="!text-center">Activity Type</th>
                                        <th scope="col" class="!text-center">Activity Price</th>
                                        <th scope="col" class="!text-center">Ticket Price (PP)</th>
                                        <th scope="col" class="!text-center">
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
                                                        <input type="text" wire:model="activities.{{ $index }}.name" class="form-control-sm text-center" placeholder="Enter activity name">
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
                                                        <input type="text" wire:model="activities.{{ $index }}.price" class="form-control-sm text-center" placeholder="Activity price" 
                                                        onkeyup="validateNumber(this)">
                                                   </div>
                                                    @error('activities.' . $index . '.price') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                                <td class="!text-center border-x-0">
                                                   <div>
                                                        <input type="text" wire:model="activities.{{ $index }}.ticket_price" class="form-control-sm text-center" placeholder="Ticket price"
                                                        onkeyup="validateNumber(this)">
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
                                                <td colspan="2" class=" border-l-0">
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

    <div wire:loading class="loader">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>

<script>
</script>
