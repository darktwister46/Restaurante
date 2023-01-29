<x-guest-layout>

    <!-- ------------------------ Splide Hero Section ------------------------ -->
    <section class="splide my-4" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="{{ url('/menus') }}">
                        <img src="{{ url('images/splide/landing-page/hero-slide-1.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="{{ url('/reservation/step-one') }}">
                        <img src=" {{ url('images/splide/landing-page/hero-slide-2.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </a>
                </li>
                <li class="splide__slide">
                    <a href="{{ url('/reservation/step-one') }}">
                        <img src="{{ url('images/splide/landing-page/hero-slide-3.png') }}" class="d-block w-100"
                            style="border-radius:8px;">
                    </a>
                </li>
                <li class="splide__slide">
                    <img src="{{ url('images/splide/landing-page/hero-slide-4.png') }}" class="d-block w-100"
                        style="border-radius:8px;">
                </li>
            </ul>
        </div>
    </section>

    <!-- ------------------------ Seccion menús ------------------------ -->
    <section class="my-100">
        <div class="container">
            <div class="row mt-5 text-center">
                <small class="text-warning text-uppercase fw-bold">Menús disponibles en nuestro restaurante</small>
                <h1 class="fw-bold">¡Prueba nuestro menús especiales hoy!</h1>
                <p>No olvide realizar su reserva primero en nuestro sitio web para probar nuestros menus.</p>
            </div>
            <div class="row mt-4">
                <div class="container">
                    <div class="swiper menu-swiper">
                        <div class="swiper-wrapper">
                            @forelse ($menus as $menu)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img src="{{ Storage::url($menu->image) }}"
                                            class="card-img-top card-img-top-landing-page" />
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold"> {{ $menu->name }}</h5>
                                            <div class="category-card-description-wrapper">
                                                <p class="card-text category-card-description" style="font-size: 13px;">
                                                    {{ $menu->description }}
                                                </p>
                                            </div>
                                            <hr>
                                            <h5 class="fw-semibold">{{ $menu->price }}€</h5>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No hay menús disponibles en este momento.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <a href="{{ url('/menus') }}"
                            class="btn btn-warning text-white px-4 mx-auto text-center col-10 col-md-3 my-3 fw-bold">Ver
                            Todas
                            &nbsp; <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Seccion tutorial reserva ------------------------ -->
    <section class="my-100" id="tentang-kami">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-7 mb-4 mb-lg-0 my-auto">
                    <div class="splide splide2">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/reservation-features-images.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/reservation-features-images-2.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/reservation-features-images-3.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/reservation-features-images-4.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                                <div class="splide__slide" data-splide-interval="600">
                                    <img src="{{ url('images/landing-page/reservation-features-images-5.png') }}"
                                        class="img-fluid shadow-images" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="
                    col-12 col-md-12 col-lg-4
                    ms-auto
                    text-center text-md-start text-lg-start
                    my-auto
                  ">
                    <p class="mb-0 fw-bold text-warning">Reserva en nuestra web</p>
                    <h2 class="fw-bold">¡Reservar es más facil que nunca en nuestra pagina web!</h2>
                    <div class="row mt-4">
                        <div class="col-3 col-md-2 col-lg-3 mx-auto">
                            <div class="p-1 bg-warning rounded-logo text-center">
                                <i class="fab fa-wpforms py-3" style="color: white; font-size:24px"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                            <h5 class="mb-1 fw-semibold">Introduzca sus datos personales</h5>
                            <small>Nombre, número de teléfono, correo electrónico para poder confirmar la reserva y recordarselo en su correo</small>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3 col-md-2 col-lg-3 mx-auto">
                            <div class="p-1 bg-warning rounded-logo text-center">
                                <i class="fas fa-chair py-3" style="color: white; font-size:24px"></i>
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-9 mt-3 mt-md-0 mt-lg-0">
                            <h5 class="mb-1 fw-semibold">Seleccione una mesa disponible para la fecha que desee</h5>
                            <small>Elige la mesa que prefieras y dinos a que fecha y hora debe estar preparada</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Seccion galería fotos ------------------------ -->
    <section class="my-100" id="galeri-outlet">
        <div class="container">
            <div class="text-center mb-5">
                <small class="text-warning fw-bold text-uppercase">Galería de fotos de nuestro restaurante</small>
                <h1 class="fw-bold">Variedad de fotos sobre nuestro restaurante y nuestro personal</h1>
                <p>!Disfruta de las fotos de nuestro restaurante y personal cualificado!</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp"
                        class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Testimonials Section ------------------------ -->
    <section class="my-100">
        <div class="container">
            <div class="text-center mb-5">
                <small class="text-warning fw-bold text-uppercase">¿Qué dicen sobre nosotros?</small>
                <h1 class="fw-bold">Opiniones de nuestros clientes</h1>
                <p>Las opiniones no engaña y a nuestros clientes le gusta lo mejor, solo debes comprobarlo 😜</p>
            </div>
            <div class="row">
                <div class="container">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card card-in-home bg-warning text-white">
                                    <div class="card-body">
                                        <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                        <h5 class="card-title lh-lg fw-bold">
                                            El mejor lugar para comer en familia.
                                        </h5>
                                        <p class="card-text mb-4">
                                            He venido con mis hijos y mi exmujer. Les ha encantado tanto la comida que
                                            me he vuelto a casar con ella. Gracias por ofrecer vuestros servicios, me
                                            habeis arreglado la vida!
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <div class="col-2 col-md-2 my-auto">
                                                <img src="{{URL::asset("images/feedback/andres.jpeg")}}"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-10 col-md-10 my-auto">
                                                <p class="mb-0 fw-bold">
                                                    Andrés
                                                </p>
                                                <small>Cordobés, 22 años</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-in-home bg-warning text-white">
                                    <div class="card-body">
                                        <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                        <h5 class="card-title lh-lg fw-bold">
                                            ¡Comida realmente deliciosa!
                                        </h5>
                                        <p class="card-text mb-4">
                                            Lo recomiendo bastante, he salido de aquí con el estómago lleno y una
                                            sonrisa en la cara, además de lo saludable que son vuestros menús y me
                                            ayudaran a seguir con mi entrenamiento de hombro en el gimnasio 👌👌👌
                                        <hr />
                                        <div class="row">
                                            <div class="col-2 col-md-2 my-auto">
                                                <img src="{{ URL::asset('images/feedback/alvaro.jpeg') }}"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-10 col-md-10 my-auto">
                                                <p class="mb-0 fw-bold">
                                                    Álvaro
                                                </p>
                                                <small>Italiano, 29 años</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card card-in-home bg-warning text-white">
                                    <div class="card-body">
                                        <h5 class="card-title lh-lg">⭐⭐⭐⭐⭐</h5>
                                        <h5 class="card-title lh-lg fw-bold">
                                            Rapidez y buen servicio impresionante!
                                        </h5>
                                        <p class="card-text mb-4">
                                            Esto es lo mejor que he probado en mi vida! Vine con mi amigo Santiago y nos
                                            encantó la comida. Servicio estupendo, para repetir!
                                        </p>
                                        <hr />
                                        <div class="row">
                                            <div class="col-2 col-md-2 my-auto">
                                                <img src="{{ URL::asset('images/feedback/javier.jpeg') }}"
                                                    class="img-fluid rounded" />
                                            </div>
                                            <div class="col-10 col-md-10 my-auto">
                                                <p class="mb-0 fw-bold">
                                                    Javier
                                                </p>
                                                <small>Egipcio, 34 años</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ CTA Social Media Section ------------------------ -->
    <section>
        <div class="container mb-5">
            <div class="row rounded mx-auto " style="background-color: #fcca29">
                <div class="col-md-7 my-auto text-white px-5 py-5">
                    <h2 class="fw-bold text-white">Visita nuestro perfil de Instagram!</h2>
                    <p>
                        Siguenos en nuestro perfil de Instagram y enterate de todas las novedades que tenemos para ti.
                    </p>
                    <a href='#' target="_blank" class="btn btn-outline-light mt-2 px-4 py-2"
                        style="font-weight:500;">Ir a Instagram
                        ⇾</a>
                </div>
                <div class="col-md-4 background-cta ms-auto">
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
