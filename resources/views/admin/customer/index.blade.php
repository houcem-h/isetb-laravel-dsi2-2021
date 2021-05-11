@extends('layouts.admin')

@section('main')
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
                  <a href="#" class="btn btn-warning" title="Edit user {{ $customer->firstname.' '.$customer->lastname  }}"><i class="fas fa-user-edit"></i></a>
                  <a href="#" class="btn btn-danger" title="Delete user {{ $customer->firstname.' '.$customer->lastname  }}"><i class="fas fa-user-slash"></i></a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mx-auto"  style="width: 200px;">
        {{ $customers->links() }}
    </div>
@endsection
