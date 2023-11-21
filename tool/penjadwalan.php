<div class="container-fluid">
  <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <button class="btn btn-primary" id="ubah" type="button" data-dismiss="modal">Jadwal</button>
    </div>
    <!-- Content Row -->
      <div class="row">

          <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Tahun</div>
                      <input name="tahun" class="form-control" id="tahun" type="number" min="2020" max="2025" value="2020" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pilih Bulan</div>
                        <select name="bulan" class="form-control" id="bulan" type="select" required>
                                      <option selected>Pilih bulan</option>
                                      <option value="01"> Januari </option>
                                      <option value="02"> Februari </option>
                                      <option value="03"> Maret </option>
                                      <option value="04"> April </option>
                                      <option value="05"> Mei </option>
                                      <option value="06"> Juni </option>
                                      <option value="07"> Juli </option>
                                      <option value="08"> Agustus </option>
                                      <option value="09"> September </option>
                                      <option value="10"> Oktober </option>
                                      <option value="11"> November </option>
                                      <option value="12"> Desember </option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Shift Pagi</div>
                      <input name="pagi" class="form-control" id="pagi" type="number" min="1" max="9" value="4" required=>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Shift Siang</div>
                        <input name="siang" class="form-control" id="siang" type="number" min="1" max="9" value="3" required>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-2 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Shift Malam</div>
                      <input name="malam" class="form-control" id="malam" type="number" min="1" max="9" value="3" required>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>