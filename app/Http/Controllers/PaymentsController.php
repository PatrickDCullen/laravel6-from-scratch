<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ProductPurchased;
use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        // request()->user()->notify(new PaymentReceived(900));

        ProductPurchased::dispatch('toy');
    }
}
