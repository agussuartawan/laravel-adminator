@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-8">
            <h4 class="c-grey-900 mB-30">{{ $title }}</h4>
        </div>
        <div class="col-4">
            <button class="btn btn-primary float-right" id="add">
                <i class="fas fa-plus"></i>
                Tambah
            </button>
        </div>
    </div>
    <table class="table table-striped table-bordered" id="dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Phone</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->phone }}</td>
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
            $('#add').click(function(event) {
                event.preventDefault();
                $('#modal').modal('show');
            });
        });
    </script>
@endpush
