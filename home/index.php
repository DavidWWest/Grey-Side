<?php include('header.php'); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Grey Side</a>
      </div>

<!--Gives users the ability to either join the site or sign in-->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../login/signup/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li>
            <a href="#" data-toggle="modal" data-target="#loginModal">
                <span class="glyphicon glyphicon-log-in"></span>
                Login
            </a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="homepage-hero-module">
      <div class="video-container">
          <div class="filter"></div>
          <video autoplay loop class="fillWidth">
              <source src="../For_Wes.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
              <source src="../WEBM/For_Wes.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
          </video>
          <div class="poster hidden">
              <img src="PATH_TO_JPEG" alt="">
          </div>
      </div>
  </div>

<div class="btmnavbar"style="bottom: 0px; position: fixed;width: 100%;">

<!--Provides additional information to help with more internal aspects of the company-->
  <div id="space">
    <a href= "../advertising/">Advertising</a>
    <a href="../community/">Community</a>
    <a href>FAQ</a>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="login-modal">
                    <i class="fa fa-sign-in"></i> Sign In
                </h3>
            </div>
            <div class="modal-body">
                <form class="login" id="login" action="/login" accept-charset="UTF-8" method="post">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-addon">Email</div>
                            <input class="form-control input-lg" placeholder="johnny@appleseed.com" autocomplete="off" type="text" value="" name="user[email]" id="user_email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-addon">Password</div>
                            <input class="form-control input-lg" placeholder="********" type="password" name="user[password]" id="user_password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 visible-xs"></div>
                        <div class="col-xs-12 col-sm-6">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">
                                <i class="fa fa-sign-in"></i> Sign In
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('header.php'); ?>