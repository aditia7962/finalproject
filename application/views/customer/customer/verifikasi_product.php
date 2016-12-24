 <?php foreach ($verify as $value) { } ?>
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Verifikasi Product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php echo form_open_multipart(); ?>
                                        <div class="form-group">
                                            <label>Nama Pengirim</label>
                                            <input class="form-control" type="text" name="nama_pengirim" value="<?=$value->nama_pengirim?>">
                                            <p class="help-block">Masukan nama pengirim</p>
                                        </div>
										<div class="form-group">
                                            <label>Bank Asal</label>
                                            <input class="form-control" type="text" name="bank_asal" value="<?=$value->bank_asal?>">
                                            <p class="help-block">Masukan bank asal</p>
                                        </div>
										<div class="form-group">
                                            <label>Bank Tujuan</label>
                                            <input class="form-control" type="text" name="bank_tujuan" value="<?=$value->bank_tujuan?>">
                                            <p class="help-block">Masukan bank tujuan</p>
                                        </div>
										<div class="form-group">
                                            <label>Nominal</label>
                                            <input class="form-control" type="text" name="nominal" value="<?=$value->nominal?>">
                                            <p class="help-block">Masukan nominal</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Bukti Transfer</label><br >
                                            <img src="<?=base_url().$value->gambar?>" style="width: 20%;" alt="">
											<input type="file" name="gambar" value="">
                                        </div>

                                        <input type="submit" class="btn btn-default" value="submit" name="submit">
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    <?php echo form_close(); ?>
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
