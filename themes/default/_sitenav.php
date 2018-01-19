<?php
$this->load->library('convert');
$convert = new convert();
?>
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="<?php echo base_url(); ?>assets/images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header">
    <div class="header-top bg-theme-colored border-top-theme-colored2-2px sm-text-center">
      <div class="container">
        <div class="row">          
          <div class="col-md-6">
            <div class="widget">
              <ul class="styled-icons icon-sm icon-theme-colored2 mt-5">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget">
              <ul class="list-inline text-right flip sm-text-center">
                <li>
                  <a class="text-white" href="#" onclick="changelang('id')">Indonesia</a>
                </li>
                <li class="text-white">|</li>
                <li>
                  <a class="text-white" href="#" onclick="changelang('en')">Inggris</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-middle border-bottom xs-text-center p-0">
      <div class="container pt-20 pb-15">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3">
            <a class="menuzord-brand pull-left flip sm-pull-center mt-10" href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url(); ?>assets/images/logofisika.png" alt="">
            </a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-9">
            <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                <a href="<?php echo base_url(); ?>pages/contact">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="pe-7s-call text-theme-colored2 bg-silver-light border-1px font-28 font-weight-800 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none p-10"></i>
                  <a href="<?php echo base_url(); ?>pages/contact" class="font-13 text-theme-colored font-weight-600 text-uppercase"><?php echo lang('bf_hubungititle'); ?></a>
                  <h5 class="font-12 text-gray m-0"> +(021) 7560570,7560556</h5>
                </div>
                </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-8">
                <a href="<?php echo base_url(); ?>pages/contact">
                <div class="widget no-border sm-text-center mt-10 mb-10 m-0">
                  <i class="pe-7s-map-marker text-theme-colored2 bg-silver-light border-1px font-28 font-weight-800 mr-15 mr-sm-0 sm-display-block pull-left flip sm-pull-none p-10"></i>
                  <a href="<?php echo base_url(); ?>pages/contact" class="font-13 text-theme-colored font-weight-600 text-uppercase"><?php echo lang('bf_addresstitle'); ?></a>
                  <h5 class="font-12 text-gray m-0">Kwsn PUSPIPTEK Tangerang Selatan Banten 15314</h5>
                </div>
                </a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container">
          <nav id="menuzord" class="menuzord default theme-colored menuzord-responsive">
            <ul class="menuzord-menu">
              <li class="<?php echo (isset($mainmenu) and $mainmenu =="about") ? "active" : "";?>"><a href="<?php echo base_url(); ?>pages"><?php echo lang('bf_tentangkami'); ?></a>
                <!--
                <ul class="dropdown">
                  <li><a href="<?php echo base_url(); ?>pages/about/sambutan-kapus"><?php echo lang('bf_sambutankapus'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>pages/about/visi-misi"><?php echo lang('bf_visimisi'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>pages/about/statistik-satker"><?php echo lang('bf_statistiksatker'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>pages/about/laporan"><?php echo lang('bf_laporan'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>pages/about/struktur-organisasi"><?php echo lang('bf_strukturorganisasi'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>pages/about/sejarah"><?php echo lang('bf_sejarah'); ?></a></li>
                  <li><a href="<?php echo base_url(); ?>pages/about/kontak-kami"><?php echo lang('bf_kontakkami'); ?></a></li>
                </ul>
              </li>
              -->
              <li class="<?php echo (isset($mainmenu) and $mainmenu =="fasilitas") ? "active" : "";?>"><a href="<?php echo base_url(); ?>pages/fasilitas"><?php echo lang('bf_fasilitas'); ?></a></li>
              <li class="<?php echo (isset($mainmenu) and $mainmenu =="news") ? "active" : "";?>"><a href="<?php echo base_url(); ?>news"><?php echo lang('bf_newsnmedia'); ?></a>
                <div class="megamenu megamenu-bg-img">
                  <div class="megamenu-row">
                    <div class="col7">
                      <h4 class="megamenu-col-title"><?php echo lang('bf_lates'); ?> <?php echo lang('bf_newslates'); ?>:</h4>
                      <div class="widget">
                        <div class="latest-posts">
                           <?php
                              $has_beritaterbaru  = isset($recordterbarus) && is_array($recordterbarus) && count($recordterbarus);
                            if ($has_beritaterbaru) :
                              foreach ($recordterbarus as $record) :
                              $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture : "http://placehold.it/80x55";
                            ?>
                              <article class="post media-post clearfix pb-0 mb-10">
                                <a class="post-thumb" href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><img src="<?php echo $photo; ?>" alt=""></a>
                                <div class="post-right">
                                  <h5 class="post-title mt-0 mb-5"><a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language}; ?></a></h5>
                                  <p class="post-date mb-0 font-12"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></p>
                                </div>
                              </article>
                            <?php
                              endforeach;
                            endif;
                            ?>
                        </div>
                      </div>
                    </div>
                     
                    <div class="col5">
                      <h4 class="megamenu-col-title"><?php echo lang('bf_quicklink'); ?></h4>
                      <ul class="list-dashed list-icon">
                        <li><a href="<?php echo base_url(); ?>pages/media/publikasi-ilmiah"><?php echo lang('bf_publikasi'); ?></a></li>
                        <li><a href="<?php echo base_url(); ?>news/event"><?php echo lang('bf_events'); ?></a></li>
                        <li><a href="<?php echo base_url(); ?>pages/gallery"><?php echo lang('bf_gallerivideo'); ?></a></li>
                        <li><a href="<?php echo base_url(); ?>news/pengumuman"><?php echo lang('bf_pengumuman'); ?></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="#home"><?php echo lang('bf_layanan'); ?></a>
                <ul class="dropdown">
                  <li><a href="http://www.fisika.lipi.go.id/layanan/"><?php echo lang('bf_layananpengujian'); ?></a></li>
                  <li><a href="http://www.fisika.lipi.go.id/layanan/"><?php echo lang('bf_kerjasamariset'); ?></a></li>
                  <li><a href="http://www.fisika.lipi.go.id/layanan/"><?php echo lang('bf_layananbimbingan'); ?></a></li> 
                </ul>
              </li>
            </ul>
            <div class="pull-right sm-pull-none mb-sm-15">
              <div class="search-form-wrapper">
                <form class="mt-10 mb-5" role="form" action="<?php echo base_url()?>news" method="get">
                  <input type="text" value="<?php echo isset($key) ? $key : ""; ?>" name="key" placeholder="<?php echo lang('bf_keyword'); ?>" class="form-control search-input">
                  <label>
                    <input type="submit" value="" name="submit">
                  </label>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>