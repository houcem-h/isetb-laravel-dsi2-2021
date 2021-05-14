@extends('layouts.admin')

@section('main')
@if (session('deleteCustomer'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteCustomer') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <a href="{{ route('customers.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Add new Customer</a>
    <h3><i class="fas fa-users"></i> Customers list</h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"><i class="fas fa-user"></i> Name</th>
            <th scope="col"><i class="fas fa-phone"></i> Phone</th>
            <th scope="col"><i class="fas fa-at"></i> Email</th>
            <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $key => $customer)
            <tr>
                <th scope="row">{{ $key }}</th>
                <td>{{ $customer->firstname.' '.$customer->lastname  }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ route('customers.show', ['customer' => $customer->id]) }}" class="btn btn-info" title="Show details about {{ $customer->firstname.' '.$customer->lastname  }}"><i class="fas fa-user-tag"></i></a>
                    <a href="{{ route('customers.edit', ['customer' => $customer->id]) }}" class="btn btn-warning" title="Edit user {{ $customer->firstname.' '.$customer->lastname  }}">
                        <i class="fas fa-user-edit"></i>
                    </a>
                    <a href="#" class="btn btn-danger" title="Delete user {{ $customer->firstname.' '.$customer->lastname  }}"
                        onclick="event.preventDefault(); document.querySelector('#delete-customer-form').submit()"
                        ><i class="fas fa-user-slash"></i></a>
                    <form action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="post" id="delete-customer-form">@csrf @method('DELETE')</form>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mx-auto"  style="width: 200px;">
        {{ $customers->links() }}
    </div>
@endsection
