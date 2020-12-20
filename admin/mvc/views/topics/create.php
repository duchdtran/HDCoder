<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Custom Styles -->
  <link rel="stylesheet" href=<?php echo ROOT . DS . "public" . DS . "css" . DS . "style.css" ?>>

  <!-- Admin Styling --> 
  <link rel="stylesheet" href="../../public/css/admin.css">

  <title>Admin - Create Topic</title>
</head>

<body>

<?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminHeader.php"); ?>

<div class="admin-wrapper clearfix">

  <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminSidebar.php"); ?>

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="<?php echo BASE_URL_ADMIN . "/topic/create";?>" class="btn btn-sm">Thêm chủ đề</a>
        <a href="<?php echo BASE_URL_ADMIN . "/topic";?>" class="btn btn-sm">Quản lí chủ đề</a>
      </div>
      <div class="content">
        <h2 style="text-align: center;">Tạo chủ đề</h2>

        <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "formErrors.php"); ?>

        
        <form action="create" method="post">
          <div class="input-group">
            <label>Tên</label>
            <input type="text" name="name" value="<?php echo $data['name']; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Mô tả</label>
            <textarea class="text-input" name="description" id="description"><?php echo $data['description']; ?></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="save-topic" class="btn">Lưu chủ đề</button>
          </div>
        </form>
      </div>
    </div>
    <!-- // Admin Content -->

  </div>


</body>

</html>