<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Code mirror</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/codemirror/codemirror.css" rel="stylesheet">
    <link href="css/plugins/codemirror/ambiance.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="fixed-sidebar no-skin-config full-height-layout">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="contacts.php">Contacts</a></li>
                            <li><a href="mailbox.php">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.php">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.php">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.php">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.php">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.php">Dashboard v.5 </a></li>
                    </ul>
                </li>
                <li>
                    <a href="layouts.php"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.php">Flot Charts</a></li>
                        <li><a href="graph_morris.php">Morris.js Charts</a></li>
                        <li><a href="graph_rickshaw.php">Rickshaw Charts</a></li>
                        <li><a href="graph_chartjs.php">Chart.js</a></li>
                        <li><a href="graph_chartist.php">Chartist</a></li>
                        <li><a href="c3.php">c3 charts</a></li>
                        <li><a href="graph_peity.php">Peity Charts</a></li>
                        <li><a href="graph_sparkline.php">Sparkline Charts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="mailbox.php"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span><span class="label label-warning pull-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="mailbox.php">Inbox</a></li>
                        <li><a href="mail_detail.php">Email view</a></li>
                        <li><a href="mail_compose.php">Compose email</a></li>
                        <li><a href="email_template.php">Email templates</a></li>
                    </ul>
                </li>
                <li>
                    <a href="metrics.php"><i class="fa fa-pie-chart"></i> <span class="nav-label">Metrics</span>  </a>
                </li>
                <li>
                    <a href="widgets.php"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="form_basic.php">Basic form</a></li>
                        <li><a href="form_advanced.php">Advanced Plugins</a></li>
                        <li><a href="form_wizard.php">Wizard</a></li>
                        <li><a href="form_file_upload.php">File Upload</a></li>
                        <li><a href="form_editors.php">Text Editor</a></li>
                        <li><a href="form_autocomplete.php">Autocomplete</a></li>
                        <li><a href="form_markdown.php">Markdown</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">App Views</span>  <span class="pull-right label label-primary">SPECIAL</span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="contacts.php">Contacts</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="profile_2.php">Profile v.2</a></li>
                        <li><a href="contacts_2.php">Contacts v.2</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="project_detail.php">Project detail</a></li>
                        <li><a href="activity_stream.php">Activity stream</a></li>
                        <li><a href="teams_board.php">Teams board</a></li>
                        <li><a href="social_feed.php">Social feed</a></li>
                        <li><a href="clients.php">Clients</a></li>
                        <li class="active"><a href="full_height.php">Outlook view</a></li>
                        <li><a href="vote_list.php">Vote list</a></li>
                        <li><a href="file_manager.php">File manager</a></li>
                        <li><a href="calendar.php">Calendar</a></li>
                        <li><a href="issue_tracker.php">Issue tracker</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="article.php">Article</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="timeline.php">Timeline</a></li>
                        <li><a href="pin_board.php">Pin board</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="search_results.php">Search results</a></li>
                        <li><a href="lockscreen.php">Lockscreen</a></li>
                        <li><a href="invoice.php">Invoice</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="login_two_columns.php">Login v.2</a></li>
                        <li><a href="forgot_password.php">Forget password</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="500.html">500 Page</a></li>
                        <li><a href="empty_page.php">Empty page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-globe"></i> <span class="nav-label">Miscellaneous</span><span class="label label-info pull-right">NEW</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="toastr_notifications.php">Notification</a></li>
                        <li><a href="nestable_list.php">Nestable list</a></li>
                        <li><a href="agile_board.php">Agile board</a></li>
                        <li><a href="timeline_2.php">Timeline v.2</a></li>
                        <li><a href="diff.php">Diff</a></li>
                        <li><a href="pdf_viewer.php">PDF viewer</a></li>
                        <li><a href="i18support.php">i18 support</a></li>
                        <li><a href="sweetalert.php">Sweet alert</a></li>
                        <li><a href="idle_timer.php">Idle timer</a></li>
                        <li><a href="truncate.php">Truncate</a></li>
                        <li><a href="password_meter.php">Password meter</a></li>
                        <li><a href="spinners.php">Spinners</a></li>
                        <li><a href="spinners_usage.php">Spinners usage</a></li>
                        <li><a href="tinycon.php">Live favicon</a></li>
                        <li><a href="google_maps.php">Google maps</a></li>
                        <li><a href="datamaps.php">Datamaps</a></li>
                        <li><a href="social_buttons.php">Social buttons</a></li>
                        <li><a href="code_editor.php">Code editor</a></li>
                        <li><a href="modal_window.php">Modal window</a></li>
                        <li><a href="clipboard.php">Clipboard</a></li>
                        <li><a href="text_spinners.php">Text spinners</a></li>
                        <li><a href="forum_main.php">Forum view</a></li>
                        <li><a href="validation.php">Validation</a></li>
                        <li><a href="tree_view.php">Tree view</a></li>
                        <li><a href="loading_buttons.php">Loading buttons</a></li>
                        <li><a href="chat_view.php">Chat view</a></li>
                        <li><a href="masonry.php">Masonry</a></li>
                        <li><a href="tour.php">Tour</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-flask"></i> <span class="nav-label">UI Elements</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="typography.php">Typography</a></li>
                        <li><a href="icons.php">Icons</a></li>
                        <li><a href="draggable_panels.php">Draggable Panels</a></li> <li><a href="resizeable_panels.php">Resizeable Panels</a></li>
                        <li><a href="buttons.php">Buttons</a></li>
                        <li><a href="video.php">Video</a></li>
                        <li><a href="tabs_panels.php">Panels</a></li>
                        <li><a href="tabs.php">Tabs</a></li>
                        <li><a href="notifications.php">Notifications & Tooltips</a></li>
                        <li><a href="helper_classes.php">Helper css classes</a></li>
                        <li><a href="badges_labels.php">Badges, Labels, Progress</a></li>
                    </ul>
                </li>

                <li>
                    <a href="grid_options.php"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="table_basic.php">Static Tables</a></li>
                        <li><a href="table_data_tables.php">Data Tables</a></li>
                        <li><a href="table_foo_table.php">Foo Tables</a></li>
                        <li><a href="jq_grid.php">jqGrid</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="ecommerce_products_grid.php">Products grid</a></li>
                        <li><a href="ecommerce_product_list.php">Products list</a></li>
                        <li><a href="ecommerce_product.php">Product edit</a></li>
                        <li><a href="ecommerce_product_detail.php">Product detail</a></li>
                        <li><a href="ecommerce-cart.php">Cart</a></li>
                        <li><a href="ecommerce-orders.php">Orders</a></li>
                        <li><a href="ecommerce_payments.php">Credit Card form</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="basic_gallery.php">Lightbox Gallery</a></li>
                        <li><a href="slick_carousel.php">Slick Carousel</a></li>
                        <li><a href="carousel.php">Bootstrap Carousel</a></li>

                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>

                            </ul>
                        </li>
                        <li><a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                        <li>
                            <a href="#">Second Level Item</a></li>
                    </ul>
                </li>
                <li>
                    <a href="css_animation.php"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span><span class="label label-info pull-right">62</span></a>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="landing.php"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                </li>
                <li class="special_link">
                    <a href="package.php"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                </li>
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.php">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.php" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.php" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.php" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.php">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.php">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.php">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.php">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.php">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.php">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Outlook view</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a>Layouts</a>
                        </li>
                        <li class="active">
                            <strong>Outlook view</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="fh-breadcrumb">

                <div class="fh-column">
                    <div class="full-height-scroll">
                        <ul class="list-group elements-list">
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-1">
                                    <small class="pull-right text-muted"> 16.02.2015</small>
                                    <strong>Ann Smith</strong>
                                    <div class="small m-t-xs">
                                        <p>
                                            Survived not only five centuries, but also the leap scrambled it to make.
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> Riviera State 32/106
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item active">
                                <a data-toggle="tab" href="#tab-2">
                                    <small class="pull-right text-muted"> 11.10.2015</small>
                                    <strong>Paul Morgan</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            There are many variations of passages of Lorem Ipsum.
                                            <br/>
                                        </p>
                                        <p class="m-b-none">

                                            <span class="label pull-right label-primary">SPECIAL</span>
                                            <i class="fa fa-map-marker"></i> California 10F/32
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-3">
                                    <small class="pull-right text-muted"> 08.04.2015</small>
                                    <strong>Michael Jackson</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            Look even slightly believable. If you are going to use a passage of.
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> Berlin 120R/15
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-4">
                                    <small class="pull-right text-muted"> 16.02.2015</small>
                                    <strong>Mark Smith</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            It was popularised in the 1960s with the release of Letraset sheets
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> San Francisko 12/100
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-1">
                                    <small class="pull-right text-muted"> 21.04.2015</small>
                                    <strong>Monica Novak</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            Printer took a galley of type and scrambled.
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> New York 15/43
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-2">
                                    <small class="pull-right text-muted"> 03.12.2015</small>
                                    <strong>Jack Smith</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            Also the leap into electronic typesetting, remaining.
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> Sant Fe 10/106
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-3">
                                    <small class="pull-right text-muted"> 08.04.2015</small>
                                    <strong>Michael Jackson</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            Look even slightly believable. If you are going to use a passage of.
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> Berlin 120R/15
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-4">
                                    <small class="pull-right text-muted"> 16.02.2015</small>
                                    <strong>Mark Smith</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            It was popularised in the 1960s with the release of Letraset sheets
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> San Francisko 12/100
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a data-toggle="tab" href="#tab-1">
                                    <small class="pull-right text-muted"> 21.04.2015</small>
                                    <strong>Monica Novak</strong>
                                    <div class="small m-t-xs">
                                        <p class="m-b-xs">
                                            Printer took a galley of type and scrambled.
                                        </p>
                                        <p class="m-b-none">
                                            <i class="fa fa-map-marker"></i> New York 15/43
                                        </p>
                                    </div>
                                </a>
                            </li>


                        </ul>

                    </div>
                </div>

                <div class="full-height">
                    <div class="full-height-scroll white-bg border-left">

                        <div class="element-detail-box">

                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane">

                                    <div class="pull-right">
                                        <div class="tooltip-demo">
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="left" title="Plug this message"><i class="fa fa-plug"></i> Plug it</button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Move to trash"><i class="fa fa-trash-o"></i> </button>

                                        </div>
                                    </div>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock-o"></i> Friday, 12 April 2014, 12:32 am
                                    </div>

                                    <h1>
                                        Their separate existence is a myth
                                    </h1>

                                    <p>
                                        The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>
                                    <p>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.
                                    </p>
                                    <p>
                                        The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.
                                    </p>

                                    <p>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                                    </p>
                                    <p>
                                        The new common language will be more simple and regular than the existing European languages. It will be as simpl.
                                    </p>
                                    <p>
                                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>
                                    <p>
                                        The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.
                                    </p>
                                    <p>
                                        It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.
                                    </p>

                                    <p>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                                    </p>
                                    <p>
                                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>
                                    <p class="small">
                                        <strong>Best regards, Anthony Smith </strong>
                                    </p>

                                    <div class="m-t-lg">
                                        <p>
                                            <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                                            <a href="#">Download all</a>
                                            |
                                            <a href="#">View all images</a>
                                        </p>

                                        <div class="attachment">
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-file"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Document_2014.doc
                                                            <br>
                                                            <small>Added: Jan 11, 2014</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-line-chart"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Seels_2015.xls
                                                            <br>
                                                            <small>Added: May 13, 2015</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>

                                <div id="tab-2" class="tab-pane active">
                                    <div class="pull-right">
                                        <div class="tooltip-demo">
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="left" title="Plug this message"><i class="fa fa-plug"></i> Plug it</button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Move to trash"><i class="fa fa-trash-o"></i> </button>

                                        </div>
                                    </div>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock-o"></i> Monday, 21 May 2014, 10:32 am
                                    </div>

                                    <h1>
                                        The European languages - same family.
                                    </h1>

                                    <p>
                                        One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.
                                    </p>
                                    <p>
                                        The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.
                                    </p>

                                    <p>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                                    </p>
                                    <p>
                                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>
                                    <p>
                                        The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.
                                    </p>

                                    <p>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                                    </p>
                                    <p>
                                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>
                                    <p class="small">
                                        <strong>Best regards, Anthony Smith </strong>
                                    </p>

                                    <div class="m-t-lg">
                                        <p>
                                            <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                                            <a href="#">Download all</a>
                                            |
                                            <a href="#">View all images</a>
                                        </p>

                                        <div class="attachment">
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-file"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Document_2014.doc
                                                            <br>
                                                            <small>Added: Jan 11, 2014</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-line-chart"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Seels_2015.xls
                                                            <br>
                                                            <small>Added: May 13, 2015</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab-3" class="tab-pane">
                                    <div class="pull-right">
                                        <div class="tooltip-demo">
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="left" title="Plug this message"><i class="fa fa-plug"></i> Plug it</button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Move to trash"><i class="fa fa-trash-o"></i> </button>

                                        </div>
                                    </div>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock-o"></i> Tuesday, 15 May 2014, 10:32 am
                                    </div>

                                    <h1>
                                        To take a trivial example
                                    </h1>

                                    <p>
                                        But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.
                                    </p>
                                    <p>
                                        The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.
                                    </p>

                                    <p>
                                        he wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and.
                                    </p>
                                    <p>
                                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>

                                    <p>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                                    </p>
                                    <p>
                                        To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce.
                                    </p>
                                    <p class="small">
                                        <strong>Best regards, Anthony Smith </strong>
                                    </p>

                                    <div class="m-t-lg">
                                        <p>
                                            <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                                            <a href="#">Download all</a>
                                            |
                                            <a href="#">View all images</a>
                                        </p>

                                        <div class="attachment">
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-file"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Document_2014.doc
                                                            <br>
                                                            <small>Added: Jan 11, 2014</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-line-chart"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Seels_2015.xls
                                                            <br>
                                                            <small>Added: May 13, 2015</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-4" class="tab-pane">
                                    <div class="pull-right">
                                        <div class="tooltip-demo">
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="left" title="Plug this message"><i class="fa fa-plug"></i> Plug it</button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="Mark as read"><i class="fa fa-eye"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as important"><i class="fa fa-exclamation"></i> </button>
                                            <button class="btn btn-white btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="Move to trash"><i class="fa fa-trash-o"></i> </button>

                                        </div>
                                    </div>
                                    <div class="small text-muted">
                                        <i class="fa fa-clock-o"></i> Thursday, 27 april 2014, 10:32 am
                                    </div>

                                    <h1>
                                        Gregor Samsa woke from troubled dreams.
                                    </h1>

                                    <p>
                                        His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me?" he thought. It wasn't a dream. His room, a proper human room although a little too small, lay peacefully between its four familiar walls.
                                    </p>
                                    <p>
                                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>
                                    <p>
                                        Travelling day in and day out. Doing business like this takes much more effort than doing your own business at home, and on top of that there's the curse of travelling, worries about making train connections, bad and irregular food, contact with different people all the time so that you can never get to know anyone or become friendly with them.
                                    </p>

                                    <p>
                                        The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.
                                    </p>
                                    <p>
                                        To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is.
                                    </p>
                                    <p class="small">
                                        <strong>Best regards, Anthony Smith </strong>
                                    </p>

                                    <div class="m-t-lg">
                                        <p>
                                            <span><i class="fa fa-paperclip"></i> 2 attachments - </span>
                                            <a href="#">Download all</a>
                                            |
                                            <a href="#">View all images</a>
                                        </p>

                                        <div class="attachment">
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-file"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Document_2014.doc
                                                            <br>
                                                            <small>Added: Jan 11, 2014</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="#">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <i class="fa fa-line-chart"></i>
                                                        </div>
                                                        <div class="file-name">
                                                            Seels_2015.xls
                                                            <br>
                                                            <small>Added: May 13, 2015</small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>



            </div>

        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>


</body>

</html>
