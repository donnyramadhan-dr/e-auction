<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <?php $this->load->view('partial/css') ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('partial/sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php $this->load->view('partial/topbar') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary text-center"><?= $title; ?></h6>
                        </div>
                        <div class="card-body">
                            <form class=" form-signin" action="<?= site_url('AdminPage/insert_officer') ?>" method="POST">
                                <div class="form-group">
                                    <h5 class="text-left">Name</h5>
                                    <label for="inputName" class="sr-only">Name</label>
                                    <input type="text" name="names" id="inputName" class="form-control mb-3" placeholder="Insert Name" required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <h5 class="text-left">Username</h5>
                                    <label for="inputUsername" class="sr-only">Username</label>
                                    <input type="text" name="usernames" id="inputUsername" class="form-control mb-3" placeholder="Insert Username" required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <h5 class="text-left">Password</h5>
                                    <label for="inputPassword" class="sr-only">Password</label>
                                    <input type="password" name="passwords" id="inputPassword" class="form-control mb-3" placeholder="Insert Password" required="">
                                </div>

                                <div class="form-group">
                                    <h5 class="text-left">Level</h5>
                                    <label for="inputLevel" class="sr-only">Level</label>
                                    <div class="input-group mb-3">
                                        <select class="custom-select" id="inputGroupSelect01" name="levels">
                                            <option selected>Choose...</option>
                                            <option value="1">Administrator</option>
                                            <option value="2">Officer</option>
                                        </select>
                                    </div>
                                </div>

                                <button style="width: 10%;" class="btn btn-small btn-success btn-block" type="submit"><i class="far fa-save"></i></button>
                            </form>
                        </div>
                    </div>
                    <a href="<?= site_url('AdminPage/officer_table') ?>" class="text-danger float-right">
                        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
                    </a>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php $this->load->view('partial/footer'); ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view('partial/modal') ?>

    <?php $this->load->view('partial/js') ?>
</body>

</html>