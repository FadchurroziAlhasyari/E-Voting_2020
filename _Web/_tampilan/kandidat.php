<?php
include "koneksi_data_kandidat.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>DAFTAR KANDIDAT!</title>
  </head>
  <body>
     <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">Selamat Datang Admin | <b>E-VOTING</b> </a>
      <form class="form-inline my-2 my-lg-0 ml-auto">
      </form>
      </div>
    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
    <li class="nav-item">
      <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-columns mr-2"></i>Dashboard </a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="kandidat.php"><i class="fas fa-clipboard mr-2"></i>Daftar Kandidat </a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="pemilih.php"><i class="fas fa-user-edit mr-2"></i>Daftar Pemilih </a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="vote.php"><i class="fas fa-vote-yea mr-2"></i>Hasil Vote </a><hr class="bg-secondary">
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt mr-3"></i>Logout </a><hr class="bg-secondary">
    </li>
  </ul>
    </div>
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-clipboard mr-2"> DAFTAR KANDIDAT</i></h3><hr>

      <a href="tambah_data_kandidat.php" class="btn btn-primary mb-3"><i class="fas fa-user-plus mr-2"></i>TAMBAH DATA KANDIDAT</a>
      <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NAMA MAHASISWA</th>
          <th scope="col">NIM</th>
          <th scope="col">VISI</th>
          <th scope="col">MISI</th>
          <th colspan="3" scope="col">OPSI</th>
        </tr>
        <?php
          $no = 1;
          $tampil = mysqli_query($koneksi, "SELECT * FROM tb_kandidat order by no desc");
          while ($data = mysqli_fetch_array($tampil)) :
        ?>
        <tr>
          <td><?=$no++; ?>
            <td><?=$data['nama']; ?>
              <td><?=$data['nim']; ?>
                <td><?=$data['visi']; ?>
                  <td><?=$data['misi']; ?>
                    <td>
                      <a href="#" class="btn btn-warning"> Edit </a>
                      <a href="#" class="btn btn-danger"> Hapus </a>
                    </td>
                  </td>
                </td>
              </td>
            </td>
          </td>
        </tr>
      <?php endwhile;?>
      </thead>
      </tbody>
    </table>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>