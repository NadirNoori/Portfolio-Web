<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Admin Login | Nadir Noori</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; overflow: hidden; }
        #bg-canvas { position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: -1; }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center relative">

    <!-- 3D Canvas -->
    <canvas id="bg-canvas"></canvas>

    <!-- Decorative Orbs -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
        <div class="absolute top-[-10%] left-[-5%] w-[400px] h-[400px] bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-5%] w-[400px] h-[400px] bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse delay-1000"></div>
    </div>

    <!-- Login Card -->
    <div class="relative z-10 w-full max-w-md bg-white/70 backdrop-blur-2xl border border-white/50 rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] p-10">
        <div class="flex justify-center mb-6">
            <div class="w-14 h-14 bg-slate-900 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-lg shadow-slate-900/20">NN</div>
        </div>

        <div class="text-center mb-10">
            <h2 class="text-2xl font-bold text-slate-900">Welcome Back</h2>
            <p class="text-slate-500 text-sm mt-1">Authenticate to access the control panel</p>
        </div>

        <form id="loginForm" class="space-y-6" action="../src/controllers/admincontroller.php" method="POST">
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">Administrator Email</label>
                <input type="email" id="email" name="email" required placeholder="nadir@admin.com" class="w-full bg-white/50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all">
            </div>
            
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-2">Secure Password</label>
                <input type="password" id="password" name="password" required placeholder="••••••••" class="w-full bg-white/50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm text-slate-800 placeholder:text-slate-300 focus:outline-none focus:ring-2 focus:ring-teal-500/20 focus:border-teal-500 transition-all">
            </div>

            <button type="submit" class="w-full py-4 rounded-xl bg-slate-900 hover:bg-teal-600 text-white font-bold text-sm tracking-wide transition-all shadow-lg hover:shadow-teal-500/20 active:scale-[0.98]">
                Access Dashboard
            </button>
        </form>
    </div>

    <script>
        // 3D Background Logic
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('bg-canvas'), alpha: true, antialias: true });
        renderer.setSize(window.innerWidth, window.innerHeight);

        const geometry = new THREE.BufferGeometry();
        const count = 100;
        const pos = new Float32Array(count * 3);
        for(let i = 0; i < count * 3; i++) pos[i] = (Math.random() - 0.5) * 20;
        geometry.setAttribute('position', new THREE.BufferAttribute(pos, 3));

        const material = new THREE.PointsMaterial({ size: 0.05, color: 0x0d9488, transparent: true, opacity: 0.5 });
        const particles = new THREE.Points(geometry, material);
        scene.add(particles);
        camera.position.z = 5;

        function animate() {
            requestAnimationFrame(animate);
            particles.rotation.y += 0.001;
            renderer.render(scene, camera);
        }
        animate();
    </script>
</body>
</html>