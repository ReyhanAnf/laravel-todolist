<header
    class="fixed z-50 shadow-sm shadow-primary flex flex-wrap w-full bg-white text-sm py-3 dark:bg-gray-950 bg-opacity-25 backdrop-blur-sm">
    <nav class="max-w-[90rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between">
        <div class="flex justify-between w-full items-center">
            <div class="sm:hidden">
                <button type="button"
                    class="hs-collapse-toggle relative size-4 flex justify-center items-center gap-x-2 rounded-lg border  text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                    id="hs-navbar-example-collapse" aria-expanded="false" aria-controls="hs-navbar-example"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-example">
                    <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <a class="flex-none text-xl font-semibold dark:text-white focus:outline-none focus:opacity-80"
                href="{{ route('dashboard') }}" aria-label="Brand">
                To-Do List
            </a>
            <div id="hs-navbar-example"
                class="hidden hs-collapse fixed sm:static top-16 bg-white dark:bg-gray-950  md:bg-transparent shadow-primary p-4 rounded-sm left-0 overflow-hidden transition-all duration-300 basis-full grow sm:block"
                aria-labelledby="hs-navbar-example-collapse">
                @if (auth()->user())
                <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                    <a class="font-medium text-gray-500 focus:outline-none" href="/dashboard"
                        aria-current="page">Dashboard</a>
                    <a class="font-medium text-gray-600 hover:text-gray-400 focus:outline-none focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                        href="/task">Task</a>
                </div>
                @endif
            </div>
            <div class="flex justify-between items-center gap-5">
                @include('components.ui.toogle-theme')

                @auth
                    <div class="shrink-0 group block">
                        <div class="flex items-center gap-3">
                            <div class="hs-dropdown relative inline-flex">
                                <button id="hs-dropdown-with-title" type="button"
                                    class="hs-dropdown-toggle py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    <svg class="hs-dropdown-open:rotate-180 size-4" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    {{ auth()->user()->username }}
                                </button>

                                <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 divide-y divide-gray-200 dark:bg-neutral-950 dark:border dark:border-neutral-700 dark:divide-neutral-700"
                                    role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-with-title">
                                    <div class="py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                                        <p class="text-sm text-gray-500 dark:text-neutral-400">Signed in as</p>
                                        <p class="text-sm font-medium text-gray-800 dark:text-neutral-300">
                                            {{ auth()->user()->email }}
                                        </p>
                                    </div>
                                    <div class="p-1 space-y-0.5">
                                        <span
                                            class="block pt-2 pb-1 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-500">
                                            Settings
                                        </span>
                                        
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                            href="#">
                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                                <circle cx="9" cy="7" r="4" />
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            </svg>
                                            Profile
                                        </a>
                                    </div>
                                    <div class="p-1 space-y-0.5">
                                        <span
                                            class="block pt-2 pb-1 px-3 text-xs font-medium uppercase text-gray-400 dark:text-neutral-500">
                                            Lanjutan
                                        </span>
                                        @include('components.auth.logout')
                                    </div>
                                </div>
                            </div>
                            <span
                                class="inline-flex items-center justify-center size-[42px] text-sm font-semibold leading-none rounded-full bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">
                                {{ auth()->user()->name[0] }}
                            </span>
                        </div>
                    </div>
                @else
                    <div class="inline-flex rounded-lg shadow-sm">
                        <a href="/login"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                            Login
                        </a>
                        <a href="/register"
                            class="py-2 px-3 inline-flex justify-center items-center gap-2 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg text-sm font-medium focus:z-10 border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                            Register
                        </a>

                    </div>
                @endauth
            </div>
        </div>
    </nav>
</header>
