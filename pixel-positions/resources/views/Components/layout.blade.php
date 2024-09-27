<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10 ">
        <nav class="flex justify-between items-center border-b-[2px] border-white/10 bg-black py-4">
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="logo" />
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>

            </div>

            @auth
            <div class="flex items-center gap-2">
                <a href="/jobs/create">Post a job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Log out</button>
                </form>
            </div>
            @endauth

            @guest
            <div class="flex items-center gap-2">
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[1300px] w-full mx-auto">
            {{$slot}}
        </main>
    </div>
</body>

</html>