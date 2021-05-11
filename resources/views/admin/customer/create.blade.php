@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i> Add new Customer</legend>
        <form action="{{ route('customers.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" value="{{ old('firstname') }}" id="firstname" class="form-control @error('firstname') is-invalid @enderror @error('lastname') is-invalid @enderror" placeholder="Firstname goes here">
                        @error('firstname')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" value="{{ old('lastname') }}" id="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="Lastname goes here">
                        @error('lastname')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="+21612345678">
                        @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="person@example.com">
                        @error('email')<div class="text-danger">{{ $message }}</div>@enderror
                      </div>
                </div>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" name="address" value="{{ old('address') }}" id="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address goes here">
              @error('address')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button></div>
                <div class="col"><button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button></div>
            </div>
        </form>
    </fieldset>
@endsection
