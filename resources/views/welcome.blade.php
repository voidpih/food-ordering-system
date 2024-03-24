<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
    </style>
</head>

<body class="font-sans antialiased text-slate-500">
    <div class="flex min-h-full flex-col">
        <div class="flex h-full flex-1 flex-col">
            <div class="flex flex-1">
                <aside class="flex-1 basis-1/4"></aside>
                <main class="flex flex-1 flex-shrink-0 flex-col items-center border-l">
                    <div class="flex w-full max-w-sm flex-1 flex-col justify-center">
                        <div class="mb-10">
                            <h1 class="text-slate-900 font-semibold lg:text-3xl mb-2 mt-8">Welcome back</h1>
                            <h6 class="text-sm leading-6">
                                Sign in to your account to continue.
                            </h6>
                        </div>
                        <div class="flex flex-col gap-5">
                            <div class="relative">
                                @livewire('sign-in')
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
