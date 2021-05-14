@extends('layouts.admin')

@section('main')
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
            <a href="#" class="btn btn-danger" title="Delete user {{ $customer->firstname.' '.$customer->lastname  }}"><i class="fas fa-user-slash"></i></a>
        </div>
      </div>
@endsection
