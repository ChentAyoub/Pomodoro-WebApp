<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Maticha Timer</title>
</head>
<body class="antialiased font-sans bg-gray-900 text-white overflow-x-hidden">

    <div class="fixed inset-0 -z-10">
        <img src="/images/background.jpg" alt="Background" class="w-full h-full object-cover opacity-30">
    </div>

    <nav class="fixed top-0 left-0 right-0 h-24 px-8 flex justify-between items-center z-50 bg-gradient-to-b from-black/40 to-transparent">
        <div class="flex items-center">
            <img src="/images/maticha-logo.png" alt="Maticha Logo" class="mt-2 h-36 w-auto drop-shadow-2xl">
        </div>

        <div class="flex items-center space-x-6">
            @auth
                @if(auth()->user()->friendRequests->count() > 0)
                    <div class="relative group cursor-pointer">
                        <i class="fas fa-bell text-white/60 hover:text-white transition"></i>
                        <span class="absolute -top-2 -right-2 bg-red-600 text-[10px] font-bold px-1.5 py-0.5 rounded-full animate-bounce">
                            {{ auth()->user()->friendRequests->count() }}
                        </span>
                    </div>
                @endif

                <div class="flex items-center space-x-4 bg-white/5 backdrop-blur-md p-1.5 pr-4 rounded-full border border-white/10">
                    <a href="/profile" class="flex items-center space-x-3 group">
                        <img src="{{ auth()->user()->avatar ?? asset('images/default-avatar.png') }}" 
                             alt="Profile" 
                             class="w-8 h-8 rounded-full border border-white/20 group-hover:border-red-500 transition object-cover">
                        <span class="text-xs font-bold uppercase tracking-wider hidden md:block">{{ auth()->user()->name }}</span>
                    </a>

                    <div class="h-4 w-[1px] bg-white/10"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-[10px] font-black uppercase tracking-[0.2em] text-white/40 hover:text-red-500 transition">
                            Log Out
                        </button>
                    </form>
                </div>
            @else
                <a href="/login" class="text-white/80 hover:text-white font-bold uppercase text-xs tracking-widest transition">Login</a>
                <a href="/register" class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-2 rounded-xl transition shadow-lg shadow-red-900/40">Join</a>
            @endauth
        </div>
    </nav>

    <div class="flex pt-32 min-h-screen">
        
        <aside class="hidden xl:flex w-80 p-6 flex-col justify-end fixed bottom-0 left-0 z-40">
            <div class="bg-black/40 backdrop-blur-xl rounded-[2rem] p-3 border border-white/10 shadow-2xl overflow-hidden transition-all duration-500">
                <div class="flex items-center space-x-2 mb-3 px-2">
                    <i class="fab fa-spotify text-[#1DB954] text-xl"></i>
                    <span class="text-xs font-black uppercase tracking-[0.2em] text-white/60">Focus Radio</span>
                </div>
                <iframe data-testid="embed-iframe" style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0RO75eA9m1xzrRXcSR8TAx?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            </div>
        </aside>
                    
        <main class="flex-1 flex flex-col items-center px-6">
            @yield('content')
            
            <div class="mt-12 w-full max-w-xl bg-white/5 backdrop-blur-md rounded-[2rem] p-8 border border-white/10 mb-20">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-black tracking-tight">MY TASKS</h3>
                    <button class="text-xs bg-white/10 hover:bg-white/20 px-3 py-1 rounded-full transition">Add New</button>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center p-4 bg-white/5 rounded-xl border border-white/5 group hover:border-red-500/50 transition">
                        <input type="checkbox" class="w-5 h-5 rounded-full border-white/20 bg-transparent text-red-600 focus:ring-0">
                        <span class="ml-4 text-white/80 group-hover:text-white">Complete JavaScript Engine</span>
                    </div>
                </div>
            </div>
        </main>
        @auth

        <aside class="hidden lg:block w-72 p-8 bg-black/20 backdrop-blur-xl border-l border-white/5 fixed right-0 top-0 h-full">
            <div class="mt-24">
                <h3 class="text-sm font-bold opacity-40 uppercase tracking-[0.2em] mb-8">Squad Activity</h3>
                <div class="space-y-8">
                    @forelse(auth()->user()->friends as $friend)
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <img src="{{ $friend->avatar ?? asset('images/default-avatar.png') }}" 
                                 class="w-10 h-10 rounded-full border border-white/10 object-cover">
                            
                            <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-gray-900 animate-pulse"></div>
                        </div>
                        <div>
                            <p class="text-sm font-bold">{{ $friend->name }}</p>
                            <p class="text-xs text-white/40">
                                {{ $friend->pomodoroSessions()->where('status', 'focus')->latest()->first()?->task?->title ?? 'Taking a break...' }}
                            </p>
                        </div>
                    </div>
                    @empty
                    <p class="text-xs text-white/30 italic">Your squad is empty. Add friends to stay focused together!</p>
                @endforelse
                </div>
            </div>
        </aside>
        @endauth
    </div>

</body>
</html>