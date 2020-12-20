<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="public/css/style.css">

  <title><?php echo $data['post']['title'] ?></title>
</head>

<body>
  <?php include("header.php"); ?>


  <!-- Page wrapper -->
  <div class="page-wrapper">

    <!-- content -->
    <div class="content clearfix">
      <div class="page-content single">
        <h2 style="text-align: center;"><?php echo $data["post"]['title'] ?></h2>
        <br>

        <?php echo $data['post']['body'] ?>

      </div>

      <div class="sidebar single">

        <!-- Popular Posts -->
        <div class="section popular">
          <h2>Bài viết nổi bật</h2>

          <?php foreach ($data['popular'] as $post) : ?>
            <div class="post clearfix">
              <img src="<?php echo $post['image'] ?>">
              <a href="#" class="title"><?php echo $post['title'] ?></a>
            </div>
          <?php endforeach; ?>

        </div>
        <!-- // Popular Posts -->

        <!-- topics -->
        <div class="section topics">
          <h2>Chủ đề</h2>
          <ul>
            <?php foreach ($data["topics"] as $topic) : ?>
              <a href="#">
                <li><?php echo $topic['name'] ?></li>
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


</body>

</html>