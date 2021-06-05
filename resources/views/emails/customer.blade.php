@component('mail::message')
# DSI2-ISET Bizerte

Dear **{{ $customer->firstname.' '.$customer->lastname }}**

We are happy to announce that your account has been created.<br>
These are the informations that we registred for you, can you please check and tell us if there is any mistake:
- **Phone**: {{ $customer->phone }}
- **Email**: {{ $customer->email }}
- **Address**: {{ $customer->address }}

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
