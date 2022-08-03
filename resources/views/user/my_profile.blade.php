@include('base.start', ['path' => 'profile', 'title' => 'Profil User', 'breadcrumbs' => ['Profil User']])
  <div class="card">
    <div class="card-header pb-0 p-3 d-flex justify-content-between align-items-center">
      <h6 class="mb-0">Profil User</h6>
      <a href="{{ route('edit my profile') }}" class="btn btn-primary">
        <i class="fas fa-pen" aria-hidden="true"></i>
        Ubah profil
      </a>     
    </div>
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
      @if(isset($user))
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
              <input class="form-control" type="text" value="{{ $user->fullname }}" readonly>
            </div>
          </div>
        </div>    
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
              <input class="form-control" type="text" value="{{ $user->gender }}" readonly>
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Tanggal lahir</label>
              <input class="form-control" type="text" value="{{ $user->birthdate }}" readonly>
            </div>
          </div>
        </div>   
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">No telp</label>
              <input class="form-control" type="number" value="{{ $user->phone_number }}" readonly>
            </div>
          </div>
        </div>    
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Email</label>
              <input class="form-control" type="text" value="{{ $user->email }}" readonly>
            </div>
          </div>
        </div>                          
      @else
        <div class="alert alert-danger text-white">
          User tidak ditemukan.
        </div>
      @endif
    </div>
  </div>
@include('base.end')
