<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Product</h1>
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

						<div class="panel-body">
						<table id="table_id" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			        <thead>
						<tr>
							<th>Order ID</th>
							<th>Customer Name</th>
							<th>Order Date</th>
							<th>Shipped Date</th>
							<th>Shipper</th>
							<th>Status</th>
							<th>Detail</th>
						</tr>
						</thead>
						<tbody>
					<?php foreach($order as $value){?>
		     			<tr>
					        <td><?php echo $value->order_id;?></td>
					        <td><?php echo $value->username;?></td>
							<td><?php echo $value->order_date;?></td>
							<td><?php echo $value->shipped_date;?></td>
							<td><?php echo $value->shipper_company_name;?></td>
							<td><?php if($value->nilai == 0)
								{
									if($value->gambar == ""){
								?>
										<a href="<?php echo base_url('admin/order/verify/').$value->verifikasi_id;?>"><button class="btn btn-danger"><i class="glyphicon glyphicon-bullhorn"></i></button></a>
									<?php }else{ ?>
										<a href="<?php echo base_url('admin/order/verify/').$value->verifikasi_id;?>"><button class="btn btn-success"><i class="glyphicon glyphicon-bullhorn"></i></button></a>
									<?php } ?>
								<?php }else if($value->nilai == 1){ ?>
									<a href="<?php echo base_url('admin/order/verify/').$value->verifikasi_id;?>"><button class="btn btn-success"><i class="glyphicon glyphicon-ok"></i></button></a>
								<?php }else{ ?>
									<a href="<?php echo base_url('admin/order/verify/').$value->verifikasi_id;?>"><button class="btn btn-success"><i class="glyphicon glyphicon-plane"></i></button></a>
						  <?php } ?>
							</td>
							<td>
								<a href="<?php echo base_url('admin/order/detail/').$value->order_id;?>"><button class="btn btn-primary"><i class="glyphicon glyphicon-th-list"></i></button></a>
							</td>
		      			</tr>
		     		<?php }?>
						</tbody>
					<tfoot>
				        <tr>
				        	<th>Order ID</th>
							<th>Customer Name</th>
							<th>Order Date</th>
							<th>Shipped Date</th>
							<th>Shipper</th>
							<th>Status</th>
							<th>Detail</th>
			        </tr>
			      	</tfoot>
			    	</table>
						</div>	
						    		</div>
								</div>
						    </div>
						</div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>