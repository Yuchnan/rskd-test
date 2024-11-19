<?= $this->include('layouts/header') ?>

        <div class="w-2/3 mx-auto p-4">
            <h1 class="text-center font-bold mb-4">Tabel Registrasi Rawat Jalan</h1>
            <table class="table mx-auto">
                <thead class="text-center text-black font-md">
                    <tr>
                        <th>NoCM</th>
                        <th>NamaPasien>
                        <th>TglKunjungan</th>
                        <th>RuanganMasuk</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($rawat_jalan)): ?>
                        <?php foreach ($rawat_jalan as $row): ?>
                            <tr>
                                <td><?= esc($row['nocm']) ?></td>
                                <td><?= esc($row['nama']) ?></td>
                                <td><?= esc($row['tgl_kunjung']) ?></td>
                                <td><?= esc($row['r_masuk']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Tidak ada data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="<?= base_url('/input_rjalan') ?>" class="btn btn-secondary mt-4 w-full">Tambah Data Rawat Jalan</a>
            <h1 class="text-center font-bold my-4">Tabel Registrasi Rawat Inap</h1>
            <table class="table mx-auto">
                <thead class="text-center text-black font-md">
                    <tr>
                        <th>NoCM</th>
                        <th>Nama Pasien</th>
                        <th>TglMasukRuangan</th>
                        <th>RuanganAkhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($rawat_inap)): ?>
                        <?php foreach ($rawat_inap as $row): ?>
                            <tr>
                                <td><?= esc($row['nocm']) ?></td>
                                <td><?= esc($row['nama']) ?></td>
                                <td><?= esc($row['tgl_masuk']) ?></td>
                                <td><?= esc($row['r_akhir']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Tidak ada data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="<?= base_url('/input_rinap') ?>" class="btn btn-secondary mt-4 w-full">Tambah Data Rawat Inap</a>
        </div>
    </body>
</html>