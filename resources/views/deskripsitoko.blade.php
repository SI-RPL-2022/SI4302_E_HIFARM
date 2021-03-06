@extends('layouts.app')

@section('content')
<style>
      /* GLOBAL STYLES
    -------------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 4rem;
    }
    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 32rem;
    }
    .carousel-item > img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }


    /* MARKETING CONTENT
    -------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }
    .marketing h2 {
      font-weight: 400;
    }
    /* rtl:begin:ignore */
    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }
    /* rtl:end:ignore */


    /* Featurettes
    ------------------------- */

    .featurette-divider {
      margin: 5rem 0; /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      /* rtl:remove */
      letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
    -------------------------------------------------- */

    @media (min-width: 40em) {
      /* Bump up size of carousel content */
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }

</style>
<div class="p-5 mb-4 bg-light rounded-3">
<div class="col">

  <div class="container-fluid py-5">
    
    <h1 class="display-5 fw-bold">Toko Abadi</h1>
    <p class="col-md-8 fs-4">Menyediakan berbagai daging terbaik</p>
  </div>
</div>
  </div>
  <div class="container">
			<!-- row 1 -->
			<div class="row mt-2 mb-4">
		    	<div class="col">
		      		<h3 class="text-center container-produk">Produk</h3>
		    	</div>

		    	<div class="col">
		    		<hr class="dividing-line">
		    	</div>

		    	<div class="col">
		      		<h3 class="text-center container-detailToko">Detail Toko</h3>
		    	</div>
		    </div>
      
      <h4> Deskripsi Toko </h4>
      <h5> Toko Abadi fokus dalam menyediakan
hewan-hewan ternak terbaik dan berkualitas untukmu.</h5>
<br></br>
<h4> Lokasi Toko </h4>
<h5>Jl. W.J. Lalamentik, Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Tim.</h5>
<br></br>
<h4> Kontak </h4>
<h5> <img src="https://w7.pngwing.com/pngs/752/599/png-transparent-line-app-icon-whatsapp-logo-whatsapp-grass-mobile-phones-android.png" width="50" alt=""></h5><h6> Click Here </h6>
<br></br>
<h4> Buka Sejak </h4>
<h5> 2019 </h5>

@endsection