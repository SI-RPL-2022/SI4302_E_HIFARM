<!doctype html>
<html lang="en">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{asset('/css/style_blog.css')}}">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Blog</title>
	</head>

	<body>

		<!-- form -->
		<div class="container"><br><br><br>
		<h1 class="text-center mt-5 mb-5">Semua Blog & News</h1>
			<div class="custom-inpForm text-center">
			 	<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search. . .">
					<button class="btn btn-warning btn-lg" type="button" id="button-addon2">Search</button>
				</div>

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-link btn-sm custom-btn-filter" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
					<div class="filter-icon">
				 		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M3.853 54.87C10.47 40.9 24.54 32 40 32H472C487.5 32 501.5 40.9 508.1 54.87C514.8 68.84 512.7 85.37 502.1 97.33L320 320.9V448C320 460.1 313.2 471.2 302.3 476.6C291.5 482 278.5 480.9 268.8 473.6L204.8 425.6C196.7 419.6 192 410.1 192 400V320.9L9.042 97.33C-.745 85.37-2.765 68.84 3.854 54.87L3.853 54.87z"/></svg>
				 	</div> 
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-dialog-centered modal-sm">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Berdasarkan Kategori</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <div class="modal-body text-start">
				        <div class="form-check">
						  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						  <label class="form-check-label" for="flexRadioDefault1">
						    Hewan Ternak
						  </label>
						</div>

						<div class="form-check">
						  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						  <label class="form-check-label" for="flexRadioDefault1">
						    Produk Ternak
						  </label>
						</div>
						
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						  <label class="form-check-label" for="flexRadioDefault1">
						    Pakan Ternak
						  </label>
						</div>

						<div class="form-check">
						  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
						  <label class="form-check-label" for="flexRadioDefault1">
						    Lainnya. . .
						  </label>
						</div>
				      </div>
				
				    </div>
				  </div>
				</div>
							
			</div>


						

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>