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
                    <form wire:submit.prevent="submitForm">
                        <div class="table-responsive mb-2">
                            <table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                <thead class="uppercase">
                                    <tr class="border-b !border-primary/30 bg-warning/10">
                                        <th scope="col" class="!text-center w-4/5">
                                            <div class="custom-fulldiv">
                                                <div>
                                                    Name Of Itinerary
                                                </div>
                                                <div class="nd-field">
                                                    <input type="text" wire:model="itinerary_syntax" class="form-control form-control-sm text-center" readonly>
                                                </div>
                                                <div class="nd-field" style="max-width: none">
                                                    <input type="text" wire:model="itinerary_journey" class="form-control form-control-sm text-center" readonly>
                                                </div>
                                            </div>
                                        </th>
                                        <th scope="col" class="!text-center w-1/5">
                                            <button type="submit" class="ti-btn ti-btn-success-full !py-1 !px-4 ti-btn-wave  me-[0.375rem]">SAVE</button>
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
                                                    <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Main Banner</span>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-10 col-span-12 mb-4 itinerary-build">
                                                            <div class="image-preview-container">
                                                                @foreach ($mainBanner as $index => $main_banner)
                                                                    <label class="image-preview-label px-1">
                                                                        <input type="radio" name="selected_banner" wire:model="selected_banner" value="{{ $main_banner->image }}" class="hidden peer">
                                                                        <div class="image-preview peer-checked:border-blue-500 relative">
                                                                            <img src="{{ asset($main_banner->image) }}" alt="Image Preview" class="image-thumbnail">
                                                                            
                                                                            <!-- Selected Text -->
                                                                            <div class="absolute bottom-0 left-0 right-0 bg-white text-center text-sm font-semibold py-1 hidden peer-checked:block">
                                                                                Selected
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        <div class="md:col-span-2 col-span-12 mb-4">
                                                            <div class="border-l-0 sightseeing_images">
                                                                <label class="file-upload-container">
                                                                    <span class="choose-text">Upload New Banner</span>
                                                                    <input type="file" wire:model="uploadMainBanner" class="file-input" accept="image">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                        <thead class="bg-primary/10">
                                            <tr>
                                                <th class="!text-center uppercase">About Destination</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label "> Title</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            <input type="text" class="form-control form-control-sm" wire:model="about_destination_title">
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label">Text</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            <textarea wire:model="about_destination_text" class="form-control form-control-sm" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="grid grid-cols-12 mb-4">
                                                        <label class="sm:col-span-2 col-span-12 col-form-label">Trip Highlights</label>
                                                        <div class="sm:col-span-10 col-span-12">
                                                            @foreach ($about_desc_trip_highlights as $index => $highlight)
                                                                <div class="flex items-center gap-2 mb-2">
                                                                    <input type="text" class="form-control form-control-sm" wire:model="about_desc_trip_highlights.{{ $index }}">
                                                                    @if ($index > 0) 
                                                                        <button type="button" wire:click="removeAboutDescHighlight({{ $index }})" class="badge bg-outline-danger cursor-pointer !font-normal !text-sm uppercase">Remove</button>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                    
                                                            <div class="text-end">
                                                                <button type="button" wire:click="addAboutDescHighlight" class="badge bg-outline-success cursor-pointer !font-normal !text-sm uppercase">Add More</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Destination Slider images</span>
                                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                        <div class="md:col-span-12 col-span-12 mb-4 itinerary-build">
                                                            <div class="image-preview-container">
                                                                @foreach ($destinationImages as $slider_index => $slider_image)
                                                                    <label class="image-preview-label px-1">
                                                                        <input type="checkbox" wire:model="selected_about_desc_banners" value="{{ $slider_image }}" class="hidden peer">
                                                                        
                                                                        <div class="image-preview peer-checked:border-blue-500 relative">
                                                                            <img src="{{ asset($slider_image) }}" alt="Image Preview" class="image-thumbnail">
                                                                            
                                                                            <!-- Selected Text -->
                                                                            <div class="absolute bottom-0 left-0 right-0 bg-white text-center text-sm font-semibold py-1 hidden peer-checked:block">
                                                                                Selected
                                                                            </div>
                                                                        </div>
                                                                    </label>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        
                                                        {{-- <div class="md:col-span-2 col-span-12 mb-4">
                                                            <div class="border-l-0 sightseeing_images">
                                                                <label class="file-upload-container">
                                                                    <span class="choose-text">Upload Slider Images</span>
                                                                    <input type="file" wire:model="uploadDestinationBanner" class="file-input" accept="image/*" multiple>
                                                                </label>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @foreach($day_by_divisions as $division_index=>$division_item)
                                        <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full new-activity">
                                            <thead class="bg-primary/10">
                                                <tr>
                                                    <th class="!text-center uppercase">Day {{$division_index}} ({{$division_item['division_name']}})</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="grid grid-cols-12 mb-4">
                                                            <label class="sm:col-span-2 col-span-12 col-form-label">Text</label>
                                                            <div class="sm:col-span-10 col-span-12">
                                                                <textarea wire:model="about_destination_text" class="form-control form-control-sm" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    
                                                        <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small mx-2">Day {{$division_index}} in {{$division_item['division_name']}}</span>
                                                        <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                            <div class="md:col-span-12 col-span-12 mb-4 itinerary-build">
                                                                <div class="image-preview-container">
                                                                    @foreach ($division_item['division_images'] as $image_index => $division_image)
                                                                        <label class="image-preview-label px-1">
                                                                            <input type="checkbox" 
                                                                                wire:model="selected_day_wise_itinerary.{{ $division_index }}.images_value.{{ $image_index }}" 
                                                                                value="{{ $division_image }}" 
                                                                                class="hidden peer" 
                                                                                wire:key="image-{{ $division_index }}-{{ $image_index }}" wire:change="updateDayImages({{$division_index}},{{$image_index}},$event.target.value)">

                                                                            <div class="image-preview peer-checked:border-blue-500 relative">
                                                                                <img src="{{ asset($division_image) }}" alt="Image Preview" class="image-thumbnail">

                                                                                <!-- Selected Text -->
                                                                                <div class="absolute bottom-0 left-0 right-0 bg-white text-center text-sm font-semibold py-1 hidden peer-checked:block">
                                                                                    Selected
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered table-bordered-primary border-primary/10 min-w-full mt-4">
                                                            <thead class="">
                                                                <tr>
                                                                    <th class="!text-center uppercase">SL No.</th>
                                                                    <th class="!text-center uppercase">ROUTE</th>
                                                                    <th class="!text-center uppercase">ACTIVITY</th>
                                                                    <th class="!text-center uppercase">SIGHTSEEINGS</th>
                                                                    <th class="!text-center uppercase">
                                                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-success !border !border-success/20">
                                                                            <i class="fa-solid fa-plus text-lg text-dark"></i>
                                                                        </button>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="!text-center">
                                                                        <span class="badge bg-primary/10 text-primary">1</span>
                                                                    </td>
                                                                    <td class="!text-center"></td>
                                                                    <td class="!text-center"></td>
                                                                    <td class="!text-center"></td>
                                                                    <td class="!text-center">
                                                                        <button type="button" class="ti-btn ti-btn-sm ti-btn-soft-danger !border !border-danger/20">
                                                                            <i class="ti ti-trash"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="mt-4">
                                                            <span class="badge gap-2 bg-danger/10 text-danger uppercase text-small m-2">Hotels in {{$division_item['division_name']}}</span>
                                                            <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                                                <div class="md:col-span-12 col-span-12 mb-4 mx-2 itinerary-build">
                                                                    <div class="hotel-preview-container flex flex-wrap gap-2">
                                                                        @forelse ($division_item['division_hotels'] as $hotel_index => $hotel_item)
                                                                            <label class="hotel-preview-label relative cursor-pointer">
                                                                                <input 
                                                                                    type="radio" 
                                                                                    value="{{ $hotel_item['id'] ?? '' }}" 
                                                                                    class="hidden peer" 
                                                                                    wire:model="selected_day_wise_itinerary.{{ $division_index }}.hotel"
                                                                                    wire:key="hotel-{{ $division_index }}-{{ $hotel_index }}"
                                                                                >
                                                                
                                                                                <!-- Hotel Selection Box -->
                                                                                <div class="hotel-card">
                                                                                    <span class="hotel-name">{{ $hotel_item['name'] ?? 'No Name' }}</span>
                                                                                    <!-- Selected Indicator -->
                                                                                    <span class="checkmark">✓</span>
                                                                                </div>
                                                                            </label>
                                                                        @empty
                                                                            <p class="text-gray-500 text-small italic">No hotels found</p>
                                                                        @endforelse
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
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
