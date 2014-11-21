<!-- Content Header (Page header) -->
<section class="content-header hidden">
    <h1>
        Pembelanjaan
        <small>Panel belanja</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">isi form pembelanjaan</li>
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
                    <h3 class="box-title">Transaksi pembelian</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="no-ref" class="col-sm-3 control-label">No ref</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control input-sm" id="no-ref" placeholder="No ref">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal-beli" class="col-sm-3 control-label">Tanggal pembelian</label>
                                    <div class="col-sm-5">
                                        <div class="input-group input-group-sm">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="tanggal-beli"/>
                                        </div><!-- /.input group -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pencarian" class="col-sm-3 control-label">Pencarian barang</label>
                                    <div class="col-sm-9">
                                        <div class="input-group input-group-sm">
                                            <input type="text" id="pencarian" name="table_search" class="form-control input-sm pull-right search-barcode" data-provide="typeahead" placeholder="Barcode"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                <button class="btn btn-sm btn-default" data-toggle="modal" data-target="#add-barang"><i class="fa fa-plus-square"></i> Tambah baru</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="suplier" class="col-sm-3 control-label">Suplier</label>
                                    <div class="col-sm-9">
                                        <select id="suplier" class="form-control input-sm">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box-body table-responsive">
                                <table  class="table table-hover table-striped table-bordered transaksi">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama barang</th>
                                            <th>Merk</th>
                                            <th>Barcode</th>
                                            <th>Harga beli</th>
                                            <th>Harga jual</th>
                                            <th>Stok masuk</th>
                                            <th>Status</th>
                                            <th>Letak gudang</th>
                                            <th>Potongan harga</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr data-id="1">
                                            <td>1</td>
                                            <td>ban</td>
                                            <td>Radial</td>
                                            <td>98657889896755</td>
                                            <td>1.000.000</td>
                                            <td>1.500.000</td>
                                            <td>14</td>
                                            <td><span class="label label-success">Ada</span></td>
                                            <td>A6</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr data-id="2">
                                            <td>2</td>
                                            <td>ban dalam</td>
                                            <td>GT Radial</td>
                                            <td>7376327364873</td>
                                            <td>100.000</td>
                                            <td>150.000</td>
                                            <td>4</td>
                                            <td><span class="label label-danger">Kosong</span></td>
                                            <td>A97</td>
                                            <td>9%</td>
                                        </tr>
                                        <tr data-id="3">
                                            <td>3</td>
                                            <td>knalpot racing 125</td>
                                            <td>TDR</td>
                                            <td>865638383739839</td>
                                            <td>100.000</td>
                                            <td>160.000</td>
                                            <td>3</td>
                                            <td><span class="label label-warning">Limited</span></td>
                                            <td>A36</td>
                                            <td>2%</td>
                                        </tr>
                                        <tr data-id="4">
                                            <td>1</td>
                                            <td>ban</td>
                                            <td>Radial</td>
                                            <td>98657889896755</td>
                                            <td>1.000.000</td>
                                            <td>1.500.000</td>
                                            <td>14</td>
                                            <td><span class="label label-success">Ada</span></td>
                                            <td>A6</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr data-id="5">
                                            <td>2</td>
                                            <td>ban dalam</td>
                                            <td>GT Radial</td>
                                            <td>7376327364873</td>
                                            <td>100.000</td>
                                            <td>150.000</td>
                                            <td>4</td>
                                            <td><span class="label label-danger">Kosong</span></td>
                                            <td>A97</td>
                                            <td>9%</td>
                                        </tr>
                                        <tr data-id="6">
                                            <td>3</td>
                                            <td>knalpot racing 125</td>
                                            <td>TDR</td>
                                            <td>865638383739839</td>
                                            <td>100.000</td>
                                            <td>160.000</td>
                                            <td>3</td>
                                            <td><span class="label label-warning">Limited</span></td>
                                            <td>A36</td>
                                            <td>2%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Sub total</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="00">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Diskon</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="0%">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        PPN
                                    </label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" class="minimal-red"/>
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="0%">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Total</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="00">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Bayar</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="0%">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Kurang</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    &nbsp;
                                    <button class="btn btn-primary btn-sm btn-flat">Submit</button>
                                    &nbsp;
                                    <button class="btn btn-info btn-sm btn-flat">Reset</button>
                                    &nbsp;
                                    <button class="btn btn-default btn-sm btn-flat">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!-- /.col (left) -->
    </div><!-- /.row (main row) -->


<div class="modal fade bs-example-modal-lg" id="add-barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Data item barang</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Barcode</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control input-sm" id="inputEmail3" placeholder="Barcode">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Nama barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Merk</label>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option>Kategori Barang</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option>Kategori Barang</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Harga beli</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Harga beli">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Harga jual</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Harga jual">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Stok masuk</label>
                            <div class="col-sm-4">
                              <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Stok masuk">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi barang</label>
                            <div class="col-sm-4">
                                <textarea class="form-control" placeholder="Deskripsi barang"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Letak gudang</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="Letak gudang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Potongan harga</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control input-sm" id="inputPassword3" placeholder="0%">
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

<div class="modal fade bs-example-modal-sm" id="update-field" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Data item barang</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 form-horizontal" role="form">
                        <div class="form-group">
                            <label for="field" class="col-sm-6 control-label">-</label>
                            <div class="col-sm-6">
                                <input type="text" name="" class="form-control input-sm" id="field" placeholder="0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Change</button>
            </div>
        </div>
    </div>
</div>
