<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Order Customer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
                        <?php foreach ($verify as $value) { } ?>
                   
                    <?php if($value->nilai == '0'){ ?>
                        <a href="<?php echo base_url('customer/dashboard/verify/'); echo $value->verifikasi_id; ?>"><button class="btn btn-danger"<i class="glyphicon glyphicon-plus"></i>Menunggu Verifikasi Pembayaran</button></a>
                    <?php }else if($value->nilai == '1'){ ?>
                        <a href=""><button class="btn btn-warning"<i class="glyphicon glyphicon-plus"></i>Verifikasi Sukses</button></a>
                    <?php }else{  ?>
                        <a href=""><button class="btn btn-success"<i class="glyphicon glyphicon-plus"></i>Barang Dikirim</button></a>
                    <?php } ?>
                        </div>

                    <?php if($this->session->flashdata('alert')): ?>
                    <div class="alert alert-info"><?php echo $this->session->flashdata('alert'); ?></div>
                    <?php endif ?>
                    
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                    
                            <div class="table-responsive">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dashboard as $value):
                                    ?>
                                    <tr>
                                        <td><?php echo $value->product_name;?></td>
                                        <td><?php echo $value->unit_price;?></td>
                                        <td><?php echo $value->quantity;?></td>
                                        <td><?php echo '$ '.$value->total;?></td>

                                    </tr>
                                    <?php endforeach ?>
                                    <tr>
                                        <td colspan="3">Total Bayar</td>
                                        <td>
                                        <?php 
                                        $total = 0;
                                        foreach($dashboard as $value) 
                                        {
                                            $total += intval($value->total); 
                                        }
                                        echo '$ '.$total;
                                         ?>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<body>