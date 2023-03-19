<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Rekap Tagihan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="Welcome">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Rekapan Pembayaran</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- /.row -->
    <!-- list data -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- card-body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <form action="<?= base_url('DataLaporanRekapan') ?>" method="GET">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Tahun Ajaran</label>
                                                <select class="form-control" name="ta">
                                                    <option value="lihat_semua">Pilih tahun</option>
                                                    <?php
                                                    foreach ($tahunajaran as $row) {
                                                        $selected = '';
                                                        if ($this->input->get('ta') == $row->kode_ta) {
                                                            $selected = 'selected';
                                                        }
                                                    ?>
                                                        <option value="<?= $row->kode_ta ?>" <?= $selected ?>><?= $row->tahun_ajaran ?></option>
                                                    <?php } ?>
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Kelas</label>
                                                <select class="form-control" name="kelas">
                                                    <option value="lihat_semua">Pilih kelas</option>
                                                    <?php
                                                    foreach ($kelas as $row) {
                                                        $selected = '';
                                                        if ($this->input->get('kelas') == $row->kode_kelas) {
                                                            $selected = 'selected';
                                                        } ?>
                                                        <option value="<?= $row->kode_kelas ?>" <?= $selected ?>><?= $row->kelas . ' ' . $row->nama_jurusan . ' ' . $row->nama_kelas ?></option>
                                                    <?php } ?>
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div><button type="submit" class="btn btn-warning">Lihat</button></div> -->
                                    <input type="submit" value="Cari Data" class="btn btn-default">
                                </form>
                            </div>
                            <a href="<?= base_url('DataLaporanRekapan/export/') . $this->input->get('ta') . '/' . $this->input->get('kelas')  ?>" class="btn btn-success">Export Excel</a>
                            <!-- <a href="<?= base_url('DataLaporanRekapan/exportAllExcel/') . $this->input->get('ta') . '/' . $this->input->get('kelas')  ?>" class="btn btn-warning">Export Semua Siswa</a> -->
                            <a href="<?= base_url('DataLaporanRekapan/pdf/') . $this->input->get('ta') . '/' . $this->input->get('kelas') ?>" class="btn btn-danger">Export PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- card-body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped responsive">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">NISN</th>
                                    <th rowspan="2">Nama Siswa</th>
                                    <th colspan="2">Kelas X</th>
                                    <th colspan="2">Kelas XI</th>
                                    <th colspan="2">Kelas XII</th>
                                    <th rowspan="2">Total Kekurangan</th>
                                    <th rowspan="2">Action</th>
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
                                <?php
                                $no = 1;
                                $totalKeseluruhan = 0;
                                $dpp = 0;
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
                                            <?php } ?>
                                        <?php } ?>
                                        <td>
                                            <?= $total ?>
                                        </td>
                                        <div>
                                        <td>
                                            <a href="<?= base_url() ?>DataLaporanRekapan/detail/<?= $row->nisn ?>" class="btn btn-warning">Detail</a>
                                            <a href="<?= base_url('DataLaporanRekapan/pdf/') . $this->input->get('ta') . '/' . $this->input->get('kelas') ?>" class="btn btn-primary">Export</a>
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
                                    <td><?= $dpp ?></td>
                                    <?php for ($i = 1; $i <= 3; $i++) { ?>
                                        <td>Total</td>
                                        <td><?= $spp[$i] ?></td>
                                    <?php } ?>
                                    <td colspan="2"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper