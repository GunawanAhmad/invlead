@include('base.start', ['path' => 'absensi', 'title' => 'Absensi', 'breadcrumbs' => ['Absensi']])
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Absensi</h4>
                        <p class="card-category"> Absensi Peserta Magang Inovindo Digital Media</p>
                    </div>
                    {{-- <p>{{ json_decode($pesertas) }}</p> --}}
                    <script>
                        function dateChange(value) {
                            window.location.href = '/absensi?tanggal=' + value;
                        }
                    </script>
                    <input id="date-pick" type="date" class="form-control" style="margin-left:0.5cm ; width : 4cm"
                        onchange="dateChange(this.value)" value="{{ $tanggal }}">
                    <div class="card-body">
                        <form action="/absensi" method="POST">
                            @csrf
                            <input type="date" hidden id="hidden_date" name="tanggal" value="{{ $tanggal }}">
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
                                        @foreach ($pesertas as $peserta)
                                            <tr>
                                                <td>
                                                    {{ $loop->index + 1 }}
                                                </td>
                                                <td>
                                                    {{ $peserta->nama_peserta }}
                                                </td>
                                                <td>
                                                    <input type="radio" id="hadir_{{ $peserta->id }}"
                                                        name="{{ $peserta->id }}" value="hadir"
                                                        {{ $peserta->status_kehadiran == 'hadir' ? 'checked' : '' }}>
                                                    <label for="hadir_{{ $peserta->id }}">
                                                        <p>Hadir</p>
                                                    </label>
                                                </td>
                                                <td>
                                                    <input type="radio" value="izin" name="{{ $peserta->id }}"
                                                        id="izin_{{ $peserta->id }}"
                                                        {{ $peserta->status_kehadiran == 'izin' ? 'checked' : '' }}>
                                                    <label for="izin_{{ $peserta->id }}">
                                                        <p>Izin</p>
                                                    </label>
                                                </td>
                                                <td>
                                                    <input type="radio" value="alfa" name="{{ $peserta->id }}"
                                                        id="alfa_{{ $peserta->id }}"
                                                        {{ $peserta->status_kehadiran == 'alfa' ? 'checked' : '' }}>
                                                    <label for="alfa_{{ $peserta->id }}">
                                                        <p>alfa</p>
                                                    </label>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="submit">
                                    <button type="submit" class='btn btn-primary center-block'
                                        name="submit">submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @include('base.end')
