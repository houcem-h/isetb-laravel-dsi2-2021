@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i> Add new Customer</legend>
        <form action="{{ route('customers.store') }}" method="post">
            @include('admin.customer.form')
        </form>
    </fieldset>
@endsection
