 <div class="inner-block">

    <div class="chit-chat-heading">
        Pesanan
    </div>


    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID Order</th>
                    <th>Pemesan</th>
                    <th>No Telfon</th>
                    <th>Pesanan</th>                                   
                    <th>Tanggal Pesan</th>                                 
                    <th>Tanggal Kirim</th>
                    <th>Jam Kirim</th>
                    <th>Jumlah Order</th>
                    <th>Total Biaya</th>
                    <th>Alamat Kirim</th>
                    <th>Edit Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($data as $x) { ?>
                <tr>
                    <td><?= $x['orderid'] ?></td>
                    <td><?= $x['emailuser'] ?></td>
                    <td><?= $x['telepon'] ?></td>
                    <td><?= $x['jenis_menu'] ?></td>
                    <td><?= $x['tanggal_pesan'] ?></td>
                    <td><?= $x['tanggal_kirim'] ?></td>
                    <td><?= $x['jam_kirim'] ?></td>
                    <td><?= $x['jumlah'] ?></td>
                    <td>Rp <?= $x['jumlah'] * 10000 ?></td>
                    <td><?= $x['alamat_kirim'] ?></td>
                    <td>
                        <button title="Ganti Status" onClick="return  doconfirm();"><a href="<?php echo base_url().'MyController/gantiStatus/'.$x['id'];?>"> <img  src="<?php echo base_url();?>/assets/images/tick.png" /> Kirim Pesanan
                        </a></button> 
                    </td>
                </tr>
                <?php } ?>                              
            </tbody>
        </table>

    </div>
    
    <script>
        function doconfirm()
        {
            job=confirm("Apakah benar anda telah menyelesaikan pesanan tersebut?");
            if(job!=true)
            {
                return false;
            }
        }
    </script>
</div>


