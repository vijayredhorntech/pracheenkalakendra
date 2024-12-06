<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Http\Requests\NotificationRequest;
use App\Http\Requests\ProgrammeRequest;
use App\Models\Download;
use App\Models\Member;
use App\Models\Notification;
use App\Models\ProgramArtist;
use App\Models\ProgramImage;
use App\Models\Programme;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    // programme functions here
    public function showProgramme()
    {

        $formData=[
            'method'=>'POST',
            'url'=>route('programme.create'),
            'type'=>'show'
        ];

        $programmes = Programme::all();
        return view('notification.programme')->with('formData', $formData)->with('programmes', $programmes);
    }
    public function createProgramme(ProgrammeRequest $request){


            $request->validate([
                'programme_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            ]);

            $programme = new Programme();
            $programme->programme_title = $request->programme_title;
            $programme->programme_description = $request->programme_description;
            $programme->programme_location = $request->programme_location;
            $programme->programme_date = $request->programme_date;
            $programme->programme_time = $request->programme_time;
            if ($request->hasFile('programme_image')) {
                 $image = $request->file('programme_image');
                  $programme->programme_image = str_replace('public/', '', $image->store('public'));
                }
            if ($programme->save())
            {
                if ($request->hasFile('programme_images')) {
                    foreach ($request->file('programme_images') as $image) {
                        $programmeImage = new ProgramImage();
                        $programmeImage->programme_id = $programme->id;
                        $programmeImage->programme_images = str_replace('public/', '', $image->store('public'));
                        $programmeImage->save();
                    }
                }

                foreach ($request->input('name') as $index => $name) {
                    $programmeArtist = new ProgramArtist();
                    $programmeArtist->programme_id = $programme->id;
                    $programmeArtist->name = $name;
                    $programmeArtist->description = $request->input('description')[$index];
                    if ($request->hasFile("image.$index")) {
                        $image = $request->file('image')[$index];
                        $programmeArtist->image = str_replace('public/', '', $image->store('public'));
                    }
                    $programmeArtist->save();
                }

            }

            $request->session()->flash('success', 'Programme created successfully');
            return redirect()->route('programme.show');
    }


    public function editProgramme($id){
        $formData=[
            'method'=>'POST',
            'url'=>route('programme.update', $id),
            'type'=>'edit'
        ];
        $programme = Programme::find($id);
        $programmes = Programme::all();
        return view('notification.programme')->with('formData', $formData)->with('programmes', $programmes)->with('programme', $programme);
    }


    public function updateProgramme(ProgrammeRequest $request, $id){
        $programme = Programme::find($id);
        $programme->programme_title = $request->programme_title;
        $programme->programme_description = $request->programme_description;
        $programme->programme_location = $request->programme_location;
        $programme->programme_date = $request->programme_date;
        $programme->programme_time = $request->programme_time;
        if ($request->hasFile('programme_image')) {
            $image = $request->file('programme_image');
            $programme->programme_image = str_replace('public/', '', $image->store('public'));
        }
        if ($programme->save())
        {
            if ($request->hasFile('programme_images')) {
                foreach ($request->file('programme_images') as $image) {
                    $programmeImage = new ProgramImage();
                    $programmeImage->programme_id = $programme->id;
                    $programmeImage->programme_images = str_replace('public/', '', $image->store('public'));
                    $programmeImage->save();
                }
            }
        }

        $request->session()->flash('success', 'Programme updated successfully');
        return redirect()->route('programme.show');
    }
    public function deleteProgramme($id){
        $programme = Programme::find($id);
        $programme->delete();
        session()->flash('success', 'Programme Deleted successfully');
        return redirect()->route('programme.show');
    }

 // notification function here
    public function showNotification()
    {
        $formData=[
            'method'=>'POST',
            'url'=>route('notification.create'),
            'type'=>'show'
        ];
        $notifications = Notification::all();
        return view('notification.notification')->with('formData', $formData)->with('notifications', $notifications);
    }
    public function createNotification(NotificationRequest $request){
        $request->validate([
            'notification_file' => 'mimes:jpeg,png,jpg,gif,pdf|max:2048',
        ]);

        $notification = new Notification();
        $notification->notification_title = $request->notification_title;
        $notification->notification_date = $request->notification_date;
        if ($request->hasFile('notification_file')) {
            $file = $request->file('notification_file');
            $notification->notification_file = str_replace('public/', '', $file->store('public'));
        }
        $notification->save();
        $request->session()->flash('success', 'Notification created successfully');
        return redirect()->route('notification.show');
    }
    public function editNotification($id){
        $formData=[
            'method'=>'POST',
            'url'=>route('notification.update', $id),
            'type'=>'edit'
        ];
        $notifications = Notification::all();
        $notification = Notification::find($id);
        return view('notification.notification')->with('formData', $formData)->with('notification', $notification)->with('notifications', $notifications);
    }
    public function updateNotification(NotificationRequest $request, $id){
        $notification = Notification::find($id);
        $notification->notification_title = $request->notification_title;
        $notification->notification_date = $request->notification_date;
        if ($request->hasFile('notification_file')) {
            $file = $request->file('notification_file');
            $notification->notification_file = str_replace('public/', '', $file->store('public'));
        }
        $notification->save();
        $request->session()->flash('success', 'Notification updated successfully');
        return redirect()->route('notification.show');
    }
    public function deleteNotification($id){
        $notification = Notification::find($id);
        $notification->delete();
        session()->flash('success', 'Notification Deleted successfully');
        return redirect()->route('notification.show');
    }


    public function programImageDelete($id){
        $programImage = ProgramImage::find($id);
        $programImage->delete();
        session()->flash('success', 'Programme Image Deleted successfully');
        return redirect()->back();
    }

    public function programArtistDelete($id){
        $programArtist = ProgramArtist::find($id);
        $programArtist->delete();
        session()->flash('success', 'Programme Artist Deleted successfully');
        return redirect()->back();
    }

 // downloads function here
    public function showDownloads()
    {
        $formData=[
            'method'=>'POST',
            'url'=>route('downloads.create'),
            'type'=>'show'
        ];
        $downloads = Download::all();
        return view('notification.downloads')->with('formData', $formData)->with('downloads', $downloads);
    }
    public function createDownloads(Request $request){
        $request->validate([
             'title' => 'required',
            'download_file' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:2048',
        ]);
        $download = new Download();
        $download->title = $request->title;
        $download->new_or_not = $request->new_or_not ? 1 : 0;
        if ($request->hasFile('download_file')) {
            $file = $request->file('download_file');
            $download->download_file = str_replace('public/', '', $file->store('public'));
        }
        $download->save();
        $request->session()->flash('success', 'Download created successfully');
        return redirect()->route('downloads.show');
    }
    public function editDownloads($id){
        $formData=[
            'method'=>'POST',
            'url'=>route('downloads.update', $id),
            'type'=>'edit'
        ];
        $downloads = Download::all();
        $download = Download::find($id);
        return view('notification.downloads')->with('formData', $formData)->with('download', $download)->with('downloads', $downloads);
    }
    public function updateDownloads(Request $request, $id){
        $download = Download::find($id);
        $download->title = $request->title;
        $download->new_or_not = $request->new_or_not ? 1 : 0;
        if ($request->hasFile('download_file')) {
            $file = $request->file('download_file');
            $download->download_file = str_replace('public/', '', $file->store('public'));
        }
        $download->save();
        $request->session()->flash('success', 'Download updated successfully');
        return redirect()->route('downloads.show');
    }
    public function deleteDownloads($id){
        $download = Download::find($id);
        $download->delete();
        session()->flash('success', 'Download Deleted successfully');
        return redirect()->route('downloads.show');
    }
}
