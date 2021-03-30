<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Customer;
use App\Product;

class TransactionController extends Controller
{
    public function index()
    {
        $title = 'Data penjualan';
        $transactions = Transaction::all();
        return view('penjualan.index', compact('transactions', 'title'));
    }

    public function create()
    {
        $title = 'Transaksi Penjualan';
        return view('penjualan.create', compact('title'));
    }
}
