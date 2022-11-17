<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PaymentController extends Controller
{
    public function payment_list()
    {
        $payment = Payment::paginate(2);
        // dd($payment);
        return view('backend.pages.payment.list', compact('payment'));
    }
}
