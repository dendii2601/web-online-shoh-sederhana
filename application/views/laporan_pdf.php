<!DOCTYPE html>
<html><head>

    <title></title>
</head><body>
    <h3 style="text-align: center"> Data Barang</h3>
    <table>
            <tr>
                <th>NO</th>
                <th>NAMA BARANG</th>
                <th>KETERANGAN</th>
                <th>KATEGORI</th>
                <th>HARGA</th>
                <th>STOCK</th>
                
            </tr>
            <?php
            $no=1;
            foreach($barang as $brg) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stock ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
    
</body></html>