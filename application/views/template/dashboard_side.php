<?php
$currentUser = $this->session->userdata('login_user');
//$Image = $currentUser[0]->Image;
$User_Name = $currentUser[0]->Users_Name;
?>

<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: white; box-shadow: 41px 26px 84px 37px rgba(0,0,0,0.21);
-webkit-box-shadow: 41px 26px 84px 37px rgba(0,0,0,0.21);
-moz-box-shadow: 41px 26px 84px 37px rgba(0,0,0,0.21);">
	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url(); ?>Dashboard">
		<div class="sidebar-brand-icon ">
			<img style="width: 200px;" class="img-fluid" style="-webkit-filter: drop-shadow(2px 2px 2px #a6a6a6)"
				src="<?php echo base_url(); ?>assets/images/logo/wps1.png" alt="Image Description">
			<!--<i class="fas fa-building"></i>-->
		</div>
		<!--<div class="sidebar-brand-text mx-3">Sellfree.lk<sup></sup></div>-->
	</a>

	<!-- Divider -->
	<!--<hr class="sidebar-divider my-0">-->

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url(); ?>Dashboard" style="color: black;">
			<i class="fas fa-fw fa-tachometer-alt" style="color: black;"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider" style="background-color: black;">

	<!-- Heading -->




	<div class="sidebar-heading" style="color: black;">
		Data
	</div>

	<!-- Nav Item - Pages Collapse Menu -->


	<!-- <li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>AD's</span>
		</a>
		<div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Components:</h6>
				<a class="collapse-item" href="<?php echo base_url() ?>Ads/pending">Pending Ads</a>
				<a class="collapse-item" href="<?php echo base_url() ?>Ads/lists">Ad List</a>
				<a class="collapse-item" href="buttons.html">Reported</a>
			  
			</div>
		</div>
	</li> -->


	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
			aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog" style="color: black;"></i>
			<span style="color: black;">Customers</span>
		</a>
		<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<!--<h6 class="collapse-header">Custom Components:</h6>-->
				<a class="collapse-item" href="<?php echo base_url() ?>Users/lists" style="color: black;">View
					Customers</a>
				<a class="collapse-item" href="<?php echo base_url() ?>Register" style="color: black;">Register
					Customers</a>

			</div>
		</div>
	</li>





	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="true"
			aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog" style="color: black;"></i>
			<span style="color: black;">Enquery</span>
		</a>
		<div id="collapse10" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<!-- <h6 class="collapse-header">Custom Components:</h6> -->
				<a class="collapse-item" href="buttons.html" style="color: black;">View Enquaries</a>
				<!-- <a class="collapse-item" href="cards.html">Supplier Payments</a>
				<a class="collapse-item" href="cards.html">Payments History</a> -->
			</div>
		</div>
	</li>


	<!-- <li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>REFUND</span>
		</a>
		<div id="collapse11" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Components:</h6>
				<a class="collapse-item" href="buttons.html">Sales Refund</a>
				<a class="collapse-item" href="cards.html">Service Refund</a>

			</div>
		</div>
	</li> -->



	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse12" aria-expanded="true"
			aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog" style="color: black;"></i>
			<span style="color: black;">Add Post</span>
		</a>
		<div id="collapse12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?php echo base_url(); ?>Post_Ad" style="color: black;">Add Post</a>
				<a class="collapse-item" href="<?php echo base_url() ?>Ads/pending" style="color: black;">Manage
					Post</a>
				<a class="collapse-item" href="<?php echo base_url() ?>Ads/lists" style="color: black;">Ad List</a>
			</div>
		</div>
	</li>




	<!-- Nav Item - Utilities Collapse Menu -->


	<!-- Divider -->
	<hr class="sidebar-divider" style="background-color: black;">

	<!-- Heading -->
	<!-- <div class="sidebar-heading">
		REPORTS
	</div> -->

	<!-- Nav Item - Pages Collapse Menu -->

	<!-- <li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>STOCK</span>
		</a>
		<div id="collapse13" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Components:</h6>
				<a class="collapse-item" href="buttons.html">Current Stock</a>
				<a class="collapse-item" href="buttons.html">Min Stock</a>
				<a class="collapse-item" href="buttons.html">Stock Diary</a>


			</div>
		</div>
	</li> -->


	<!-- <li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse14" aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-cog"></i>
			<span>SALES</span>
		</a>
		<div id="collapse14" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Custom Components:</h6>
				<a class="collapse-item" href="buttons.html">Sales</a>
				<a class="collapse-item" href="buttons.html">Sales Return</a>
				<a class="collapse-item" href="buttons.html">Stock Diary</a>


			</div>
		</div>
	</li> -->

	<!-- Nav Item - Tables -->
	<!--                <li class="nav-item">
						<a class="nav-link" href="tables.html">
							<i class="fas fa-fw fa-table"></i>
							<span>Tables</span></a>
					</li>-->
	<!-- <hr class="sidebar-divider d-none d-md-block"> -->




	<!-- <li class="nav-item">
		<a data-toggle="modal" data-target="#logoutModal" class="nav-link" >
			<i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
			<span>LOGOUT</span></a>
	</li> -->

	<!-- Divider -->
	<!-- <hr class="sidebar-divider d-none d-md-block"> -->

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle" style="background-color: black;"></button>
	</div>

</ul>



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Want to log out?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Press the Exit button to exit, otherwise select No.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
				<a class="btn btn-success" href="<?php echo base_url(); ?>Login/logout">Yes</a>
			</div>
		</div>
	</div>
</div>
