<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-hover table-striped">
    <tr>
        <th>Id Invoice</th>
        <th>Nama Pemesan</th>
        <th>Alamat Pengirim</th>
        <th>Tanggal Pesan</th>
        <th>Batas pembayaran</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($invoice as $inv): ?>
    <tr>
        <td><?php echo $inv->id ?></td>
        <td><?php echo $inv->nama ?></td>
        <td><?php echo $inv->alamat ?></td>
        <td><?php echo $inv->tgl_pesan ?></td>
        <td><?php echo $inv->batas_bayar ?></td>
        <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
        <td><?php echo anchor('admin/invoice/hapus/' .$inv->id, '<div class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></div>') ?></td>
    </tr>

    <?php endforeach; ?>

    </table>
</div>
    </div>