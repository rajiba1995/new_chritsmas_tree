<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box custom-box">
                <div class="box-header flex justify-between">
                    <div class="box-title">
                        <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                            <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full "></span>Destinations</span>
                        </span> 
                    </div>
                </div>
                <div class="box-body">
                    <div class="ti-btn-list">
                        @foreach ($desitinations as $destination_item)
                            <button type="button" class="ti-btn ti-btn-primary ti-btn-wave me-[0.375rem] {{$selectedDestination==$destination_item->id?"active-primary":""}}">{{$destination_item->name}}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="box custom-box">
                <div class="box-header flex justify-between">
                    @if(count($divisions)>0)
                    <div class="box-title">
                        <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                            <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full "></span>Divisions</span>
                        </span> 
                    </div>
                    <div>
                        @if (session('success'))
                            <div id="success-message" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="prism-toggle">
                        <a href="javascript:void(0)" wire:click="OpenNewCabModal('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Assign New Cab</a>
                    </div>
                    @endif
                </div>
                <div class="box-body">
                    <div class="ti-btn-list">
                        @foreach ($divisions as $division_item)
                        <span class="badge bg-outline-primary cursor-pointer {{$selectedDivision==$division_item->id?"active-primary-badge":""}}">{{$division_item->name}}</span>
                        @endforeach
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-2">
                        <div class="xl:col-span-2 col-span-2">
                            <div class="box">
                                <div class="box-header text-center">
                                    <h5 class="box-title">maruti suzuki</h5>
                                </div>
                                <div class="box-body cab-card !p-0">
                                    <div class="items-center mb-2">
                                        <div class="text-center seasion_title">
                                            <span class="badge badge-purple-gradient">Off-Season</span>
                                        </div>
                                        <span class="cab-avatar">
                                            <img src="{{asset('assets/img/cab.png')}}"alt="img" width="100%">
                                        </span>
                                    </div>
                                    <div class="flex justify-between items-center px-1">
                                        {{-- <livewire:master-status-toggle 
                                            modelName="Cab" 
                                            :item="$item" 
                                            wire:key="status-toggle-{{ $item->id }}" 
                                        /> --}}
                                        <div class="toggle toggle-sm mb-4 cursor-pointer toggle-success on">
                                            <span></span>
                                        </div>
                                        <div>
                                            <x-action-button type="delete" url="#" itemId="1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-2">
                            <div class="box">
                                <div class="box-header text-center">
                                    <h5 class="box-title">maruti suzuki</h5>
                                </div>
                                <div class="box-body cab-card !p-0">
                                    <div class="items-center mb-2">
                                        <div class="text-center seasion_title">
                                            <span class="badge badge-info-gradient">Normal Season</span>
                                        </div>
                                        <span class="cab-avatar">
                                        <img src="{{asset('assets/img/cab.png')}}"alt="img" width="100%"></span>
                                    </div>
                                    <div class="flex justify-between items-center px-1">
                                        {{-- <livewire:master-status-toggle 
                                            modelName="Cab" 
                                            :item="$item" 
                                            wire:key="status-toggle-{{ $item->id }}" 
                                        /> --}}
                                        <div class="toggle toggle-sm mb-4 cursor-pointer toggle-success on">
                                            <span></span>
                                        </div>
                                        <div>
                                            <x-action-button type="delete" url="#" itemId="1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-2 col-span-2">
                            <div class="box">
                                <div class="box-header text-center">
                                    <h5 class="box-title">maruti suzuki</h5>
                                </div>
                                <div class="box-body cab-card !p-0">
                                    <div class="items-center mb-2">
                                        <div class="text-center seasion_title">
                                            <span class="badge badge-warning-gradient">Peak Season</span>
                                        </div>
                                        <span class="cab-avatar">
                                        <img src="{{asset('assets/img/cab.png')}}"alt="img" width="100%"></span>
                                    </div>
                                    <div class="flex justify-between items-center px-1">
                                        {{-- <livewire:master-status-toggle 
                                            modelName="Cab" 
                                            :item="$item" 
                                            wire:key="status-toggle-{{ $item->id }}" 
                                        /> --}}
                                        <div class="toggle toggle-sm mb-4 cursor-pointer toggle-success on">
                                            <span></span>
                                        </div>
                                        <div>
                                            <x-action-button type="delete" url="#" itemId="1" />
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                <div class="ti-modal-header flex justify-between items-center">
                    <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                        <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full "></span>{{$selectedDivisionName}}</span>
                    </span> 
                    <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none" wire:click="OpenNewCabModal('no')">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>
                <div class="ti-modal-body text-start">
                    <form wire:submit.prevent="submitForm">
                            <!-- Season Type Dropdown -->
                            <h6 class="ti-modal-title">
                                <span class="badge gap-2 bg-primary/10 text-primary">Seasion Type</span>
                             </h6>
                            <div class="mb-2 flex items-center gap-2">
                                @foreach($seasion_types as $seasion_types_item)
                                <div class="check-form">
                                    <span class="badge !rounded-full bg-outline-secondary">
                                        <!-- Radio Button -->
                                        <input class="form-check-input" type="radio" name="assign_season_type" wire:model="assign_season_type" 
                                               id="Radio-{{$seasion_types_item->id}}" value="{{$seasion_types_item->id}}">
                                        <label class="form-check-label" for="Radio-{{$seasion_types_item->id}}">
                                            {{$seasion_types_item->title}}
                                        </label>
                                    </span>
                                </div>
                                @endforeach
                            </div>
                            @error('assign_season_type') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                
                        <!-- Cab Dropdown -->
                        <h6 class="ti-modal-title mb-2">
                            <span class="badge gap-2 bg-primary/10 text-primary">Cabs</span>
                         </h6>
                        <div class="mb-3 items-center gap-2 col-cab-list">
                            @foreach($cabs as $cabs_item)
                            <div class="check-form">
                                <input class="form-check-input" type="checkbox" wire:model="assign_cab_id" 
                                       id="Checkbox-{{$cabs_item->id}}" value="{{$cabs_item->id}}">
                                <label class="form-check-label font-semibold uppercase text-secondary cursor-pointer" for="Checkbox-{{$cabs_item->id}}">
                                    {{$cabs_item->title}}
                                </label>
                            </div>
                            @endforeach
                        </div>
                        @error('assign_cab_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                
                        <!-- Submit Button -->
                        @if (session('assign_error'))
                            <div id="error-message" class="alert alert-danger">
                                {{ session('assign_error') }}
                            </div>
                        @endif
                        <div class="text-end">
                            <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                <i class="fa-solid fa-plus"></i> Save
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
