@include('base.start', [
    'path' => 'rekening',
    'title' => 'Daftar Peserta',
    'breadcrumbs' => ['Daftar Peserta'],
])
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
                        <a href="{{ route('tambah peserta view') }}" class="btn btn-primary">
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
                                    @foreach ($pesertas as $peserta)
                                        <tr>
                                            <td>
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>
                                                {{ $peserta->nama_peserta }}
                                            </td>
                                            <td>
                                                {{ $peserta->asal_sekolah }}
                                            </td>
                                            <td>

                                                {{ $peserta->total_nilai }}

                                            </td>
                                            <td class="d-flex align-middle text-center text-sm">
                                                @can('delete users')
                                                    <form action="/hapus_peserta/{{ $peserta->id }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm mb-0"
                                                            onclick="return confirm('Yakin menghapus?')">Hapus</button>
                                                    </form>
                                                @endcan
                                                @can('update users')
                                                    <a class="btn btn-primary btn-sm mb-0"
                                                        href="/edit_peserta/{{ $peserta->id }}"
                                                        style="margin-left: 0.5rem">Ubah</a>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('base.end')
