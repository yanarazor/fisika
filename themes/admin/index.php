<?php echo theme_view('partials/_header'); ?> 
<?php
    $mainmenu = $this->uri->segment(2);
    $menu = $this->uri->segment(3);
?>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <center><img alt="image" class="img-circle" src="<?php echo base_url();?>assets/images/hut50lipi2017.png" width="100px" />
                            </center>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">
                            	<?php echo (isset($current_user->display_name) && !empty($current_user->display_name)) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email); ?></strong>
                             </span> <span class="text-muted text-xs block">
                             <?php echo (isset($current_user->role_name) && !empty($current_user->role_name)) ? $current_user->role_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->role_name : $current_user->role_name); ?> <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo site_url(SITE_AREA .'/settings/users/edit') ?>">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('logout'); ?>">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            FS
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Konten</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url();?>admin/content/kategori_berita"><i class="fa fa-circle-o"></i>Kategori Berita</a></li>
				            <li><a href="<?php echo base_url();?>admin/content/berita"><i class="fa fa-circle-o"></i>Berita</a></li>
				            <li><a href="<?php echo base_url();?>admin/content/informasi_publik"><i class="fa fa-circle-o"></i>Informasi Publik</a></li>
				            <li><a href="<?php echo base_url();?>admin/content/galleri"><i class="fa fa-circle-o"></i>Galeri</a></li>
				            <li><a href="<?php echo base_url();?>admin/content/pesan"><i class="fa fa-circle-o"></i>Pesan</a></li>
                            <!--
				            <li><a href="<?php echo base_url();?>admin/content/product"><i class="fa fa-circle-o"></i>Product</a></li>
                            <li><a href="<?php echo base_url();?>admin/content/buku"><i class="fa fa-circle-o"></i>Buku</a></li>
				            <li><a href="<?php echo base_url();?>admin/content/paten"><i class="fa fa-circle-o"></i>Paten</a></li>
				            <li><a href="<?php echo base_url();?>admin/content/publikasi"><i class="fa fa-circle-o"></i>Publikasi</a></li>
                            <li><a href="<?php echo base_url();?>admin/masters/pegawai"><i class="fa fa-circle-o"></i>Pegawai</a></li>
                            -->
                        </ul>
                    </li>
                    <!--
                     <?php if ($this->auth->has_permission('Kegiatan.Masters.View')) : ?>
                        <li class="treeview <?php echo $mainmenu == 'masters' ? 'active' : '' ?>">
                          <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Masters</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu nav nav-second-level">
                            <li><a href="<?php echo base_url();?>admin/masters/kegiatan"><i class="fa fa-circle-o"></i>Kegiatan Penelitian</a></li>
                          </ul>
                        </li>
                         <?php endif; ?>   
                    -->   
                     <?php if ($this->auth->has_permission('Site.Developer.View')) : ?>
                        <li class="treeview <?php echo $mainmenu == 'developer' ? 'active' : '' ?>">
                          <a href="#">
                            <i class="fa fa-folder"></i> <span>DEVELOPER</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu nav nav-second-level">
                            <li><a href="<?php echo base_url();?>admin/developer/sysinfo">Informasi Sistem</a></li>
                            <li><a href="<?php echo base_url();?>admin/developer/translate/">Translate</a></li>
                             <li>
                              <a href="<?php echo base_url();?>admin/settings/emailer">Database Tools
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li><a href="<?php echo base_url();?>admin/developer/database">Maintenance</a></li>
                                <li><a href="<?php echo base_url();?>admin/developer/database/backups">Backups</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->auth->has_permission('Site.Settings.View')) : ?>
                        <li class="treeview <?php echo $mainmenu == 'settings' ? 'active' : '' ?>">
                          <a href="#">
                            <i class="fa fa-share"></i> <span>Settings</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu nav nav-second-level">
                            <li><a href="<?php echo base_url();?>admin/settings/settings">Setting</a></li>
                            <li><a href="<?php echo base_url();?>admin/settings/roles">Role</a></li>
                            <li><a href="<?php echo base_url();?>admin/settings/users">User</a></li>
                            <li><a href="<?php echo base_url();?>admin/settings/permissions">Permissions</a></li>
                            <li>
                              <a href="<?php echo base_url();?>admin/settings/emailer">Email
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu nav nav-second-level">
                                <li><a href="<?php echo base_url();?>admin/settings/emailer">Setting</a></li>
                                <li><a href="<?php echo base_url();?>admin/settings/emailer/template">Template</a></li>
                                <li><a href="<?php echo base_url();?>admin/settings/emailer/queue">Antrian</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                    <?php endif; ?>
                       
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="#" id="damian">Third Level <span class="fa arrow"></span></a>
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
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"><?php
				echo $this->settings_lib->item('site.title');
			?></span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
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
                                <a href="profile.html" class="pull-left">
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
                                <a href="profile.html" class="pull-left">
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
                                <a href="mailbox.html">
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
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="<?php echo site_url('logout'); ?>">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>
        <div class="row">
            <div class="col-lg-12">
            	<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo isset($title) ? $title : ""; ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a>
                            <?php if (isset($toolbar_title)) : ?>
				  			<?php echo $toolbar_title ?>
				  			<?php endif; ?>
				  			</a>
                        </li>
                        
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
                <div class="wrapper wrapper-content">
                	<?php echo Template::message(); ?>
					<?php echo isset($content) ? $content : Template::content(); ?>
                </div>
                
            </div>
        </div>

        </div>
    </div>

  <?php echo theme_view('partials/_footer'); ?> 