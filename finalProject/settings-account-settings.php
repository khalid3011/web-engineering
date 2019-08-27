<?php require_once "php/checkLogin.php" ?>
<?php require_once "php/userDetails.php" ?>
<?php require_once "php/settingsAccount.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Personal Settings</title>

  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Main Font -->
  <script src="js/webfontloader.min.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ['Roboto:300,400,500,700:latin']
      }
    });
  </script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

  <!-- Main Styles CSS -->
  <link rel="stylesheet" type="text/css" href="css/main.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.min.css">


</head>

<body>


<header class="header fixed-top" id="site-header">

    <a href="index.php" class="page-title">
        <h6>Diu Project Store</h6>
    </a>



    <div class="header-content-wrapper">
        <form class="search-bar w-search notification-list friend-requests invisible">
            <div class="form-group with-button is-empty">
                <input class="form-control js-user-search selectized" placeholder="Search here people or pages..." type="text" tabindex="-1" style="display: none;" value=""><div class="selectize-control form-control js-user-search multi"><div class="selectize-input items not-full has-options"><input type="text" autocomplete="off" tabindex="" placeholder="Search here people or pages..." style="width: 229.854px;"></div><div class="selectize-dropdown multi form-control js-user-search" style="display: none; width: 0px; top: 70px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                <button>
                    <svg class="olymp-magnifying-glass-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-magnifying-glass-icon"></use></svg>
                </button>
                <span class="material-input"></span></div>
        </form>

        <a href="index.php" class="link-find-friend">Home</a>
        <a href="newsfeed.php" class="link-find-friend">Newsfeed</a>
        <a href="projects.php" class="link-find-friend">Projects</a>

        <div class="control-block">
            <div class="author-page author vcard inline-items more">
                <div class="author-thumb">
                    <img alt="author" src="<?php echo getUserImg(getCurrentUserId()); ?>" class="avatar"">
                    <div class="more-dropdown more-with-triangle">
                        <div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-mcs-theme="dark" data-ps-id="73f8849c-78c0-eee7-ee7e-ba4432b2bbcc">
                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Your Account</h6>
                            </div>

                            <ul class="account-settings">
                                <li>
                                    <a href="profile-timeline.php">

                                        <svg class="olymp-menu-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                                        </svg>

                                        <span>View Your Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="settings-personal-info.php">
                                        <svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FAV PAGE">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use>
                                        </svg>

                                        <span>Profile Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="php/logout.php">
                                        <svg class="olymp-logout-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-logout-icon"></use>
                                        </svg>

                                        <span>Log Out</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="ui-block-title ui-block-title-small">
                                <h6 class="title">Projects</h6>
                            </div>

                            <ul class="account-settings">
                                <li>
                                    <a href="start-project.php">

                                        <svg class="olymp-menu-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-add-to-conversation-icon"></use>
                                        </svg>

                                        <span>Start a project</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="project-list.php">
                                        <svg class="olymp-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FAV PAGE">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-star-icon"></use>
                                        </svg>

                                        <span>Your projects</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
                <a href="javascript:void(0)" class="author-name fn">
                    <div class="author-title">
                        <?php echo getFullName(getCurrentUserId()); ?>
                        <svg class="olymp-dropdown-arrow-icon">
                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
                        </svg>
                    </div>
                    <span class="author-subtitle text-uppercase"><?php echo getNickName(getCurrentUserId()); ?></span>
                </a>
            </div>
        </div>
    </div>
</header>

  <div class="header-spacer"></div>



  <!-- Your Account Personal Information -->

  <div class="container">
    <div class="row">
      <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
        <div class="ui-block">
          <div class="ui-block-title">
            <h6 class="title">Account Settings</h6>
          </div>
          <div class="ui-block-content">


            <!-- Form Favorite Page Information -->

            <form method="post">
              <div class="row">
                  <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="description-toggle">
                          <div class="description-toggle-content">
                              <div class="h6">Notifications Sound</div>
                              <p></p>
                          </div>

                          <div class="togglebutton">
                              <label>
                                  <input type="checkbox" <?php if ($settings['notificationSound']) echo 'checked=""'; ?> id="notification_sound" name="notification_sound">
                              </label>
                          </div>
                      </div>
                      <div class="description-toggle">
                          <div class="description-toggle-content">
                              <div class="h6">Post Sound</div>
                              <p></p>
                          </div>

                          <div class="togglebutton">
                              <label>
                                  <input type="checkbox" <?php if ($settings['postSound']) echo 'checked=""'; ?> id="post_sound" name="post_sound">
                              </label>
                          </div>
                      </div>
                  </div>






                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                  <a href="javascript:void(0)" class="btn btn-secondary btn-lg full-width" onclick="resetAll()">Reset all</a>
                </div>
                <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                    <input type="submit" name="update" class="btn btn-primary btn-lg full-width" value="Save all Changes"/>
                </div>
              </div>
            </form>

            <!-- ... end Form Favorite Page Information -->


          </div>
        </div>


      </div>

      <div class="col col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-12 order-md-2 col-sm-12  responsive-display-none">
        <div class="ui-block">



          <!-- Your Profile  -->

          <div class="your-profile">
            <div class="ui-block-title ui-block-title-small">
              <h6 class="title">Your PROFILE</h6>
            </div>

            <div id="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h6 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Profile Settings
                      <svg class="olymp-dropdown-arrow-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use>
                      </svg>
                    </a>
                  </h6>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                  <ul class="your-profile-menu">
                    <li>
                      <a href="settings-personal-info.php">Personal Information</a>
                    </li>
                    <li>
                      <a href="settings-account-settings.php" class="text-primary">Account Settings</a>
                    </li>
                    <li>
                        <a href="settings-varsity-info.php">Varsity Information</a>
                    </li>
                    <li>
                      <a href="settings-hobbies-and-interests.php">Hobbies and Interests</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="ui-block-title invisible">
              <a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
              <a href="#" class="items-round-little bg-primary">8</a>
            </div>
          </div>

          <!-- ... end Your Profile  -->


        </div>
      </div>
    </div>
  </div>

  <!-- ... end Your Account Personal Information -->


  <!-- JS Scripts -->
  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script src="js/perfect-scrollbar.js"></script>
  <script src="js/jquery.matchHeight.js"></script>
  <script src="js/svgxuse.js"></script>
  <script src="js/imagesloaded.pkgd.js"></script>
  <script src="js/Headroom.js"></script>
  <script src="js/velocity.js"></script>
  <script src="js/ScrollMagic.js"></script>
  <script src="js/jquery.waypoints.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/material.min.js"></script>
  <script src="js/bootstrap-select.js"></script>
  <script src="js/smooth-scroll.js"></script>
  <script src="js/selectize.js"></script>
  <script src="js/swiper.jquery.js"></script>
  <script src="js/moment.js"></script>
  <script src="js/daterangepicker.js"></script>
  <script src="js/simplecalendar.js"></script>
  <script src="js/fullcalendar.js"></script>
  <script src="js/isotope.pkgd.js"></script>
  <script src="js/ajax-pagination.js"></script>
  <script src="js/Chart.js"></script>
  <script src="js/chartjs-plugin-deferred.js"></script>
  <script src="js/circle-progress.js"></script>
  <script src="js/loader.js"></script>
  <script src="js/run-chart.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.gifplayer.js"></script>
  <script src="js/mediaelement-and-player.js"></script>
  <script src="js/mediaelement-playlist-plugin.min.js"></script>

  <script src="js/base-init.js"></script>
  <script defer src="fonts/fontawesome-all.js"></script>

  <script src="Bootstrap/dist/js/bootstrap.bundle.js"></script>

    <script>
        function resetAll() {
            document.getElementById("notification_sound").checked = true;
            document.getElementById("post_sound").checked = true;
        }
    </script>


</body>

</html>
