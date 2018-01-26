<?php
$this->load->library('convert');
$convert = new convert();
?>
<footer id="footer" class="footer" data-bg-color="#252A31">
    <br>
    <div class="footer-bottom" data-bg-color="#2B3037">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">     
            <div class="widget dark">
              <h4 class="widget-title line-bottom-theme-colored2">P2F-LIPI</h4>
              <!-- <p class="mt-0">Komplek PUSPIPTEK Tangerang Selatan Banten 15314, Jalan Sangkuriang (Kompleks LIPI), Bandung</p>-->
              <ul class="fotter-address list-inline">
                <li> <i class="fa fa-phone text-gray mr-5 p-10 pl-0"></i>(021) 7560570,7560556, (022)-2503052, 2504832, 2504833 </li>
                <li> <i class="fa fa-envelope-o text-gray mr-5 p-10 pl-0"></i> <a class="text-gray" href="#">fisika@lipi.go.id</a> </li>
                <li> <i class="fa fa-globe text-gray mr-5 p-10 pl-0"></i> <a class="text-gray" href="#">www.fisika.lipi.go.id</a> </li>
              </ul>
              <br>
            <p class="font-14 text-black-777 m-0">Copyright &copy; <span class="text-theme-colored2">P2F-LIPI </span>. All Rights Reserved</p>
            </div>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-14">
                <li>
                  <a href="#">Links</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Term of use</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Privacy policy</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Contact us</a>
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