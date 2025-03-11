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
                    <div class="table-responsive mb-2">
                        <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                            <thead class="uppercase">
                                <tr class="border-b !border-primary/30 bg-warning/10">
                                    <th scope="col" class="!text-center w-5/6">
                                        <div class="custom-fulldiv">
                                            <div>
                                                Name Of Itinerary
                                            </div>
                                            <div class="nd-field">
                                                <div class="nd-group">
                                                    <input type="text" wire:model="day" wire:keyup="validateDaysAndNights" class="form-control form-control-sm">
                                                    <span>D</span>
                                                </div>
                                                <div class="spacer">/</div>
                                                <div class="nd-group">
                                                    <input type="text" wire:model="night" wire:keyup="validateDaysAndNights" class="form-control form-control-sm">
                                                    <span>N</span>
                                                </div>
                                            </div>
                                            @if($errorMessage)
                                                <p style="color: red;">{{ $errorMessage }}</p>
                                            @endif
                                        </div>
                                    </th>
                                    <th scope="col" class="!text-center w-1/6">
                                        <button type="submit" class="ti-btn ti-btn-success-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]">SAVE</button>
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
                                                        <input type="text" wire:model="" class="form-control form-control-sm placeholder:text-textmuted">
                                                    </div>
                                                    <div class="md:col-span-6 col-span-12 mb-4">
                                                        <label class="">Welcome To</label>
                                                        <input type="text" wire:model="" class="form-control form-control-sm placeholder:text-textmuted">
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                    <div class="md:col-span-10 col-span-12 mb-4">
                                                        <div class="image-preview-container">
                                                        </div>
                                                    </div>
                                                    <div class="md:col-span-2 col-span-12 mb-4">
                                                        <div class="border-l-0 sightseeing_images">
                                                            <label class="file-upload-container">
                                                                <span class="choose-text">Choose Banner</span>
                                                                <input type="file" wire:model="main_banner" class="file-input" accept="image">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
