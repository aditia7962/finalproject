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
                        <div class="panel-heading">
							<?php if($this->session->flashdata('alert')): ?>
							<div class="alert"><?php echo $this->session->flashdata('alert'); ?></div>
							<?php endif ?>
					<div class="panel panel-default">
						                <div class="panel-body">
					<table id="table_id" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			        <thead>
						<tr>
							<th>Order ID</th>
							<th>Product Name</th>
							<th>Unit Price</th>
							<th>Quantity</th>
							<th>Total</th>
						</tr>
						</thead>
						<tbody>
					<?php foreach($order as $value){?>
		     			<tr>
					        <td><?=$value->order_id?></td>
					        <td><?=$value->product_name?></td>
							<td><?=$value->unit_price?></td>
							<td><?=$value->quantity?></td>
							<td><?=$value->total?></td>
		      			</tr>
		     		<?php }?>
						</tbody>
					<tfoot>
				        <tr>
				        	<th>Order ID</th>
							<th>Product Name</th>
							<th>Unit Price</th>
							<th>Quantity</th>
							<th>Total</th>
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