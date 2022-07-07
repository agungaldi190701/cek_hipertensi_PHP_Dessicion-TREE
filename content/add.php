<?php
extract($_REQUEST);
include('../koneksi/koneksi.php');




?>

<form id="simpan" method="POST" action="">
    <div class="modal-body">
        <label class="col-form-label">Masukan nama anda :</label>
        <input type="text" name="nama" placeholder="Nama anda" class="form-control" required>

        <label class="col-form-label">Pilih Berat Badan :</label>
        <select class="form-select" name="berat">

            <option value="">
                Pilih Berat Badan
            </option>

            <?php
            foreach ($berat as $key) :


            ?>
                <option value="<?= $key["id_berat"] ?>">
                    <?= $key["berat"]; ?>
                </option>

            <?php endforeach; ?>
        </select>

        <label class="col-form-label">Pilih Jenis Kelamin :</label>
        <select class="form-select" name="kelamin">

            <option value="">
                Pilih Jenis Kelamin
            </option>

            <?php
            foreach ($kelamin as $key) :


            ?>
                <option value="<?= $key["id_jk"] ?>">
                    <?= $key["jenis_kelamin"]; ?>
                </option>

            <?php endforeach; ?>
        </select>

        <label class="col-form-label">Pilih usia :</label>
        <select class="form-select" name="usia">

            <option value="">
                Pilih usia anda
            </option>

            <?php
            foreach ($usia as $key) :


            ?>
                <option value="<?= $key["id_usia"] ?>">
                    <?= $key["usia"]; ?>
                </option>

            <?php endforeach; ?>
        </select>




        <br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="btn-simpan" class="btn btn-success">Submit</button>
        </div>

    </div>
</form>