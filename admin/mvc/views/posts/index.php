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

  <title>Admin - Quản lí bài viết</title>
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
        <h2 style="text-align: center;">Quản lí bài viết</h2>

        <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "message.php"); ?>

        <table>
          <thead>
            <th>N</th>
            <th>Tiêu đề</th>
            <th>Tác giả</th>
            <th colspan="3">Hành động</th>
          </thead>
          <tbody>
            <?php foreach ($data['posts'] as $key => $post) : ?>
              <tr class="rec">
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['author']; ?></td>
                <td><a href="<?php echo BASE_URL_ADMIN . "/post/edit/" . $post['id'];?>" class="edit">Sửa</a></td>
                <td> <a href="<?php echo BASE_URL_ADMIN . "/post/delete/" . $post['id'];?>" class="delete"> Xóa</a></td>
                <?php if ($post['published']) : ?>
                  <td><a href="#" class="unpublish">Không công khai</a>
                  <?php else : ?>
                  <td><a href="#" class="publish">Công khai</a>
                  <?php endif; ?>
                  </td>
              </tr>
            <?php endforeach; ?> 
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


</body>

</html>