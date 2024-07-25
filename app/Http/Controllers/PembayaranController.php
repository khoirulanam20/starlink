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

    public function payment()
    {
        $pembayarans = Pembayaran::all();
        $emails = Pembayaran::pluck('email_registered');
        return view('dashboard.payment', compact('pembayarans', 'emails'));
    }

    public function status()
    {
        return view('dashboard.status');
    }

    public function home()
    {
        return view('home');
    }

    public function update(Request $request)
    {
        $request->validate([
            'email_registered' => 'required|email',
            'invoice' => 'required|file|mimes:pdf',
            'status' => 'required|in:unpaid,paid',
        ]);

        $invoicePath = $request->file('invoice')->store('invoices');

        $pembayaran = Pembayaran::where('email_registered', $request->email_registered)->first();
        if ($pembayaran) {
            $pembayaran->update([
                'invoice' => $invoicePath,
                'status' => $request->status,
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function dashboard()
    {
        $pembayarans = Pembayaran::all();
        return view('dashboard', compact('pembayarans'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}