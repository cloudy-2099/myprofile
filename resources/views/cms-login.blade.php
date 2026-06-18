<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Inter', system-ui, sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-slate-900 flex items-center justify-center p-4">
    <div class="w-full max-w-sm">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="w-14 h-14 rounded-2xl bg-indigo-600 flex items-center justify-center font-bold text-white text-2xl shadow-lg mx-auto mb-4">C</div>
            <h1 class="text-2xl font-bold text-white">Portfolio CMS</h1>
            <p class="text-sm text-slate-400 mt-1">Sign in to manage your portfolio</p>
        </div>

        <!-- Login Card -->
        <div class="bg-slate-800 rounded-2xl p-6 border border-slate-700 shadow-xl">
            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-500/10 border border-red-500/20 rounded-lg text-red-400 text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('cms.login.post') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1.5">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full px-4 py-2.5 bg-slate-900 border border-slate-600 rounded-lg text-white text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition-colors placeholder-slate-500"
                           placeholder="admin@example.com">
                </div>
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1.5">Password</label>
                    <input type="password" name="password" required
                           class="w-full px-4 py-2.5 bg-slate-900 border border-slate-600 rounded-lg text-white text-sm focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition-colors placeholder-slate-500"
                           placeholder="••••••••">
                </div>
                <div class="flex items-center gap-2">
                    <input type="checkbox" name="remember" id="remember" class="rounded bg-slate-900 border-slate-600 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember" class="text-sm text-slate-400">Remember me</label>
                </div>
                <button type="submit" class="w-full py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold rounded-lg shadow-lg transition-colors text-sm">
                    Sign In
                </button>
            </form>
        </div>

        <p class="text-center text-xs text-slate-500 mt-6">
            <a href="/" class="hover:text-white transition-colors">← Back to Portfolio</a>
        </p>
    </div>
</body>
</html>
