@include('base.start', ['path' => 'user/list', 'title' => 'Tambah Peserta', 'breadcrumbs' => ['Daftar Peserta', 'Tambah Peserta']
  ,'backRoute' => url()->previous() ? url()->previous() : route('user tm')
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
      <form action="{{ route('store user') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
              <input class="form-control" type="text" name="fullname" required>
            </div>
          </div>
        </div>    
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
              <select class="form-control" name="gender" required>
                <option value="female">Perempuan</option>
                <option value="male">Laki-laki</option>
              </select>
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Tanggal lahir</label>
              <input class="form-control" type="date" name="birthdate" placeholder="Contoh: Pengajian Maghrib" required>
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Asal Sekolah</label>
              <input class="form-control" type="text" name="fullname" required>
            </div>
          </div>
        </div>    
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Alamat Rumah</label>
              <input class="form-control" type="text" name="fullname" required>
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
  <script>
    $('#role-santri').click(() =>
    {
      if($('#role-santri').is(':checked'))
      {
        $('#santri-data-section').show();

        $('[name="angkatan"').attr('required', true);
        $('[name="nis"').attr('required', true);
      }
      else
      {
        $('#santri-data-section').hide();

        $('[name="angkatan"').attr('required', false);
        $('[name="nis"').attr('required', false);
      }
    });
  </script>
@include('base.end')
