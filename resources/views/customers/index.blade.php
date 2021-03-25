@extends('layouts.admin')
@section('content')
    <h4 class="c-grey-900 mB-30">Add Customer</h4>
    <form action="">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control">
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
    <div class="mT-30"></div>

    {{-- modal --}}
    @include('partials.modal')
@endsection

@push('scripts')
    @parent
    <script type="text/javascript">
        $('.btn').click(function(event) {
            event.preventDefault();
            $('#modal').modal('show');
        });
    </script>
@endpush
