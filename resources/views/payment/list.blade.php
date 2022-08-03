
  
@include('base.start', ['path' => 'pembayaran', 'title' => 'Pembayaran Tagihan', 'breadcrumbs' => ['Pembayaran']])
  <div class="row">      
    @foreach($merchantProducts as $merchantProduct)  
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card h-100">
          <div class="card-body p-3">
            <div class="row">
              <div class="numbers">
                <a href="{{ url('pembayaran', $merchantProduct->id) }}">
                    <h5 class="font-weight-bolder">
                        {{ $merchantProduct->merchant->name }}: {{ $merchantProduct->name }}
                    </h5>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach   
  </div>

@include('base.end')