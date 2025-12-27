<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WebEncrypt - Secure System</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=jetbrains-mono:400,500,600" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
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

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col min-h-screen justify-center items-center">
        
        <header class="absolute top-0 w-full py-6 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                <span class="text-xl font-bold tracking-widest text-white">WEB<span class="text-emerald-500">ENCRYPT</span></span>
            </div>
            
            @if (Route::has('login'))
                <nav class="flex gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-4 py-2 text-sm font-semibold text-emerald-400 border border-emerald-500/30 rounded hover:bg-emerald-500/10 transition">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 text-sm font-semibold text-white hover:text-emerald-400 transition">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-semibold bg-emerald-600 text-black rounded hover:bg-emerald-500 transition shadow-[0_0_15px_rgba(16,185,129,0.4)]">
                                Initialize Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="text-center max-w-3xl z-10">
            <div class="mb-6 inline-flex items-center px-3 py-1 rounded-full border border-emerald-500/30 bg-emerald-900/20 text-emerald-400 text-xs tracking-wide">
                <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                SYSTEM SECURE & READY
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-white mb-6">
                Amankan Data <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-cyan-500">Digital Anda</span>
            </h1>

            <p class="text-lg text-gray-400 mb-10 leading-relaxed">
                Implementasi standar keamanan enkripsi modern. Kami melindungi data sensitif Anda menggunakan algoritma hashing satu arah dan autentikasi berlapis.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">
                <div class="p-6 rounded-xl border border-gray-800 bg-gray-900/50 backdrop-blur hover:border-emerald-500/50 transition duration-300">
                    <div class="w-10 h-10 bg-emerald-900/30 rounded flex items-center justify-center mb-4 text-emerald-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Secure Hashing</h3>
                    <p class="text-sm text-gray-500">Password disimpan menggunakan Bcrypt/Argon2. Tidak ada teks biasa.</p>
                </div>

                <div class="p-6 rounded-xl border border-gray-800 bg-gray-900/50 backdrop-blur hover:border-blue-500/50 transition duration-300">
                    <div class="w-10 h-10 bg-blue-900/30 rounded flex items-center justify-center mb-4 text-blue-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.2-2.858.567-4.171"></path></svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Two-Factor Auth</h3>
                    <p class="text-sm text-gray-500">Lapisan keamanan tambahan untuk mencegah akses tidak sah.</p>
                </div>

                <div class="p-6 rounded-xl border border-gray-800 bg-gray-900/50 backdrop-blur hover:border-purple-500/50 transition duration-300">
                    <div class="w-10 h-10 bg-purple-900/30 rounded flex items-center justify-center mb-4 text-purple-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Data Integrity</h3>
                    <p class="text-sm text-gray-500">Struktur database terstandarisasi memastikan konsistensi data.</p>
                </div>
            </div>
        </main>

        <footer class="absolute bottom-6 text-sm text-gray-600">
            &copy; {{ date('Y') }} WebEncrypt Security Module. All rights reserved.
        </footer>
    </div>
</body>
</html>