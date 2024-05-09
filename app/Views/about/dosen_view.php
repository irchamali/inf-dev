<?= $this->extend('layout/template-page'); ?>
<?= $this->section('content'); ?>
  <!-- ======= Breadcrumbs ======= -->
  <?= $this->include('layout/breadcrumbsx'); ?>
  <!-- End Breadcrumbs -->

        <section class="module" id="team">
          <div class="container">
            <!-- <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Meet Our Team</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div> -->
            <div class="row">
              <div class="owl-carousel text-center" data-items="5" data-pagination="true" data-navigation="false">
              <?php foreach ($teams as $team) : ?>
                <div class="owl-item">
                  <div class="col-sm-12 mb-sm-20 wow fadeInUp">
                    <div class="team-item">
                      <div class="team-image"><img src="<?= 'assets/backend/images/team/' . $team['team_image']; ?>" alt="Member Photo"/>
                        <div class="team-detail">
                          <h5 class="font-alt">Halo semua!</h5>
                          <p class="font-serif">Selamat bergabung bersama Teknik Informatika, sampai jumpa di perkuliahan.</p>
                          <div class="team-social"><a href="<?= $team['team_facebook']; ?>"><i class="fa fa-facebook"></i></a><a href="<?= $team['team_instagram']; ?>"><i class="fa fa-instagram"></i></a></div>
                        </div>
                      </div>
                      <div class="team-descr font-alt">
                        <div class="team-name"><?= $team['team_name']; ?></div>
                        <div class="team-role">NIDN.<?= $team['team_twitter']; ?></div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </section>


<?= $this->endSection(); ?>