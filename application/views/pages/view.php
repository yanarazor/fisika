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
            <div class="col-sm-7">
              <h3 class="primary-font"><?php echo $recordberita->{"title".$language}; ?></h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_about'); ?></a></li>
                <li class="active"><a href="#"><?php echo lang('bf_readpage'); ?></a></li>
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
              <?php
              if($photo != ""){ ?> 
              	<img 
					border="0"
					class="lazy media-object img-responsive"
					width="100%"
					src="<?php echo base_url(); ?>assets/images/imagenoavailable.png"
					alt="<?php echo $recordberita->{"title".$language}; ?>"
					data-original="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>" />
				<noscript>
					<img  
					 border="0"
					 src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>"  width="100%"/>
				 </noscript>
              <?php } ?>
              <p>
                <?php echo html_entity_decode($recordberita->{"content".$language}); ?>
              </p>
            </div>

            <!-- Pagination -->
            
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
              

            <!-- Most Popular -->
            <h4 class="primary-font">
             <?php echo lang('bf_otherpage'); ?>
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