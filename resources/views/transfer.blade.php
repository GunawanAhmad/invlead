@include('base.start', ['path' => 'transfer', 'title' => 'Transfer', 'breadcrumbs' => ['Transfer']])
  <div class="card">
    <div class="card-body pt-4 p-3">
      @if (session('success'))
        <div class="alert alert-success text-white">
          <div>
            {{ session('success') }}
          </div>
          <div>
            <ul>
              <li>
                ID transaksi: {{ session('transaction')->id }}
              </li>
              <li>Tanggal transaksi: {{ session('transaction')->created_at }}</li>
              <li>Rekening tujuan transaksi: {{ session('transaction')->targetAccount->id }}</li>
              <li>Pemilik tujuan transaksi: {{ session('transaction')->targetAccount->owner->fullname }}</li>
            </ul>
          </div>
          
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
      <form action="{{ route('store transfer') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">No rekening tujuan</label>
              <input class="form-control" type="number" name="target_account_id" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Jumlah</label>
              <input class="form-control" type="number" name="amount"required>
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
