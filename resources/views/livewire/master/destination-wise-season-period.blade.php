<div>
    <div class="grid grid-cols-12 gap-6">
        <div class="xl:col-span-12 col-span-12">
            <div class="box custom-box">
                <div class="box-body">
                        <div class="input-group !mb-0"> 
                            <input type="text" wire:model="keyword" class="form-control form-control-sm" id="searchInput" placeholder="Search by destination.."> 
                            <button class="change-text-button ti-btn ripple ti-btn-primary-full !mb-0" wire:click="search">Search</button>
                            <a href="javascript:void(0)" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0" wire:click="resetSearch">
                                <i class="mdi mdi-refresh"></i>
                            </a>
                        </div>
                    <div class="table-responsive">
                        <table class="table whitespace-nowrap min-w-full">
                            <thead>
                                <tr>
                                    <th class="!text-center">SL</th>
                                    <th scope="col" class="!text-center">DESTINATION</th>
                                    <th scope="col" class="!text-center">SEASON PERIOD</th>
                                    <th scope="col" class="!text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($destinations as $key=>$item)
                                <tr class="text-grey">
                                    <td scope="row" class="text-center !p-1"> 
                                        <span class="badge bg-primary/10 text-primary">{{ $key + 1 }}</span>
                                    </td>
                                    <td scope="row" class="!text-center !p-1">{{ucwords($item->name)}}</td>
                                    <td scope="row" class="!p-0 align-top">
                                        <div class="table-responsive -mt-9">
                                            <table class="table whitespace-nowrap min-w-full">
                                                    @if($key==0)
                                                        <thead class="bg-warning/10">
                                                            <tr class="border-b border-defaultborder">
                                                                @foreach($season_types as $index=>$type)
                                                                    <th class="text-center uppercase route_details">{{$type->title}}</th>
                                                                @endforeach
                                                            </tr>
                                                        </thead>
                                                    @endif
                                                    <tbody>
                                                        <tr>
                                                            @if(count($item->seasonPeriod)>0)
                                                                @foreach($season_types as $index=>$type)
                                                                    @php
                                                                        $season_wise_date = App\helpers\CustomHelper::DestinationWiseSeasonDate($type->id,$item->id);
                                                                    @endphp
                                                                    @if($season_wise_date)
                                                                    <td class="!text-center">
                                                                        <span class="badge bg-outline-secondary cursor-pointer">{{date('d-M-Y',strtotime(date('Y-').$season_wise_date->start_date))}}</span> to
                                                                        <span class="badge bg-outline-secondary cursor-pointer">{{date('d-M-Y',strtotime(date('Y-').$season_wise_date->end_date))}}</span>
                                                                    </td>
                                                                    @else
                                                                        <td class="!text-center">
                                                                            <div class="alert alert-secondary !p-1 !text-xs">
                                                                                Date not found!
                                                                            </div>
                                                                        </td>
                                                                    @endif
                                                                @endforeach
                                                            @else
                                                                <td class="!text-center" colspan="3">
                                                                    <div class="alert alert-secondary !p-1 !text-xs">
                                                                        Data not found!
                                                                    </div>
                                                                </td>
                                                            @endif
                                                        </tr>
                                                    </tbody>
                                               
                                            </table>
                                        </div>
                                    </td>
                                    <td class="!text-start">
                                        <x-tooltip-button 
                                            button-class="ti-btn-soft-primary" 
                                            border-class="primary" 
                                            action="ShowItemModal"
                                            :item-id="$item->id" 
                                            key="show-item-modal={{$item->id}}" 
                                            icon="ti ti-plus" 
                                            tooltip="Update Season Period"
                                        />
                                        @if(count($item->seasonPeriod)>0)
                                        <x-tooltip-button 
                                            button-class="ti-btn-soft-danger" 
                                            border-class="danger" 
                                            action="ResetItem" 
                                            :item-id="$item->id" 
                                            key="delete-item" 
                                            icon="ri-refresh-line" 
                                            tooltip="Delete Item"
                                        />
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <div class="alert alert-danger !p-1">
                                                Data not found!
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
        <div id="show_images" class="hs-overlay {{$modal_activity==0?"hidden":""}} fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto modal_lg_sm_width bg-white rounded-lg">
                <div class="ti-modal-content p-20">
                    <div class="ti-modal-header flex justify-end items-center">
                        <button type="button" class="text-gray-400 hover:text-gray-600 focus:outline-none badge gap-2 bg-danger/10 text-danger" wire:click="CloseItemModal">
                            <i class="fa-solid fa-xmark text-lg text-dark"></i>
                        </button>
                    </div>
                    <div class="ti-modal-body text-start mt-2">
                        <form wire:submit.prevent="submitEditForm">
                            <div class="table-responsive -mt-9">
                                <table class="table whitespace-nowrap min-w-full">
                                    <thead class="bg-warning/10">
                                        <tr class="border-b border-defaultborder">
                                            <th class="text-center uppercase route_details">Season</th>
                                            <th class="text-center uppercase route_details">Start Date</th>
                                            <th class="text-center uppercase route_details">End Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($update_data as $index=>$data_item)
                                            <input type="hidden" wire:model="selected_destination">
                                            <input type="hidden" wire:model="update_data.{{$index}}.type">
                                            <tr>
                                                <td>{{$data_item['title']}}</td>
                                                <td> 
                                                    <input type="date" class="form-control ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" wire:model="update_data.{{$index}}.start_date">
                                                    @error('update_data.' . $index . '.start_date') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                                <td> 
                                                    <input type="date" class="form-control ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm" wire:model="update_data.{{$index}}.end_date">
                                                    @error('update_data.' . $index . '.end_date') <span class="text-danger">{{ $message }}</span> @enderror
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-end mt-3">
                                @if (session('new-update-error'))
                                    <div class="alert alert-danger">
                                        {{ session('new-update-error') }}
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
    </div>
    <div wire:loading class="loader">
        <div class="spinner">
        <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
        </div>
    </div>
</div>
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('clearSearchInput', function (event) {
        document.getElementById('searchInput').value = '';
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
            confirmButtonText: "Yes, Reset it!"
        }).then((result) => {
            if (result.isConfirmed) {
                @this.call('deleteItem', itemId); // Calls Livewire method directly
                Swal.fire("Reset!", "Your item has been updated.", "success");
            }
        });
    });
</script>
@endsection
