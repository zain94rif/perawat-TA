<div class="modal fade bd-example-modal-lg" id="grafik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Grafik Bulan <?= bulanan($bulan).' '.$tahun ?></h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form id="Form" method="post" enctype="multipart/form-data">
        <canvas id="line-chart" width="1600" height="1000"></canvas>
      </form>
    </div>
  </div>
</div>