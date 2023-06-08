<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Css/main.css">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" >

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
	<div>
<?php

include('header.php');
?>
</div>
<div >
	<?php
include('sidebar.php');
	?>
	<div class="home">
		<div class="container">
			
<div class="row mt-2">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4 ">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs head2 font-weight-bold text-primary text-uppercase mb-1">
                                                Expense (Monthly)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Pkr. 40,000</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-cash-coin fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs head2 font-weight-bold text-success text-uppercase mb-1">
                                             Services Added</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-credit-card fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs head2 font-weight-bold text-danger text-uppercase mb-1">Fuel Average
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">20 kmph</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-fuel-pump fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs head2 font-weight-bold text-warning text-uppercase mb-1">
                                                Date</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">04/03/2023</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-calendar-date fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                    	 <div class=" reserve-head1  mt-1">
                    	 	<h2 class="table-heading">Multiplication Table Of 7</h2>
                    	 	<div class="global-flex justify-content-center align-items-center">
                        <input type="text" class="form-control w-50" placeholder="What are you lokking for?" name="">
                        <button class="btn btn-primary mx-2 btn-sm">Search</button>
                      </div>
            <div>
            <table class="table table-striped thead-dark mt-2">
                <thead class="bg-dark text-light">
                    <th>Serial#</th>
                    <th>7</th>
                    <th>*</th>
                    <th>multiply by</th>
                    <th>=</th>
                    <th>Answer</th>
                    <th>Action</th>
                    
                </thead>
                <?php
                 $a=1;
                 for($i=1; $i<=20; $i++){
                 $result=7*$i;
                 if($i%2==0){
             
                ?>
                <tr>
                  <td><?php echo $a;?></td>
                  <td>7</td>
                  <td>*</td>
                  <td><?php echo $i;?></td>
                  <td>=</td>
                  <td><?php echo $result;?></td>
                  <td><a href="add_car_profile.php"><button class="btn btn-secondary btn-sm"><i class="bi bi-pencil-square"></i></button></a>
                    <button class="btn btn-secondary btn-sm"><i class="bi bi-trash"></i></button></td>

                </tr>
                <?php
                 $a++;
             }
         }
                ?>
                 
                
            </table>
        </div>
        </div>
                    </div>

		</div>
	</div>

</div>
 
 

</body>
</html>