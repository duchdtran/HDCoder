<?php include("../../path.php") ?>
<?php include(ROOT . DS . "app" . DS . "controller" . DS . "posts.php"); ?>


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

  <title>Admin - Manage Drafts</title>
</head>

<body>

  <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminHeader.php"); ?>

  <div class="admin-wrapper clearfix">
    <?php include(ROOT . DS . "mvc" . DS . "views" . DS . "adminSidebar.php"); ?>


    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add Post</a>
        <a href="index.php" class="btn btn-sm">Manage Posts</a>
        <a href="index.php" class="btn btn-sm">Manage Drafts</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Manage Drafts</h2>
        <table>
          <thead>
            <th>N</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>
            <tr class="rec">
              <td>1</td>
              <td>
                <a href="#">A replacement for new year resolutions - a 12 months challenge</a>
              </td>
              <td>Awa</td>
              <td>
                <a href="#" class="edit">
                  Edit
                </a>
              </td>
              <td>
                <a href="#" class="delete">
                  Delete
                </a>
              </td>
              <td>
                <a href="#" class="publish">
                  Publish
                </a>
              </td>
            </tr>
            <tr class="rec">
              <td>2</td>
              <td>
                <a href="#">Why life is beautiful</a>
              </td>
              <td>Awa</td>
              <td>
                <a href="#" class="edit">
                  Edit
                </a>
              </td>
              <td>
                <a href="#" class="delete">
                  Delete
                </a>
              </td>
              <td>
                <a href="#" class="publish">
                  Publish
                </a>
              </td>
            </tr>
            <tr class="rec">
              <td>3</td>
              <td>
                <a href="#">Interesting facts about the history of the world</a>
              </td>
              <td>Awa</td>
              <td>
                <a href="#" class="edit">
                  Edit
                </a>
              </td>
              <td>
                <a href="#" class="delete">
                  Delete
                </a>
              </td>
              <td>
                <a href="#" class="publish">
                  Publish
                </a>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="../../scripts.js"></script>

</body>

</html>