<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Laporan Penduduk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <div class="navbar-right">
        <?= anchor('laporan/add','<button class="btn btn-primary" style="display: flex; justify-content:start;"><i class="nav-icon fas fa-plus"> Tambah Data</i></button>')?>
    </div>
    <!-- search bar -->
        <div class="form-inline" style="display: flex; justify-content:end;">
        <div class="input-group">
        <form action="<?= base_url(). 'index.php/laporan/search' ?>" method="post" class="row g-3">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-success" type="submit">
              <i class="fas fa-search fa-fw"></i>
            </button>
        </form>
          </div>
        </div>
      </div>
    <!-- end of search bar -->
    <table class="table">
                <tr>
                    <th>NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>ASPIRASI</th>
                    <th>LOKASI</th>
                    <th></th>
                    <th>AKSI</th>
                    <th></th>
                    <th></th>
                </tr>
            <tbody>
                <!-- DATA PELAPOR -->
                <?php
            $no = 1;
            foreach($laporan as $lapor):
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $lapor->nik ?></td>
                <td><?php echo $lapor->nama ?></td>
                <td><?php echo $lapor->aspirasi ?></td>
                <td><?php echo $lapor->lokasi ?></td>
                <td><input type="hidden" class="form-control" id="inputNama" name="status" value="Belum Dikerjakan"><button type="submit" class="btn btn-danger btn-sm">Belum Dikerjakan</button></td>
                <td><button class="btn btn-warning btn-sm">Sedang Dalam Pengerjaan</button></td>
                <td><button class="btn btn-primary btn-sm">Sudah Dikerjakan</button></td>
                
            </tr>
            <?php endforeach; ?>

            </tbody>
        <!-- end of table -->

    </table>
    </section>
</div>