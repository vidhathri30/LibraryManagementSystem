<!DOCTYPE html>
<?php
	require_once 'valid.php';
?>	
<html lang = "eng">
	<head>
		<title>Library System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
	</head>
	<body style = "background-color:#d3d3d3;">
		<nav class = "navbar navbar-default navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "50px" height = "50px" />
					<h4 class = "navbar-text navbar-right">Library System</h4>
				</div>
			</div>
		</nav>
		<div class = "container-fluid">
			<div class = "col-lg-2 well" style = "margin-top:60px;">
				<div class = "container-fluid" style = "word-wrap:break-word;">
					<img src = "images/user.png" width = "50px" height = "50px"/>
					<br />
					<br />
					<label class = "text-muted"><?php require'account.php'; echo $name;?></label>
				</div>
				<hr style = "border:1px dotted #d3d3d3;"/>
				<ul id = "menu" class = "nav menu">
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "home.php"><i class = "glyphicon glyphicon-home"></i> Home</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-tasks"></i> Accounts</a>
						
					</li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "book.php"><i class = "glyphicon glyphicon-book"></i> Books</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = "add_publisher.html"><i class = "glyphicon glyphicon-home"></i> Publisher</a></li>
					<li><a style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-th"></i> Transaction</a>
						
					</li>
					<li><a  style = "font-size:18px; border-bottom:1px solid #d3d3d3;" href = ""><i class = "glyphicon glyphicon-cog"></i> Settings</a>
						
					</li>
				</ul>
			</div>
			<div class = "col-lg-1"></div>
			<div class = "col-lg-9 well" style = "margin-top:60px;">
				<div class = "alert alert-info">Accounts / Student</div>
					<a href="add_publisher.html"><button id = "add_student" type = "button" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add new</button></a>
					<button id = "show_student" type = "button" style = "display:none;" class = "btn btn-success"><span class = "glyphicon glyphicon-circle-arrow-left"></span> Back</button>
					<br />
					<br />
					<div id = "student_table">
						<table id = "table" class = "table table-bordered">
							<thead class = "alert-success">
								<tr>
									<th>Publisher ID</th>
									<th>publisher name</th>
									<th>Year of Publication</th>
									
								</tr>
							</thead>
							<tbody>
								<?php
									$qpublisher = $conn->query("SELECT * FROM `publisher`") or die(mysqli_error());
									while($fpublisher = $qpublisher->fetch_array()){
								?>
								<tr>
								<td><?php echo $fpublisher['publisher_id']?></td>
                                <td><?php echo $fpublisher['publisher_name']?></td>
                                <!-- <td><?php echo $fpublisher['Year_of_Publication']; ?></td> -->
                                <td><?php echo date('d-m-Y', strtotime($fpublisher['Year_of_Publication'])); ?></td>

								
									
									
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
					</div>
					
			</div>
		</div>
		<br />
		<br />
		<br />
		<nav class = "navbar navbar-default navbar-fixed-bottom">
			<div class = "container-fluid">
				<label class = "navbar-text pull-right">Library System &copy; All rights reserved 2024</label>
			</div>
		</nav>
	</body>