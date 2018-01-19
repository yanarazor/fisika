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
              <h2 class="text-theme-colored2 font-36"><?php echo lang('bf_news'); ?></h2>
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
        <div class="row multi-row-clearfix">
          <div class="blog-posts">
            <div class="col-md-12">
              <div class="list-dashed">
                <?php
                  $has_beritaterbaru  = isset($recordberitas) && is_array($recordberitas) && count($recordberitas);
                if ($has_beritaterbaru) :
                  foreach ($recordberitas as $record) :
                    $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture : "http://placehold.it/460x240";
                ?>
                <article class="post clearfix mb-30 pb-30">
                  <div class="row">
                    <div class="col-sm-5">
                      <div class="entry-header">
                        <div class="post-thumb"> <img class="img-responsive img-fullwidth" src="<?php echo $photo; ?>" alt=""> </div>
                      </div>
                    </div>
                    <div class="col-sm-7">
                      <div class="entry-content mt-0">
                        <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>">
                        <h4 class="entry-title mt-0 pt-0"><?php echo $record->{"title".$language}; ?></h4>
                        </a>
                        <ul class="list-inline font-12 mb-20 mt-10">
                          <li><?php echo lang('bf_postedby'); ?> <a href="#" class="text-theme-colored"><?php echo $record->display_name != $record->display_name ?  : "Admin"; ?> |</a></li>
                          <li><span class="text-theme-colored"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></span></li>
                        </ul>
                        <p class="mb-30"><?php echo $convert->countwordscustom($record->{"content".$language},400); ?> </p>
                        <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"></a>
                        
                        <a class="pull-right text-gray font-13" href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><i class="fa fa-angle-double-right text-theme-colored"></i> <?php echo lang('bf_readmore'); ?></a>
                      </div>
                    </div>
                  </div>
                </article>
                <?php 
                  endforeach;
                endif;
                ?>
                
              </div>
            </div>
            <div class="col-md-12">
              <nav>
                <?php echo $this->pagination->create_links(); ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>