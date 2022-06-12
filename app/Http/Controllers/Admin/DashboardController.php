<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $customer = User::count();
        $revenue = Transaction::where('transaction_status', 'SUCCESS')->sum('total_price');
        // $revenue = Transaction::sum('total_price');
        $transaction = Transaction::count();
        return view('pages.admin.dashboard', [
            'customer'    => $customer,
            'revenue'     => $revenue,
            'transaction' => $transaction
        ]);
    }
}
