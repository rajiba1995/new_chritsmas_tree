<div>
    <div class="space-y-4 dropzone">
        <!-- Display Existing Images -->
        <div class="flex flex-wrap gap-4">
            @if (!empty($oldImages))
                @foreach ($oldImages as $index => $oldImage)
                    <div class="relative">
                        <img src="{{ asset('storage/' . $oldImage) }}" 
                             alt="Uploaded Image" 
                             class="w-24 h-24 object-cover rounded-md">
                        <button type="button" 
                                class="absolute right-1 bg-red-500 text-white rounded-full remove_image_icon"
                                wire:click="removeImage({{ $index }})">
                            &times;
                        </button>
                    </div>
                @endforeach
            @endif

            <!-- Display New Image Previews -->
            {{-- {{dd($append_images)}} --}}
            @if (!empty($append_images))
                @foreach ($append_images as $index => $image)
                    <div class="relative">
                        <img src="{{ asset('storage/' .$image['file_path']) }}" 
                             alt="Image Preview" 
                             class="w-24 h-24 object-cover rounded-md">
                        <button type="button" 
                                class="absolute right-1 bg-red-500 text-white rounded-full remove_image_icon"
                                wire:click="removeImage({{ $index }})">
                            &times;
                        </button>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- File Input for New Images -->
        <div>
            <input type="file" 
                   wire:model="images" 
                   multiple 
                   accept="image/*" 
                   name="{{ $inputName }}" 
                   class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:bg-gray-100 file:text-gray-700">
            @error('images.*') 
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
