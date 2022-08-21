@include('base.start', ['path' => 'penilaian', 'title' => 'Penilaian', 'breadcrumbs' => ['Penilaian']])
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
                                <button class="nav-link  {{ $tab == 'kinerja' ? 'active' : '' }}" id="home-tab"
                                    data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"
                                    aria-controls="home" aria-selected="true">Kinerja</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link {{ $tab == 'kedisiplinan' ? 'active' : '' }}" id="profile-tab"
                                    data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Kedisiplinan</button>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane {{ $tab == 'kinerja' ? 'active' : '' }}" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
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
                                        @foreach ($pesertas as $peserta)
                                            <tr>
                                                <form action="/penilaian/kinerja/{{ $peserta->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <td>
                                                        {{ $peserta->nama_peserta }}
                                                    </td>
                                                    <td>
                                                        <input style="width : 2cm" class="form-control" type="number"
                                                            value="{{ $peserta->nilai_kinerja_task1 }}"
                                                            name="nilai_kinerja_task1"
                                                            {{ $peserta->is_nilai_kinerja_finish ? 'disabled' : '' }}
                                                            required>
                                                    </td>
                                                    <td>
                                                        <input style="width : 2cm" class="form-control" type="number"
                                                            value="{{ $peserta->nilai_kinerja_task2 }}"
                                                            name="nilai_kinerja_task2"
                                                            {{ $peserta->is_nilai_kinerja_finish ? 'disabled' : '' }}
                                                            required>
                                                    </td>
                                                    <td>
                                                        <input style="width : 2cm" class="form-control" type="number"
                                                            value="{{ $peserta->nilai_kinerja_task3 }}"
                                                            name="nilai_kinerja_task3"
                                                            {{ $peserta->is_nilai_kinerja_finish ? 'disabled' : '' }}
                                                            required>
                                                    </td>
                                                    <td>
                                                        {{ $peserta->jumlah_poin_kinerja }}
                                                    </td>
                                                    <td>

                                                        <button type="submit" class="btn btn-warning"
                                                            {{ $peserta->is_nilai_kinerja_finish ? 'disabled' : '' }}
                                                            name="berinilai">Beri
                                                            nilai</button>

                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane {{ $tab == 'kedisiplinan' ? 'active' : '' }}" id="profile"
                                role="tabpanel" aria-labelledby="profile-tab">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Disiplin
                                        </th>
                                        <th>
                                            Sopan
                                        </th>
                                        <th>
                                            Santun
                                        </th>
                                        <th>
                                            Jumlah Poin
                                        </th>
                                        <th>
                                            Beri nilai
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pesertas as $peserta)
                                            <tr>
                                                <form action="/penilaian/kedisiplinan/{{ $peserta->id }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <td>
                                                        {{ $peserta->nama_peserta }}
                                                    </td>
                                                    <td>
                                                        <input style="width : 2cm" class="form-control" type="number"
                                                            value="{{ $peserta->nilai_kedisiplinan_disiplin }}"
                                                            {{ $peserta->is_nilai_kedisiplinan_finish ? 'disabled' : '' }}
                                                            name="nilai_kedisiplinan_disiplin" required>
                                                    </td>
                                                    <td>
                                                        <input style="width : 2cm" class="form-control" type="number"
                                                            value="{{ $peserta->nilai_kedisiplinan_sopan }}"
                                                            {{ $peserta->is_nilai_kedisiplinan_finish ? 'disabled ' : '' }}
                                                            name="nilai_kedisiplinan_sopan" required>
                                                    </td>
                                                    <td>
                                                        <input style="width : 2cm" class="form-control" type="number"
                                                            value="{{ $peserta->nilai_kedisiplinan_santun }}"
                                                            {{ $peserta->is_nilai_kedisiplinan_finish ? 'disabled' : '' }}
                                                            name="nilai_kedisiplinan_santun" required>
                                                    </td>
                                                    <td>
                                                        {{ $peserta->jumlah_poin_kedisiplinan }}
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-warning"
                                                            {{ $peserta->is_nilai_kedisiplinan_finish ? 'disabled' : '' }}
                                                            name="berinilai">Beri
                                                            nilai</button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...
                            </div>
                            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('base.end')
