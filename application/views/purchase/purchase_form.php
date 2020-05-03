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
              <li class="breadcrumb-item active">Data Purchase/li>
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
            <h3 class="box-title"><?=ucfirst($page)?> Purchase</h3>
            <div class="pull-right">
                <a href="<?=site_url('purchase')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Back
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="<?=site_url('purchase/process')?>" method="post">
                        <div class="form-group">
                        <div class="pull-right">
                            <label>Supplier *</label>   
                            <select name="supplier" class="form-control">
                                <option value="">- Pilih -<option>
                                <?php foreach($supplier->result() as $key => $data){ ?>
                                    <option value="<?=$data->supplier_id?>"><?=$data->nama?></option>
                               <?php } ?>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="pull-right">
                            <label>Jumlah *</label>
                            <textarea name="jumlah"  class="form-control" required><?=$row->jumlah?></textarea>
                        </div>
                        <div class="form-group">
                        <div class="pull-right">
                            <label>Harga *</label>
                            <textarea name="harga"  class="form-control" required><?=$row->harga?></textarea>
                        </div>
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


