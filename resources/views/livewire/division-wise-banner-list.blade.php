
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
                        <a href="javascript:void(0)" wire:click="OpenNewCabModal('yes')" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add Banner</a>
                    </div>
                    @endif
                </div>
                <div class="box-body">
                    <div class="flex justify-between">
                        <div class="ti-btn-list">
                            @foreach ($divisions as $division_item)
                            <span class="badge bg-outline-primary cursor-pointer {{$selectedDivision==$division_item->id?"active-primary-badge":""}}" 
                            wire:click="FilterBannerByDivision('{{$division_item->id}}')"
                            wire:key="division-{{ $division_item->id }}">{{$division_item->name}}</span>
                            @endforeach
                        </div>
                        <div class="badge bg-outline-success cursor-pointer">
                            <span>No of Result: {{$division_wise_banners->count()}}</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-2">
                        @forelse($division_wise_banners as $banner_item)
                            <div class="xl:col-span-4 col-span-4">
                                <div class="box">
                                    <div class="box-header text-center">
                                        <h5 class="box-title">{{$banner_item->title?$banner_item->title:"....."}}</h5>
                                    </div>
                                    <div class="box-body cab-card !p-0">
                                        <div class="items-center mb-2">
                                            <span class="cab-avatar">
                                                <img src="{{asset($banner_item->image)}}"alt="img" width="100%">
                                            </span>
                                        </div>
                                        <div class="flex justify-between items-center px-1 cab_status_activity">
                                            <livewire:master-status-toggle 
                                                modelName="ItineraryBanner" 
                                                :item="$banner_item" 
                                                wire:key="status-toggle-{{$banner_item->division_id}}-{{$banner_item->id}}" 
                                            />
                                            <div>
                                                <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20" wire:click="DeleteBannerItem({{$banner_item->id}})" wire:key="delete-item-{{$banner_item->division_id}}-{{$banner_item->id}}" itemId="{{$banner_item->id}}">
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
                <div class="ti-modal-body text-start new-activity">
                    <form wire:submit.prevent="submitForm">
                        <!-- Cab Dropdown -->
                        <div class="my-3 items-center gap-2">
                                <span class="badge gap-2 bg-primary/10 text-primary mb-2">Title</span>
                            <x-input-field type="text" wire:model="banner_title" name="" placeholder="Enter banner title here" ariaLabel="" class="form-control form-control-sm"/>
                            @error('banner_title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div class="mt-2">
                            <span class="badge gap-2 bg-primary/10 text-primary">Image</span>
                        </div>
                        @if (isset($banner_image) && !$errors->has('banner_image'))
                            <div class="image-preview-container">
                                <div class="banner-image-preview">
                                    <img src="{{ $banner_image->temporaryUrl() }}" alt="Image Preview" class="image-thumbnail">
                                </div>
                            </div>
                        @endif
                        <div class="mt-2">
                            <label class="file-upload-container">
                                <span class="choose-text">Choose Images</span>
                                <input type="file" wire:model="banner_image" class="file-input" accept="image/*">
                            </label>
                            @error('banner_image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
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
                        <div class="text-end mt-2">
                            {{-- @if (isset($banner_image)) --}}
                            <button type="submit" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave me-[0.375rem]">
                                <i class="fa-solid fa-plus"></i> Save
                            </button>
                            {{-- @endif --}}
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
