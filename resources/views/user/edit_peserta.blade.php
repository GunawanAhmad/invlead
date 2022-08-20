@include('base.start', [
    'path' => 'edit',
    'title' => 'Edit Peserta',
    'breadcrumbs' => ['Daftar Peserta', 'Edit Peserta'],
    'backRoute' => url()->previous() ? url()->previous() : route('user tm'),
])
<div class="card">
    <div class="card-body pt-4 p-3">
        @if ($errors->any())
            <div class="alert alert-danger text-white">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/edit_peserta/{{ $peserta->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                        <input class="form-control" type="text" value="{{ $peserta->nama_peserta }}"
                            name="nama_peserta" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                        <select value="{{ $peserta->jenis_kelamin }}"class="form-control" name="jenis_kelamin" required>
                            <option value="perempuan" {{ $peserta->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>
                                Perempuan</option>
                            <option value="laki-laki" {{ $peserta->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>
                                Laki-laki</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Tanggal lahir</label>
                        <input class="form-control" type="date" value="{{ $peserta->tgl_lahir }}" name="tgl_lahir"
                            placeholder="Contoh: Pengajian Maghrib" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Asal Sekolah</label>
                        <input class="form-control" value="{{ $peserta->asal_sekolah }}" type="text"
                            name="asal_sekolah" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Alamat Rumah</label>
                        <input class="form-control" value="{{ $peserta->alamat_rumah }}" type="text"
                            name="alamat_rumah" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input class="btn btn-primary form-control" type="submit" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@include('base.end')
