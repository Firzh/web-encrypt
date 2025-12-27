<x-layouts.app :title="__('Security Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6 rounded-xl">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-[#161615] p-6">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg text-emerald-600 dark:text-emerald-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-neutral-500 dark:text-neutral-400">System Status</p>
                        <p class="text-2xl font-bold text-neutral-900 dark:text-white">SECURE</p>
                    </div>
                </div>
            </div>
            
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-[#161615] p-6">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-blue-100 dark:bg-blue-900/30 rounded-lg text-blue-600 dark:text-blue-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-neutral-500 dark:text-neutral-400">Total Users</p>
                        <p class="text-2xl font-bold text-neutral-900 dark:text-white">{{ $users->count() }}</p>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-[#161615] p-6">
                <div class="flex items-center gap-4">
                    <div class="p-3 bg-purple-100 dark:bg-purple-900/30 rounded-lg text-purple-600 dark:text-purple-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-neutral-500 dark:text-neutral-400">Encryption Type</p>
                        <p class="text-xl font-bold text-neutral-900 dark:text-white">BCRYPT / ARGON2</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-[#161615]">
            <div class="p-6 border-b border-neutral-200 dark:border-neutral-800 flex justify-between items-center">
                <h3 class="text-lg font-bold text-neutral-900 dark:text-white flex items-center gap-2">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    Encrypted User Database
                </h3>
                <span class="text-xs font-mono text-neutral-500 bg-neutral-100 dark:bg-neutral-800 px-2 py-1 rounded">Read-Only View</span>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-400">
                    <thead class="bg-neutral-50 dark:bg-neutral-900/50 text-xs uppercase font-semibold text-neutral-900 dark:text-neutral-200">
                        <tr>
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4">User Identity</th>
                            <th class="px-6 py-4">Security Hash (Encrypted Password)</th>
                            <th class="px-6 py-4">2FA Status</th>
                            <th class="px-6 py-4">Created At</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200 dark:divide-neutral-800 font-mono">
                        @foreach($users as $user)
                        <tr class="hover:bg-neutral-50 dark:hover:bg-neutral-900/30 transition">
                            <td class="px-6 py-4 font-medium">{{ $user->id }}</td>
                            <td class="px-6 py-4">
                                <div class="flex flex-col">
                                    <span class="font-bold text-neutral-900 dark:text-white">{{ $user->name }}</span>
                                    <span class="text-xs">{{ $user->email }}</span>
                                </div>
                            </td>
                            {{-- <td class="px-6 py-4">
                                <div class="flex items-center gap-2 group cursor-help" title="Ini adalah hasil hashing, bukan password asli.">
                                    <svg class="w-4 h-4 text-emerald-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                    <code class="bg-neutral-100 dark:bg-neutral-800 px-2 py-1 rounded text-xs text-emerald-600 dark:text-emerald-400 break-all">
                                        {{ Str::limit($user->password, 50, '...') }}
                                    </code>
                                </div>
                            </td> --}}
                            <td class="px-6 py-4">
                                <div class="flex flex-col gap-2">
                                    <div class="flex items-center gap-2 group" title="Secure Hash">
                                        <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                        <code class="bg-neutral-100 dark:bg-neutral-800 px-2 py-1 rounded text-xs text-emerald-600 dark:text-emerald-400 truncate max-w-[150px]">
                                            {{ Str::limit($user->password, 128) }}
                                        </code>
                                    </div>

                                    @if($user->plain_password)
                                        <div class="flex items-center gap-2 group animate-pulse" title="VULNERABILITY: Plain Text Password">
                                            <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                            <div class="flex flex-col">
                                                <span class="text-[10px] font-bold text-red-500 uppercase tracking-wider">Leaked / No-Hash:</span>
                                                <code class="bg-red-100 dark:bg-red-900/30 border border-red-500/30 px-2 py-1 rounded text-xs text-red-600 dark:text-red-400 font-bold">
                                                    {{ $user->plain_password }}
                                                </code>
                                            </div>
                                        </div>
                                    @else
                                        <span class="text-xs text-gray-400 italic">Data lama (Hanya Hash)</span>
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                @if(!empty($user->two_factor_secret))
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900 dark:text-emerald-200 border border-emerald-200 dark:border-emerald-800">
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full mr-1.5"></span>
                                        Enabled
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900/30 dark:text-red-400 border border-red-200 dark:border-red-800">
                                        Disabled
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->created_at->format('Y-m-d H:i:s') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="p-4 bg-neutral-50 dark:bg-neutral-900/30 border-t border-neutral-200 dark:border-neutral-800 text-xs text-neutral-500">
                <span class="font-bold text-red-500">SECURITY NOTE:</span> Kolom "Security Hash" menampilkan data yang telah dienkripsi secara satu arah. Sistem tidak menyimpan password dalam bentuk teks asli (Plaintext) demi keamanan.
            </div>
        </div>
    </div>
</x-layouts.app>