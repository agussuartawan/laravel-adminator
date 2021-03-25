@extends('layouts.admin')
@section('content')
    <h4 class="c-grey-900 mT-10 mB-30">Add Customer</h4>
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
@endsection
@section('scripts')
@parent

@endsection
