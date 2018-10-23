<?php
session_start();
include_once("config.php");
include_once("include/function.php");

?>

<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer show-sidebar sidebar-l2" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ThemeKit</title>

  <!-- Vendor CSS BUNDLE
    Includes styling for all of the 3rd party libraries used with this module, such as Bootstrap, Font Awesome and others.
    TIP: Using bundles will improve performance by reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/vendor/all.css" rel="stylesheet">

  <!-- Vendor CSS Standalone Libraries
        NOTE: Some of these may have been customized (for example, Bootstrap).
        See: src/less/themes/{theme_name}/vendor/ directory -->
  <!-- <link href="css/vendor/bootstrap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/font-awesome.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/picto.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/material-design-iconic-font.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/datepicker3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.minicolors.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/bootstrap-slider.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/railscasts.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery-jvectormap.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/owl.carousel.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/slick.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/morris.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/ui.fancytree.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/daterangepicker-bs3.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/jquery.bootstrap-touchspin.css" rel="stylesheet"> -->
  <!-- <link href="css/vendor/select2.css" rel="stylesheet"> -->

  <!-- APP CSS BUNDLE [css/app/app.css]
INCLUDES:
    - The APP CSS CORE styling required by the "admin" module, also available with main.css - see below;
    - The APP CSS STANDALONE modules required by the "admin" module;
NOTE:
    - This bundle may NOT include ALL of the available APP CSS STANDALONE modules;
      It was optimised to load only what is actually used by the "admin" module;
      Other APP CSS STANDALONE modules may be available in addition to what's included with this bundle.
      See src/less/themes/admin/app.less
TIP:
    - Using bundles will improve performance by greatly reducing the number of network requests the client needs to make when loading the page. -->
  <link href="css/app/app.css" rel="stylesheet">

  <!-- App CSS CORE
This variant is to be used when loading the separate styling modules -->
  <!-- <link href="css/app/main.css" rel="stylesheet"> -->

  <!-- App CSS Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL modules are 100% compatible -->

  <!-- <link href="css/app/essentials.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/layout.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/sidebar-skins.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/navbar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/media.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/player.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/timeline.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/cover.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/chat.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/charts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/maps.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-alerts.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-background.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-buttons.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-calendar.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-progress-bars.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/colors-text.css" rel="stylesheet" /> -->
  <!-- <link href="css/app/ui.css" rel="stylesheet" /> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries
WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!-- If you don't need support for Internet Explorer <= 8 you can safely remove these -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

  <!-- Wrapper required for sidebar transitions -->
  <div class="st-container">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#sidebar-menu" data-toggle="sidebar-menu" data-effect="st-effect-3" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>

          <a href="#sidebar-chat" data-toggle="sidebar-menu" class="toggle pull-right"><i class="fa fa-comments"></i></a>

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.html" class="navbar-brand hidden-xs navbar-brand-primary">ThemeKit</a>
        </div>
        <div class="navbar-collapse collapse" id="collapse">
          <form class="navbar-form navbar-left hidden-xs" role="search">
            <div class="search-2">
              <div class="input-group">
                <input type="text" class="form-control form-control-w-150" placeholder="Search ..">
                <span class="input-group-btn">
            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
        </span>
              </div>
            </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <!-- notifications -->
            <li class="dropdown notifications updates hidden-xs hidden-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="badge badge-primary">4</span>
              </a>
              <ul class="dropdown-menu" role="notification">
                <li class="dropdown-header">Notifications</li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="images/people/50/guy-2.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="#">Adrian D.</a> posted <a href="#">a photo</a> on his timeline.
                    <br/>
                    <span class="text-caption text-muted">5 mins ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="pull-right">
                    <span class="label label-success">New</span>
                  </div>
                  <div class="media-left">
                    <img src="images/people/50/guy-6.jpg" alt="people" class="img-circle" width="30">
                  </div>
                  <div class="media-body">
                    <a href="#">Bill</a> posted <a href="#">a comment</a> on Adrian's recent <a href="#">post</a>.
                    <br/>
                    <span class="text-caption text-muted">3 hrs ago</span>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <span class="icon-block s30 bg-grey-200"><i class="fa fa-plus"></i></span>
                  </div>
                  <div class="media-body">
                    <a href="#">Mary D.</a> and <a href="#">Michelle</a> are now friends.
                    <p>
                      <span class="text-caption text-muted">1 day ago</span>
                    </p>
                    <a href="">
                      <img class="width-30 img-circle" src="images/people/50/woman-6.jpg" alt="people">
                    </a>
                    <a href="">
                      <img class="width-30 img-circle" src="images/people/50/woman-3.jpg" alt="people">
                    </a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- // END notifications -->
            <!-- messages -->
            <li class="dropdown notifications hidden-xs hidden-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>

                <span class="badge floating badge-danger">12</span>

              </a>
              <ul class="dropdown-menu">
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">5 min</span>
                    </div>
                    <h5 class="media-heading">Adrian D.</h5>

                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                    </a>
                  </div>

                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">2 days</span>
                    </div>
                    <h5 class="media-heading">Jane B.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                    </a>
                  </div>

                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">3 days</span>
                    </div>
                    <h5 class="media-heading">Andrew M.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
              </ul>
            </li>
            <!-- // END messages -->
            <!-- user -->
            <li class="dropdown user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/people/110/guy-6.jpg" alt="" class="img-circle" /> Bill<span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-wrench"></i>Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
              </ul>
            </li>
            <!-- // END user -->
            <!-- country flags -->
            <li class="dropdown flags">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/flags/Flag_of_the_United_States.svg" alt="United States" />
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu min-width-none" role="menu">
                <li class="active text-center">
                  <a href="#">
                    <img src="images/flags/Flag_of_the_United_States.svg" alt="United States" />
                  </a>
                </li>
                <li class="text-center">
                  <a href="#">
                    <img src="images/flags/Flag_of_France.svg" alt="France" />
                  </a>
                </li>
                <li class="text-center">
                  <a href="#">
                    <img src="images/flags/Flag_of_Germany.svg" alt="Germany" />
                  </a>
                </li>
                <li class="text-center">
                  <a href="#">
                    <img src="images/flags/Flag_of_Romania.svg" alt="Romania" />
                  </a>
                </li>
                <li class="text-center">
                  <a href="#">
                    <img src="images/flags/Flag_of_Poland.svg" alt="Poland" />
                  </a>
                </li>
              </ul>
            </li>
            <!-- // END country flags -->
          </ul>
        </div>
      </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar sidebar-chat right sidebar-size-2 sidebar-offset-0 chat-skin-white" id=sidebar-chat>
      <div class="split-vertical">
        <div class="chat-search">
          <input type="text" class="form-control" placeholder="Search" />
        </div>

        <ul class="chat-filter nav nav-pills ">
          <li class="active"><a href="#" data-target="li">All</a></li>
          <li><a href="#" data-target=".online">Online</a></li>
          <li><a href="#" data-target=".offline">Offline</a></li>
        </ul>
        <div class="split-vertical-body">
          <div class="split-vertical-cell">
            <div data-scrollable>
              <ul class="chat-contacts">
                <li class="online" data-user-id="1">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">

                        <div class="contact-name">Jonathan S.</div>
                        <small>"Free Today"</small>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="online away" data-user-id="2">
                  <a href="#">

                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-5.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Mary A.</div>
                        <small>"Feeling Groovy"</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="3">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left ">
                        <span class="status"></span>
                        <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Adrian D.</div>
                        <small>Busy</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="offline" data-user-id="4">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Michelle S.</div>
                        <small>Offline</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="offline" data-user-id="5">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <img src="images/people/110/woman-7.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Daniele A.</div>
                        <small>Offline</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="6">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-4.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Jake F.</div>
                        <small>Busy</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online away" data-user-id="7">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Jane A.</div>
                        <small>"Custom Status"</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="offline" data-user-id="8">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Sabine J.</div>
                        <small>"Offline right now"</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online away" data-user-id="9">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-9.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Danny B.</div>
                        <small>Be Right Back</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="10">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/woman-8.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">Elise J.</div>
                        <small>My Status</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="online" data-user-id="11">
                  <a href="#">
                    <div class="media">
                      <div class="pull-left">
                        <span class="status"></span>
                        <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                      </div>
                      <div class="media-body">
                        <div class="contact-name">John J.</div>
                        <small>My Status #1</small>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script id="chat-window-template" type="text/x-handlebars-template">

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-bill">
          <a href="#" class="close"><i class="fa fa-times"></i></a>
          <a href="#">
            <span class="pull-left">
                    <img src="{{ user_image }}" width="40">
                </span>
            <span class="contact-name">{{user}}</span>
          </a>
        </div>
        <div class="panel-body" id="chat-bill">
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">Feeling Groovy?</span>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">Yep.</span>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">This chat window looks amazing.</span>
            </div>
          </div>
          <div class="media">
            <div class="media-left">
              <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
              <span class="message">Thanks!</span>
            </div>
          </div>
        </div>
        <input type="text" class="form-control" placeholder="Type message..." />
      </div>
    </script>

    <div class="chat-window-container"></div>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher">
	
<?php include_once("sidebar.php");?>
      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content" id="content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <div class="container-fluid">

            <h1 class="text-headline page-section-heading">Statistics</h1>
            <div class="row" data-toggle="isotope">

              <div class="item col-xs-12 col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-default">Now</a>
                      <a href="#" class="btn btn-white">Yesterday</a>
                    </div>
                  </div>
                  <hr class="margin-none" />
                  <div class="panel-body text-center">
                    <h4 class="text-display-1">&dollar;129,563</h4>
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                        <div class="progress progress-mini">
                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                            <span class="sr-only">55% Complete</span>
                          </div>
                        </div>
                      </div>
                      <a href="#" class="btn btn-white">Add <i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                  
                  <ul class="list-group">
                
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <a href="#">
                            <img src="images/people/110/woman-3.jpg" alt="person" class="img-circle width-30" />
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="#" class="text-subhead">
                            <?php echo total_num_users($mysqli);?>
							</a>
                        </div>
                        <div class="media-right">
                          <div class="text-subhead"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                 
                </div>
              </div>

              <div class="item col-xs-12 col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <p class="text-body-2 text-light margin-none">Total</p>
                        <p class="text-title text-primary margin-none">12,309</p>
                      </div>
                      <div class="col-md-4 text-center">
                        <p class="text-body-2 text-light margin-none">Earned</p>
                        <p class="text-title text-success margin-none">14,309</p>
                      </div>
                      <div class="col-md-4 text-center">
                        <p class="text-body-2 text-light margin-none">Spent</p>
                        <p class="text-title text-danger margin-none">2,000</p>
                      </div>
                    </div>
                  </div>
                  <hr />
                  <div id="area-chart" data-toggle="morris-chart-area" class="height-200"></div>
                  <div class="btn-group btn-group-footer btn-group-justified">
                    <a href="#" class="btn btn-lg">
                      <i class="fa fa-bell-o"></i>
                    </a>
                    <a href="#" class="btn btn-lg">
                      <i class="fa fa-calendar"></i>
                    </a>
                    <a href="#" class="btn btn-lg">
                      <i class="fa fa-plus"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="item col-xs-12 col-md-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="media v-middle">
                      <div class="media-left">
                        <a href="#">
                          <img src="images/people/110/guy-6.jpg" alt="" class="img-circle width-40" />
                        </a>
                      </div>
                      <div class="media-body">
                        <a href="#" class="text-subhead link-text-color">
							Adrian Demian
						</a>
                        <div class="text-caption text-light">Earned: &dollar;12,300</div>
                      </div>
                      <div class="media-right">
                        <div class="width-100 text-right">
                          <a href="#" class="btn btn-primary btn-sm"> View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="margin-none" />
                  <div id="bar-chart" data-toggle="morris-chart-bar" class="height-150"></div>
                </div>
              </div>

              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                  <div class="panel-body">
                    <h3 class="text-center text-headline margin-none">
				
                      Number of Users:<?php echo total_num_users($mysqli);?>
                      <span class="text-primary" value=""></span>
                    </h3>
                  </div>
                  <hr/>
                  <div class="panel-body">
                    <div data-percent="<?php echo total_num_users($mysqli);?>" data-size="95" class="easy-pie inline-block primary" data-scale-color="false" data-track-color="#efefef" data-line-width="6">
                      <div class="value text-center">
                        <span class="strong"><i class="icon-graph-up-1 fa-3x text-default"></i></span>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
					
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-6">
                        <h4 class="text-headline margin-none">291</h4>
                        <p class="text-light"><i class="fa fa-circle-o text-success fa-fw"></i> Subscribers</p>
                      </div>
                      <div class="col-xs-6">
                        <h4 class="text-headline margin-none">17</h4>
                        <p class="text-light"><i class="fa fa-circle-o text-danger fa-fw"></i> Unsubscribers</p>
                      </div>
                    </div>

                    <div class="progress progress-mini">
                      <div class="progress-bar progress-bar-success" style="width: 85%">
                        <span class="sr-only">35% Complete (info)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 15%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <div class="text-right">
                      <a href="#" class="btn btn-white">View Activity</a>
                    </div>
                  </div>

                </div>
              </div>

              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="world-map-markers" data-toggle="vector-world-map-markers" class="overflow-hidden height-180"></div>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="width-30">
                            <i class="fa fa-circle text-red-400"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          United States
                        </div>
                        <div class="media-right">
                          <div class="text-right">
                            <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 184, 357, 297, 591, 196, 108, 466, 186 ]"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="width-30">
                            <i class="fa fa-circle text-blue-400"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          Europe
                        </div>
                        <div class="media-right">
                          <div class="text-right">
                            <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 184, 357, 297, 591, 196, 108, 466, 186 ]"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="media v-middle">
                        <div class="media-left">
                          <div class="width-30">
                            <i class="fa fa-circle text-grey-400"></i>
                          </div>
                        </div>
                        <div class="media-body">
                          Asia
                        </div>
                        <div class="media-right">
                          <div class="text-right">
                            <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 184, 357, 297, 591, 196, 108, 466, 186 ]"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="row text-center">
                      <div class="col-md-6">
                        <h4 class="margin-none">Gross Revenue</h4>
                        <p class="text-display-1 text-warning margin-none">102.4k</p>
                      </div>
                      <div class="col-md-6">
                        <h4 class="margin-none">Net Revenue</h4>
                        <p class="text-display-1 text-success margin-none">55k</p>
                      </div>
                    </div>
                  </div>
                  <hr/>
                  <div class="panel-body">
                    <div id="line-holder" data-toggle="flot-chart-lines-3" class="flotchart-holder height-200"></div>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default text-center">
                  <div class="panel-body">
                    <h4 class="text-headline">Overall Performance</h4>
                    <p class="text-h2 text-primary">
                      <strong>+309</strong>
                    </p>
                  </div>
                  <hr class="margin-none" />
                  <div class="panel-body">
                    <div class="sparkline-bar" sparkHeight="66">
                      <span class="hide">0:10,7:3,5:5,6:4,3:7,7:3,5:5,6:4,2:8,3:7,7:3,5:5,0:10</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="media sparkline-stats">
                    <div class="pull-left">
                      <div class="panel-body">
                        <div class="sparkline-bar" data-colors="true">
                          <span>6,5,8,6,1</span>
                        </div>
                      </div>
                    </div>
                    <div class="media-body">
                      <ul class="list-group">
                        <li class="list-group-item"><i class="fa fa-fw fa-square text-primary"></i>
                          <strong>5,931</strong> Visits</li>
                        <li class="list-group-item"><i class="fa fa-fw fa-square text-success"></i>
                          <strong>402</strong> Conversions</li>
                        <li class="list-group-item"><i class="fa fa-fw fa-square text-danger"></i>
                          <strong>402</strong> Conversions</li>
                        <li class="list-group-item"><i class="fa fa-fw fa-square text-muted"></i>
                          <strong>15,120</strong> Pageviews</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div id="chart_horizontal_bars" data-toggle="flot-chart-horizontal-bars" class="flotchart-holder height-200"></div>
                  </div>
                </div>
              </div>
            </div>

            <h1 class="text-headline page-section-heading">User</h1>
            <div class="row" data-toggle="isotope">
              <div class="item col-md-4 col-xs-12">
                <div class="panel panel-default">
                  <div class="profile-block">
                    <div class="cover overlay cover-image-full">
                      <img src="images/place1-full.jpg" alt="cover">
                      <div class="overlay overlay-full overlay-bg-black">
                        <div class="v-top v-spacing-2">
                          <a href="#" class="icon pull-right">
                            <i class="fa fa-comment"></i>
                          </a>
                          <div class="text-headline text-overlay">Adrian Demian</div>
                          <p class="text-overlay">User Interface Designer</p>
                        </div>
                        <div class="v-bottom">
                          <a href="#">
                            <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle avatar" />
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="profile-icons">
                      <span><i class="fa fa-users"></i> 372</span> <span><i class="fa fa-photo"></i> 43</span>
                      <span><i class="fa fa-video-camera"></i> 3 </span>
                    </div>
                  </div>
                </div>

              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default widget-user-1 text-center">
                  <div class="avatar">
                    <img src="images/people/110/guy-5.jpg" alt="" class="img-circle">
                    <h3>Adrian Demian</h3>
                    <a href="#" class="btn btn-success">Following <i class="fa fa-check-circle fa-fw"></i></a>
                  </div>
                  <div class="profile-icons margin-none">
                    <span><i class="fa fa-users"></i> 372</span>
                    <span><i class="fa fa-photo"></i> 43</span>
                    <span><i class="fa fa-video-camera"></i> 3</span>
                  </div>
                  <div class="panel-body">
                    <div class="expandable expandable-indicator-white expandable-trigger">
                      <div class="expandable-content">
                        <p>Hi! I'm Adrian the Senior UI Designer at
                          <strong>MOSAICPRO</strong>. We hope you enjoy the design and quality of Social.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut autem delectus dolorum necessitatibus neque odio quam quas qui quod soluta? Aliquid eius esse minima.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="media">
                      <div class="pull-left">
                        <img src="images/people/50/guy-8.jpg" alt="people" class="media-object img-circle" />
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5"><a href="#">Adrian D.</a></h4>
                        <div class="profile-icons">
                          <span><i class="fa fa-users"></i> 372</span>
                          <span><i class="fa fa-photo"></i> 43</span>
                          <span><i class="fa fa-video-camera"></i> 3</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-body">
                    <p class="common-friends">Common Friends</p>
                    <div class="user-friend-list">
                      <a href="#">
                        <img src="images/people/50/guy-9.jpg" alt="people" class="img-circle" />
                      </a>
                      <a href="#">
                        <img src="images/people/50/guy-3.jpg" alt="people" class="img-circle" />
                      </a>
                      <a href="#">
                        <img src="images/people/50/woman-7.jpg" alt="people" class="img-circle" />
                      </a>
                      <a href="#">
                        <img src="images/people/50/woman-1.jpg" alt="people" class="img-circle" />
                      </a>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-default btn-sm">Follow <i class="fa fa-share"></i></a>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-heading panel-heading-gray">
                    <div class="pull-right">
                      <a href="#" class="btn btn-primary btn-xs">Add <i class="fa fa-plus"></i></a>
                    </div>
                    <i class="icon-user-1"></i> Friends
                  </div>
                  <div class="panel-body">
                    <ul class="img-grid">
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-6.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/woman-3.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-2.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-9.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/woman-9.jpg" alt="image" />
                        </a>
                      </li>
                      <li class="clearfix">
                        <a href="#">
                          <img src="images/people/110/guy-4.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-1.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/woman-4.jpg" alt="image" />
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <img src="images/people/110/guy-6.jpg" alt="image" />
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <!-- User Box -->
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="media user-box">
                      <a class="media-left" href="#">
                        <img src="images/people/50/guy-5.jpg" class="media-object img-circle" alt="Avatar Photo" />
                      </a>
                      <div class="media-body">
                        <h4 class="media-heading margin-v-5">Jonathan Smith</h4>
                        <p class="text-uppercase text-muted">Works at Mosaicpro</p>
                      </div>

                      <div class="media-right">
                        <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-envelope"></i></a>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- // User Box -->
              </div>
            </div>

            <h1 class="text-headline page-section-heading">Weather</h1>

            <div class="row" data-toggle="isotope">
              <div class="item col-lg-4 col-md-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="weather-svg">
                    <div class="list">
                      <div class="list-item">
                        <div class="text-h6">Today</div>
                        <svg version="1.1" id="cloudDrizzleSunFill" class="climacon climacon_cloudDrizzleSunFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                />
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999" />
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999" />
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                              />
                            </g>

                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                              />
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                              />
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzleSunFill -->

                      </div>
                      <div class="list-item">
                        <div class="text-h6">Tomorrow</div>
                        <svg version="1.1" id="sun" class="climacon climacon_sun" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                          <clipPath id="svgs/sunFillClip">
                            <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z" />
                          </clipPath>
                          <g class="climacon_iconWrap climacon_iconWrap-sun">
                            <g class="climacon_componentWrap climacon_componentWrap-sun">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z" />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"
                                />
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999" />
                              </g>
                            </g>
                          </g>
                        </svg>
                        <!-- sun -->
                      </div>
                      <div class="list-item">
                        <div class="text-h6">Saturday</div>

                        <svg version="1.1" id="cloudRainFill" class="climacon climacon_cloudRainFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainFill">
                            <g class="climacon_componentWrap climacon_componentWrap-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                              />
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                              />
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                              />
                            </g>
                          </g>
                        </svg>
                        <!-- cloudRainFill -->

                      </div>
                    </div>
                    <hr class="margin-none" />
                    <div class="today text-center">
                      <svg version="1.1" id="cloudDrizzleSunFill" class="climacon climacon_cloudDrizzleSunFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                        <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                          <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                            <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                              />
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999" />
                              <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999" />
                            </g>
                          </g>
                          <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                            />
                          </g>

                          <g class="climacon_componentWrap climacon_componentWrap_cloud">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                            />
                            <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                            />
                          </g>
                        </g>
                      </svg>
                      <!-- cloudDrizzleSunFill -->

                      <div class="clearfix"></div>
                      <div class="details">
                        Today
                        <strong class="pull-right"> 10&deg; C </strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-6 col-xs-12">
                <div class="panel panel-default weather-svg">
                  <div class="list">
                    <div class="list-item">
                      <div class="text-h6">Today</div>
                      <svg version="1.1" id="cloudDrizzleSunFill" class="climacon climacon_cloudDrizzleSunFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                        <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                          <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                            <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                              />
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999" />
                              <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999" />
                            </g>
                          </g>
                          <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                            />
                          </g>

                          <g class="climacon_componentWrap climacon_componentWrap_cloud">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                            />
                            <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                            />
                          </g>
                        </g>
                      </svg>
                      <!-- cloudDrizzleSunFill -->

                    </div>
                    <div class="list-item">
                      <div class="text-h6">Tomorrow</div>
                      <svg version="1.1" id="sun" class="climacon climacon_sun" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                        <clipPath id="svgs/sunFillClip">
                          <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z" />
                        </clipPath>
                        <g class="climacon_iconWrap climacon_iconWrap-sun">
                          <g class="climacon_componentWrap climacon_componentWrap-sun">
                            <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z" />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"
                              />
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                              <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999" />
                            </g>
                          </g>
                        </g>
                      </svg>
                      <!-- sun -->
                    </div>
                    <div class="list-item">
                      <div class="text-h6">Saturday</div>

                      <svg version="1.1" id="cloudRainFill" class="climacon climacon_cloudRainFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                        <g class="climacon_iconWrap climacon_iconWrap-cloudRainFill">
                          <g class="climacon_componentWrap climacon_componentWrap-rain">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                            />
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                            />
                          </g>
                          <g class="climacon_componentWrap climacon_componentWrap_cloud">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                            />
                            <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                            />
                          </g>
                        </g>
                      </svg>
                      <!-- cloudRainFill -->

                    </div>
                  </div>
                  <div class="cover overlay cover-image-full">
                    <img src="images/place1-full.jpg" alt="cover">
                    <div class="overlay overlay-full overlay-bg-black">
                      <div class="v-top">
                        <div class="text-h5">
                          <span class="fa fa-fw fa-star text-primary"></span>
                          <span class="fa fa-fw fa-star text-primary"></span>
                          <span class="fa fa-fw fa-star text-primary"></span>
                          <span class="fa fa-fw fa-star-o text-white"></span>
                          <span class="fa fa-fw fa-star-o text-white"></span>
                        </div>
                      </div>
                      <div class="v-center today">
                        <svg version="1.1" id="cloudDrizzleSunFillAlt" class="climacon climacon_cloudDrizzleSunFillAlt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFillAlt">
                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                              <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                />
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999" />
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999" />
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"
                              />
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"
                              />
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                              />
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                              />
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzleSunFillAlt -->

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-lg-4 col-md-6 col-xs-12">
                <div class="panel panel-default weather-svg">
                  <div class="cover overlay cover-image-full">
                    <img src="images/place2-full.jpg" alt="cover">
                    <div class="overlay overlay-full overlay-bg-black">
                      <div class="v-top">
                        <div class="pull-right">
                          <a href="#"><i class="fa fa-cog"></i></a>
                        </div>
                        <a href="#">Miami, Florida, US</a>
                        <p class="small">24&deg; C - Sunny</p>
                      </div>
                      <div class="v-center today">
                        <svg version="1.1" id="sunFill" class="climacon climacon_sunFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                          <g class="climacon_iconWrap climacon_iconWrap-sunFill">
                            <g class="climacon_componentWrap climacon_componentWrap-sun">
                              <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z" />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"
                                />
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap_sunBody">
                                <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999" />
                                <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="50.034" cy="50" r="7.999" />
                              </g>
                            </g>
                          </g>
                        </svg>
                        <!-- sunFill -->
                      </div>
                    </div>
                    <div class="overlay overlay-bg-black padding-none">
                      <div class="list">
                        <div class="list-item">
                          <div class="text-h6">Mon</div>
                          <svg version="1.1" id="cloudDrizzleSunFill" class="climacon climacon_cloudDrizzleSunFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                  />
                                </g>
                                <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999" />
                                  <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999" />
                                </g>
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                                />
                              </g>

                              <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                                />
                                <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                                />
                              </g>
                            </g>
                          </svg>
                          <!-- cloudDrizzleSunFill -->

                        </div>
                        <div class="list-item">
                          <div class="text-h6">Tue</div>
                          <svg version="1.1" id="sun" class="climacon climacon_sun" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                            <clipPath id="svgs/sunFillClip">
                              <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z" />
                            </clipPath>
                            <g class="climacon_iconWrap climacon_iconWrap-sun">
                              <g class="climacon_componentWrap climacon_componentWrap-sun">
                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z" />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"
                                  />
                                </g>
                                <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999" />
                                </g>
                              </g>
                            </g>
                          </svg>
                          <!-- sun -->
                        </div>
                        <div class="list-item">
                          <div class="text-h6">Wed</div>

                          <svg version="1.1" id="cloudRainFill" class="climacon climacon_cloudRainFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudRainFill">
                              <g class="climacon_componentWrap climacon_componentWrap-rain">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                                />
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                                />
                                <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                                />
                              </g>
                            </g>
                          </svg>
                          <!-- cloudRainFill -->

                        </div>
                        <div class="list-item">
                          <div class="text-h6">Thu</div>
                          <svg version="1.1" id="cloudDrizzleSunFill" class="climacon climacon_cloudDrizzleSunFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleSunFill">
                              <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud">
                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"
                                  />
                                </g>
                                <g class="climacon_componentWrap climacon_componentWrap-sunBody">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999" />
                                  <circle class="climacon_component climacon_component-fill climacon_component-fill_sunBody" fill="#FFFFFF" cx="58.033" cy="41.612" r="7.999" />
                                </g>
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap-drizzle">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"
                                />
                              </g>

                              <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                                />
                                <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                                />
                              </g>
                            </g>
                          </svg>
                          <!-- cloudDrizzleSunFill -->

                        </div>
                        <div class="list-item">
                          <div class="text-h6">Fri</div>
                          <svg version="1.1" id="sun" class="climacon climacon_sun" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                            <clipPath id="svgs/sunFillClip">
                              <path d="M0,0v100h100V0H0z M50.001,57.999c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C57.999,54.417,54.418,57.999,50.001,57.999z" />
                            </clipPath>
                            <g class="climacon_iconWrap climacon_iconWrap-sun">
                              <g class="climacon_componentWrap climacon_componentWrap-sun">
                                <g class="climacon_componentWrap climacon_componentWrap-sunSpoke">
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-east" d="M72.03,51.999h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S73.136,51.999,72.03,51.999z" />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northEast" d="M64.175,38.688c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L64.175,38.688z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M50.034,34.002c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C52.034,33.106,51.136,34.002,50.034,34.002z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-northWest" d="M35.893,38.688l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C37.94,39.469,36.674,39.469,35.893,38.688z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-west" d="M34.034,50c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C33.14,48,34.034,48.896,34.034,50z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southWest" d="M35.893,61.312c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L35.893,61.312z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-south" d="M50.034,65.998c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C48.034,66.893,48.929,65.998,50.034,65.998z"
                                  />
                                  <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-southEast" d="M64.175,61.312l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C62.126,60.531,63.392,60.531,64.175,61.312z"
                                  />
                                </g>
                                <g class="climacon_componentWrap climacon_componentWrap_sunBody" clip-path="url(#sunFillClip)">
                                  <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="50.034" cy="50" r="11.999" />
                                </g>
                              </g>
                            </g>
                          </svg>
                          <!-- sun -->
                        </div>
                        <div class="list-item">
                          <div class="text-h6">Sat</div>

                          <svg version="1.1" id="cloudRainFill" class="climacon climacon_cloudRainFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudRainFill">
                              <g class="climacon_componentWrap climacon_componentWrap-rain">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                                />
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                                />
                                <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                                />
                              </g>
                            </g>
                          </svg>
                          <!-- cloudRainFill -->

                        </div>
                        <div class="list-item">
                          <div class="text-h6">Sun</div>

                          <svg version="1.1" id="cloudRainFill" class="climacon climacon_cloudRainFill" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15 15 70 70" enable-background="new 15 15 70 70" xml:space="preserve">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudRainFill">
                              <g class="climacon_componentWrap climacon_componentWrap-rain">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"
                                />
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"
                                />
                              </g>
                              <g class="climacon_componentWrap climacon_componentWrap_cloud">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"
                                />
                                <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"
                                />
                              </g>
                            </g>
                          </svg>
                          <!-- cloudRainFill -->

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h2 class="page-section-heading">Tables &amp; lists</h2>

            <div class="row" data-toggle="isotope">
              <div class="item col-md-6 col-sm-6 col-xs-12">
                <!-- Leaderboard -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">Top 5</h4>
                  </div>
                  <table class="table table-leaderboard margin-none">
                    <tbody>
                      <tr>
                        <td width="20">1</td>
                        <td><a href="#"><i class="fa fa-flag text-muted"></i> Jonathan Smith</a></td>
                        <td><span class="pull-right">14,200</span></td>
                      </tr>
                      <tr>
                        <td width="20">2</td>
                        <td><a href="#">Michelle S.</a></td>
                        <td><span class="pull-right">11,591</span></td>
                      </tr>
                      <tr>
                        <td width="20">3</td>
                        <td><a href="#">Anthony Smith</a></td>
                        <td><span class="pull-right">10,232</span></td>
                      </tr>
                      <tr>
                        <td width="20">4</td>
                        <td><a href="#">First Smith</a></td>
                        <td><span class="pull-right">9,002</span></td>
                      </tr>
                      <tr>
                        <td width="20">5</td>
                        <td><a href="#">Second Smith</a></td>
                        <td><span class="pull-right">8,694</span></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="panel-footer padding-none">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="score-block">
                          <div class="title">Min</div>
                          <div class="score">126</div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="score-block">
                          <div class="title">Max</div>
                          <div class="score">11,421</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- // Leaderboard -->
              </div>
              <div class="item col-md-6 col-xs-12">
                <!-- Notifications -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="pull-right ">
                      <a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog"></i></a>
                    </div>
                    <h4 class="panel-title">Notifications</h4>
                  </div>
                  <ul class="notifications-timeline">
                    <li>
                      <span class="date">24 Aug</span>
                      <span class="circle orange"></span>
                      <span class="content"><a href="#">Jonathan</a> has a due payment of $299</span>
                    </li>
                    <li>
                      <span class="date">13 Aug</span>
                      <span class="circle blue"></span>
                      <span class="content"><a href="#">Michelle</a> became a PRO Member.</span>
                    </li>
                    <li>
                      <span class="date">10 Aug</span>
                      <span class="circle gray-light"></span>
                      <span class="content"><a href="#">Jonathan</a> has registered.</span>
                    </li>
                    <li>
                      <span class="date">1 Aug</span>
                      <span class="circle gray"></span>
                      <span class="content">This is a basic text notification.</span>
                    </li>
                    <li>
                      <span class="date">27 Jul</span>
                      <span class="circle gray-light"></span>
                      <span class="content"><a href="#">Jonathan</a> has a due payment of $299</span>
                    </li>
                  </ul>
                </div>
                <!-- // Notifications -->
              </div>
              <div class="item col-md-6 col-xs-12">
                <div class="panel panel-default">
                  <table class="table table-striped margin-none">
                    <thead>
                      <tr>
                        <th>Box office</th>
                        <th class="text-right">Cash</th>
                        <th class="text-right width-100">Trend</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <strong class="text-muted">1.</strong> <a href="#" class="text-primary">Frozen</a></td>
                        <td class="text-right">&euro;8,718,939</td>
                        <td class="text-right">
                          <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 484, 457, 397, 591, 496, 508, 366, 196 ]"></div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <strong class="text-muted">2.</strong> <a href="#" class="text-primary">The Hobbit 2</a></td>
                        <td class="text-right">&euro;7,800,000</td>
                        <td class="text-right">
                          <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 363, 371, 221, 258, 318, 582, 536, 312 ]"></div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <strong class="text-muted">3.</strong> <a href="#" class="text-primary">The Wolf of Wall</a></td>
                        <td class="text-right">&euro;5,671,036</td>
                        <td class="text-right">
                          <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 315, 568, 323, 517, 520, 368, 311, 284 ]"></div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <strong class="text-muted">4.</strong> <a href="#" class="text-primary">Iron Man 3</a></td>
                        <td class="text-right">&euro;409,013,994</td>
                        <td class="text-right">
                          <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 188, 522, 457, 246, 323, 456, 429, 478 ]"></div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <strong class="text-muted">5.</strong> <a href="#" class="text-primary">Catching Fire</a></td>
                        <td class="text-right">&euro;398,327,026</td>
                        <td class="text-right">
                          <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 366, 589, 556, 312, 361, 523, 281, 558 ]"></div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <strong class="text-muted">6.</strong> <a href="#" class="text-primary">Despicable Me</a></td>
                        <td class="text-right">&euro;367,835,345</td>
                        <td class="text-right">
                          <div class="sparkline-line width-100" sparkHeight="20" sparkWidth="100%" data-data="[ 318, 586, 529, 298, 109, 436, 512, 184 ]"></div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="item col-sm-6 col-xs-12">
                <!-- Recent tickets -->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">Recent Tickets</h4>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item">
                      <span class="label label-default">#8010</span> &nbsp;
                      <div class="pull-right">
                        <span class="text-muted  text-small">2 hrs ago</span>
                      </div>
                      <a href="#">How can I use UI Kit?</a>
                    </li>
                    <li class="list-group-item">
                      <span class="label label-default">#8010</span> &nbsp;
                      <div class="pull-right">
                        <span class="text-muted  text-small">2 hrs ago</span>
                      </div>

                      <a href="#">How can I use UI Kit?</a>
                    </li>
                    <li class="list-group-item">
                      <span class="label label-default">#8010</span> &nbsp;
                      <div class="pull-right">
                        <span class="text-muted  text-small">2 hrs ago</span>
                      </div>

                      <a href="#">How can I use UI Kit?</a>
                    </li>
                    <li class="list-group-item">
                      <span class="label label-default">#8010</span> &nbsp;
                      <div class="pull-right">
                        <span class="text-muted  text-small">2 hrs ago</span>
                      </div>

                      <a href="#">How can I use UI Kit?</a>
                    </li>
                    <li class="list-group-item text-right">
                      <a class="btn btn-sm btn-danger" href="#">Go to support <i class="fa fa-fw fa-arrow-right"></i></a>
                    </li>
                  </ul>
                </div>
                <!-- // Recent tickets -->
              </div>
              <div class="item col-md-6 col-lg-3 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="media-activity">
                      <div class="media">
                        <i class="pull-left fa fa-globe fa-fw"></i>
                        <div class="media-body">
                          <span class="title">Visited Miami, FL</span>
                          <span class="time">3 hours ago</span>
                        </div>
                      </div>
                      <div class="media">
                        <i class="pull-left fa fa-camera  fa-fw"></i>
                        <div class="media-body">
                          <span class="title">Added 5 Photos</span>
                          <span class="time">4 hours ago</span>
                        </div>
                      </div>
                      <div class="media">
                        <i class="pull-left fa fa-users  fa-fw"></i>
                        <div class="media-body">
                          <span class="title">Samantha is your friend</span>
                          <span class="time">2 days ago</span>
                        </div>
                      </div>
                      <div class="media">
                        <i class="pull-left fa fa-bell-o  fa-fw"></i>
                        <div class="media-body">
                          <span class="title">Bill got engaged with Michelle</span>
                          <span class="time">3 days ago</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h1 class="text-headline page-section-heading">Media</h1>

            <div class="row" data-toggle="isotope">
              <div class="item col-md-4 col-xs-12">
                <div class="panel panel-default gallery-grid">
                  <div class="cover overlay hover cover-image-full">
                    <img src="images/place1-full.jpg" alt="cover">
                    <a href="#showImageModal" data-toggle="modal" class="overlay overlay-full overlay-hover overlay-bg-black">
                      <span class="v-center">
                <span class="btn btn-white btn-lg btn-circle"><i class="fa fa-plus"></i></span>
                      </span>
                    </a>
                  </div>
                  <div class="panel-body">
                    <div class="expandable expandable-indicator-white expandable-trigger">
                      <div class="expandable-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolore expedita facere fuga ipsum laboriosam minima minus molestias quaerat qui repudiandae, similique vitae. Animi fuga minima nemo, nulla officia quam!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aut eligendi ex, explicabo hic impedit maxime necessitatibus nobis porro sapiente sint, vitae. Facere itaque nihil nostrum pariatur quo temporibus unde.</p>
                      </div>
                    </div>
                  </div>
                  <div class="btn-group btn-group-footer btn-group-justified">
                    <a href="#" class="btn"><i class="fa fa-heart"></i> Like</a>
                    <a href="#" class="btn"><i class="fa fa-user"></i> Share</a>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-xs-12">
                <div class="panel panel-default">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/50522981?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="100%" height="271" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </div>

                  <div class="panel-body">
                    <p class="margin-none">Vimeo Video</p>
                  </div>
                  <div class="btn-group btn-group-footer btn-group-justified">
                    <a href="#" class="btn"><i class="fa fa-heart"></i> Like</a>
                    <a href="#" class="btn"><i class="fa fa-user"></i> Share</a>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-xs-12">
                <div class="panel panel-default">
                  <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="//www.youtube-nocookie.com/embed/Ycv5fNd4AeM?rel=0"></iframe>
                  </div>

                  <div class="panel-body">
                    <p class="margin-none">Youtube Video</p>
                  </div>
                  <div class="btn-group btn-group-footer btn-group-justified">
                    <a href="#" class="btn"><i class="fa fa-heart"></i> Like</a>
                    <a href="#" class="btn"><i class="fa fa-user"></i> Share</a>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <a href="#" class="h5 margin-none">Climb a Mountain</a>
                    <div class="text-muted">
                      <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                    </div>
                  </div>
                  <a href="#">
                    <img src="images/place1-full.jpg" alt="image" class="img-responsive" />
                  </a>
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                    <div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-primary btn-xs">read</a>
                      </div>

                      <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <a href="#" class="h5 margin-none">Vegetarian Pizza</a>
                    <p class="text-muted"><i class="fa fa-calendar"></i> 24/10/2014</p>
                    <span class="fa fa-star text-primary"></span>
                    <span class="fa fa-star text-primary"></span>
                    <span class="fa fa-star text-primary"></span>
                    <span class="fa fa-star text-primary"></span>
                    <span class="fa fa-star-o"></span>
                  </div>
                  <a href="#">
                    <img src="images/food1-full.jpg" alt="image" class="img-responsive" />
                  </a>
                  <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                    <div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-primary btn-xs">read</a>
                      </div>
                      <a href="#" class="text-muted"> <i class="fa fa-comments"></i> 6</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="pull-right">
                      <a href="#" class="btn btn-success btn-xs"><i class="fa fa-check-circle"></i></a>
                    </div>
                    <a href="#" class="h5">Win a Holiday</a>
                    <div class="text-muted">
                      <small><i class="fa fa-calendar"></i> 24/10/2014</small>
                    </div>
                  </div>
                  <a href="#">
                    <img src="images/place2-full.jpg" alt="image" class="img-responsive" />
                  </a>
                  <ul class="icon-list icon-list-block">
                    <li><i class="fa fa-calendar fa-fw"></i> <a href="#">1 Week</a></li>
                    <li><i class="fa fa-users fa-fw"></i> <a href="#"> 2 People</a></li>
                    <li><i class="fa fa-map-marker fa-fw"></i> <a href="#">Miami, FL, USA</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="page-section-heading">
              <h1 class="text-display-1">How much should you pay for this?</h1>

              <p class="lead">A lot less than you expect.</p>
            </div>
            <div class="row" data-toggle="isotope">
              <div class="item col-md-4 col-xs-12">
                <!-- Pricing -->
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <span class="pull-right label label-success">&dollar; 0</span>
                    <h3 class="margin-none text-headline">Free</h3>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Free Signup</li>
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Email Address</li>
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Friends Management</li>
                  </ul>
                  <div class="panel-body text-center">
                    <button type="submit" class="btn btn-default">Purchase <i class="fa fa-shopping-cart"></i></button>
                  </div>
                </div>
                <!-- // Pricing -->
              </div>
              <div class="item col-md-4 col-xs-12">
                <!-- Pricing -->
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <span class="pull-right label label-default">&dollar; 25</span>
                    <h3 class="margin-none text-headline">Individual</h3>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Free Signup</li>
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Email Address</li>
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Friends Management</li>
                  </ul>
                  <div class="panel-body text-center">
                    <button type="submit" class="btn btn-default">Purchase <i class="fa fa-shopping-cart"></i></button>
                  </div>
                </div>
                <!-- // Pricing -->
              </div>
              <div class="item col-md-4 col-xs-12">
                <!-- Pricing -->
                <div class="panel panel-default">
                  <div class="panel-body text-center">
                    <span class="pull-right label label-primary">&dollar; 50</span>
                    <h3 class="margin-none text-headline">Company</h3>
                  </div>
                  <ul class="list-group">
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Free Signup</li>
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Email Address</li>
                    <li class="list-group-item"><i class="fa fa-check fa-fw text-muted"></i> Friends Management</li>
                  </ul>
                  <div class="panel-body text-center">
                    <button type="submit" class="btn btn-default">Purchase <i class="fa fa-shopping-cart"></i></button>
                  </div>
                </div>
                <!-- // Pricing -->
              </div>
            </div>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

    <!-- Footer -->
    <footer class="footer">
      <strong>Matrimony</strong>  &copy; Copyright 2018
    </footer>
    <!-- // Footer -->

  </div>
  <!-- /st-container -->

  <!-- Modal -->
  <div class="modal fade image-gallery-item" id="showImageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-header">
        On my way to the top
      </div>
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      <img class="img-responsive" src="images/place1-full.jpg" alt="Place">
    </div>
  </div>

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "admin",
      skins: {
        "default": {
          "primary-color": "#3498db"
        }
      }
    };
  </script>

  <!-- Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
  <script src="js/vendor/all.js"></script>

  <!-- Vendor Scripts Standalone Libraries -->
  <!-- <script src="js/vendor/core/all.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.js"></script> -->
  <!-- <script src="js/vendor/core/bootstrap.js"></script> -->
  <!-- <script src="js/vendor/core/breakpoints.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.nicescroll.js"></script> -->
  <!-- <script src="js/vendor/core/isotope.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/packery-mode.pkgd.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.grid-a-licious.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.cookie.js"></script> -->
  <!-- <script src="js/vendor/core/jquery-ui.custom.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/handlebars.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.hotkeys.js"></script> -->
  <!-- <script src="js/vendor/core/load_image.js"></script> -->
  <!-- <script src="js/vendor/core/jquery.debouncedresize.js"></script> -->
  <!-- <script src="js/vendor/tables/all.js"></script> -->
  <!-- <script src="js/vendor/forms/all.js"></script> -->
  <!-- <script src="js/vendor/media/all.js"></script> -->
  <!-- <script src="js/vendor/player/all.js"></script> -->
  <!-- <script src="js/vendor/charts/all.js"></script> -->
  <!-- <script src="js/vendor/charts/flot/all.js"></script> -->
  <!-- <script src="js/vendor/charts/easy-pie/jquery.easypiechart.js"></script> -->
  <!-- <script src="js/vendor/charts/morris/all.js"></script> -->
  <!-- <script src="js/vendor/charts/sparkline/all.js"></script> -->
  <!-- <script src="js/vendor/maps/vector/all.js"></script> -->
  <!-- <script src="js/vendor/tree/jquery.fancytree-all.js"></script> -->
  <!-- <script src="js/vendor/nestable/jquery.nestable.js"></script> -->
  <!-- <script src="js/vendor/angular/all.js"></script> -->

  <!-- App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
  <script src="js/app/app.js"></script>

  <!-- App Scripts Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->

  <!-- <script src="js/app/essentials.js"></script> -->
  <!-- <script src="js/app/layout.js"></script> -->
  <!-- <script src="js/app/sidebar.js"></script> -->
  <!-- <script src="js/app/media.js"></script> -->
  <!-- <script src="js/app/player.js"></script> -->
  <!-- <script src="js/app/timeline.js"></script> -->
  <!-- <script src="js/app/chat.js"></script> -->
  <!-- <script src="js/app/maps.js"></script> -->
  <!-- <script src="js/app/charts/all.js"></script> -->
  <!-- <script src="js/app/charts/flot.js"></script> -->
  <!-- <script src="js/app/charts/easy-pie.js"></script> -->
  <!-- <script src="js/app/charts/morris.js"></script> -->
  <!-- <script src="js/app/charts/sparkline.js"></script> -->

</body>

</html>