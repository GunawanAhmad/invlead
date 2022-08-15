@include('base.start', ['path' => '', 'title' => 'Dashboard', 'breadcrumbs' => ['Dashboard']])
  <div class="card">
    <div class="card-body">
      <h6 class="mb-0">Selamat datang, {{ auth()->user()->fullname }}!</h6>
    </div>
  </div>
  <div class="card mt-4">
    <div class="card-body">
      <h6 class="mb-0">Leaderboard for This Week</h6>
      @if(auth()->user()->gender == 'male')
        Here's the top 5 of the week !
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div Style="Background-color: #5350FF" class="card mt-1">
    <div style="color:white" class="card-body">
      <h6 style="color:white" class="mb-1">Jason Susanto</h6>
      @if(auth()->user()->gender == 'male')
        SMK 7 Baleendah
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div Style="Background-color: #5350FF" class="card mt-1">
    <div style="color:white" class="card-body">
      <h6 style="color:white" class="mb-1">David Sibarani</h6>
      @if(auth()->user()->gender == 'male')
        SMKN 12 Bekasi Barat
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div Style="Background-color: #5350FF" class="card mt-1">
    <div style="color:white" class="card-body">
      <h6 style="color:white" class="mb-1">Hamam Mulki</h6>
      @if(auth()->user()->gender == 'male')
        Politeknik 8 Jakarta
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div Style="Background-color: #5350FF" class="card mt-1">
    <div style="color:white" class="card-body">
      <h6 style="color:white" class="mb-1">Baiq Pratama</h6>
      @if(auth()->user()->gender == 'male')
        SMK 6 Bandung
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div Style="Background-color: #5350FF" class="card mt-1">
    <div style="color:white" class="card-body">
      <h6 style="color:white" class="mb-1">Nelson Bridge</h6>
      @if(auth()->user()->gender == 'male')
        Universitas Veritas
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
@include('base.end')