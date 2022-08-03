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
        Here's the top 3 of the week !
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div class="card mt-0">
    <div class="card-body">
      <h6 class="mb-1">Jason Susanto</h6>
      @if(auth()->user()->gender == 'male')
        SMK 7 Baleendah
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div class="card mt-0">
    <div class="card-body">
      <h6 class="mb-1">Jason Susanto</h6>
      @if(auth()->user()->gender == 'male')
        SMK 7 Baleendah
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div class="card mt-0">
    <div class="card-body">
      <h6 class="mb-1">Jason Susanto</h6>
      @if(auth()->user()->gender == 'male')
        SMK 7 Baleendah
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div class="card mt-0">
    <div class="card-body">
      <h6 class="mb-1">Jason Susanto</h6>
      @if(auth()->user()->gender == 'male')
        SMK 7 Baleendah
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
  <div class="card mt-0">
    <div class="card-body">
      <h6 class="mb-1">Jason Susanto</h6>
      @if(auth()->user()->gender == 'male')
        SMK 7 Baleendah
      @endif
      @if(auth()->user()->gender == 'female')
        Beli <i>skincare</i> dengan diskon 40% melalui Smart Banking!
      @endif
    </div>
  </div>
@include('base.end')