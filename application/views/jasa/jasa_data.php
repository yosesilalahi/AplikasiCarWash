 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard List Jasa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard')?>">Home</a></li>
              <li class="breadcrumb-item active">Data Jasa</li>
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
            <h3 class="box-title">Data Kategori Jasa</h3>
            <div class="pull-right">
                <a href="<?=site_url('jasa/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i> Create
                </a>

            </div>
        </div>
    <div class="box-body table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach($row->result() as $key => $data){ ?>
                <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$data->nama?></td>
                    <td><?=$data->keterangan?></td>
                    <td><?=$data->harga?></td>
                    <td class="text-center" width="160px">
                         <a href="<?=site_url('jasa/edit/'.$data->id_jasa)?>" class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i> Update
                        </a>
                        <a href="<?=site_url('jasa/del/'.$data->id_jasa)?>" onclick="return confirm('Apakah Anda Yakin Hapus Data?')" class="btn btn-danger btn-xs">
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