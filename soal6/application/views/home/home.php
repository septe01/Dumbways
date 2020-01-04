
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="header">
                    <h3>INVENTORY</h3>
                    <div>
                        <a href="" class="btn btn-primary btn-sm float-right">Add Products</a>
                        <a href="" class="btn btn-primary btn-sm float-right mr-2">Add Supplier</a>
                    </div>
                </div>
                <div class="table mt-5" style="clear: both">
                    <table class=" table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Produk Name</th>
                            <th>Company Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th colspan="2" class=" text-center">Action</th>
                        </tr>
                        <?php 
                            $no = 1;
                            foreach ($table_join as $inventory) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $inventory["product_name"]; ?></td>
                                    <td><?= $inventory["company_name"]; ?></td>
                                    <td><?= $inventory["address"]; ?></td>
                                    <td><?= $inventory["phone"]; ?></td>
                                    <td>Hapus</td>
                                    <td>Ubah</td>
                                </tr>
                         <?php   }
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>