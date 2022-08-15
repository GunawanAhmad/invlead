@include('base.start', ['path' => 'transfer', 'title' => 'Penilaian', 'breadcrumbs' => ['Penilaian']])
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Penilaian</h4>
                        <p class="card-category"> Penilaian Peserta Magang PT.Inovindo Digital Media</p>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Kinerja</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kedisiplinan</button>
                            </li>
                          </ul>
                          
                          <div class="tab-content">
                            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"><table class="table">
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
                                        Beri nilai
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Maswan
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task1" required>
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task2" required>
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task3" required>
                                        </td>
                                        <td>
                                            320
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning" name="berinilai">Beri
                                                nilai</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Syafiq
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task1" required>
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task2" required>
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task3" required>
                                        </td>
                                        <td>
                                            320
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning" name="berinilai">Beri
                                                nilai</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Fauzaan
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task1" required>
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task2" required>
                                        </td>
                                        <td>
                                            <input style="width : 2cm" class="form-control" type="number"
                                                name="task3" required>
                                        </td>
                                        <td>
                                            320
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-warning" name="berinilai">Beri
                                                nilai</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table></div>
                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                                            Beri nilai
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                Maswan
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task1" required>
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task2" required>
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task3" required>
                                            </td>
                                            <td>
                                                320
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning" name="berinilai">Beri
                                                    nilai</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Syafiq
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task1" required>
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task2" required>
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task3" required>
                                            </td>
                                            <td>
                                                320
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning" name="berinilai">Beri
                                                    nilai</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Fauzaan
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task1" required>
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task2" required>
                                            </td>
                                            <td>
                                                <input style="width : 2cm" class="form-control" type="number"
                                                    name="task3" required>
                                            </td>
                                            <td>
                                                320
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning" name="berinilai">Beri
                                                    nilai</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
                            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
                          </div>

                    </div>
                </div>
            </div>
            @include('base.end')
