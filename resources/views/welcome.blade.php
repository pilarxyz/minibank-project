<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK MINI</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Custom styles CSS -->
    <link href="css/custom-welcome.css" rel="stylesheet">
</head>

<body>
<!-- Navbar -->
<nav class="py-4 navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.discordapp.com/attachments/785538389566029844/975911245112836116/Logo.png" width="187" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item align-self-center">
                    <a class="nav-link active" aria-current="page" href="#herosection">Home</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" href="#visimisisection">Visi-Misi</a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link" href="#contactsection">Contact</a>
                </li>
                <a class="btn px-4 btn-secondary ms-5" href="{{ route('login') }}" role="button">Sign In</a>
                <a class="btn px-4 btn-primary ms-1" href="{{ route('register') }}" role="button">Sign Up</a>
            </ul>
        </div>
    </div>
</nav>
<!-- Hero Section -->
<section class="herosection mt-5" id="herosection">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h1 class="mb-4">Transaksi Perbankan Mudah dan Terpercaya</h1>
                <p class="mb-5">
                    Ayo segera lakukan transaksi mu melalui Bankmini dan nikmati semua kenyamanannya!
                </p>
                <a class="btn btn-primary" href="#" role="button">Get Started</a>
            </div>
            <div class="col d-none d-sm-block d-sm-none d-md-block" id="asset-1">
                <center><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911240721379398/Asset-1.png" width="400px" height="374.26px"></center>
            </div>
        </div>
    </div>
</section>
<!-- Reason Section -->
<section class="reasonsection mt-5">
    <div class="container">
        <div class="row">
            <div class="align-self-center col d-none d-sm-block d-sm-none d-md-block" id="asset-2">
                <center><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911241082077184/Asset-2.png" width="466px" height="378px"></center>
            </div>
            <div class="col align-self-center">
                <h1 class="mb-5">Mengapa memilih Bankmini?</h1>
                <h5 class="mb-4">
                    Bankmini terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah.
                </h5>
                <h5 class="mb-4">
                    Customer Service Bankmini yang kompeten dan profesional siap melayani nasabah dengan setulus hati.
                </h5>
                <h5 class="mb-4">
                    Bankmini memegang teguh kepercayaan yang diberikan serta saling peduli dan menghargai perbedaan.
                </h5>
            </div>
        </div>
    </div>
</section>
<!-- Testimoni Section -->
<section class="testimonisection mt-5">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 align-self-center" align="center">
                            <h3>Keputusan tepat memilih Bankmini sebagai media transaksi perbankan saya. Proses nya cepat aman dan nyaman.</h3> <br><br>
                            <img src="https://cdn.discordapp.com/attachments/785538389566029844/975911245456752690/profile-1.png" width="138px" height="138px"><br><br>
                            <h5>Rudi, Wirausahawan</h5>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 align-self-center" align="center">
                            <h3>Sebagai seorang frreelancer saya sangat memerlukan transaksi perbankan yang aman dan melalui  Bankmini semua itu terpenuhi.</h3> <br><br>
                            <img src="https://cdn.discordapp.com/attachments/785538389566029844/975911246253666384/profile-2.png" width="138px" height="138px"><br><br>
                            <h5>Bagus, Freelancer</h5>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8 align-self-center" align="center">
                            <h3>Bankmini mampu melakukan transaksi yang efisien dan praktis dan saya sangat suka akan hal itu.</h3> <br><br>
                            <img src="https://cdn.discordapp.com/attachments/785538389566029844/975911246727643156/profile-3.png" width="138px" height="138px"> <br><br>
                            <h5>Anita, Mahasiswa</h5>
                        </div>
                        <div class="col-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<!-- Visi Misi Section -->
<section class="visimisisection mt-5" id="visimisisection">
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <h1 class="mb-4">Visi</h1>
                <h5 class="mb-5">
                    Menjadi The Most Valuable Banking  di  Indonesia.
                </h5>
                <h1 class="mb-5">Visi</h1>
                <h5 class="mb-4">
                    Melakukan kegiatan perbankan yang terbaik dengan mengutamakan pelayanan kepada segmen mikro, kecil, dan menengah untuk menunjang peningkatan ekonomi masyarakat.
                </h5>
                <h5 class="mb-4">
                    Memberikan keuntungan dan manfaat yang optimal kepada pihakpihak yang berkepentingan (stakeholders) dengan memperhatikan prinsip keuangan berkelanjutan dan praktik Good Corporate Governance yang sangat baik.
                </h5>
            </div>
            <div class="col d-none d-sm-block d-sm-none d-md-block" id="asset-2">
                <center><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911241497317458/Asset-3.png" width="562px" height="553px"></center>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section -->
<section class="contactsection mt-5" id="contactsection">
    <div class="container">
        <div class="row" align="center">
            <div class="col-12 col-lg-4" align="left">
                <h2 class="mb-4">Bankmini Kantor Pusat</h2>
                <div class="icon">
                    <img src="https://cdn.discordapp.com/attachments/785538389566029844/975911239882514452/ic_map.png" alt="" width="25" height="25">
                </div>
                <div class="text" align="left">
                    <h5>
                        {{ $config->address }} 
                    </h5>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <h2 class="mb-4" align="left">Hubungi Kami</h2>
                <div class="icon">
                    <a href="#"><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911247260295228/ic_tlp.png" alt="" width="25" height="25"></a><br><br>
                    <a href="#"><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911242122285076/ic_gmail.png" alt="" width="25" height="20"></a> 
                </div>
                <div class="text" align="left">
                    <h5> {{ $config->contact }} </h5> <br>
                    <h5> {{ $config->email }}  </h5>
                </div>
            </div>
            <div class="col-12 col-lg-4" align="left">
                <h2 class="mb-4">Sosial Media</h2>
                <div class="icon-sosmed">
                    <a href="#"><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911241820299274/ic_fb.png" alt="" width="25" height="25"></a><br><br>
                    <a href="#"><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911244701765642/ic_yt.png" alt="" width="25" height="25"></a>
                </div>
                <div class="icon-sosmed">
                    <a href="#"><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911242449453126/ic_ig.png" alt="" width="25" height="25"></a><br><br>
                    <a href="#"><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911244240416818/ic_twt.png" alt="" width="25" height="25"></a>
                </div>
                <div class="icon-sosmed">
                    <a href=""><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911244504645692/ic_wa.png" alt="" width="25" height="25"></a><br><br>
                    <a href=""><img src="https://cdn.discordapp.com/attachments/785538389566029844/975911240423604244/ic_tele.png" alt="" width="25" height="25"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<section class="footersection mt-5">
    <div class="container">
        <div class="row" align="center">
            <div class="col">
                © 2022 PT.{{ $config->name }}. | All Rights Reserved.
            </div>
        </div>
    </div>
</section>
<!-- Script JS -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>