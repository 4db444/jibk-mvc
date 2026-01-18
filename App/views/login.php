<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIBK - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl overflow-hidden">
        
        <div class="bg-blue-600 p-8 text-center">
            <h1 class="text-3xl font-bold text-white tracking-tight">JIBK</h1>
            <p class="text-blue-100 mt-2">Manage your wealth with confidence</p>
        </div>

        <div class="p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Welcome Back</h2>
            
            <form action="#" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" 
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" 
                            placeholder="name@company.com" required>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between mb-1">
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                    </div>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" 
                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" 
                            placeholder="••••••••" required>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transform transition active:scale-[0.98]">
                    Sign In
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-gray-600">
                Don't have an account? 
                <a href="/auth/signup" class="font-bold text-blue-600 hover:underline">Create an account</a>
            </p>
        </div>
    </div>

</body>
</html>