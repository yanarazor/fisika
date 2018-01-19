<?php
  $this->load->library('convert');
  $convert = new convert();
?>
<section>
      <div class="container">
        <div class="section-content">
        <div class="row"> 
            <div class="col-md-4">
              <h3 class="text-theme-colored2 font-36"><?php echo lang('bf_gallerivideo'); ?></h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_newsnmedia'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_gallerivideo'); ?></a></li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              
            
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
               <?php
                $has_galleri  = isset($recordgallerys) && is_array($recordgallerys) && count($recordgallerys);
                if ($has_galleri) :
                  foreach ($recordgallerys as $record) :
                  $photo = $record->filename != "" ? $this->settings_lib->item('site.urlimggallery').$record->filename : "http://placehold.it/450x250";
                ?>

                <!-- Portfolio Item Start -->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo $photo; ?>" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="<?php echo $record->link; ?>" title="<?php echo isset($recordvideo->judul) ? $recordvideo->judul : ""; ?>"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
               <?php  
                  endforeach;
                endif;
                ?>
                 
              </div>
              <!-- End Portfolio Gallery Grid -->

            </div>
          </div>
        </div>
      </div>
    </section>