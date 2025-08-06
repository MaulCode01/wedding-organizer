<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\auth\AuthModel;
use function App\Helper\path_view;

class AdminController extends Controller
{
    public function index(){
        $dataUser = AuthModel::where('role', 'client')->count();
        $view = path_view('admin.dashboard-admin');
        return view($view, compact('dataUser'));
    }
}
