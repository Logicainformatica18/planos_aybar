@extends("home_edit.template")
@section("content")



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


@endsection
