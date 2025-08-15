<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\payment;

class paymentController extends Controller
{

    // In your controller (e.g., CustomerController)
public function index()
{
    $customers = Customer::latest()->paginate(10);
    $customer = null; // Default to null or fetch a specific customer if needed
    return view('frontend.Customer.post', compact('customers', 'customer'));
}

    public function showPaymentForm(Customer $customer)
    {
        return view('payments.form', [
            'customer' => $customer,
            'baseFee' => 500.00,
            'urgentFee' => $customer->urgent ? 200.00 : 0.00
        ]);
    }

    public function processPayment(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            'payment_method' => 'required|string|in:card,bank,paypal'
        ]);

        $baseFee = 500.00;
        $urgentFee = $customer->urgent ? 200.00 : 0.00;
        $totalAmount = $baseFee + $urgentFee;

        $payment = Payment::create([
            'customer_id' => $customer->id,
            'base_fee' => $baseFee,
            'urgent_fee' => $urgentFee,
            'total_amount' => $totalAmount,
            'payment_method' => $request->payment_method,
            'status' => 'completed'
        ]);

        return redirect()->route('payment.success', $payment);
    }

    public function showSuccess(Payment $payment)
    {
        return view('payments.success', compact('payment'));
    }

    public function paymentHistory(Customer $customer)
    {
        $payments = $customer->payments()->latest()->paginate(10);
        return view('payments.history', compact('customer', 'payments'));
    }

    public function downloadReceipt(Payment $payment)
    {
        // Implement PDF generation logic here
        return response()->download($receiptPath);
    }
}