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

    <nav class="fixed top-6 right-6 z-50">
        <div class="flex space-x-4">
            <a href="/login" class="text-white bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg hover:bg-white/20 transition">Login</a>
            <a href="/register" class="text-white bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700 transition">Join</a>
        </div>
    </nav>

    <main class="min-h-screen flex items-center justify-center p-6">
        @yield('content')
    </main>

    <div class="fixed bottom-6 left-6 z-50 w-72 opacity-80 hover:opacity-100 transition-opacity">
        </div>

</body>
</html>