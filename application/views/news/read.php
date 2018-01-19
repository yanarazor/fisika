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
              <h2 class="text-theme-colored2 font-36"><?php echo lang('bf_readnews'); ?></h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_news'); ?></a></li>
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
                  <span><?php echo lang('bf_news'); ?></span>
                </div>
                <div class="post-description pb-0">
                  <h5 class="font-weight-600 text-gray-lightgray mt-20 mb-0"><?php echo $convert->fmtDate($recordberita->created_date,"dd month yyyy");?></h5>
                  <h3 class="post-title text-theme-colored2 font-weight-600 mt-0 mb-20"><?php echo $recordberita->{"title".$language}; ?></h3>
                  <?php echo html_entity_decode($recordberita->{"content".$language}); ?>
                  
                  

                   <div class="gallery-isotope default-animation-effect grid-5 gutter-small clearfix" data-lightbox="gallery">
                   <?php
                    $has_galleri  = isset($datafoto) && is_array($datafoto) && count($datafoto);
                    if ($has_galleri) :
                      ?>
                    <h4 class="post-title text-theme-colored2"><?php echo lang('bf_gambarlainnya'); ?></h4>
                    <?php
                      foreach ($datafoto as $record) :
                      $photo = $record->file_name != "" ? $this->settings_lib->item('site.urlimggallery').$record->file_name : "http://placehold.it/450x250";
                    ?>
                        <div class="gallery-item">
                          <a href="<?php echo $photo; ?>" data-lightbox="gallery-item" title="Title Here 1"><img src="<?php echo $photo; ?>" alt=""></a>
                        </div>
                   <?php  
                      endforeach;
                    endif;
                    ?>
                     
                  </div>

                  <ul class="pager pull-right">
                    <li><a href="<?php echo base_url(); ?>news/read/<?php echo $backseo_title; ?>" class="hvr-icon-back pl-40" ><?php echo lang('bf_back'); ?></a></li>
                    <li><a class="hvr-icon-forward pr-40" href="<?php echo base_url(); ?>news/read/<?php echo $nextseo_title; ?>"><?php echo lang('bf_next'); ?></a></li>
                  </ul>
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
                <h5 class="widget-title line-bottom"><?php echo lang('bf_searchbox'); ?></h5>
                <div class="search-form">
                  <form class="form" role="form" action="<?php echo base_url()?>news" method="get">
                    <div class="input-group">
                      <input type="text" value="<?php echo isset($key) ? $key : ""; ?>" name="key" placeholder="<?php echo lang('bf_keyword'); ?>" class="form-control search-input">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              
              <div class="widget">
                <h5 class="widget-title line-bottom"><?php echo lang('bf_populer'); ?></h5>
                <div class="latest-posts">
                  <?php
                        $haspopuler = isset($recordpopular) && is_array($recordpopular) && count($recordpopular);
                  if ($haspopuler) :
                    foreach ($recordpopular as $record) :
                      $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture : "http://placehold.it/850x450";
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
          </div>
        </div>
      </div>
    </section> 
  </div> 