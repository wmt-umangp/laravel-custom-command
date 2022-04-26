<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('show:no_of_users{count}{--d|delete=}',function(){
    // $this->comment("Number of Users:".User::all());
    $userlimit=$this->argument('count');
    $this->table(
        ['Name','Email'],
        User::all('Name','Email')->take($userlimit));
})->purpose('Display all the users');
