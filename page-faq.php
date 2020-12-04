<?php get_header(); ?>

<section class="c4x-faq bg-white pt-20">

	<div class="lg:w-10/12 md:w-10/12 w-full mx-auto lg:pt-20 md:pt-20 pt-16 pb-10">
		<h4 class="lg:w-8/12 md:w-8/12 w-10/12 mx-auto text-3xl font-hairline lg:leading-none md:leading-none leading-tight mb-10 pb-5 border-b border-c-primary text-center">BUTUH BANTUAN?</h4>

		<div class="search lg:w-7/12 md:w-7/12 w-10/12 mx-auto">
			<div class="relative rounded-md shadow-sm">
				<input type="text" class="focus:outline-none block w-full px-4 sm:text-sm bg-gray-300 rounded-full text-black py-3 mb-3" placeholder="Cari pertanyaan" onkeyup="searchFaq()" style="background: rgba(56, 66, 75, .1)">
				<div class="absolute inset-y-0 right-0 mr-4 flex items-center">
					<i class="fas fa-search text-c-98A2AB"></i>
				</div>
			</div>
			<p class="text-sm text-center">Kamu bisa juga menulusuri topik di bawah ini untuk menemukan yang kamu cari.</p>
		</div>
	</div>

	<div style="box-shadow: inset 0 -5px 0 0 rgba(56, 66, 75, .25)">
		<ul class="flex items-end lg:w-10/12 md:w-10/12 w-full mx-auto">
			<li class="w-1/6 text-center border-b-5 border-c-38424b border-opacity-0 hover:border-opacity-100">
				<a href="#" class="group block tablinks" onclick="openFaq(event, 'faqGeneral')" id="faqDefaultOpen">
					<img src="https://images.empatkali.co.id/faq/faq-general.svg" class="opacity-25 group-hover:opacity-100 lg:h-12 md:h-12 h-8 mx-auto" alt="">
					<span class="block mt-1 mb-3 text-c-38424b text-opacity-25 group-hover:text-opacity-100 lg:text-base md:text-base text-xs">General</span>
				</a>
			</li>
			<li class="w-1/6 text-center border-b-5 border-c-38424b border-opacity-0 hover:border-opacity-100">
				<a href="#" class="group block tablinks" onclick="openFaq(event, 'faqAkun')">
					<img src="https://images.empatkali.co.id/faq/faq-account.svg" class="opacity-25 group-hover:opacity-100 lg:h-12 md:h-12 h-8 mx-auto" alt="">
					<span class="block mt-1 mb-3 text-c-38424b text-opacity-25 group-hover:text-opacity-100 lg:text-base md:text-base text-xs">Akun</span>
				</a>
			</li>
			<li class="w-1/6 text-center border-b-5 border-c-38424b border-opacity-0 hover:border-opacity-100">
				<a href="#" class="group block tablinks" onclick="openFaq(event, 'faqPembayaran')">
					<img src="https://images.empatkali.co.id/faq/faq-payment.svg" class="opacity-25 group-hover:opacity-100 lg:h-12 md:h-12 h-8 mx-auto" alt="">
					<span class="block mt-1 mb-3 text-c-38424b text-opacity-25 group-hover:text-opacity-100 lg:text-base md:text-base text-xs">Pembayaran</span>
				</a>
			</li>
			<li class="w-1/6 text-center border-b-5 border-c-38424b border-opacity-0 hover:border-opacity-100">
				<a href="#" class="group block tablinks" onclick="openFaq(event, 'faqCicilan')">
					<img src="https://images.empatkali.co.id/faq/logocicil.svg" class="opacity-25 group-hover:opacity-100 lg:h-12 md:h-12 h-8 mx-auto" alt="">
					<span class="block mt-1 mb-3 text-c-38424b text-opacity-25 group-hover:text-opacity-100 lg:text-base md:text-base text-xs">Cicilan</span>
				</a>
			</li>
			<li class="w-1/6 text-center border-b-5 border-c-38424b border-opacity-0 hover:border-opacity-100">
				<a href="#" class="group block tablinks" onclick="openFaq(event, 'faqTransaksi')">
					<img src="https://images.empatkali.co.id/faq/lainnya.svg" class="opacity-25 group-hover:opacity-100 lg:h-12 md:h-12 h-8 mx-auto" alt="">
					<span class="block mt-1 mb-3 leading-tight text-c-38424b text-opacity-25 group-hover:text-opacity-100 lg:text-base md:text-base text-xs">Transaksi dan Biaya Lainnya</span>
				</a>
			</li>
			<li class="w-1/6 text-center border-b-5 border-c-38424b border-opacity-0 hover:border-opacity-100">
				<a href="#" class="group block tablinks" onclick="openFaq(event, 'faqMerchant')">
					<img src="https://images.empatkali.co.id/faq/faq-merchant.svg" class="opacity-25 group-hover:opacity-100 lg:h-12 md:h-12 h-8 mx-auto" alt="">
					<span class="block mt-1 mb-3 text-c-38424b text-opacity-25 group-hover:text-opacity-100 lg:text-base md:text-base text-xs">Merchant</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="tab-container bg-c-F3F3F3 pb-20">
		<div class="lg:w-10/12 md:w-10/12 w-full mx-auto pt-4">
			<div id="faqGeneral" class="tabcontent">
				<button class="accordion">Apa itu EMPATKALI?</button>
				<div class="panel">
					<p><strong>EMPATKALI</strong> adalah fintech (finance technology) yang telah terdaftar dan diawasi oleh OJK (Otoritas Jasa Keuangan). <strong>EMPATKALI</strong> merupakan solusi pembayaran yang mudah untuk transaksi apapun yang dilakukan oleh konsumen di berbagai online maupun offline store favoritnya. Solusi pembayaran yang ditawarkan <strong>EMPATKALI</strong> memudahkan para konsumen yang ingin berbelanja barang-barang idamannya hari ini juga, dan mereka dapat membayarnya secara mencicil setiap bulan dan sebanyak empat kali tanpa dikenakan bunga.</p>

					<p>Kami berkomitmen untuk memberikan layanan yang jujur dan transparan, begitu juga dengan para pelanggan kami adalah konsumen yang jujur dalam setiap bertransaksi.</p>

					<p><strong>EMPATKALI</strong> membuat pengalaman berbelanja jadi lebih mudah dan menyenangkan!</p>
				</div>

				<button class="accordion">Bagaimana cara saya mendaftar di EMPATKALI?</button>
				<div class="panel">
					<p>Untuk melakukan pendaftaran di EMPATKALI silahkan ikuti langkah - langkah berikut :</p>
					<ol>
						<li>Silahkan kamu mendownload aplikasi <strong>EMPATKALI</strong> di <a href="https://play.google.com/store/apps/details?id=id.empatkali" target="_blank">GooglePlay</a> ataupun <a href="https://apps.apple.com/us/app/empatkali/id1440454442" target="_blank">AppStore</a>.</li>
						<li>Masukkan nomor handphone kamu yang aktif dan kamu akan menerima kode OTP (One Time Password), untuk verifikasi.</li>
						<li>Silahkan mengaupload dokumen - dokumen yang dibutuhkan agar akun <strong>EMPATKALI</strong> kamu bisa di Aktivasi</li>
						<li>Jika dokumen yang kamu kirimkan sudah sesuai dengan syarat dan ketentuan di <strong>EMPATKALI</strong> maka kami akan mengirimkan email verifikasi ke alamat email yang kamu sudah daftarkan.</li>
						<li>Tim analis kami akan melakukan verifikasi untuk dokumen dan data yang kamu kirimkan. Jika memenuhi syarat dan ketentuan yang berlaku di perusahaan kami maka kami akan memberikan kredit limit yang bisa kamu gunakan untuk berbelanja di merchant yang sudah bekerja sama dengan kami.</li>
					</ol>
				</div>

				<button class="accordion">Apa saja syarat dan ketentuan untuk mendaftar di EMPATKALI?</button>
				<div class="panel">
					<p>Agar memenuhi syarat untuk menggunakan <strong>EMPATKALI</strong>, kamu harus:</p>
					<ol>
						<li>Berusia 21 tahun ke atas saat mendaftar</li>
						<li>Memiliki kerja penuh waktu (full-time job)</li>
						<li>Mempunyai nomor KTP dan NPWP yang sah</li>
						<li>Mempunyai kartu debit dengan 3D secured (<img src="<?php echo bloginfo('template_url'); ?>/assets/images/visa.svg" alt="" class="h-4 inline-block"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/jcb.svg" alt="" class="h-6 inline-block"> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/mastercard.svg" alt="" class="h-6 inline-block">) (klik di sini untuk info lebih lanjut mengenai 3D secured)</li>
						<li>Dengan menggunakan aplikasi Empat Kali maka kamu sudah setuju dengan syarat dan ketentuan yang berlaku di <strong>EMPATKALI</strong></li>
					</ol>
				</div>

				<button class="accordion">Berapa SLA untuk verifikasi data?</button>
				<div class="panel">
					<p>Untuk proses verifikasi data kami membutuhkan waktu maksimal 1 * 24 jam</p>
				</div>

				<button class="accordion">Dokumen apa saja yang dibutuhkan untuk pendaftaran di <strong>EMPATKALI</strong> ?</button>
				<div class="panel">
					<p>Untuk mendaftar di Empat kali, Kamu harus mengunggah dokumen-dokumen berikut ini:</p>
					<ol>
						<li>KTP</li>
						<li>NPWP</li>
						<li>Kartu ATM yang sudah dilengkapi dengan fasilitas 3D Secured (<img src="<?php echo bloginfo('template_url'); ?>/assets/images/visa.svg" alt="" class="h-4 inline-block" /> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/jcb.svg" alt="" class="h-6 inline-block" /> <img src="<?php echo bloginfo('template_url'); ?>/assets/images/mastercard.svg" alt="" class="h-6 inline-block" />)</li>
					</ol>
				</div>

				<button class="accordion">Berapa batas kredit yang akan diberikan oleh <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Untuk jumlah limit yang diberikan ke kamu ditentukan oleh tim analis kami dan kamu dapat mengetahui jumlah limit kamu dari aplikasi Empat Kali</p>
				</div>

				<button class="accordion">Apakah ada minimum belanja di <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p><strong>EMPATKALI</strong> tidak memberikan minimum belanja kepada pengguna, tetapi kamu dapat berbelanja sesuai dengan limit kredit yang kamu miliki.</p>
				</div>

				<button class="accordion">Berapa biaya yang dikenakan untuk menggunakan <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Jika kamu menggunakan <strong>EMPATKALI</strong> dan membayar cicilan tepat waktu, kamu hanya akan dikenakan satu kali biaya layanan senilai Rp 10,000. Biaya layanan ini akan dibayarkan ketika kamu membeli dengan menggunakan <strong>EMPATKALI</strong>, tapi tidak akan dibayarkan di setiap cicilan.</p>
					<p>Misalnya. Ketika kamu membeli satu pasang jeans seharga Rp 400,000, akan ada biaya layanan senilai Rp 10,000 pada saat pembayaran cicilan pertama saja.</p>
					<p>Jadi simulasi pembayaran kamu adalah seperti ini:</p>
					<p><strong>Pembelian satu pasang jeans seharga Rp. 400,000</strong></p>
					<table class="table-auto border border-c-38424b rounded text-sm">
					    <tr class="bg-c-38424b text-white">
					        <td>&nbsp;</td>
					        <td>Pembayaran 1</td>
					        <td>Pembayaran 2</td>
					        <td>Pembayaran 3</td>
					        <td>Pembayaran 4</td>
					    </tr>
					    <tr>
					        <td class="bg-c-38424b text-white">Cicilan</td>
					        <td class="border border-c-38424b">Rp. 100,000</td>
					        <td class="border border-c-38424b">Rp. 100,000</td>
					        <td class="border border-c-38424b">Rp. 100,000</td>
					        <td class="border border-c-38424b">Rp. 100,000</td>
					    </tr>
					    <tr>
					        <td class="bg-c-38424b text-white">Biaya layanan</td>
					        <td class="border border-c-38424b">Rp. 10,000</td>
					        <td class="border border-c-38424b">0</td>
					        <td class="border border-c-38424b">0</td>
					        <td class="border border-c-38424b">0</td>
					    </tr>
					    <tr>
					        <td class="border border-c-38424b bg-c-98A2AB text-white">Total Cost</td>
					        <td class="border border-c-38424b bg-c-98A2AB text-white">Rp. 110,000</td>
					        <td class="border border-c-38424b bg-c-98A2AB text-white">Rp. 100,000</td>
					        <td class="border border-c-38424b bg-c-98A2AB text-white">Rp. 100,000</td>
					        <td class="border border-c-38424b bg-c-98A2AB text-white">Rp. 100,000</td>
					    </tr>
					</table>
					<p><strong>EMPATKALI</strong> tidak akan pernah mengenakan bunga sama sekali pada setiap pembelian.</p>
				</div>

				<button class="accordion">Apakah <strong>EMPATKALI</strong> aman dan terjamin?</button>
				<div class="panel">
					<p>Ya, tentunya kami memastikan bahwa informasi pribadi kamu dilindungi. Kami mengenkripsi semua data sensitif. Kami juga memberikan pengamanan fisik, elektronik, dan prosedural untuk melindungi informasi kamu. Kami tidak menjual atau menyewakan informasi kamu kepada siapapun kecuali dibutuhkan oleh instansi terkait untuk mengeluarkan pinjaman kamu atau diperlukan untuk diberikan kepada regulator OJK (Otoritas Jasa Keuangan).</p>
				</div>

				<button class="accordion">Bagaimana cara membayar tagihan <strong>EMPATKALI</strong> saya?</button>
				<div class="panel">
					<p>Kamu bisa membayar tagihan melalui Virtual Account yang tertera pada aplikasi atau email penagihan. Pembayaran melalui Virtual Account ini dapat dilakukan sesuai dengan Bank yang kamu pilih.</p>
					<p>Pembayaran Tagihan</p>
					<ul>
					    <li>Buka aplikasi <strong>EMPATKALI</strong></li>
					    <li>Klik tab Transaksi</li>
					    <li>Pilih Transaksi yang ingin dibayar</li>
					    <li>Klik Bayar</li>
					    <li>Ikuti petunjuk bayar Virtual Account yang tertera</li>
					</ul>
				</div>

				<button class="accordion">Apa saja barang yang bisa dibeli menggunakan metode pembayaran <strong>EMPATKALI</strong> ?</button>
				<div class="panel">
					<p>Melalui metode pembayaran <strong>EMPATKALI</strong>, kamu bisa melakukan pembelian produk-produk lifestyle terkini untuk memenuhi gaya kamu dan melakukan pembayaran dengan sistem cicilan sebanyak <strong>EMPATKALI</strong>. Pastikan limit kreditmu mencukupi saat memilih metode pembayaran dengan <strong>EMPATKALI</strong>.</p>
				</div>

				<button class="accordion">Mengapa pembelian saya dengan <strong>EMPATKALI</strong> tidak disetujui ?</button>
				<div class="panel">
					<p>Pembelanjaan kamu di merchant dengan menggunakan metode pembayaran <strong>EMPATKALI</strong> tidak disetujui bisa dikarenakan beberapa hal, diantaranya adalah : </p>
					<ul class="use-num">
					    <li>Kamu tidak disetujui untuk mendapatkan kredit di <strong>EMPATKALI</strong></li>
					    <li>Kamu sudah mendapatkan Limit kredit di <strong>EMPATKALI</strong> akan tetapi kamu terlambat melakukan pembayaran sehingga akun kamu kami tanggukan sementara sampai kamu membayarkan seluruh kewajiban kamu. </li>
					    <li>Limit yang tersisa untuk melakukan transaksi tidak mencukupi. </li>
					</ul>
				</div>

				<button class="accordion">Bagaimana cara menambah atau menaikkan limit kredit saya di <strong>EMPATKALI</strong> ?</button>
				<div class="panel">
					<p>Untuk kenaikkan limit kamu, kami akan berikan secara otomatis. Pastikan seluruh pembayaran kamu setiap bulan tidak melebihi batas pembayaran yang sudah ditentukan.</p>
				</div>

				<button class="accordion">Bagaimana dan di mana saja saya dapat menggunakan cicilan dari <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Kamu dapat berbelanja dengan <strong>EMPATKALI</strong> di <a href="#">partner merchant <strong>EMPATKALI</strong></a>. Kamu hanya perlu memilih metode pembayaran <strong>EMPATKALI</strong> di halaman pembayaran di website merchant.</p>
					<p>Setelah itu masukkan nomor ponsel terdaftar dan kode pembayaran yang terdapat dalam aplikasi untuk mengkonfirmasi transaksi kamu. Kode pembayaran tersebut akan berlaku setiap 30 detik sekali.</p>
					<p>Kami selalu menambahkan merchant baru, jadi jangan lupa untuk selalu mengunjungi website kami untuk melihat update merchant yang baru bergabung.</p>
				</div>

				<button class="accordion">Dimana saya bisa melihat daftar merchant <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Untuk melihat daftar merchant - merchat yang sudah bekerja sama dengan kami, kamu bisa membuka aplikasi kamu dan di beranda akan muncul daftar store yang sudah bekerja sama dengan kami atau kamu bisa <a href="#">Klik Disini</a> </p>
				</div>

				<button class="accordion">Share &amp; Earn</button>
				<div class="panel">
					<p>Ajak temanmu pakai <strong>EMPATKALI</strong> dan kamu akan dapat potongan cicilan sebesar <strong>Rp 25.000</strong> untuk beli produk apapun yang kamu inginkan di semua <em>partner merchant</em> kami. Tapi belum selesai nih.</p>

					<p>Teman kamu yang baru gabung tersebut juga dapat potongan dengan jumlah yang sama!</p>

					<p>Untuk lebih detailnya, simak poin-poin dibawah:</p>

					<p><strong>Ketentuannya Gimana?</strong></p>
					<ul>
					  <li>Berlaku bagi pengguna lama maupun pengguna baru.</li>
					  <li>Setiap yang mengajak dan yang diajak akan dapat voucher sebesar Rp <strong>25.000</strong>.</li>
					  <li>Satu voucher hanya dapat digunakan untuk satu transaksi.</li>
					  <li>Voucher berlaku selama 1 bulan setelah kamu memperolehnya.</li>
					  <li>Reward bersifat mutlak dan tidak dapat diganggu gugat.</li>
					  <li>Reward tidak dapat di uangkan atau di gabung dengan promo lainnya</li>
					  <li><strong>EMPATKALI</strong> berhak melakukan tindakan yang diperlukan bila di duga ada kecurangan dan penyalahgunaan</li>
					  <li>Dengan mengikuti ketentuan ini, kamu dianggap mengerti dan menyetujui syarat dan ketentuan yang berlaku</li>
					</ul>


					<p><strong>Saya Tertarik Nih, Gimana Cara Mulainya?</strong></p>
					<ul>
					  <li>Buka aplikasi <strong>EMPATKALI</strong> dan temukan kode voucher referral kamu pada halaman <strong>Profile</strong>.</li>
					  <li>Ajak teman-temanmu yang belum cobain <strong>EMPATKALI</strong> buat pakai kode voucher referralmu untuk dapetin potongan cicilan senilai <strong>Rp 25.000</strong></li>
					  <li><strong>Setiap</strong> teman yang berhasil diajak, kamu akan dapat potongan cicilan sebesar Rp 25.000</li>
					  <li>Pilih transaksi yang ada di <strong>riwayat transaksii</strong> dan gunakan voucher tersebut dengan menyalin kode voucher di halaman voucher ke transaksi yang kamu inginkan.  Voucher akan otomatis terpakai saat kamu membayar cicilan ke-4 pada tiap transaksi.</li>
					</ul>

					<p>Kapan lagi bisa happy bareng dengan cara segampang ini? Langsung aja ajak temanmu pakai EMPATKALI sekarang juga dan nikmati potongan harganya!</p>
				</div>
			</div>

			<div id="faqAkun" class="tabcontent">
				<button class="accordion py-2">Mengapa saya tidak bisa log in?</button>
				<div class="panel">
					<p>Jika kamu tidak dapat login ke akun <strong>EMPATKALI</strong>, ada beberapa kemungkinan yang dapat menjadi penyebabnya, seperti:</p>

					1. Kode OTP tidak diterima<br>
					2. Kode OTP yang dimasukkan salah<br>
					3. Email belum terverifikasi
				</div>

				<button class="accordion">Kenapa saya tidak terima kode OTP?</button>
				<div class="panel">
					<p>Kode OTP merupakan password dinamis yang terdiri dari 6 digit angka unik yang akan dikirim ke nomor handphone yang tercantum pada akun <strong>EMPATKALI</strong> kamu. Kode OTP berfungsi sebagai validasi dan mencegah adanya tindakan penyalahgunaan akun.</p>

					<p>Kamu tidak akan menerima kode OTP apabila nomor telepon yang tercantum pada akun sudah tidak digunakan atau sudah tidak aktif. Untuk itu kamu dapat pastikan bahwa nomor telepon yang terdaftar pada akun kamu sudah sesuai dengan yang digunakan saat ini. Jika nomor yang digunakan pada akun kamu saat ini masih aktif akan tetapi tidak menerima kode OTP, silakan klik Hubungi Kami di bawah ini.</p>
				</div>
				<button class="accordion">Kenapa verifikasi saya selalu gagal?</button>
				<div class="panel">
					<p>Proses verifikasi yang gagal dapat terjadi dikarenakan hal berikut:</p>

					1. Identitas sudah pernah digunakan<br>
					2. Foto yang kamu unggah tidak jelas<br>
					3. Wajah di foto KTP berbeda dengan wajah di foto diri kamu dengan KTP (selfie).<br>

					<p>Kamu dapat mencoba untuk melakukan verifikasi ulang melalui aplikasi <strong>EMPATKALI</strong></p>

					<p>Pastikan bahwa kartu identitas kamu belum pernah digunakan untuk melakukan registrasi sebelumnya. Pastikan hasil foto KTP atau foto diri dengan KTP yang diunggah dapat terlihat jelas agar sistem dapat membaca informasi yang terdapat di KTP kamu.</p>

					<p>Pastikan foto diri kamu dengan foto KTP sama, gunakan KTP kamu bukan menggunakan KTP orang lain. Jika tetap gagal kamu dapat menghubungi Customer Service <strong>EMPATKALI</strong> untuk bantuan lebih lanjut.</p>
				</div>

				<button class="accordion">Kenapa pengajuan aplikasi saya di tolak?</button>
				<div class="panel">
					<p>Untuk pengajuan yang ditolak sepenuhnya berdasarkan keputusan dari pihak analis kami. Jika data atau dokumen yang diberikan tidak sesuai dengan syarat dan ketentuan yang ada di <strong>EMPATKALI</strong> maka pengajuan kamu akan ditolak.</p>
				</div>

				<button class="accordion">Setelah aplikasi di tolak, berapa lama saya bisa mengajukan ulang?</button>
				<div class="panel">
					<p>Mohon maaf untuk pengajuan yang sudah di tolak secara sistem, maka tidak dapat di ajukan kembali</p>
				</div>

				<button class="accordion">Bagaimana saya melakukan pengecekkan sisa limit dan tanggal jatuh tempo pembayaran saya?</button>
				<div class="panel">
					<p>Untuk melakukan pengecekkan sisa limit, kamu hanya perlu membuka aplikasi <strong>EMPATKALI</strong> dan sisa limit kamu akan muncul di halaman utama aplikasi.</p>
				</div>

				<button class="accordion">Bagaimana saya melakukan pengecekkan riwayat transaksi saya ?</button>
				<div class="panel">
					<p>Untuk melakukan pengecekkan transaksi yang sedang berjalan atau histori transaksi, kamu hanya perlu membuka aplikasi <strong>EMPATKALI</strong> dan dapat dilihat pada pilihan menu "Transaksi". Seluruh transaksi kamu baik yang masih berjalan ataupun yang sudah selesai bisa kamu check di sana.</p>
				</div>

				<button class="accordion">Bagaimana cara membayar tagihan <strong>EMPATKALI</strong> saya?</button>
				<div class="panel">
					<p>Kamu bisa membayar tagihan melalui Virtual Account yang tertera pada palikasi atau email penagihan. Pembayaran melalui Virtual Account ini dapat dilakukan sesuai dengan Bank yang kamu pilih.<br><br>
					                     
					Pembayaran Tagihan:<br><br>
					                     
					Buka aplikasi <strong>EMPATKALI</strong><br>
					Klik tab Transaksi<br>
					Pilih Transaksi yang ingin dibayar<br>
					Klik Bayar<br>
					Ikuti petunjuk bayar Virtual Account yang tertera</p>
				</div>

				<button class="accordion">Bagaimana cara menghapus atau menambahkan kartu di akun saya ?</button>
				<div class="panel">
					<p>Untuk menambahkan kartu atau melakukan pergantian kartu kamu, kamu hanya perlu membuka aplikasi <strong>EMPATKALI</strong> dan klik "Pengaturan" dan pilih menu "Metode Pembayaran. Setelah itu kamu bisa klik tanda "+" dibagian kanan atas, dan silakan isi kartu baru yang akan kamu gunakan.</p>
				</div>

				<button class="accordion">Bagaimana cara menutup akun saya?</button>
				<div class="panel">
					<p>Jika kamu ingin menutup akun <strong>EMPATKALI</strong> milikmu, silakan hubungi kami. Akunmu tidak dapat ditutup sampai kamu sudah melunasi setiap saldo pinjaman <strong>EMPATKALI</strong> secara penuh.</p>
				</div>

				<button class="accordion">Merubah Email</button>
				<div class="panel">
					<p>Untuk mengganti email kamu, ikuti langkah-langkah berikut:</p>
					<ul>
					<li>Buka aplikasi EmpatKali</li>
					<li>Pilih <strong>Profile</strong> pada menu bar di bagian bawah</li>
					<li>Pilih <strong>Account Settings</strong></li>
					<li>Pilih <strong>Ganti Email</strong></li>
					<li>Masukkan alamat email yang ingin kamu daftarkan beserta nomor KTP kamu</li>
					<li>Sentuh <strong>tanda centang</strong> di bagian bawah untuk lanjut</li>
					<li>Kode OTP akan dikirimkan melalui SMS</li>
					<li>Masukan kode yang diterima dan <strong>Submit</strong></li>
					<li>Email kamu sukses didaftarkan.</li>
					<li>Secara otomatis kamu akan kembali ke laman beranda aplikasi EmpatKali.</li>
					</ul>
				</div>

				<button class="accordion">Merubah Nomor Handphone</button>
				<div class="panel">
					<p>Pastikan kamu menghapus cache aplikasi EmpatKali terlebih dahulu agar proses penggantian nomer HP kamu berjalan lancar. Berikut langkah-langkahnya:</p>
					<ul>
					<li>Masuk ke <strong>pengaturan/settings</strong> pada smartphone anda</li>
					<li>Pilih menu <strong>aplikasi/apps</strong></li>
					<li>Cari aplikasi <strong>EmpatKali</strong> dan sentuh untuk melihat opsi lanjutan</li>
					<li>Cari <strong>Storage/Memory/Data</strong></li>
					<li>Pilih <strong>Clear/Hapus Cache</strong></li>
					<li>Sukses</li>
					</ul>

					<p>Sekarang buka aplikasi EmpatKali dan ikuti langkah-langkah berikut untuk mengganti nomer HP kamu:</p>
					<ul>
					<li>Pilih <strong>Profile</strong> pada menu bar dibagian bawah</li>
					<li>Pilih <strong>Account Settings</strong></li>
					<li>Pilih <strong>Ganti No Handphone</strong></li>
					<li>Masukkan nomer HP yang ingin kamu daftarkan beserta nomor KTP kamu</li>
					<li>Kode OTP akan dikirimkan ke email kamu</li>
					<li>Masukkan kode yang diterima dan <strong>Submit</strong></li>
					<li>Nomor HP sukses didaftarkan.</li>
					<li>Secara otomatis kamu akan kembali ke laman beranda aplikasi EmpatKali.</li>
					</ul>
					<p>Apabila kamu menggunakan <strong>DANA</strong>, kamu akan diarahkan ke laman DANA untuk melakukan <strong>registrasi ulang</strong>. Ikuti prosedur yang disediakan dan setelah sukses, secara otomatis kamu akan diarahkan kembali ke laman beranda aplikasi EmpatKali.</p>
				</div>
			</div>

			<div id="faqPembayaran" class="tabcontent">
				<button class="accordion">Bagaimana cara mendapatkan kode pembayaran?</button>
				<div class="panel">
					<p>Cara mendapatkan kode pembayaran kamu hanya perlu membuka aplikasi Empat Kali dan kamu bisa klik "Kode Pembayaran". Kami akan memberikan kode pembayaran kepada kamu dan bisa kamu gunakan saat ingin melakukan pembayaran di Merchant yang sudah kamu pilih. </p>
				</div>

				<button class="accordion">Apa itu kartu dengan 3D Secure (<img src="<?php echo bloginfo('template_url')?>/assets/images/visa.svg" alt="" class="h-4 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/jcb.svg" alt="" class="h-6 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/mastercard.svg" alt="" class="h-6 inline-block" />)?</button>
				<div class="panel">
					<p>3D Secure ( <img src="<?php echo bloginfo('template_url')?>/assets/images/visa.svg" alt="" class="h-4 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/jcb.svg" alt="" class="h-6 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/mastercard.svg" alt="" class="h-6 inline-block" /> ) adalah fitur keamanan untuk mengotentikasi transaksi online yang dilakukan saat menggunakan Kartu Debit di situs web merchant yang mengaktifkan 3D Secure. Hal ini memberikan lapisan keamanan tambahan dan melindungi pemegang kartu dan pedagang dari transaksi online yang tidak sah.</p>
					<p>“MasterCard SecureCode” dan “Verified by Visa” adalah otentikasi aman 3D yang masing-masing ditenagai oleh MasterCard dan Visa.</p>
					<img src="<?php bloginfo('template_url')?>/assets/images/3d-secured.jpg" class="w-2/3" />
				</div>

				<button class="accordion">Bagaimana saya mengetahui bahwa kartu saya sudah memiliki fasilitas 3D secured ( <img src="<?php echo bloginfo('template_url')?>/assets/images/visa.svg" alt="" class="h-4 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/jcb.svg" alt="" class="h-6 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/mastercard.svg" alt="" class="h-6 inline-block" /> )?</button>
				<div class="panel">
					<p>Kartu debit jenis ini memiliki chip dan tanggal kadaluwarsa, juga logo VISA atau MasterCard sehingga aman untuk digunakan secara online. Sebuah kartu debit murni yang tidak berlogo MasterCard atau VISA dan juga tidak memiliki tanggal kadaluwarsa, tidak dapat digunakan. Kartu jenis tersebut tidak aman untuk digunakan saat melakukan pembelian secara online</p>
					<p>Kartu Debit yang sudah memiliki fasilitas 3D Secured (<img src="<?php echo bloginfo('template_url')?>/assets/images/visa.svg" alt="" class="h-4 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/jcb.svg" alt="" class="h-6 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/mastercard.svg" alt="" class="h-6 inline-block" />) akan miliki ciri - ciri sebagai berikut : </p>
					<ul>
					<li>Memiliki logo Visa/Mastercard,</li>
					<li>Memiliki Chip dan tanggal kadaluwarsa kartu</li>
					<li>Memiliki kode CVV yang letaknya berada di belakang kartu Debit kamu.</li>
					</ul>
				</div>

				<button class="accordion">Mengapa saya harus memberikan informasi kartu dengan 3D Secure?</button>
				<div class="panel">
					<ul>
					<li>Kami menggunakan 3D Secure pada proses pembayaran pertama dari setiap cicilan kamu. Pembayaran pertama tersebut akan langsung dikenakan saat checkout dan pembayaran tersebut akan dapat dilakukan dari kartu debit kamu dengan 3D Secure</li>
					<li>Kami perlu memastikan bahwa kartu yang kamu miliki dapat digunakan berbelanja online. Maka dari itu ditahap awal kami melakukan transaksi senilai Rp 10.000 dari kartu debit kamu, yang dalam 7 hari kerja akan dikembalikan lagi ke kartu debit yang sama.</li>
					<li>Jangan khawatir, kami tidak akan pernah menyimpan data dari kartu yang kamu berikan. 3D Secure menggunakan teknik tokenisasi dari kartu, yang baru dapat digunakan setelah otentifikasi biometric sehingga mempercepat waktu akses kartu dan pertukaran data dengan tetap menjaga keamanan.</li>
					<li>
					3D secure melindungi transaksi online kamu dan juga menghindari terjadinya penyalahgunaan kartu. Berikut kami berikan gambaran proses pembayaran dengan 3D Secure:
					<ul class="use-alpha">
					<li>Pemegang kartu memasukkan informasi kartunya (16 digit nomor kartu, tanggal kadaluwarsa, dll.) pada <strong>EMPATKALI</strong></li>
					<li><strong>EMPATKALI</strong> menghubungi server direktori untuk melihat apakah kartu tersebut dilindungi 3D Secure</li>
					<li>Server direktori merespon dengan sebuah pesan yang mengindikasikan bahwa kartu tersebut telah terdaftar</li>
					<li><strong>EMPATKALI</strong> menggunakan pesan tersebut untuk meneruskan pemegang kartu ke sebuah laman &quot;3D Secure&quot; yang dibuat oleh bank penerbit kartu.</li>
					<li>Pemegang kartu memvalidasi kartu mereka pada laman 3D Secure dengan memasukkan OTP (One Time PIN)/PIN sekali pakai.</li>
					<li>Hasil dari pengesahan tersebut dikembalikan pada <strong>EMPATKALI</strong></li>
					<li><strong>EMPATKALI</strong> mengirimkan informasi kartu dan hasil pengesahan 3D Secure pada bank pengakuisisi</li>
					<li>Bank pengakuisisi kami mengesahkan transaksi tersebut (dengan cara berkomunikasi dengan jaringan bank penerbit)</li>
					<li>Respons (berhasil atau gagal) dikirimkan kembali pada pemegang kartu</li>
					</ul>
					</li>
					</ul>
					<img src="<?php bloginfo('template_url')?>/assets/images/3d-flow.jpg" class="w-2/3" />
				</div>

				<button class="accordion">Bagaimana jika saya terlambat membayar cicilan?</button>
				<div class="panel">
					<p>Kamu akan dikenakan biaya keterlambatan jika pihak <strong>EMPATKALI</strong> tidak menerima cicilan secara penuh pada hari jatuh tempo per periode cicilan kamu. Struktur biaya keterlambatan adalah sebagai berikut:</p>
					<ul>
					<li>Keterlambatan pada pembayaran periode cicilan ke-2 akan dikenakan denda sebesar Rp15.000,-</li>
					<li>Keterlambatan pada pembayaran periode cicilan ke-3 akan diken denda sebesar Rp15.000,-</li>
					<li>Keterlambatan pada pembayaran periode cicilan ke-4 akan dikenakan denda sebesar Rp10.000 per hari hingga 7 hari (sehingga denda pada periode cicilan ke-4 tidak lebih dari Rp70.000,-</li>
					</ul>
					<p>Jika kamu terlambat atau tidak membayar cicilan, maka kami akan membekukan akun kamu (akun tidak dapat digunakan sementara untuk bertransaksi) sampai kamu melunasi cicilan dan biaya keterlambatan yang dikenakan.</p>
				</div>

				<button class="accordion">Kapan pembayaran pertama saya akan dikenakan?</button>
				<div class="panel">
					<p>Kamu akan membayar 25% dari total harga sebagai cicilan pertama pada saat kamu melalukan pembelian dengan <strong>EMPATKALI</strong>. Setiap kali kamu melakukan pembelian menggunakan aplikasi <strong>EMPATKALI</strong>, kami akan mengeluarkan jadwal pembayaran baru. Kamu dapat menemukan seluruh pembelian kamu, juga jumlah pembayaran dan tanggalnya pada aplikasi <strong>EMPATKALI</strong>.</p>
				</div>

				<button class="accordion">Saya sudah melakukan pembayaran tetapi saldo pinjaman saya belum berkurang ?</button>
				<div class="panel">
					<p>Untuk hal tersebut mohon kiranya agar kamu pastikan terlebih dahulu transaksi yang kamu lakukan sudah berhasil atau belum. Setelah sistem kami membaca transaksi pembayaran yang kamu lakukan maka kami akan melakukan pembaharuan saldo pinjaman kamu di aplikasi kami, maksimal 3 hari kerja setelah dana kami terima. Jika transaksi tersebut sudah dinyatakan berhasil namun saldo pinjaman kamu belum berkurang maka kamu bisa mengirimkan bukti pembayaran kamu ke email customer service <strong>EMPATKALI</strong> : <a href="mailto:support@empatkali.co.id"><b>support@empatkali.co.id</b></a></p>
				</div>

				<button class="accordion">Dana saya terdebet 2 kali (atau lebih), bagaimana cara proses pengembaliannnya ?</button>
				<div class="panel">
					<p>Mohon maaf untuk kendala yang terjadi, untuk hal tersebut kami akan melakukan pengecekkan dari sistem kami terlebih dahulu. Jika memang ada kesalahan sistem pada aplikasi kami maka kami akan melakukan pengembalian dana atau reversal paling lambat 2*24 jam</p>
				</div>

				<button class="accordion">Bagaimana jika saya tidak bisa melakukan pembayaran?</button>
				<div class="panel">
					<p>Memahami dan mendukung pelanggan kami adalah inti dari segala yang kami lakukan di <strong>EMPATKALI</strong>. Kami menghargai bahwa keadaan dapat berubah, dan kehidupan dapat menghalangi rencana terbaik yang telah ditetapkan, sehingga sulit untuk membayar cicilan <strong>EMPATKALI</strong> kamu. Kebijakan Kesulitan Membayar dari kami ada untuk membantu pelanggan yang tidak dapat memenuhi pembayaran mereka sesuai dengan jadwal pembayaran <strong>EMPATKALI</strong> mereka. Berdasarkan keadaan individu kami mengizinkan beberapa waktu tambahan untuk melakukan pembayaran dan memastikan tidak ada biaya tambahan yang terjadi. Dukungan kami mencakup dalam berbagai situasi yang termasuk di dalamnya bencana alam, redundansi atau pengangguran baru-baru ini, penyakit mendadak, gangguan hubungan, kekerasan dalam rumah tangga atau keluarga, atau alasan pribadi lainnya yang memengaruhi kemampuan kamu untuk memenuhi kewajiban keuangan kamu.</p>
					<p>Bagaimana saya mengajukan untuk keadaan ini?</p>
					<p>Silakan hubungi kami dengan mengunjungi pusat bantuan sesegera mungkin dan customer service kami akan memberikan kamu bantuan yang dibutuhkan. Kami akan meminta kamu untuk mengisi formulir permohonan yang menguraikan informasi yang kami butuhkan untuk menilai permintaan bantuan kamu.</p>
					<p>Kami menangani semua permohonan ini dengan serius dan akan melakukan segala kemungkinan untuk memastikan bahwa permohonan ditangani dengan cepat. Segala upaya dilakukan untuk memastikan bahwa pengaturan yang tepat dibuat untuk siapa saja yang mengalami kesulitan.</p>
					<p><strong>EMPATKALI</strong> memperlakukan semua permohonan kesulitan membayar sebagai hal yang mendesak dan akan mengkonfirmasi hasil dari permohonan tersebut secara tertulis dalam waktu 21 hari dari tanggal permohonan diterima.</p>
					<p>Kesulitan Membayar tersedia bagi semua pelanggan kami, terlepas dari jumlah yang harus dibayarkan kepada <strong>EMPATKALI</strong>.</p>
					<p>Apa saja jenis perjanjian yang ada?</p>
					<p>Jika permohonan kamu diterima, kamu akan ditawarkan salah satu dari rencana berikut:</p>
					<ul>
					<li>Perpanjangan jangka waktu rencana pembayaran, sehingga kamu dapat melakukan pembayaran kecil dalam waktu yang lebih lama;</li>
					<li>Menunda pembayaran yang jatuh tempo untuk jangka waktu tertentu; dan/atau</li>
					<li>Jika diperlukan, kami akan menghapus biaya keterlambatan</li>
					<li>Kami berkomitmen untuk membantu kamu megatasi kesulitan kamu dengan tetap memenuhi kewajiban kamu kepada <strong>EMPATKALI</strong>. Jadi jika kamu memiliki solusi lain yang masuk akal, kami akan dengan senang hati mempertimbangkannya.</li>
					</ul>
					<p>Bagaimana <strong>EMPATKALI</strong> menilai pengajuan kesulitan pembayaran saya?</p>
					<p>Kami tau kebutuhan setiap orang berbeda-beda, sehingga kami menilai setiap pengajuan berdasarkan kasus per kasus.</p>
					<p>Catatan, jika kamu tidak puas dengan hasil dari permintaan bantuan kesulitan membayar, kamu dapat menghubungi kami di <a href="mailto:support@empatkali.co.id">support@empatkali.co.id</a>  atau di telepon (021) 22772375</p>
					<p>Apakah ada pilihan lain yang tersedia untuk saya?</p>
					<p>Jika kami tidak dapat membantu dengan Kebijakan Kesulitan Membayar kami, ada beberapa pilihan lain yang dapat kamu coba:</p>
					<p>Permintaan pengembalian uang dari merchant. Kami menyarankan untuk menghubungi langsung pihak merchant untuk melihat apakah kamu memenuhi syarat untuk mengembalikan barang dan mendapatkan pengembalian uang (sesuai dengan kebijakan pengembalian mereka). Setelah disetujui, <strong>EMPATKALI</strong> akan segera mengubah atau membatalkan pembayaran kamu.</p>
				</div>

				<button class="accordion">Bisakah saya membayar seluruh sisa cicilan saya di satu waktu?</button>
				<div class="panel">
					<p>Kamu bisa melakukan pelunasan seluruh sisa cicilan kamu tanpa dikenakan biaya apapun dari <strong>EMPATKALI</strong>. Pelunasan seluruh sisa cicilan bisa kamu bayarkan dengan cara klik masing-masing Virtual Account per periode cicilan.</p>
				</div>
			</div>

			<div id="faqCicilan" class="tabcontent">
				<button class="accordion">Apakah saya bisa mendapatkan fasilitas cicilan <strong>EMPATKALI</strong>tanpa Kartu Kredit?</button>
				<div class="panel">
					<p>Bisa, kamu dapat membeli barang di partner merchant <strong>EMPATKALI</strong> dan memilih metode pembayaran menggunakan <strong>EMPATKALI</strong>. Untuk mendapatkan fasilitas cicilan tanpa kartu kredit dari <strong>EMPATKALI</strong> Kamu hanya perlu melakukan registrasi di <strong>EMPATKALI</strong>.</p>
				</div>

				<button class="accordion">Bagaimana cara kerja cicilan di <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p><strong>EMPATKALI</strong> menawarkan pelanggan sebuah rancangan pembayaran bebas bunga sederhana yang memperbolehkan kamu melakukan pembelian hari ini dan membayarnya dalam 4 kali cicilan.</p>
					<p><strong>EMPATKALI</strong> melakukan asesment kredit pada seluruh pengguna baru saat proses registrasi berdasarkan informasi yang kamu berikan dan izinkan untuk kami gunakan. Setelah akun kamu terkonfirmasi dan data kamu terverifikasi, <strong>EMPATKALI</strong> akan menentukan batas cicilan kamu setelah itu kamu dapat segera berbelanja.</p>
					<p>Ketika kamu membeli, kami akan membayarkan pada merchant dengan mengatasnamakan diri kamu dan kami akan memotong pembayaran pertama dari rekening kamu. Pembayaran pertama adalah sebesar 25% dari nilai barang yang dibeli. Ketika melakukan pembelian, kamu akan menerima sebuah kode pembayaran sekali pakai pada ponselmu untuk mengkonfirmasi pembelian pada merchant, dan juga kami akan memotong 25% dari kartu 3D secured (<img src="<?php echo bloginfo('template_url')?>/assets/images/visa.svg" alt="" class="h-4 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/jcb.svg" alt="" class="h-6 inline-block" /> <img src="<?php echo bloginfo('template_url')?>/assets/images/mastercard.svg" alt="" class="h-6 inline-block" />) kamu.</p>
					<p>Sisa 3 kali pembayaran akan dijadwalkan pada aplikasi <strong>EMPATKALI</strong> dan kamu akan menerima notifikasi 24 jam sebelum pembayaran selanjutnya. Kamu juga akan menerima notifikasi berisi waktu jatuh tempo dan akan diminta untuk melakukan pembayaran menggunakan Virtual Account.</p>
				</div>

				<button class="accordion">Berapa tenor cicilan yang diberikan ? </button>
				<div class="panel">
					<p>Kami memberikan kemudahan pembayaran kepada kamu dengan tenor <strong>EMPATKALI</strong> cicilan.</p>
				</div>
			</div>

			<div id="faqTransaksi" class="tabcontent">
				<button class="accordion">Bagaimana cara melakukan transaksi dengan metode pembayaran <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Caranya sangat mudah ! Kamu hanya perlu login di Aplikasi <strong>EMPATKALI</strong> dan pilih merchant untuk melakukan transaksi yang kamu inginkan. Setelah kamu check out kamu pilih metode pembayaranmu dengan <strong>EMPATKALI</strong>.</p>
				</div>

				<button class="accordion">Bagaimana cara membatalkan transaksi online setelah melakukan pemesanan, tapi sebelum menerima barang yang telah dibeli?</button>
				<div class="panel">
					<p>Untuk melakukan pembatalan transaksi adalah tergantung dari kebijakan pembatalan dari merchant yang bersangkutan. Silakan kamu menghubungi merchant e-commerce terkait jika kamu ingin membatalkan transaksi sebelum menerima barang. Jika merchant setuju untuk membatalkan pesanan kamu, batas kredit kamu akan dikembalikan ke akun <strong>EMPATKALI</strong> kamu. Dibutuhkan hingga 7 hari kerja untuk memproses pengembalian dana yang sudah kamu bayarkan.</p>
				</div>

				<button class="accordion">Bagaimana saya mengembalikan barang untuk transaksi yang saya batalkan?</button>
				<div class="panel">
					<p>Untuk proses pengembalian barang dari transaksi yang kamu batalkan, kami sarankan kamu untuk menghubungi ke merchant yang bersangkutan. Karena proses pembatalan transaksi ataupun pengembalian barang dari transaksi yang sudah kamu batalkan tersebut sepenuhnya tergantung dari kebijakan merchant yang bersangkutan.</p>
				</div>

				<button class="accordion">Bagaimana proses pengembalian dana dari transaksi yang saya sudah batalkan di merchant?</button>
				<div class="panel">
					<p><strong>EMPATKALI</strong> hanya akan melakukan pengembalian dana jika merchant menerima barang kamu kembali dan kemudian memproses pengembalian dana. Namun, jika merchant kamu mengeluarkan kredit untuk transaksi yang kamu lakukan, maka kamu masih akan bertanggung jawab untuk membayar kembali pinjaman kamu.</p>
				</div>

				<button class="accordion">Bagaimana cara saya melakukan protes terhadap barang yang di beli dengan <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Perlu kamu ketahui jika <strong>EMPATKALI</strong> merupakan salah satu pilihan untuk metode pembayaran kamu di merchant - merchant yang sudah bekerjasama dengan kami. Jika kamu ingin melakukan protes terhadap barang yang kamu beli, maka silakan kamu menghubungi ke merchant yang bersangkutan.</p>
				</div>

				<button class="accordion">Saya merasa tidak melakukan transaksi</button>
				<div class="panel">
					<p>Transaksi yang kamu lakukan di akun <strong>EMPATKALI</strong> menggunakan kode OTP yang dikirimkan ke nomor handphone yang kamu daftarkan sebelumnya. Kode OTP sifatnya adalah Rahasia, jadi kamu berkewajiban untuk menjaga kerahasiaan OTP yang kami kirimkan. Jika ada transaksi yang tidak kamu lakukan maka kamu tetap memiliki kewajiban membayar lunas transaksi tersebut dan kami tidak bisa membatalkan transaksi tersebut.</p>
				</div>

				<button class="accordion">Saya tidak setuju dengan jumlah pada tagihan saya. Apa yang harus saya lakukan?</button>
				<div class="panel">
					<p>Kamu bisa melakukan pengecekkan ulang transaksi yang sudah kamu lakukan di <strong>EMPATKALI</strong>. Jika kamu masih memiliki kendala untuk tagihan kamu silakan hubungi kami di email : <a href="mailto:support@empatkali.co.id">support@empatkali.co.id</a></p>
				</div>

				<button class="accordion">Berapa biaya yang dikenakan untuk menggunakan <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Kamu hanya akan dikenakan satu kali biaya layanan senilai Rp 10,000 setiap kamu melakukan transaksi pembelian di Empat Kali. Dan biaya ini hanya akan muncul dan dibayarkan saat cicilan pertama. Untuk cicilan selanjutnya kamu tidak akan dikenakan biaya layanan lagi, kamu hanya perlu membayarkan cicilan kamu saja.</p>
				</div>

				<button class="accordion">Berapa persen bunga transaksi cicilan di <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Kami memberikan kemudahan kepada kamu untuk melakukan pembayaran dengan cara dicicil dengan tenor 4 kali cicilan dan bunga 0%</p>
				</div>
			</div>

			<div id="faqMerchant" class="tabcontent">
				<button class="accordion">Bagaimana cara mendaftarkan usaha saya sebagai merchant di <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Silakan hubungi kami atau kamu dapat mengisi formulir di sini dan kami akan segera menghubungi kamu dalam waktu 1x24 jam.</p>
				</div>

				<button class="accordion">Apakah ada kriteria khusus untuk menjadi partner merchant <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Untuk dapat menjadi partner merchant kami tentu sangat mudah. Kamu hanya perlu memiliki Website dengan fasilitas shopping cart untuk berbelanja online.</p>
				</div>

				<button class="accordion">Sistem e-commerce apa yang dapat diintegrasikan oleh <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Kami ingin mendengar lebih banyak tentang bisnis kamu. Klik <a href="#">di sini</a> untuk memberi tahu kami lebih banyak. Setelah kamu memberikan detil bisnis kamu, kami akan menghubungi kamu dalam waktu 1x24 jam.</p>
				</div>

				<button class="accordion">Apa keuntungan menjadi merchant partner di <strong>EMPATKALI</strong>?</button>
				<div class="panel">
					<p>Dengan menjadi merchant partner kami, kamu memiliki beberapa keuntungan diantaranya adalah : </p>
					<ul class="use-num">
					<li>Mengurangi resiko fraud dan delinquant Customer.</li>
					<li>Meningkatkan daya beli pelanggan dengan cara menawarkan keleluasaan untuk melakukan pembayaran nanti,</li>
					<li>Memberikan opsi pembayaran lain dalam bentuk cicilan kepaada pelanggan kamu,</li>
					<li>Meningakatkan konversi penjualan,</li>
					<li>Kurangi Biaya Transaksi, dengan menggunakan <strong>EMPATKALI</strong> kamu dapat mengurangi biaya CoD. Kami menawarkan proses cicilan yang cepat, mengurangi penipuan dan resiko kredit untuk Kamu.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</section>

<?php get_footer(); ?>