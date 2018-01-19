<?php
	$this->load->library('convert');
	$convert = new convert();
	$photo = $recordpenelitian->picture != "" ? $recordpenelitian->picture : "";
?>
  <div class="wrapper">
    
      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <h3 class="primary-font"><?php echo $recordpenelitian->judul; ?></h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_publikasi'); ?></a></li>
                <li class="active"><a href="#"><?php echo lang('bf_detil'); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
          <div class="col-sm-3">
            <!-- Blog Post #1 -->
            <div class="blog-p-body">
              <?php
              if($photo != ""){ ?> 
              <img class="img-responsive" src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?><?php echo $photo; ?>">
              <?php } ?>
               
              
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
            </div>
          </div>
          <div class="col-sm-6">
          	 
              <p class="text-muted">
              Penulis :
               </p>
				 <?php
					 $has_records	= isset($anggotapenelitians) && is_array($anggotapenelitians) && count($anggotapenelitians);
					 $i = 1;
					 if ($has_records) :
						 foreach ($anggotapenelitians as $record) :
		  
				 ?>
					   <?php e($i); ?>. <a href="<?php echo base_url();?>emp/view/<?php echo $record->nip_penulis; ?>/<?php echo $convert->SeoUrl($record->nama); ?>"><?php echo $record->nama; ?></a><br>
				 <?php	
				  $i++;
					  endforeach;
				  endif;
				  ?>
          </div>
          <div class="col-sm-3">
            <!-- Most Popular -->
            <h4 class="primary-font">
             <?php echo lang('bf_publikasilainnya'); ?>
            </h4>
            <ul class="blog-p-popular">
            <?php
            	$haspopuler	= isset($recordpenelitianlainnya) && is_array($recordpenelitianlainnya) && count($recordpenelitianlainnya);
				if ($haspopuler) :
					foreach ($recordpenelitianlainnya as $record) :
				?>
					<li><a href="<?php echo base_url(); ?>hki/view/<?php echo $record->id; ?>"><?php echo $record->{"judul"}; ?></a></li>
				<?php
					endforeach;
				endif;
				?>
            </ul>

          </div>

      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->