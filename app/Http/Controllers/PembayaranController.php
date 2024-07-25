<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email_registered' => 'required|email',
            'billing_period_start' => 'required|date',
            'billing_period_end' => 'required|date',
            'due_date' => 'required|date',
            'invoice' => 'required|file|mimes:pdf',
            'status' => 'required|in:unpaid,paid',
        ]);

        $invoicePath = $request->file('invoice')->store('invoices');

        Pembayaran::create([
            'email_registered' => $request->email_registered,
            'billing_period_start' => $request->billing_period_start,
            'billing_period_end' => $request->billing_period_end,
            'due_date' => $request->due_date,
            'invoice' => $invoicePath,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    public function index()
    {
        $pembayarans = Pembayaran::all();
        return view('welcome', compact('pembayarans'));
    }
}