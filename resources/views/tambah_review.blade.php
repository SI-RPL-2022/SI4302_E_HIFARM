@extends('layouts.app')

@section('content')

	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style_tambahReview.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Toko</title>
	</head>

	<body>
		

		

	<form action="{{ route('review.store', $vendor_id)}}" method="POST" enctype="multipart/form-data">
	@csrf

			<div class="container">
			<input name='user_id' type="hidden" id="formFile" value="{{Auth::user()->id}}">
					<div class="row">
						<p class="mb-5 text-center container-detailToko"><a href="#" class="link-detailToko">Review Toko</a></p>

						<div class="mt-4 rating">
							<input type="radio" name="star" id="star1"><label for="star1"></label>
							<input type="radio" name="star" id="star2"><label for="star2"></label>
							<input type="radio" name="star" id="star3"><label for="star3"></label>
							<input type="radio" name="star" id="star4"><label for="star4"></label>
							<input type="radio" name="star" id="star5"><label for="star5"></label>
						</div>

						<div class="mb-3">
							<textarea class="form-control textarea-custom" name='review'id="exampleFormControlTextarea1" rows="5" placeholder="Bagaimana tanggapan anda mengenai toko kami?"></textarea>
						</div><br>

						<div class="mb-3">
							<!-- <label for="formFile" class="form-label">Cover Gambar Toko</label> -->
							<input class="form-control" name='image'type="file" id="formFile">
						</div><br><br>

						<div class="mb-5 text-center">
							<button type="submit" class="btn btn-outline-primary btn-lg"><b>+ Tambah Review</b></button>
						</div>
					</div>
				</div>
		</div>
	</form>

	<script src="assets/js/sticky_vanila_toggle.js"></script>

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
@endsection