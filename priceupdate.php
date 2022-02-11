<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body ng-controller="priceController">
    <h1>{{check}}</h1>

    <div class="container-fluid">
    	<div class="row-fluid">
    		<div class="col-md-3">
    		<label>product name</label>
    		<input type="text" id="pname" class="form-control" ng-model='jim.pname'>
    		<label>new price</label>
    		<input type="number" id="rate" class="form-control" ng-model='jim.rate'>
    		<button class="btn btn-success btn-md"  ng-click='price()'>Check Current Selling Price</button>
    		<button class="btn btn-success btn-md" ng-click='updatePrice()'>Update Selling Price</button>

    	</div>
    </div>
        <h2>Current Selling Price:{{sales.price}}</h2>
        <h2>{{price.msg}}</h2>
    </div>

      <script type="text/javascript">
$("input#pname").autocomplete ({
source : function (request, callback)
{
var data = { term : request.term };
$.ajax ({
url : "drivox.php",
data : data,
complete : function (xhr, result)
{
if (result !== "success") return;
var response = xhr.responseText;
var books = [];
$(response).filter ("li").each (function ()
{
books.push ($(this).text ());
});
callback (books);
}
});
}
});
</script>
</body>
</html>