angela.controller('productsController', function($scope,$http){

	$scope.myproduct = 'PRODUCTS LIST';
    $scope.products = [];
	$http.get('myproducts.php').then(function (response) {
                    $scope.products = response.data;
                    console.log($scope.products);
                })

	
})