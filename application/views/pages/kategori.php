<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Kategori
        <small>&nbsp;</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Daftar kategori</li>
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
                    <h3 class="box-title"><i class="fa fa-tags"></i> Daftar kategori</h3>
                </div>
                <div class="box-header">
                    <div class="box-title">
                         <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-kategori"><span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah kategori</button>
                    </div>
                    <div class="box-tools">
                        <div class="input-group">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kategori</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit-kategori"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmasi-hapus"><i class="fa fa-trash"></i> Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Jane Doe</td>
                                        <td>11-7-2014</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit-kategori"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmasi-hapus"><i class="fa fa-trash"></i> Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Bob Doe</td>
                                        <td>11-7-2014</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit-kategori"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmasi-hapus"><i class="fa fa-trash"></i> Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Mike Doe</td>
                                        <td>11-7-2014</td>
                                        <td>
                                            <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit-kategori"><i class="fa fa-edit"></i> Edit</button>
                                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirmasi-hapus"><i class="fa fa-trash"></i> Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                                
                            </table>               
                        </div>
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination pagination-sm no-margin pull-right">
                                <li><a href="#">&laquo;</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /.box -->

        </div><!-- /.col (left) -->
    </div><!-- /.row (main row) -->
</section>
<div class="modal fade bs-example-modal-lg" id="add-kategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Form tambah kategori</h3>
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
                                <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Kategori">
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
<div class="modal fade bs-example-modal-lg" id="edit-kategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Form tambah kategori</h3>
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
                                <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Kategori">
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
<div class="modal fade bs-example-modal-lg" id="confirmasi-hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Hapus kategori</h3>
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