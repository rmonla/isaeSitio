<?php 
    include_once '_rmApp.php';
    include_once 'bdAulas.php';

?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!-- <link rel="shortcut icon" href="assets/images/dticAulaVirtual.png" type="image/x-icon"> -->
  <meta name="description" content="">
  <meta http-equiv="Refresh" content="150"/>
  
  <title>Aulas Virtuales - ISAE</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
</head>
<body>
  <section class="accordion1 cid-rKzC2nyguD" id="accordion1-0">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2"
                    >Aulas Virtuales - <a href='http://www.isae.edu.ar'>ISAE</a></h2>
                     <div class="align-right">
                      <?php echo "<a href='".APPPUB."'>".APPVER."</a>"; ?></div>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    
                    <?php echo getAulas(); ?> 

                </div>
            </div>
          </div>
    </div>
              </div>
          </div>
      </div>
    </section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
</body>
</html>