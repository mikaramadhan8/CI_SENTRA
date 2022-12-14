<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Penduduk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content m-2">
    <form action="<?= base_url(). 'index.php/laporan/tambah_aksi' ?>" class="row g-3" method="post">
        <div class="col-md-6">
            <label for="inputNik" class="form-label">Nik</label>
            <input type="text" class="form-control" id="inputNik" name="nik">
        </div>
        <div class="col-md-6">
            <label for="inputNama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="inputNama" name="nama">
        </div>
        <div class="col-12">
            <label for="inputAspirasi" class="form-label">Aspirasi</label>
            <input type="text" class="form-control" id="inputAspirasi" name="aspirasi">
        </div>
        <div class="col-12">
            <label for="inputLokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="inputLokasi" name="lokasi">

        <div class="mt-2" style="width:100%;">
            <button type="submit" class="col-12 btn btn-primary">Kirim</button>
        </div>
</form>
    </section>
</div>
