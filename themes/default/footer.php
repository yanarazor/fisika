<?php
$this->load->library('convert');
$convert = new convert();
?>
<footer id="footer" class="footer" data-bg-color="#252A31">
    <div class="container pt-60 pb-20">
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <img alt="" src="<?php echo base_url(); ?>assets/images/logo-footerfisikawhite.png">          
          <p class="mt-20">Komplek PUSPIPTEK Tangerang Selatan Banten 15314, Jalan Sangkuriang (Kompleks LIPI), Bandung</p>
          <ul class="fotter-address list-inline">
            <li> <i class="fa fa-phone text-gray mr-5 p-10 pl-0"></i>(021) 7560570,7560556, (022)-2503052, 2504832, 2504833 </li>
            <li> <i class="fa fa-envelope-o text-gray mr-5 p-10 pl-0"></i> <a class="text-gray" href="#">fisika@lipi.go.id</a> </li>
            <li> <i class="fa fa-globe text-gray mr-5 p-10 pl-0"></i> <a class="text-gray" href="#">www.fisika.lipi.go.id</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="widget dark">
          <h4 class="widget-title line-bottom-theme-colored2"><?php echo lang('bf_lates'); ?> <?php echo lang('bf_events'); ?></h4>
          <div class="latest-posts">
            <?php
              $has_recordevents  = isset($recordevents) && is_array($recordevents) && count($recordevents);
            if ($has_recordevents) :
              foreach ($recordevents as $record) :
              $photo = $record->picture != "" ? $this->settings_lib->item('site.urlimggallery').$record->picture : "http://placehold.it/80x55";
            ?>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><img src="<?php echo $photo; ?>" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="<?php echo base_url(); ?>news/read/<?php echo $record->seo_title; ?>"><?php echo $record->{"title".$language}; ?></a></h5>
                  <p class="post-date mb-0 font-12"><?php echo $convert->fmtDate($record->created_date,"dd month yyyy");?></p>
                </div>
              </article>
            <?php
              endforeach;
            endif;
            ?>
          </div>
          
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="widget dark">
          <h4 class="widget-title line-bottom-theme-colored2"><?php echo lang('bf_links'); ?></h4>
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <ul class="footer-link">
                <li><a href="http://lipi.go.id" target="_blank">Lipi</a></li>
                <li><a href="http://fisika.lipi.go.id/layanan" target="_blank">Layanan dan Informasi</a></li>
                <li><a href="http://fisika.lipi.go.id/sii" target="_blank">Layanan internal</a></li>
                <li><a href="http://fisika.lipi.go.id/commutaris" target="_blank">Kommutaris</a></li>
                <li><a href="http://lpse.lipi.go.id/" target="_blank">LPSE Lipi</a></li>
                <li><a href="http://fisika.lipi.go.id/lms" target="_blank">LANDSLIDE MONITORING SYSTEM</a></li>
                <li><a href="http://intra.lipi.go.id/perpustakaan" target="_blank">Perpustakaan</a></li>
                <li><a href="http://intra.lipi.go.id" target="_blank">Intra Lipi</a></li>
                <li><a href="http://situs.opi.lipi.go.id/isfap2015/" target="_blank">ISPAF 2015</a></li>
                <li><a href="http://situs.opi.lipi.go.id/snf2014/" target="_blank">SNF</a></li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-2">
        <div class="widget dark">
          <h4 class="widget-title line-bottom-theme-colored2">Sosial Media</h4>
          <div class="widget-subscribe">
             
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form2').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form2'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>            
            <ul class="styled-icons clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>

          <h4 class="widget-title line-bottom-theme-colored2">IKM</h4>
          <div class="widget-subscribe">          
            <h2 data-animation-duration="1000" data-value="<?php echo $this->settings_lib->item('site.ikm'); ?>" class="animate-number text-theme-colored2 font-30 font-weight-600 mt-0 mb-15">0</h2>
          </div>

          <h4 class="widget-title line-bottom-theme-colored2">Kepuasan Pelanggan</h4>
          <div class="widget-subscribe">          
            <h2 data-animation-duration="1000" data-value="<?php echo $this->settings_lib->item('site.ikm'); ?>" class="animate-number text-theme-colored2 font-30 font-weight-600 mt-0 mb-15">0</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2B3037">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-14 text-black-777 m-0">Copyright &copy;2018 <span class="text-theme-colored2">Puslit Fisika </span>. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-14">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<script src="<?php echo base_url(); ?>assets/js/chart.js"></script>
<!-- JS | Custom script for all pages -->
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
<script language='JavaScript' type='text/javascript' src='<?php echo base_url(); ?>assets/js/LazyLoad.js'></script>
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

</body>
</html>