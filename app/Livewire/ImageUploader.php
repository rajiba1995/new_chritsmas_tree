<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\HotelImage;
use App\Helpers\CustomHelper;

class ImageUploader extends Component
{
    use WithFileUploads;

    public $oldImages = [];
    public $images = []; // Holds new uploaded images
    public $inputName;
    public $hotelId;
    public $append_images = [];

    public function mount($oldImages = [], $inputName = 'images[]', $hotelId = null)
    {
        $this->oldImages = $oldImages;
        $this->inputName = $inputName;
        $this->hotelId = $hotelId;
    }

    public function updatedImages()
    {
        // Validate uploaded images
        $this->validate([
            'images.*' => 'image|mimetypes:image/jpeg,image/png,image/jpg,image/gif,image/svg+xml,image/webp|max:2048',
        ]);
        

        // Check if there are new images to process
        if (!empty($this->images) && $this->hotelId) {
            $imageData = [];
            foreach ($this->images as $image) {
                // Generate a unique filename
               
                $timestamp = now()->format('YmdHis'); // Format: YYYYMMDDHHMMSS
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
                $imageDataForDB[] = [
                    'hotel_id' => $this->hotelId,
                    'image_path' => $uploadedPath, // Store the generated path
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            // Batch insert into the database
            if (!empty($imageDataForDB)) {
                HotelImage::insert($imageDataForDB);
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
