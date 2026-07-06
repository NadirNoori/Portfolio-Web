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
                <a href="adminDashboard.php" class="flex items-center gap-3 px-4 py-3 bg-teal-50 text-teal-700 rounded-xl font-semibold transition-all">
                    <i class="fa-solid fa-chart-line"></i> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all">
                    <i class="fa-solid fa-folder-open"></i> Projects
                </a>
                <a href="message.php" class="flex items-center gap-3 px-4 py-3 text-slate-500 hover:bg-slate-50 hover:text-slate-900 rounded-xl transition-all">
                    <i class="fa-solid fa-comments"></i> Messages
                </a>
            </nav>

            <button class="flex items-center gap-3 px-4 py-3 text-red-500 hover:bg-red-50 rounded-xl transition-all">
                <i class="fa-solid fa-right-from-bracket"></i>   
                 <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
            </button>
           
        </aside>


        <!-- Main Content Area -->
<div class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-slate-900 mb-8">Messages</h1>

    <!-- Wrapper with max-width and margin auto to center it -->
    <div class="max-w-5xl mx-auto bg-white rounded-3xl border border-slate-200 shadow-sm overflow-hidden">
        <div class="p-6 border-b border-slate-100">
            <h2 class="font-bold text-lg text-slate-800">Inbox</h2>
        </div>
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-slate-400 text-xs uppercase tracking-wider">
                <tr>
                    <th class="px-6 py-4">Name</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Message</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <?php
                // Database connection
                $conn = new mysqli('localhost', 'root', '', 'portfolio _website');

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch messages from the database
                $sql = "SELECT name, email, message FROM messages";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-6 py-4'>" . htmlspecialchars($row['name']) . "</td>";
                        echo "<td class='px-6 py-4'>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td class='px-6 py-4'>" . htmlspecialchars($row['message']) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3' class='px-6 py-4 text-center'>No messages found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>



</head>
</body>