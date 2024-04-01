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
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #230c33;
        }

        nav {
            background-color: #caa8f5;
        }

        .nav-section {
            max-width: 800px;
            margin: auto auto;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
        }

        .nav-section a {
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
            color: #592e83;
            padding: 0px 10px;
            text-shadow: 1px 1px 1px #1c1515;
        }

        .card {
            background-color: #9984d4 !important;
            transition: all 0.5s ease-in-out;
        }

        .card:hover {
            border-color: #caa8f5;
            box-shadow: 0 4px 18px 0 rgba(0, 0, 0, 0.25);
        }

        .card:hover .card-button {
            transform: translate(-50%, 50%);
            opacity: 1;
        }

        .card-text {
            color: #230c33;
        }

        .card-button {
            transform: translate(-50%, 125%);
            width: 50%;
            border-radius: 1rem;
            border: none;
            background-color: #caa8f5;
            color: #230c33;
            font-size: 1rem;
            padding: .5rem 1rem;
            position: absolute;
            left: 50%;
            bottom: 0;
            opacity: 0;
            transition: 0.3s ease-out;
        }

        .bg-category {
            background-color: #592e83;
            color: #caa8f5;
        }
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

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
