<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentTransaction;

class TransactionController extends Controller
{
    public function processPayment(Request $request)
    {
        // Logic for processing a payment
    }

    public function applyDiscount(Request $request, PaymentTransaction $transaction)
    {
        // Logic for applying a discount to a transaction
    }
}
