@extends('layouts.admin')

@section('main')
@if (session('storeCustomer'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeCustomer') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateCustomer'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateCustomer') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <h3><i class="fas fa-id-card"></i> Details about customer : <strong>{{ $customer->firstname.' '.$customer->lastname  }}</strong></h3>
    <div class="card" style="width: 38rem;">
        <div class="card-body">
            <h5 class="card-title"><i class="fas fa-user"></i> <strong>{{ $customer->firstname.' '.$customer->lastname  }}</strong></h5>
            <ul class="list-group list-group-flush">Details:
                <li class="list-group-item"><i class="fas fa-phone"></i> {{ $customer->phone }}</li>
                <li class="list-group-item"><i class="fas fa-at"></i> {{ $customer->email }}</li>
                <li class="list-group-item"><i class="fas fa-map-marked-alt"></i> {{ $customer->address }}</li>
            </ul>
            <hr>
            <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}" class="btn btn-warning" title="Edit user {{ $customer->firstname.' '.$customer->lastname  }}">
                <i class="fas fa-user-edit"></i>
            </a>
            <a href="#" class="btn btn-danger" title="Delete user {{ $customer->firstname.' '.$customer->lastname  }}"
                onclick="event.preventDefault(); document.querySelector('#delete-customer-form').submit()"
                ><i class="fas fa-user-slash"></i></a>
            <form action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="post" id="delete-customer-form">@csrf @method('DELETE')</form>
        </div>
      </div>
@endsection
