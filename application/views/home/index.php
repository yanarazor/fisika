<?php
$this->load->library('convert');
$convert = new convert();
?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:100px auto;padding-left:150px;padding-right:150px;margin-top:0px;margin-bottom:0px;height: 430px; background: #081744 url(<?php echo base_url() ?>assets/images/bg_panel.jpg) repeat-y center 0;">
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
                        data-x="['left','left','left','left']" data-hoffset="['10','50','50','30']" 
                        data-y="['top','top','top','top']" data-voffset="['200','20','70','90']"
                        data-fontsize="['30','26','20','18']"
                        data-lineheight="['70','60','50','45']"
                        data-fontweight="['500','700','700','700']"
                        data-width="['900','650','430','420']"
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
                        style="z-index: 6; min-width: 430px; max-width: 901px; background-color: transparent; padding-left: 10px; white-space: normal;"><a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"<span class="text-theme-colored2"><?php echo $record->{"title".$language}; ?></a> </span>
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
                    hide_under:430,
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
                gridheight:[430,550,500,430],
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

  <div class="row">
      <div class="container pb-sm-40">    
          <div class="row">
            <div class="col-md-9">
                <div class="col-md-6">
                  <h4 class="text-uppercase title"><?php echo lang('bf_pressrelease'); ?></h4>
                  <div class="line-bottom-theme-colored2"></div>
                    <div class="">
                      <?php
                            $has_beritaterbaru  = isset($recordevents) && is_array($recordevents) && count($recordevents);
                          if ($has_beritaterbaru) :
                            $no = 1;
                            foreach ($recordevents as $record) :
                            $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture : "http://placehold.it/185x145";
                            if($no<3){
                         ?>
                                <span><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></span>
                                <h5 class="entry-title mt-0 mb-5"><a href="#"><?php echo $record->{"title".$language}; ?></a></h5>
                                <article class="post media-post clearfix pb-0 mb-10">
                                  <a class="post-thumb" href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><img src="<?php echo $photo; ?>" alt=""></a>
                                  <div class="post-right">
                                    <p><?php echo $convert->countwordscustom($record->{"content".$language},200); ?></p>
                                  </div>
                                </article>
                                <hr>
                              <?php
                              $no++;
                            }else{
                            ?>
                                <span class="mt-10"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></span>
                                <h5 class="entry-title mt-0 mb-20"><a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language}; ?></a></h5>
                                 
                            <?php
                            }
                          endforeach;
                        endif;
                        ?>
                      </div>
                </div>
                <div class="col-md-6">
                  <h4 class="text-uppercase title"><?php echo lang('bf_pressrelease'); ?></h4>
                  <div class="line-bottom-theme-colored2"></div>
                    <div class="">
                      <?php
                            $has_beritaterbaru  = isset($recordterbarus) && is_array($recordterbarus) && count($recordterbarus);
                          if ($has_beritaterbaru) :
                            $no = 1;
                            foreach ($recordterbarus as $record) :
                            $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture : "http://placehold.it/185x145";
                            if($no<3){
                         ?>
                                <span><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></span>
                                <h5 class="entry-title mt-0 mb-5"><a href="#"><?php echo $record->{"title".$language}; ?></a></h5>
                                <article class="post media-post clearfix pb-0 mb-10">
                                  <a class="post-thumb" href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><img src="<?php echo $photo; ?>" alt=""></a>
                                  <div class="post-right">
                                    <p><?php echo $convert->countwordscustom($record->{"content".$language},200); ?></p>
                                  </div>
                                </article>
                                <hr>
                              <?php
                              $no++;
                            }else{
                            ?>
                                <span class="mt-10"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></span>
                                <h5 class="entry-title mt-0 mb-20"><a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language}; ?></a></h5>
                                 
                            <?php
                            }
                          endforeach;
                        endif;
                        ?>
                      </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-md-12 mt-10 pt-0 p-0 bg-silver-light ">
                    <h4 class="text-centered p-10 mt-0 bg-theme-colored2"><?php echo lang('bf_kelkeltian'); ?></h4>
                        <div class="p-20">
                            <?php
                              $has_keltian  = isset($recordkeltians) && is_array($recordkeltians) && count($recordkeltians);
                              if ($has_keltian) :
                                foreach ($recordkeltians as $record) :
                                $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture :   "http://placehold.it/350x235";
                              ?>
                                  <div class="item">
                                    <img src="<?php echo $photo; ?>" alt="">
                                    <h4 class="title"><a href="<?php echo base_url(); ?>pages/keltian/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language}; ?></a></h4>
                                    <p><?php echo $convert->countwordscustom($record->{"content".$language},100); ?></p>
                                  </div>
                             <?php  
                              endforeach;
                            endif;
                            ?>
                        </div>
                </div>

                <div class="col-md-12 mt-10 pt-0 p-0 bg-silver-light ">
                  <h4 class="text-centered p-10 mt-0 bg-theme-colored2"><?php echo lang('bf_events'); ?></h4>
                      <div class="p-20">
                          <?php
                            $has_keltian  = isset($recordeventones) && is_array($recordeventones) && count($recordeventones);
                            if ($has_keltian) :
                              foreach ($recordeventones as $record) :
                              $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture :   "http://placehold.it/350x235";
                            ?>
                                <div class="item">
                                  <span class="mt-10"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></span>
                                  <p><a href="<?php echo base_url(); ?>pages/keltian/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language}; ?></a></p>
                                </div>
                           <?php  
                            endforeach;
                          endif;
                          ?>
                      </div>
                </div>

                <div class="col-md-12 mt-10 pt-0 p-0">
                    <div class="p-0">
                      <a href="#"><img src="<?php echo base_url(); ?>assets/images/facebook.png" class="mb-10"></a>
                      <a href="#"><img src="<?php echo base_url(); ?>assets/images/twitter.gif" class="mb-10"></a>
                      <a href="#"><img src="<?php echo base_url(); ?>assets/images/youtube.gif" class="mb-10"></a>
                    </div>
                </div>
            </div>
      </div>
      </div>
  </div>
   
    <!-- Section: blog -->
     
  </div>
  <!-- end main-content -->
  <!-- Footer -->