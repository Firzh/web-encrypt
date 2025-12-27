<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=jetbrains-mono:400,500,600" rel="stylesheet" />
        <style>
            body { font-family: 'JetBrains Mono', monospace; }
            .cyber-grid {
                background-image: linear-gradient(rgba(0, 255, 65, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 255, 65, 0.03) 1px, transparent 1px);
                background-size: 30px 30px;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-950 text-gray-200 cyber-grid min-h-screen flex flex-col relative overflow-x-hidden">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[500px] bg-emerald-500/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="relative flex min-h-svh flex-col items-center justify-center gap-6 p-6 md:p-10 z-10">
            <div class="flex w-full max-w-md flex-col gap-6">
                <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                    <div class="flex items-center gap-2 mb-2">
                        <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        <span class="text-xl font-bold tracking-widest text-white">WEB<span class="text-emerald-500">ENCRYPT</span></span>
                    </div>
                    <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
                </a>

                <div class="flex flex-col gap-6 p-8 rounded-xl border border-gray-800 bg-gray-900/50 backdrop-blur shadow-2xl">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>