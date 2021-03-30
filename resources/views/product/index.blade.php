@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-8">
            <h4 class="c-grey-900 mB-30">{{ $title }}</h4>
        </div>
        <div class="col-4">
            <button class="btn btn-primary float-right">
                <i class="fas fa-plus"></i>
                Tambah
            </button>
        </div>
    </div>
    <table class="table table-striped table-bordered" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <td>Kode</td>
                <td>Nama</td>
                <td>Harga</td>
                <td>Stok</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->kode}}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->harga }}</td>
                <td>{{ $product->stok }}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- modal --}}
    @include('partials.modal')
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready( function () {
            $('.btn').click(function(event) {
                event.preventDefault();
                $('#modal').modal('show');
            });
        });
    </script>
@endpush
