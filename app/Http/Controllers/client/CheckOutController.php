<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\client\UserBookingModel;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class CheckOutController extends Controller
{
    public function checkOut($id){
        $bookingProduct = UserBookingModel::where('id', $id)->first();
        $view = path_view('client.product-client');
        return view($view, compact('bookingProduct'));
    }
}
