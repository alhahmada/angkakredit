if($a11=='Magister'){
$ak=150;
}elseif($a11=='Doktor'){
$ak=200;
}
$this->berkas->constraint('a1'.$i, $id_pengajuan, $ak);



if($b41=='Skripsi' && $b42=='Utama'){
$ak=1*$b43;
}elseif($b41=='Skripsi' && $b42=='Pendamping'){
$ak=0.5*$b43;
}elseif($b41=='Laporan Akhir' && $b42=='Utama'){
$ak=1*$b43;
}elseif($b41=='Laporan Akhir' && $b42=='Pendamping'){
$ak=0.5*$b43;
}elseif($b41=='Thesis' && $b42=='Utama'){
$ak=3*$b43;
}elseif($b41=='Thesis' && $b42=='Pendamping'){
$ak=3*$b43;
}elseif($b41=='Disertasi' && $b42=='Utama'){
$ak=8*$b43;
}elseif($b41=='Disertasi' && $b42=='Pendamping'){
$ak=6*$b43;
}
$this->berkas->constraint('b4'.$i, $id_pengajuan, $ak);



if($b51=='Ketua Penguji'){
$ak=1*$b53;
}elseif($b51=='Anggota Penguji'){
$ak=0.5*$b53;
}
$this->berkas->constraint('b5'.$i, $id_pengajuan, $ak);


if($b81=='Buku Ajar'){
$ak=20;
}elseif($b81=='Diklat/Modul'){
$ak=5;
}
$this->berkas->constraint('b8'.$i, $id_pengajuan, $ak);


if($b101=='Direktur'){
$ak=5;
}elseif($b101=='Wakil Direktur'){
$ak=4;
}elseif($b101=='Kepala Program Studi' || $b101=='Sekretaris Program Studi' || $b101=='Kepala Bagian' ){
$ak=3;
}
$this->berkas->constraint('b10'.$i, $id_pengajuan, $ak);

if($b111=='Bimbing Pencangkokan'){
$ak=2;
}elseif($b111=='Bimbing Reguler'){
$ak=1;
}
$this->berkas->constraint('b11'.$i, $id_pengajuan, $ak);

if($b121=='Datasering'){
$ak=5;
}elseif($b121=='Pencangkokan'){
$ak=4;
}
$this->berkas->constraint('b12'.$i, $id_pengajuan, $ak);

if($b131=='>960 jam'){
$ak=15;
}elseif($b131=='641-960 jam'){
$ak=9;
}elseif($b131=='481-640 jam'){
$ak=6;
}elseif($b131=='161-480 jam'){
$ak=3;
}elseif($b131=='81-160 jam'){
$ak=2;
}elseif($b131=='31-80 jam'){
$ak=1;
}elseif($b131=='10-30 jam'){
$ak=0.5;
}
$this->berkas->constraint('b13'.$i, $id_pengajuan, $ak);

if($c11=='Buku Sendiri' && $c13=='Buku Referensi'){
$ak=40;
}elseif($c11=='Buku Sendiri' && $c13=='Monograf'){
$ak=20;
}elseif($c11=='Buku Berbagai Penulis' && $c13=='Internasional'){
$ak=15;
}elseif($c11=='Buku Berbagai Penulis' && $c13=='Nasional'){
$ak=10;
}elseif($c11=='Jurnal' && $c13=='Internasional Bereputasi dan Berfaktor Dampak'){
$ak=40;
}elseif($c11=='Jurnal' && $c13=='Internasional Bereputasi'){
$ak=30;
}elseif($c11=='Jurnal' && $c13=='Internasional Tidak Bereputasi'){
$ak=20;
}elseif($c11=='Jurnal' && $c13=='Jurnal Nasional Terakreditasi Dikti'){
$ak=25;
}elseif($c11=='Jurnal' && $c13=='Jurnal Nasional Terakreditasi Dikti Peringkat 1 dan 2'){
$ak=25;
}elseif($c11=='Jurnal' && $c13=='Jurnal Bahasa resmi PBB terindeks pada Basis Data yang diakui Dikti'){
$ak=20;
}elseif($c11=='Jurnal' && $c13=='Jurnal Nasional Terakreditasi Peringkat 3 dan 4'){
$ak=20;
}elseif($c11=='Jurnal' && $c13=='Jurnal Nasional berbahasa Indonesia terindeks yang diakui Dikti (peringkat 5 dan 6)'){
$ak=15;
}elseif($c11=='Jurnal' && $c13=='Jurnal Nasional'){
$ak=10;
}elseif($c11=='Jurnal' && $c13=='Jurnal Ilmiah Bahasa Resmi PBB yang tidak memenuhi syarat Jurnal Internasional'){
$ak=10;
}
$this->berkas->constraint('c1'.$i, $id_pengajuan, $ak);


if($c21=='Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23=='Internasional Terindeks pada Scimagojr dan Scopus'){
$ak=30;
}elseif($c21=='Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23=='Internasional Terindeks pada SCOPUS, IEEE Explore, SPIE'){
$ak=25;
}elseif($c21=='Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23=='Internasional'){
$ak=15;
}elseif($c21=='Dipresentasikan Dimuat Dalam Prosiding Ber ISSN/ISBN' && $c23=='Nasional'){
$ak=10;
}elseif($c21=='Poster Dalam Prosiding yang Dipublikasikan' && $c23=='Internasional'){
$ak=10;
}elseif($c21=='Poster Dalam Prosiding yang Dipublikasikan' && $c23=='Nasional'){
$ak=5;
}elseif($c21=='Seminar/Simposium/Lokakarya Tidak Dimuat Prosiding' && $c23=='Internasional'){
$ak=5;
}elseif($c21=='Seminar/Simposium/Lokakarya Tidak Dimuat Prosiding' && $c23=='Nasional'){
$ak=3;
}elseif($c21=='Tidak Disajikan Dalam Seminar/Simposium/Lokakarya, Dimuat Dalam Prosiding' && $c23=='Internasional'){
$ak=10;
}elseif($c21=='Tidak Disajikan Dalam Seminar/Simposium/Lokakarya, Dimuat Dalam Prosiding' && $c23=='Nasional'){
$ak=5;
}elseif($c21=='Koran/Majalah' && $c23=='Semua Jenjang'){
$ak=1;
}
$this->berkas->constraint('c2'.$i, $id_pengajuan, $ak);


if($c63=='Internasional Diimplementasikan Industri'){
$ak=60;
}elseif($c63=='Internasional'){
$ak=50;
}elseif($c63=='Nasional Diimplementasikan Industri'){
$ak=40;
}elseif($c63=='Nasional'){
$ak=30;
}elseif($c63=='Nasional Paten Sederhana Dirjen Kekayaan Intelektual Kemenkumham'){
$ak=20;
}elseif($c63=='Karya ciptaan, desain industri, indikasi geografis Dirjen Kekayaan Intelektual Kemenkumham'){
$ak=15;
}
$this->berkas->constraint('c6'.$i, $id_pengajuan, $ak);


if($c73=='Internasional'){
$ak=20;
}elseif($c73=='Nasional'){
$ak=15;
}elseif($c73=='Lokal'){
$ak=10;
}
$this->berkas->constraint('c7'.$i, $id_pengajuan, $ak);

if($c81=='Penelitian atau Karya Seni' && $c82=='Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83=='Internasional'){
$ak=20;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83=='Nasional'){
$ak=15;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Pencipta/Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83=='Lokal'){
$ak=10;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83=='Internasional'){
$ak=20;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83=='Nasional'){
$ak=15;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Penggubah/Kameramen/Animator/Kurator/EditorAudioVisual' && $c83=='Lokal'){
$ak=10;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari' && $c83=='Internasional'){
$ak=10;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari' && $c83=='Nasional'){
$ak=6;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Penata Arstistik/Penata Musik/Penata Rias/PenataBusana/ Penata Tari' && $c83=='Lokal'){
$ak=3;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor' && $c83=='Internasional'){
$ak=10;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor' && $c83=='Nasional'){
$ak=6;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='PenataLampu/PenataSuara/PenataPanggung/IlustratorFoto/Kunduktor' && $c83=='Lokal'){
$ak=3;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana' && $c83=='Internasional'){
$ak=6;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana' && $c83=='Nasional'){
$ak=4;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Pendisplay Pameran/Pembuat FotoDokumentasi/Pewarta Foto/Pembawa Acara/Reporter/RedakturPelaksana' && $c83=='Lokal'){
$ak=2;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan' && $c83=='Internasional'){
$ak=6;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan' && $c83=='Nasional'){
$ak=4;
}elseif($c81=='Penelitian atau Karya Seni' && $c82=='Sebagai Pemusik/Pengrawit/Penari/Dalang/Pemeran/Pengarah AcaraTelevisi/Pelaksana Perancangan' && $c83=='Lokal'){
$ak=2;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Naskah Drama/Novel' && $c83=='Internasional'){
$ak=20;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Naskah Drama/Novel' && $c83=='Nasional'){
$ak=15;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Naskah Drama/Novel' && $c83=='Lokal'){
$ak=10;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Buku Kumpulan Cerpen' && $c83=='Internasional'){
$ak=20;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Buku Kumpulan Cerpen' && $c83=='Nasional'){
$ak=15;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Buku Kumpulan Cerpen' && $c83=='Lokal'){
$ak=10;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Buku Kumpulan Puisi' && $c83=='Internasional'){
$ak=20;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Buku Kumpulan Puisi' && $c83=='Nasional'){
$ak=15;
}elseif($c81=='Penelitian Atau Karya Sastra' && $c82=='Penulis Buku Kumpulan Puisi' && $c83=='Lokal'){
$ak=10;
}
$this->berkas->constraint('c8'.$i, $id_pengajuan, $ak);

if($d33=='1 Smt/lebih' && $d34=='Internasional'){
$ak=4;
}elseif($d33=='1 Smt/lebih' && $d34=='Nasional'){
$ak=3;
}elseif($d33=='1 Smt/lebih' && $d34=='Lokal'){
$ak=2;
}elseif($d33=='< 1 Smt' && $d34=='Internasional' ){ $ak=3; }elseif($d33=='< 1 Smt' && $d34=='Nasional' ){ $ak=2; }elseif($d33=='< 1 Smt' && $d34=='Lokal' ){ $ak=1; }elseif($d33=='< 1 Smt' && $d34=='Insidental' ){ $ak=1; } $this->berkas->constraint('d3'.$i, $id_pengajuan, $ak);

    if($d41=='Berdasarkan Bidang Keahlian'){
    $ak=1.5;
    }elseif($d41=='Berdasarkan Penugasan PT'){
    $ak=1;
    }elseif($d41=='Berdasarkan fungsi/jabatan'){
    $ak=0.5;
    }
    $this->berkas->constraint('d4'.$i, $id_pengajuan, $ak);


    if($d72=='Internasional'){
    $ak=1.5;
    }elseif($d72=='Nasional'){
    $ak=1;
    }
    $this->berkas->constraint('d7'.$i, $id_pengajuan, $ak);

    if($e12=='Ketua/Wakil Ketua'){
    $ak=3;
    }elseif($e12=='Anggota'){
    $ak=2;
    }
    $this->berkas->constraint('e1'.$i, $id_pengajuan, $ak);

    if($e23=='Panitia Pusat' && $e24=='Ketua/Wakil Ketua'){
    $ak=3;
    }elseif($e23=='Panitia Pusat' && $e24=='Anggota'){
    $ak=2;
    }elseif($e23=='Panitia Daerah' && $e24=='Ketua/Wakil Ketua'){
    $ak=2;
    }elseif($e23=='Panitia Daerah' && $e24=='Anggota'){
    $ak=1;
    }
    $this->berkas->constraint('e2'.$i, $id_pengajuan, $ak);


    if($e32=='Internasional' && $e33=='Pengurus'){
    $ak=2;
    }elseif($e32=='Internasional' && $e33=='Anggota, atas permintaan'){
    $ak=1;
    }elseif($e32=='Internasional' && $e33=='Anggota'){
    $ak=0.5;
    }elseif($e32=='Nasional' && $e33=='Pengurus'){
    $ak=1.5;
    }elseif($e32=='Nasional' && $e33=='Anggota, atas permintaan'){
    $ak=1;
    }elseif($e32=='Nasional' && $e33=='Anggota'){
    $ak=0.5;
    }
    $this->berkas->constraint('e3'.$i, $id_pengajuan, $ak);


    if($e52=='Ketua Delegasi'){
    $ak=3;
    }elseif($e52=='Anggota'){
    $ak=2;
    }
    $this->berkas->constraint('e5'.$i, $id_pengajuan, $ak);

    if($e62=='Internasional/Nasional/Regional' && $e63=='Ketua'){
    $ak=3;
    }elseif($e62=='Internasional/Nasional/Regional' && $e63=='Anggota/Peserta'){
    $ak=2;
    }elseif($e62=='Lingkungan Perguruan Tinggi' && $e63=='Ketua'){
    $ak=2;
    }elseif($e62=='Lingkungan Perguruan Tinggi' && $e63=='Anggota/Peserta'){
    $ak=1;
    }
    $this->berkas->constraint('e6'.$i, $id_pengajuan, $ak);


    if($e71=='Penghargaan/Tanda Jasa Satya Lencana 30 Tahun'){
    $ak=3;
    }elseif($e71=='Penghargaan/Tanda Jasa Satya Lencana 20 Tahun'){
    $ak=2;
    }elseif($e71=='Penghargaan/Tanda Jasa Satya Lencana 10 Tahun'){
    $ak=1;
    }elseif($e71=='Tingkat Internasional'){
    $ak=5;
    }elseif($e71=='Tingkat Nasional'){
    $ak=3;
    }elseif($e71=='Tingkat Daerah/Lokal'){
    $ak=1;
    }
    $this->berkas->constraint('e7'.$i, $id_pengajuan, $ak);


    if($e93=='Internasional'){
    $ak=5;
    }elseif($e93=='Nasional'){
    $ak=3;
    }elseif($e93=='Daerah/Lokal'){
    $ak=1;
    }
    $this->berkas->constraint('e9'.$i, $id_pengajuan, $ak);