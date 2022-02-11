<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">
		th{
         background:orangered;
		}

		td{
			font-family: calibri;
			color:darkblue;
		}

		body{

			background-color:silver;
		}
	</style>
</head>
<body ng-controller='productsController'>
<h1 class="col-md-6 col-md-offset-5">{{myproduct}}</h1>

<div class="container-fluid">
	<div class="row-fluid">

		<div class="col-md-6 col-md-offset-3">
			<table class="table table-responsive table-bordered">
				<thead>
					<tr>
						<th>product</th>
						<th>dept</th>
						<th>unitprice</th>
						<th>unitcost</th>
						<th>opbal</th>


					</tr>
				</thead>


				<tbody>
					<tr ng-repeat = 'pd in products'>
						<td>{{pd.productname}}</td>
						<td>{{pd.dept}}</td>
						<td>{{pd.unitprice}}</td>
						<td>{{pd.unitcost}}</td>
						<td>{{pd.opstock}}</td>
					</tr>
				</tbody>

			</table>

		</div>

	</div>

</div>
</body>
</html>