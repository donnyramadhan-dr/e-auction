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
                            <form class="form-signin" action="<?php echo site_url('AdminPage/insert_barang') ?>" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <h5 class="text-left">Name</h5>
                                    <label for="inputName" class="sr-only">Name</label>
                                    <input type="text" name="names" id="inputName" class="form-control mb-3" placeholder="Insert Item Name" required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <h5 class="text-left">Date</h5>
                                    <label for="inputDate" class="sr-only">Date</label>
                                    <input type="date" name="dates" id="inputDate" class="form-control mb-3" placeholder="Insert Date" required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <h5 class="text-left">Price</h5>
                                    <label for="inputPrice" class="sr-only">Price</label>
                                    <input type="number" name="prices" id="inputPrice" class="form-control mb-3" placeholder="Insert Price" required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <h5 class="text-left">Upload Foto</h5>
                                    <label for="inputDescription" class="sr-only">Upload Foto</label>
                                    <input type="file" name="foto" id="inputdfoto" class="form-control mb-3" placeholder="Insert Price" required="" autofocus="">
                                </div>

                                <div class="form-group">
                                    <h5 class="text-left">Description</h5>
                                    <label for="inputDescription" class="sr-only">Description</label>
                                    <textarea class="form-control mb-3" name="descs" placeholder="Insert Description"></textarea>
                                </div>

                                <button style="width: 10%;" class="btn btn-small btn-success btn-block" type="submit"><i class="far fa-save"></i></button>
                            </form>
                        </div>
                    </div>
                    <a href="<?= site_url('AdminPage/itemstable') ?>" class="text-danger float-right">
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