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
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member user-avatar text-center hvr-float-shadow">
            	<img 
						border="0"
						class="lazy media-object img-responsive center-block"
						width="100%"
						src="<?php echo $recordpegawais->foto; ?>"
						alt="<?php echo isset($recordpegawais->nama) ? $recordpegawais->nama : ""; ?>"
						data-original="<?php echo $recordpegawais->foto; ?>" />
					<noscript>
						<img  
						 border="0"
						 src="<?php echo $recordpegawais->foto; ?>"  width="100%"/>
					 </noscript>
              <p class="text-muted"><?php echo isset($recordpegawais->jabatan) ? $recordpegawais->jabatan : ""; ?></p>
            </div>
                           
            <ul class="nav nav-pills nav-stacked">
              <li><a href="#pendidikan" data-toggle="headline text-color">Pendidikan</a></li>
              <li><a href="#publikasi" data-toggle="headline text-color">Publikasi</a></li>
            </ul>
          </div>
          <div class="col-sm-9">
            <div class="row">
              <div class="col-sm-7">
                <h2 class="primary-font"><?php echo isset($recordpegawais->nama) ? $recordpegawais->nama : ""; ?></h2>
                <p class="text-muted">
                	<?php echo ($recordpegawais->jabatan != "" and  isset($recordpegawais->jabatan)) ? "Jabatan : ".$recordpegawais->jabatan."<br>" : ""; ?>
                  <?php echo isset($recordpegawais->jabatan_ft) ? "Fungsional : ".$recordpegawais->jabatan_ft : ""; ?>
                  <?php echo isset($recordpegawais->jabatan_u) ? "Fungsional : ".$recordpegawais->jabatan_u : ""; ?>
                </p>
                <div class="social user-social">
                  <ul class="styled-icons icon-bordered icon-theme-colored2 mt-15 mb-0">
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-skype"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 </ul>
                </div>
              </div>
              <div class="col-sm-5">
                <ul class="user-info">
                  <li>NIP : <span class="text-muted"><?php echo isset($recordpegawais->nip) ? $recordpegawais->nip : ""; ?></span></li>
                </ul>
                <a href="<?php echo base_url(); ?>contact" class="btn btn-color btn-warning"><i class="fa fa-envelope"></i> <?php echo lang('bf_sendmessage'); ?></a>
              </div>
              <div class="col-sm-12">
				<h4 class="headline text-color" id="pendidikan">
				  <span class="border-color">Pendidikan</span>
				</h4>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Pendidikan</th>
                      <th>Universitas</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
						$hash_pendidikan	= isset($apendidikan) && is_array($apendidikan) && count($apendidikan);
						$i = 1;
						if ($hash_pendidikan) :
							foreach ($apendidikan as $record) :
					 
					?>
						<tr>
						  <td>
							<div class="item">
							  <?php echo isset($record->jenjang_text) ? $record->jenjang_text : ""; ?>
							  <p class="text-muted"> Bidang : <?php echo isset($record->bidang_text) ? $record->bidang_text : ""; ?></p>
							</div>
						  </td>
						  <td><?php echo isset($record->universitas_text) ? $record->universitas_text : ""; ?></td>
						</tr>
					<?php	
					 $i++;
						 endforeach;
					 endif;
					 ?>
                     
                  </tbody>
                </table>
                
              </div>
              <div class="col-sm-12">
              	<h4 class="headline text-color" id="publikasi">
				 <span class="border-color">Publikasi Ilmiah</span>
			   </h4>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Judul</th>
                      <th>Tahun</th>
                      <th>Penerbit</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php
						$hash_publikasi	= isset($recordpublikasi) && is_array($recordpublikasi) && count($recordpublikasi);
						$i = 1;
						if ($hash_publikasi) :
							foreach ($recordpublikasi as $record) :
					 
					?>
						<tr>
						  <td>
							<div class="item">
							  <?php echo $record->judul_publikasi; ?>
							  <p class="text-muted"> Lingkup : <?php echo $record->lingkup; ?></p>
							</div>
						  </td>
						  <td><?php echo $record->tahun; ?></td>
						  <td><?php echo $record->penerbit; ?></td>
						</tr>
					<?php	
					 $i++;
						 endforeach;
					 endif;
					 ?>
                     
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- / .row -->
      	</div> <!-- / .row -->
    </div><!-- / .conteiner -->
    </div> <!-- / .wrapper -->

