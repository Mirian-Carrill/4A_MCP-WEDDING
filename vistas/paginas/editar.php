<!--===============Breadcumd Section Here===============-->

<?php 
     if (!isset($_SESSION["validarIngreso"])){
        echo '<script>windows.location="index.php?paginas=ingreso";>/script>';
        return;
   }else{
       if ($_SESSION["validarIngreso"] !="ok"){
          echo '<script>windos.location="index.php?paginas=ingreso";</script>';
          return;
       }
   }

?>
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
            blog single
         </h1>
         <ul class="right__content">
            <li>
               <a href="index.html">
                  Home
               </a>
            </li>
            <li>
               <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
               blog
            </li>
         </ul>
      </div>
   </div>
</section>
<!--=========== Breadcumd Section Here ========= -->
<?php 

if (isset($_GET["id"])){
    $item ="id";
    $valor =$_GET["id"];

    $usuario =ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}



?>