@include('base.start', ['path' => '', 'title' => 'Dashboard', 'breadcrumbs' => ['Dashboard']])
  <div class="card">
    <div class="card-body">
      <h6 class="mb-0">Selamat datang, {{ auth()->user()->fullname }}!</h6>
    </div>
  </div>
  <div class="card mt-4">
    <div class="card-body">
      <h6 class="mb-0">Penawaran Hari Ini</h6>
      @if(auth()->user()->gender == 'male')
        Beli sabun wajah dengan diskon 50% melalui Smart Banking!
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
@include('base.end')