<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <link rel="stylesheet" href=<?php echo ROOT . DS . "public" . DS . "css" . DS . "style.css" ?>>

  <link rel="stylesheet" href="../../public/css/admin.css">

  <title>Admin - Tạo bài đăng</title>
</head>

<body>

  <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminHeader.php"); ?>

  <div class="admin-wrapper clearfix">
    <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminSidebar.php"); ?>

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="<?php echo BASE_URL_ADMIN . "/post/create";?>" class="btn btn-sm">Thêm bài đăng</a>
        <a href="<?php echo BASE_URL_ADMIN . "/post";?>" class="btn btn-sm">Quản lí bài đăng</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Tạo bài đăng</h2>

        <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "formErrors.php"); ?>

        <form action="create" method="post">
          <div class="input-group">
            <label>Tiêu đề</label>
            <input type="text" name="title" value="<?php echo $data['title']; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Nội dung</label>
            <textarea class="text-input" name="body" id="body"><?php echo $data['body']; ?></textarea>
          </div>
          <div class="input-group">
            <label>Chủ đề</label>
            <select class="text-input" name="topic_id">
              <?php foreach ($data['topics'] as $key => $topic) : ?>
                <?php if (!empty($topic_id) && $data['topic_id'] == $topic['id']) : ?>
                  <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                <?php else : ?>
                  <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>
                <?php endif; ?>

              <?php endforeach; ?>

            </select>
          </div>
          <div class="input-group">
            <label>
              <input type="checkbox" name="published">Công khai
            </label>
          </div>
          <div class="input-group">
            <button type="submit" name="save-post" class="btn">Lưu bài viết</button>
          </div>
        </form>

      </div>
    </div>
  </div>

</body>

</html>