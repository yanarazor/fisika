<?php
	$this->load->library('convert');
	$convert = new convert();
	$photo = $recordberita->picture != "" ? $this->settings_lib->item('site.urlimggallery').$recordberita->picture : "http://placehold.it/850x450";
?>
 <div class="main-content">
  
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-6" data-bg-img="<?php echo base_url(); ?>assets/images/header3.jpg">
      <div class="container pt-20 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"><?php echo lang('bf_groupresearch_group'); ?> <span class="text-theme-colored2"><?php echo lang('bf_groupresearch_research'); ?></span></h2>

              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_groupresearch_group'); ?> <?php echo lang('bf_groupresearch_research'); ?></a></li>
                <li><a href="#"><?php echo $recordberita->{"title".$language}; ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <div class="blog-posts single-post">
              <article class="post clearfix mb-0">
                <div class="post-thumb position-relative">
                  <img src="<?php echo $photo; ?>" class="img-fullwidth" alt="Photo utama">
                  <span><?php echo lang('bf_groupresearch_group'); ?> <?php echo lang('bf_groupresearch_research'); ?></span>
                </div>
                <div class="post-description pb-0">
                  <h5 class="font-weight-600 text-gray-lightgray mt-20 mb-0"><?php echo $convert->fmtDate($recordberita->created_date,"dd month yyyy");?></h5>
                  <h3 class="post-title text-theme-colored2 font-weight-600 mt-0 mb-20"><?php echo $recordberita->{"title".$language}; ?></h3>
                  <?php echo html_entity_decode($recordberita->{"content".$language}); ?>
                   
                </div>
              </article>
            </div>
            <div class="tagline pt-10 mt-5">
                <div class="row">
                  <div class="col-md-8">
                    <div class="tags">
                      <p class="mb-0"><i class="fa fa-tags text-theme-color-2"></i> <span>Tags:</span>Eco, Water, Air, Environment</p>
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
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
               
              <div class="widget">
                <h5 class="widget-title line-bottom"> <?php echo lang('bf_pages'); ?></h5>
                <div class="categories">
                  <ul class="list list-border angle-double-right">
                     <?php
                      $has_keltian  = isset($recordkeltians) && is_array($recordkeltians) && count($recordkeltians);
                      if ($has_keltian) :
                        foreach ($recordkeltians as $record) :
                        $photo = $record->picture != "" ? $record->picture : "imagenoavailable.png";
                      ?>
                      <li class="active"><a href="<?php echo base_url(); ?>pages/keltian/<?php echo $record->seo_title; ?>" class="active"> <?php echo $record->{"title".$language}; ?></a></li>
                      <?php  
                        endforeach;
                      endif;
                      ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div> 