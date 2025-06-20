<?php
require __DIR__ . "/../helper/header.php";
require __DIR__ . "/../models/penerima.php";
?>

<div style="display: flex; align-items: center; justify-content: space-between;">
    <h1>Data Penerima</h1>
    <button id="openModalBtn">Tambah Penerima</button>
</div>

<table>
    <thead>
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Asal Sekolah</td>
            <td>Kelas</td>
            <td>Bukti Persyaratan</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($row = $penerima->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$no}</td>";
            echo "<td>{$row['nama']}</td>";
            echo "<td>{$row['asal_sekolah']}</td>";
            echo "<td>{$row['kelas']}</td>";
            echo "<td><a href={$row['bukti_persyaratan']}>link</a></td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </tbody>
</table>

<div class="modal" id="modal">
    <form class="modal-content" id="form_penerima" action="/penerima" method="post">
        <div style="display: flex; align-items: center; justify-content: space-between;">
            <h1 style="margin-bottom: .5rem;">Tambah Penerima</h1>
            <h1 style="cursor: pointer;" class="close-btn" id="closeModalBtn">&times;</h style="cursor: pointer;" 1>
        </div>
        <label for="nama">Nama
            <input type="text" name="name">
        </label>
    </form>
</div>


<script>
    document.getElementById("closeModalBtn").addEventListener("click", function() {
        document.getElementById("modal").style.display = "none";
    })
    
    document.getElementById("openModalBtn").addEventListener("click", function() {
        document.getElementById("modal").style.display = "flex";
    })

    function tambah_penerima() {
        document.getElementById('form_penerima').classList.remove(['hidden'])
    }
</script>

<?php
require __DIR__ . "/../helper/footer.php";
?>