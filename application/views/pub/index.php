<?php
	$this->load->library('convert');
	$convert = new convert();
	$has_records	= isset($recordpublikasi) && is_array($recordpublikasi) && count($recordpublikasi);
?>
  
    <!-- Wrapper -->
    <div class="wrapper">
		<div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <h3 class="primary-font"><?php echo lang('bf_publikasi'); ?></h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li class="active"><a href="#"><?php echo lang('bf_publikasi'); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    	  <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <ul class="nav nav-pills nav-stacked">
            <?php if(isset($years) && is_array($years) && count($years)):
            foreach ($years as $record) :
            ?>
              <li><a href="#<?php echo $record->tahun; ?>" data-toggle="headline text-color"><?php echo $record->tahun; ?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
            </ul>
          </div>
          <div class="col-sm-9">
            <div class="row">
              <?php
              	if(isset($years) && is_array($years) && count($years)):
            	foreach ($years as $record) :
            		$recordpenelitians = $this->publikasi_model->find_all($record->tahun);
            	?>
					 <div class="col-sm-12">
					 <h4 class="headline text-color" id="<?php echo $record->tahun; ?>">
					  <span class="border-color"><?php echo $record->tahun; ?></span>
					</h4>
					 <table class="table table-bordered">
					   <thead>
						 <tr>
							 <th width="70%">Judul</th>
							 <th width="20%">Penulis</th>
							 <th width="10%">Media Publikasi</th>
						 </tr>
					   </thead>
					   <tbody>
						 <?php
							 $has_records	= isset($recordpenelitians) && is_array($recordpenelitians) && count($recordpenelitians);
							 $i = 1;
							 if ($has_records) :
								 foreach ($recordpenelitians as $record) :
					 
						 ?>
							 <tr>
							   
							   <td>
							   		<div class="item">
							   			<a href="<?php echo base_url(); ?>pub/view/<?php echo $record->id; ?>"><?php echo $record->judul; ?></a>
							   		</div>
							   	</td>
							   <td><?php echo $record->penulis; ?></td>
							   <td><?php echo $record->media_publikasi; ?></td>
							 </tr>
						 <?php	
						  $i++;
							  endforeach;
						  endif;
						  ?>
					 
					   </tbody>
					 </table>
				 </div>
            	<?php
            	endforeach;
            	endif;
            	?>
          </div>
        </div> <!-- / .row -->
      	</div> <!-- / .row -->
    </div><!-- / .conteiner -->
    </div> <!-- / .wrapper -->
