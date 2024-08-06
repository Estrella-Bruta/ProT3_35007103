<!--inicio del formulario de login-->
<form class="container d-flex justify-content-center">
    <div class="form-login w-60">
        <form method="post" action="<?=base_url('/enviarlogin'); ?>"> 
        <?= csrf_field();?>    
        <!--Mensaje de error-->
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <h2 class="tex-form">Iniciar Sesion</h2>
            <label for="inputEmail" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="correo electronico" placeholder="Correo Electronico" requiredaria-label="default input example">
            <!--Error-->
            <?php if (isset($validation) && $validation->getError ('correo electronico')):?>
                <div class="alert alert-dark" role="alert"><?= $validation->getErrorErrors('correo electronico'); ?>
                </div>
                <?php endif; ?>

                <label for="inputPassword" class="form-label">Password</label>
                <input class="form-control" type="password" name="contraseña" id="" placeholder="ingresar contraseña" required minlength="6" aria-label="default input example">
                <!--Error-->
                <?php if (isset($validation) && $validation->getError('password')): ?>
                    <div class="alert alert-dark" role="alert"><?= $validation->getErrorErrors('password'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="buttons">
                        <button type="submit" value="ingresar" class="btn btn-success me-3">Ingresar</button>
                        <button type="recet" value="cancelar" href="<?php echo base_url('/login'); ?>" class="btn btn-danger">Cancelar</button>
                    </div>

                    <div class="dropdown">
                        <p class="text-white">¿Aun no te registraste?<a class="dropdown" href="<?php echo base_url('/registro'); ?>">Registrate aqui</a></p>
                    </div>
        </form>
    </div>
</form>
    <!--fin del formulario de login-->