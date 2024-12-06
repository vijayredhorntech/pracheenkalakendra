<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OtherpagesController;
use App\Http\Controllers\PagesController;
use App\Models\Page;
use Illuminate\Support\Facades\Route;


//auth routes here

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/signIn', [AuthController::class, 'signIn'])->name('signIn');
Route::get('/forget-password', function () {
    return view('auth.forget-password');
})->name('forget-password');
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('reset-password');
// auth middleware group here
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        $upcomingProgrammes = \App\Models\Programme::where('programme_date', '>', now())
            ->orderBy('programme_date', 'asc')
            ->get();

        $notifications = \App\Models\Notification::orderBy('notification_date', 'desc')->get();
        $members = \App\Models\Member::get()->all();
        $pages = \App\Models\Page::all();
        return view('dashboard')
            ->with('upcomingProgrammes', $upcomingProgrammes)
            ->with('notifications', $notifications)
            ->with('members',$members)
            ->with('pages',$pages);
    })->name('dashboard');


    Route::name('programme.')->group(function () {
        Route::get('programme-show', [NotificationController::class, 'showProgramme'])->name('show');
        Route::post('programme-create', [NotificationController::class, 'createProgramme'])->name('create');
        Route::get('programme-edit/{id}', [NotificationController::class, 'editProgramme'])->name('edit');
        Route::post('programme-update/{id}', [NotificationController::class, 'updateProgramme'])->name('update');
        Route::get('programme-delete/{id}', [NotificationController::class, 'deleteProgramme'])->name('delete');
    });

    Route::name('notification.')->group(function () {
        Route::get('notification-show', [NotificationController::class, 'showNotification'])->name('show');
        Route::post('notification-create', [NotificationController::class, 'createNotification'])->name('create');
        Route::get('notification-edit/{id}', [NotificationController::class, 'editNotification'])->name('edit');
        Route::post('notification-update/{id}', [NotificationController::class, 'updateNotification'])->name('update');
        Route::get('notification-delete/{id}', [NotificationController::class, 'deleteNotification'])->name('delete');
    });

    Route::name('downloads.')->group(function () {
        Route::get('download-show', [NotificationController::class, 'showDownloads'])->name('show');
        Route::post('download-create', [NotificationController::class, 'createDownloads'])->name('create');
        Route::get('download-edit/{id}', [NotificationController::class, 'editDownloads'])->name('edit');
        Route::post('download-update/{id}', [NotificationController::class, 'updateDownloads'])->name('update');
        Route::get('download-delete/{id}', [NotificationController::class, 'deleteDownloads'])->name('delete');
    });


    Route::name('members.')->group(function () {
        Route::get('members-show', [OtherpagesController::class, 'showMember'])->name('show');
        Route::post('members-create', [OtherpagesController::class, 'createMember'])->name('create');
        Route::get('members-edit/{id}', [OtherpagesController::class, 'editMember'])->name('edit');
        Route::post('members-update/{id}', [OtherpagesController::class, 'updateMember'])->name('update');
        Route::get('members-delete/{id}', [OtherpagesController::class, 'deleteMember'])->name('delete');
    });

    Route::name('social-link.')->group(function () {
        Route::get('social-link-show', [OtherpagesController::class, 'showSocialLinks'])->name('show');
        Route::post('social-link-create', [OtherpagesController::class, 'createSocialLinks'])->name('create');
        Route::get('social-link-edit/{id}', [OtherpagesController::class, 'editSocialLinks'])->name('edit');
        Route::post('social-link-update/{id}', [OtherpagesController::class, 'updateSocialLinks'])->name('update');
        Route::get('social-link-delete/{id}', [OtherpagesController::class, 'deleteSocialLinks'])->name('delete');
    });

    Route::name('contact.')->group(function () {
        Route::get('contact-show', [OtherpagesController::class, 'showContact'])->name('show');
        Route::post('contact-create', [OtherpagesController::class, 'createContact'])->name('create');
        Route::get('contact-edit/{id}', [OtherpagesController::class, 'editContact'])->name('edit');
        Route::post('contact-update/{id}', [OtherpagesController::class, 'updateContact'])->name('update');
        Route::get('contact-delete/{id}', [OtherpagesController::class, 'deleteContact'])->name('delete');
    });


    Route::get('/create-page/{page?}', function (Page $page = null) {
        $galleries = [];
      
    if ($page) {
        $groupedMedia = $page->getMedia('gallery_images')->groupBy(function($media) {
            return $media->getCustomProperty('gallery_title');
        });
    
        // Prepare the galleries array to be passed to the view
        $galleries = $groupedMedia->map(function ($gallery, $title) {
            return [
                'title' => $title,
                'images' => $gallery->map(function ($media) {
                    return [
                        'src' => $media->getUrl(),
                        'caption' => $media->getCustomProperty('caption'),
                        'id' => $media->id 
                    ];
                })->toArray(),
            ];
        })->values()->toArray(); 
    }

    // Send the page and gallery data to the view
    return view('pages.create-page', compact('page', 'galleries'));
    })->name('create-page');

    Route::post('/store-page/{page?}', [\App\Http\Controllers\Backend\PageController::class, 'store'])->name('store-page');
    Route::get('/toggle-page-status/{page}', [\App\Http\Controllers\Backend\PageController::class, 'toggle'])->name('toggle-page-status');

    Route::get('/pages', function () {

        $pages = Page::all();

        return view('pages.show')->with('pages',$pages);
    })->name('show-page');


    Route::get('/menu', function(){
        return view('backend.menu');
    })->name('create-menu');



});

Route::middleware('globalMenu')->group(function(){
    Route::get('/', [PagesController::class, 'index'])->name('index');
    Route::get('/page/{slug?}/{file?}', [PagesController::class, 'page'])->name('page');
    Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
    Route::get('/executive_board', [PagesController::class, 'executive_board'])->name('executive_board');
    Route::get('/general_body', [PagesController::class, 'general_body'])->name('general_body');
    Route::get('/announcements', [PagesController::class, 'announcements'])->name('announcements');
    Route::get('/events', [PagesController::class, 'events'])->name('events');
    Route::get('/downloads', [PagesController::class, 'downloads'])->name('downloads');
});





