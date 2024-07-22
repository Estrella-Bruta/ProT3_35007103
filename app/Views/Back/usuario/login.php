<!--Mensaje de error-->
<?php if (session()->getFlashdata('msg')):?> 
    <?= session()->getFlashdata('msg')?>
<?php endif;?>

<!--inicio del formulario de login-->
<div class="container d-flex justify-content-center">
<form method="post" action="<?php echo base_url('/enviarlogin')?>" class="form-login w-60">

    <h2 class="tex-form">Iniciar Sesion</h2>

    <label for="inputEmail"  class="form-label">Email</label>
    <input class="form-control" type="email" name="email" id="" placeholder="Correo Electronico" requiredaria-label="default input example">
    <!--Error--> 
    <?php if(isset($validation)) { ?>
        <div class="alert" role="alert">
            <?= $validation->listErrors(); ?>
            <?php } ?>

    <label for="inputPassword" class="form-label">Password</label>
    <input  class="form-control" type="password" name="contraseña" id="" placeholder="ingresar contraseña" required minlength="6" aria-label="default input example">
    <!--Error--> 
    <?php if(isset($validation)) { ?>
        <div class="alert" role="alert">
            <?= $validation->listErrors(); ?>
            <?php } ?>

    <div class="buttons">
        <button type="submit" value="ingresar"  class="btn btn-success me-3">Ingresar</button>
        <button type="recet" value="cancelar" href="<?php echo base_url ('/login');?>" class="btn btn-danger">Cancelar</button>
    </div> 

    <div class="dropdown">
        <p class="text-white">¿Aun no te registraste?<a class="dropdown" href="<?php echo base_url ('/registro');?>">Registrate aqui</a></p>
    </div>
</form>
</div>
<!--fin del formulario de login-->
