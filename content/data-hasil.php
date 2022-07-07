<?php
include('koneksi/koneksi.php');



?>

<style>
    .table>tbody>tr>* {
        vertical-align: middle;
    }
</style>
<button class="btn btn-outline-success btn-sm  mt-4 mx-sm-2  " id="test">Coba Test <i class="fas fa-plus"></i></button>
<br>
<h3 class="text-center text-dark">Data Hasil Test</h3>
<div class=" table-responsive  ">

    <br>
    <table class="table table-hover text-dark " id="example">
        <thead>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Usia</th>
                <th>Kelamin</th>
                <th>Berat</th>
                <th class="bg-primary text-white">Hipertensi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($view as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['usia'] ?></td>
                    <td><?= $row['jenis_kelamin'] ?></td>
                    <td><?= $row['berat'] ?></td>
                    <td><?= $row['hipertensi'] ?></td>


                    </td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>


        </tbody>

    </table>

</div>
<br><br>
<br><br>