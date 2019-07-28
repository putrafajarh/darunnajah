<?php
include_once "header.php";

$requiredOrDisabled = 'required';
$isDisabled = '';
if ((@$_GET["success"] == "true") ) {
    $requiredOrDisabled = 'disabled';
    $isDisabled = 'disabled';
}
?>

<div class="container-fluid header-mobile d-block d-md-none">
    <div class="top">
        <div class="atas">
            <div class="text-center">
                <img class="logo" src="https://darunnajah.inasurvey.id/images/smki-darun-najah.png" width="100" height="100" alt="Logo SMKI Darunnajah">
                <h1>Pesantren <br>BEBAS BIAYA PENDIDIKAN!</h1>
            </div>
        </div>
        <div class="gambar">
            <img src="https://darunnajah.inasurvey.id/images/darun-najah-santriwati.jpg" alt="">
        </div>
    </div>
    <div class="teks">
        Ayo menyongsong masa depan cerah bersama Darun Najah!
    </div>
    <div class="formulir">
        <form method="POST" action="send-email-api.php">
            <h5>HUBUNGI KAMI UNTUK INFORMASI LENGKAP</h5>
            <div class="form-group">
                <label for="inputNama">Nama*</label>
                <input type="text" name="nama" class="form-control" id="inputNama" aria-describedby="namaHelp" placeholder="Nama" <?php echo $requiredOrDisabled; ?>>
            </div>
            <div class="form-group">
                <label for="inputNoHP">No HP*</label>
                <input type="text" name="hp" class="form-control" id="inputNoHP" aria-describedby="hpHelp" placeholder="No HP" <?php echo $requiredOrDisabled; ?>>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                    placeholder="Email" <?php echo $isDisabled; ?>>
            </div>
            <button type="submit" class="btn btn-danger btn-block" id="kirim" <?php echo $isDisabled; ?>>KIRIM</button>
        </form>
    </div>
</div>

<div class="container-fluid header d-none d-md-block">
    <div class="container pt-5">
        <div class="col-xs-12 col-md-7 col-lg-6">
            <div class="text-center">
                <img class="logo" src="https://darunnajah.inasurvey.id/images/smki-darun-najah.png" width="100" height="100">
            </div>
            <h1>Pesantren <br>BEBAS BIAYA MONDOK!</h1>
            <p class="teks">
                Ayo menyongsong masa depan cerah bersama Darun Najah!
            </p>
            <div class="formulir">
                <form method="POST" action="send-email-api.php">
                    <h5>HUBUNGI KAMI UNTUK INFORMASI LENGKAP</h5>
                    <div class="form-group">
                        <label for="inputNama">Nama*</label>
                        <input type="text" name="nama" class="form-control" id="inputNama" aria-describedby="namaHelp"
                            placeholder="Nama" <?php echo $requiredOrDisabled; ?>>
                    </div>
                    <div class="form-group">
                        <label for="inputNoHP">No HP*</label>
                        <input type="text" name="hp" class="form-control" id="inputNoHP" aria-describedby="hpHelp"
                            placeholder="No HP" <?php echo $requiredOrDisabled; ?>>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                            placeholder="Email" <?php echo $isDisabled; ?>>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" id="kirim" <?php echo $isDisabled; ?>>KIRIM</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background: rgba(5,68,148,1); color: white;">
    <div class="container pt-5 pb-5">
        <h2 class="text-center">Mengapa Pesantren Darun Najah?</h2>
        <ul>
            <li>
                <strong>Gratis SPP bulanan</strong>. Kami tidak memungut uang SPP sehingga tidak memberatkan orang tua santri.
            </li>
            <li>
                <strong>Biaya pendaftaran ringan</strong>. Dengan hanya Rp.1.000.000,- dan bisa diangsur 4 kali dalam setahun.
            </li>
            <li>
                <strong>Biaya makan Rp. 150.000,- per bulan</strong>. Bagi pendaftar yang kurang mampu, dibebaskan dari biaya makan hanya dengan menyertakan surat keterangan tidak mampu dari Desa asal.
            </li>
        </ul>
        <p>Darun Najah adalah Sekolah Menengah Kejuruan Islam dan Pondok Pesantren yang memiliki visi untuk menjadi Sekolah Menengah Kejuruan yang unggul dan beroriantasi masa depan, terdidik untuk mandiri berdasarkan imtaq dan <em>akhlakul karimah</em>.
        </p>
    </div>
</div>

<div class="container-fluid" style="background: rgba(248,248,248,1);">
    <div class="container pt-5 pb-5">
        <h2 class="text-center"><span class="font-italic">Jurusan Pendidikan</span></h2>
        <p class="text-center">
            Dengan biaya terjangkau Kamu mendapatkan fasilitas yang baik, dan bebas memilih jurusan yang diinginkan. Pondok Pesantren Darun Najah juga memiliki tenaga pengajar terampil dan siap membimbing para santri.
        </p>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card metode">
                    <img src="https://darunnajah.inasurvey.id/images/teknik-perikanan.png"
                        class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Perikanan</h5>
                        <p class="card-text">Santri belajar bagaimana mengolah hasil budidaya dari pasca panen hingga menghasilkan produk perikanan berkualitas tinggi.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card metode">
                    <img src="https://d9hhrg4mnvzow.cloudfront.net/web.pintaria.com/upj-facebook/a4ab81eb-icon-terjangkau_03h03h03h03h000000001.png"
                        class="card-img-top img-fluid" alt="Kampus Berkualitas">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Otomotif</h5>
                        <p class="card-text">Santri belajar bagaimana merancang, membuat dan mengembangkan alat transportasi yang menggunakan mesin.</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="card metode">
                    <img src="https://d9hhrg4mnvzow.cloudfront.net/web.pintaria.com/upj-facebook/05078cb9-icon-fleksibel_03h03h03h03h000000001.png"
                        class="card-img-top img-fluid" alt="Kampus Berkualitas">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Las</h5>
                        <p class="card-text">Santri belajar bagaimana cara untuk mengelas yang baik, dan teori tentang apa saja bahan untuk proses pengelasan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="container pt-5 pb-5">
        <h2 class="text-center">Pimpinan Yayasan Abdussalam</h2>
        <p class="text-center">Yayasan Abdussalam di pimpin oleh Gus As'ad Mas'ud S.Hum yang dimana beliau adalah seorang akedemisi dan praktisi islam yang pernah menempuh pendidikan islam sejak dari usia dini dan sudah menyelesaikan pendidikan terakhirnya dengan gelar S1 Bahasa Arab, Fakultas Humaniora di UIN Malang.</p>
        <div class="testimoni">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="rounded-circle img-fluid" src="https://darunnajah.inasurvey.id/images/gus-asad-masud-darun-najah.jpg" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-9">
                    <div class="teks">
                        <p class="font-italic text-center">“SMKI Darun Najah adalah Sekolah Menengah Kejuruan Islam Dibawah naungan Yayasan Abdussalam  yang memiliki Visi untuk menjadi Sekolah Menengah Kejuruan yang unggul dan beroriantasi islam, Mandiri, Berdasarkan imtaq dan akhlakul karimah”</p>
                    </div>
                    <div class="nama">
                        <h5 style="margin: 15px 0 0 0;">Gus As'ad Mas'ud S.Hum</h5>
                        <p>Penanggung Jawab Pondok Pesantren Darun Najah, <span class="font-italic">Tuban, Jawa Timur</span>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background: rgba(248,248,248,1);">
    <div class="container pt-5 pb-5">
        <div class="d-flex justify-content-center">
            <h2 style="max-width: 600px;"><span class="font-italic">Ekstra Kurikuler</span></h2>
        </div>

        <div class="program">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img src="https://darunnajah.inasurvey.id/images/ekskul-kitab-kuning-darun-najah.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Pengajian Kitab Kuning</h5>
                            <p class="card-text">Kitab kuning merujuk pada kitab tradisional yang berisi pelajaran Agama Islam. Mulai dari fiqih, aqidah, akhlak, tasawuf, tata bahasa arab, hadist hingga ilmu sosial dan kemasyarakatan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img src="https://darunnajah.inasurvey.id/images/ekskul-tahfidzul-quran-darun-najah.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tahfidzul Quran</h5>
                            <p class="card-text">Metode dalam menghafal Qur’an dengan baik dan benar. Para santri juga diharapkan dapat mengamalkan dan membudayakan nilai Al-Qur’an dalam sikap kehidupan. </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img src="https://darunnajah.inasurvey.id/images/ekskul-pramuka-darun-najah.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pramuka</h5>
                            <p class="card-text">Mendidik para santri dengan prinsip dasar dan metode kepramukaan yang disesuaikan dengan kepentingan dan pengembangan bangsa, hingga membangun kepribadian santri.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img src="https://darunnajah.inasurvey.id/images/ekskul-olah-raga-darun-najah.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Olah Raga</h5>
                            <p class="card-text">Ekskul olahraga seperti: Futsal, sepakbola, bulutangkis dan atletik. Disini para santri dapat mengambangakan diri melalui olahraga yang mereka sukai.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img src="https://darunnajah.inasurvey.id/images/ekskul-seni-budaya-darun-najah.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Seni Budaya</h5>
                            <p class="card-text">Berbagai macam ekskul seni budaya seperti: Seni musik, gambus dan hadroh. Para santri dapat menyalurkan hobi bermusiknya melalui ekskul ini.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img src="https://darunnajah.inasurvey.id/images/ekskul-enterpreneur-ukm-darun-najah.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enterpreneur UKM</h5>
                            <p class="card-text">Sejak usia dini para santri akan dikenalkan pada tahapan serta cara untuk memulai berwirausaha yang baik secara teori maupun praktek di dunia bisnis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background: rgba(123,123,128,1); color: white;">
    <div class="container pt-5 pb-5">
        <h2 class="text-center">Tentang SMK Islam Darun Najah</h2>
        <div class="tentang">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <img src="https://darunnajah.inasurvey.id/images/yayasan-abdussalam.png" width="300" height="200"
                        class="img-fluid" alt="">
                    <p class="img-teks text-center">Modern, Terjangkau, Berasas Islam</p>
                </div>
                <div class="col-xs-12 col-md-8">
                    <p>Sekolah Menengah Kejuruan Islam Darun Najah adalah sekolah menengah swasta di bawah naungan yayasan abdussalam yang di pimpinan Gus As'ad Mas'ud S.Hum yang berlokasi di Tuban, Jawa Timur.</p>
                    
                    <p>Kami memiliki tiga bidang kejuruan yaitu Teknik Perikanan, Teknik Otomotif dan Teknik Las. Dengan demikian kami optimis dapat mencetak lulusan terbaik dengan tetap berorientasi imtaq dan akhlakul karimah.</p>
                    <p>Beberapa Sertifikat dan Perizinan:</p>
                    <div class="row">
                        <div class="col-xs-12">
                            <ul>
                                <li>Sertifikat NPSN dari KemenDikBud</li>
                                <li>Sertifikasi Lembaga Sekolah</li>
                                <li>Piagam Izin Operasional</li>
                            </ul>
                        </div>
                        <div class="col-xs-12">
                            <ul>
                                <li>Piagam Terdaftar dari DepAg</li>
                                <li>Pengesahan Pendirian Badan Hukum</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background: rgba(50,50,51,1); color: white;">
    <div class="container pt-5 pb-5 daftar d-flex justify-content-center">
        <div class="text-center">
            <div style="font-size: 32px;">
                <p style="margin-bottom: 2px;">Daftar sekarang, Kuota Terbatas. </p>
                <p><strong>(GRATIS BIAYA PENDIDIKAN)</strong></p>
            </div>
            <p style="font-size: 28px; color: rgb(255, 204, 0); margin-bottom: 25px;">Penutupan Pendaftaran 30 Juli 2019</p>
            <div class="formulir">
                <form method="POST" action="send-email-api.php">
                    <h5>HUBUNGI KAMI UNTUK INFORMASI LENGKAP</h5>
                    <div class="form-group">
                        <label for="inputNama">Nama*</label>
                        <input type="text" name="nama" class="form-control" id="inputNama" aria-describedby="namaHelp"
                            placeholder="Nama" <?php echo $requiredOrDisabled; ?>>
                    </div>
                    <div class="form-group">
                        <label for="inputNoHP">No HP*</label>
                        <input type="text" name="hp" class="form-control" id="inputNoHP" aria-describedby="hpHelp"
                            placeholder="No HP" <?php echo $requiredOrDisabled; ?>>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"
                            placeholder="Email" <?php echo $isDisabled; ?>>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" id="kirim" <?php echo $isDisabled; ?>>KIRIM</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background: rgba(42,42,43,1); color: white;">
    <div class="container footer pt-4 pb-4">
        <div class="text-center">COPYRIGHT &copy; 2019 DARUN NAJAH. ALL RIGHTS RESERVED.</div>
    </div>
</div>

<?php
include_once "footer.php";
?>