<div class="inner-block">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="chit-chat-heading">
        <h2>UPDATE PRODUK PEMADAM KELAPARAN</h2>
    </div>
    <div class="chit-chat-layer1">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID Menu</th>
                        <th>Nama Menu</th>                               
                        <th>Harga</th> 
                        <th>Gambar</th>                                 
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data as $x) { ?>
                    <tr>
                        <td><?= $x['id_nasi'] ?></td>
                        <td><?= $x['jenis_menu'] ?></td>
                        <td><?= $x['harga'] ?></td>
                        <td> <img src=" <?php echo base_url()."/assets/images/".$x['image']; ?>" style="width: 120px;" ></td>
                        <td>                           
                            <a href="<?php echo base_url().'MyController/editProduk/'.$x["id_nasi"];?>">
                                <img src="<?php echo base_url();?>/assets/images/edit.png" /> </a>
                        </td>                    
                        <td>
                            <a href="<?php echo base_url().'MyController/deleteProduk/'.$x['id_nasi'];?>" onClick="return  doconfirm();" >  <img  src="<?php echo base_url();?>/assets/images/delete.png" title="Delete" />
                            </a>                                   
                        </td>                  

                    </tr>
                    <?php } ?>                              
                </tbody>
            </table>
            <div>
                <br>
                <a href="#" data-toggle="modal" data-target="#myModal"><p class="active" style="text-align: center";><img src="<?php echo base_url();?>/assets/images/edit.png" /> Tambah Data</p></a>
            </div>
        </div>
    </div>

    <script>
        function doconfirm()
        {
            job=confirm("Apakah benar anda ingin menghapus data pesanan tersebut?");
            if(job!=true)
            {
                return false;
            }
        }
    </script>

    <div class="clearfix"> </div>

</div>


<!-- modal form -->
<div id="myModal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <?php $attributes = array("name" => "contact_form", "id" => "contact_form");
            echo form_open_multipart("MyController/valid", $attributes);?>

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Tambahkan Menu</h4>
            </div>
            <div class="modal-body" id="myModalBody">
                <div class="form-group">
                    <label for="id_nasi">ID Menu</label>
                    <input class="form-control" id="id_nasi" name="id_nasi" placeholder="ID Menu" required="" type="text" value="<?php echo set_value('id_nasi'); ?>" />
                </div>

                <div class="form-group">
                    <label for="jenis_menu">Nama Menu</label>
                    <input class="form-control" id="jenis_menu" name="jenis_menu" placeholder="Nama Menu" required="" type="text" value="<?php echo set_value('jenis_menu'); ?>" />
                </div>

                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" required="" type="text" value="<?php echo set_value('harga'); ?>" />
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input class="form-control" id="image" name="image" required="" type="file" value="<?php echo set_value('image'); ?>" />
                </div>


                <div id="alert-msg"></div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-default" id="submit" name="submit" type="submit" value="Tambahkan" />                 
                <input class="btn btn-default" type="button" data-dismiss="modal" value="Close" />
            </div>
            <?php echo form_close(); ?>  
        </div>
    </div>
</div>

<!--load jquery & bootstrap js files-->
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript">

    $('#submit').click(function() 
                       {

        var form_data = 
            {
                id_nasi: $('#id_nasi').val(),
                jenis_menu: $('#jenis_menu').val(),
                harga: $('#harga').val(),
                image: $('#image').val()
            };

        $.ajax({
            url: "<?php echo site_url('My_Controller/valid'); ?>",type: 'POST',data: form_data,success: function(msg) 
            {
                if (msg == 'YES')
                    $('#alert-msg').html('<div class="alert alert-success text-center">Produk sudah berhasil di tambahkan!</div>');
                $('#contact_form')[0].reset();
                $('#myModal').modal('hide');
                else if (msg == 'NO')
                    $('#alert-msg').html('<div class="alert alert-danger text-center">Error !</div>');
                    else
                        $('#alert-msg').html('<div class="alert alert-danger">' + msg + '</div>');
            }
        });
        return false;
    });
</script>



