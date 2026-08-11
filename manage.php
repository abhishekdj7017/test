
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Landing Page HT</title>
     <link rel="icon" type="image/png" href="https://landing.harshtech.site/webicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;800&display=swap" rel="stylesheet">
    <style>
        body { background: #020617; font-family: 'Plus Jakarta Sans', sans-serif; color: white; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; padding: 20px; }
        .glass-login { background: rgba(15, 23, 42, 0.4); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.05); border-radius: 24px; padding: 40px; width: 100%; max-width: 380px; text-align: center; }
    </style>
</head>
<body>
    <div class="glass-login">
        <h1 class="text-2xl font-black italic mb-2 tracking-tighter uppercase">Login<span class="text-blue-500">Account</span></h1>
                    <p class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mb-8">Secure Access Only</p>
                        <form method="POST" class="space-y-4">
                <input type="text" name="user" placeholder="Username / Email" class="w-full bg-black/40 border border-white/10 p-4 rounded-2xl text-center focus:border-blue-500 outline-none text-white text-sm" required>
                <input type="password" name="pass" placeholder="Password" class="w-full bg-black/40 border border-white/10 p-4 rounded-2xl text-center focus:border-blue-500 outline-none text-white text-sm" required>
                <button name="login" class="w-full bg-blue-600 hover:bg-blue-500 py-4 rounded-2xl font-black text-xs uppercase tracking-widest text-white transition-all">Login </button>
            </form>
                <div class="mt-6 pt-4 border-t border-white/5">
            <a href="register.php" class="text-blue-400 text-[10px] font-black uppercase tracking-widest hover:text-white transition">Create Account </a>
        </div>
    </div>
</body>
</html>
