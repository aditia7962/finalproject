<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
								<?php echo form_open(); ?>
								<div class="col-lg-12">
								<?php foreach ($order as $value){}?>
								<div class="form-group">
									<label>Nama Pengirim : </label>
										<label  class="form-control" ><?=$value->nama_pengirim?>"</label>
								</div>
								<div class="form-group">
									<label>Bank Asal : </label>
										<label class="form-control" ><?=$value->bank_asal?>"</label>
								</div>
								<div class="form-group">
                                    <label>Bank Tujuan : </label>
										<label class="form-control" ><?=$value->bank_tujuan?>"</label>
								</div>
								<div class="form-group">
                                    <label>Nominal : </label>
										<label class="form-control" >"<?=$value->nominal?>"</label>
								</div>
								<div class="form-group">
									<label>Bukti Transfer : </label><br />
									<img style="width:20%" src="<?=base_url().$value->gambar?>" alt="">
								</div>
								<div class="form-group">	
								<label>Usename : </label>
								
									<label class="form-control" ><?=$value->username?></label>
								</div>
								<div class="form-group">
								<label for="">Order ID</label>
								
									<label class="form-control" ><?=$value->order_id?></label>
								</div>
								<div class="form-group">
									<label>Status : </label>
										<select name="nilai" class="form-control" >
											<option value="<?=$value->nilai?>">Menunggu Konfirmasi</option>
											<option value="0">Menunggu Konfirmasi</option>
											<option value="1">Konfirmasi Sukses</option>
											<option value="2">Barang Sudah Dikirim</option>
											
										</select>
									<br />
								</div>
								</div>

<div class="form-group"  style="text-align: center;">
                                    <input type="submit" class="btn btn-default" name="submit" value="submit">
                                    <button type="reset" class="btn btn-default">Back</button>
                                </div>
						 </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<body>