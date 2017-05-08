<div id="fh5co-gallery" class="fh5co-section-gray">
  <div class="container">
    <h3 class="text-center">QR CODE</h3>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
        <div class="text-center">
          {!! QrCode::size(250)->margin(2)->color(219,45,126)->generate(Request::url()); !!}
        </div>
        <p>A quick easy way to share your wedding with your loved ones!</p>
      </div>
      {{-- <div class="col-md-6 col-md-offset-2 text-center fh5co-heading animate-box">
        <div class="text-center">
          {!! QrCode::size(250)->margin(2)->color(219,45,126)->geo(20.6768568, -103.345058); !!}
        </div>
        <p>Scan the code with your phone and see where the wedding will be!</p>
      </div> --}}
    </div>
  </div>
</div>
