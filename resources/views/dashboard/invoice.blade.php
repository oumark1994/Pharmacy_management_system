<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>A simple, clean, and responsive HTML invoice template</title>

		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td {
				font-size: 25px;
				line-height: 25px;
				color: #333;
			}
      .title{
        font-size:25px;
      }

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
       text-align:center;
			}

      .heading{
        margin-top:20px !important;
      }

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>


		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
								Kolla-Pharmacy<br>
                Invoice #: {{$invoice}}<br />
									Due: {{$date}}<br />
								</td>

								<td>
								

								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									124 Mongolia Lane ,Tesano Police Station.<br />
								
                  Pharmacyst:	Oumar Kolla .<br />
									pharmacyemail@gmail.com
								</td>
		
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading" style="margin-top:20px;">
        <td colspan="5">Patient Detail</td>

				</tr>
        <tr >
        <th>Patient No</th>
        <th>Patient Name</th>
        <th>Dob</th>
        <th>Address</th>
        <th>Phone</th>
				</tr>

				<tr >
					<td style="text-align:center">{{$patient->patient_no}}</td>
					<td style="text-align:center">{{$patient->name}}</td>
					<td style="text-align:center">{{$patient->dob}}</td>
					<td style="text-align:center">{{$patient->address}}</td>
					<td style="text-align:center">{{$patient->phone_number}}</td>
				</tr>

				<tr class="heading" style="">
        <td colspan="5">Prescribed Medecine</td>

				</tr>
				<tr >
					<th>Invoice</th>

					<th>Medecine Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>SubTotal</th>

				</tr>

				 @foreach($sales as $sale)
                    <tr >
                    <td style="text-align:center">{{$sale->invoice}}</td>
                    <td style="text-align:center">{{$sale->medecine_name}}</td>
                    <td style="text-align:center">${{$sale->price}}</td>
                    <td style="text-align:center">{{$sale->qty}}</td>
                    <td style="text-align:center">{{$sale->total}}</td>

            </tr>
           @endforeach
				<tr class="total">

				
				<td>Amount Paid: ${{$amount}}</td>
				<td colspan="1">Balance: ${{$balance}}</td>
				<td colspan="2">Total: ${{$total}}</td>

				</tr>
			</table>
		</div>
	</body>
</html>
