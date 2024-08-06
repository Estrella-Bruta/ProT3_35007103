<!--inicio del formulario de Registro-->
<div class="container d-flex justify-content-center">
    <div class="form-registro w-60">

        <h2 class="Tex-form">Registrar Usuario</h2>

        <?php $validation = \Config\Services
            ::validation(); ?>
        <form method="post" action="<?php echo base_url('/enviar-form') ?>">
            <?= csrf_field(); ?>
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div><?= session()->getFlashdata('fail'); ?></div>
            <?php endif; ?>
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <p class="success-message"><?= session()->getFlashdata('success') ?></p>
            <?php endif; ?>

            <div><?= session()->getFlashdata('seccess'); ?></div>

            <label for="inputNombre" class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre" placeholder="Nombre" required minlength="3" aria-label="default input example">

            <!--Error-->
            <?php if ($validation->getError('nombre')) ?>
            <div class="alert alert-dismissible"> <?= $error = $validation->getError('nombre'); ?></div>

            <label for="inputApellido" class="form-label">Apellido</label>
            <input class="form-control" type="text" name="apellido" placeholder="Apellido" required minlength="3" aria-label="default input example">

            <!--Error-->
            <?php if ($validation->getError('apellido')) ?>
            <div class="alert alert-dismissible"> <?= $error = $validation->getError('apellido'); ?></div>

            <label for="inputEmail" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" id="" placeholder="Correo Electronico" requiredaria-label="default input example">
            <!--Error-->
            <?php if ($validation->getError('email')) ?>
            <div class="alert alert-dismissible"> <?= $error = $validation->getError('email'); ?> </div>

            <label for="inputUsuario" class="form-label">Usuario</label>
            <input class="form-control" type="text" name="usuario" placeholder="Introdusca Usuario" required aria-label="default input example">
            <!--Error-->
            <?php if ($validation->getError('usuario')) ?>
            <div class="alert alert-dismissible"><?= $error = $validation->getError('usuario'); ?></div>

            <label for="inputPassword" class="form-label">Password</label>
            <input class="form-control" type="password" name="password" id="" placeholder="ingresar contraseña" required minlength="6" aria-label="default input example">
            <!--Error-->
            <?php if ($validation->getError('password')) ?>
            <div class="alert alert-dismissible"><?= $error = $validation->getError('password'); ?></div>

            <label for="inputPassword" class="form-label">Confirmar password</label>
            <input class="form-control" type="password" name="confirmar" id="" placeholder="ingresar contraseña" required minlength="6" aria-label="default input example">
            <!--Error-->
            <?php if ($validation->getError('confirmar')) ?>
            <div class="alert alert-dismissible"><?= $error = $validation->getError('confirmar'); ?></div>

            <div class="buttons">
                <button type="submith" value="enviar" class="btn btn-success me-4">Enviar</button>
                <button type="reset" value="" class="btn btn-danger me-4">Cancelar</button>
            </div>

        </form>
    </div>

</div>
<!--fin del formulario de Registro-->