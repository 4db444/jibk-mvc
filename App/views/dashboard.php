<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinTrack - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 flex h-screen overflow-hidden">

    <aside class="w-64 bg-slate-900 text-white flex flex-col">
        <div class="p-6">
            <h1 class="text-2xl font-bold text-blue-400"> JIBK </h1>
        </div>
        
        <nav class="flex-1 px-4 space-y-2 mt-4">
            <a href="#" class="flex items-center p-3 bg-blue-600 rounded-lg transition">
                <i class="fa-solid fa-chart-line mr-3"></i> Dashboard
            </a>
            <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-slate-800 rounded-lg transition">
                <i class="fa-solid fa-arrow-trend-up mr-3"></i> Incomes
            </a>
            <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-slate-800 rounded-lg transition">
                <i class="fa-solid fa-arrow-trend-down mr-3"></i> Expenses
            </a>
            <a href="#" class="flex items-center p-3 text-gray-300 hover:bg-slate-800 rounded-lg transition">
                <i class="fa-solid fa-credit-card mr-3"></i> Cards
            </a>
        </nav>

        <div class="p-4 border-t border-slate-800">
            <button class="flex items-center p-3 text-gray-300 hover:text-red-400 transition w-full">
                <i class="fa-solid fa-right-from-bracket mr-3"></i> Logout
            </button>
        </div>
    </aside>

    <main class="flex-1 flex flex-col overflow-y-auto">
        <header class="bg-white border-b p-4 flex justify-between items-center px-8">
            <h2 class="text-xl font-semibold text-gray-800">Welcome back, Alex!</h2>
            <div class="flex items-center space-x-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    + Add Transaction
                </button>
                <div class="w-10 h-10 bg-gray-300 rounded-full border"></div>
            </div>
        </header>
        
        <section class="p-8 space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-gray-500 text-sm">Total Balance</p>
                    <h3 class="text-3xl font-bold text-gray-800 mt-1">$12,450.00</h3>
                    <span class="text-green-500 text-xs font-medium">+2.5% from last month</span>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-gray-500 text-sm">Monthly Income</p>
                    <h3 class="text-3xl font-bold text-blue-600 mt-1">$5,200.00</h3>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <p class="text-gray-500 text-sm">Monthly Expenses</p>
                    <h3 class="text-3xl font-bold text-red-500 mt-1">$3,120.00</h3>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="p-6 border-b flex justify-between items-center">
                    <h3 class="font-bold text-gray-800">Recent Transactions</h3>
                    <button class="text-blue-600 hover:underline text-sm">View All</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="text-gray-400 text-sm uppercase">
                                <th class="px-6 py-4">Description</th>
                                <th class="px-6 py-4">Category</th>
                                <th class="px-6 py-4">Date</th>
                                <th class="px-6 py-4">Amount</th>
                                <th class="px-6 py-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-4 font-medium">Grocery Store</td>
                                <td class="px-6 py-4"><span class="bg-orange-100 text-orange-600 px-2 py-1 rounded text-xs">Food</span></td>
                                <td class="px-6 py-4 text-gray-500">Oct 24, 2023</td>
                                <td class="px-6 py-4 text-red-600">-$120.50</td>
                                <td class="px-6 py-4 space-x-2">
                                    <button class="text-blue-500 hover:text-blue-700"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-medium">Freelance Payment</td>
                                <td class="px-6 py-4"><span class="bg-green-100 text-green-600 px-2 py-1 rounded text-xs">Work</span></td>
                                <td class="px-6 py-4 text-gray-500">Oct 23, 2023</td>
                                <td class="px-6 py-4 text-green-600">+$1,500.00</td>
                                <td class="px-6 py-4 space-x-2">
                                    <button class="text-blue-500 hover:text-blue-700"><i class="fa-solid fa-pen"></i></button>
                                    <button class="text-red-500 hover:text-red-700"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </main>
</body>
</html>