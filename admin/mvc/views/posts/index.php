<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <!-- <link rel="stylesheet" href=<?php echo ROOT . DS . "public" . DS . "css" . DS . "style.css" ?>> -->

  <!-- Admin Styling -->
  <!-- <link rel="stylesheet" href="../../public/css/admin.css"> -->

  <style>
    @import url('https://fonts.googleapis.com/css?family=Lora');
    @import url('https://fonts.googleapis.com/css?family=Georgia');

    html,
    body {
      padding: 0px;
      margin: 0px;
      font-family: 'Lora', serif;
      height: 100%;
      background: #f6f6f6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    a:hover,
    a:active {
      color: #0081cb;
    }

    .logo-text,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Georgia', sans-serif;
      margin: 5px;
      color: #0081cb;
      font-weight: normal;
    }

    .clearfix::after {
      content: '';
      display: block;
      clear: both;
    }

    .msg {
      width: 100%;
      list-style-type: none;
      margin: 5px auto;
      padding: 7px;
      box-sizing: border-box;
      border-radius: 3px;
    }

    .error {
      color: #884b4b;
      background: rgb(245, 188, 188);
      border: 1px solid #6e3a3d;
    }

    .success {
      color: #3a6e3a;
      background: #bcf5bc;
      border: 1px solid #3a6e3a;
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      text-align: center;
      width: 100%;
      white-space: nowrap;
      border: 1px solid transparent;
      padding: .7rem 1rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: .25rem;
      background: #0081cb;
      color: #fff;
    }

    .btn-sm {
      padding: .5rem .8rem;
      line-height: 1.3;
      border-radius: .25rem;
    }

    .btn:hover {
      cursor: pointer;
      background: #00767a;
    }

    .input-group {
      display: block;
      margin: 10px auto 10px;
    }

    .text-input {
      border: 1px solid #e0e0e0;
      outline: none;
      display: block;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 10px;
      padding: .6rem 1.1rem;
      font-size: 1.25rem;
      line-height: 1.5;
      border-radius: .3rem;
      font-family: 'Lora', serif;
    }

    .delete {
      color: red;
    }

    .edit {
      color: blue;
    }

    .publish {
      color: green;
    }

    .unpublish {
      color: orange;
    }

    /* NAVBAR */

    header {
      background: #0081cb;
      color: #ffffff;
      height: 66px;
    }

    header a:hover {
      color: white;
    }

    .logo {
      float: left;
      margin-left: 2em;
      height: inherit;
    }

    .logo-text {
      padding: 0px;
      color: white;
      font-family: 'Georgia', sans-serif;
    }

    .logo-text span {
      color: #69e2ff;
    }

    header nav {
      float: right;
    }

    header nav ul {
      margin: 0px;
      padding: 0px;
      list-style-type: none;
    }

    header nav ul li {
      float: left;
      position: relative;
    }

    header nav ul li a {
      display: block;
      padding: 21px;
      font-size: 1.1em;
    }

    header nav ul li a:hover {
      background: #006669;
      transition: 0.5s;
    }

    header nav ul li ul {
      display: none;
      position: absolute;
      right: 0px;
      z-index: 4;
    }

    header nav ul li:hover .dropdown {
      display: block;
    }

    header nav ul li .dropdown li {
      width: 180px;
    }

    header nav ul li .dropdown li a {
      background: #fff;
      color: #444444;
      padding: 10px;
    }

    header nav ul li .dropdown li a:hover {
      background: #f0f0f0;
    }

    header nav ul li .dropdown .logout {
      color: red;
    }

    header header nav ul li .dropdown .userinfo {
      width: 130px;
    }

    header nav ul .userinfo i.fa-user {
      font-size: 1.3em;
      margin-right: 3px;
    }

    header nav ul .userinfo i.fa-chevron-down {
      float: right;
      font-size: .7em;
      margin: 6px 3px;
    }

    .menu-toggle {
      display: none;
    }

    /* SLIDER */

    .page-wrapper {
      min-height: 100%;
      margin-bottom: 50px;
    }

    .page-wrapper .posts-slider {
      position: relative;
      padding: 5px;
    }

    .page-wrapper .posts-slider .slider-title {
      text-align: center;
      margin: 40px auto 40px;
    }

    .page-wrapper .posts-slider .next {
      position: absolute;
      right: 30px;
      top: 50%;
      z-index: 100;
      font-size: 2em;
      color: #0081cb;
      cursor: pointer;
    }

    .page-wrapper .posts-slider .prev {
      position: absolute;
      left: 30px;
      top: 50%;
      z-index: 100;
      font-size: 2em;
      color: #0081cb;
      cursor: pointer;
    }

    .page-wrapper .posts-slider .posts-wrapper {
      height: 350px;
      width: 84%;
      margin: 0px auto;
      overflow: hidden;
      padding: 5px;
    }

    .page-wrapper .posts-slider .posts-wrapper .post {
      width: 300px;
      height: 300px;
      padding: 0px 10px 0px;
      display: inline-block;
    }

    .page-wrapper .posts-slider .posts-wrapper .post .inner-post {
      height: 100%;
      border-radius: 5px;
      background: #fff;
      padding-bottom: 30px;
      box-shadow: 0 1.2rem 1.2rem -1rem #0a0a0a33;
    }

    .page-wrapper .posts-slider .posts-wrapper .post .inner-post .post-info {
      height: 100px;
      padding: 5px 10px;
    }

    /* CONTENT */

    .content {
      width: 90%;
      margin: 40px auto 140px;
    }

    .content .page-content {
      width: 70%;
      margin: 0px auto;
      float: left;
    }

    .content .page-content.single {
      margin-right: 10px;
      background: white;
      padding: 20px 50px;
      box-sizing: border-box;
      font-size: 1.1em;
      border-radius: 5px;
    }

    .content .sidebar {
      width: 28%;
      float: left;
      margin: 78px auto;
    }

    .content .sidebar.single {
      margin: 0px auto;
    }

    .content .sidebar .search-div {
      background: white;
      padding: 20px;
      border-radius: 5px;
    }

    .content .sidebar .section {
      background: #ffffff;
      margin-top: 20px;
      border-radius: 5px;
      padding: 20px;
    }

    .content .sidebar .section.topics ul {
      list-style-type: none;
      padding: 0px;
      border-bottom: 1px solid #e0e0e0;
    }

    .content .sidebar .section.topics ul a {
      display: block;
      padding: 15px;
      border-top: 1px solid #e0e0e0;
      transition: all .3s;
    }

    .content .sidebar .section.topics ul a:hover {
      padding-left: 25px;
      transition: all .3s;
    }

    .content .sidebar .section.popular .post {
      border-top: 1px solid #e0e0e0;
      padding-top: 10px;
      margin-top: 10px;
    }

    .content .sidebar .section.popular .post .title {
      width: 80%;
    }

    .content .sidebar .section.popular .post img {
      width: 60px;
      height: 60px;
      float: left;
      margin-right: 10px;
    }

    .content .page-content .post {
      border-radius: 5px;
      height: 260px;
      width: 96%;
      margin: 0px auto 30px;
      background: #fff;
    }

    .content .page-content .post .post-content {
      width: 62.88%;
      height: 100%;
      position: relative;
      box-sizing: border-box;
      padding: 5px 15px;
      float: left;
    }

    .content .page-content .post .post-title {
      margin: 5px 0px;
    }

    .content .page-content .recent-posts-title {
      margin: 20px;
    }

    .content .page-content .post .read-more {
      text-decoration: none;
      color: inherit;
      text-align: center;
      border: 1px solid #8BC7C9;
      padding: 8px 15px;
      border-radius: 0px;
      position: absolute;
      right: 20px;
      bottom: 20px;
    }

    .content .page-content .post .read-more:hover {
      color: white;
      background: #0081cb;
      border: 1px solid #0081cb;
      transition: .5s;
    }

    .content .page-content .post .post-body {
      line-height: 1.7em;
      font-size: 1.03em;
      color: #444;
    }

    .content .page-content .post .post-image {
      width: 37%;
      height: inherit;
      float: left;
    }

    .content .page-content .post .post-info {
      color: #757575;
      font-size: 0.8em;
    }

    .auth-content {
      width: 30%;
      margin: 50px auto;
      background: white;
      padding: 20px;
      border-radius: 5px;
      font-size: 1.1em;
    }

    .auth-content .form-title {
      text-align: center;
    }

    .auth-content .auth-nav {
      margin: 5px auto;
      text-align: center;
      font-size: 1em;
    }

    .auth-content .auth-nav a {
      text-decoration: underline;
    }

    /* FOOTER */

    .footer {
      margin-top: -50px;
      background: #303036;
      color: #d3d3d3;
      height: 401px;
      position: relative;
    }

    .footer .footer-bottom {
      color: #686868;
      border-top: 1px solid #333333;
      background: #343a40;
      text-align: center;
      position: absolute;
      bottom: 0px;
      left: 0px;
      width: 100%;
      height: 50px;
      box-sizing: border-box;
    }

    .footer .footer-content {
      height: 351px;
      display: flex;
    }

    .footer .footer-content .footer-section {
      flex: 1;
      padding: 40px;
      box-sizing: border-box;
    }

    .footer .footer-content .about .contact {
      margin-top: 28px;
    }

    .footer .footer-content .about .contact i {
      font-size: 1.2em;
      margin: 5px auto;
      display: block;
      margin-top: 10px;
    }

    .footer .footer-content .social {
      margin-top: 30px;
    }

    .footer .footer-content .social a {
      border: 1px solid gray;
      font-size: 1.3em;
      display: inline-block;
      width: 35px;
      padding: 6px 4px;
      text-align: center;
      margin-right: 5px;
      border-radius: 5px;
    }

    .footer .footer-content .social a:hover {
      color: white;
      border: 1px solid white;
      transition: all .5s;
    }

    .footer .footer-content .quick-links a {
      display: block;
      margin-top: 10px;
      font-size: 1.1em;
      transition: all 0.25s;
    }

    .footer .footer-content .quick-links a:hover {
      color: white;
      padding-left: 10px;
      transition: all 0.25s;
    }

    .footer .footer-content .footer-section h2 {
      color: #f0ecec;
    }

    .footer .footer-content .contact-form-div .contact-input {
      margin: 5px auto 5px;
      border: none;
      background: #272727;
      color: #bebdbd;
      padding: .7rem 1.2rem;
      font-size: 1.25rem;
    }

    .footer .footer-content .contact-form-div .contact-input:focus {
      outline: none;
      background: #1f1f1f;
    }

    .footer .footer-content .contact-form-div .send-msg-btn {
      float: right;
      background: #0081cb;
      color: #d3d3d3;
      cursor: pointer;
      border: none;
      border-radius: 4px;
      padding: 10px 30px;
      font-size: 1.1em;
      font-family: 'Lora', serif;
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: block;
        width: 40px;
        height: 40px;
        margin: 10px;
        float: right;
        cursor: pointer;
        text-align: center;
        font-size: 30px;
        color: #ffffff;
      }

      .menu-toggle:before {
        content: '\f0c9';
        font-family: fontAwesome;
        line-height: 40px;
      }

      nav {
        width: 100%;
        background: #0E94A0;
      }

      nav ul {
        max-height: 0px;
        overflow: hidden;
      }

      .showing {
        max-height: 95em;
      }

      nav ul li {
        box-sizing: border-box;
        width: 100%;
      }

      header nav ul li ul {
        position: static;
        box-sizing: border-box;
        display: block;
        width: 100%;
      }

      header nav ul li .dropdown li {
        clear: both;
        width: 100%;
      }

      header nav ul li .dropdown li a {
        background: #0E94A0;
        color: white;
        padding: 15px;
        padding-left: 50px;
      }

      header nav ul li .dropdown li a:hover {
        background: #0E94A0;
      }
    }

    @media only screen and (max-width: 974px) {

      /* CONTENT */
      .content {
        width: 100%;
      }

      /* FOOTER */
      .footer .footer-content .footer-section {
        padding: 20px;
      }

      .footer .footer-content .about .contact {
        margin-top: 18px;
      }

      .auth-content {
        width: 40%;
      }
    }

    @media only screen and (max-width: 790px) {
      .content {
        margin: 40px auto 50px;
      }

      .content .page-content {
        width: 100%;
      }

      .content .sidebar {
        width: 100%;
        margin-top: 40px;
        padding: 10px;
        box-sizing: border-box;
      }

      /* FOOTER */
      .footer {
        height: auto;
        padding: 50px;
      }

      .footer .footer-content {
        height: auto;
        display: flex;
        flex-direction: column;
      }

      .footer .footer-section {
        height: auto;
        display: block;
        padding: 100px auto;
        border-bottom: 1px solid rgb(34, 33, 33);
      }

      .footer .footer-section .send-msg-btn {
        width: 100%;
        padding: 8px auto;
      }
    }

    @media only screen and (max-width: 560px) {
      .footer {
        padding: 20px;
        padding-bottom: 60px;
      }

      .footer .footer-section {
        padding: 0px;
      }

      .content .page-content .post {
        height: auto;
      }

      .content .page-content .post .post-content {
        width: 100%;
        padding: 5px 15px;
      }

      .content .page-content .post .post-image {
        width: 100%;
      }

      .content .page-content .post .read-more {
        position: static;
        display: block;
        width: 100%;
        box-sizing: border-box;
        margin: 10px auto;
      }

      .page-wrapper .posts-slider .next {
        right: 10px;
      }

      .page-wrapper .posts-slider .prev {
        left: 10px;
      }

      .auth-content {
        width: 80%;
      }
    }

    header {
      background: #001f20;
      color: #ffffff;
    }

    .admin-wrapper {
      height: calc(100% - 65px);
      box-sizing: border-box;
    }

    .admin-wrapper .left-sidebar {
      width: 20%;
      height: 100%;
      float: left;
      background: #013638;
    }

    .admin-wrapper .left-sidebar ul {
      list-style: none;
      margin: 0px;
      padding: 0px;
      color: white;
    }

    .admin-wrapper .left-sidebar ul li {
      border-bottom: 1px solid #6da6aa;
    }

    .admin-wrapper .left-sidebar ul li a {
      display: block;
      padding: 15px 20px;
    }

    .admin-wrapper .admin-content {
      width: 80%;
      height: 100%;
      float: left;
      box-sizing: border-box;
      padding: 40px 100px 100px;
      overflow-y: scroll;
      background: #fff;
    }

    .admin-wrapper .admin-content .button-group {
      padding-bottom: 10px;
      border-bottom: 1px solid #e0e0e0;
    }

    .admin-wrapper .admin-content .button-group .btn {
      width: unset;
    }

    .admin-wrapper .admin-content a {
      text-decoration: unset;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 1.1em;
    }

    th,
    td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #d3d3d3;
    }

    @media (max-width: 768px) {
      nav {
        width: 100%;
        background: #054247;
      }

      header nav ul li .dropdown li a {
        background: #054247;
      }

      header nav ul li .dropdown li a:hover {
        background: #054247;
      }
    }
  </style>

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
                <td><a href="<?php echo BASE_URL_ADMIN . "/post/edit";?>" class="edit">Sửa</a></td>
                <td> <a href="<?php echo BASE_URL_ADMIN . "/post/delete";?>" class="delete"> Xóa</a></td>
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


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- <script src="../../scripts.js"></script> -->

</body>

</html>