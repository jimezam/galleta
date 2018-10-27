<?php
use App\Http\Controllers\BotManController;

use App\Cookie;

$botman = resolve('botman');

$botman->hears('romper galleta', function ($bot) {

    $cookie = Cookie::all()->random(1)->first();

    $bot->reply($cookie->message);
});


// $botman->hears('Hi', function ($bot) {
//     $bot->reply('Hello!');
// });
// $botman->hears('Start conversation', BotManController::class.'@startConversation');
