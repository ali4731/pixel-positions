<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-black text-white ">
    <div class="px-20 ">

        <nav class="flex justify-between items-center py-4 border-b  border-white/15">
            <div>logo</div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            @auth
                <div class="flex space-x-6 font-bold">
                    <a href="/jobs/create">Post a job</a>
                    <form method="POST" action="/logout">
                    @csrf

                    @method('DELETE')
                    <button>Logout</button>
                </form>
                </div>
                
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>

            @endguest()
        </nav>


        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>


    </div>
    
</body>
</html>