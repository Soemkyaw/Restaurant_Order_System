<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
    </style>
</head>

<body>
    <nav>
        <section class="nav-section">
            <a href="/">
                <i class="fa-solid fa-utensils me-2"></i>Shal Sar
            </a>
            <a href="">Order List</a>
        </section>
    </nav>

    {{-- content start --}}
    @yield('content')
    {{-- content end --}}

    <footer class="mt-5">
        <div class="container mb-3">
            <div class=" row">
                <div class="col pt-3">
                    <h4>Be the first to know!</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut similique sapiente,
                        cumque magnam officia minus laudantium vel eveniet rem?</p>
                </div>
                <div class="col pt-3 ">
                    <input type="text" class="mx-auto" placeholder="Name">
                    <input type="email" class="mx-auto" placeholder="Email">
                    <input type="submit" class="mx-auto subscribe" value="Subscribe">
                </div>
            </div>
        </div>
        <div class=" copy-right">
            <div class="container ">
                <div class="row">
                    <div class="col-auto col-lg-6 py-2">
                        <span class="">@ 2024 Shal Sar Restaurant.All Right Reserved</span>
                    </div>
                    <div class="col-auto col-lg-6 mx-auto py-2">
                        <a href="" class=""><span class=""><i
                                    class="fa-brands fa-square-facebook fs-3 me-3"></i></span></a>
                        <a href="" class=""><span class=""><i
                                    class="fa-brands fa-square-instagram fs-3 me-3"></i></span></a>
                        <a href="" class=""><span class=""><i
                                    class="fa-brands fa-square-github fs-3 me-3"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="{{ asset('js/app.js') }}"></script>

</html>
