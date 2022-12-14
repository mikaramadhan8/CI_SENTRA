<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Laporan</title>
    <style>
        .container{
            width: 50%;
            margin: 0 auto;
            margin-top: 5%;
        }
        i{
            color: white;
        }
        
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

        <div>
            <?= anchor('laporan/add','tambah data')?>
        </div>
        
        <div class="container">
        <h3 class="text-center mb-5">Data Laporan Masyarakat</h3>

        <div class="mb-3" style="width:20% ; ">
            <?= form_open('laporan/search')?>
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <?= form_close()?>
        </div>
        <!-- table start -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIK</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ASPIRASI</th>
                    <th scope="col">LOKASI</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
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
                <td><?php echo anchor('laporan/hapus/'.$lapor->id, '<button class="btn btn-danger btn-sm"><i class="bx bx-trash"></i></button>') ?></td>
                <td><?php echo anchor('laporan/edit/'.$lapor->id, '<button class="btn btn-primary btn-sm"><i class="bx bxs-edit-alt"></i>') ?></td>
                
            </tr>
            <?php endforeach; ?>

            </tbody>
        <!-- end of table -->

    </table>
            </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>