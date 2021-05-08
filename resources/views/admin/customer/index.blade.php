@extends('layouts.admin')

@section('main')
    <h3>Customers list</h3>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Opérations</th>
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
                  <a href="#" class="btn btn-info">show</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mx-auto"  style="width: 200px;">
        {{ $customers->links() }}
    </div>
@endsection
