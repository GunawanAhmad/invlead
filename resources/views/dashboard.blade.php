@include('base.start', ['path' => '', 'title' => 'Dashboard', 'breadcrumbs' => ['Dashboard']])
<div class="card">
    <div class="card-body">
        <h6 class="mb-0">Selamat datang, {{ auth()->user()->fullname }}!</h6>
    </div>
</div>
<div class="card mt-4">
    <div class="card-body">
        <h6 class="mb-0">Leaderboard for This Week</h6>
        Here's the top 5 of the week !
    </div>
</div>
@foreach ($pesertas as $peserta)
    <div Style="Background-color: #5350FF" class="card mt-1">
        <div style="color:white" class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h6 style="color:white" class="mb-1">{{ $peserta->nama_peserta }}</h6>
                <p class="mb-0">{{ $peserta->asal_sekolah }}</p>
            </div>
            <b>{{ $peserta->total_nilai }}</b>
        </div>
    </div>
@endforeach

@include('base.end')
