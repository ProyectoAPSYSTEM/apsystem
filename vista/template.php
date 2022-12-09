<?php 
 $dataCSS =
      array ('cssGbl'=> Libreria::cssGlobales()
    );
    $dataJS = 
      array('jsGbl'=>Libreria::jsGlobales(),
          'msg'=>$datos['msg'],
          'data'=>isset($data)?$data:''
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?></title>
    <?php echo Vista::mostrar('./plantilla/css.php',$dataCSS,true); ?>
</head>
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>
<body  class="hold-transition skin-blue sidebar-mini">
    <?php echo Vista::mostrar('./plantilla/nav.php',$datos,true); ?>
    <?php  echo Vista::mostrar('./plantilla/aside.php',$datos,true); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php echo Vista::mostrar('./plantilla/wrapper.php',$datos,true); ?>
    <?php echo $contenido; ?>
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
    <?php echo Vista::mostrar('./plantilla/footer.php',$datos,true); ?>
    <?php echo Vista::mostrar('./plantilla/js.php',$dataJS,true); ?>
<!-- JavaScript Libraries -->
</body>
</html>