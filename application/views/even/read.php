<?php
	$this->load->library('convert');
	$convert = new convert();
	$photo = $recordberita->picture != "" ? $recordberita->picture : "";
?>
  <div class="wrapper">
    
      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h3 class="primary-font"><?php echo lang('bf_news'); ?></h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_news'); ?></a></li>
                <li class="active"><?php echo lang('bf_readnews'); ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row blog-p">
          <div class="col-sm-9">
            <!-- Blog Post #1 -->
            <div class="blog-p-body">
              <h2 class="primary-font first-child"><?php echo $recordberita->{"title".$language}; ?></h2>
              <hr>
              <p class="text-muted"><?php echo $recordberita->display_name != "" ? $recordberita->display_name : "Admin"; ?>, <?php echo $convert->fmtDate($recordberita->created_date,"dd month yyyy");?></p>
			<?php if($photo != ""){ ?>         
              <img class="img-responsive" src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>"/>
            <?php } ?>
              <p>
                <?php echo html_entity_decode($recordberita->{"content".$language}); ?>
              </p>
            </div>

            <!-- Pagination -->
            <ul class="pager pull-right">
              <li><a href="<?php echo base_url(); ?>news/read/<?php echo $backseo_title; ?>"><?php echo lang('bf_back'); ?></a></li>
              <li><a href="<?php echo base_url(); ?>news/read/<?php echo $nextseo_title; ?>"><?php echo lang('bf_next'); ?></a></li>
            </ul>
            <div class="clearfix"></div>
            
            <div class="comments">
            <div class="addthis_toolbox addthis_default_style">
                            <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                            <a class="addthis_button_tweet"></a>
                            <a class="addthis_button_pinterest_pinit"></a>
                            <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
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

          <div class="col-sm-3">
            <!-- Search Form -->
            <div class="blog-p-search">
              <form class="form" role="form" action="<?php echo base_url()?>news" method="get">
                <div class="input-group">
                  <input type="text" class="form-control" value="<?php echo isset($key) ? $key : ""; ?>" name="key" placeholder="Masukan kata kunci">
                  <span class="input-group-btn">
                    <button class="btn btn-color" type="submit"><?php echo lang('bf_search'); ?></button>
                  </span>
                </div>
              </form>
            </div>

             

            <!-- Most Popular -->
            <h4 class="primary-font">
             <?php echo lang('bf_populer'); ?>
            </h4>
            <ul class="blog-p-popular">
            <?php
            	$haspopuler	= isset($recordpopular) && is_array($recordpopular) && count($recordpopular);
				if ($haspopuler) :
					foreach ($recordpopular as $recordpop) :
				?>
					<li><a href="<?php echo base_url(); ?>news/read/<?php echo $recordpop->seo_title; ?>"><?php echo $recordpop->{"title".$language}; ?></a></li>
				<?php
					endforeach;
				endif;
				?>
            </ul>

          </div>
        </div> <!-- / .row -->

      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->