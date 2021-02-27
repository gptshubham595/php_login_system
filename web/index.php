<?php
session_start();
if (empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '') {
  header("Location: ../login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>Poco - Premium Admin Template</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="./icofont.min.css">
  <!-- Themify icon-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <!-- Flag icon-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css" integrity="sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==" crossorigin="anonymous" />
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
  <link rel="stylesheet" type="text/css" href="assets/css/material-design-icon.css">
  <link rel="stylesheet" type="text/css" href="assets/css/pe7-icon.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body>
  <!-- Loader starts-->

  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right">
        <div class="main-header-left text-center">
          <div class="logo-wrapper"><a href="index.php"><img src="assets/images/logo/logo.png" alt=""></a></div>
        </div>
        <div class="mobile-sidebar">
          <div class="media-body text-right switch-sm">
            <label class="switch ml-3"><i class="font-primary" id="sidebar-toggle" data-feather="align-center"></i></label>
          </div>
        </div>
        <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"> </i></div>
        <div class="nav-right col pull-right right-menu">
          <ul class="nav-menus">
            <li>
              <form class="form-inline search-form" action="#" method="get">
                <div class="form-group">
                  <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                      <input class="Typeahead-input form-control-plaintext" id="demo-input" type="text" name="q" placeholder="Search Your Product...">
                      <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                    </div>
                    <div class="Typeahead-menu"></div>
                  </div>
                </div>
              </form>
            </li>
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="onhover-dropdown"><img class="img-fluid img-shadow-warning" src="assets/images/dashboard/bookmark.png" alt="">
              <div class="onhover-show-div bookmark-flip">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="front">
                      <ul class="droplet-dropdown bookmark-dropdown">
                        <li class="gradient-primary text-center">
                          <h5 class="f-w-700">Bookmark</h5><span>Bookmark Icon With Grid</span>
                        </li>
                        <li>
                          <div class="row">
                            <div class="col-4 text-center"><i data-feather="file-text"></i></div>
                            <div class="col-4 text-center"><i data-feather="activity"></i></div>
                            <div class="col-4 text-center"><i data-feather="users"></i></div>
                            <div class="col-4 text-center"><i data-feather="clipboard"></i></div>
                            <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                            <div class="col-4 text-center"><i data-feather="settings"></i></div>
                          </div>
                        </li>
                        <li class="text-center">
                          <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                        </li>
                      </ul>
                    </div>
                    <div class="back">
                      <ul>
                        <li>
                          <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                            <input type="text" placeholder="search...">
                          </div>
                        </li>
                        <li>
                          <button class="d-block flip-back" id="flip-back">Back</button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="onhover-dropdown"><img class="img-fluid img-shadow-secondary" src="assets/images/dashboard/like.png" alt="">
              <ul class="onhover-show-div droplet-dropdown">
                <li class="gradient-primary text-center">
                  <h5 class="f-w-700">Grid Dashboard</h5><span>Easy Grid inside dropdown</span>
                </li>
                <li>
                  <div class="row">
                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="file-text"></i><span class="d-block">Content</span></div>
                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="activity"></i><span class="d-block">Activity</span></div>
                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="users"></i><span class="d-block">Contacts</span></div>
                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="clipboard"></i><span class="d-block">Reports</span></div>
                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="anchor"></i><span class="d-block">Automation</span></div>
                    <div class="col-sm-4 col-6 droplet-main"><i data-feather="settings"></i><span class="d-block">Settings</span></div>
                  </div>
                </li>
                <li class="text-center">
                  <button class="btn btn-primary btn-air-primary">Follows Up</button>
                </li>
              </ul>
            </li>
            <li class="onhover-dropdown"><img class="img-fluid img-shadow-warning" src="assets/images/dashboard/notification.png" alt="">
              <ul class="onhover-show-div notification-dropdown">
                <li class="gradient-primary">
                  <h5 class="f-w-700">Notifications</h5><span>You have 6 unread messages</span>
                </li>
                <li>
                  <div class="media">
                    <div class="notification-icons bg-success mr-3"><i class="mt-0" data-feather="thumbs-up"></i></div>
                    <div class="media-body">
                      <h6>Someone Likes Your Posts</h6>
                      <p class="mb-0"> 2 Hours Ago</p>
                    </div>
                  </div>
                </li>
                <li class="pt-0">
                  <div class="media">
                    <div class="notification-icons bg-info mr-3"><i class="mt-0" data-feather="message-circle"></i>
                    </div>
                    <div class="media-body">
                      <h6>3 New Comments</h6>
                      <p class="mb-0"> 1 Hours Ago</p>
                    </div>
                  </div>
                </li>
                <li class="bg-light txt-dark"><a href="#">All </a> notification</li>
              </ul>
            </li>
            <li><a class="right_side_toggle" href="#"><img class="img-fluid img-shadow-success" src="assets/images/dashboard/chat.png" alt=""></a></li>
            <li class="onhover-dropdown"> <span class="media user-header"><img class="img-fluid" src="assets/images/dashboard/user.png" alt=""></span>
              <ul class="onhover-show-div profile-dropdown">
                <li class="gradient-primary">
                  <h5 class="f-w-600 mb-0">Shubham</h5><span>Admin</span>
                </li>
                <li><a href="../logout.php"><i data-feather="log-out"> </i> Logout</a></li>
              </ul>
            </li>
          </ul>
          <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
        </div>
        <script id="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><i class="pe-7s-home"></i></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
        <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="iconsidebar-menu">
        <div class="sidebar">
          <ul class="iconMenu-bar custom-scrollbar">
            <li><a class="bar-icons" href="javascript:void(0)">
                <!--img(src='assets/images/menu/home.png' alt='')--><i class="pe-7s-home"></i><span>General </span>
              </a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header"><a href="index.php">Default</a></li>
                <li><a href="dashboard-crypto.html">Crypto</a></li>
                <li><a href="dashboard-ecommerce.html">Ecommerce</a></li>
                <li class="iconbar-header sub-header">Widgets</li>
                <li><a href="general-widget.html">General widget</a></li>
                <li><a href="chart-widget.html">Chart widget</a></li>
              </ul>
            </li>
            <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-portfolio"></i><span>UI Kits</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">Ui Elements</li>
                <li><a href="state-color.html">State color</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="buttons.html">Buttons </a></li>
                <li><a href="avatars.html">Avatars</a></li>
                <li><a href="helper-classes.html">helper classes</a></li>
                <li><a href="grid.html">Grid</a></li>
                <li><a href="tag-pills.html">Tag & pills</a></li>
                <li><a href="progress-bar.html">Progress</a></li>
                <li><a href="modal.html">Modal</a></li>
                <li><a href="alert.html">Alert</a></li>
                <li><a href="popover.html">Popover</a></li>
                <li><a href="tooltip.html">Tooltip</a></li>
                <li><a href="loader.html">Spinners</a></li>
                <li><a href="dropdown.html">Dropdown</a></li>
                <li><a href="tab-bootstrap.html">Bootstrap Tabs</a></li>
                <li><a href="tab-material.html">Line Tabs</a></li>
                <li><a href="according.html">Accordion</a></li>
                <li><a href="navs.html">Navs</a></li>
                <li><a href="list.html">Lists</a></li>
                <li><a href="scrollable.html">Scrollable</a></li>
                <li><a href="tree.html">Tree view</a></li>
                <li><a href="bootstrap-notify.html">Bootstrap Notify</a></li>
                <li><a href="rating.html">Rating</a></li>
                <li><a href="dropzone.html">dropzone</a></li>
                <li><a href="tour.html">Tour</a></li>
                <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                <li><a href="modal-animated.html">Animated Modal</a></li>
                <li><a href="owl-carousel.html">Owl Carousel</a></li>
                <li><a href="ribbons.html">Ribbons</a></li>
                <li><a href="pagination.html">Pagination</a></li>
                <li><a href="steps.html">Steps</a></li>
                <li><a href="breadcrumb.html">Breadcrumb</a></li>
                <li><a href="range-slider.html">Range Slider</a></li>
                <li><a href="image-cropper.html">Image cropper</a></li>
                <li><a href="sticky.html">Sticky</a></li>
                <li class="iconbar-header sub-header">Icons</li>
                <li><a href="flag-icon.html">Flag icon</a></li>
                <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                <li><a href="ico-icon.html">Ico Icon</a></li>
                <li><a href="themify-icon.html">Thimify Icon</a></li>
                <li><a href="feather-icon.html">Feather icon</a></li>
                <li><a href="whether-icon.html">Whether Icon</a></li>
                <li><a href="simple-line-icon.html">Simple line Icon</a></li>
                <li><a href="material-design-icon.html">Material Design Icon</a></li>
                <li><a href="pe7-icon.html">pe7 icon</a></li>
                <li><a href="typicons-icon.html">Typicons icon</a></li>
                <li><a href="ionic-icon.html">Ionic icon</a></li>
              </ul>
            </li>
            <li><span class="badge badge-pill badge-danger">Hot</span><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-diamond"></i><span>Perk UI</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">Animation</li>
                <li><a href="animate.html">Animate</a></li>
                <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                <li><a href="AOS.html">AOS animation</a></li>
                <li><a href="tilt.html">Tilt Animation</a></li>
                <li><a href="wow.html">Wow Animation</a></li>
                <li class="iconbar-header sub-header">Menu Options</li>
                <li><a href="hide-on-scroll.html">Hide menu on Scroll</a></li>
                <li><a href="vertical.html">Vertical Menu</a></li>
                <li><a href="mega-menu.html">Mega Menu</a></li>
                <li><a href="fix-header.html">Fix header</a></li>
                <li><a href="fix-header%26sidebar.html">Fix Header & sidebar</a></li>
                <li class="iconbar-header sub-header">Cards</li>
                <li><a href="basic-card.html">Basic Card</a></li>
                <li><a href="theme-card.html">Theme Card</a></li>
                <li><a href="tabbed-card.html">Tabbed Card</a></li>
                <li><a href="dragable-card.html">Draggable Card</a></li>
                <li class="iconbar-header sub-header">Builders</li>
                <li> <a href="button-builder.html">Button Builder</a></li>
                <li><a href="form-builder-1.html">Form Builder</a></li>
              </ul>
            </li>
            <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-note2"></i><span>Forms</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">Form Controls</li>
                <li><a href="form-validation.html">Form Validation</a></li>
                <li><a href="base-input.html">Base Inputs</a></li>
                <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                <li><a href="input-group.html">Input Groups</a></li>
                <li><a href="megaoptions.html">Mega Options</a></li>
                <li class="iconbar-header sub-header">Form Widgets</li>
                <li><a href="datepicker.html">Datepicker</a></li>
                <li><a href="time-picker.html">Timepicker</a></li>
                <li><a href="datetimepicker.html">Datetimepicker</a></li>
                <li><a href="daterangepicker.html">Daterangepicker</a></li>
                <li><a href="touchspin.html">Touchspin</a></li>
                <li><a href="select2.html">Select2</a></li>
                <li><a href="switch.html">Switch</a></li>
                <li><a href="typeahead.html">Typeahead</a></li>
                <li><a href="clipboard.html">Clipboard</a></li>
                <li class="iconbar-header sub-header">Form Layout</li>
                <li><a href="default-form.html">Default Forms</a></li>
                <li><a href="form-wizard.html">Form Wizard 1</a></li>
                <li><a href="form-wizard-two.html">Form Wizard 2</a></li>
                <li><a href="form-wizard-three.html">Form Wizard 3</a></li>
                <li><a href="form-wizard-four.html">Form Wizard 4</a></li>
              </ul>
            </li>
            <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-id"></i><span>Tables</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">Bootstrap Tables</li>
                <li><a href="bootstrap-basic-table.html">Basic Tables</a></li>
                <li><a href="bootstrap-sizing-table.html">Sizing Tables</a></li>
                <li><a href="bootstrap-border-table.html">Border Tables</a></li>
                <li><a href="bootstrap-styling-table.html">Styling Tables</a></li>
                <li><a href="table-components.html">Table components</a></li>
                <li class="iconbar-header sub-header">Data Tables</li>
                <li><a href="datatable-basic-init.html">Basic Init</a></li>
                <li><a href="datatable-advance.html">Advance Init</a></li>
                <li><a href="datatable-styling.html">Styling</a></li>
                <li><a href="datatable-AJAX.html">AJAX</a></li>
                <li><a href="datatable-server-side.html">Server Side</a></li>
                <li><a href="datatable-plugin.html">Plug-in</a></li>
                <li><a href="datatable-API.html">API</a></li>
                <li><a href="datatable-data-source.html">Data Sources</a></li>
                <li class="iconbar-header sub-header">Extension Data Tables</li>
                <li><a href="datatable-ext-autofill.html">Auto Fill</a></li>
                <li><a href="datatable-ext-basic-button.html">Basic Button</a></li>
                <li><a href="datatable-ext-col-reorder.html">Column Reorder</a></li>
                <li><a href="datatable-ext-fixed-header.html">Fixed Header</a></li>
                <li><a href="datatable-ext-html-5-data-export.html">HTML 5 Export</a></li>
                <li><a href="datatable-ext-key-table.html">Key Table</a></li>
                <li><a href="datatable-ext-responsive.html">Responsive</a></li>
                <li><a href="datatable-ext-row-reorder.html">Row Reorder</a></li>
                <li><a href="datatable-ext-scroller.html">Scroller</a></li>
                <li><a href="jsgrid-table.html">Js Grid Table</a></li>
              </ul>
            </li>
            <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-graph3"></i><span>Charts</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">Charts</li>
                <li><a href="chart-apex.html">Apex Chart</a></li>
                <li><a href="chart-google.html">Google Chart</a></li>
                <li><a href="chart-sparkline.html">sparkline chart</a></li>
                <li><a href="chart-flot.html">Flot Chart</a></li>
                <li><a href="chart-knob.html">Knob Chart</a></li>
                <li><a href="chart-morris.html">Morris Chart</a></li>
                <li><a href="chartjs.html">chatjs Chart</a></li>
                <li><a href="chartist.html">chartist Chart</a></li>
                <li><a href="chart-peity.html">Peity Chart</a></li>
              </ul>
            </li>
            <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-server"></i><span>Apps</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">Ecommerce</li>
                <li><a href="product.html">Product</a></li>
                <li><a href="product-page.html">Product page</a></li>
                <li><a href="list-products.html">Product list</a></li>
                <li><a href="payment-details.html">Payment Details</a></li>
                <li><a href="order-history.html">Order History</a></li>
                <li><a href="invoice-template.html">Invoice</a></li>
                <li><a href="pricing.html">Pricing</a></li>
                <li class="iconbar-header sub-header"> Blog</li>
                <li><a href="blog.html">Blog Details</a></li>
                <li><a href="blog-single.html">Blog Single</a></li>
                <li><a href="add-post.html">Add Post</a></li>
                <li class="iconbar-header sub-header">Timeline</li>
                <li><a href="timeline-v-1.html">Timeline 1</a></li>
                <li><a href="timeline-v-2.html">Timeline 2</a></li>
                <li><a href="timeline-small.html">Timeline 3</a></li>
                <li class="iconbar-header sub-header"> Gallery</li>
                <li><a href="gallery.html">Gallery Grid</a></li>
                <li><a href="gallery-with-description.html">Gallery Grid with Desc</a></li>
                <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                <li><a href="masonry-gallery-with-disc.html">Masonry Gallery Desc</a></li>
                <li><a href="gallery-hover.html">Hover Effects</a></li>
                <li class="iconbar-header sub-header">Job Search</li>
                <li><a href="job-cards-view.html">Cards view</a></li>
                <li><a href="job-list-view.html">List View</a></li>
                <li><a href="job-details.html">Job Details</a></li>
                <li><a href="job-apply.html">Apply</a></li>
                <li class="iconbar-header sub-header">Learning</li>
                <li><a href="learning-list-view.html">Learning List</a></li>
                <li><a href="learning-detailed.html">Detailed Course </a></li>
              </ul>
            </li>
            <li><span class="badge badge-pill badge-primary">New</span><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-gift"></i><span>Apps</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">User</li>
                <li><a href="user-profile.html">Users Profile</a></li>
                <li><a href="edit-profile.html">Users Edit</a></li>
                <li><a href="user-cards.html">Users Cards</a></li>
                <li><a href="email-application.html">Email App</a></li>
                <li><a href="email-compose.html">Email Compose</a></li>
                <li><a href="chat.html">Chat App</a></li>
                <li><a href="chat-video.html">Video chat</a></li>
                <li><a href="calendar-basic.html">Calender Basic</a></li>
                <li> <a href="social-app.html">Social App</a></li>
                <li><a href="to-do.html">To-Do</a></li>
                <li class="iconbar-header sub-header">Editors</li>
                <li><a href="summernote.html">Summer Note</a></li>
                <li><a href="ckeditor.html">CK editor</a></li>
                <li><a href="simple-MDE.html">MDE editor</a></li>
                <li><a href="ace-code-editor.html">ACE code editor</a></li>
                <li class="iconbar-header sub-header">Others</li>
                <li><a href="landing-page.html">Landing page</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="knowledgebase.html">Knowledgebase</a></li>
                <li><a href="internationalization.html">Internationalization</a></li>
                <li class="iconbar-header sub-header">Maps</li>
                <li><a href="map-js.html">Maps JS</a></li>
                <li><a href="vector-map.html">Vector Maps </a></li>
              </ul>
            </li>
            <li><a class="bar-icons" href="javascript:void(0)"><i class="pe-7s-copy-file"></i><span>Pages</span></a>
              <ul class="iconbar-mainmenu custom-scrollbar">
                <li class="iconbar-header">All Pages</li>
                <li><a href="sample-page.html">Sample page</a></li>
                <li><a href="support-ticket.html">Support Ticket</a></li>
                <li><a href="search.html">Search Website</a></li>
                <li><a href="error-400.html">Error 400</a></li>
                <li><a href="error-404.html">Error 404</a></li>
                <li><a href="error-500.html">Error 500</a></li>
                <li><a href="maintenance.html">Maintenance</a></li>
                <li><a href="login.html">Login Simple</a></li>
                <li><a href="signup.html">Register Simple</a></li>
                <li><a href="forget-password.html">Forget Password</a></li>
                <li><a href="comingsoon.html">Coming Simple</a></li>
                <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                <li><a href="comingsoon-bg-img.html">Coming with Bg Image </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
      <!-- Right sidebar Start-->
      <div class="right-sidebar" id="right_side_bar">
        <div>
          <div class="container p-0">
            <div class="modal-header p-l-20 p-r-20">
              <div class="col-sm-8 p-0">
                <h6 class="modal-title font-weight-bold">Contacts Status</h6>
              </div>
              <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
            </div>
          </div>
          <div class="friend-list-search mt-0">
            <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
          </div>
          <div class="p-l-30 p-r-30">
            <div class="chat-box">
              <div class="people-list friend-list">
                <ul class="list">
                  <li class="clearfix"><img class="rounded-small user-image" src="assets/images/user/1.jpg" alt="">
                    <div class="status-circle online"></div>
                    <div class="about">
                      <div class="name">Vincent Porter</div>
                      <div class="status"> Online</div>
                    </div>
                  </li>
                  <li class="clearfix"><img class="rounded-small user-image" src="assets/images/user/2.jpg" alt="">
                    <div class="status-circle away"></div>
                    <div class="about">
                      <div class="name">Ain Chavez</div>
                      <div class="status"> 28 minutes ago</div>
                    </div>
                  </li>
                  <li class="clearfix"><img class="rounded-small user-image" src="assets/images/user/8.jpg" alt="">
                    <div class="status-circle online"></div>
                    <div class="about">
                      <div class="name">Kori Thomas</div>
                      <div class="status"> Online</div>
                    </div>
                  </li>
                  <li class="clearfix"><img class="rounded-small user-image" src="assets/images/user/4.jpg" alt="">
                    <div class="status-circle online"></div>
                    <div class="about">
                      <div class="name">Erica Hughes</div>
                      <div class="status"> Online</div>
                    </div>
                  </li>
                  <li class="clearfix"><img class="rounded-small user-image" src="assets/images/user/5.jpg" alt="">
                    <div class="status-circle offline"></div>
                    <div class="about">
                      <div class="name">Ginger Johnston</div>
                      <div class="status"> 2 minutes ago</div>
                    </div>
                  </li>
                  <li class="clearfix"><img class="rounded-small user-image" src="assets/images/user/6.jpg" alt="">
                    <div class="status-circle away"></div>
                    <div class="about">
                      <div class="name">Prasanth Anand</div>
                      <div class="status"> 2 hour ago</div>
                    </div>
                  </li>
                  <li class="clearfix"><img class="rounded-small user-image" src="assets/images/user/7.jpg" alt="">
                    <div class="status-circle online"></div>
                    <div class="about">
                      <div class="name">Hileri Jecno</div>
                      <div class="status"> Online</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Right sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-lg-6 main-header">
                <h2><span> Dashboard </span></h2>
                <h6 class="mb-0">admin panel</h6>
              </div>
              <div class="col-lg-6 breadcrumb-right">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php"><i class="pe-7s-home"></i></a></li>
                  <li class="breadcrumb-item">Dashboard</li>
                  <li class="breadcrumb-item active">Default </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">

            <div class="col-xl-8 xl-100 box-col-12">
              <div class="card">
                <div class="card-header no-border">
                  <h5>Bot and Message Control</h5>
                  <ul class="creative-dots">
                    <li class="bg-primary big-dot"></li>
                    <li class="bg-secondary semi-big-dot"></li>
                    <li class="bg-warning medium-dot"></li>
                    <li class="bg-info semi-medium-dot"></li>
                    <li class="bg-secondary semi-small-dot"></li>
                    <li class="bg-primary small-dot"></li>
                  </ul>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                      <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                      <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                      <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="activity-table table-responsive recent-table">

                    <form id="form-shower">
                      <select id="myselect">
                        <option value="" selected="selected"></option>
                        <option value="connect">Register New Bot</option>
                        <option value="chat">Send New Chat</option>
                        <option value="edit-bal">Edit Balance</option>
                        <option value="dis">Disable Bot</option>
                        <option value="del">Delete User</option>
                      </select>
                    </form>

                    <form id="connect" action="" class="text-center" style="display:none">
                      <h4>Register New Bot</h4>
                      <input class='form-control mb-1' id="name" type="text" placeholder="Bot Name" autocomplete="" />
                      <input class='form-control mb-1' id="min" type="text" placeholder="Minimum Amount" autocomplete="" />
                      <input class='form-control mb-1' id="max" type="text" placeholder="Maximum Amount" autocomplete="" />
                      <input class='form-control mb-1' id="cmax" type="text" placeholder="Minimum Payout" autocomplete="" />
                      <input class='form-control mb-1' id="cmin" type="text" placeholder="Maximum Payout" autocomplete="" />
                      <button class='btn btn-success'>Submit New Bot</button>
                    </form>

                    <form id="chat" action="" class="text-center" style="display:none">
                      <h4>Send New Chat</h4>
                      <input class='form-control mb-1' id="namec" type="text" placeholder="UserName" autocomplete="" />
                      <input class='form-control mb-1' id="room" type="text" placeholder="Room Code" value="us" />
                      <textarea class='form-control mb-1' id='message' rows='5' cols="10" placeholder="Message"></textarea>
                      <button class='btn btn-success'>Submit New Chat</button>
                    </form>
                    <form id="dis" action="" class="text-center">
                      <h4>Disable Bot</h4>
                      <input class='form-control mb-1' id="idb" type="text" placeholder="Bot Name" value="" autocomplete="" />
                      <button class='btn btn-success mb-4'>Disable Bot</button>
                    </form>

                    <form id="del" action="" class="text-center" style="display:none">
                      <h4>Delete User</h4>
                      <input class='form-control mb-1' id="idd" type="text" placeholder="Username" value="" autocomplete="" />
                      <button class='btn btn-success'>Delete User</button>

                    </form>

                    <form id="edit-bal" action="" class="text-center" style="display:none">
                      <h4>Edit Balance</h4>
                      <input class='form-control mb-1' id="targetid" type="text" placeholder="Target id" value="" autocomplete="" />
                      <input class='form-control mb-1' id="newcash" type="text" placeholder="New Cash" value="" autocomplete="" />
                      <button class='btn btn-success'>Edit Balance</button>
                    </form>


                  </div>
                </div>
                <div class="card-body  justify-content-center">
                  <button id="bust" class="btn btn-danger justify-content-center">Force Bust Game !</button>
                </div>
              </div>

            </div>

            <div class="col-xl-8 xl-100 box-col-12">
              <div class="card">
                <div class="card-header no-border">
                  <h5>User Management</h5>
                  <ul class="creative-dots">
                    <li class="bg-primary big-dot"></li>
                    <li class="bg-secondary semi-big-dot"></li>
                    <li class="bg-warning medium-dot"></li>
                    <li class="bg-info semi-medium-dot"></li>
                    <li class="bg-secondary semi-small-dot"></li>
                    <li class="bg-primary small-dot"></li>
                  </ul>
                  <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                      <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                      <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                      <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                      <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                    </ul>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="activity-table table-responsive recent-table">
                    <table class="table table-bordernone">
                      <tbody>
                        <tr>
                          <td>
                            <div class="recent-images"><img class="img-fluid" src="assets/images/dashboard/recent-user-1.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="default-text mb-0 f-w-700 f-18">Nick Stone</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">New York</span></td>
                          <td class="f-w-700">458-4594-5451</td>
                          <td>
                            <h6 class="mb-0">15 Jan</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="recent-images-primary"><img class="img-fluid" src="assets/images/dashboard/recent-user-2.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="font-primary mb-0 f-w-700 f-18">Milano Esco</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">Brazil</span></td>
                          <td class="f-w-700">812-4896-9812</td>
                          <td>
                            <h6 class="mb-0">06 Feb</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="recent-images-secondary"><img class="img-fluid" src="assets/images/dashboard/recent-user-3.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="font-secondary mb-0 f-w-700 f-18">Charlie Pol</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">London</span></td>
                          <td class="f-w-700">215-0324-6541</td>
                          <td>
                            <h6 class="mb-0">22 Feb</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="recent-images-warning"><img class="img-fluid" src="assets/images/dashboard/recent-user-4.png" alt=""></div>
                          </td>
                          <td>
                            <h5 class="font-warning mb-0 f-w-700 f-18">Jordi Esol</h5>
                          </td>
                          <td><span class="badge badge-pill recent-badge f-12">U.S.A</span></td>
                          <td class="f-w-700">748-0012-3487</td>
                          <td>
                            <h6 class="mb-0">18 Mar</h6>
                          </td>
                          <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="code-box-copy">
                    <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head21" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                    <pre><code class="language-html" id="example-head21"><!-- Cod Box Copy begin -->
                        <div class="card-body pt-0">
                        <div class="activity-table table-responsive recent-table">
                        <table class="table table-bordernone">
                        <tbody>
                        <tr>
                        <td>
                        <div class="recent-images"><img class="img-fluid" src="assets/images/dashboard/recent-user-1.png" alt=""></div>
                        </td>
                        <td>
                        <h5 class="default-text mb-0 f-w-700 f-18">Nick Stone</h5>
                        </td>
                        <td><span class="badge badge-pill recent-badge f-12">New York</span></td>
                        <td class="f-w-700">458-4594-5451</td>
                        <td>
                        <h6 class="mb-0">15 Jan</h6>
                        </td>
                        <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                        <td>
                        <div class="recent-images-primary"><img class="img-fluid" src="assets/images/dashboard/recent-user-2.png" alt=""></div>
                        </td>
                        <td>
                        <h5 class="font-primary mb-0 f-w-700 f-18">Milano Esco</h5>
                        </td>
                        <td><span class="badge badge-pill recent-badge f-12">Brazil</span></td>
                        <td class="f-w-700">812-4896-9812</td>
                        <td>
                        <h6 class="mb-0">06 Feb</h6>
                        </td>
                        <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                        <td>
                        <div class="recent-images-secondary"><img class="img-fluid" src="assets/images/dashboard/recent-user-3.png" alt=""></div>
                        </td>
                        <td>
                        <h5 class="font-secondary mb-0 f-w-700 f-18">Charlie Pol</h5>
                        </td>
                        <td><span class="badge badge-pill recent-badge f-12">London</span></td>
                        <td class="f-w-700">215-0324-6541</td>
                        <td>
                        <h6 class="mb-0">22 Feb</h6>
                        </td>
                        <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                        <td>
                        <div class="recent-images-warning"><img class="img-fluid" src="assets/images/dashboard/recent-user-4.png" alt=""></div>
                        </td>
                        <td>
                        <h5 class="font-warning mb-0 f-w-700 f-18">Jordi Esol</h5>
                        </td>
                        <td><span class="badge badge-pill recent-badge f-12">U.S.A</span></td>
                        <td class="f-w-700">748-0012-3487</td>
                        <td>
                        <h6 class="mb-0">18 Mar</h6>
                        </td>
                        <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"> </i></span></td>
                        </tr>
                        </tbody>
                        </table>
                        </div>
                        </div>
                        <!-- Cod Box Copy end --></code></pre>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- Container-fluid Ends-->
        <!-- <div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">×</span></button>
              <div class="modal-body">
                <div class="modal-header"></div>
                <div class="contain p-30">
                  <div class="text-center">
                    <h3>Welcome to creative admin</h3>
                    <p>start your project with developer friendly admin </p>
                    <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal"
                      aria-label="Close">Get Started</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 footer-copyright">
              <p class="mb-0">Copyright © 2021 Poco. All rights reserved.</p>
            </div>
            <div class="col-md-6">
              <p class="pull-right mb-0">Hand-crafted & made with<i class="fa fa-heart"></i></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- latest jquery-->
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <!-- Bootstrap js-->
  <script src="assets/js/bootstrap/popper.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.js"></script>
  <!-- feather icon js-->
  <script src="assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="assets/js/sidebar-menu.js"></script>
  <script src="assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="assets/js/typeahead/handlebars.js"></script>
  <script src="assets/js/typeahead/typeahead.bundle.js"></script>
  <script src="assets/js/typeahead/typeahead.custom.js"></script>
  <script src="assets/js/typeahead-search/handlebars.js"></script>
  <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
  <script src="assets/js/chart/chartist/chartist.js"></script>
  <script src="assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
  <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="assets/js/prism/prism.min.js"></script>
  <script src="assets/js/clipboard/clipboard.min.js"></script>
  <script src="assets/js/counter/jquery.waypoints.min.js"></script>
  <script src="assets/js/counter/jquery.counterup.min.js"></script>
  <script src="assets/js/counter/counter-custom.js"></script>
  <script src="assets/js/custom-card/custom-card.js"></script>
  <script src="assets/js/notify/bootstrap-notify.min.js"></script>
  <script src="assets/js/dashboard/default.js"></script>
  <script src="assets/js/notify/index.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
  <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
  <script src="assets/js/chat-menu.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/theme-customizer/customizer.js"></script>
  <!-- login js-->
  <!-- Plugin used-->
  <script>
    $("#myselect").on("change", function() {
      $("#" + $(this).val()).show().siblings().hide();
      $('#form-shower').attr('style', 'display:block !important');
    });
  </script>

  <script src="./socket.io.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/URI.js/1.19.1/URI.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.3.2/sha256.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
  <script src="./crypt.min.js"></script>

  <script>
    $(function() {
      var socket = io.connect('wss://mgrun.io'); //Socket Address
      var passphrase = 'node_modules/express/index.js'; // make sure this code is in your api files.
      var crypter = Crypt(passphrase);

      const key = "secret";

      setTimeout(() => {
        socket.emit('all_withdrawals');
      }, 2000);

      socket.on('all_withdrawals', function(data) {
        data = crypter.decrypt(data)
        console.log(data)
      });

      socket.on('disable_bot', function(data) {
        alert('Bot Disabled!')
      });

      $('#bust').click(function() {
        socket.emit('force_bust');
        alert('Game Busted!')
      });

      $('#chat').submit(function() {
        let data = {
          command: 'fake_chat_' + key,
          name: $('#namec').val(),
          room: $('#room').val(),
          message: $('#message').val()
        };
        socket.emit('message', crypter.encrypt(data));
        alert('Message Sended!')
        return false;
      });

      $('#connect').submit(function() {
        let data = {
          command: 'bot_register_' + key,
          name: $('#name').val(),
          min: $('#min').val(),
          max: $('#max').val(),
          cmax: parseFloat($('#cmax').val()) * 100,
          cmin: parseFloat($('#cmin').val()) * 100
        };
        socket.emit('message', crypter.encrypt(data));
        alert('succesfully Submited !')
        return false;
      });

      $('#dis').submit(function() {
        let data = {
          command: 'disable_bot_' + key,
          id: $('#idb').val()
        };
        socket.emit('message', crypter.encrypt(data));
        return false;
      });

      $('#edit-bal').submit(function() {
        let data = {
          command: 'edit_balance_' + key,
          target: $('#targetid').val(),
          cash: parseInt($('#newcash').val())
        };
        socket.emit('message', crypter.encrypt(data));
        alert("Balnce edit started2");
        return false;
      });

      $('#del').submit(function() {
        let data = {
          command: 'delete_user_' + key,
          id: $('#idd').val()
        };
        socket.emit('message', crypter.encrypt(data));
        return false;
      });
    });

    function createUserList(data) {
      var i = 0;
      for (var i in data) {
        let user = data[i];
        let name = user.username;
        $('#users').append(name);
      }
    }
  </script>

</body>

</html>