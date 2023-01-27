@extends('layouts.main')

@section('container')
<div class="container" style="font-family: 'Cormorant Garamond', serif; ">
	<div class="row justify-content-center mb-5" data-aos="fade-up">
		<div class="col-lg-8">
			<div class="card p-1 shadow-lg p-3 mb-5 bg-body rounded" >
				<h1 class="fw-semibold px-2 display-5">{{ $trip->title }}</h1>
				@if ($trip->image)
				<div >
					<img src="{{ asset('storage/' . $trip->image) }}" class="img-fluid rounded-2" width="100%" height="400"  alt="{{ $trip->title }}"> 
				</div>
				@else        
				<img src="/img/img1.jfif" class="img-fluid rounded-2" width="100%" height="400"  alt="{{ $trip->title }}">

				@endif
			
				<div class="accordion mt-3" id="accordionExample">
					<div class="accordion-item border-0 rounded " data-aos="fade-up">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button rounded fs-5 fw-semibold text-white" style="font-family: 'Podkova', serif; background-color: #00bff3; letter-spacing: 1px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Destinasi
							</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							<article class="my-3 fs-5">
								{!! $trip->destination !!}
							</article>
							</div>
						</div>
					</div>

					<div class="accordion-item mt-2 border-0 rounded" data-aos="fade-up">
						<h2 class="accordion-header " id="headingTwo">
						<button class="accordion-button collapsed rounded fs-5 fw-semibold text-white" style="font-family: 'Podkova', serif; background-color: #00bff3; letter-spacing: 1px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Harga
						</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<article class="my-3 fs-5">
									{!! $trip->price !!}
								</article>
							</div>
						</div>
					</div>

					<div class="accordion-item mt-2 border-0 rounded" data-aos="fade-up">
						<h2 class="accordion-header " id="headingThree">
						<button class="accordion-button collapsed rounded fs-5 fw-semibold text-white" style="font-family: 'Podkova', serif; background-color: #00bff3; letter-spacing: 1px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Fasilitas
						</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<article class="my-3 fs-5">
									{!! $trip->facility !!}
								</article>
							</div>
						</div>
					</div>
				</div>           
			</div>
		</div>

		<div class="container bg-white mb-5 fw-semibold text-secondary" data-aos="fade-up" id="form">
			<p class="text-center display-5 fw-bolder mt-3 text-dark">Form Pemesanan</p>
					<div class="row justify-content-center ">
						<div class="col-md-8">
							@if(session()->has('success'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
									{{ session('success') }}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
							@endif
						</div>
					</div>
			<form action="/Order" method="post" class="row g-2 d-flex justify-content-center mt-2 mb-5" data-aos="fade-up">
					@csrf
					<div class="form-floating col-md-4">
						<input type="hidden" id="trip_id" name="trip_id" value="{{ $trip->id }}">
						{{-- <input type="hidden" id="order_id" name="order_id" > --}}
						<input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" id="first_name" placeholder="First Name" required value="{{ old('first_name') }}">
						<label for="first_name">Nama Depan</label>
						@error('first_name')
						<div  class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>

					<div class="form-floating col-md-4">
						<input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name" placeholder="Last Name" required value="{{ old('last_name') }}">
						<label for="last_name">Nama Belakang</label>
						@error('last_name')
						<div  class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="w-100"></div>
					<div class="form-floating col-md-4">
						<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
						<label for="email">Email</label>
						@error('email')
						<div  class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>

					<div class="form-floating col-md-4 ">
						<input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" placeholder="081234567890" required value="{{ old('phone_number') }}"> 
						<label for="phone_number">Nomor Telepon / WhatsApp</label>
						@error('phone_number')
						<div  class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="w-100"></div>
					
					<div class="form-floating col-md-4">
						<input type="number" class="form-control @error('number_of_people') is-invalid @enderror" name="number_of_people" id="number_of_people" min="1" placeholder="1" value="2" required value="{{ old('number_of_people') }}">
						<label for="number_of_people">Jumlah Peserta</label>
						@error('number_of_people')
						<div  class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="form-floating col-md-4">
						<input type="date" class="form-control @error('trip_date') is-invalid @enderror" name="trip_date" id="trip_date" placeholder="dd/mm/yyyy" required value="{{ old('trip_date') }}">
						<label for="trip_date">Tanggal Tour</label>
						@error('trip_date')
						<div  class="invalid-feedback">
							{{ $message }}
						</div>
						@enderror
					</div>
					
					<div class="w-100"></div>

					<div class="form-floating col-md-8">
						<input type="text" class="form-control" name="trip_name" id="trip_name" placeholder="Package" value="{{ $trip->title }}" readonly>
						<label for="trip_name">Paket Wisata</label>
					</div>
	
					<div class="w-100"></div>

					<div class="form-floating col-md-8">
						<textarea class="form-control" placeholder="Leave a Message here" name="message" id="message" style="height: 100px">{{Request::old('message')}}</textarea>
						<label for="message" >Message</label>
					</div>

					<div class="d-grid gap-2 col-6 mx-auto mt-5">
						<button class="btn fs-5  text-white fw-semibold " style="background-color: #5dc6c9; font-family: 'Podkova', serif; letter-spacing: 1px;" type="submit">Pesan Sekarang</button>
					</div>
			</form>
		</div>

		
		<div class="container my-4" data-aos="fade-up">
			<h1  class="til1 display-6 fw-bolder " style="font-family: 'Podkova', serif;">Lihat Juga Paket wisata lainnya</h1>
			<div class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
				@foreach ($trips as $trip)
					<div class="col"  style="width: 255px">
						<div class="card shadow-sm" >
							@if ($trip->image)
								<img src="{{ asset('storage/' . $trip->image) }}" width="100%" height="270" class="card-img" alt="{{ $trip->title }}"> 
							@else        
								<img src="/img/img1.jfif" width="100%" height="270 " class="card-img" alt="{{ $trip->title }}">
							@endif

			
							<div class="card-img-overlay text-white row m-0 " style="background-color: rgba(0, 0, 0, 0.403);">
								<div class="align-self-center">
									<h6 class=" my-5 text-center ">{{ $trip->title }}</h6>
									<div class=" mb-3 d-flex justify-content-center m"> <a href="/Paketwisata/{{ $trip->slug }}"><button type="button" class="btn rounded-pill text-white" style="font-family: 'Podkova', serif; background-color: #5dc6c9">Pesan Sekarang <i class="bi bi-arrow-right"></i> </button></a>
									</div>
								</div>
							</div> 
						</div>
					</div>
				@endforeach
			</div>    
		</div>			

		<div class="col-lg-8" data-aos="fade-up">
			<div class="card p-1 shadow-lg p-3 my-5 bg-body rounded">
				<h5 class="fw-bold">Ketentuan Umum</h5>
				<div class="accordion accordion-flush" id="accordionFlushExample">

					<div class="accordion-item">
						<h2 class="accordion-header" id="panelsStayOpen-headingOne">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
							Syarat dan Ketentuan tour
						  </button>
						</h2>
						<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
						  <div class="accordion-body faq">
							<ul>
								<li>Jam kerja Paradise Tour adalah Senin sampai Sabtu dari pukul 08:00 hingga 17:00 dan pemrosesan pesanan dapat dilakukan selama jam kerja tersebut.</li>
								<li>Peserta diwajibkan untuk membayar semua rincian pemesanan paket perjalanan dengan batas waktu yang ditentukan oleh Paradise Tour. untuk mengeluarkan semua dokumen perjalanan yang diperlukan.</li>
								<li>peserta yang berusia di atas 70 tahun, atau peserta dengan gangguan fungsi fisik atau sensorik atau cacat mental, harus didampingi oleh anggota keluarga, teman, atau kerabat yang bertanggung jawab selama tur.</li>
								<li>Harga tour sewaktu waktu bisa berubah, terkait akan perubahan Harga Tiket Masuk, Kenaikan BBM yang berhubungan dengan pariwisata.</li>
							</ul>
						  </div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="panelsStayOpen-headingTwo">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
							Fasilitas Tour
						  </button>
						</h2>
						<div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
						  <div class="accordion-body faq">
							<ul>
								<li>Antar Jemput Bandara, Pelabuhan, Rumah</li>
								<li>Transportasi AC dan Nyaman</li>
								<li>Air Mineral</li>
								<li>Tour Guide</li>
								<li>Banner Wisata (peserta > 10)</li>
							</ul>						
						  </div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="panelsStayOpen-headingThree">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
							Peraturan Tour
						  </button>
						</h2>
						<div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
						  <div class="accordion-body faq">
							<ul>
								<li>Peserta tidak diperbolehkan membawa barang yang dianggap melanggar hukum meliputi senjata tajam, senjata Api, dan Narkoba.</li>
								<li>Peserta dilarang membuang sampah sembarangan baik di area publik maupun area Wisata.</li>
								<li>Peserta dilarang mengambil benda cagar budaya, tanaman serta hewan yang dilindungi selama tour berlangsung.</li>
								<li>Peserta wajib menjaga kesopanan selama tour berlangsung.</li>							
							</ul>
						  </div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="panelsStayOpen-headingFour">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
							Metode Pembayaran
						  </button>
						</h2>
						<div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
						  <div class="accordion-body faq">
							<ul>
								<li>Deposit sebesar 30% dari total biaya reservasi / pemesanan.</li>
								<li>Pelunasan biaya tour bisa dilunasi maksimum 1 minggu sebelum jadwal pelaksanaan.</li>
								<li>Pembayaran dapat dilakukan melalui nomor rekening berikut:
									<br> BCA: 8977660055
									<br> BNI : 2100065432
									<br> A/N : PT.Paradise Tour
									</li>
								<li>Konfirmasi pembayaran dengan mengirim bukti transfer / pembayaran melalui email ParadiseTour@tour.co.id</li>
								<li>Apabila bukti pembayaran belum kami terima maka dianggap belum melakukan pembayaran.</li>
							</ul>
						  </div>
						</div>
					</div>
					
					<div class="accordion-item">
						<h2 class="accordion-header" id="panelsStayOpen-headingFive">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
							Ketentuan Pembatalan
						  </button>
						</h2>
						<div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
						  <div class="accordion-body faq">
							<ul>
								<li>Pembatalan dilakukan 21 hari sebelum keberangkatan, dikenakan 50% biaya.</li>
								<li>Pembatalan dilakukan 14 hari sebelum keberangkatan, dikenakan 75% biaya pembatalan.</li>
								<li>Jika pembatalan dilakukan 3 hari sebelum keberangkatan, dikenakan 100% biaya pembatalan.</li>
								<li>Penggantian tanggal atau perubahan jadwal akan di sesuaikan dengan kondisi available hotel, transport dan/atau yang lainnya. Penggantian tanggal atau perubahan jadwal dapat di lakukan minimal 14 hari sebelum kedatangan.</li>
							</ul>
						  </div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header" id="panelsStayOpen-headingSix">
						  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
							Lain-lain
						  </button>
						</h2>
						<div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
						  <div class="accordion-body faq">
							<ul>
								<li>Semua syarat dan ketentuan yang telah kami buat bersifat mengikat.</li>
								<li>Peserta yang sudah melakukan reservasi kami anggap sudah membaca serta menyetujui semua syarat serta ketentuan ini.</li>
							</ul>
						  </div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection