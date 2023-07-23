<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-0">
    <div class="container-fluid">
      <a class="" href="#" ><img  class="w-50" src="assets/images/icon.png" alt="Note icon"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link <?php echo isActive("/");?>" aria-current="page" href="/">خانه</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isActive("/about");?>" href="/about">درباره</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isActive("/contact");?>" href="/contact">تماس‌ با ما</a>
          </li>
        </ul>
        <div class="" class="login">
          <button class="btn btn-outline-success" >ورود</button>
          <button class="btn btn-outline-warning mx-2" >عضویت</button>
        </div>
      </div>
    </div>
  </nav>
</header>
<main class="flex-shrink-0">