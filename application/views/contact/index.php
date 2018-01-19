 <div class="wrapper">
 
      <div class="container">
        <div class="row">
          <div class="col-sm-8 contact-us-p">
            <h2 class="headline first-child text-color">
              <span class="border-color"><?php echo lang('bf_contact'); ?></span>
            </h2>
            <p><?php echo lang('bf_keterangan_kontak'); ?></p>

            <!-- Alert message -->
            <div class="alert" id="form_message" role="alert">sd</div>

            <!-- Please carefully read the README.txt file in order to setup
                 the PHP contact form properly -->
            <form role="form" id="frmpengaduan">
              <div class="form-group">
                <label for="email"><?php echo lang('bf_email_anda'); ?></label>
                <input type="email" name="email" class="form-control" required id="email" placeholder="E-mail" data-original-title="" title="">
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label for="name"><?php echo lang('bf_nama_anda'); ?></label>
                <input type="text" name="nama" class="form-control" required id="name" placeholder="Full Name" data-original-title="" title="">
                <span class="help-block"></span>
              </div>
              <div class="form-group">
                <label for="message"><?php echo lang('bf_pesan_anda'); ?></label>
                <textarea name="pesan" class="form-control" required rows="3" id="message" placeholder="Message"></textarea>
                <span class="help-block"></span>
              </div>
              <!-- reCAPTCHA -->
              <div class="form-group" id="form-captcha">
                
                <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                <span class="help-block"></span>
              </div>
              <!-- /reCAPTCHA -->
              <input type="hidden" value="save" name="save">
              <button type="submit" class="btn btn-color btn-lg">Contact Us</button>
            </form>
          </div>
          <div class="col-sm-4">
            <h2 class="headline first-child first-child-m text-color">
              <span class="border-color"><?php echo lang('bf_alamat_kami'); ?></span>
            </h2>
            <p>
              <b>Serpong</b>, Puslit Kimia LIPI<br />
              Kawasan Puspiptek, Serpong<br />
              Phone: +62 21 756 09 29<br />
              Fax: +62 21 756 05 49<br />
              SMS Center: +62 (822) 98305011<br />
               
            </p>
            <h2 class="headline text-color">
              <span class="border-color">Google Map</span>
            </h2>
            <div class="embed-responsive embed-responsive-4by3">
              <iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" src="https://maps.google.com/maps?q=Pusat Penelitian Kimia LIPI, Muncul, South Tangerang City, Banten, Indonesia, &t=&z=14&ie=UTF8&iwloc=&output=embed" marginwidth="0"><a class="addmaps" href="http://www.map-embed.com/jp/"id="get-map-data" mce_href="http://maps.google.com/maps/api/js?sensor=false">map-embed.com</a><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></iframe>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- / .wrapper -->