<header class="fixed-top">
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark p-0">
    <div class="container-fluid">
      <a class="" href="/" ><img  class="w-50" src="/assets/images/icon.png" alt="Note icon"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-2" id="navbarCollapse">
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
          <?php if(isset($_SESSION['user'])):?>
              <a class="nav-link <?php echo isActive("/notes");?>" href="/notes">یادداشت‌ها</a>
            </li>
          <?php endif;?>
        </ul>
        <?php if(isset($_SESSION['user'])):?>
          <form action="/sessions" method="POST" >
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-outline-danger ligh">خروج از حساب</button>
          </form>
        <?php else:?>
          <div class="" class="login">
            <a class="btn btn-outline-warning" href="/sessions" >ورود</a>
            <a class="btn btn-outline-success mx-2" href="/register" >عضویت</a>
          </div>
        <?php endif;?>
      </div>
    </div>
  </nav>
</header>
<main class="pt-4 mt-5 px-2 px-md-5 ">