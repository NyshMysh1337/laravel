<?php

namespace App\Http\Controllers;

use App\Hobbi;
use App\Post;
use Illuminate\Http\Request;

class HobbiController extends Controller
{
    public function getHobbi() {
        $hobbis = Hobbi::all();
        foreach ($hobbis as $hobbi) {
            dump($hobbi->title);
        }
    }
}
