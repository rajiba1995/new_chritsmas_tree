<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\HotelImage;
use App\Helpers\CustomHelper;

class ImagePreview extends Component
{
    use WithFileUploads;

    public $oldImages = [];
    public $images = []; // Holds new uploaded images
    public $inputName;
    public $append_images = [];

    public function mount($oldImages = [], $inputName = 'images[]')
    {
        $this->oldImages = $oldImages;
        $this->inputName = $inputName;
    }

    public function updatedImages()
    {
      
        // Validate uploaded images
        $this->validate([
            'images.*' => 'image|mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg+xml,image/webp|max:2048',
        ]);
        

        if (!empty($this->images) ) {
            $imageData = [];
            foreach ($this->images as $image) {
                // Generate a unique filename
                $timestamp = now()->format('YmdHis'); // Format: YYYYMMDDHHMMSS
                // $randomNumber = rand(100000, 999999); // Generate a 6-digit random number
                // $extension = $image->getClientOriginalExtension(); // Get the original file extension
                // $uniqueFilename = "{$timestamp}_{$randomNumber}.{$extension}";
        
                // Store the image with the unique filename
                // $path = $image->storeAs('hotel_images', $uniqueFilename, 'public');
                $dynamicText = rand(1111, 9999);
                $uploadedPath = CustomHelper::uploadImage($image, $dynamicText, $timestamp, 'hotel');
        
                $imageData = [
                    'name' => $image->getClientOriginalName(),
                    'size' => $image->getSize(),
                    'mime' => $image->getMimeType(),
                    'file_path' => $uploadedPath // Add custom path here
                ];
            
                // Add this image's data to the images array
                $this->append_images[] = $imageData;
                
            }
           
        }
       
    }

    public function removeImage($index)
    {
        // Check if the image exists in oldImages
        if (isset($this->oldImages[$index])) {
            $imagePath = storage_path('app/public/' . $this->oldImages[$index]);
            // Remove file from storage if it exists
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Optionally delete the record from the database
            HotelImage::where('image_path', $this->oldImages[$index])->delete();

            // Remove the image from the oldImages array
            unset($this->oldImages[$index]);
            $this->oldImages = array_values($this->oldImages); // Re-index the array
        }
        // Check and remove from images
        if (isset($this->append_images[$index])) {
            $image = $this->append_images[$index];
            
            // If the image has a temporary URL, it's not in the database yet, but we should remove it from the array
           
            // Otherwise, it may already be stored in the database
            $path = $image['file_path'];
            HotelImage::where('image_path', $path)->delete();

            // Remove file from storage if it exists
            $imagePath = storage_path('app/public/' . $path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            unset($this->append_images[$index]);
            $this->append_images = array_values($this->append_images); // Re-index the array
        }
    }

    public function render()
    {
        return view('livewire.image-uploader');
    }
}
