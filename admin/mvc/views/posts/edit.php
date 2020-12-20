

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../public/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../public/css/admin.css">

  <title>Admin - Sửa bài viết</title>
</head>

<body>

  <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminHeader.php"); ?>

  <div class="admin-wrapper clearfix">
    <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminSidebar.php"); ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="<?php echo BASE_URL_ADMIN . "/post/create";?>" class="btn btn-sm">Thêm bài viết</a>
        <a href="<?php echo BASE_URL_ADMIN . "/post";?>" class="btn btn-sm">Quản lí bài viết</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Sửa bài viết</h2>

        <form action="<?php echo BASE_URL_ADMIN . "/post/edit/".$data['post']['id'];?>" method="post">
          <div class="input-group">
            <label>Tiêu đề</label>
            <input type="text" name="title" value="<?php echo $data['post']['title'] ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Nội dung</label>
            <textarea class="text-input" name="body" id="body"><?php echo $data['post']['body'] ?></textarea>
          </div>
          <div class="input-group">
            <label>Chủ đề</label>
            <select class="text-input" name="topic">
              <?php foreach($data['topics'] as $key => $topic): ?>
              <option><?php echo $topic['name'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="input-group">
            <label>
              <input type="checkbox" <?php if($data['post']['published']) echo "checked" ?> name="publish" /> Công khai
            </label>
          </div>
          <div class="input-group">
            <button type="submit" name="update-post" class="btn">Cập nhật bài viết</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>

</body>

</html>