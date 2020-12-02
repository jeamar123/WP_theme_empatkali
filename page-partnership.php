<?php get_header(); ?>

<section class="bg-c-F3F3F3 pt-20">
	<div class="w-8/12 mx-auto py-20">
		<h4 class="w-8/12 mx-auto text-3xl font-hairline leading-none mb-10 pb-5 border-b border-c-primary text-center">CERITAKAN TENTANG <strong class="font-bold">BISNISMU</strong>?</h4>
		<div class="w-8/12 mx-auto mt-4">
			<p class="text-center text-gray-600 mb-5">Tingkatkan penjualan dengan menambahkan <strong>EMPATKALI</strong> sebagai opsi pembayaran.</p>

			<form action="">
				<div class="flex mb-5">
					<div class="w-1/2 mr-5">
						<input type="text" class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-full text-black py-3" placeholder="Nama Depan *" style="background: rgba(56, 66, 75, .1)" autofocus required>
					</div>
					<div class="w-1/2">
						<input type="text" class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-full text-black py-3" placeholder="Nama Belakang *" style="background: rgba(56, 66, 75, .1)" required>
					</div>
				</div>
				<div class="mb-5">
					<div>
						<input type="text" class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-full text-black py-3" placeholder="Nama Usaha *" style="background: rgba(56, 66, 75, .1)" required>
					</div>
				</div>
				<div class="flex mb-5">
					<div class="w-1/2 mr-5">
						<input type="email" class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-full text-black py-3" placeholder="Alamat Email *" style="background: rgba(56, 66, 75, .1)" required>
					</div>
					<div class="w-1/2">
						<input type="tel" class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-full text-black py-3" placeholder="No. Telepon *" style="background: rgba(56, 66, 75, .1)" required>
					</div>
				</div>
				<div class="mb-5">
					<div>
						<input type="url" class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-full text-black py-3" placeholder="Website URL* contoh (www.empatkali.co.id atau https://empatkali.co.id)" style="background: rgba(56, 66, 75, .1)" required>
					</div>
				</div>
				<div class="mb-10">
					<textarea class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-2xl text-black py-3" style="background: rgba(56, 66, 75, .1)" placeholder="Pesan" rows="5"></textarea>
				</div>
				<div class="text-center">
					<input type="submit" class="bg-c-secondary text-white rounded-full h-20 w-20 cursor-pointer" value="KIRIM">
				</div>
			</form>
		</div>
	</div>
</section>

<section class="bg-c-primary h-24" style="margin-top: -7.5rem"></section>

<?php get_footer(); ?>