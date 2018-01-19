<?php
	$this->load->library('convert');
	$convert = new convert();
	$photo = $recordberita->filename != "" ? $recordberita->filename : "noimage.jpg";
?>
  <div class="wrapper">
    
      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h3 class="primary-font"><?php echo lang('bf_product'); ?></h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="<?php echo base_url(); ?>news"><?php echo lang('bf_product'); ?></a></li>
                <li class="active">Read</li>
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
              <h2 class="primary-font first-child"><a href="#"><?php echo $recordberita->nama_product; ?></a></h2>
              <img class="img-responsive" src="<?php echo $this->settings_lib->item('site.urlpublic'); ?><?php echo $photo; ?>" alt="...">
              <p>
                <?php echo html_entity_decode($recordberita->keterangan); ?>
              </p>
            </div>
          </div>
          <div class="col-sm-3">
            <!-- Most Popular -->
            <h4 class="primary-font">
             <?php echo lang('bf_otherproduct'); ?>
            </h4>
            <ul class="blog-p-popular">
            <?php
            	$haspopuler	= isset($recordpopular) && is_array($recordpopular) && count($recordpopular);
				if ($haspopuler) :
					foreach ($recordpopular as $recordpop) :
				?>
					<li><a href="<?php echo base_url(); ?>produk/read/<?php echo $recordpop->id; ?>"><?php echo $recordpop->nama_product; ?></a></li>
				<?php
					endforeach;
				endif;
				?>
            </ul>

          </div>
        </div> <!-- / .row -->

      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->