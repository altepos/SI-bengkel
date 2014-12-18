<!-- Content Header (Page header) --> 
<section class="content-header">
    <h1>
        Merek
        <small>&nbsp;</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">merek</li>
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
                    <h3 class="box-title"><i class="fa fa-tag"></i> Daftar merek</h3>
                </div>
                <div class="box-header">
                    <div class="box-title">
                         <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-merek"><span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah merek</button>
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
                                        <th>merek</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    foreach ($data_list as $key => $merek) {
                                    ?>
                                        <tr>
                                            <td><?php echo ($key + 1) ?></td>
                                            <td><?php echo $merek->nama ?></td>
                                            <td>-</td>
                                            <td>
                                                <button class="btn btn-sm btn-info edit-merek-edit" data-toggle="modal" data-target="#edit-merek" data-id="<?php echo $merek->id ?>"><i class="fa fa-edit"></i> Edit</button>
                                                <button class="btn btn-sm btn-danger delete-merek-delete" data-toggle="modal" data-target="#delete-merek" data-id="<?php echo $merek->id ?>"><i class="fa fa-trash"></i> Delete</button>
                                            </td>
                                        </tr>
                                    <?php 
                                    }
                                    ?>
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
                        <div class="alert alert-dismissable" style="display: none;">
                            <i class="fa fa-check"></i>
                            <b>Alert!</b> <span class="message"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" id="add-merek-nama" class="form-control input-sm" id="inputEmail3" placeholder="Merek">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-9">
                               <textarea id="add-merek-keterangan" class="form-control input-sm" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button id="add-merek-cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="add-merek-submit" type="button" class="btn btn-primary">Submit</button>
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
                        <div class="alert alert-dismissable" style="display: none;">
                            <i class="fa fa-check"></i>
                            <b>Alert!</b> <span class="message"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input id="edit-merek-id" type="hidden" class="form-control input-sm" id="inputEmail3" >
                                <input id="edit-merek-nama" type="text" class="form-control input-sm" id="inputEmail3" placeholder="merek">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-9">
                               <textarea id="edit-merek-keterangan" class="form-control input-sm" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="edit-merek-cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="edit-merek-submit" type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="delete-merek" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <button id="delete-merek-cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="delete-merek-submit" type="button" class="btn btn-danger" data-id="">Hapus</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/js_page/merek.js') ?>"></script>