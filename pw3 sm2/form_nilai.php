<?php
    include_once 'header.php';
?>

<div class="container my-5">
    <h1 class="text-center mb-4">Form Nilai</h1>
    <form class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm" method="POST" action= "data_nilai.php">
        <div class="container px-3">
            <div class="row mb-3">
                <label for="nama_lengkap" class="col-sm-4 col-form-label">Nama Lengkap</label>
                <div class="col-sm-8">
                    <input name="nama" id="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="matkul" class="col-sm-4 col-form-label">Mata Kuliah</label>
                <div class="col-sm-8">
                    <select name="matkul" id="matkul" required="required" class="form-select">
                        <option value="">----- Pilih Mata Kuliah -----</option>
                        <option>Dasar Dasar Pemrograman</option>
                        <option>Pemrograman Web</option>
                        <option>Statistika dan Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nilai_uts" class="col-sm-4 col-form-label">Nilai UTS</label>
                <div class="col-sm-8">
                    <input name="uts" id="nilai_uts" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nilai_uas" class="col-sm-4 col-form-label">Nilai UAS</label>
                <div class="col-sm-8">
                    <input name="uas" id="nilai_uas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="nilai_tugas" class="col-sm-4 col-form-label">Nilai Praktikum</label>
                <div class="col-sm-8">
                    <input name="tugas" id="nilai_tugas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-4 col-sm-8">
                    <input type="submit" value="submit" name="submit" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>
</div>