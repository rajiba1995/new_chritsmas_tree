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
                    <div>
                        <a href="{{route('admin.route.division_wise_cab_list')}}" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                            <i class="ri-refresh-line"></i>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="ti-btn-list">
                        @foreach ($desitinations as $destination_item)
                            <button type="button" class="ti-btn ti-btn-primary ti-btn-wave me-[0.375rem] {{$selectedDestination==$destination_item->id?"active-primary":""}}" 
                            wire:click="getDestination({{$destination_item->id}})"
                            wire:key="destination-{{ $destination_item->id }}"
                            >{{$destination_item->name}}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="box custom-box">
                <div class="m-4">
                    @if (session('success'))
                        <div id="success-message" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="box-header flex justify-between">
                    @if(count($divisions)>0)
                    <div class="box-title">
                        <span class="badge gap-2 bg-danger/10 text-danger uppercase">
                            <span class="w-1.5 h-1.5 inline-block bg-danger rounded-full "></span>Divisions</span>
                        </span> 
                    </div>
                    <div class="prism-toggle">
                        <a href="javascript:void(0)" wire:click="OpenNewCabModal('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Assign New Cab</a>
                    </div>
                    @endif
                </div>
                <div class="box-body">
                    <div class="flex justify-between">
                        <div class="ti-btn-list">
                            @foreach ($divisions as $division_item)
                            <span class="badge bg-outline-primary cursor-pointer {{$selectedDivision==$division_item->id?"active-primary-badge":""}}" 
                            wire:click="FilterCabByDivision('{{$division_item->id}}')"
                            wire:key="division-{{ $division_item->id }}">{{$division_item->name}}</span>
                            @endforeach
                        </div>
                        <div class="badge bg-outline-success cursor-pointer">
                            <span>No of Result: {{$division_wise_cabs->count()}}</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-2">
                        @forelse($division_wise_cabs as $cab_item)
                            <div class="xl:col-span-2 col-span-2" wire:key="delete-item-{{$cab_item->division_id}}-{{$cab_item->id}}">
                                <div class="box">
                                    <div class="box-header text-center">
                                        <h5 class="box-title">{{$cab_item->cab?$cab_item->cab->title.'('.$cab_item->cab->capacity.')':"....."}}</h5>
                                    </div>
                                    <div class="box-body cab-card !p-0">
                                        <div class="items-center mb-2">
                                            <span class="cab-avatar">
                                                @if($cab_item->cab)
                                                <img src="{{$cab_item->cab->image?asset($cab_item->cab->image):asset('assets/img/cab.png')}}"alt="img" width="100%">
                                                @endif
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-center px-1 cab_status_activity">
                                            <livewire:master-status-toggle 
                                                modelName="DivisionWiseCab" 
                                                :item="$cab_item"
                                            />
                                            <div>
                                                <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20" wire:click="DeleteCabItem({{$cab_item->id}})" itemId="{{$cab_item->id}}">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="xl:col-span-12 col-span-2">
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
                        <!-- Cab Dropdown -->
                        <h6 class="ti-modal-title mb-2">
                            <span class="badge gap-2 bg-primary/10 text-primary">Cabs</span>
                         </h6>
                        <div class="mb-3 items-center gap-2 col-cab-list">
                            @foreach($cabs as $cabs_item)
                            <div class="check-form">
                                <input class="form-check-input cab-input" type="checkbox" wire:model="assign_cab_id" 
                                       id="Checkbox-{{$cabs_item->id}}" value="{{$cabs_item->id}}">
                                <label class="form-check-label font-semibold uppercase text-secondary cursor-pointer" for="Checkbox-{{$cabs_item->id}}">
                                    {{$cabs_item->title}}
                                </label>
                                <span>({{$cabs_item->capacity}})</span>
                            </div>
                            @endforeach
                        </div>
                        @error('assign_cab_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                
                        <!-- Submit Button -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('FieldUncheck', function (event){
        let className = event.detail[0].class;
        document.querySelectorAll('.' + className).forEach(function (checkbox) {
            checkbox.checked = false;
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
