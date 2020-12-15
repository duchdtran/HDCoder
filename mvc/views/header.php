<!-- header -->
<header class="clearfix">
  <div class="logo">
    <a href="<?php echo BASE_URL . '/home' ?>">
      <h1 class="logo-text"><span>HD</span>Coder</h1>
    </a>
  </div>
  <div class="fa fa-reorder menu-toggle"></div>
  <nav>
    <ul>
      <li><a href="<?php echo BASE_URL . '/home' ?>">Trang chủ</a></li>
      <li><a href="#">Giới thiệu</a></li>
      <li><a href="#">Liên hệ</a></li>

      <?php if (isset($_SESSION['id'])) : ?>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>

            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <?php if (!isset($_SESSION['admin'])) :?>
              <li><a href="<?php echo BASE_URL . '/admin.dashboard.php' ?>">Dashboard</a></li>
            <?php endif; ?>
            <li><a href="<?php echo BASE_URL . '/logout' ?>" class="logout">Đăng xuất</a></li>
          </ul>
        </li>

      <?php else : ?>
        <li><a href="<?php echo BASE_URL . '/register' ?>">Đăng kí</a></li>
        <li><a href="<?php echo BASE_URL . '/login' ?>">Đăng nhập</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</header>
<!-- // header -->