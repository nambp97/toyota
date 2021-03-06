<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota Veloz Cross</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="./img/favicon/favicon.ico">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KDN34GC');</script>
    <!-- End Google Tag Manager -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KDN34GC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="home">
        <header id="header" class="header">
            <img class="banner kenburns-bottom" src="{{ asset('img/home/banner.JPG') }}" alt="banner">
            <div class="container h-100">
                <div class="h-100 d-flex flex-column justify-content-between">
                    <div class="container-fluid">
                        <nav class="navbar navbar-dark navbar-expand-lg align-items-start">
                            <a class="navbar-brand" href="#">
                                <img src="{{ asset('img/general/logo.svg') }}" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                {{-- <span class="navbar-toggler-icon"></span> --}}
                                <img src="{{ asset('img/general/icon-menu-toggle.svg') }}" alt="">
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#introduction">CAR-TIME STORY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">FAMILY ON THE WAY</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">H??NH TR??NH KH??CH H??NG</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="title text-center">
                        <p>VELOZ CROSS</p>
                    </div>
                    <div class="description text-center">
                        <p>K??o xu???ng ????? kh??m ph?? c??u chuy???n</p>
                        <img src="{{ asset('img/general/icon-button.svg') }}" alt="">
                    </div>
                    <div class="tool">
                        <a id="scroll-to-top" class="btn">
                            <img src="{{ asset('img/general/arrow-up.svg') }}" alt="">
                        </a>
                        <a class="btn" data-bs-toggle="modal" data-bs-target="#toolModal">
                            <img src="./img/general/wheel.svg" alt="">
                        </a>
                        <a id="scroll-to-bottom" class="btn">
                            <img src="{{ asset('img/general/arrow-down.svg') }}" alt="">
                        </a>
                        <a href="https://www.toyota.com.vn/veloz-cross-cvt-top" target="_blank" class="btn">
                            <img src="{{ asset('img/general/global.svg') }}" alt="">
                        </a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="toolModal" tabindex="-1" aria-labelledby="toolModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-xxl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row align-items-center">
                                        <form class="col-md-6">
                                            <h1 class="form-title">????ng k?? l??i th??? xe</h1>

                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <label for="form-select" class="form-label">T???nh / Th??nh
                                                        ph???*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-global-black.svg" alt="">
                                                        </span>
                                                        <select id="form-select" class="form-select" name="province">
                                                            <option value="">Ch???n t???nh / th??nh ph???</option>
                                                            @foreach ($province as $itemProvince)
                                                                <option value="{{ $itemProvince['id'] }}">{{ $itemProvince['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <label for="form-select" class="form-label">?????i l?? li??n h???*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-home-black.svg" alt="">
                                                        </span>
                                                        <select id="form-select" class="form-select" name="dealer">
                                                            <option value="">?????i l?? li??n h???</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <label for="name" class="form-label">H??? v?? t??n*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-user-black.svg" alt="">
                                                        </span>
                                                        <input type="text" class="form-control" id="name"  name="name"
                                                            placeholder="Nh???p h??? v?? t??n">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <label for="phone" class="form-label">S??? ??i???n tho???i*</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-phone-black.svg" alt="">
                                                        </span>
                                                        <input type="text" class="form-control" id="phone" name="phone"
                                                            placeholder="Nh???p s??? ??i???n tho???i">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <label for="email" class="form-label">Email</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="./img/general/icon-mail-black.svg" alt="">
                                                        </span>
                                                        <input type="email" class="form-control" id="email" name="email"
                                                            placeholder="Nh???p email">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <label for="form-select" class="form-label">Nhu c???u</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <img src="{{ asset('img/general/icon-message-black.svg') }}" alt="">
                                                        </span>
                                                        <select id="form-select" class="form-select" name="to_buy">
                                                            <option value="">D??? ?????nh mua xe</option>
                                                            @foreach ($toBuy as $itemToBuy)
                                                                <option value="{{ $itemToBuy['name'] }}">{{ $itemToBuy['name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-5">B???ng c??ch nh???p v??o ????ng k?? ngay, Kh??ch h??ng ?????ng ?? g???i th??ng
                                                tin c???a m??nh t???i
                                                Toyota Vi???t Nam. Toyota Vi???t Nam s??? gi???, s??? d???ng v?? ?????m b???o b???o m???t
                                                th??ng tin kh??ch h??ng
                                                theo quy ?????nh ph??p lu???t nh???m m???c ????ch ph???c v??? v?? t?? v???n kh??ch h??ng.</p>
                                            <div class="d-flex justify-content-center align-content-center form-action save-data" style="cursor: pointer;">
                                                <button class="btn" type="submit">????ng k?? ngay</button>
                                            </div>
                                        </form>
                                        <div class="col-lg-6 text-center">
                                            <img src="{{ asset('img/home/form-image.png') }}" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="introduction" class="introduction">
            <div class="container h-100 d-flex align-items-center">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <p class="title">TRONG TI???N NGHI - NGO??I PHONG C??CH</p>
                    <p class="description mb-5">V??? ngo??i th??? thao, phong c??ch v?? hi???n ?????i nh?? m???t chi???c crossover th???c
                        th??? l?? c???m gi??c l??i m?? Veloz Cross mang l???i t??? c??i nh??n ?????u ti??n.
                        Thi???t k??? n???i th???t r???ng r??i linh ho???t, ti???n nghi ng???p tr??n khoang l??i c??ng v???i kh??? n??ng v???n h??nh
                        ??m ??i, gi??p ch??? s??? h???u d??? d??ng di chuy???n m???i l??c m???i n??i.
                        C??ng ngh??? an to??n h??ng ?????u mang l???i c???m gi??c an t??m tr??n m???i h??nh tr??nh. V???i nh???ng trang b??? hi???n
                        ?????i ti??n ti???n nh???t ph??n kh??c, Veloz Cross h???a h???n s??? l?? ng?????i b???n ?????ng h??nh ????ng tin c???y c???a m???i
                        gia ????nh.
                    </p>
                    <div class="row">
                        <a href="#monday" class="col-xl-2 col-lg-4 col-md-6 col-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-1.png') }}" alt="">
                        </a>
                        <a href="#tuesday" class="col-xl-2 col-lg-4 col-md-6 col-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-2.png') }}" alt="">
                        </a>
                        <a href="#wednesday" class="col-xl-2 col-lg-4 col-md-6 col-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-3.png') }}" alt="">
                        </a>
                        <a href="#thursday" class="col-xl-2 col-lg-4 col-md-6 col-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-4.png') }}" alt="">
                        </a>
                        <a href="#friday" class="col-xl-2 col-lg-4 col-md-6 col-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-5.png') }}" alt="">
                        </a>
                        <a href="#saturday" class="col-xl-2 col-lg-4 col-md-6 col-6 mt-2">
                            <img class="thumb" src="{{ asset('img/home/thumb-6.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="monday" class="week monday">
            <img class="background-section" src="{{ asset('img/home/thursday/2.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Nh???ng quy???t ?????nh c???a Ph????ng<br>
                                l??m thay ?????i cu???c ?????i Tr?????ng
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-right" data-aos-duration="1000">
                                Nh?? ???? h???a h??m n???, h??m nay Tr?????ng k??? cho c??? nh?? nghe v??? nh???ng k??? ni???m ????ng y??u nh???t c???a
                                2 v??? ch???ng m??nh. <br>
                                Hai ?????a h???c chung c???p 2, h???i ???? b???n b?? l??t nh??t, ????u ???? bi???t ????? ?? g??. L??n c???p 3, m??nh
                                th???m th??ch n??ng nh??ng th???c s??? kh??ng ????? can ?????m ????? b??y t???, v?? th???y kh??? n??ng ???win??? tr??i
                                tim n??ng kh??ng cao.
                                H???i ????, n??ng kh??ng ph???i hotgirl nh??ng lu??n thu h??t s??? ch?? ?? v?? r???t th??ng minh, s???c s???o
                                v?? h???t m??nh v?? b???n b??. T??nh c???m c??? ???p ??? nh?? th??? ?????n m???t ng??y m??nh li???u m??nh b??y t???
                                <p class="read-more" style="font-style: italic;">... Xem th??m</p>.
                                <span class="read-more-show">
                                    N??ng h???i l???i r???t duy??n: ???M??y y??u tao th???t ?????? v?? th??? l?? ???xong, th??nh c??ng! H??a ra
                                    ch??? c???n ???n??i th???t???, l?? n??ng g???t ?????u. <br>
                                    T???t nghi???p c???p 3, m??nh d???n th??n v??o con ???????ng ng?????i m???u. Ph????ng c??ng gia ????nh chu???n
                                    b??? thu x???p ????? ?????c qua ?????nh c?? ?????c, v??? s???n m???t t????ng lai t????i s??ng.
                                    M??nh kh??ng d??m n??u gi??? v?? th???i ??i???m ???y kh??ng c?? g?? ????? ?????m b???o t????ng lai. C??? t?????ng l??
                                    chuy???n t??nh c???a v??? ch???ng m??nh k???t th??c t??? ????.
                                    Nh??ng kh??ng, v??o ph??t ch??t, n??ng quy???t ?????nh kh??ng ??i ?????c n???a m?? ??? l???i Vi???t Nam c??ng
                                    m??nh. L??c ???y, Tr?????ng b???t ng??? th???t s???. <br>
                                    Gi??? nh??? l???i kho???nh kh???c ???y, l??ng v???n th???y b???i h???i, x???n xang. Nh??? c?? quy???t ?????nh ng??y
                                    ???y c???a v???, m?? hai v??? ch???ng m???i vi???t l??n ???????c chuy???n t??nh l??ng m???n nh?? gi???.
                                    ???nh n??y m???i ch???p, t??? h???i ???????a em ??i ch??i xa, tr??n con xe tay ga??? ?????n b??y gi??? l??
                                    ???tr??n Veloz Cross???, ch??ng m??nh v???n kh??ng gi???m ????? ng???t th??? n??y ????y!
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu g???n</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-easing="ease-in-sine">
                            <img class="image-main" src="{{ asset('img/home/thursday/2.JPG') }}" alt="">
                            <div class="slider">
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/thursday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/1.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#mondayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/thursday/5.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="mondayModal" tabindex="-1" aria-labelledby="mondayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="monday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/thursday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/thursday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#monday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#monday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tuesday" class="week tuesday">
            <img class="background-section" src="{{ asset('img/home/tuesday/2.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-left" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/tuesday/2.JPG') }}" alt="">
                            <div class="slider d-flex justify-content-between">
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/tuesday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/6.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#tuesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/tuesday/1.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                S??? nghi???p th??ng hoa nh??? c?? v??? l??m h???u ph????ng
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-left" data-aos-duration="1000">
                                Kh??ng nhi???u ng?????i bi???t r???ng c??ng ch??nh Ph????ng l?? ng?????i ???? ???k??o??? Tr?????ng ra kh???i ngh???
                                ng?????i m???u ????? ???d???n l???i??? m??nh ?????n nghi???p di???n xu???t.
                                M??nh ?????t gi???i Si??u m???u ??n ???nh t???i cu???c thi Si??u m???u n??m 2004, nh??ng Ph????ng v???n khuy??n
                                ???Anh n??n thi ?????i h???c S??n kh???u ??i???n ???nh, s??? c?? t????ng lai h??n???.
                                N??m hai ?????i h???c, m??nh c?? m???t vai di???n ?????u ti??n, Ph????ng th???c xuy??n ????m ????? xem h???t 20 t???p
                                phim ????? g??p ?? v??? c??ch di???n l??m sao cho s??u s???c v?? truy???n c???m h???ng h??n.<p
                                    class="read-more" style="font-style: italic;">... Xem th??m</p>
                                <span class="read-more-show">
                                    <br>
                                    Sau nhi???u n??m g???n b?? trong ngh??? v???i s??? ???ng h??? c???a v??? t??? ?????u ?????n cu???i, m??nh c??ng ????
                                    c?? cho m??nh nh???ng vai di???n
                                    ????? ?????i v?? ghi d???u ???n trong l??ng kh??n gi???. <br>
                                    M???i ng?????i hay b???o v??? khuy??n g?? th?? l??m ng?????c l???i. C??n m??nh th?? c??? y l???i v??? m?? l??m,
                                    c?? l??m sao kh??ng c??? nh??? ??i xe n??y c??ng l?? v?? v??? b???o xe n??y nghe t??? h??i b??? gi???ng
                                    anh: ???trong ti???n nghi, ngo??i phong c??ch??? ;
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu g???n</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="tuesdayModal" tabindex="-1" aria-labelledby="tuesdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="tuesday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/tuesday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/tuesday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#tuesday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#tuesday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="wednesday" class="week wednesday">
            <img class="background-section" src="{{ asset('img/home/saturday/2.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                ????M C?????I 1-0-2
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-up" data-aos-duration="1000">
                                H??m nay c??? nh?? l??n ???????ng ??i ch??i. ???????ng xa nh??ng xe ch???y ??m, l???i tho??ng r???ng n??n 2 ch???
                                em h??o h???ng, c?????i ????a tr??u nhau r???t r??m r???.
                                Chip, Bon t??? nhi??n h???i B??? nh??? nh???t chuy???n ??i n??o? Kh??ng hi???u sao d??ng h???i t?????ng c???a m??nh
                                l???i quay ngay v??? chuy???n ????n c?? d??u, t???c m??? c???a 2 ?????a n??y c??ch ????y g???n 14 n??m.<br>
                                ?????u th??ng 11 n??m ???y, ng?????i d??n H?? N???i ch???ng ki???n m???t tr???n l???t l???ch s???.
                                H??m ????, m??nh c??n ph???i thi m??n cu???i tr?????c khi t???t nghi???p ?????i h???c S??n kh???u ??i???n ???nh. M??nh
                                kh??ng t?????ng<p class="read-more" style="font-style: italic;">... Xem th??m</p>
                                <span class="read-more-show">
                                    t?????ng n???i c?? ng??y ph???i x???n qu???n l???i v??o tr?????ng l??m b??i thi. C??ng kh??ng th??? tin ng??y
                                    c?????i m??nh l???i b?? b??m l???i t???i nh?? h??ng, thay v???i b??? comple ????? ch??? c?? d??u ?????n v?? ????n
                                    kh??ch.<br>
                                    Ng?????i ta l???y nhau ng??y m??a th?? nhi???u v?? k??? nh??ng ch???n ????ng ng??y H?? N???i l???t th?? m???y
                                    ch???c n??m m???i c?? m???t l???n. B??? v?? m??? Chip, Bon ????ng l?? ????????nh m???nh??? c???a nhau r???i.<br>
                                    Nghe ?????n ????y, 2 ch??? em Ch??p ??? Bon th??ch th?? c?????i kh??.
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu g???n</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-up" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/saturday/2.JPG') }}" alt="">
                            <div class="slider d-flex justify-content-between">
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/saturday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/6.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#wednesdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/saturday/1.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="wednesdayModal" tabindex="-1" aria-labelledby="wednesdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="wednesdayModalLabel">H??nh chi ti???t</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="wednesday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/saturday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/saturday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#wednesday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#wednesday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="thursday" class="week thursday">
            <img class="background-section" src="{{ asset('img/home/sunday/4.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-left" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/sunday/4.JPG') }}" alt="">
                            <div class="slider">
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/sunday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/1.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#thursdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/sunday/6.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                V??? nh?? ch???ng nh??, c?? v??? ch???
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-left" data-aos-duration="1000">
                                Nh???ng l??c c??? nh?? ???????c quay qu???n nh?? th??? n??y, m??nh l???i nh??? c?? ?????t ph???i quay phim xa nh??
                                l??u, r???t l??u.<br>
                                H???i ????ng phim ???B?? m???t Tam gi??c v??ng???, ??o??n l??m phim ph???i di chuy???n li??n t???c ??? ba n?????c
                                L??o - Campuchia - Myanmar qua h??n 10.000km.
                                V?? th???i gian g???p r??t, Tr?????ng ph???i xa nh?? v???i th???i gian d??i k??? k??? l???c: 4 th??ng.
                                Khi ??o??n quay ??? ??i???n Bi??n, d?? ch??? ???????c ngh??? c?? ba ng??y nh??ng m??nh v???n xin ph??p ?????o di???n
                                cho v??? nh?? th??m nh??.
                                Kh??ng g???i ??i???n tr?????c, khi m??? c???a ra th???y m??nh, v??? r???t b???t<p class="read-more"
                                    style="font-style: italic;">... Xem th??m</p>
                                <span class="read-more-show">
                                    ng??? v?? lao v??o ??m ch???m l???y. Ch???c ??ng ch???ng, ??ng b??? n??o c??ng ch??? mong c?? ng?????i mong,
                                    ng?????i ch??? m??nh tr??? v??? sau bao nhi??u v???t v??? c??ng vi???c b??n ngo??i. <br>
                                    B??y gi???, n???u b???i c???nh phim c??ch nh?? d?????i 100km, m??nh c??ng s??? t??m c??ch ??i v??? trong
                                    ng??y.
                                    V?? m??nh bi???t, ??? nh?? c?? v??? v?? 2 nh??c l??c n??o c??ng ?????i b??? v??? ????? c??ng nhau l??m nh???ng
                                    ??i???u th???t ????n gi???n: qu??y qu???n, ??n u???ng, tr?? chuy???n. Gi??? c?? Veloz Cross r???i, ??i l???i
                                    ki???u n??y c??ng l?? easy game th??i.
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu g???n</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="thursdayModal" tabindex="-1" aria-labelledby="thursdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="thursdayModalLabel">H??nh chi ti???t</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="thursday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/sunday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/sunday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#thursday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#thursday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="friday" class="week friday">
            <img class="background-section" src="{{ asset('img/home/friday/3.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Nh??n con kh??n l???n
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-right" data-aos-duration="1000">
                                M??nh hay ph???i ??i l??m xa d??i ng??y n??n 2 b???n n??y hay t??m s??? v???i m??? h??n.
                                Nh??ng khi c?? b??? ??? nh?? th?? 2 ch??? em l???i r???t th??ch ch??i v???i b???.
                                C?? th??? ch??? l?? r??? nhau tr???n v??o Veloz Cross ????? ????a ngh???ch cho tho???i m??i v?? t??m s??? nh??? to
                                ????? th??? chuy???n.<br>
                                Th???y con kh??n l???n, tr?????ng th??nh h??n t???ng ng??y c?? l??? l?? ??i???u h???nh ph??c nh???t.
                                H???i tham gia ???B??? ??i, m??nh ??i ????u th??????, Ch??p m???i 6 tu???i, kh?? ??t n??i v?? hay ng?????ng ng??ng.
                                C?? m???t th??? th??ch 2 b??? con ph???i ng??? trong ng??i nh?? gi???a c??nh ?????ng ng??. Nh??ng ?????n<p
                                    class="read-more" style="font-style: italic;">... Xem th??m</p>
                                <span class="read-more-show">
                                    t???i Chip b???t ?????u s??? v?? ??? ???? r???t t???i v?? c?? nhi???u c??n tr??ng. Khi ??i ng??? Chip l???i kh??c
                                    v?? nh??? m???, ph???i d??? m??i Chip m???i ng???. S??ng h??m sau c??c c???p b??? con ph???i d???y t??? 4h s??ng
                                    ????? l??m nhi???m v???.
                                    Cu???i c??ng c??? hai b??? con ?????u ng??? qu??n v?? kh??ng ho??n th??nh ???????c nhi???m v??? h??m ????. B??y
                                    gi???, con ???? s???p tr??n 13 tu???i, b??i l???i nh?? m???t n??ng ti??n c??, 3 ng??y l?? ???x??? g???n??? m???t
                                    b???n piano, r???t gi?? ?????i ???tra kh???o??? c??c vai di???n c???a b???.<br>
                                    C??n Bon th?? c??ng l???n c??ng b???c l??? n??t h??i h?????c, duy??n ng???m. C?? l???n r??? c???u di???n xu???t
                                    l??m m???t l???nh tr??n n???n nh???c qu???y, m?? c???u nh???p t??m h??n c??? b???.
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu g???n</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-right" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/friday/3.JPG') }}" alt="">
                            <div class="slider">
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/friday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/1.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#fridayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/friday/5.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="fridayModal" tabindex="-1" aria-labelledby="fridayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="fridayModalLabel">H??nh chi ti???t</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="friday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/friday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/friday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#friday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#friday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section id="saturday" class="week saturday">
            <img class="background-section" src="{{ asset('img/home/wednesday/6.JPG') }}" alt="">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-7">
                        <div class="image" data-aos="fade-up" data-aos-duration="1000">
                            <img class="image-main" src="{{ asset('img/home/wednesday/6.JPG') }}" alt="">
                            <div class="slider d-flex">
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image show active">
                                    <img src="{{ asset('img/home/wednesday/6.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/2.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/3.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/4.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/5.JPG') }}" alt="">
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#saturdayModal" href="javascript:;"
                                    class="slider-image">
                                    <img src="{{ asset('img/home/wednesday/1.JPG') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="content">
                            <p class="title">
                                Nh???ng m??n qu?? y??u th????ng
                            </p>
                            <hr style="color: #CE0402; width: 70%; height: 1px; opacity: unset;">
                            <div class="description" data-aos="fade-up" data-aos-duration="1000">
                                ??i???u cu???i c??ng m??nh mu???n chia s??? trong chu???i nh???ng c??u chuy???n nh??? v??? gia ????nh ch??nh l??
                                v??? b?? quy???t ???gi??? l???a??? h??n nh??n.
                                Sau 14, 15 n??m ???kinh nghi???m, m??nh ????c r??t ra 3 c??ch, c??ch th??? 3 l?? d??? nh???t nh??. <br>
                                M???t l?? ph???i bi???t d??? v??? b???ng l???i ngon ti???ng ng???t. Hai l?? chia s??? vi???c nh??.
                                V?? ba l?? t???ng kh??ng nh??n d???p g??, t???ng m???t c??ch b???t ng???.<br>
                                Nhi???u ng?????i th???c m???c, nghi ng??? m??nh ???s??? v?????? n??n m???i t???ng v??? nhi???u qu?? th???.
                                M?? ????ng l?? t???ng nhi???u th???t. Sinh nh???t, k??? ni???m ng??y c?????i, valentine hay Noel th??<p
                                    class="read-more" style="font-style: italic;">... Xem th??m</p>
                                <span class="read-more-show">
                                    kh??ng n??i l??m g??. S??? kh??c bi???t c???a m??nh l?? t???t d????ng, t???t ??m, t???t h??n th???c, ??ng c??ng
                                    ??ng t??o, r???m th??ng 7, trung thu, 1/6, 20/6, 20/11???v??? c??ng ???????c nh???n qu??.
                                    M???t trong nh???ng l?? do m??nh ch???n Veloz Cross l?? v?? c???p xe si??u r???ng, m???i l???n mua qu??
                                    t???ng v??? l?? tho???i m??i ???ship??? qu?? v??? d?? qu?? c?? to hay nhi???u ?????n ????u ;<br>
                                    Th???t ra, ???? l?????s??? ?????u t?? cho ni???m vui m???i ng?????i ???. ??i???u g?? l??m n??ng vui v?? b???t ng???
                                    th?? m??nh s??? lu??n c??? g???ng th???c hi???n. Khi m??? vui, c??? nh?? m???i vui ???????c.<br>
                                    Chip Bon c?? l???n comment ???B??? ????ng l?? ngo??i ?????p trai, trong chi???u v??????. Ch???u kh?? ch???n
                                    qu?? r???i ???????c th???y v??? vui, con khen th?? c??ng th???y kh?? x???ng ????ng ;
                                </span>
                                <p class="collapse" style="font-style: italic;">... Thu g???n</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="saturdayModal" tabindex="-1" aria-labelledby="saturdayModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-xxl-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="saturdayModalLabel">H??nh chi ti???t</h5> -->
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div id="saturday-carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('img/home/wednesday/6.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/2.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/3.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/4.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/5.JPG') }}" class="carousel-image" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('img/home/wednesday/1.JPG') }}" class="carousel-image" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#saturday-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#saturday-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section id="footer-banner" class="footer-banner">
            <img class="background" src="{{ asset('img/home/toyota-straight.JPG') }}" alt="">
            <img class="background small" src="{{ asset('img/home/toyota-straight-small.jpg') }}" alt="">
            <div class="h-100 d-flex flex-column justify-content-end align-items-center">
                <div class="link">
                    <a href="#">
                        H??y c??ng nhau ch??? ????n c??u chuy???n ti???p theo
                    </a>
                    <img src="{{ asset('/img/general/arrow-right.svg') }}" alt="">
                </div>
            </div>
        </section>

        <section id="form">
            <div class="container">
                <div class="row" style="background-color: #F9F9F9">
                    <div class="col-lg-7">
                        <form data-aos="zoom-in" data-aos-duration="1000">
                            <div class="form">
                                <h1 class="form-title">????ng k?? l??i th??? xe</h1>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="form-select" class="form-label">T???nh / Th??nh ph???*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-global-black.svg') }}" alt="">
                                            </span>
                                            <select id="form-select" class="form-select" name="province">
                                                <option value="">Ch???n t???nh / th??nh ph???</option>
                                                @foreach ($province as $itemProvince)
                                                    <option value="{{ $itemProvince['id'] }}">{{ $itemProvince['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="form-select" class="form-label">?????i l?? li??n h???*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-home-black.svg') }}" alt="">
                                            </span>
                                            <select id="form-select" class="form-select" name="dealer">
                                                <option value="">?????i l?? li??n h???</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="name" class="form-label">H??? v?? t??n*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-user-black.svg') }}" alt="">
                                            </span>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Nh???p h??? v?? t??n">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="phone" class="form-label">S??? ??i???n tho???i*</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-phone-black.svg') }}" alt="">
                                            </span>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Nh???p s??? ??i???n tho???i">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-mail-black.svg') }}" alt="">
                                            </span>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Nh???p email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <label for="form-select" class="form-label">Nhu c???u</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <img src="{{ asset('img/general/icon-message-black.svg') }}" alt="">
                                            </span>
                                            <select id="form-select" class="form-select" name="to_buy">
                                                <option value="">D??? ?????nh mua xe</option>
                                                @foreach ($toBuy as $itemToBuy)
                                                    <option value="{{ $itemToBuy['name'] }}">{{ $itemToBuy['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class="policy">B???ng c??ch nh???p v??o ????ng k?? ngay, Kh??ch h??ng ?????ng ?? g???i th??ng tin c???a
                                    m??nh
                                    t???i
                                    Toyota Vi???t Nam. Toyota Vi???t Nam s??? gi???, s??? d???ng v?? ?????m b???o b???o m???t th??ng tin kh??ch
                                    h??ng
                                    theo quy ?????nh ph??p lu???t nh???m m???c ????ch ph???c v??? v?? t?? v???n kh??ch h??ng.</p>
                                <div class="d-flex justify-content-center align-content-center form-action save-data" style="cursor: pointer;">
                                    <button class="btn" type="submit">????ng k?? ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 text-center" data-aos="zoom-in" data-aos-duration="1000" alt="">
                        <img class="form-section-image" src="{{ asset('img/home/form-image.png') }}">
                    </div>
                </div>
            </div>
        </section>
        <div class="toast" data-autohide="false" style="position: absolute; top: 0; right: 0;">
            <div class="toast-header">
                <svg class=" rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                                <rect fill="#007aff" width="100%" height="100%" /></svg>
                <strong class="mr-auto">Toyota</strong>
                <small class="text-muted">1 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
            </div>
            <div class="toast-body">
                ????ng k?? th??nh c??ng !
            </div>
            </div>
        <footer id="footer" class="w-100 d-flex justify-content-center align-items-center">
            <span>?? B???n quy???n thu???c v??? c??ng ty TOYOTA Vi???t Nam</span>
        </footer>

    </div>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        $('body').on('click', '.save-data', function(e){
            e.preventDefault();
            let province = $(this).parent().find("select[name='province']").val();
            let dealer =  $(this).parent().find("select[name='dealer']").val();
            let name = $(this).parent().find("input[name='name']").val();
            let phone = $(this).parent().find("input[name='phone']").val();
            let email = $(this).parent().find("input[name='email']").val();
            let to_buy =  $(this).parent().find("select[name='to_buy']").val();
            let url = '{{ route('save-customer') }}';

            let data = {
                _token: "{{ csrf_token() }}",
                province: province,
                dealer: dealer,
                firstName: name,
                phoneNumber: phone,
                email: email,
                whenCustomerWantToBuy: (to_buy) ? to_buy : "Ch??a x??c ?????nh"
            }
            if (province.length == 0) {
                alert('Vui l??ng ch???n t???nh/ th??nh ph???!')
                return
            }
            if (dealer.length == 0) {
                alert('Vui l??ng ch???n ?????i l??!')
                return
            }
            if (name.length == 0) {
                alert('Vui l??ng nh???p h??? t??n!')
                return
            }
            var filter = /^[0-9]{9,13}$/;
            if (!filter.test(phone)) {
                alert('S??? ??i???n tho???i ph???i l?? s??? v?? l???n h??n 9 k?? t???!')
                return
            }

            saveData(url, data);
        })
        $('body').on('change', "select[name='province']", function() {
            let urlProvince = '{{ route('province') }}'
            let _this = $(this);
            $.ajax({
                url: urlProvince,
                data: {province:$(this).val()},
                method: "GET",
                success: function(result) {
                    var html = '';
                    if (result.length > 0) {
                        for (let i = 0; i < result.length; i++) {
                            if (result[i]['name']) {
                                html += '<option value="'+ result[i]['abbreviation'] +'">'+ result[i]['name'] +'</option>'
                            }
                        }
                        _this.parent().parent().parent().find("select[name='dealer']").find('option').remove().end().append(html);
                    } else {
                        html = '<option value="">?????i l?? li??n h???</option>'
                        _this.parent().parent().parent().find("select[name='dealer']").find('option').remove().end().append(html);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        })
        function saveData(url, data) {
            $.ajax({
                url: url,
                data: data,
                method: "POST",
                success: function(result) {
                    if (result.result.statusCode == 200) {
                        $("form")[0].reset();
                        $("form")[1].reset();
                        html = '<option value="">?????i l?? li??n h???</option>'
                        $("select[name='dealer']").find('option').remove().end().append(html);
                        alert('????ng k?? th??nh c??ng !')
                    } else {
                        alert(result.result.message)
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>
