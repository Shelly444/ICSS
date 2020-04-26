@extends ('../layouts/master')



@section ('content')

<h1 align="center">Payment Infomation</h1>
      <table class="list_table" align="center">
        <tr>
          <th class="list_th_tr">Payment ID</th>
          <th class="list_th_tr">Name</th>
          <th class="list_th_tr">Amount</th>
          <th class="list_th_tr">Date of Payment</th>
          <th class="list_th_tr">PaymentType</th>
        </tr>

        @foreach ($payments as $payment)
          <tr>
            <td class="list_th_tr">
              {{ $payment->id }}
            </td>
            <td class="list_th_tr">
              {{ $payment->name }} 
            </td>
            <td class="list_th_tr">
              {{ $payment->amount }} 
            </td>
            <td class="list_th_tr">
              {{ $payment->date }} 
            </td>
            <td class="list_th_tr">
              {{ $payment->paymentType }} 
            </td>
            <td class="list_th_tr">

            </td>
          </tr>

        @endforeach
      </table>


@endsection