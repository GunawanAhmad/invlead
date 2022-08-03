@include('base.start', ['path' => 'user/list', 'title' => 'Daftar User', 'breadcrumbs' => ['Daftar User']])
  <div class="card">
    <div class="card-header pb-0 p-3 d-flex justify-content-between align-items-center">
      <h6 class="mb-0">Daftar User</h6>
      @can('create users')
        <a href="{{ route('create user') }}" class="btn btn-primary">
          <i class="fas fa-plus" aria-hidden="true"></i>
          Buat user
        </a>     
      @endcan
    </div>
    <div class="card-body pt-4 p-3">
      @if (session('success'))
        <div class="alert alert-success text-white">
          {{ session('success') }}
        </div>
      @endif
      @if ($errors->any())
        <div class="alert alert-danger text-white">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <div class="table-responsive p-0">
        <table class="table align-items-center mb-0">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th> 
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Jenis Kelamin</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Lahir</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No Telp</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
              <th class="text-secondary opacity-7"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <img src="{{ asset('img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="user1">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">{{ $user->fullname }}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  @if($user->gender == 'male')
                    L
                  @endif
                  @if($user->gender == 'female')
                    P
                  @endif
                </td>
                <td>
                  {{ $user->birthdate }}
                </td>
                <td>
                  {{ $user->phone_number }}
                </td>
                <td>
                  @foreach ($user->getRoleNames() as $role)
                    <span class="badge bg-gradient-success">{{ $role }}</span>
                  @endforeach
                </td>
                <td class="align-middle text-center text-sm">
                  @can('delete users')
                    <a href="{{ route('delete user', $user->id) }}" class="btn btn-danger btn-sm mb-0" onclick="return confirm('Yakin menghapus?')">Hapus</a>
                  @endcan
                  @can('update users')
                    <a href="{{ route('edit user', $user->id) }}" class="btn btn-primary btn-sm mb-0">Ubah</a>              
                  @endcan
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@include('base.end')
