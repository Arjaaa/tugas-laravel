<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>[x-cloak]{display:none!important}</style>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    
    <div class="min-h-screen flex items-center justify-center
    bg-gradient-to-b from-[#0f172a] via-[#020617] to-black">
    
    <div class="w-full max-w-md bg-[#020617]/90 backdrop-blur
    border border-white/10
    rounded-xl p-8 shadow-2xl">
    
    <h2 class="text-3xl font-bold text-white text-center mb-8">
        Login
    </h2>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="mb-5">
            <label class="block text-sm text-gray-400 mb-1">
                Email
                </label>
                <input type="email" name="email" required autofocus
                class="w-full rounded-lg bg-[#020617]
                border border-white/10
                text-white px-4 py-2
                focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            
            <div class="mb-6">
                <label class="block text-sm text-gray-400 mb-1">
                    Password
                </label>
                <input type="password" name="password" required
                class="w-full rounded-lg bg-[#020617]
                border border-white/10
                text-white px-4 py-2
                focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            
            <button type="submit"
            class="w-full py-3 rounded-lg
            bg-indigo-600 text-white font-semibold
            hover:bg-indigo-500 transition">
            Login
        </button>
    </form>
    
</div>
</div>
</body>
</html>