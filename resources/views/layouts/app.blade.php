<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
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
    <input id="sidebar-drawer" type="checkbox" class="drawer-toggle"/>
    <div class="drawer-content flex flex-col">
        <!-- Navbar -->
        <div class="w-full navbar bg-base-300">
            <div class="flex-none">
                <label for="sidebar-drawer" aria-label="open sidebar" class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         class="inline-block w-6 h-6 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </label>
            </div>
            <div class="flex-1 px-2 mx-2"><a href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a></div>
            @guest
                <div class="flex-none hidden lg:block">
                    <ul class="menu menu-horizontal">
                        <!-- Navbar menu content here -->
                        <li><a href="{{ route('register') }}" class="btn btn-outline btn-primary btn-sm mx-1">{{ __('Register') }}</a></li>
                        <li><a href="{{ route('login') }}" class="btn btn-outline btn-secondary btn-sm py-1">{{ __('Login') }}</a></li>
                    </ul>
                </div>
                <div class="flex-none lg:hidden">
                    <details class="dropdown dropdown-end">
                        <summary class="m-1 btn btn-ghost btn-circle">
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
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        </ul>
                    </details>
                </div>
            @endguest

            @auth
                <details class="dropdown dropdown-end">
                    <summary class="m-1 btn btn-ghost btn-circle">
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
                        <li><a href="{{ route('profile.show') }}">{{ __('Profile') }}</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <a href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </details>
            @endauth
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
            {{ $slot }}
            <footer class="footer items-center p-4 bg-neutral text-neutral-content">
                <aside class="items-center grid-flow-col">
                    <p>Copyright © 2024 - All right reserved</p>
                </aside>
                <nav class="grid-flow-col gap-4 md:place-self-center md:justify-self-end">
                    <a href="https://github.com/aliqasemzadeh">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/aliqasemzadeh7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                    </a>
                </nav>
            </footer>
        </main>
    </div>
    <div class="drawer-side">
        <label for="sidebar-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
        <ul class="menu p-4 w-80 min-h-full bg-base-200">
            <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
            @auth
                <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
            <li>
                <details>
                    <summary>{{ __('Student') }}</summary>
                    <ul>
                        <li><a href="{{ route('student.lesson.index') }}">{{ __('Lessons') }}</a></li>
                        <li><a href="{{ route('student.lesson.top-student') }}">{{ __('Ranking') }}</a></li>
                    </ul>
                </details>
            </li>
            @if(in_array(auth()->user()->id, config('personal.admins')))
            <li>
                <details>
                    <summary>{{ __('Teacher') }}</summary>
                    <ul>
                        <li><a href="{{ route('admin.student.index') }}">{{ __('Students') }}</a></li>
                        <li><a href="{{ route('admin.lesson.index') }}">{{ __('Lessons') }}</a></li>
                        <li><a href="{{ route('admin.workout.index') }}">{{ __('Workouts') }}</a></li>
                        <li><a href="{{ route('admin.lesson.checker') }}">{{ __('Checker') }}</a></li>
                    </ul>
                </details>
            </li>
            @endif
            @endauth
        </ul>
    </div>
</div>


@stack('modals')

@livewireScripts

</body>
</html>
