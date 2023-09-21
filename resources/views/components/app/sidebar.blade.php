<aside id="sidebar"
    class="flex flex-col bg-slate-800 dark:bg-[#0C0E13] border-r border-gray-900 absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64  lg:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out -translate-x-64">
    <!-- Sidebar header -->
    <header class="flex justify-between mb-10 pr-3 sm:px-2">
        <!-- Close button -->
        <button class="lg:hidden text-slate-500 hover:text-slate-400">
            <span class="sr-only">Close sidebar</span>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
            </svg>
        </button>
        <!-- Logo-->
        <a href="/" class="block">
            <x-application-logo class="block h-12 w-auto fill-current text-gray-200 dark:text-gray-200" />
        </a>
    </header>

    <!-- Navigation Links -->
    <nav class="space-y-8">
        <div>
            <h3 class="text-xs uppercase text-slate-500 font-semibold pl-3">
                <span class="lg:block 2xl:block">Pages</span>
            </h3>
            <ul class="mt-3">
                <!-- Dashboard -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <div class="flex items-center">
                        <svg class="shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>
                        <span class="text-sm font-medium ml-3 lg:opacity-100 2xl:opacity-100 duration-200">
                            {{ __('Dashboard') }}
                        </span>
                    </div>
                </x-nav-link>
            </ul>
        </div>
    </nav>
</aside>