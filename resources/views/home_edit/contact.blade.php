@extends("home_edit.template")
@section("content")
    


<style>
    .bg-responsive {
        background-image: url('../../resource/1741103552_67c721c056e29portada-contactanos-escritorio.jpg');
        height: 82vh;
        background-size: cover;
        /* height: 85vh; */
    }

    /* Para pantallas medianas (tablets) */
    @media (max-width: 987px) {
        .bg-responsive {
            height: 82vh;
            background-size: cover;
            background-image: url('../../resource/1741103615_67c721ff7b3edportada-contactanos-tablet.jpg');
        }
    }

    /* Para pantallas pequeñas (móviles) */
    @media (max-width: 575px) {
        .bg-responsive {
            height: 52vh;
            width: 100%;
            background-size: cover;
            background-image: url('../../resource/1741103629_67c7220d1ecaeportada-contactanos-celular.jpg');
        }
    }
</style>

 



@endsection