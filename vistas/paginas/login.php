<section class="breadcumd_banner">
    <div class="breadcumd_wrapper center">
        <h1 class="left_content">Login</h1>
        <ul class="right_content">
            <li>
                <a href="index.php?pagina=inicio">Home</a>
            </li>
            <li>
                <i class="fa-solid fa chevron-right"></i>
            </li>
            <li>Login</li>
        </ul>
    </div>
</section>

<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light"method="post">
       <div class="form-group">
            <label for="email">Email address:</label>
            <div class="input-group">
                <div clas="input-group-prepend">
                    <span class="input-group-prepend"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" planceholder="Enter email" id="email" name="ingresoEmail">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd"
                    name="ingresoPassword">
            </div>
        </div>
        <?php 
        $ingreso = new ControladorFormularios();
        $ingreso->ctrIngreso();
        ?>
        <button type="submit" class="btn-primary">Ingresar</button>
    </form>

</div>