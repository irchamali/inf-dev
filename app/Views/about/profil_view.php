<?= $this->extend('layout/template-page'); ?>
<?= $this->section('content'); ?>
  <!-- ======= Breadcrumbs ======= -->
  <?= $this->include('layout/breadcrumbsx'); ?>
  <!-- End Breadcrumbs -->

        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h4 class="font-alt mb-0">Profil Program Studi</h4>
                <hr class="divider-w mt-10 mb-20">
                <div role="tabpanel">
                  <ul class="nav nav-tabs font-alt" role="tablist">
                    <li class="active"><a href="#tentang" data-toggle="tab"><span class="icon-ribbon"></span> Tentang</a></li>
                    <li><a href="#capaian" data-toggle="tab"><span class="icon-lightbulb"></span> Capaian</a></li>
                    <li><a href="#kepemimpinan" data-toggle="tab"><span class="icon-profile-male"></span> Kepemimpinan</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tentang"><?= $about['about_description']; ?>
                    </div>
                    <div class="tab-pane" id="capaian">Profil Lulusan
                    </div>
                    <div class="tab-pane" id="kepemimpinan">Tabel Kaprodi
                    </div>
                  </div>
                </div>
                <hr class="divider-w mt-5 mb-30">

                <h4 class="font-alt mb-0">VMTS</h4>
                <hr class="divider-w mt-10 mb-20">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#visi">Visi</a></h4>
                    </div>
                    <div class="panel-collapse collapse in" id="visi">
                      <div class="panel-body"><?= $about['about_visi']; ?>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#misi">Misi</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="misi">
                      <div class="panel-body"><?= $about['about_misi']; ?>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tujuan">Tujuan</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="tujuan">
                      <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title font-alt"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#strategi">Strategi</a></h4>
                    </div>
                    <div class="panel-collapse collapse" id="strategi">
                      <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?= $this->endSection(); ?>