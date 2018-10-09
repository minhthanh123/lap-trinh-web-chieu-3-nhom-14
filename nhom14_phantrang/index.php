
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Mobile Admin</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="public/css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" href="public/css/uniform.css" />
	<link rel="stylesheet" href="public/css/select2.css" />
	<link rel="stylesheet" href="public/css/matrix-style.css" />
	<link rel="stylesheet" href="public/css/matrix-media.css" />
	<link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css">
		ul.pagination{
			list-style: none;
			float: right;
		}
		ul.pagination li.active{
			font-weight: bold
		}
		ul.pagination li{
		  float: left;
		  display: inline-block;
		  padding: 10px
		}
	</style>
</head>
<body>

<!--Header-part-->
<div id="header">
	<h1><a href="dashboard.php">Dashboard</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
	<ul class="nav">
		<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome Super Admin</span><b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
				<li class="divider"></li>
				<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
				<li class="divider"></li>
				<li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
			</ul>
		</li>
		<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
				<li class="divider"></li>
				<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
				<li class="divider"></li>
				<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
				<li class="divider"></li>
				<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
			</ul>
		</li>
		<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
		<li class=""><a title="" href="login.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
	</ul>
</div>

<!--start-top-serch-->
<div id="search.php" method="get">
	<input type="text" placeholder="Search here..." name="key"/>
	<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</form>
</div>
<!--close-top-serch-->

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
	<ul>
		<li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>

		<li> <a href="form.php"><i class="icon icon-th-list"></i> <span>Add New Product</span></a></li>
		<li> <a href="manufactures.php"><i class="icon icon-th-list"></i> <span>Manufactures</span></a></li>



	</ul>
</div>
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Manage Products</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><a href="form.php"> <i class="icon-plus"></i> </a></span>
						<h5>Products</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								<th></th>
								<th>Name</th>
								<th>Category</th>
								<th>Producer</th>
								<th>Description</th>
								<th>Price (VND)</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<tr class="">
								<td><img src="public/images/honda-winner_2019.jpg" /></td>
								<td>HONDA WINNER 150</td>
								<td>HONDA WINNER</td>
								<td>HONDA</td>
								<td>WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.</td>
								<td>45,490,000</td>
								<td>
									<a href="form.html" class="btn btn-success btn-mini">Edit</a>
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
								</td>
							</tr>
							<tr class="">
								<td><img src="public/images/honda_Winner_2018.jpg" /></td>
								<td>HONDA WINNER 150</td>
								<td>HONDA WINNER</td>
								<td>HONDA</td>
								<td>WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.</td>
								<td>45,000,000</td>
								<td>
									<a href="form.html" class="btn btn-success btn-mini">Edit</a>
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
								</td>
							</tr>
							<tr class="">
								<td><img src="public/images/yamaha-exciter-2019.jpg" /></td>
								<td>YAMAHA EXCITER 150</td>
								<td>YAMAHA EXCITER </td>
								<td>YAMAHA</td>
								<td>Loại 4 thì, 4 van, SOHC, làm mát bằng dung dịch,Bố trí xi lanh,Xy lanh đơn,Dung tích xy lanh (CC) 150,Đường kính và hành trình piston 57.0 x 58.7 mm,Tỷ số nén 10.4:1,Công suất tối đa 11,3 kW (15,4 PS) / 8.500 vòng/phút, Mô men cực đại 13,8 N·m (1,4 kgf·m) / 7.000 vòng/phút,Hệ thống khởi động, Điện, Hệ thống bôi trơn,Dung tích bình xăng 4.2 lít,Bộ chế hòa khí,Phun xăng (1 vòi phun)</td>
								<td>47,490,000</td>
								<td>
									<a href="edit.html" class="btn btn-success btn-mini">Edit</a>
									<form action="" method="">
										<input type="submit" class="btn btn-danger btn-mini" value="Delete">
									</form>
								</td>
							</tr>
							<tr class="">
								<td><img src="public/images/yamaha-exciter-2019-tai-dai-ly-4.png"/></td>
								<td>YAMAHA EXCITER 150</td>
								<td>YAMAHA EXCITER </td>
								<td>YAMAHA</td>
								<td>Loại 4 thì, 4 van, SOHC, làm mát bằng dung dịch,Bố trí xi lanh,Xy lanh đơn,Dung tích xy lanh (CC) 150,Đường kính và hành trình piston 57.0 x 58.7 mm,Tỷ số nén 10.4:1,Công suất tối đa 11,3 kW (15,4 PS) / 8.500 vòng/phút, Mô men cực đại 13,8 N·m (1,4 kgf·m) / 7.000 vòng/phút,Hệ thống khởi động, Điện, Hệ thống bôi trơn,Dung tích bình xăng 4.2 lít,Bộ chế hòa khí,Phun xăng (1 vòi phun)</td>
								<td>47,990,000</td>
								<td>
									<a href="edit.html" class="btn btn-success btn-mini">Edit</a>
									<form action="" method="">
										<input type="submit" class="btn btn-danger btn-mini" value="Delete">
									</form>
								</td>
							</tr>
							<tr class="">
								<td><img src="public/images/winner_150.jpg" /></td>
								<td>HONDA WINNER 150</td>
								<td>HONDA WINNER</td>
								<td>HONDA</td>
								<td>WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.</td>
								<td>45,000,000</td>
								<td>
									<a href="form.html" class="btn btn-success btn-mini">Edit</a>
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
								</td>
							<tr class="">
								<td><img src="public/images/winner_2018.jpg" /></td>
								<td>HONDA WINNER 150</td>
								<td>HONDA WINNER</td>
								<td>HONDA</td>
								<td>WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.</td>
								<td>47,000,000</td>
								<td>
									<a href="form.html" class="btn btn-success btn-mini">Edit</a>
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
								</td>
							</tr>
							<tr class="">
								<td><img src="public/images/xe-winner-1201.jpg" /></td>
								<td>HONDA WINNER 150</td>
								<td>HONDA WINNER</td>
								<td>HONDA</td>
								<td>WINNER 150 sở hữu thiết kế nhiều lớp, khung và vỏ xe cấu tạo 3 chiều, góc cạnh trong hình dáng một chiếc xe underbone thân thiện, linh hoạt; tạo nên thiết kế độc đáo, riêng biệt.</td>
								<td>46,000,000</td>
								<td>
									<a href="form.html" class="btn btn-success btn-mini">Edit</a>
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
								</td>
							</tr>
							<tr class="">
								<td><img src="public/images/sh_1905367.jpeg" /></td>
								<td>HONDA SH125/150i</td>
								<td>HONDA SH125</td>
								<td>HONDA </td>
								<td>SH125/150i - một kiệt tác thiết kế mới sang trọng và đẳng cấp hơn với những đường nét đậm chất châu Âu, chinh phục mọi con tim ngay từ ánh nhìn đầu tiên.
								</td>
								<td>60,600,000</td>
								<td>
									<a href="form.html" class="btn btn-success btn-mini">Edit</a>
									<a href="#" class="btn btn-danger btn-mini">Delete</a>
								</td>
							</tr>
							
						</tbody>
						</table>
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<!-- END CONTENT -->
<!--Footer-part-->
<div class="row-fluid">
	<div id="footer" class="span12"> 2018 &copy; TDC - Lập trình web 1</div>
</div>
<!--end-Footer-part-->
<script src="public/js/jquery.min.js"></script>
<script src="public/js/jquery.ui.custom.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.uniform.js"></script>
<script src="public/js/select2.min.js"></script>
<script src="public/js/jquery.dataTables.min.js"></script>
<script src="public/js/matrix.js"></script>
<script src="public/js/matrix.tables.js"></script>
</body>
</html>

