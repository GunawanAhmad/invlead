@include('base.start', ['path' => 'pembayaran', 'title' => 'Pembayaran', 'breadcrumbs' => ['Pembayaran']])
<div class="card">
    <div class="card-body pt-4 p-3">
        <h5>
            {{ $invoice->merchantProduct->merchant->name }}: {{ $invoice->merchantProduct->name }} (Konfirmasi)
</h5>
    </div>
</div>
  <div class="card mt-4">
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
      <form action="{{ route('store confirm payment') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Kode</label>
              <input class="form-control" type="number" value="{{ $invoice->code }}" readonly>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="example-text-input" class="form-control-label">Harga</label>
              <input class="form-control" type="number" value="{{ $invoice->price }}" readonly>
            </div>
          </div>
        </div> 

        <input class="form-control" type="hidden" name="id" value="{{ $invoice->id }}" required>

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
