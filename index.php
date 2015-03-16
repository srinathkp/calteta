<html>
<head>
  <title>GPA</title>
  <?php
    include 'header.php';
  ?>
</head>
<body>
  <div id="wrapper">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

          <a class="navbar-brand" href="index.php">Calteta</a>

      </div>
     <!--  <div class="nav navbar-right">
      Results are scrapped from nitt.edu, there may be some errors...<br>
      <a href="javascript:call()"id="issue">Click here</a> to notify such errors
          <! <a href="#" class="btn btn-primary" id="issues">Any issues? </a>
      </div>
 -->
 <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">


                <?php
                  include 'sidebar.php';
                ?>
             <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down">click</i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </div>
          <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
  </nav>

  <div id="page-wrapper">
        <center>
        
        </center>
        <div id="container">
        
        </div>


    </div>
    </div>
  </body>
  <script src="theme/js/jquery-1.11.0.js"></script>


</html>
	
