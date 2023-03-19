<link rel="shortcut icon" href="<?= base_url() ?>assets/dist/img/Logo_SPP.png" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/backend-plugin.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/backend.css?v=1.0.0">
<style type="text/css">
    body {
        font-family: 'Times New Roman', Times, serif;
        color: black;
    }

    table {
        margin: 15px auto;
        border-collapse: collapse;
        color: black;
    }

    table th,
    table td {
        border: 3px solid #3c3c3c;
        padding: 3px 8px;
    }

    a {
        background: white;
        color: #ffff;
        padding: 8px 10px;
        text-decoration: none;
        border-radius: 2px;
    }
</style>
<center>
    <img src="<?= base_url('assets/dist/img/Logo_SMKIP.png') ?>" width="100" height="100" alt="logo">
    <h3>REKAP TAGIHAN SISWA
        <br>Tahun Ajaran<?php echo "\n" .  $ta ?>
        <br>Kelas<?php echo "\n" . $kelass ?>
        </h5>
</center>
<table border="1">
    <thead>
        <tr>
        <th rowspan="2">No</th>
        <th rowspan="2">NISN</th>
        <th rowspan="2">Nama Siswa</th>
        <th colspan="2">Kelas X</th>
        <th colspan="2">Kelas XI</th>
        <th colspan="2">Kelas XII</th>
        <th rowspan="2">Total Kekurangan</th>
        </tr>
        <tr>
            <!-- X -->
            <th>Kelas</th>
            <th>SPP</th>
            <!-- XI -->
            <th>Kelas</th>
            <th>SPP</th>
            <!-- XII -->
            <th>Kelas</th>
            <th>SPP</th>
        </tr>
    </thead>
    <tbody>
    <tbody>
        <?php
        $no = 1;
        $totalKeseluruhan = 0;
        for ($i = 1; $i <= 3; $i++) {
            $spp[$i] = 0;
        }
        $unbk = 0;
        foreach ($dataSiswa as $row) {
            $total = 0;
        ?>

            <tr>
                <td><?= $no ?></td>
                <td><?= $row->nisn ?></td>
                <td><?= $row->nama_siswa ?></td>
                <?php for ($i = 1; $i <= 3; $i++) {
                    $kelas = 'kelas_' . $i ?>
                    <?php if (!empty($row->$kelas['kode_kelas'])) { ?>
                        <td><?= $row->$kelas['kode_kelas'] ?></td>
                        <td><?php echo $row->$kelas['spp'];
                            $total += $row->$kelas['spp'];
                            $spp[$i] += $row->$kelas['spp'];
                            ?></td>

                    <?php } else { ?>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    <?php } ?>
                <?php } ?>
                
                <td>
                    <?= $total ?>
                </td>

            </tr>
        <?php
            $no++;
            $totalKeseluruhan += $total;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Total</td>
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <td>Total</td>
                <td><?= $spp[$i] ?></td>
            <?php } ?>

            <td><?= $totalKeseluruhan ?></td>
        </tr>
    </tfoot>
</table>

<style>
	@media print {
		.print {
			display: none;
		}
		a.scroll-to-top {
			display: none!important;
		}
	}
</style>
<script>
	window.print();
</script>
    