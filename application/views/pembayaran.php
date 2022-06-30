<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $items)
                    {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                    {
                        echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
                    }
                   
                 ?>
            </div><br>
         <h3>Input Alamat Pengiriman Dan Pembayaran</h3>
         <form method="post" action="<?php echo base_url('dashboard/proses_pesanan')  ?> ">
         <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama lengkap Anda" class="form-control">
         </div>
         <div class="form-group">
            <label>Alamat Lengkap</label>
            <input type="text" name="alamat" placeholder="Alamat lengkap Anda" class="form-control">
         </div>
         <div class="form-group">
            <label>No. Telephone</label>
            <input type="text" name="no_telp" placeholder="No. Telp Anda" class="form-control">
         </div>
         <div class="form-group">
            <label>Jasa pengiriman</label>
            <select class="form-control" >
                <option>JNE</option>
                <option>TIKI</option>
                <option>POS Indonesia</option>
                <option>Go Jek</option>
                <option>Grab</option>
            </select>
         </div>
         <div class="form-group">
            <label>Pilih Bank</label>
            <select class="form-control">
                <option>BCA</option>
                <option>BNI</option>
                <option>BRI</option>
                <option>MANDIRI</option>
                <option></option>
            </select>
         </div>
         <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
         </form>

         <?php 
        } else 
        {
            echo "<h5>Keranjang Belanja Anda Masih Kosong";
        }
         ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

   
