<?php
$db = new mysqli('localhost', 'root', '', 'db-decision');


$hasil = mysqli_query($db, "SELECT * FROM hasil ");
$view = mysqli_query($db, "SELECT * FROM view_hasil");


$usia = mysqli_query($db, "SELECT * FROM usia_ref");
$kelamin = mysqli_query($db, "SELECT * FROM jk_ref");
$berat = mysqli_query($db, "SELECT * FROM berat_ref");
