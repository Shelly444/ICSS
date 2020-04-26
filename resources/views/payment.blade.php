@extends ('../layouts/master')



@section ('content')
<br>

<h1 align="center">Payment Tracking Form</h1>

	<form method="POST"  action="/reports/payment">
    {{ csrf_field() }}
		
		<table>

			<tr>
				<th>
					<label>Name:</label>
				</th>
				<td>
					<input type="text" id="name" name="name" required="true">
				</td>
			</tr>
			
			<tr>
				<th>
					<label>Payment Type:</label>
				</th>
				<td>
					<select id="paymentType" name="paymentType" required="true">
						<option  value="credit">Credit</option>
						<option  value="debt">Debt</option>
						<option  value="cash">Cash</option>
						<option  value="cheque">Cheque</option>
					</select>
				</td>
			</tr>

			<tr>
				<th>
					<label>Amount:</label>
				</th>
				<td>
					<input type="number" id="amount" name="amount" required="true">
				</td>
			</tr>

			<tr>
				<th>
					<label>Date:</label>
				</th>
				<td>
					<input type="date" id="date" name="date" required="true">
				</td>
			</tr>	
			
		</table>

		<br>

		<input type="submit" name="submit" value="Enter">
		
	</form>

@endsection