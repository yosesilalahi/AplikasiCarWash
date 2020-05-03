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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Admin</li>
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
            <h3 class="box-title"><?=ucfirst($page)?> Kategori Produk</h3>
            <div class="pull-right">
                <a href="<?=site_url('kategori')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('kategori/process')?>" method="post">
                        <div class="form-group">
                        <div class="form-row">
                            <label>Kategori Name *</label>
                            <input type="hidden" name="id" value="<?=$row->id_kategori?>">
                            <input type="text" name="kategori_name" value="<?=$row->nama?>" class="form-control" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="pull-right">
                            <label>Jenis *</label>
                            <input type="text" name="keterangan" value="<?=$row->keterangan?>" class="form-control" required>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="pull-right">
                            <label>Satuan *</label>
                            <textarea name="stn"  class="form-control" required><?=$row->satuan?></textarea>
                        </div>
                        <div>
                        <div class="pull-right">
                            <label>Harga *</label>
                            <textarea name="hrg"  class="form-control" required><?=$row->harga?></textarea>
                        </div>
                        </div>
                        <div class="pull-right">
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>"class="btn btn-success btn-flat">
                                <i class="fa fa=paper-plane"><i> Save
                            </button>
                            <button type="Reset" class="btn btn-flat">Reset</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


