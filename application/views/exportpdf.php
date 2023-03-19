<title><?= $title ?></title>
<link rel="shortcut icon" href="<?= base_url() ?>assets/backend/img/Logo-Laporin.png" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/backend-plugin.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/backend.css?v=1.0.0">
<style type="text/css">
    body {
        font-family: 'Times New Roman', Times, serif;
        color: black;
    }

    table {
        margin: 20px auto;
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
    <img src="<?= base_url('assets/backend/img/Logo-Laporin1.png') ?>" width="200" height="70" alt="logo">
    <h4>Data Laporan<br>
        Tanggal<?php echo "\n" .  $start . "\nsd\n" . $end ?></h4>


</center>

<table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jenis Laporan</th>
            <th>Judul Laporan</th>
            <th>Isi Laporan</th>
            <th>Tanggal Pengaduan</th>
            <th>Status</th>
            <th>Tanggal Tanggapan</th>
            <th>Tanggapan</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($pengaduan as $row) : ?>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['nik'] ?></td>
                <td><?= $row['jenis_laporan'] ?></td>
                <td><?= $row['judul_laporan'] ?></td>
                <td><?= $row['isi_laporan'] ?></td>
                <td><?= $row['tgl_pengaduan'] ?></td>
                <td>
                    <?php
                    if ($row['status'] == '0') :
                        echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
                    elseif ($row['status'] == 'proses') :
                        echo '<span class="badge badge-primary">Sedang di proses</span>';
                    elseif ($row['status'] == 'selesai') :
                        echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                    elseif ($row['status'] == 'tolak') :
                        echo '<span class="badge badge-danger">Laporan di tolak</span>';
                    else :
                        echo '-';
                    endif;
                    ?>
                </td>
                <td><?= $row['tgl_tanggapan'] ?></td>
                <td><?= $row['tanggapan'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
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
    