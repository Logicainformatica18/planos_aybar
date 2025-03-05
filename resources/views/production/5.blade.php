@extends('production.1')
@section('content')
    <style>
        .bg-responsive {
            background-image: url('../../resource/1740848426_67c33d2a32317portada-blog-escritorio.jpg');
            height: 82vh;
            background-size: cover;
            /* height: 85vh; */
        }

        /* Para pantallas medianas (tablets) */
        @media (max-width: 987px) {
            .bg-responsive {
                height: 82vh;
                background-size: cover;
                background-image: url('../../resource/1740848441_67c33d393ea48portada-blog-tablet.jpg');
            }
        }

        /* Para pantallas pequeñas (móviles) */
        @media (max-width: 575px) {
            .bg-responsive {
                height: 52vh;
                width: 100%;
                background-size: cover;
                background-image: url('../../resource/1740848453_67c33d45dcafaportada-blog-celular.jpg');
            }
        }
    </style>
    <!-- INICIO SECCION -->
<div class="py-1 position-relative bg-responsive" style="
background-position: center;
background-repeat: no-repeat;

">
        <div class="d-none d-sm-block text-center text-white position-absolute start-50 translate-middle" style="bottom:5%;width:500px">
            <h4 class="p-2  text-center fs-6" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
                <span style="color:#ffffff">NOTICIAS</span><br> RELACIONADAS
            </h4>
            <div class="subrayado mx-auto "></div>

        </div>

        <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="top:12%;width:290px">
            <img src="../../resource/1738076896_logo%20aybar%20blanco.svg" width="75px" alt="" srcset="">
        </div>
        <div class=" d-sm-none text-center text-white position-absolute start-50 translate-middle" style="bottom:5%;width:300px">
            <h4 class="p-2  text-center fs-3" style="font-family:Montserrat-SemiBold;letter-spacing:15px">
                <span style="color:#ffffff">NOTICIAS</span><br> RELACIONADAS
            </h4>

            <div class="subrayado mx-auto "></div>

        </div>
    </div>
<div class="container  my-5">
        <div class="row g-4 justify-content-center" id="mycontent">

        </div>
    </div>
<!-- FIN SECCION -->

    <script>
        topicPublic();
    </script>
@endsection
