<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Custom Styles -->
  <link rel="stylesheet" href="public/css/style.css" ?>
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
        <?php foreach ($data['PopularPost'] as $key => $posts) : ?>
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
        <?php if (empty($data['SearchKeyword'])) { ?>
          <h1 class="recent-posts-title">Bài viết mới nhất</h1>
        <?php } else { ?>
          <h1 class="recent-posts-title">Search với từ khóa #<?php echo $data['SearchKeyword'] ?></h1>
        <?php } ?>

        <?php foreach ($data['Posts'] as $key => $posts) : ?>
          <div class="post clearfix">
            <img src="<?php echo $posts['image']; ?>" class="post-image" alt="">
            <div class="post-content">
              <h2 class="post-title"><a href="<?php echo BASE_URL . "/post/init/". $posts['id']; ?>"><?php echo $posts['title'] ?></a></h2>
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
        <div style="display: flex; justify-content: center;">
          <nav aria-label="Page navigation example">
            <style>
              .pagination {
                display: -ms-flexbox;
                display: flex;
                padding-left: 0;
                list-style: none;
                border-radius: .25rem
              }

              .page-link {
                position: relative;
                display: block;
                padding: .5rem .75rem;
                margin-left: -1px;
                line-height: 1.25;
                color: #007bff;
                background-color: #fff;
                border: 1px solid #dee2e6
              }

              .page-link:hover {
                z-index: 2;
                color: #0056b3;
                text-decoration: none;
                background-color: #e9ecef;
                border-color: #dee2e6
              }

              .page-link:focus {
                z-index: 2;
                outline: 0;
                box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
              }

              .page-item:first-child .page-link {
                margin-left: 0;
                border-top-left-radius: .25rem;
                border-bottom-left-radius: .25rem
              }

              .page-item:last-child .page-link {
                border-top-right-radius: .25rem;
                border-bottom-right-radius: .25rem
              }

              .page-item.active .page-link {
                z-index: 1;
                color: #fff;
                background-color: #007bff;
                border-color: #007bff
              }

              .page-item.disabled .page-link {
                color: #6c757d;
                pointer-events: none;
                cursor: auto;
                background-color: #fff;
                border-color: #dee2e6
              }

              .pagination-lg .page-link {
                padding: .75rem 1.5rem;
                font-size: 1.25rem;
                line-height: 1.5
              }

              .pagination-lg .page-item:first-child .page-link {
                border-top-left-radius: .3rem;
                border-bottom-left-radius: .3rem
              }

              .pagination-lg .page-item:last-child .page-link {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem
              }

              .pagination-sm .page-link {
                padding: .25rem .5rem;
                font-size: .875rem;
                line-height: 1.5
              }

              .pagination-sm .page-item:first-child .page-link {
                border-top-left-radius: .2rem;
                border-bottom-left-radius: .2rem
              }

              .pagination-sm .page-item:last-child .page-link {
                border-top-right-radius: .2rem;
                border-bottom-right-radius: .2rem
              }
            </style>

            <ul class="pagination">
              <?php if ($data['CurrentPost'] != 1) { ?>
                <li class="page-item"><a class="page-link" href="<?php echo BASE_URL . "/Home/Page/" . $data['CurrentPost'] - 1 ?>">Trước</a></li>
                <li class="page-item"><a class="page-link" href="<?php echo BASE_URL . "/Home/Page/" . "1" ?>">1</a></li>
              <?php } ?>

              <?php if ($data['CurrentPost'] > 3) { ?>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
              <?php } ?>

              <?php if ($data['CurrentPost'] > 2) { ?>
                <li class="page-item"><a class="page-link" href="<?php echo BASE_URL . "/Home/Page/" . $data['CurrentPost'] - 1 ?>"><?php echo $data['CurrentPost'] - 1 ?></a></li>
              <?php } ?>

              <li class="page-item"><a class="page-link" href="<?php echo BASE_URL . "/Home/Page/" . $data['CurrentPost'] ?>"><?php echo $data['CurrentPost'] ?></a></li>

              <?php if ($data['CurrentPost'] < $data['CountPosts'] - 1) { ?>
                <li class="page-item"><a class="page-link" href="<?php echo BASE_URL . "/Home/Page/" . $data['CurrentPost'] + 1 ?>"><?php echo $data['CurrentPost'] + 1 ?></a></li>
              <?php } ?>

              <?php if ($data['CurrentPost'] < $data['CountPosts'] - 2) { ?>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
              <?php } ?>

              <?php if ($data['CurrentPost'] != $data['CountPosts']) { ?>
                <li class="page-item"><a class="page-link" href="<?php echo BASE_URL . "/Home/Page/" . $data['CountPosts'] ?>"><?php echo $data['CountPosts'] ?></a></li>
                <li class="page-item"><a class="page-link" href="<?php echo BASE_URL . "/Home/Page/" . $data['CurrentPost'] + 1 ?>">Sau</a></li>
              <?php } ?>
            </ul>
          </nav>
        </div>
      </div>
      <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
          <form action="home" method="post">
            <input type="text" name="search-term" class="text-input" value="<?php echo $data['SearchKeyword'] ?>" placeholder="Tìm kiếm...">
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

  <?php include("footer.php"); ?>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="public/js/scripts.js"></script>
</body>

</html>