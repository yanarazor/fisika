<?php
	$this->load->library('convert');
	$convert = new convert();

?>
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-6" data-bg-img="<?php echo base_url(); ?>assets/images/header3.jpg">
      <div class="container pt-20 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36"><?php echo lang('bf_tentangkami'); ?></h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
                <li><a href="#"><?php echo lang('bf_tentangkami'); ?></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: service-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-pull-right">
            <div class="single-service">
              <h3 class="text-theme-colored line-bottom-theme-colored2 text-theme-colored"><?php echo lang('bf_tentangkami'); ?></h3>
              <?php echo html_entity_decode($recordberita->{"content".$language}); ?>
              <div class="row">
                <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>pages/about/sambutan-kapus">
                    <blockquote class="theme-colored">
                      <b><?php echo lang('bf_sambutankapus'); ?></b><p><?php echo lang('bf_sambutankapusdesc'); ?></p>
                    </blockquote>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>pages/about/visi-misi">
                    <blockquote class="theme-colored">
                      <b><?php echo lang('bf_visimisi'); ?></b><p><?php echo lang('bf_visimisidesc'); ?></p>
                    </blockquote>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>pages/about/statistik-satker">
                    <blockquote class="gray">
                      <b><?php echo lang('bf_statistiksatker'); ?></b><p><?php echo lang('bf_statistiksatkerdesc'); ?></p>
                    </blockquote>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>pages/laporan">
                    <blockquote class="gray">
                      <b><?php echo lang('bf_laporan'); ?></b><p><?php echo lang('bf_laporandesc'); ?></p>
                    </blockquote>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>pages/about/struktur-organisasi">
                    <blockquote class="theme-colored">
                      <b><?php echo lang('bf_strukturorganisasi'); ?></b><p><?php echo lang('bf_strukturorganisasidesc'); ?></p>
                    </blockquote>
                  </a>
                </div>
                <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>pages/about/sejarah">
                    <blockquote class="theme-colored">
                      <b><?php echo lang('bf_sejarah'); ?></b><p><?php echo lang('bf_sejarahdesc'); ?></p>
                    </blockquote>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a href="<?php echo base_url(); ?>pages/contact">
                    <blockquote class="gray bg-theme-colored">
                      <b><?php echo lang('bf_kontakkami'); ?></b><p><?php echo lang('bf_kontakkamidesc'); ?></p>
                    </blockquote>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
              <div class="widget">
                <div class="services-list">
                  <ul class="list list-border mt-0">
                    <li class="<?php echo (isset($pages) and $pages == "sambutan-kapus") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/sambutan-kapus"><?php echo lang('bf_sambutankapus'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "visi-misi") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/about/visi-misi"><?php echo lang('bf_visimisi'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/about/statistik-satker"><?php echo lang('bf_statistiksatker'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/laporan"><?php echo lang('bf_laporan'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/about/struktur-organisasi"><?php echo lang('bf_strukturorganisasi'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>pages/about/sejarah"><?php echo lang('bf_sejarah'); ?></a></li>
                    <li class="<?php echo (isset($pages) and $pages == "kontak-kami") ? "active" : ""; ?>"><a href="<?php echo base_url(); ?>pages/contact"><?php echo lang('bf_kontakkami'); ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>