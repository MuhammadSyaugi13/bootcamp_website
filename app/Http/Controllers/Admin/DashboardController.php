<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // get all data on table checkout
        $checkout = Checkout::with('Camp')->get();
        
        return view('admin.dashboard', [
            'checkouts' => $checkout
        ]);
    }
}
