<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class ProfileClientController extends Controller
{
    public function showProfile(){
        $view = path_view('client.profile-client');
        return view($view);
    }
}
