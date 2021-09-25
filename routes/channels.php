<?php

use Illuminate\Support\Facades\Broadcast;


/*
|--------------------------------------------------------------------------
|  ADMIN CHANNELS
|--------------------------------------------------------------------------
*/

Broadcast::channel('App.Models.Admin.{id}', function ($admin, $id) {
    return (int)$admin->id === (int)$id;
});

/*
|--------------------------------------------------------------------------
|  ORGANIZER CHANNELS
|--------------------------------------------------------------------------
*/

Broadcast::channel('App.Models.Organizer.{id}', function ($organizer, $id) {
    return (int)$organizer->id === (int)$id;
});


/*
|--------------------------------------------------------------------------
|  SPONSOR CHANNELS
|--------------------------------------------------------------------------
*/

Broadcast::channel('App.Models.Sponsor.{id}', function ($sponsor, $id) {
    return (int)$sponsor->id === (int)$id;
});
