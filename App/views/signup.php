<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIBK - Create Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl overflow-hidden my-8">
        
        <div class="bg-blue-600 p-6 text-center">
            <h1 class="text-2xl font-bold text-white tracking-tight">JIBK</h1>
            <p class="text-blue-100 text-sm mt-1">Start your journey to financial freedom</p>
        </div>

        <div class="p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Create Account</h2>
            
            <form action="/auth/signup" method="post" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" 
                            name="username"
                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" 
                            placeholder="John Doe" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" 
                            name="email"
                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" 
                            placeholder="name@company.com" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" 
                            name="password"
                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" 
                            placeholder="••••••••" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-shield-check"></i>
                        </span>
                        <input type="password" 
                            name="password_confirmation"
                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" 
                            placeholder="••••••••" required>
                    </div>
                </div>

                <!-- ======================= cards ========================= -->

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Card</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-shield-check"></i>
                        </span>
                        <input type="text" 
                            name="card"
                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition" 
                            placeholder="My Card" required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Card type</label>
                    <div class="relative">
                        <select
                            class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition"
                            name="card_type" 
                            id="card_type"
                            required
                        >
                            <option value="" disabled selected>Select Your Card Type</option>
                            <option value="visa" >VISA</option>
                            <option value="mastercard" >MASTERCARD</option>

                        </select>
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="fa-solid fa-shield-check"></i>
                        </span>
                    </div>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 shadow-lg shadow-blue-200 transform transition active:scale-[0.98] mt-4">
                    Create Free Account
                </button>
            </form>

            <p class="mt-8 text-center text-sm text-gray-600">
                Already have an account? 
                <a href="/auth/login" class="font-bold text-blue-600 hover:underline">Sign in here</a>
            </p>
        </div>
    </div>

</body>
</html>