<nav style="background-color: #262673;" class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand" href="index.php"><h1>E - Auction</h1></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo site_url('UserPage/index')?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo site_url('UserPage/barang')?>">Barang Lelang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo site_url('UserPage/regis')?>">Register Petugas</a>
                    </li>
                    <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?php echo $this->session->userdata('username');?></b></span>
                <img class="img-profile rounded-circle" src="">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">                
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
                </ul>
            </div>
        </div>
    </nav>

    <!-- modal logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?php echo site_url('UserPage/logout') ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>