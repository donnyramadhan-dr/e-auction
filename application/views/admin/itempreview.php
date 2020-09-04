<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <?php $this->load->view('partial/css') ?>
</head>

<body>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-2">
            <h1 class="h3 mb-0 text-gray-800">Data Item</h1>
        </div>

        <div class="card-body">
            <h5 class="mb-3 text-gray-800">Tanggal :</h5>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center">No.</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Date</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col" class="text-center">Description</th>
                            <th scope="col" class="text-center">Foto Barang</th>
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
                                    <td class="text-center"><?= $datas->harga_awal; ?></td>
                                    <td class="text-center"><?= $datas->deskripsi_barang; ?></td>
                                    <td class="text-center"><?= $datas->foto_barang; ?></td>
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
    <?php $this->load->view('partial/js') ?>
</body>

</html>