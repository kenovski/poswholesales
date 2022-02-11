angela.controller('newposController', function($scope,$http){


	$scope.tana = "angular pos unleashed";
	$scope.depts = [];
	$scope.pata = [];
	$scope.gata = [];
	$scope.total =[];
    $scope.sene = [];
    $scope.waiters = [];


	$scope.trans = {
          px:$scope.px,
          cashier:'Jeniffer',
          pname:'',
          waiter:'Carl'
		
	},


	$http.get('myreceipts.php').then(function (response) {
                    $scope.px = response.data;
                    console.log($scope.px);
                }),


   $http.post('waiters.php').then(function(response){
                        $scope.waiters = response.data;
                         //$scope.names.push(data);
                         console.log($scope.waiters);
                        }
                        
                    ),
	


	$http.post('nepos.php').then(function(response){
                        $scope.depts = response.data;
                         //$scope.names.push(data);
                         console.log($scope.depts);
                        }
                        
                    ),


	$scope.myfx = function(e) {

    var oxname ={
        pname:e,
        px:$scope.px,
        //waiter:$scope.trans.waiter
    };
    


  $http.post('nepx.php', JSON.stringify({pname:oxname.pname.pname,pc:oxname.pc})).then(function(response){
                         $scope.pata = response.data;
                         //$scope.items.push(px);
                         console.log(oxname.pname);
                         console.log(oxname.pc);
                         console.log(oxname);
                         console.log($scope.pata);
                         //console.log(px);
                         //$scope.gtotal()

                         //ClearMode();
                        }
                        
                    )

   

 },




 $scope.jyfx = function(e) {

    var oxname ={
        pname:e,
        px:$scope.px,
        waiter:$scope.trans.waiter
    };
    
    var tara = {
                mearch:$scope.px
            };

  $http.post('nepox.php', JSON.stringify({pname:oxname.pname.pname,pc:oxname.px,waiter:oxname.waiter})).then(function(response){
                         $scope.gata = response.data;
                         //$scope.items.push(px);
                         console.log(oxname.pname);
                         console.log(oxname.px);
                         console.log(oxname);
                         console.log($scope.gata);
                         //console.log(px);
                         //$scope.gtotal()

                         //ClearMode();
                        }
                        
                    ),

   $http.post('zotals.php', JSON.stringify(tara)).then(function(response){
                         $scope.total = response.data;
                         //var poke = response.data;
                         //$scope.kx.push(poke);

                         console.log(tara);
                         console.log($scope.total);
                         //console.log(vata);

                         //ClearMode();
                        }
                        
                    )

   

 },



  $scope.gtotal = function(){
          var gara = {
                mearch:$scope.px
            }
        

        $http.post('zotals.php', JSON.stringify(gara)).then(function(response){
                         $scope.total = response.data;
                         //$scope.poke = response.data.discount;
                         //$scope.kx.push(poke);

                         //console.log(poke);
                         console.log($scope.total);
                         console.log(gara);

                         //ClearMode();
                        }
                        
                    )


    },

    $scope.Delete = function (e) {
                var lent = $scope.gata.length;
                console.log(lent);
                
               var oxname ={
               pname:e,
                px:$scope.px
                };
    
           var tara = {
                mearch:$scope.px
            };
                
                //var _index = $scope.gata.indexOf(pd);
                //$scope.gata.splice(_index, 1);
                //$scope.removedata(pd);
                //total-= total-($scope.plist.qty * $scope.plist.rate);
              $http.post('nprods.php', JSON.stringify({pname:oxname.pname.pname,pc:oxname.px})).then(function (response) {
                    $scope.sene = response.data;
                    console.log($scope.sene);
                    var _index = $scope.gata.indexOf(e);
                    $scope.gata.splice(_index, 1);
                    $scope.gtotal();
                }

                )  
            },


            $scope.addUno = function(pk){


                     var oxname ={
                pname:pk,
                px:$scope.px,
                waiter:$scope.trans.waiter
                };
    
           var tara = {
                mearch:$scope.px
            };

                

                var _index = $scope.gata.indexOf(pk);
                console.log(_index);
                console.log($scope.gata[_index]);
                 $scope.gata[_index].qty++;

                 $http.post('add_one.php', JSON.stringify({pname:oxname.pname.pname,pc:oxname.px,waiter:oxname.waiter})).then(function(response){
                         $scope.adder = response.data;
                         //$scope.items.push(px);
                         //console.log(pata);
                         console.log($scope.adder);
                         //console.log(px);
                         $scope.gtotal();

                         //ClearMode();
                        }
                        
                    )

            },



           $scope.minusUno = function(pk){


                     var oxname ={
                     pname:pk,
                     px:$scope.px,
                     waiter:$scope.trans.waiter
                     };
    
                     var tara = {
                     mearch:$scope.px
                     };

                

                var _index = $scope.gata.indexOf(pk);
                console.log(_index);
                console.log($scope.gata[_index]);
                 $scope.gata[_index].qty--;

                 if($scope.gata[_index].qty <= 0){
                   $scope.gata.splice(_index, 1);
                  }

                 $http.post('minus_one.php', JSON.stringify({pname:oxname.pname.pname,pc:oxname.px,waiter:oxname.waiter})).then(function(response){
                         $scope.adder = response.data;
                         //$scope.items.push(px);
                         //console.log(pata);
                         console.log($scope.adder);
                         //console.log(px);
                         $scope.gtotal();

                         //ClearMode();
                        }
                        
                    )

            },


            $scope.wtx = function(e){

                console.log(e);
                var _index = $scope.waiters.indexOf(e);
                $scope.trans.waiter = $scope.waiters[_index].wname;

                console.log($scope.trans.waiter);
            }



})