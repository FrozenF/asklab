<!-- Middle Column -->
<div class="w3-col m7">

  <div class="w3-row-padding">

    <div class="w3-col m12">
      <?php if ($this->session->flashdata('pesan')!=NULL): ?>
        <div class="w3-panel w3-green w3-display-container">
          <span onclick="this.parentElement.style.display='none'"
          class="w3-button w3-green w3-large w3-display-topright">&times;</span>
          <h3>Success!</h3>
          <p>Green often indicates something successful or positive.</p>
        </div>
      <?php endif ?>
      
      <div class="w3-card w3-round w3-white">
        <div class="w3-container w3-padding">
          <h6 class="w3-opacity">Social Media template by w3.css</h6>
          <form action="<?=base_url();?>forum/tambah" method="post" accept-charset="utf-8">
            <input type="text" class="w3-input" name="judul" placeholder="Judul">
            <input type="text" class="w3-input" name="isi" placeholder="Isi">
            <button type="submit" class="w3-button w3-blue" name="kirim"><i class="fa fa-send"></i> Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php foreach ($thread as $key): ?>
    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <span class="w3-right w3-opacity">16 min</span>
      <h4><?php echo $key->judul ?></h4><br>
      <hr class="w3-clear">
      <p><?php echo $key->isi ?></p>
      <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
      <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
      <a href="<?php echo base_url(); ?>forum/edit/<?echo $key->id_thread;?>" type="button" class="w3-button  w3-orange w3-margin-bottom"><i class="fa fa-trash"></i>  Edit</a> 
      <a href="<?php echo base_url(); ?>forum/hapus/<?echo $key->id_thread;?>" type="button" class="w3-button  w3-red w3-margin-bottom"><i class="fa fa-trash"></i>  Hapus</a>
    </div>
  <?php endforeach ?>
  <!-- End Middle Column -->
</div>
