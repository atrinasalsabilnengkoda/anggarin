<html><body><style>
table, th {
  border: 1px solid black;
}
table.center {
  margin-left: auto;
  margin-right: auto;
}
</style>
        <h1>Laporan Data Customer</h1>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Customer</th>
                <th>Email Customer/th>
                <th>Telp Customer</th>
                <th>Keterangan Order</th>
                <th>Tanggal Bergabung</th>
               
            </tr>
            <?php
            $no=1;
            foreach($customer_print as $customer) : ?>
            <tr>
                <th><?php echo $no++?></th>
                <th><?php echo $customer->nama_customer ?></th>
                <th><?php echo $customer->email_customer ?></th>
                <th><?php echo $customer->telp_customer ?></th>
                <th><?php echo $customer->keterangan_order ?></th>
                <th><?php echo $customer->tanggal_bergabung ?></th>
                
            </tr>
            <?php endforeach; ?>
        </table>
    </body></html>