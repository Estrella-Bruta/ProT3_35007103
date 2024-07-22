<!--navegacion-->
<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>
<nav class="navbar navbar-expand-xl bg-body-tertiary bg-opacity-25">
    <!--inicio logo-->
    <div class="container-xl">
        <a class="d-flex navbar-brand" href="<?php echo base_url('principal_ultimo')?>"><img src="<?php echo base_url ('assets/img/logo.png')?>" alt="Monita" width="90 br-50px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class=" container collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">

            <ul class="navbar-nav w-frex">
                <li><a class="nav-link" aria-current="page" href="<?php echo base_url('/quienes_somos') ?>">Quienes somos</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/acerca_de') ?>" > Acerca de </a></li>
                <li><a class="nav-link" href="<?php echo base_url('registro') ?>">Registrarse</a></li>
                <li><a class="nav-link" href="<?php echo base_url('login')?>">Login</a></li>
            </ul>

            <form class=" d-flex" role="Search" action="">
                <input class=" search form-control border-dark justify-content-lg-end me-2" type="search" placeholder="Search" aria-label="Buscar">
                <button class="btn btn-outline-dark" type="submit">Buscar</button>
            </form>
        </div> 
    </div>
</nav>

<?php if(session()->perfil_id == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a href="">ADMIN: <?php echo session('nombre');?></a>
            </div>
<!--navbar para que puedan comprar-->
        <div class=" container collapse navbar-collapse justify-content-end " id="navbarNavAltMarkup">

            <ul class="navbar-nav w-frex">
                <li><a class="nav-link" aria-current="page" href="<?php echo base_url('/quienes_somos') ?>">Quienes somos</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/acerca_de') ?>" > Acerca de </a></li>
                <li><a class="nav-link" href="<?php echo base_url('catalogo') ?>">Catalogo</a></li>
                <li><a class="nav-link" href="<?php echo base_url('/logout')?>" tabindex="-1" aria-disabled="true" >Cerrar Sesion</a></li>
            </ul>
    <?php if(session()->perfil_id == 2): ?>
        <div class="btn btn-info active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre');?></a>
        </div>
            <form class=" d-flex" role="Search" action="">
                <input class=" search form-control border-dark justify-content-lg-end me-2" type="search" placeholder="Search" aria-label="Buscar">
                <button class="btn btn-outline-dark" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
<?php endif; ?>
<?php endif; ?>
<!--fin navegacion-->

