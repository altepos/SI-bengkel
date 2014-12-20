<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Kategori
        <small>&nbsp;</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">kategori</li>
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
                    <h3 class="box-title"><i class="fa fa-tag"></i> Daftar kategori</h3>
                </div>
                <div class="box-header">
                    <div class="box-title">
                         <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add-kategori"><span class="glyphicon glyphicon-plus"></span> &nbsp;Tambah kategori</button>
                    </div>
                    <div class="box-tools">
                        <?php echo form_open('kategori/findByName', array('class' => 'input-group', 'method' => 'GET')); ?>
                            <input id="kategori_auto" type="text" name="search_term" class="form-control input-sm pull-right" style="width: 300px;" placeholder="Search"/>
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $offset = $this->input->get('per_page', TRUE);

                                    foreach ($data_list as $key => $kategori) {
                                    ?>
                                        <tr>
                                            <td><?php echo ($key + 1 + $offset) ?></td>
                                            <td><?php echo $kategori->nama ?></td>
                                            <td>
                                                <button class="btn btn-sm btn-info edit-kategori-edit" data-toggle="modal" data-target="#edit-kategori" data-id="<?php echo $kategori->id ?>"><i class="fa fa-edit"></i> Edit</button>
                                                <button class="btn btn-sm btn-danger delete-kategori-delete" data-toggle="modal" data-target="#delete-kategori" data-id="<?php echo $kategori->id ?>"><i class="fa fa-trash"></i> Delete</button>
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
                            <?php echo $pagination; ?>
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
                                <input type="text" id="add-kategori-nama" class="form-control input-sm" id="inputEmail3" placeholder="Merek">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button id="add-kategori-cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="add-kategori-submit" type="button" class="btn btn-primary">Submit</button>
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
                                <input id="edit-kategori-id" type="hidden" class="form-control input-sm" id="inputEmail3" >
                                <input id="edit-kategori-nama" type="text" class="form-control input-sm" id="inputEmail3" placeholder="kategori">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="edit-kategori-cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="edit-kategori-submit" type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bs-example-modal-lg" id="delete-kategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                <button id="delete-kategori-cancel" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="delete-kategori-submit" type="button" class="btn btn-danger" data-id="">Hapus</button>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/js/js_page/kategori.js') ?>"></script>