<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
<div class="drawer">
    <input id="my-drawer-3" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content flex flex-col">
        <!-- Navbar -->
        <div class="w-full navbar bg-base-300 sticky top-0">
            <div class="flex-none">
                <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         class="inline-block w-6 h-6 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </label>
            </div>
            <div class="flex-1 navbar-center">{{ config('app.name', 'Laravel') }}</div>
            <div class="flex-none hidden lg:block">
                <ul class="menu menu-horizontal">
                    <!-- Navbar menu content here -->
                    <li><a href="{{ route('register') }}" class="btn btn-outline btn-primary btn-sm mx-1">Register</a></li>
                    <li><a href="{{ route('login') }}" class="btn btn-outline btn-secondary btn-sm py-1">Login</a></li>
                </ul>
            </div>
            <div class="flex-none lg:hidden">
                <details class="dropdown">
                    <summary class="m-1 btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle"
                             width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                             stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"/>
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"/>
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"/>
                        </svg>
                    </summary>
                    <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </details>
            </div>
        </div>
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page content here -->
        <main>
            <div class="hero min-h-screen bg-base-200">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div class="text-center lg:text-left">
                        <h1 class="text-5xl font-bold">Login now!</h1>
                        <p class="py-6">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    </div>
                    <div class="card shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                        <form class="card-body">
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Email</span>
                                </label>
                                <input type="email" placeholder="email" class="input input-bordered" required />
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Password</span>
                                </label>
                                <input type="password" placeholder="password" class="input input-bordered" required />
                                <label class="label">
                                    <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                                </label>
                            </div>
                            <div class="form-control mt-6">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div class="drawer-side">
        <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 min-h-full bg-base-200">
            <!-- Sidebar content here -->
            <li><a>Sidebar Item 1</a></li>
            <li><a>Sidebar Item 2</a></li>
        </ul>
    </div>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
