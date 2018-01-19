<?php
	$this->load->library('convert');
	$convert = new convert();
?>
  
    <!-- Wrapper -->
    <div class="wrapper">
		<div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <h3 class="primary-font">Detil Pegawai</h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li class="active"><a href="#">Pegawai</a></li>
                <li class="active"><a href="#">Detil</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
     <div class="container">
     	<div class="row blog-p">
          	<div class="col-sm-9">
		<?php
			
        	$hash_publikasi	= isset($recordpublikasi) && is_array($recordpublikasi) && count($recordpublikasi);
        		$i = 1;
				if ($hash_publikasi) :
					foreach ($recordpublikasi as $record) :
					 
				?>
				 <div class="blog-p-body">
				   <h2 class="primary-font first-child"><a href="<?php echo base_url(); ?>news/read/<?php echo $record->nip; ?>"><?php echo $record->judul_publikasi; ?></a></h2>
				   <hr>
				   <p class="text-muted"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></p>
				   <p class="max-lines"> <?php echo strip_tags(html_entity_decode($record->{"content".$language})) ?></p>
				   <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>" class="btn btn-lg btn-color"><?php echo lang('bf_read'); ?></a>
				   <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><img class="img-responsive" src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>" alt="..."></a>
				 </div>
            <?php	
            	$i++;
					endforeach;
				endif;
				?>
            <div class="clearfix"></div>
            </div>
        	<div class="col-sm-3">
            <!-- Search Form -->
            <div class="blog-p-search">
              <form class="form" role="form">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search our blog">
                  <span class="input-group-btn">
                    <button class="btn btn-color" type="button">Go!</button>
                  </span>
                </div>
              </form>
            </div>

            <!-- Social Links -->
            <h4 class="primary-font">
              Stay Tuned
            </h4>
            <ul class="blog-p-social">
              <li><a href="#"><i class="fa fa-rss"></i> RSS Feed</a></li>
              <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
            </ul>

            <!-- Most Popular -->
            <h4 class="primary-font">
              Most Popular
            </h4>
            <ul class="blog-p-popular">
              <li><a href="blog-post.html">Pellentesque consectetur lectus.</a></li>
              <li><a href="blog-post.html">Aliquam placerat ligula nec augue sollicitudin porta.</a></li>
              <li><a href="blog-post.html">Pellentesque vel sem quis augue ultricies.</a></li>
              <li><a href="blog-post.html">Proin in justo et risus dictum consectetur quis quis orci.</a></li>
            </ul>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </div> <!-- / .wrapper -->
