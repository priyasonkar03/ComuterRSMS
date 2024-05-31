<style>
  .user-img {
    position: absolute;
    height: 27px;
    width: 27px;
    object-fit: cover;
    left: -7%;
    top: -12%;
    border-radius: 50%;
  }

  .btn-rounded {
    border-radius: 50px;
  }

  #login-nav {
    position: fixed !important;
    top: 0 !important;
    z-index: 1037;
    padding: 0.3em 2.5em !important;
    width: 100%;
    background-color: #f8f9fa;
  }

  #top-Nav {
    top: 3.5em;
    width: 100%;
  }

  .main-header .navbar-brand img {
    width: 80px;
    height: 80px;
  }

  .main-header .navbar-brand span {
    font-size: 1.5em;
  }

  @media (max-width: 768px) {
    #login-nav {
      padding: 0.3em 1.5em !important;
    }

    .main-header .navbar-brand img {
      width: 60px;
      height: 60px;
    }

    .main-header .navbar-brand span {
      font-size: 1.2em;
    }
  }

  @media (max-width: 576px) {
    #login-nav {
      padding: 0.3em 1em !important;
    }

    .main-header .navbar-brand img {
      width: 50px;
      height: 50px;
    }

    .main-header .navbar-brand span {
      font-size: 1em;
    }
  }
</style>
<!-- Navbar -->
<nav class="w-100 px-2 py-1 position-fixed top-0 bg-light text-dark" id="login-nav">
  <div class="d-flex justify-content-between w-100">
    <div>
      <span class="mr-2"><i class="fa fa-phone mr-1"></i> <?= $_settings->info('contact') ?></span>
    </div>
    <div>
      <?php if($_settings->userdata('id') > 0): ?>
        <span class="mx-2"><img src="<?= validate_image($_settings->userdata('avatar')) ?>" alt="User Avatar" class="user-img"></span>
        <span class="mx-2">Howdy, <?= !empty($_settings->userdata('username')) ? $_settings->userdata('username') : $_settings->userdata('email') ?></span>
        <?php if($_settings->userdata('login_type') == 1): ?>
          <span class="mx-1"><a href="<?= base_url.'classes/Login.php?f=logout' ?>"><i class="fa fa-power-off"></i></a></span>
        <?php else: ?>
          <span class="mx-1"><a href="<?= base_url.'classes/Login.php?f=client_logout' ?>"><i class="fa fa-power-off"></i></a></span>
        <?php endif; ?>
      <?php else: ?>
        <a href="./admin" class="mx-2 text-dark">Login</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
<nav class="main-header navbar navbar-expand-lg navbar-dark border-0 bg-gradient-dark " style="height: 100px;" id="top-Nav">
  <div class="container">
    <!-- Dynamic logo code -->
    <a href="./" class="navbar-brand d-flex align-items-center">
      <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Site Logo" class="brand-image img-circle elevation-3" style="width: 80px; height: 80px;">
      <span class="ml-2"><?= $_settings->info('short_name') ?></span>
    </a>
    <!-- Static logo code -->
    <!-- <a href="./" class="navbar-brand d-flex align-items-center">
      <img src="../uploads/client-4.png" alt="Site Logo" class="brand-image img-circle elevation-3">
      <span class="ml-2"><?= $_settings->info('short_name') ?></span>
    </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- Left navbar links -->
      <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a href="./" class="nav-link <?= isset($page) && $page =='home' ? 'active' : '' ?>">Home</a>
        </li>
        <li class="nav-item">
          <a href="./?page=check_status" class="nav-link <?= isset($page) && $page =='check_status' ? 'active' : '' ?>">Check Status</a>
        </li>
        <li class="nav-item">
          <a href="./?page=services" class="nav-link <?= isset($page) && $page =='services' ? 'active' : '' ?>">Our Services</a>
        </li>
        <li class="nav-item">
          <a href="./?page=about" class="nav-link <?= isset($page) && $page =='about' ? 'active' : '' ?>">About Us</a>
        </li>
        <li class="nav-item">
          <a href="./?page=contact_us" class="nav-link <?= isset($page) && $page =='contact_us' ? 'active' : '' ?>">Contact Us</a>
        </li>
        <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') != 1): ?>
          <li class="nav-item">
            <a href="./?page=profile" class="nav-link <?= isset($page) && $page =='profile' ? 'active' : '' ?>">Profile</a>
          </li>
        <?php endif; ?>
      </ul> -->
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="./" class="nav-link <?= isset($page) && $page =='home' ? 'active' : '' ?>">Home</a>
        </li>
        <li class="nav-item">
          <a href="./?page=check_status" class="nav-link <?= isset($page) && $page =='check_status' ? 'active' : '' ?>">Check Status</a>
        </li>
        <li class="nav-item">
          <a href="./?page=services" class="nav-link <?= isset($page) && $page =='services' ? 'active' : '' ?>">Our Services</a>
        </li>
        <li class="nav-item">
          <a href="./?page=about" class="nav-link <?= isset($page) && $page =='about' ? 'active' : '' ?>">About Us</a>
        </li>
        <li class="nav-item">
          <a href="./?page=contact_us" class="nav-link <?= isset($page) && $page =='contact_us' ? 'active' : '' ?>">Contact Us</a>
        </li>
        <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') != 1): ?>
          <li class="nav-item">
            <a href="./?page=profile" class="nav-link <?= isset($page) && $page =='profile' ? 'active' : '' ?>">Profile</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<script>
  $(function(){
    // Any additional JavaScript can be added here
  })
</script>
