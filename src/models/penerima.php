<?php

$db->exec("CREATE TABLE IF NOT EXISTS penerima (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT,
    asal_sekolah TEXT,
    kelas INTEGER,
    bukti_persyaratan TEXT
)");

$penerima = $db->query("SELECT * FROM penerima");