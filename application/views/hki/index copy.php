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
              <h3 class="primary-font"><?php echo lang('bf_paten'); ?></h3>
            </div>
            <div class="col-sm-5">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="<?php echo base_url(); ?>"><?php echo lang('bf_home'); ?></a></li>
                <li class="active"><a href="#"><?php echo lang('bf_paten'); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    	  <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
				<table class="table table-bordered">
				   <thead>
					 <tr>
						 <th width="30%">
						 Judul
						 
						 </th>
						 <th width="20%">Penemu</th>
					 </tr>
				   </thead>
				   <tbody>
					 <?php
						 $has_records	= isset($recordpatens) && is_array($recordpatens) && count($recordpatens);
						 $i = 1;
						 if ($has_records) :
							 foreach ($recordpatens as $record) :
			 
					 ?>
						 <tr>
						   <td>
							 <div class="item">
							   <a href="<?php echo base_url(); ?>hki/view/<?php echo $record->id; ?>"><?php echo $record->judul; ?></a>
							 </div>
							 <p class="text-muted"> <?php echo html_entity_decode($record->abstrak); ?></p>
						   </td>
						   <td>	
						   		<?php echo $record->personil; ?>
						   		<?php echo $record->penemu; ?>
						   </td>
						 </tr>
					 <?php	
					  $i++;
						  endforeach;
					  endif;
					  ?>
			 
				   </tbody>
				 </table>
            </div>
        </div> <!-- / .row -->
      	</div> <!-- / .row -->
    </div><!-- / .conteiner -->
    </div> <!-- / .wrapper -->
