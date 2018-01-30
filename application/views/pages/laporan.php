<?php
  $this->load->library('convert');
  $convert = new convert();
?>
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-6" data-bg-img="<?php echo base_url(); ?>assets/images/header3.jpg">
      <div class="container pt-20 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"><?php echo lang('bf_tentangkami'); ?></h2>

              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_laporan'); ?></a></li>
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
          <div class="col-md-8 blog-pull-left">
            <div class="single-service">
              <h3 class="text-theme-colored line-bottom-theme-colored2 text-theme-colored"><?php echo lang('bf_laporan'); ?></h3>
              <div class="tagline pt-10 mt-5">
                <div class="row">
                  <div class="col-md-12">
                     <div id="grid" class="gallery-isotope default-animation-effect grid-3 gutter clearfix">
                      <?php
                      $has_records  = isset($records) && is_array($records) && count($records);
                        if ($has_records) :
                          foreach ($records as $record) :
                          $photo = "noimage.jpg";
                        ?>
                          
                          <div class="gallery-item photography">
                            <div class="brochures-list">
                              <center>
                                <a href="<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $record->file_name; ?>" target="_blank" class="<?php echo $record->id; ?> ">
                                  <img src="<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $record->cover; ?>"/>
                                </a>

                              <a href="#" class="<?php echo $record->id; ?> "><h5 class="primary-font"><?php echo $record->nama; ?></h5></a>
                              <p class="text-muted">
                                <?php echo $record->keterangan; ?>
                              </p>
                              <p>
                              </p>
                              <a href="<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $record->file_name; ?>" target="_blank" id="<?php echo $record->id; ?>" class="<?php echo $record->id; ?> btn btn-sm btn-color btn-warning"><i class="fa fa-eye" style="font-size:14px;"></i> Baca</a>
                              </center>
                            </div>
                          </div>
                           <?php  
                         endforeach;
                        endif;
                       ?>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
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
                    <li class="<?php echo (isset($pages) and $pages == "sambutan-kapus") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/sambutan-kapus"><?php echo lang('bf_sambutankapus'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "visi-misi") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/visi-misi"><?php echo lang('bf_visimisi'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "statistik-satker") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/statistik-satker"><?php echo lang('bf_statistiksatker'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "laporan") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/laporan"><?php echo lang('bf_laporan'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "struktur-organisasi") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/struktur-organisasi"><?php echo lang('bf_strukturorganisasi'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "sejarah") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/sejarah"><?php echo lang('bf_sejarah'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "kontak-kami") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/kontak-kami"><?php echo lang('bf_kontakkami'); ?></a></li>
                  </ul>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>