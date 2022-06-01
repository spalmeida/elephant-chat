<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap');
  .elephant-chat{
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
  }
  body{
    background-color: #fff;
  }
</style>
<?php
    if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ){
      $this->admin_notice();
    } ?>
<div class="wrap elephant-chat">
  <div class="container mt-5">
    <h2 class="row">Elephant Chat</h2>
  </div>
  <div class="container mt-3">
    <div class="row pb-4">
     <span> shortcode: <code>[elephant_chat]</code></span>
    </div>
    <div class="row">
      <ul class="nav nav-pills mb-3 bg-light rounded-3 pt-3 pb-2 px-4" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active shadow" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">Home</button>
        </li>
      </ul>
    </div>
  </div>

  <div class="tab-content" id="pills-tabContent">

    <?php 
    require_once plugin_dir_path( __FILE__ ).'parts/home.php';
    ?>

  </div>
</div> 
<?php 

  require_once plugin_dir_path( __FILE__ ).'parts/chat.php'; 

 ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>