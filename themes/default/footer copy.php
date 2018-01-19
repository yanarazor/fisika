 <!-- Footer -->
    <footer class="footer-dark">
      <div class="container">
      	<div class="row">
          <div class="col-sm-8">
        		<h3 class="text-color"><span class="border-color"><?php echo lang('bf_links'); ?></span></h3>
            	<div class="content">
            	</div>
          </div>
          <div class="col-sm-4">
          		<h3 class="text-color"><span class="border-color">RB</span></h3>
            	<div class="content">
            		<img 
						border="0"
						class="lazy media-object"
						width="50%"
						src="<?php echo base_url(); ?>assets/images/imagenoavailable.jpg"
						data-original="<?php echo $this->settings_lib->item('site.urlimggallery'); ?>act.jpg" />
					<noscript>
						<img  
						 border="0"
						 src="<?php echo $this->settings_lib->item('site.urlimggallery'); ?>act.jpg"  width="100%"/>
					 </noscript>
            	</div>
          </div>
        </div>
        <div class="row">
          <!-- Contact Us -->
          <div class="col-sm-4">
            <h3 class="text-color"><span class="border-color"><?php echo lang('bf_contact'); ?></span></h3>
            <div class="content">
              <p>
              Kawasan Puspiptek, Serpong, Tangerang<br />
              Kode Pos 15314<br />
              Phone: +62 (21) 7560929<br />
              SMS Center: +62 (822) 98305011<br />
              Fax: +62 (21) 7560549<br />
              Email: <a href="#">rcchem@mail.lipi.go.id</a>
              </p>
            </div>
          </div>
          <!-- Social icons -->
          <div class="col-sm-4">
            <h3 class="text-color"><span><?php echo lang('bf_sosial_media'); ?></span></h3>
            <div class="content social">
              <p><?php echo lang('bf_tetap_terhubung'); ?></p>
              <ul class="list-inline">
                  <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- Subscribe -->
          <div class="col-sm-4">
            <h3 class="text-color"><span><?php echo lang('bf_telusuri_pelayanan'); ?></span></h3>
            <div class="content">
              <p><?php echo lang('bf_ket_telusuri_pelayanan'); ?></p>
              <form class="form" role="form">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="input-group">
                      <label class="sr-only" for="subscribe-email">NO Order</label>
                      <input type="email" class="form-control" id="subscribe-email" placeholder="NO ORDER">
                      <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">OK</button>
                      </span>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <hr>
          </div>
        </div>
        <!-- Copyrights -->
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; KIMIA 2016. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Style Toggle -->
    <div class="style-toggle text-left hidden-xs">
      <i class="fa fa-gears style-toggle-btn animated tada delay-3"></i>
      <div class="style-toggle-header text-center">
        Navbar Type
      </div>
      <!-- Navbar Type -->
      <div class="style-toggle-body text-left">
        <div class="radio">
          <label>
            <input type="radio" name="navbar" id="opt-navbar-dark" value="opt-navbar-dark" checked>
            Navbar Dark (default)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="navbar" id="opt-navbar-white" value="opt-navbar-white">
            Navbar White
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="navbar" id="opt-navbar-mixed" value="opt-navbar-mixed">
            Navbar Mixed
          </label>
        </div>
      </div>
      <!-- Color Styles-->
      <div class="style-toggle-header text-center">
        Color Styles
      </div>
      <div class="style-toggle-body text-center">
        <ul class="colors list-inline">
          <li class="green"></li>
          <li class="blue"></li>
          <li class="orange"></li>
          <li class="red"></li>
        </ul>
      </div>
      <!-- Footer Type -->
      <div class="style-toggle-header text-center">
        Footer Type
      </div>
      <div class="style-toggle-body text-left">
        <div class="radio">
          <label>
            <input type="radio" name="footer" id="opt-footer-dark" value="opt-footer-dark" checked>
            Footer Dark (default)
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="footer" id="opt-footer-white" value="opt-footer-white">
            Footer White
          </label>
        </div>
        <hr>
        <a href="theme-faq.html"><i class="fa fa-question-circle"></i> Using color schemes on a production site.</a>
      </div>
 
<script type="text/javascript">
if (typeof jQuery == 'undefined') {
  document.write('<script type="text/javascript" src="<?php echo base_url(); ?>themes/admin/plugins/jQuery/jquery-2.2.3.min.js"><\/script>');    
} 
</script>
<script language='JavaScript' type='text/javascript' src='<?php echo base_url(); ?>themes/default/js/default.js'></script>
<script language='JavaScript' type='text/javascript' src='<?php echo base_url(); ?>assets/js/LazyLoad.js'></script>
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/css/jquerybxslider/jquerybxslider.css'/>
<script language='JavaScript' type='text/javascript' src='<?php echo base_url(); ?>assets/js/jquerybxslider/jquerybxslider.min.js'></script>

<script>
	 function changelang(lang)
	 {
	 	 var json_url = "<?php echo base_url() ?>home/chlang/"+lang;
		 $.ajax({    
		 	type: "POST",
			url: json_url,
			data: "",
			success: function(data){ 
       			location.reload();
		}});
	 	return false;
	 }
</script>
    <?php echo Assets::js(); ?>
</body>
</html>