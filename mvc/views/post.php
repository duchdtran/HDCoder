<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="public/css/style.css">
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
  </style>

  <title>Motivational Blog</title>
</head>

<body>
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src =
        'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=285071545181837&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>



  <!-- Page wrapper -->
  <div class="page-wrapper">

    <!-- content -->
    <div class="content clearfix">
      <div class="page-content single">
        <h2 style="text-align: center;">A replacement for new year resolutions - A 12 months challenge</h2>
        <br>

        <p>Many times I have come across instances where some people scorn the practice of setting New Year Resolutions.
        </p>
        <p>Their reason for this goes something like this:</p>
        <p>The very word resolution is an indication of some form of internal conflict springing from an ineffectual
          self-governance in a person. It means the individual is waging a fight against something undesirable in their
          life; or is making a conscious decision to pursue certain ideals that before were absent in their life.</p>
        <p>Aren’t you supposed to be pursuing these ideals every day of your life? Isn’t it supposed to be the default
          state of your life? Why would you wait for a new year before you make a resolution to better your life?</p>
        <p>Such people also avoid new year resolutions or scorn the practice thereof because for them, experience has
          proven it to be ineffective.</p>
        <p>I don’t entirely agree with such people. I am not advocating the practice of new year resolutions either. But
          I’d sooner advise a person to set new year resolutions they will end up abandoning by the end of January than
          advise them to sleepwalk through their life the entire year.</p>
        <p>At the very least, setting new year resolutions means that you still have an interest in making your life
          better, and that is a good place to start. You just need a better strategy than new year resolutions, which is
          what I bring to the table today.</p>
        <p>I call it The <i>12 months challenge.</i></p>
        <p>This challenge is simple: At the end of the year, write and publish an article in which you list 12 of your
          proudest, most fulfilling accomplishments from each of the 12 months of that year. Be very strict with the
          rules of the challenge: Pick only one accomplishment per month.</p>
        <p>You are free to accomplish as many things in a month as you can but pick only one to be added to the list for
          any particular month.</p>
        <p>Publish this article on your blog (if you have one), on your linkedIn profile, and on any of the social media
          platforms; share it with your close network of trusted family members, friends, colleagues and mentors.</p>
        <p>It is very important that you share the article to as wide an audience as possible if the contents are not
          too private. Sharing such an article can help you connect with other individuals with shared interests,
          dreams, and plans for the future. And such connections can open doors for you and a lot of other people that
          you never knew existed.</p>
        <p>Most importantly, if you know you are preparing the article to share it with other people, you are more
          likely to take it very seriously.</p>
        <p>One thing I almost avoided mentioning is the nature of these accomplishments. I’m avoiding this aspect of the
          challenge because I can’t really tell you what you should aim at accomplishing in your life in order to feel
          fulfilled. You are going to have to do that yourself because only you can do it best. It is your purpose. You
          may think you don’t know it yet but at some deeper level you do.</p>
        <p>I can only tell you what works for me: I have a few questions I usually ask myself when I feel that I am not
          living a fulfilling life at any time in my life. At such times I ask myself:</p>
        <p>If I were to be diagnosed with terminal cancer and given only 6 months to live, how would I spend that time?
          What things would I value most? What would I regret not doing?</p>
        <p>For me, the answers to such questions immediately and unmistakably stand out clear in my mind:</p>
        <p>I would regret not taking better care of my parents than what I am doing. They have toiled and soiled far too
          much for me to be ordinary.<br>I would grieve in my spirit at all those years I felt timid and settled for far
          far less than I am worth.</p>
        <p>I would regret my passivity in relationships with all those amazing people who have once featured in my life
          and left because of my apparent disinterest. I could have swallowed my pride and risked exposing my
          insecurities, my quirks and my shortcomings in general. Hiding them only made me look uninterested.</p>
        <p>I would regret all those hours I wasted feeling bored when I could have set up a blog to explore my passion
          for writing.</p>
        <p>I could have read more and more books.</p>
        <p>I would regret never having taken any steps towards realizing all those side projects I kept conceiving day
          after day in my mind.</p>
        <p>And many more...</p>
        <p>When you ask yourself the above questions, the answers will pop up almost immediately and they will fill you
          with a new vitality and enthusiasm towards your life goals.</p>
        <p>Now assume your time from now on is as limited and valuable as it could be if the above assumption about
          cancer were real. Then start working on these projects one month at a time. Start living your unlived life one
          month at a time.</p>
        <p>When you publish this article at the end of the year, can you please share it with me. I would love to see
          you take that life by the throat. You can mail the link to the article to me at melvineawa@gmail.com.</p>

      </div>

      <div class="sidebar single">
        <!-- fb page -->
        <div class="fb-page" data-href="https://www.facebook.com/Piece-of-Advice-1055745464557488/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/Piece-of-Advice-1055745464557488/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Piece-of-Advice-1055745464557488/">Piece of Advice</a></blockquote>
        </div>
        <!-- // fb page -->

        <!-- Popular Posts -->
        <div class="section popular">
          <h2>Popular</h2>

          <div class="post clearfix">
            <img src="assets/images/image_1.png">
            <a href="#" class="title">How to act inspite of your emotions</a>
          </div>
          <div class="post clearfix">
            <img src="assets/images/image_2.png">
            <a href="#" class="title">How to act inspite of your emotions</a>
          </div>
          <div class="post clearfix">
            <img src="assets/images/image_3.png">
            <a href="#" class="title">How to act inspite of your emotions</a>
          </div>
          <div class="post clearfix">
            <img src="assets/images/image_4.png">
            <a href="#" class="title">How to act inspite of your emotions</a>
          </div>
          <div class="post clearfix">
            <img src="assets/images/image_5.png">
            <a href="#" class="title">How to act inspite of your emotions</a>
          </div>

        </div>
        <!-- // Popular Posts -->

        <!-- topics -->
        <div class="section topics">
          <h2>Topics</h2>
          <ul>
            <a href="#">
              <li>Poems</li>
            </a>
            <a href="#">
              <li>Quotes</li>
            </a>
            <a href="#">
              <li>Fiction</li>
            </a>
            <a href="#">
              <li>Biography</li>
            </a>
            <a href="#">
              <li>Motivation</li>
            </a>
            <a href="#">
              <li>Inspiration</li>
            </a>
            <a href="#">
              <li>Life Lessons</li>
            </a>
            <a href="#">
              <li>Self Development</li>
            </a>
          </ul>
        </div>
        <!-- // topics -->

      </div>
    </div>
    <!-- // content -->

  </div>
  <!-- // page wrapper -->



  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="public/js/scripts.js"></script>

</body>

</html>