
  
@include('base.start', ['path' => 'pembayaran', 'title' => 'Pembayaran Tagihan', 'breadcrumbs' => ['Pembayaran']])
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Absensi</h4>
            <p class="card-category"> Absensi Peserta Magang Inovindo Digital Media</p>
          </div>
          <div class="card-body">
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
                    Hadir
                  </th>
                  <th>
                    izin
                  </th>
                  <th>
                    alfa
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
                    <input type="checkbox" name="hadir" value="Nonton"> Hadir<br>
                    </td>
                    <td>
                    <input type="checkbox" name="hadir" value="Nonton"> izin<br>
                    </td>
                    <td>
                    <input type="checkbox" name="hadir" value="Nonton"> alfa<br>
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
                    <input type="checkbox" name="hadir" value="Nonton"> Hadir<br>
                    </td>
                    <td>
                    <input type="checkbox" name="hadir" value="Nonton"> izin<br>
                    </td>
                    <td>
                    <input type="checkbox" name="hadir" value="Nonton"> alfa<br>
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
                    <input type="checkbox" name="hadir" value="Nonton"> Hadir<br>
                    </td>
                    <td>
                    <input type="checkbox" name="hadir" value="Nonton"> izin<br>
                    </td>
                    <td>
                    <input type="checkbox" name="hadir" value="Nonton"> alfa<br>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@include('base.end')