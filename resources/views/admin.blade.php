<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ecommerce Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/../assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="/../assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/../assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="/../assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/../assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="/../assets/css/style.css">
    <link rel="stylesheet" href="/../assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            {{-- @include('layoutWeb.navbar-admin') --}}
            @include('layoutWeb.sidebarAdmin')
            <div class="main-content">
                <section class="section">
                    @yield('container')
                </section>
            </div>
        </div>
    </div>
    @include('layoutWeb.footer')
    <!-- General JS Scripts -->
    <script src="/../assets/modules/jquery.min.js"></script>
    <script src="/../assets/modules/popper.js"></script>
    <script src="/../assets/modules/tooltip.js"></script>
    <script src="/../assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="/../assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="/../assets/modules/moment.min.js"></script>
    <script src="/../assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/../assets/modules/jquery.sparkline.min.js"></script>
    <script src="/../assets/modules/chart.min.js"></script>
    <script src="/../assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="/../assets/modules/summernote/summernote-bs4.js"></script>
    <script src="/../assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="/../assets/js/page/index.js"></script>
    <!-- Template JS File -->
    <script src="/../assets/js/scripts.js"></script>
    <script src="/../assets/js/custom.js"></script>

    {{-- summernote --}}
    <script>
        $(document).ready(function() {
            $("#summernote").summernote();
            $('.dropdown-toggle').dropdown();
        });
    </script>
    {{-- img preview --}}
    <script>
        function previewImage() {
            // mengambil input image
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            // perintah mengambil data gambar
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.image);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</body>

</html>
