<?php
	$this->load->library('convert');
	$convert = new convert();
	$has_records	= isset($recordpenelitians) && is_array($recordpenelitians) && count($recordpenelitians);
?>
  
    <!-- Wrapper -->
    <div class="wrapper">
		<div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-7">
              <h3 class="primary-font"><?php echo lang('bf_penelitian'); ?></h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li class="active"><a href="#"><?php echo lang('bf_penelitian'); ?></a></li>
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
              	$this->load->model('kegiatan/kegiatan_model');
              	if(isset($years) && is_array($years) && count($years)):
            	foreach ($years as $record) :
            		$recordpenelitians = $this->kegiatan_model->find_all($record->tahun);
            	?>
					 <div class="col-sm-12">
					 <h4 class="headline text-color" id="<?php echo $record->tahun; ?>">
					  <span class="border-color"><?php echo $record->tahun; ?></span>
					</h4>
					 <table class="table table-bordered">
					   <thead>
						 <tr>
							 <th width="80%">Judul</th>
							 <th width="20%">Peneliti</th>
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
							   			<a href="<?php echo base_url(); ?>penelitian/view/<?php echo $record->id; ?>"><?php echo $record->judul; ?></a>
							   		</div>
							   	</td>
							   <td><?php echo $record->pj; ?></td>
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
