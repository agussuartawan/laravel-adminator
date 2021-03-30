@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-8">
            <h4 class="c-grey-900 mB-30">{{ $title }}</h4>
        </div>
        <div class="col-4">
            <a href="{{ route('penjualan.create') }}" class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>
                Penjualan Baru
            </a>
        </div>
    </div>
    <table class="table table-striped table-bordered" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <td>No Transaksi</td>
                <td>Customer</td>
                <td>Total</td>
                <td>Tanggal</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->no_transaksi}}</td>
                <td>{{ $transaction->customer_id }}</td>
                <td>{{ $transaction->grand_total }}</td>
                <td>{{ $transaction->tanggal }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('scripts')
    
@endpush
