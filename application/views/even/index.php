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
              <h3 class="primary-font">Even</h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li class="active"><a href="#">Even</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
     <div class="container">
     	<div class="row blog-p">
          	<div class="col-sm-9">
		<?php
        	$has_beritaterbaru	= isset($recordberitas) && is_array($recordberitas) && count($recordberitas);
        		$i = 1;
				if ($has_beritaterbaru) :
					foreach ($recordberitas as $record) :
					$photo = $record->picture != "" ? $record->picture : "imagenoavailable.png";
					
				?>
				 <div class="blog-p-body">
				   <h2 class="primary-font first-child"><a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language}; ?></a></h2>
				   <hr>
				   <p class="text-muted"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></p>
				   <p class="max-lines"> <?php echo strip_tags(html_entity_decode($record->{"content".$language})) ?></p>
				   <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>" class="btn btn-lg btn-color"><?php echo lang('bf_read'); ?></a>
				   <a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>">
				   	<img class="img-responsive" src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>">
				   </a>
				 </div>
            <?php	
            	$i++;
					endforeach;
				endif;
				?>
			
			<center>
				<?php echo $this->pagination->create_links(); ?>
			</center>
            <div class="clearfix"></div>
            </div>
        	<div class="col-sm-3">
            <!-- Search Form -->
            <div class="blog-p-search">
              <form class="form" role="form" method="get">
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
