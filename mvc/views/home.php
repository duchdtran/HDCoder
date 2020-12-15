<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="public/css/style.css">
  <title>HD Coder</title>
</head>

<body>

  <?php include("header.php"); ?>
  <?php include("message.php"); ?>

  <!-- Page wrapper -->
  <div class="page-wrapper">
    <!-- Posts Slider -->
    <div class="posts-slider">
      <h1 class="slider-title">Bài viết nổi bật</h1>
      <i class="fa fa-chevron-right next"></i>
      <i class="fa fa-chevron-left prev"></i>
      <div class="posts-wrapper">
        <?php foreach ($data['Posts'] as $key => $posts) : ?>
          <div class="post">
            <div class="inner-post">
              <img src="<?php echo $posts['image']; ?>" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
              <div class="post-info">
                <h4><a href="post/init/<?php echo $posts['id']; ?>"><?php echo $posts['title']; ?></a></h3>
                  <div>
                    <i class="fa fa-user-o"></i> <?php echo $posts['author']; ?>
                    &nbsp;
                    <i class="fa fa-calendar"></i> <?php echo $posts['created_at']; ?>
                  </div>
              </div>
            </div> 
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <!-- // Posts Slider -->
    <!-- content -->
    <div class="content clearfix">
      <div class="page-content">
        <h1 class="recent-posts-title">Bài viết mới nhất</h1>

        <?php foreach ($data['Posts'] as $key => $posts) : ?>
          <div class="post clearfix">
            <img src="<?php echo $posts['image']; ?>" class="post-image" alt="">
            <div class="post-content">
              <h2 class="post-title"><a href="post/init/<?php echo $posts['id']; ?>"><?php echo $posts['title'] ?></a></h2>
              <div class="post-info">
                <i class="fa fa-user-o"></i> <?php echo $posts['author'] ?>
                &nbsp;
                <i class="fa fa-calendar"></i> <?php echo $posts['created_at'] ?>
              </div>
              <p class="post-body"><?php echo strip_tags(substr($posts['body'], 0, 500) . '...', ENT_NOQUOTES);  ?>
              </p>
              <a href="post/init/<?php echo $posts['id']; ?>" class="read-more">Đọc thêm</a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
          <form action="home" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Tìm kiếm...">
          </form>
        </div>
        <!-- // Search -->
        <!-- topics -->
        <div class="section topics">
          <h2>Chủ đề</h2>
          <ul>
            <?php foreach ($data['Topics'] as $key => $topics) : ?>
              <a href="#">
                <li><?php echo $topics['name']; ?></li>
              </a>
            <?php endforeach; ?>
          </ul>
        </div>
        <!-- // topics -->
      </div>
    </div>
    <!-- // content -->
  </div>
  <!-- // page wrapper -->

  <!-- <?php include("footer.php"); ?> -->

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="public/js/scripts.js"></script>
</body>

</html>