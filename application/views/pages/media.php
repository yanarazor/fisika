<?php
  $this->load->library('convert');
  $convert = new convert();
  $photo = $recordberita->picture != "" ? $this->settings_lib->item('site.urlimggallery').$recordberita->picture : "http://placehold.it/745x400";
?>
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-6" data-bg-img="<?php echo base_url(); ?>assets/images/header3.jpg">
      <div class="container pt-20 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"><?php echo lang('bf_newsnmedia'); ?></h2>

              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_newsnmedia'); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: service-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <img src="<?php echo $photo; ?>" alt="">
              <h3 class="text-theme-colored line-bottom-theme-colored2 text-theme-colored"><?php echo $recordberita->{"title".$language}; ?></h3>
              <?php echo html_entity_decode($recordberita->{"content".$language}); ?>
              <div class="tagline pt-10 mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <div class="tags">
                      
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="share text-right">
                      <div class="addthis_toolbox addthis_default_style">
                            <a class="addthis_counter addthis_pill_style"></a>
                        </div>
                        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51b6e3c24a39bcb5"></script>
                        
                         <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                          fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));</script>
                                
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <div class="services-list">
                  <ul class="list list-border mt-0">
                    <li class="<?php echo (isset($pages) and $pages == "publikasi-ilmiah") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/media/publikasi-ilmiah"><?php echo lang('bf_publikasi'); ?></a></li>
                        <li class="<?php echo (isset($pages) and $pages == "event") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/media/event"><?php echo lang('bf_events'); ?></a></li>
                        <li class="<?php echo (isset($pages) and $pages == "gallery") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/gallery"><?php echo lang('bf_gallerivideo'); ?></a></li>
                        <li class="<?php echo (isset($pages) and $pages == "pengumuman") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/media/pengumuman"><?php echo lang('bf_pengumuman'); ?></a></li>
                  </ul>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>