<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BookingModel;
use App\Models\product\ProductPackage;
use Illuminate\Http\Request;

use function App\Helper\path_view;

class BookingController extends Controller
{

    public function showBooking(){
        $booking = BookingModel::orderBy('created_at', 'desc')->get();
        $view = path_view('admin.package.booking-admin');
        return view($view, compact('booking'));
    }

    public function show($id)
    {
        $dataProduct = ProductPackage::findOrFail($id);

        $bookedDates = BookingModel::where('package_id', $id)
            ->whereNotIn('status', ['dibatalkan'])

            ->pluck('tanggal_acara')
            ->map(function ($date) {
                return \Carbon\Carbon::parse($date)->format('Y-m-d');
            })
            ->toArray();

        return view('page.produk-detail', compact('dataProduct', 'bookedDates'));
    }


}
