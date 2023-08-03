<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadimage extends Controller
{
    public function uploading(Request $request)

    
        
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the allowed image types and maximum size as needed
        ]);

        // Get the uploaded image file
        $image = $request->file('image');

        // Generate a unique name for the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Save the original image to the public/uploads directory
        $image->move(public_path('uploads'), $imageName);

        // Create an instance of Intervention Image
        $img = Image::make(public_path('uploads/' . $imageName));

        // Convert the image to black and white
        $img->greyscale();

        // Save the black and white image in the public/uploads directory with a different name
        $bwImageName = 'bw_' . $imageName;
        $img->save(public_path('uploads/' . $bwImageName));

        return response()->json(['message' => 'Image uploaded and converted to black and white successfully.', 'bw_image_url' => asset('uploads/' . $bwImageName)]);
    

    }
}
