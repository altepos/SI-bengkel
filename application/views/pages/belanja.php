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
                                                    <label for="inputEmail3" class="col-sm-3 control-label">No ref</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Tanggal pembelian</label>
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
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Pencarian barang</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group input-group-sm">
                                                            <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Barcode"/>
                                                            <div class="input-group-btn">
                                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-horizontal" role="form">
                                                <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-3 control-label">Supplier</label>
                                                    <div class="col-sm-9">
                                                        <div class="">
                                                            <select class="form-control input-sm">
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
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <style type="text/css">
                                                /*!
                                                * jquery.fixedHeaderTable. The jQuery fixedHeaderTable plugin
                                                *
                                                * Copyright (c) 2011 Mark Malek
                                                * http://fixedheadertable.com
                                                *
                                                * Licensed under MIT
                                                * http://www.opensource.org/licenses/mit-license.php
                                                * 
                                                * http://docs.jquery.com/Plugins/Authoring
                                                * jQuery authoring guidelines
                                                *
                                                * Launch  : October 2009
                                                * Version : 1.3
                                                * Released: May 9th, 2011
                                                *
                                                * 
                                                * all CSS sizing (width,height) is done in pixels (px)
                                                */

                                                /* @group Reset */

                                                .fht-table,
                                                .fht-table thead,
                                                .fht-table tfoot,
                                                .fht-table tbody,
                                                .fht-table tr,
                                                .fht-table th,
                                                .fht-table td {
                                                    /* position */
                                                    margin: 0;
                                                    
                                                    /* size */
                                                    padding: 0;

                                                    /* text */
                                                    font-size: 100%;
                                                    font: inherit;
                                                    vertical-align: top;
                                                    }

                                                .fht-table {
                                                    /* appearance */
                                                    border-collapse: collapse;
                                                    border-spacing: 0;
                                                    }

                                                /* @end */

                                                /* @group Content */

                                                .fht-table-wrapper,
                                                .fht-table-wrapper .fht-thead,
                                                .fht-table-wrapper .fht-tfoot,
                                                .fht-table-wrapper .fht-fixed-column .fht-tbody,
                                                .fht-table-wrapper .fht-fixed-body .fht-tbody,
                                                .fht-table-wrapper .fht-tbody {
                                                    /* appearance */
                                                    overflow: hidden;
                                                    
                                                    /* position */
                                                    position: relative;
                                                    }

                                                    .fht-table-wrapper .fht-fixed-body .fht-tbody,
                                                    .fht-table-wrapper .fht-tbody {
                                                        /* appearance */
                                                        overflow: auto;
                                                        }

                                                        .fht-table-wrapper .fht-table .fht-cell {
                                                            /* appearance */
                                                            overflow: hidden;
                                                            
                                                            /* size */
                                                            height: 1px;
                                                            }
                                                    
                                                    .fht-table-wrapper .fht-fixed-column,
                                                    .fht-table-wrapper .fht-fixed-body {
                                                        /* position */
                                                        top: 0;
                                                        left: 0;
                                                        position: absolute;
                                                        }
                                                        
                                                    .fht-table-wrapper .fht-fixed-column {
                                                        /* position */
                                                        z-index: 1;
                                                        }

                                                /* @end */
                                            </style>
                                            <div class="box-body table-responsive">
                                                <table  class="table table-hover table-striped table-bordered transaksi">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>User</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Reason</th>
                                                            <th>User</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody >
                                                        <tr>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>219</td>
                                                            <td>Jane Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-warning">Pending</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>657</td>
                                                            <td>Bob Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-primary">Approved</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>175</td>
                                                            <td>Mike Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-danger">Denied</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>219</td>
                                                            <td>Jane Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-warning">Pending</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>657</td>
                                                            <td>Bob Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-primary">Approved</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>175</td>
                                                            <td>Mike Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-danger">Denied</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>219</td>
                                                            <td>Jane Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-warning">Pending</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>657</td>
                                                            <td>Bob Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-primary">Approved</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>175</td>
                                                            <td>Mike Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-danger">Denied</span></td>
                                                            <td>183</td>
                                                            <td>John Doe</td>
                                                            <td>11-7-2014</td>
                                                            <td><span class="label label-success">Approved</span></td>
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
                                                    <button class="btn btn-primary btn-lg btn-flat">Submit</button>
                                                    &nbsp;
                                                    <button class="btn btn-info btn-lg btn-flat">Reset</button>
                                                    &nbsp;
                                                    <button class="btn btn-default btn-lg btn-flat">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col (left) -->
                    </div><!-- /.row (main row) -->
