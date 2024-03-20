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
                                <form action="">
                                    <div class="w-full py-1">
                                        <div class="flex flex-col gap-4">
                                            <div class="grid space-y-2">
                                                <label for="email-address" class="font-medium leading-none col-span-12 text-sm text-slate-900">Email address</label>
                                                <input type="email" placeholder="apih@example.com" class="col-span-12 h-9 rounded-md border-slate-200 bg-transparent px-3 text-sm shadow-sm transition-colors border focus-visible:ring-brand-500 placeholder:text-slate-500 focus:outline-none focus:ring-1">
                                            </div>
                                            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-brand-900 disabled:pointer-events-none disabled:opacity-50 dark:focus-visible:ring-brand-300 text-white bg-brand-500 h-9 px-4 py-2 shadow hover:bg-brand-600">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>