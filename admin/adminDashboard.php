<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Nadir Noori</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#F8FAFC] font-sans">

    <div class="flex min-h-screen">
        
        <aside class="w-72 bg-white border-r border-slate-200 p-6 flex flex-col">
            <div class="flex items-center gap-3 mb-12">
                <div class="w-10 h-10 bg-slate-900 rounded-xl flex items-center justify-center text-white font-bold">NN</div>
                <span class="font-bold text-lg text-slate-800">Admin Portal</span>
            </div>

            <nav class="space-y-2 flex-grow">
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-teal-50 text-teal-700 rounded-xl font-semibold transition-all">
                    <i class="fa-solid fa-chart-line"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all">
                    <i class="fa-solid fa-folder-open"></i> Projects
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all">
                    <i class="fa-solid fa-comments"></i> Messages
                </a>
            </nav>

            <button class="flex items-center gap-3 px-4 py-3 text-red-500 hover:bg-red-50 rounded-xl transition-all">
                <i class="fa-solid fa-right-from-bracket"></i>   <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
            </button>
        </aside>

        <div class="flex-1 p-10">
            <header class="flex justify-between items-center mb-10">
                <div>
                    <h1 class="text-3xl font-bold text-slate-900">Dashboard</h1>
                    <p class="text-slate-500">Welcome back, Nadir. Here is your site status.</p>
                </div>
                <button class="bg-slate-900 text-white px-6 py-3 rounded-xl font-semibold hover:bg-slate-800 transition-all shadow-lg hover:shadow-xl">
                    + Add Project
                </button>
            </header>

            <div class="bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                    <h2 class="font-bold text-lg text-slate-800">Recent Projects</h2>
                    <span class="text-sm text-teal-600 font-semibold cursor-pointer">View All</span>
                </div>
                <table class="w-full text-left">
                    <thead class="bg-slate-50 text-slate-400 text-xs uppercase tracking-wider">
                        <tr>
                            <th class="px-6 py-4">Project Name</th>
                            <th class="px-6 py-4">Status</th>
                            <th class="px-6 py-4">Date</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-4 font-medium text-slate-800">E-Commerce Platform</td>
                            <td class="px-6 py-4"><span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold">Live</span></td>
                            <td class="px-6 py-4 text-slate-500 text-sm">June 15, 2026</td>
                            <td class="px-6 py-4 text-right">
                                <button class="text-slate-400 hover:text-teal-600 mr-3"><i class="fa-solid fa-pen"></i></button>
                                <button class="text-slate-400 hover:text-red-600"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>