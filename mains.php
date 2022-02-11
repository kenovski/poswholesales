<?php
ob_start();
session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app = "myApp" >
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1">
        <title>qbox for spirits</title>
        <style>


           #mynavy a{
                color: #122b40;
                font-size: 1.2em;
                font-family: tahoma;
            }

           .dropdown ul,dropdown-toggle ul{
                color: darkred;
                background: #8c8c8c;
            }

            #eva{
                position: absolute;
                bottom:5%;
                left:5%;
            }

            #max{

                display: block;
            }

            h1{

                color:yellow;
                font-style:  italic;
            }

            body{

                opacity: 0.75;
            }
        </style>
‪

                                     <link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

          <script src="js/jquery-1.11.2.min.js"></script>

        <link rel="stylesheet" href="libs/jquery-ui-1.10.0.custom.css">

        <script type="text/javascript" src = "libs/jquery-ui-1.10.0.custom.min.js"></script>
        ‪<script src="js/bootstrap.min.js"></script>
        <script src = "js/angular.min.js"></script>
          <script src = "js/angular-route.min.js"></script>
          <link rel="stylesheet" type="text/css" href="index.css">




    </head>
    <body onload="adx();">

        <?php //session_start(); ?>

        <div class="navbar navbar-default" id="mynavy">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle = "collapse" data-target="#mynavbar-content">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>

                    <a class="navbar-brand brand" href="#" style=" background: lightblue; font-size: 2em;">QBOX FOR SPIRITS</a>

                </div>

                <div class="collapse navbar-collapse navbar-center" id="mynavbar-content" style=" background: orangered; color:  #8c8c8c;">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Start<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">

                                <li><a href="#!hms">Create Users</a></li>
                                <li><a href="#!prevusers">Preview Users</a></li>


                                <li><a href="#!custs">Customers</a></li>
                                <li><a href="#!prevcusts">Preview Customers</a></li>
                                <li><a href="#!items">Opening Stock</a></li>


                                <li><a href="#!olysuppliers">Preview Suppliers</a></li>
                                <li><a href="#!prevprods">Preview Products</a></li>
                                <li><a href="#!priceupdate">Update Selling Prices</a></li>
                                <li><a href="#!costpriceupdate">Update Cost Prices</a></li>

                                <li><a href="#!updateprods">Update Stock</a></li>

                                <li><a href="#!subplaceprods">Product Stock Status</a></li>
                                <li><a href="#!hmsss">Create </a></li>
                                <li><a href="#!rems">Remove </a></li>
                                <li><a href="#!auto">Autocomplete </a></li>
                                <li><a href="#!btn">Button Test </a></li>


                            </ul>
                        </li>

                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Transactions<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">
                                <li><a href="#!pos">Point Of Sales</a></li>

                                <li><a href="#!tpurch">Purchases</a></li>

                                <li><a href="#!allmana">Customer Opening Balance</a></li>
                                <li><a href="#!allman">Deposits-Payments-Others</a></li>





                            </ul>
                        </li>





                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="">Sales Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: white;">

                                <li><a href="#!din">Sales Reports</a></li>
                                <li><a href="#!dpayments">Daily Payments Summary</a></li>
                                <li><a href="#!dsales">Daily Sales Summary</a></li>
                                <li><a href="#!repiv">Preview Invoice</a></li>
                                <li><a href="repinvoicewo.php">Invoice Without Discount Reprint</a></li>
                                <li><a href="#!repxx">Alternative Invoice</a></li>
                                <li><a href="#!prevsales">Preview Invoice</a></li>


                            </ul>

                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchases Report <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: lightskyblue;">
                                <li><a href="#!mpurch">Monthly Purchases Amount</a></li>


                            </ul>

                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ledger<b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:  #e78f08;">
                                <li><a href="#!custledger">Customers Ledger</a></li>



                                <li><a href="#!tledger">Suppliers Ledger</a></li>



                            </ul>

                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock Reports <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background:  #f8efc0;">
                                <li><a href="#!stockreps">Stock Sheet</a></li>
                                <li><a href="#!stockrepall">Stock Worth</a></li>
                                <li><a href="#!stockbydate">Stock By Dates</a></li>


                                <li><a href="#!prodsalesmnt">Stock By Company</a></li>

                                <li><a href="#!search">Stock Search</a></li>


                            </ul>

                        </li>











                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Expenses <b class="caret"></b></a>
                            <ul class="dropdown-menu" style=" background: #a6e1ec;">
                                <li><a href="#!cccenter">Create Cost Centers</a></li>
                                <li><a href="#!expenses">Daily Expenses Entry</a></li>
                                <li><a href="#!expreports">Expenses Reports</a></li>
                                <li><a href="#!expedit">Edit Expenses</a></li>
                                <li><a href="#!debits">Debit Report</a></li>




                            </ul>



                        </li>



                    </ul>

                </div>

            </div>
        </div>


        <div ng-view>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6" id="max">


                    <div class="row">


                    </div>

                </div>

            </div>

        </div>

        <?php
// put your code here
?>
<script>
    $(document).ready(function(){

        $("#help").click(function(){


           $.ajax({

               url:"help.php",

               success:function(data)
               {
                   $("#yaya").html(data);
               },

               error:function()
               {
                   alert('No Network');
               }

           });

        });

    });
</script>
<div id="yaya"></div>





        <div id="eva" style="background:  #1c94c4;color: #e7e7e7;font-size: 2.5em" class="col-sm-6 col-md-6 col-lg-10">

            <h2 style="color: darkblue;"><nobr>Welcome:<?php echo $_SESSION['username']; ?></nobr></h2>

        </div>

        <script>
            function adx()
            {
                $("#eva").fadeOut(5000);
            }
        </script>

<script>
                    var angela = angular.module('myApp',['ngRoute']);
                    angela.config(function($routeProvider){
                        $routeProvider.when("/",{

                            templateUrl:'trumains.html'

                        }).when("/btn",{
                            controller:'btnController',

                            templateUrl:'btns.php'
                        }).when('/custprev',{

                            templateUrl:'custprev.php'
                        }).when('/editcusts',{

                            templateUrl:'editcusts.php'
                        }).when('/custedit',{
                            templateUrl:'custedito.php'
                        }).when('/suppliers',{

                            templateUrl:'suppliers.php'
                        }).when('/items',{
                            controller:'itemsController',
                            templateUrl:'items.php'
                        }).when('/custs',{
                            controller:'customersCtrl',
                            templateUrl:'customers.php'
                        }).when('/olysuppliers',{
                            templateUrl:'olysuppliers.php'
                        }).when('/stockreprev',{
                            templateUrl:'stockreprev.php'
                        }).when('/priceupdate',{
                            controller:'priceController',
                            templateUrl:'priceupdate.php'
                        }).when('/prevcusts',{
                            controller:'prevCustomers',
                            templateUrl:'prevcustomers.php'
                        }).when('/upcust',{
                            templateUrl:'upcust.php'
                        }).when('/pos',{
                            controller:'posController',
                            templateUrl:'pos.php'
                        }).when('/reorders',{
                            templateUrl:'reorders.php'
                        }).when('/subplaceprods',{
                            templateUrl:'subplaceprods.php'
                        }).when('/hms',{
                            //controller:"userController",
                            templateUrl:'users.php',
                            controller:"userController"
                        }).when('/prevusers',{
                            controller:'users',
                            templateUrl:'prevusers.php'
                        }).when('/retails',{
                            templateUrl:'retails.php'
                        }).when('/tpurch',{
                            controller:'purchController',
                            templateUrl:'purchases.php'
                        }).when('/allmana',{

                            templateUrl:'allmana.php'
                        }).when('/allman',{
                            controller:'paymentsController',

                            templateUrl:'payments.php'
                        }).when('/dinvoice',{
                            templateUrl:'dinvoice.php'
                        }).when('/dpayments',{
                            templateUrl:'dpayments.php'
                        }).when('/dsales',{
                            templateUrl:'dsales.php'
                        }).when('/repinvoice',{
                            templateUrl:'repinvoice.php'
                        }).when('/dreturns',{
                            templateUrl:'dreturns.php'
                        }

                        ).when('/mreturns',{
                            templateUrl:'mreturns.php'
                        }).when('/mmsales',{

                            templateUrl:'mmsales.php'
                        }).when('/audit',{

                            templateUrl:'audit.php'
                        }).when('/worth',{
                            templateUrl:'stockwrth.php'
                        }).when('/count',{
                            templateUrl:'stockcount.php'
                        }).when('/supas',{
                            templateUrl:'supayments.php'
                        }).when('/edits',{
                            templateUrl:'edits.php'
                        }).when('/editprods',{
                            templateUrl:'editprods.php'
                        }).when('/auto',{
                            controller:'fetchCtrl',
                            templateUrl:'auto.php'
                        }).when('/yrrsales',{
                            templateUrl:'yrrsales.php'
                        }).when('/mpurch',{

                            templateUrl:'mpurchases.php'
                        }).when('/spmts',{

                            templateUrl:'spmts.php'
                        }).when('/ypurch',{
                            templateUrl:'ypurchases.php'
                        }).when('/custledger',{
                            controller:'ledgerController',
                            templateUrl:'custledger.php'
                        }).when('/dateledger',{
                            templateUrl:'dateledger.php'
                        }).when('/custall',{
                            templateUrl:'custall.php'
                        }).when('/tledger',{
                            templateUrl:'tledger.php'
                        }).when('/stockreps',{
                            templateUrl:'stockreps.php'
                        }).when('/stockrepall',{
                            templateUrl:'stockrepall.php'
                        }).when('/stockbydate',{
                            templateUrl:'stockbydate.php'
                        }).when('/stockbydated',{
                            templateUrl:'stockbydated.php'
                        }).when('/prodsalesmnt',{
                            templateUrl:'prodsalesmnt.php'
                        }).when("/prevsales",{
                            controller:'salesController',
                            templateUrl:'prevsales.php'
                        }).when('/invoicedit',{
                            templateUrl:'invoicedit.php'
                        }).when('/custledgeredit',{
                            templateUrl:'custledgeredit.php'
                        }).when('/repinvoiceeddit',{

                            templateUrl:'repinvoiceeddit.php'
                        }).when('/newpos',{
                            controller:'newposController',

                            templateUrl:'newpos.php'
                        }).when('/repinvoicealt',{
                            templateUrl:'repinvoicealt.php'
                        }).when('/supupdate',{
                            templateUrl:'supupdate.php'
                        }).when('/adjprods',{
                            templateUrl:'adjprods.php'
                        }).when('/updateprods',{
                            templateUrl:'updateprods.php'
                        }).when('/debtors',{
                            templateUrl:'debtorsall.php'
                        }).when('/creditors',{
                            templateUrl:'breports.php'
                        }).when('/allaudit',{
                            templateUrl:'allaudit.php'
                        }).when('/cccenter',{
                            templateUrl:'cccenter.php'
                        }).when('/expenses',{
                            templateUrl:'expenses.php'
                        }).when('/expreports',{
                            templateUrl:'expreports.php'
                        }).when('/expedit',{
                            templateUrl:'expedit.php'
                        }).when('/stocktaking',{
                            templateUrl:'stocktaking.php'
                        }).when('/banksreg',{

                            templateUrl:'banksreg.php'
                        }).when('/btellers',{
                            templateUrl:'btellers.php'
                        }).when('/mtellers',{
                            templateUrl:'mtellers.php'
                        }).when('/supdata',{
                            templateUrl:'supdata.php'
                        }).when('/direct',{

                            templateUrl:'directpayments.php'
                        }).when('/din',{

                            templateUrl:'dinvoicepros.php'
                        }).when('/directsum',{
                            templateUrl:'directsummary.php'
                        }).when('/whs',{
                            templateUrl:'whstockcard.php'
                        }).when('/directpays',{

                            templateUrl:'directop.html'
                        }).when('/kombo',{
                            templateUrl:'stockbydatecombo.php'
                        }).when('/debits',{
                            templateUrl:'debitexp.php'
                        }).when('/directbal',{
                            templateUrl:'directbal.php'
                        }).when('/repiv',{

                            templateUrl:'repinvoice.php'
                        }).when('/repxx',{
                            templateUrl:'repinvoicewo.php'
                        }).when('/prevprods',{
                            controller:'productsController',
                            templateUrl:'productsview.php'
                        })


                    });



                    </script>
     <script src="app.js"></script>
     <script src="poscontroller.js"></script>
     <script src="purchcontroller.js"></script>
     <script src="btn.js"></script>
     <script src="products.js"></script>
     <script src="ledger.js"></script>
     <script src="prices.js"></script>
     <script src="payments.js"></script>
      <script src="newpos.js"></script>
    </body>
</html>
