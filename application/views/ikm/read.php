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
              <h3 class="primary-font">IKM</h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#">Info</a></li>
                <li class="active">Indeks Kepuasan Masyarakat</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row blog-p">
          <div class="col-sm-12">
            <!-- Blog Post #1 -->
            <div class="blog-p-body">
              
			<?php if($photo != ""){ ?>         
              <img class="img-responsive" src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>"/>
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

          
        </div> <!-- / .row -->

      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->