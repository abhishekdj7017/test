

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lifetime Access | Register</title>
     <link rel="icon" type="image/png" href="webicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background: #020617; font-family: 'Plus Jakarta Sans', sans-serif; color: white; }
        .glass { background: rgba(15, 23, 42, 0.6); backdrop-filter: blur(20px); border: 1px solid rgba(255, 255, 255, 0.05); }
        .input-glass { background: rgba(0, 0, 0, 0.3); border: 1px solid rgba(255, 255, 255, 0.1); outline: none; transition: 0.3s; color: white; }
        .input-glass:focus { border-color: #3b82f6; }
    </style>
</head>

<body class="flex items-center justify-center p-4 min-h-screen">
    <div class="glass w-full max-w-[420px] rounded-[40px] p-10">
                    <h1 class="text-3xl font-black italic tracking-tighter uppercase mb-2 text-center">REGISTER<span class="text-blue-500">ACCOUNT</span></h1>
            <p class="text-[9px] font-bold text-gray-500 uppercase tracking-[0.3em] mb-8 text-center italic">Deployment Protocol v2.0</p>

            
            <form method="POST" class="space-y-4">
                                    <input type="text" name="user" required placeholder="USERNAME" class="input-glass w-full px-6 py-4 rounded-2xl text-xs font-bold uppercase">
                    <input type="email" name="email" required placeholder="EMAIL ADDRESS" class="input-glass w-full px-6 py-4 rounded-2xl text-xs font-bold uppercase">
                    <input type="number" name="mobile" required placeholder="MOBILE NUMBER" class="input-glass w-full px-6 py-4 rounded-2xl text-xs font-bold uppercase">
                    <input type="password" name="pass" required placeholder="SECURE PASSWORD" class="input-glass w-full px-6 py-4 rounded-2xl text-xs font-bold uppercase">
                    <button name="send_otp" class="w-full bg-blue-600 py-5 rounded-2xl font-black uppercase text-[10px] tracking-widest text-white mt-4 shadow-lg shadow-blue-900/40"> Register </button>
                            </form>
            <p class="text-center mt-8 text-[9px] font-bold text-gray-600 uppercase tracking-widest">Already Registered? <a href="manage.php" class="text-blue-500">Login</a></p>
            </div>
</body>
</html>
