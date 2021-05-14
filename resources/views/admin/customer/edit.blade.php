@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit Customer: <strong>{{ $customer->firstname." ".$customer->lastname }}</strong></legend>
        <form action="{{ route('customers.update', ['customer' => $customer->id]) }}" method="post">
            @method('PUT')
            @include('admin.customer.form')
        </form>
    </fieldset>
@endsection
