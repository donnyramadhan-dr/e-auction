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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Item</h1>
                        <a href="<?= site_url('AdminPage/cetak_pdf_item') ?>" class="btn btn-sm btn-primary shadow-sm" style="margin-right: -63.5%;">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generate PDF
                        </a>
                        <a href="<?= site_url('AdminPage/cetak_xls_item') ?>" class="btn btn-sm btn-success shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generate XLS
                        </a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Item
                                <span>
                                    <a href="<?= site_url('AdminPage/add_barang') ?>" class="text-primary float-right">
                                        <i class="fas fa-plus"><span class="ml-2">Add Items</span></i>
                                    </a>
                                </span>
                            </h6>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" class="text-center">No.</th>
                                            <th scope="col" class="text-center">Name</th>
                                            <th scope="col" class="text-center">Date</th>
                                            <th scope="col" class="text-center">Price</th>
                                            <th scope="col" class="text-center">Description</th>
                                            <th scope="col" class="text-center">Picture</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if ($c_user > 0) {
                                            foreach ($user as $datas) {
                                        ?>
                                                <tr>
                                                    <td class="text-center"><?= $no++; ?></td>
                                                    <td class="text-center"><?= $datas->nama_barang; ?></td>
                                                    <td class="text-center"><?= $datas->tgl; ?></td>
                                                    <td class="text-center">Rp. <?= $datas->harga_awal; ?></td>
                                                    <td class="text-center"><?= $datas->deskripsi_barang; ?></td>
                                                    <td align="center"><img style="width: 50%" src="<?= site_url('asset/img/').$datas->foto_barang; ?>"> </td>
                                                    <td width="190" class="text-center">
                                                        <a href="<?= site_url('AdminPage/edit_item/' . $datas->id_barang) ?>" class="btn btn-small text-warning">
                                                            <i class="fas fa-edit"></i><span class="ml-2">Edit</span>
                                                        </a>
                                                        <a href="<?= site_url('AdminPage/delete_barang/' . $datas->id_barang) ?>" class="btn btn-small text-danger">
                                                            <i class="fas fa-trash"></i><span class="ml-2">Delete</span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="8">
                                                    <center> No Data Entry! </center>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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