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
    <h3>LAPORAN KEUANGAN SPP
        <br>Tahun Ajaran<?php echo "\n" .  $ta ?>
        <br>Kelas<?php echo "\n" . $kelass ?>
    </h3>
</center>
<br>
<table border="1">
    <thead>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">NISN</th>
            <th rowspan="2">Nama Siswa</th>
            <th rowspan="2">Nominal Bayar</th>
            <th colspan="12">Bulan</th>
            <th rowspan="2">Kekurangan Pembayaran</th>
        </tr>
        <tr>
            <?php foreach ($bulan as $bln) : ?>
                <td>
                    <label><?= $bln ?></label>
                </td>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
    <?php
        $no = 1;
        function dataBayar($dataBayar, $nisn)
        {
            $jumlahTotalTerbayar = 0;
            foreach ($dataBayar as $valueBayar) {
                if ($valueBayar->nisn == $nisn) {
                    $jumlahTotalTerbayar += $valueBayar->nominal_bayar;
                }
            }
            return $jumlahTotalTerbayar;
        }

        function dataBayarPerBulan($dataPembayaran, $nisn, $bulan, $ta)
        {
            foreach ($dataPembayaran as $valueBayar) {
                if ($valueBayar->nisn == $nisn && $bulan == $valueBayar->bulan && $ta == $valueBayar->ta_bayar) {
                    return 'lunas';
                }
            }
            return '-';
        }

        $nisn = '';
        $totalKeseluruhan = 0;
        foreach ($dataSiswa as $row) {
            $total = 0;
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->nisn ?></td>
                <td><?= $row->nama_siswa ?></td>
                <td><?= $row->nominal_jenis  ?></td>
                <?php foreach ($bulan as $keyBulan => $bln) : ?>
                    <td>
                        <label>
                            <?php
                            $dataBayar = dataBayarPerBulan($dataPembayaran, $row->nisn, $keyBulan, $this->uri->segment(3));
                            if ($dataBayar == '-') {
                                echo $row->nominal_jenis;
                                $total += $row->nominal_jenis;
                            } else {
                                echo $dataBayar;
                            }

                            ?>
                        </label>
                    </td>
                <?php endforeach; ?>
                <td><?= $total ?></td>
            </tr>
        <?php
            $no++;
            $totalKeseluruhan += $total;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="16">Total</td>
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
    