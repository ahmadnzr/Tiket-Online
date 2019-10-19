<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="dist/img/admin1.jpg" class="img-circle" alt="Admin Image">
			</div>
			<div class="pull-left info">
				<p><small><?php echo $_SESSION['fullname']; ?></small></p>
				<a href="#"><i class="glyphicon glyphicon-ok-circle text-success"></i> Online</a>
			</div>
		</div><!--user-panel-->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
				<a href="index.php"><i class="glyphicon glyphicon-home"></i><span> Home</span></a>
			</li>
			<li class="treeview">
				<a href="#">
				<i class="glyphicon glyphicon-file"></i><span> User</span>
				<i class="caret pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="index.php?page=user"><i class="glyphicon glyphicon-plus"></i> Input User</a></li>
					<li><a href="index.php?page=list_user"><i class="glyphicon glyphicon-list-alt"></i> List User</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
				<i class="glyphicon glyphicon-file"></i><span> Customer</span>
				<i class="caret pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="index.php?page=customer"><i class="glyphicon glyphicon-plus"></i> Input Customer</a></li>
					<li><a href="index.php?page=list_customer"><i class="glyphicon glyphicon-list-alt"></i> List Customer</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
				<i class="glyphicon glyphicon-file"></i><span> Transp. Type</span>
				<i class="caret pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="index.php?page=transtype"><i class="glyphicon glyphicon-plus"></i> Input Tran.Type</a></li>
					<li><a href="index.php?page=list_transtype"><i class="glyphicon glyphicon-list-alt"></i> List Trans.Type</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
				<i class="glyphicon glyphicon-file"></i><span> Transportation</span>
				<i class="caret pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="index.php?page=transp"><i class="glyphicon glyphicon-plus"></i> Input Transportation</a></li>
					<li><a href="index.php?page=list_transp"><i class="glyphicon glyphicon-list-alt"></i> List Transportation</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
				<i class="glyphicon glyphicon-file"></i><span> Rute</span>
				<i class="caret pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="index.php?page=rute"><i class="glyphicon glyphicon-plus"></i> Input Rute</a></li>
					<li><a href="index.php?page=list_rute"><i class="glyphicon glyphicon-list-alt"></i> List Rute</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
				<i class="glyphicon glyphicon-file"></i><span> Reservation</span>
				<i class="caret pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="index.php?page=reservation"><i class="glyphicon glyphicon-plus"></i> Input Reservation</a></li>
					<li><a href="index.php?page=list_reservation"><i class="glyphicon glyphicon-list-alt"></i> List Reservation</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="glyphicon glyphicon-info-sign"></i><span> Info</span></a>
			</li>
			<li class="treeview">
				<a href="#"><i class="glyphicon glyphicon-question-sign"></i><span> Bantuan</span></a>
			</li>
			<li class="treeview">
				<a href="logout.php"><i class="glyphicon glyphicon-log-out"></i><span> Logout</span></a>
			</li>
		</ul>
	</section>
</aside>