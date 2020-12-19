<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="<?php echo ROOT . DS . "public" . DS . "css" . DS . "style.css" ?>">

  <!-- Admin Styling --> 
  <!-- <link rel="stylesheet" href="../../public/css/admin.css"> -->

  <title>Admin - Update Topic</title>
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
      <div class="">
        <h2 style="text-align: center;">Cập nhật chủ đề</h2>

        <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "formErrors.php"); ?>


        <form action="edit" method="post">
          <div class="input-group"><input type="hidden"  name="id" value="<?php echo $data['topic']['id']; ?>"></div>
          <div class="input-group">
            <label>Tên</label>
            <input type="text" name="name" value="<?php echo $data['topic']['name']; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Mô tả</label>
            <textarea class="text-input" name="description" id="description"><?php echo $data['topic']['description']; ?></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="update-topic" class="btn">Cập nhật chủ đề</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- CKEditor 5 -->
  <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>

  <!-- Custome Scripts -->
  <!-- <script src="../../assets/js/scripts.js"></script> -->

</body>

</html>