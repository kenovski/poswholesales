angela.controller('posController', function($scope,$http){
         //$scope.px;

         $scope.sales = [];
         $scope.robots = "Feymennns";
             $scope.jim = {
             pname:'',
             cname:'',
             qty:0,
             discount:0

         }

         $http.get('myreceipts.php').then(function (response) {
                    $scope.px = response.data;
                    console.log($scope.px);
                })

         $scope.addSales = function(){
         //$scope.sales = [];
         $scope.ntotal = [];
         $scope.net = 0;
            var mx = {
                rec:$scope.px,
                pname:$scope.jim.pname,
                cname:$scope.jim.cname,
                qty:$scope.jim.qty,
                discount:$scope.jim.discount
            }






            //console.log(mx);
         },




          $scope.pval = {
            searchTerm:0
          },

         $scope.gtotal = function(){




        var vata ={

        searchTerm:$scope.pval.searchTerm
     }

        $http.post('totals.php', JSON.stringify(vata)).then(function(response){
                         $scope.total = response.data;
                         var poke = response.data;
                         //$scope.kx.push(poke);

                         //console.log(kx);
                         console.log($scope.total);
                         console.log(vata);

                         //ClearMode();
                        }

                    )


    }




 }),