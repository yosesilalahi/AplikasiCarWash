 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Admin Car Wash</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Master Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /.Main content -->
    <section class="content">
    
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Master Produk</h3>
            <div class="pull-right">
                <a href="<?=site_url('Purchase/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>

            </div>
        </div>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data){ ?>
                <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$data->jumlah?></td>
                    <td><?=$data->harga?></td>
                    <td class="text-center" width="160px">
                         <a href="<?=site_url('purchase/edit/'.$data->purchase_id)?>" class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i> Update
                        </a>
                        <a href="<?=site_url('purchase/del/'.$data->purchase_id)?>" onclick="return confirm('Apakah Anda Yakin Hapus Data?')" class="btn btn-danger btn-xs">
                            <i class="fa fa-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>
    </div>

    
    </section>