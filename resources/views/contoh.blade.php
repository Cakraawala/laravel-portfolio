@extends('layout.case')
@section('content')
    <section class="home" id="home">
      <img class="active"src="/IMG/2.jpg">
      <br> <br> <br> <br> <br>
            <div class="content active">
                <h1>Halo, Selamat Datang<br><span>{{$name}}!</span></h1>
            </div>
    </section>
@endsection

    <section class="home" id="home">
      <img class="active"src="/IMG/2.jpg">
      <br> <br> <br> <br> <br>
            <div class="content active">
                <h1>Portfolio<br><span>Angger Cakra</span></h1>
            </div>
            <br> <br> <br> <br> <br> <br>
            <br id="about">
            <br>
            <div class="content active">
                <h1>About Me</h1>
                <p align="justify">Halo,  Nama saya Angger Cakra. saya adalah siswa kelas 11 Jurusan Rekayasa Perangkat Lunak (RPL) yang berada di sekolah SMK Bina Mandiri Multimedia Cileungsi.
                  Tujuan saya PKL untuk melatih skill dan keterampilan saya dibidang teknologi khusus nya Jurusan ini (Pemrogramman).
                  Motivasi Saya ingin menekuni bidang ini karena merupakan cita cita saya sedari kecil
                  yakni membuat program dan perusahaan saya sendiri seperti Facebook.
                </p>
            </div>

            <br> <br> <br> <br> <br> <br> <br>
            <br id="skills"> <br>

            <div class="content active">
                <h1>Skills<br><span>Experience</span></h1>
                <p align="justify">Skills saya dalam bidang ini tergolong masih dasar, yakni seperti HTML,CSS (BOOTSTRAP,TAILWIND), PHP dan sebagainya. namun saya dapat mengerti bahasa Pemrogramman lainnya seperti (JAVA,ARDUINO)</p>
            </div>
            <br> <br> <br> <br> <br> <br> <br>
            <br id="project"> <br>
            <div class="content active">
                <h1>Project<br><span>School</span></h1>
                <p align="justify">Project saya dalam jurusan ini terutama pada di sekolah SMK Bina mandiri ini diantaranya adalah
                  Membuat web booking daring (web),Membuat Portfolio, Membuat react JS, Membuat mobil RC (Arduino)</p>
                <a href="#">Ebooking</a> <br> <br> <br>
                <a href="#">React JS</a>
            </div>
            <br> <br> <br> <br> <br>

<script src="ASSET/JS/app.js"></script>
  </body>
</html>
