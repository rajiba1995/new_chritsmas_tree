<div>
    <form wire:submit.prevent="saveHotel">
        <div class="box custom-box">
            <div class="box-body">
                <div class="grid grid-cols-12 gap-3">
                    <div class="col-span-8">
                        <div class="container mx-auto px-4">
                            <div class="grid lg:grid-cols-3 gap-3">
                                <div class="col-span-2 space-y-2">
                                    <div class="form-group">
                                        <label for="name" class="form_custom_lable">Hotel Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control !bg-gray-100 form-control-sm placeholder:text-textmuted" wire:model="name" placeholder="Enter Hotel Name">
                                        @error('name')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-span-1 space-y-2">
                                    <div class="form-group">
                                        <label for="hotel_category" class="form_custom_lable">hotel category<span class="text-danger">*</span></label>
                                        <select id="hotel_category" class="form-select w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 form-control-sm" wire:model="hotel_category">
                                            <option value="" selected hidden>Select category..</option>
                                            @foreach ($hotel_categories as $category_item)
                                                <option value="{{$category_item->id}}">{{$category_item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('hotel_category')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-3 mt-4"> 
                                <div class="space-y-2">
                                    <div class="form-group">
                                        <label for="destination" class="form_custom_lable">Destinations<span class="text-danger">*</span></label>
                                        <select id="destination" class="form-select w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 form-control-sm" wire:model="destination" wire:change="ChangeDestination($event.target.value)">
                                            <option value="" selected hidden>Select destination..</option>
                                            @foreach ($destinations as $dest_item)
                                                <option value="{{$dest_item->id}}">{{$dest_item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('destination')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="form-group">
                                        <label for="division" class="form_custom_lable">Divisions<span class="text-danger">*</span></label>
                                        <select id="division" class="form-select w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 form-control-sm" wire:model="division">
                                            <option value="" selected disabled>Select division</option>
                                            @foreach ($divisions as $div_item)
                                                <option value="{{$div_item->id}}">{{$div_item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('division')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-3 mt-4"> 
                                <div class="space-y-2">
                                    <div class="form-group">
                                        <label for="mobile" class="form_custom_lable">Mobile<span class="text-danger">*</span></label>
                                        <div class="relative">
                                            <!-- Phone Number Input -->
                                            <input type="number" id="mobile" wire:model="mobile" class="ti-form-input ltr:pl-20 rtl:pr-20 focus:z-10 form-control-sm" placeholder="Ex:9876543210" style="padding-left: 5rem !important;"> <!-- Use the passed value or fallback to old -->
                                        
                                            <!-- Country Selector -->
                                            <div
                                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center text-gray-500 dark:text-white/70 ltr:pl-px rtl:pr-px">
                                                <label for="mobile-country" class="sr-only">Country</label>
                                                <select id="mobile-country" name="mobile-country"
                                                    class="block w-full border-defaultborder !py-1 !border-0 dark:border-defaultborder/10 focus:ring-primary focus:border-primary dark:bg-bodybg rtl:ps-2 rtl:pe-[2.25rem]">
                                                    <option value="+91" selected="">
                                                        +91
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('mobile')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="form-group">
                                        <label for="whatsapp" class="form_custom_lable">WhatsApp<span class="text-danger">*</span></label>
                                        <div class="relative">
                                            <!-- Phone Number Input -->
                                            <input type="number" id="whatsapp" wire:model="whatsapp" class="ti-form-input ltr:pl-20 rtl:pr-20 focus:z-10 form-control-sm" placeholder="Ex:9876543210" value="" style="padding-left: 5rem !important;"> <!-- Use the passed value or fallback to old -->
                                        
                                            <!-- Country Selector -->
                                            <div
                                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center text-gray-500 dark:text-white/70 ltr:pl-px rtl:pr-px">
                                                <label for="mobile-country" class="sr-only">Country</label>
                                                <select id="mobile-country" name="mobile-country"
                                                    class="block w-full border-defaultborder !py-1 !border-0 dark:border-defaultborder/10 focus:ring-primary focus:border-primary dark:bg-bodybg rtl:ps-2 rtl:pe-[2.25rem]">
                                                    <option value="+91" selected="">
                                                        +91
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        @error('whatsapp')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-2 gap-3 mt-4"> 
                                <div class="space-y-2">
                                    <div class="form-group">
                                        <label for="email" class="form_custom_lable">Email<span class="text-danger">*</span></label>
                                        <input type="text" name="email" id="email" value="" class="form-control !bg-gray-100 form-control-sm placeholder:text-textmuted" wire:model="email" placeholder="Enter email">
                                        @error('email')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="form-group">
                                        <label for="secndary_email" class="form_custom_lable">Secondary Email</label>
                                        <input type="text" name="secndary_email" id="secndary_email" value="" class="form-control !bg-gray-100 form-control-sm placeholder:text-textmuted" wire:model="secndary_email" placeholder="Entee secondary email">
                                        @error('secndary_email')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="grid lg:grid-cols-1 gap-3 mt-4"> 
                                <div class="space-y-2">
                                    <div class="form-group mb-4 px-1">
                                        <label for="address" class="form_custom_lable">Hotel Address</label>
                                        <textarea name="address" id="address" wire:model="address" class="form-control form-control-sm">            
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <div class="container mx-auto px-4 new-activity">
                            <!-- Main Image Upload -->
                            <span class="badge gap-2 bg-primary/10 text-primary uppercase">
                                <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                                Main Image
                            </span>
                            <div class="mb-4 mt-1">
                                <div class="border-l-0 sightseeing_images">
                                    <label class="file-upload-container">
                                        <span class="choose-text">Upload Main Image</span>
                                        <input type="file" wire:model="image" class="file-input" accept="image/*">
                                    </label>
                                </div>
                                @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            
                                <!-- Main Image Preview -->
                                @if ($imagePreview)
                                    <div class="mt-3">
                                        <img src="{{ $imagePreview }}" alt="Preview" class="h-40 w-40 object-cover border rounded">
                                    </div>
                                @endif
                            </div>
            
                            <!-- Additional Images Upload -->
                            <span class="badge gap-2 bg-primary/10 text-primary uppercase">
                                <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                                Additional Images
                            </span>
                            <div class="mt-1 itinerary-build">
                                <div class="border-l-0 sightseeing_images">
                                    <label class="file-upload-container">
                                        <span class="choose-text">Upload Additional Images</span>
                                        <input type="file" wire:model="images" class="file-input" accept="image/*" multiple>
                                    </label>
                                </div>
                                @error('images.*') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            
                                <!-- Additional Images Previews -->
                                <div class="grid grid-cols-3 gap-2 mt-3 image-preview-container">
                                    @foreach ($imagePreviews as $index => $preview)
                                        <div class="relative image-preview peer-checked:border-blue-500 relative !overflow-visible">
                                            <img src="{{ $preview }}" alt="Preview" class="image-thumbnail cursor-pointer">
                                            <button type="button" wire:click="removeImage({{ $index }})" class="delete-icon"> ✖                               
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box custom-box">
            <div class="box-body">
                <div class="grid grid-cols-12 gap-3">
                    <div class="col-span-12">
                        <span class="badge gap-2 bg-primary/10 text-primary uppercase">
                        <span class="w-1.5 h-1.5 inline-block bg-primary rounded-full"></span>
                        Rooms Information</span>
                        @foreach ($rooms as $index => $room)
                            <div class="sm:flex flex-wrap rounded-sm mt-2">
                                <div class="w-full sm:w-auto w-15">
                                    <label class="form_custom_lable"> Room Category</label>
                                    <select name="rooms[{{ $index }}][room]" wire:model="rooms.{{ $index }}.room"
                                        class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5 @error('rooms.'.$index.'.room') border-red-500 @enderror">
                                        <option value="">Select Room</option>
                                        @foreach ($room_categories as $room_cat_item)
                                            <option value="{{ ucwords($room_cat_item->name) }}">{{ ucwords($room_cat_item->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('rooms.'.$index.'.room')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <div class="w-full sm:w-auto w-12">
                                    <label class="form_custom_lable"> No of Rooms </label>
                                    <input type="number" wire:model="rooms.{{ $index }}.no_of_room"
                                        class="form-control ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm @error('rooms.'.$index.'.no_of_room') border-red-500 @enderror"
                                        placeholder="No of Room">
                                    @error('rooms.'.$index.'.no_of_room')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <div class="w-full sm:w-auto w-12">
                                    <label class="form_custom_lable"> Capacity </label>
                                    <input type="number" wire:model="rooms.{{ $index }}.capacity"
                                        class="form-control ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm @error('rooms.'.$index.'.capacity') border-red-500 @enderror"
                                        placeholder="Capacity">
                                    @error('rooms.'.$index.'.capacity')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <div class="w-full sm:w-auto w-12">
                                    <label class="form_custom_lable"> No of Bed </label>
                                    <input type="number" wire:model="rooms.{{ $index }}.no_of_bed"
                                        class="form-control ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm @error('rooms.'.$index.'.no_of_bed') border-red-500 @enderror"
                                        placeholder="No of Bed">
                                    @error('rooms.'.$index.'.no_of_bed')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <div class="w-full sm:w-auto w-12">
                                    <label class="form_custom_lable"> Mattress </label>
                                    <input type="number" wire:model="rooms.{{ $index }}.mattress"
                                        class="form-control ti-form-input rounded-none placeholder:text-textmuted text-sm form-control-sm @error('rooms.'.$index.'.mattress') border-red-500 @enderror"
                                        placeholder="Mattress">
                                        @error('rooms.'.$index.'.mattress')
                                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                        @enderror
                                </div>
                        
                                <div class="w-full sm:w-auto w-15">
                                    <label class="form_custom_lable"> Room Type </label>
                                    <select name="rooms[{{ $index }}][room_type]" wire:model="rooms.{{ $index }}.room_type"
                                        class="ti-form-input rounded-none ltr:!rounded-br-none placeholder:text-textmuted text-sm padding_1_5 @error('rooms.'.$index.'.room_type') border-red-500 @enderror">
                                        <option value="">Select type</option>
                                        <option value="AC">AC</option>
                                        <option value="Non-AC">Non-AC</option>
                                    </select>
                                    @error('rooms.'.$index.'.room_type')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                <div class="w-full sm:w-auto w-12">
                                    <label class="form_custom_lable"> Ammenity </label>
                                    <div class="select-group">
                                        <button type="button"
                                            class="show-btm bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                            Choose Amminity
                                        </button>
                                        <div class="list-group">
                                            @foreach ($hotel_ammenities as $ammenity)
                                                <label>
                                                    <input type="checkbox" class="form-control"
                                                        wire:model="rooms.{{ $index }}.amenities"
                                                        value="{{ $ammenity->name }}">
                                                    {{ ucwords($ammenity->name) }}
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('rooms.'.$index.'.amenities')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                        
                                @if ($index == 0)
                                    <div class="w-full sm:w-auto w-8 mt-22">
                                        <button type="button" wire:click="addRoom"
                                            class="change-text-button ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave me-[0.375rem]">
                                            <i class="ri-add-circle-line"></i> Add
                                        </button>
                                    </div>
                                @endif
                        
                                @if ($index > 0)
                                    <div class="w-full sm:w-auto w-8">
                                        <button type="button" wire:click="removeRoom({{ $index }})"
                                            class="change-text-button ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave me-[0.375rem]">
                                            <i class="ri-delete-bin-line"></i> Remove
                                        </button>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {!! session('error') !!}
                            </div>
                        @endif
                        <div class="flex justify-end">
                            <button type="submit" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]"> Save Hotel </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Section: 4 Columns -->
        <div wire:loading class="loader" wire:target="ChangeDestination,removeImage,addRoom,removeRoom,saveHotel">
            <div class="spinner">
            <img src="{{asset('build/assets/images/media/loader.svg')}}" alt="">
            </div>
        </div>
    </form>
</div>
<script>
    $(document).ready(function () {
        $('.select2').select2();
        $('.select2').on('change', function (e) {
            var value = $(this).select2("val");
            // var index = $(this).data("id");
            // @this.call('getHotel', index,value);
        });
    });
</script>
