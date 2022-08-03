@include('base.start', ['path' => 'rekening', 'title' => 'Rekening', 'breadcrumbs' => ['Rekening']])
  <div class="card">
    <div class="card-body">
      <h6 class="mb-0">No rek: {{ $bankAccount->id }}</h6>
      <h6 class="mb-0">Saldo: {{ $bankAccount->balance }}</h6>
    </div>
  </div>
@include('base.end')