<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <div class="card-body">
               <form class="form-horizontal" method="post" action="<?php echo base_url('kamar/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NO_kamar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_kamar" placeholder="id_kamar" required>
                            </div>
                            </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Letak_kamar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama_kamar" placeholder="nama_kamar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">fasilitas_kamar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="fasilitas_kamar" placeholder="Fasilitas_Kamar" required>
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">status_kamar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="status_kamar" placeholder="status_Kamar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Harga_kamar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="tarif_kamar" placeholder="Tarif_Kamar" required>
                            </div>
                          </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>

   