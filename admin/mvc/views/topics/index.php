<?php include("../../path.php") ?>
<?php include(ROOT . DS . "app" . DS . "controller" . DS . "topics.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../assets/css/admin.css">


  <title>Admin - Manage Topics</title>
</head>

<body>

  <?php include("../../app/includes/adminHeader.php") ?>


  <div class="admin-wrapper clearfix">
    <?php include(ROOT . DS . "app" . DS . "includes" . DS . "adminSidebar.php") ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add Topic</a>
        <a href="index.php" class="btn btn-sm">Manage Topics</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Manage Topic</h2>

        <?php include(ROOT . DS . "app" . DS . "includes" . DS . "message.php"); ?>


        <table>
          <thead>
            <th>N</th>
            <th>Name</th>
            <th colspan="2">Action</th>
          </thead>
          <tbody>
            <?php foreach ($topics as $key => $topics) : ?>
              <tr class="rec">
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $topics['name']; ?>
                </td>
                <td>
                  <a href="edit.php?id=<?php echo $topics['id']; ?>" class="edit">Sửa</a>
                </td>
                <td>
                  <a href="index.php?del_id=<?php echo $topics['id']; ?>" class="delete">Xóa</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="../../assets/js/scripts.js"></script>

</body>

</html>