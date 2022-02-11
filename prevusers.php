<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body ng-controller ="users">



</body>


   <div class="container-fluid">
   	<div class="row-fluid">
   		<div class="col-md-6 col-md-offset-3">

   			<table class="table table-responsive table-bordered">
   				<thead>
   					<thead>
   						<tr>

   							<th>username</th>
   							<th>password</th>
   							<th>status</th>
   							<th>username</th>
   							<th>date</th>

   						</tr>
   					</thead>
   				</thead>
   	<tbody>
   		<tr ng-repeat = 'pd in myData'>
   			<th>{{pd.loginname}}</th>
   			<th>{{pd.password}}</th>
   			<th>{{pd.status}}</th>
   			<th>{{pd.username}}</th>
   			<th>{{pd.date}}</th>
   			<th ng-click ="DeleteData(pd)">delete</th>
   		</tr>
   	</tbody>

   </table>

   		</div>

   	</div>

   </div>

</html>