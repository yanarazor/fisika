<?php
$this->load->library('convert');
$convert = new convert();
?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery34" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <?php
                $has_beritaterbaru  = isset($ecordheadline) && is_array($ecordheadline) && count($ecordheadline);
                  $i = 1;
              if ($has_beritaterbaru) :
                foreach ($ecordheadline as $record) :
                $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture :  $this->settings_lib->item('site.urlimggallery')."slidedefault.jpg";
                //echo $photo;
              ?>
                   <!-- SLIDE 1 -->
                    <li data-index="rs-<?php echo $i; ?>" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo $photo; ?>" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="Slide One">
                      <!-- MAIN IMAGE -->
                      <img src="<?php echo $photo; ?>" alt="" data-bgposition="center 40%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                      <!-- LAYERS -->
                      <!-- LAYER NR. 1 -->
                      <div class="tp-caption tp-resizeme text-black-333 rs-parallaxlevel-0" 
                        id="slide-2-layer-<?php echo $i; ?>" 
                        data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                        data-y="['top','top','top','top']" data-voffset="['140','100','70','90']"
                        data-fontsize="['44','36','30','18']"
                        data-lineheight="['70','60','50','45']"
                        data-fontweight="['800','700','700','700']"
                        data-width="['700','650','600','420']"
                        data-height="none"
                        data-whitespace="normal"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                        data-start="1000"
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                        style="z-index: 6; min-width: 600px; max-width: 600px; white-space: normal;"><span class="text-theme-colored2"><?php echo $record->{"title".$language}; ?> </span>
                      </div>
                     
                      <!-- LAYER NR. 3 -->
                      <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                        id="slide-1-layer-<?php echo $i; ?>" 
                        data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                        data-y="['top','top','top','top']" data-voffset="['380','290','260','260']" 
                        data-fontsize="['18','18','16','16']"
                        data-lineheight="['30','30','30','30']"
                        data-fontweight="['600','600','600','600']"
                        data-width="['700','650','600','420']"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                        data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                        data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on" 
                        style="z-index: 7; white-space: nowrap;">
                        <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>" class="btn btn-dark btn-theme-colored2 btn-xl mr-10"><?php echo lang('bf_readmore'); ?></a> 
                      </div>
                    </li>

               <?php  
                    $i++;
                endforeach;
              endif;
              ?>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.4);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;         
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    enable: true,
        style: 'gyges',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 0,
                        v_offset: 0
                    }
                  },
                  bullets: {
                    enable: true,
                    style: 'hebe',
                    tmp: '<span class="tp-bullet-image"></span>',
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>

   
    <!-- Section: Services -->
    <section id="services">
      <div class="container pb-10">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-6 col-md-offset-3  text-center">
              <h2 class="title text-uppercase"><?php echo lang('bf_groupresearch_group'); ?> <span class="text-theme-colored2"><?php echo lang('bf_groupresearch_research'); ?></span></h2>
              <p><?php echo lang('bf_groupresearchdesc'); ?></p>
              <div class="line-bottom-centered"></div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
          <div class="owl-carousel-3col" data-nav="true">
             <?php
              $has_keltian  = isset($recordkeltians) && is_array($recordkeltians) && count($recordkeltians);
              if ($has_keltian) :
                foreach ($recordkeltians as $record) :
                $photo = $record->picture != "" ? $record->picture : "imagenoavailable.png";
              ?>
                <a href="<?php echo base_url(); ?>pages/keltian/<?php echo $record->seo_title; ?>"> 
                   <div class="col-xs-12">
                      <div class="service-box border-1px hover-box-shadow p-30 mb-20">
                        <h4 class="media-heading heading font-weight-600"><?php echo $record->{"title".$language}; ?></h4>
                        <p><?php echo $convert->countwordscustom($record->{"content".$language},100); ?></p>
                      </div>
                    </div>
                </a>
               <?php  
                endforeach;
              endif;
              ?>
             
          </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Section About -->
    <section id="about" class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="font-32 font-weight-600 mt-0"><?php echo isset($recordvideo->judul) ? $recordvideo->judul : ""; ?></h3>
              <p class="font-16 mt-15 mb-15"><?php echo isset($recordvideo->keterangan) ? $recordvideo->keterangan : ""; ?></p>
              <h5><span class="text-theme-colored2">Galleri Lainnya : </span></h5>

               <div class="row">
                <div id="grid" class="gallery-isotope default-animation-effect grid-2 gutter clearfix" style="position: relative; height: 640.484px; margin-bottom: 0px;">
                  <!-- Portfolio Item Start -->
                  <?php
                  $has_galleri  = isset($recordgallerys) && is_array($recordgallerys) && count($recordgallerys);
                  if ($has_galleri) :
                    foreach ($recordgallerys as $record) :
                    $photo = $record->filename != "" ? $this->settings_lib->item('site.urlimggallery').$record->filename : "http://placehold.it/450x250";
                  ?>
                  <div class="gallery-item photography col-md-12">
                    <div class="thumb">
                      <img class="img-fullwidth" src="<?php echo $photo; ?>" alt="project">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a class="popup-youtube" href="<?php echo $record->link; ?>"><i class="fa fa-youtube-play"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php  
                    endforeach;
                  endif;
                  ?>
                  <!-- Portfolio Item End -->
                </div>
                </div>
            </div>
            <div class="col-md-6">
              <div class="box-hover-effect about-video mt-sm-30">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo isset($recordvideo->filename) ? $recordvideo->filename : ""; ?>" alt="project">
                  </div>
                  <div class="video-button"></div>
                  <a class="hover-link" data-lightbox-gallery="youtube-video" href="<?php echo isset($recordvideo->link) ? $recordvideo->link : ""; ?>" title="<?php echo isset($recordvideo->judul) ? $recordvideo->judul : ""; ?>"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    <section id="team">
      <div class="container">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-6 col-md-offset-3  text-center">
              <h2 class="title text-uppercase"><?php echo lang('bf_peneliti'); ?> <span class="text-theme-colored2"><?php echo lang('bf_unggulan'); ?></span></h2>
              <p><?php echo lang('bf_titlepenelitiunggulan'); ?></p>
              <div class="line-bottom-centered"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="section-content">
            <div class="row">
              <?php
                $has_recordpegawais = isset($recordpegawais) && is_array($recordpegawais) && count($recordpegawais);
                if ($has_recordpegawais) :
                  foreach ($recordpegawais as $record) :
              ?>
              <div class="col-md-3">
                <div class="team-members-stye2 text-center maxwidth400">
                  <div class="team-thumb">
                    <a href="<?php echo base_url(); ?>emp/view/<?php echo $record->nip; ?>/<?php echo $convert->SeoUrl($record->nama); ?>">
                      <div class="team-thumb-img">
                        <img src="<?php echo $record->foto; ?>" alt="" class="img-fullwidth">
                      </div>
                    </a>
                    <ul class="styled-icons icon-sm bg-theme-colored2 text-centered pt-5">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                  </div>
                  <div class="team-bottom-part bg-silver-light border-bottom-theme-color-4px p-15">
                    <h4 class="text-uppercase m-0 pb-5"><a href="<?php echo base_url(); ?>emp/view/<?php echo $record->nip; ?>/<?php echo $convert->SeoUrl($record->nama); ?>"><?php echo $record->nama; ?></a></h4>
                    <h6 class="font-13 text-gray mt-0"><?php echo $record->jabatan_ft; ?></h6>
                  </div>
                </div>
              </div>
              <?php
                  endforeach;
                endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog">
      <div class="container pb-sm-40">
        <div class="section-content">       
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title"><?php echo lang('bf_lates'); ?> <span class="text-theme-colored2"><?php echo lang('bf_newslates'); ?></span></h2>
              <div class="line-bottom-theme-colored2"></div>
              <div class="owl-carousel-3col" data-nav="true">
                <?php
                    $has_beritaterbaru  = isset($recordterbarus) && is_array($recordterbarus) && count($recordterbarus);
                  if ($has_beritaterbaru) :
                    foreach ($recordterbarus as $record) :
                    $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture : "http://placehold.it/370x245";
                  ?>
                <div class="item">
                  <article class="post">
                    <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>">
                      <div class="post-thumb position-relative">
                        <img src="<?php echo $photo; ?>" class="img-fullwidth" alt="">
                        <span><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></span>
                      </div>
                    </a>
                    <div class="post-description border-1px p-20">
                      <p class="mb-20"><?php echo $record->{"title".$language}; ?></p>
                      <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>" class="blog-read-more text-theme-colored2 font-15 text-gray-darkgray"><?php echo lang('bf_readmore'); ?></a>
                    </div>
                  </article>
                </div>
                <?php
                  endforeach;
                endif;
                ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Divider: Reservation Form -->
    <section data-bg-img=" " class="layer-overlay overlay-theme-colored-9">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-6 col-md-6 pull-right xs-pull-none">
            <div class="pt-70 pb-30 pl-10 pr-10 p-md-10">
              <div class="mt-sm-40">
                 <center><h2 class="text-uppercase title"><span class="text-theme-colored2">Birokrasi tanpa korupsi adalah harga mati </span></h2></center>
                <!-- Reservation Form Validation Start -->
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 p-0 bg-img-cover" data-bg-img="<?php echo base_url(); ?>assets/images/zi.jpeg">
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  <!-- Footer -->