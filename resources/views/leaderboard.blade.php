@include('base.start', ['path' => '', 'title' => 'Dashboard', 'breadcrumbs' => ['Dashboard']])
<div>
    <div class="card mt-4 mx-auto" style="max-width: 500px">
        <div class="card-body">
            <h6 class="mb-0">Leaderboard for This Week</h6>
            Here's the top 5 of the week !
        </div>
    </div>
    @foreach ($pesertas as $peserta)
        <div Style="Background-color: #5350FF;max-width:500px" class="card mt-1 mx-auto mt-3">
            <div style="color:white" class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 style="color:white" class="mb-1">{{ $peserta->nama_peserta }}</h6>
                    <p class="mb-0">{{ $peserta->asal_sekolah }}</p>
                </div>
                <b>{{ $peserta->total_nilai }}</b>
            </div>
        </div>
    @endforeach


</div>
@include('base.end')
