@include('base.start', ['path' => 'transfer', 'title' => 'Transfer', 'breadcrumbs' => ['Transfer']])
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Penilaian</h4>
            <p class="card-category"> Penilaian Peserta Magang PT.Inovindo Digital Media</p>
          </div
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nama
                  </th>
                  <th>
                    Task 1
                  </th>
                  <th>
                    Task 2
                  </th>
                  <th>
                    Task 3
                  </th>
                  <th>
                  Jumlah Poin
                  </th>
                  <th>
                    lihat profil
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Maswan
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task1" required>
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task2" required>
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task3" required>
                    </td>
                    <td>
                      320
                    </td>
                    <td>
                    <button type="button" class="btn btn-warning" name="berinilai">Berinilai</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Syafiq
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task1" required>
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task2" required>
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task3" required>
                    </td>
                    <td>
                      320
                    </td>
                    <td>
                    <button type="button" class="btn btn-warning" name="berinilai">Berinilai</button>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Fauzaan
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task1" required>
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task2" required>
                    </td>
                    <td>
                    <input class="form-control" type="number" name="task3" required>
                    </td>
                    <td>
                      320
                    </td>
                    <td>
                    <button type="button" class="btn btn-warning" name="berinilai">Berinilai</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@include('base.end')
