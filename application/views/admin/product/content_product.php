 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Mobil</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    <?php if($this->session->flashdata('alert')): ?>
              <div class="alert alert-info"><?php echo $this->session->flashdata('alert'); ?></div>
              <?php endif ?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                  <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Discount</th>
                          <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php foreach($product as $value){?>
                    <tr>
                        <td><?php echo $value->product_id;?></td>
                        <td><?php echo $value->product_name;?></td>
                    <td><?php echo $value->unit_price;?></td>
                    <td><?php echo $value->unit_in_stock;?></td>
                    <td><?php echo $value->discount;?></td>
                    <td>
                    <a href="<?php echo base_url('admin/product/update/').$value->product_id;?>"><button class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></button></a>
                    <a href="<?php echo base_url('admin/product/delete/').$value->product_id;?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button></a>
                    </td>
                      </tr>
                  <?php }?>
                  </tbody>
                <tfoot>
                    <tr>
                      <th>Product ID</th>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Discount</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <!-- /#wrapper -->
