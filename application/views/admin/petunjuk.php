<?php
$this->load->view('admin/header');?>
<style type="text/css">
.jumbotron {
    background-image: url(../assets/user_manual/background-jbtron.jpg);
    background-size: 100%;
	color: cadetblue;
}
</style>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
						<div class="jumbotron">
                        <h1>User Manual</h1>
                        <p>Selamat datang di panel administrator aplikasi web profil mykp v1.</p>
                        <p>Petunjuk Penggunan Aplikasi (User Manual) ini dimaksudkan agar fitur-fitur yang disediakan dapat dimanfaatkan secara optimal.</p>
						</div>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
						<hr>
					<h2>Dashboard</h2>
						<p>Saat Anda berhasil masuk ke panel Administrator, maka secara default halaman ini akan ditampilkan kepada Anda. Sebuah halaman bantuan yang berisi petunjuk praktis penggunaan fitur-fitur yang tersedia di aplikasi ini. Anda dapat menggunakan tombol <code><b>Toggle Menu</b></code> & <code><b>CTRL+F</b></code> untuk membantu Anda melakukan pencarian cepat.</p>
                    <h2>Member</h2>
						<p>Adalah menu yang memungkinkan Anda menambahkan anggota sebagai partner dalam mengelola web atau menonaktifkan anggota yang sudah tidak memenuhi kriteria.</p>
						<p>Setiap anggota mempunyai tingkatan (level). Admin merupakan level tertinggi dan memiliki hak akses penuh atas semua fitur yang tersedia di web profil ini.</p>
						<p>Jika level Anda bukan Admin, maka fitur yang dapat digunakan adalah sebagai berikut:</p>
						<img src="../assets/user_manual/member.jpg" alt="hak akses level selain admin" style="padding-bottom:5px;"/>
						<p>Selebihnya tidak ada respon atau akan ditampilkan pesan error jika Anda memaksa ingin menonaktifkan atau menghapus member tertentu.</p>
						<img src="../assets/user_manual/error.png" alt="hak akses level selain admin" style="padding-bottom:5px;"/>
                    <h2>Slider</h2>
						<p>Adalah menu yang memungkinkan Anda mengunggah foto sebagai slider halaman public. Format yang diijikan adalah <code>gif, jpg, png</code>. Dimensi yang direkomendasikan adalah <code>1900x1080</code>. Size yang direkomendasikan adalah <code>< 4MB</code>.</p>
						<ul>
						<li><img src="../assets/user_manual/slider_choosefile.png"/> <b>Tombol Choose Files </b>, digunakan untuk memilih gambar dari komputer Anda. Pastikan format, dimensi dan size gambar memenuhi kriteria yang direkomendasikan.</li>
						<li><img src="../assets/user_manual/slider_field.png"/> <b>Field Keterangan Gambar </b>, digunakan untuk memberikan keterangan / caption / kata-kata mutiara yang dapat menarik perhatikan atau dapat berkesan di hati pengunjung. Pastikan panjang karakter <code>< 100</code>, guna mendapatkan tampilan proposional dan tidak mengotori gambar.</li>
						<li><a class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> <b>Tombol Edit</b>, digunakan untuk mengedit keterangan gambar. Tidak berlaku bagi gambar, jika Anda ingin mengganti gambar, maka Anda dapat menghapus gambar tersebut dan mengunggah gambar baru sebagai pengganti, sertakan juga keterangan gambar tersebut. <div class="alert alert-info"><b> INFO ! </b> - Ini merupakan kebijakan developer berkaitan dengan dependensi database terhadap file.</div></li> 
						<li><a class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a> <b>Tombol Delete</b>, digunakan untuk menghapus gambar beserta keterangannya.</li>
						</ul>
					<h2>Artikel</h2>
						<p>Adalah menu yang memungkinkan Anda menulis artikel about, paket, blog, maupun alamat.</p>
						<h4>Penggunaan Label :</h4>
						<ul>
						<li><span class="label label-primary">about</span> Digunakan khusus untuk halaman about. Jumlah artikel <b>hanya diperbolehkan</b> <code>1</code></li>
						<li><span class="label label-success">paket</span> Digunakan khusus untuk halaman paket. Jumlah artikel <b>diperbolehkan</b> <code>> 1</code></li>
						<li><span class="label label-danger">address</span> Digunakan khusus untuk menulis alamat di halaman contact. Jumlah artikel <b>hanya diperbolehkan</b> <code>1</code></li>
						<li>Selain ketiga label diatas, Anda dapat secara bebas menggunakan label lain untuk artikel di halaman blog. Jumlah artikel <b>diperbolehkan</b> <code>> 1</code></li>
						</ul>
						<h4>Insert Image :</h4>
						<ul>
						<li>Maximum file size 1.5MB <b>(via komputer local / media penyimpanan local)</b></li>
						<li>Tidak terbatas <b>(via image URL)</b></li>
						</ul>
						<h4>Kelola Artikel :</h4>
						<p>Scroll ke bawah untuk melihat daftar artikel yang telah dibuat !</p>
						<ul>
						<li><img src="../assets/user_manual/search-article.png"/> <b>Search box</b>, digunakan untuk mensortir artikel, dengan cara memasukkan keyword yang dikehendaki sebagai pendekatan.</li>
						<li style="padding:2px;"><a class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a> <b>Tombol Lihat </b>, digunakan untuk meninjau / melihat artikel secara detail layaknya tampilan public.</li>
						<li style="padding:2px;"><a class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> <b>Tombol Edit</b>, digunakan untuk mengedit artikel, berlaku untuk judul, label, dan isi/konten.</li>
						<li style="padding:2px;"><a class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a> <b>Tombol Delete</b>, digunakan untuk menghapus artikel.</li>
						<li><img src="../assets/user_manual/top.png"/> <b>Tombol Top</b>, digunakan untuk kembali ke bilah atas bagian form artikel, jika Anda menghendaki menambah artikel.</li>
						</ul>
					<h2>Harga Paket</h2>
						<p>Adalah menu yang memungkinkan Anda mengatur daftar paket beserta harganya.</p>
						<h4>Ketentuan :</h4>
						<ul>
						<li><b>Nama Paket</b>, direkomendasikan penamaan tidak lebih dari 2(dua) kata.</li>
						<li><b>Harga Paket</b>, hanya boleh memasukan ANGKA, <span style="background-color:red; color:white;"><b>| DILARANG! |</b></span> menggunakan <code>titik(.)</code> atau <code>koma(,)</code> sebagai tanda pemisah angka.</li>
						<li><b>ID Paket</b>, hanya disediakan 10 ID, artinya jumlah paket hanya dibatasi max 10. ID yang sudah digunakan tidak dapat digunakan kembali, dengan kata lain Anda tidak dapat memilih ID yang sama untuk paket lain.</li>
						</ul>
						<h4>Kelola Paket :</h4>
						<ul>
						<li style="padding:2px;"><a class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> <b>Tombol Edit</b>, digunakan untuk mengedit paket, berlaku untuk Nama dan Harga paket.</li>
						<li style="padding:2px;"><a class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a> <b>Tombol Delete</b>, digunakan untuk menghapus paket.</li>
						</ul>
					<h2>Moderasi</h2>
						<p>Adalah menu yang memungkinkan Anda mengontrol transaksi booking, mana yang layak dan tidak layak ditindaklanjuti.</p>
						<p>Transaksi booking yang baru masuk akan berstatus <a class="btn btn-warning btn-sm glyphicon glyphicon-warning-sign"> Pending</a>, maka yang perlu Anda lakukan adalah :</p>
						<ol>
						<li style="padding:2px;"><a class="btn btn-info btn-sm"><i class="glyphicon glyphicon-print"></i></a> <b>Tombol Print</b>, gunakan tombol ini untuk mencetak invoice dan mengirimkannya kepada pihak terkait via Whatapps, email, atau media lain yang memungkinkan.</li>
						<li style="padding:2px;"><a class="btn btn-warning btn-sm glyphicon glyphicon-warning-sign"> Pending</a> tekan tombol ini sehingga menjadi <a class="btn btn-success btn-sm glyphicon glyphicon-ok"> Approved</a>, jika pihak terkait tuntas melakukan pembayaran, maka layak dimasukkan ke Agenda.</li> 
						<li style="padding:2px;"><a class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a> <b>Tombol Delete</b>, gunakan tombol ini jika pihak terkait tidak tuntas melakukan pembayaran.</li>
						</ol>
					<h2>Inbox</h2>
						<p>Adalah menu yang memungkinkan Anda melihat pesan masuk dari tamu. Anda juga dapat mempelajari pola interaksi mereka dari sini, menentukan jawaban yang tepat untuk FAQ, atau bisa juga sebagai list building untuk kepentingan marketing. Selain itu, Anda juga dapat membalas pesan mereka dengan cara klik alamat email mereka.</p>
						<p><a class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a> <b>Tombol Delete</b>, gunakan tombol ini untuk menghapus pesan masuk yang tidak relevan.</p>
				<h2>Logout</h2>
						<p>Adalah menu yang memungkinkan Anda keluar dari panel Administrator. Pastikan Anda selalu logout, jika aktifitas pengelolaan web dirasa cukup.</p>
					</div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

	<hr>
	<center><div class="footer_contents" style="padding-left: 200px;">Copyright &copy; Your Website 2018</div></center><hr>
</body>
</html>