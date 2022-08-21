@include('base.start', [
    'path' => 'Edit Profile',
    'title' => 'Edit Profile',
    'breadcrumbs' => ['Profil User', 'Edit Profile'],
])
<div class="card">
    <div class="card-header pb-0 p-3 d-flex justify-content-between align-items-center">
        <h6 class="mb-0">Edit profile</h6>

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
        @if (isset($user))
            <form action="/profile/update" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                            <input class="form-control" type="text" name="fullname" value="{{ $user->fullname }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="gender" class="form-control-label">Jenis Kelamin</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male
                                </option>
                                <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Tanggal lahir</label>
                            <input class="form-control" name="birthdate" type="date" value="{{ $user->birthdate }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">No telp</label>
                            <input class="form-control" name="phone_number" type="number"
                                value="{{ $user->phone_number }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email</label>
                            <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-pen" aria-hidden="true"></i>
                    submit
                </button>
            </form>
        @else
            <div class="alert alert-danger text-white">
                User tidak ditemukan.
            </div>
        @endif
    </div>
</div>
@include('base.end')
