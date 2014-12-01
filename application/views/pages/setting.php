<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Setting
        <small>&nbsp;</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">setting</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <!-- full col -->
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-gears"></i> Form setting</h3>
                </div>
                <div class="box-body ">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-1 form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nama toko</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Nama toko">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Nama Pemilik</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Nama pemilik">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Kota</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Kota">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-9">
                                   <textarea class="form-control input-sm" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">No telp</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control input-sm" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="">
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Website</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-7 form-horizontal" role="form">
                                <img src="http://dummyimage.com/225x225/140914/a5a6b8&text=company+logo" class="img-responsive img-thumbnail" alt="Responsive image" >
                                <br>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Logo ini akan di tampilkan di nota pembelian dan di aplikasi</p>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            &nbsp;
                        </div>
                    </div>
                    
                </div>
            </div><!-- /.box -->

        </div><!-- /.col (left) -->
    </div><!-- /.row (main row) -->
</section>
<div class="modal fade bs-example-modal-lg" id="add-merek" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Form tambah merek</h3>
            </div>
            <div class="modal-body">
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="alert alert-success alert-dismissable">
                            <i class="fa fa-check"></i>
                            <b>Alert!</b> Success alert preview. This alert is dismissable.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Merek">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-9">
                               <textarea class="form-control input-sm" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="edit-merek" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Form tambah merek</h3>
            </div>
            <div class="modal-body">
                <br>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="alert alert-success alert-dismissable">
                            <i class="fa fa-check"></i>
                            <b>Alert!</b> Success alert preview. This alert is dismissable.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="merek">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Descripsi</label>
                            <div class="col-sm-9">
                               <textarea class="form-control input-sm" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="confirmasi-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Hapus Merek</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 form-horizontal" role="form">
                        Apakah anda yakin akan menghapus?
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("[data-mask]").inputmask();
</script>