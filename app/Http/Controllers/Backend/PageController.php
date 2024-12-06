<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function store(Request $request, Page $page = null)
{
    // If a page is passed, this is an update; if not, it's a new page creation.
    $page = $page ?? new Page();

    // Validate input data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'content' => 'nullable|string',
        'gallery_title.*' => 'nullable|string|max:255',
        'gallery_images.*.files.*' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        'image_captions.*.*' => 'nullable|string|max:255',
    ]);

    $validator->after(function ($validator) use ($request) {
        $hasContent = !empty($request->content);
        $hasGallery = !empty($request->gallery_images);

        if (!$hasContent && !$hasGallery) {
            $validator->errors()->add('content', 'Either content or at least one gallery with images is required.');
        }
    });

    $validator->validate();

    // Save the page data
    $page->name = $request->name;
    $page->content = $request->content;
    $page->save();

    // Process gallery images and captions
    if ($request->has('gallery_images')) {
        foreach ($request->gallery_images as $galleryIndex => $gallery) {
            if (isset($gallery['files'])) {
                foreach ($gallery['files'] as $fileIndex => $file) {
                    $caption = $request->image_captions[$galleryIndex][$fileIndex] ?? null;
                    $title = $request->gallery_title[$galleryIndex] ?? null;

                    if (isset($gallery['file_ids'][$fileIndex])) {
                        // Update existing media item
                        $mediaItem = $page->getMedia('gallery_images')->find($gallery['file_ids'][$fileIndex]);
                        if ($mediaItem) {
                            $mediaItem->setCustomProperty('caption', $caption);
                            $mediaItem->setCustomProperty('gallery_title', $title);
                            $mediaItem->save();
                        }
                    } else {
                        // Add new media item
                        $page->addMedia($file)
                            ->withCustomProperties([
                                'gallery_title' => $title,
                                'caption' => $caption,
                            ])
                            ->toMediaCollection('gallery_images');
                    }
                }
            } else {
                foreach ($gallery['file_ids'] as $fileIndex => $file) {
                    $caption = $request->image_captions[$galleryIndex][$fileIndex] ?? null;
                    $title = $request->gallery_title[$galleryIndex] ?? null;
                    $mediaItem = $page->getMedia('gallery_images')->find($file);
                    if ($mediaItem) {
                        // Update custom properties (like caption and gallery title)
                        $mediaItem->setCustomProperty('caption', $caption);
                        $mediaItem->setCustomProperty('gallery_title', $title);
                
                        // Save the updated media item
                        $mediaItem->save();
                    }
                }
            }
        }
    }

    return redirect()->route('create-page')->with('success', 'Page saved successfully.');
}


public function toggle(Page $page){
    $status = 'active';
    if($page->status == 'active'){
       $status = 'inactive';
    }else{
        $status = 'active';
    }
    $page->status = $status;
    $page->save();
    return  redirect()->back()->with('success', 'Page status updated successfully.');
}
    

}
