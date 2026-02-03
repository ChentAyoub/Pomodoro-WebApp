<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Maticha Timer</title>
</head>
<body class="antialiased font-sans">

    <div class="fixed inset-0 -z-10 bg-gray-900">
        <img src="/images/background.jpg" alt="Background" class="w-full h-full object-cover opacity-30">
    </div>

    <nav class="fixed top-0 left-0 right-0 h-24 px-8 flex justify-between items-center z-50 bg-gradient-to-b from-black/20 to-transparent">
        <div class="flex items-center h-full">
            <img src="/images/maticha-logo.png" alt="Maticha Logo" class="mt-2 h-36 w-auto drop-shadow-2xl object-contain">
        </div>

        <div class="flex items-center space-x-4">
            <a href="/login" class="text-white/80 hover:text-white font-bold uppercase text-xs tracking-[0.2em] transition-colors">Login</a>
            <a href="/register" class="bg-red-600 hover:bg-red-700 text-white font-bold px-6 py-2.5 rounded-xl transition shadow-lg shadow-red-900/40 active:scale-95">Join</a>
        </div>
    </nav>

    <main class="min-h-screen flex items-center justify-center p-6">
        @yield('content')
    </main>

    <div class="fixed bottom-6 left-6 z-50 w-72 opacity-80 hover:opacity-100 transition-opacity">
        </div>

</body>
</html>