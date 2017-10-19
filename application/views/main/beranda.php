<div class="inner-block">
    <!--market updates updates-->

    <!-- <a href="<?php echo base_url().'MyController/readData'?>">
        <span>
            <div class="col-md-6 market-update-gd" >
                <div class="market-update-block clr-block-1">
                    <div class="col-md-5 market-update-left">
                        <h3>
                            <?php $this->db->where('status_order','proses');
       $this->db->from('pesanan');
       echo $this->db->count_all_results();
       ;?>
                        </h3>
                        <h4>Data Mahasiswa</h4>
                    </div>
                    <div class="col-md-5 market-update-right">
                        <i class="fa fa-file-text-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </span></a>

    <a href="<?php echo base_url().'index.php/MyController/pesanMasuk'?>">
        <span>
            <div class="col-md-6 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-5 market-update-left">
                        <h3>
                            <?php $this->db->from('inbox');
       echo $this->db->count_all_results();
       ;?>
                        </h3>
                        <h4>Data Mata Kuliah</h4>						
                    </div>
                    <div class="col-md-5 market-update-right">
                        <i class="fa fa-envelope-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </span></a>

    <div class="clearfix"> </div>

    <a href="<?php echo base_url().'MyController/readData'?>">
        <span>
            <div class="col-md-6 market-update-gd" >
                <div class="market-update-block clr-block-1">
                    <div class="col-md-5 market-update-left">
                        <h3>
                            <?php $this->db->where('status_order','proses');
       $this->db->from('pesanan');
       echo $this->db->count_all_results();
       ;?>
                        </h3>
                        <h4>Data Kelas</h4>
                    </div>
                    <div class="col-md-5 market-update-right">
                        <i class="fa fa-file-text-o"> </i>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </span></a> -->
</div>
