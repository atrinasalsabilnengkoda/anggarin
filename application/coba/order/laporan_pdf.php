<html><body><style>
table, th {
  border: 1px solid black;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
        <h1>Laporan Data Bank</h1>

        <table>
            <tr>
                <th>Nama Akun</th>
                <th>Nomor Rekening</th>
                <th>Nama Bank</th>
                <th>Alamat Bank</th>
                <th>Telp Bank</th>
                <th>Saldo Awal</th>
                <th>Status Akun</th>
                <th>Akun Utama</th>
            </tr>
            <?php
            $no=1;
            foreach($bank_print as $bank) : ?>
            <tr>
                <th><?php echo $bank->nama_akun ?></th>
                <th><?php echo $bank->no_rek ?></th>
                <th><?php echo $bank->nama_bank ?></th>
                <th><?php echo $bank->alamat_bank ?></th>
                <th><?php echo $bank->telp_bank ?></th>
                <th><?php echo $bank->saldo_awal ?></th>
                <th><?php echo $bank->status_akun ?></th>
                <th><?php echo $bank->akun_utama ?></th>
            </tr>
            <?php endforeach; ?>
        </table>
    </body></html>