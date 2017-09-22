<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TTT</title>
	<!--<base href="http://localhost/Laravel/public/">-->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/begin.css">
	
</head>
<body>
	<div class="container">
		<div class="header">
			<p>Admin Area - Viet Toan</p>
		</div>
		<div class="dropdown">
		  <button class="btn btn-primary dropdown-toggle glyphicon glyphicon-user" type="button" data-toggle="dropdown" style="    color: blue;
    font-size: 20px;
}">
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu">
		    <li><a href="#" class="glyphicon glyphicon-user">  User Profile</a></li>
		    <li><a href="#" class="glyphicon glyphicon-cog">  Settings</a></li>
		    <li><a href="#" class="glyphicon glyphicon-log-out">  Logout</a></li>
		  </ul>
		</div>
	</div>
	<div class="main">
		<div class="row">
			<div class="col-md-2" style="width: 20%;padding-right:  0px">
				<div class="panel panel-default">
					 <div class="input-group">
					    <input type="text" class="form-control" placeholder="Search...">
					    <div class="input-group-btn">
					      <button class="btn btn-default" type="submit">
					        <i class="glyphicon glyphicon-search"></i>
					      </button>
					  </div>
					</div>
					  
					<div class="list-group">
					  <a href="#" class="list-group-item 	glyphicon glyphicon-dashboard ">   Dashboard</a>
					  <a href="#" class="list-group-item glyphicon glyphicon-align-left item1">  Category</a>
					  	<ul class="list-group list-sub1">
					  		<li class="list-group-item"><a href="#">List Category</a></li>
					  		<li class="list-group-item"><a href="#">Add Category</a></li>
					  	</ul>
					  <a href="#" class="list-group-item 	glyphicon glyphicon-gift item2">   Product</a>
					  	<ul class="list-group list-sub2">
					  		<li class="list-group-item"><a href="#">List Product</a></li>
					  		<li class="list-group-item"><a href="#">Add Product</a></li>
					  	</ul>
					  <a href="#" class="list-group-item glyphicon glyphicon-user item3 ">   User</a>
					  	<ul class="list-group list-sub3">
					  		<li class="list-group-item"><a href="#">List User</a></li>
					  		<li class="list-group-item"><a href="#">Add User</a></li>
					  	</ul>
					</div>
				</div>

			</div>
			<div class="col-md-10" style="width: 80%; padding: 0px">
				<div class="panel panel-default panel-body">
					<div class="title">
						<p><strong>Category</strong> List</p>
						<hr>
					</div>
					<div class="option">
						<div class="show">
							<p>Show  </p>
						</div>
						<select id="option" >
							<option name="number">10</option>
							<option name="number">25</option>
							<option name="number">50</option>
							<option name="number">100</option>
						</select>
							<p style=" float: left;   font-size: 20px;">entries</p>
						<div class="form-group">
							 <input type="text" class="form-control">
					    </div>
					    <p style="float: right; font-size: 20px;">Search</p>
					</div>
					<div class="clearfix"></div>
					<div class="content">
						<table class="table table-bordered">
						    <thead>
						      <tr>
						        <th>ID</th>
						        <th>Name</th>
						        <th>Category Parent</th>
						        <th>Status</th>
						       <th>Delete</th>
						        <th>Edit</th>
						      </tr>
						    </thead>
						    <tbody>
						    	@foreach($data as $value)
						      <tr>
						        <td>{{$value->id}}</td>
						        <td>{{$value->Name}}</td>
						        <td>{{$value->Category_Parent}}</td>
						        <td>{{$value->Status}}</td>
						        <td ><a href="#" class="glyphicon glyphicon-trash">   Delete</a></td>
						        <td><a href="#" class="glyphicon glyphicon-pencil">  Edit</a></td>
						      </tr>
						      @endforeach
						       
						    </tbody>
						</table>
					</div>
					{!!$data->links()!!}
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    	$(document).ready(function(){
    		$('.item1').click(function(){
    			$('.list-sub1').toggleClass('listsub');
    		});
    		$('.item2').click(function(){
    			$('.list-sub2').toggleClass('listsub');
    		});
    		$('.item3').click(function(){
    			$('.list-sub3').toggleClass('listsub');
    		});
    	});
    </script>
</body>
</html>