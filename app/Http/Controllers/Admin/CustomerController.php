<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Mail\NewCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.index', ['customers' => Customer::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate($this->validationRules());
        // 1st method
        // $customer = new Customer;
        // $customer->firstname = $request->firstname;
        // $customer->lastname = $request->lastname;
        // $customer->phone = $request->phone;
        // $customer->email = $request->email;
        // $customer->address = $request->address;
        // $customer->save();

        // 2nd method : mass assignment
        $customer = Customer::create($validatedData);

        Mail::to($customer->email)->send(new NewCustomer($customer));

        return redirect()->route('customers.show', $customer)->with('storeCustomer', "Cusomer has been added successfuly");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('admin.customer.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validatedData = $request->validate($this->validationRules());
        // 1st method
        // $customer->firstname = $request->firstname;
        // $customer->lastname = $request->lastname;
        // $customer->phone = $request->phone;
        // $customer->email = $request->email;
        // $customer->address = $request->address;
        // $customer->save();

        // 2nd method : mass assignment
        $customer->update($validatedData);

        return redirect()->route('customers.show', $customer)->with('updateCustomer', "Cusomer has been updated successfuly");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('deleteCustomer', 'Customer has been deleted!');
    }

    private function validationRules()
    {
        return [
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ];
    }
}
