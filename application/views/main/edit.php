<div class="inner-block">

    <div class="chit-chat-heading">
        Edit Pesanan
    </div>


    <div class="table-responsive">
        <form method="POST" action="<?php echo base_url().'MyController/doUpdate/'.$id_nasi;?>" enctype="multipart/form-data">
        <table class="table table-hover">

            <tr>
                <td>ID Menu</td>
                <td><input type="text" name="id_nasi" value="<?php echo $id_nasi;?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Menu</td>
                <td><input type="text" name="jenis_menu" value="<?php echo $jenis_menu;?>" ></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga;?>" ></td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <img src=" <?php echo base_url()."/assets/images/".$image; ?>" style="width: 120px;" >
                    <input class="form-control" id="image" name="image" required="" type="file" value="<?php echo $image; ?>" />
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
        </form>

    </div>
    
</div>


