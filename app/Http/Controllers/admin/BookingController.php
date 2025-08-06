<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BookingModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class BookingController extends Controller
{

    public function showBooking(){
        $booking = BookingModel::orderBy('created_at', 'desc')->get();
        $view = path_view('admin.booking-admin');
        return view($view, compact('booking'));
    }

}
