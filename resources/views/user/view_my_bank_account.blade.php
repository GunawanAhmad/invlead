@include('base.start', ['path' => 'rekening', 'title' => 'Daftar Peserta', 'breadcrumbs' => ['Daftar Peserta']])
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
          <a href="{{ route('create user') }}" class="btn btn-primary">
          <i class="fas fa-plus" aria-hidden="true"></i>
          Tambah Daftar peserta
        </a>
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
                  <th>
                    action
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
                    <td class="align-middle text-center text-sm">
                  @can('delete users')
                    <a class="btn btn-danger btn-sm mb-0" onclick="return confirm('Yakin menghapus?')">Hapus</a>
                  @endcan
                  @can('update users')
                    <a class="btn btn-primary btn-sm mb-0">Ubah</a>              
                  @endcan
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
                    <td class="align-middle text-center text-sm">
                  @can('delete users')
                    <a class="btn btn-danger btn-sm mb-0" onclick="return confirm('Yakin menghapus?')">Hapus</a>
                  @endcan
                  @can('update users')
                    <a class="btn btn-primary btn-sm mb-0">Ubah</a>              
                  @endcan
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
                    <td class="align-middle text-center text-sm">
                  @can('delete users')
                    <a class="btn btn-danger btn-sm mb-0" onclick="return confirm('Yakin menghapus?')">Hapus</a>
                  @endcan
                  @can('update users')
                    <a class="btn btn-primary btn-sm mb-0">Ubah</a>              
                  @endcan
                </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@include('base.end')