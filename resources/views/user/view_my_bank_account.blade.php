@include('base.start', ['path' => 'rekening', 'title' => 'Rekening', 'breadcrumbs' => ['Rekening']])
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Daftar Peserta</h4>
            <p class="card-category"> Daftar seluruh peserta magang PT.Inovindo Digital Media</p>
          </div>
          <div class="card-body">
          <button type="button" class="btn btn-secondary">Tambah Peserta</button>
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    Nama Peserta
                  </th>
                  <th>
                    Asal
                  </th>
                  <th>
                    Jumlah poin
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Maswan
                    </td>
                    <td>
                    Universitas Telkom
                    </td>
                    <td>
                    120
                    </td>
                    <td>
                    <button type="button" class="btn btn-warning">Lihat Profil</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Syafiq
                    </td>
                    <td>
                    Universitas Telkom
                    </td>
                    <td>
                    120
                    </td>
                    <td>
                    <button type="button" class="btn btn-warning">Lihat Profil</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Fauzaan
                    </td>
                    <td>
                    Universitas Telkom
                    </td>
                    <td>
                    120
                    </td>
                    <td>
                    <button type="button" class="btn btn-warning">Lihat Profil</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@include('base.end')