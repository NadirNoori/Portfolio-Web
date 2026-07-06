<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadir Noori | Full-Stack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Three.js Library for 3D Elements -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        /* Keep canvas positioned permanently in the background */
        #bg-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-slate-50/30 text-slate-800 antialiased selection:bg-teal-500 selection:text-white">

    <!-- 3D Canvas Background -->
    <canvas id="bg-canvas"></canvas>

    <header class="fixed top-0 left-0 w-full z-50 bg-white/70 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            
            <div class="flex items-center">
                <a href="#home" class="text-xl font-bold tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-cyan-600">
                    NN<span class="text-slate-400">.</span>
                </a>
            </div>

            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#home" class="hover:text-teal-600 transition-colors">Home</a>
                <a href="#about" class="hover:text-teal-600 transition-colors">About</a>
                <a href="#skills" class="hover:text-teal-600 transition-colors">Skills</a>
                <a href="#services" class="hover:text-teal-600 transition-colors">Services</a>
                <a href="#projects" class="hover:text-teal-600 transition-colors">Projects</a>
                <a href="#contact" class="px-4 py-2 rounded-full bg-slate-900 text-white hover:bg-teal-600 transition-all">Connect</a>
            </nav>
        </div>
    </header>

    <section id="home" class="min-h-screen flex items-center pt-28 pb-16 px-6 relative overflow-hidden">
        <div class="max-w-6xl mx-auto z-10 w-full">
            <div class="grid md:grid-cols-12 gap-12 items-center">
                
                <div class="md:col-span-8 space-y-6 text-left order-2 md:order-1">
                    <span class="inline-flex px-4 py-1.5 rounded-full text-xs font-semibold bg-teal-50/80 text-teal-700 border border-teal-200 tracking-wide uppercase backdrop-blur-sm">Available for freelance & full-time roles</span>
                    
                    <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-slate-900 leading-tight">
                        Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600">Nadir Noori</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-slate-600 font-medium">Full-Stack Developer</p>
                    
                    <p class="text-base text-slate-500 max-w-xl navigate leading-relaxed">
                        I build robust, scalable backends paired with pixel-perfect, highly intuitive frontends. Turning complex problems into elegant web applications is my specialty.
                    </p>
                    
                    <div class="grid grid-cols-3 gap-4 py-4 border-y border-slate-200/60 max-w-lg">
                        <div>
                            <div class="text-2xl font-bold text-slate-900">1+</div>
                            <div class="text-xs text-slate-400 uppercase font-medium tracking-wider">Year Experience</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-slate-900">20+</div>
                            <div class="text-xs text-slate-400 uppercase font-medium tracking-wider">Projects Completed</div>
                        </div>
                        <div>
                            <div class="text-2xl font-bold text-slate-900">99%</div>
                            <div class="text-xs text-slate-400 uppercase font-medium tracking-wider">Success Rate</div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="#projects" class="px-6 py-3 rounded-xl bg-gradient-to-r from-teal-600 to-cyan-600 text-white font-semibold shadow-lg shadow-teal-600/10 hover:opacity-95 transition-all">View My Work</a>
                        <a href="#contact" class="px-6 py-3 rounded-xl bg-white/80 backdrop-blur-sm hover:bg-slate-50 text-slate-800 font-medium border border-slate-200 transition-all">Let's Talk</a>
                    </div>
                </div>

                <div class="md:col-span-4 flex justify-center order-1 md:order-2">
                    <a href="#home" class="relative group cursor-pointer block" title="Click to view details">
                        <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r from-teal-500 to-cyan-500 opacity-10 blur-xl group-hover:opacity-20 transition duration-300"></div>
                        
                        <div class="relative w-100 h-100 md:w-100 md:h-100 rounded-2xl bg-white border border-slate-200/80 shadow-xl shadow-slate-100 p-2 flex items-center justify-center overflow-hidden">
                            <img src="public/images/profile me.jpeg" alt="Nadir Noori" class="w-full h-full object-cover object-top rounded-xl shadow-inner group-hover:scale-[1.02] transition-transform duration-300">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section id="about" class="py-24 px-6 max-w-5xl mx-auto border-t border-slate-100 bg-white/40 backdrop-blur-md rounded-3xl my-6">
        <div class="space-y-6">
            <div class="flex items-center gap-2 text-teal-600 text-sm font-semibold uppercase tracking-wider">
                <span class="w-6 h-[2px] bg-teal-600"></span> About Me
            </div>
            <h2 class="text-3xl font-bold text-slate-900">Passionate about clean code and modern architectures.</h2>
            <p class="text-slate-600 leading-relaxed">
                With a comprehensive understanding of both frontend dynamics and backend engineering, I bridge the gap between user experience and system performance. I love building logic that scales effortlessly while keeping user interfaces crisp and lightweight.
            </p>
            <p class="text-slate-600 leading-relaxed">
                Whether setting up databases, designing interfaces, or managing versions efficiently, I focus on delivering functional, maintainable, and highly secure web products.
            </p>
        </div>
    </section>

    <section id="skills" class="py-24 px-6 max-w-6xl mx-auto">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 text-teal-600 text-sm font-semibold uppercase tracking-wider mb-3">
                Expertise
            </div>
            <h2 class="text-3xl font-bold text-slate-900">Technical Skills</h2>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
            <div class="p-6 rounded-xl bg-white/60 backdrop-blur-sm border border-slate-100 flex flex-col items-center justify-center text-center group hover:bg-white hover:border-teal-500 hover:shadow-md transition-all duration-300">
                <div class="w-14 h-14 rounded-full bg-white border border-slate-100 flex items-center justify-center text-sky-500 text-2xl shadow-sm mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-brands fa-react animate-[spin_20s_linear_infinite]"></i>
                </div>
                <span class="font-semibold text-slate-800 text-sm">React</span>
            </div>
            <div class="p-6 rounded-xl bg-white/60 backdrop-blur-sm border border-slate-100 flex flex-col items-center justify-center text-center group hover:bg-white hover:border-teal-500 hover:shadow-md transition-all duration-300">
                <div class="w-14 h-14 rounded-full bg-white border border-slate-100 flex items-center justify-center text-amber-500 text-2xl shadow-sm mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-brands fa-js"></i>
                </div>
                <span class="font-semibold text-slate-800 text-sm">JavaScript</span>
            </div>
            <div class="p-6 rounded-xl bg-white/60 backdrop-blur-sm border border-slate-100 flex flex-col items-center justify-center text-center group hover:bg-white hover:border-teal-500 hover:shadow-md transition-all duration-300">
                <div class="w-14 h-14 rounded-full bg-white border border-slate-100 flex items-center justify-center text-orange-600 text-2xl shadow-sm mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-brands fa-git-alt"></i>
                </div>
                <span class="font-semibold text-slate-800 text-sm">Git & GitHub</span>
            </div>
            <div class="p-6 rounded-xl bg-white/60 backdrop-blur-sm border border-slate-100 flex flex-col items-center justify-center text-center group hover:bg-white hover:border-teal-500 hover:shadow-md transition-all duration-300">
                <div class="w-14 h-14 rounded-full bg-white border border-slate-100 flex items-center justify-center text-blue-600 text-2xl shadow-sm mb-4 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-database"></i>
                </div>
                <span class="font-semibold text-slate-800 text-sm">PostgreSQL / MySQL</span>
            </div>
        </div>
    </section>

    <section id="services" class="py-24 px-6 max-w-6xl mx-auto border-t border-slate-100/60">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 text-teal-600 text-sm font-semibold uppercase tracking-wider mb-3">
                What I Offer
            </div>
            <h2 class="text-3xl font-bold text-slate-900">Services Provided</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="p-8 rounded-2xl bg-white/60 backdrop-blur-sm border border-slate-100 hover:border-slate-200 hover:bg-white transition-all hover:-translate-y-1 duration-300 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-teal-50 flex items-center justify-center text-teal-600 mb-6 text-xl">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-slate-900">Frontend Engineering</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Building lightning-fast, responsive web interfaces using React. Focused on accessibility and slick user interaction.</p>
            </div>
            <div class="p-8 rounded-2xl bg-white/60 backdrop-blur-sm border border-slate-100 hover:border-slate-200 hover:bg-white transition-all hover:-translate-y-1 duration-300 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-cyan-50 flex items-center justify-center text-cyan-600 mb-6 text-xl">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-slate-900">Application Logic</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Designing clean, structured, and modern JavaScript architectures to handle complex operations seamlessly.</p>
            </div>
            <div class="p-8 rounded-2xl bg-white/60 backdrop-blur-sm border border-slate-100 hover:border-slate-200 hover:bg-white transition-all hover:-translate-y-1 duration-300 shadow-sm">
                <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 mb-6 text-xl">
                    <i class="fa-solid fa-database"></i>
                </div>
                <h3 class="text-xl font-bold mb-3 text-slate-900">Database Management</h3>
                <p class="text-slate-600 text-sm leading-relaxed">Creating optimized relational database models, querying, and managing PostgreSQL or MySQL systems safely.</p>
            </div>
        </div>
    </section>

    <section id="projects" class="py-24 px-6 max-w-6xl mx-auto border-t border-slate-100/60">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 text-teal-600 text-sm font-semibold uppercase tracking-wider mb-3">
                Portfolio
            </div>
            <h2 class="text-3xl font-bold text-slate-900">Featured Projects</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="group rounded-2xl overflow-hidden bg-white/80 backdrop-blur-sm border border-slate-200 hover:shadow-md transition-all">
                <div class="h-52 bg-slate-50/50 flex items-center justify-center relative overflow-hidden border-b border-slate-100">
                    <i class="fa-solid fa-cubes text-5xl text-slate-400 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-3">
                        <span class="text-xs px-2 py-1 rounded bg-slate-100 text-teal-700 font-medium">JavaScript</span>
                        <span class="text-xs px-2 py-1 rounded bg-slate-100 text-teal-700 font-medium">React</span>
                        <span class="text-xs px-2 py-1 rounded bg-slate-100 text-teal-700 font-medium">PostgreSQL</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-slate-900">E-Commerce Application Platform</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">A complete online marketplace system featuring real-time inventory checks, user authentication, and secure payment integrations.</p>
                    <div class="flex gap-4 text-sm font-medium">
                        <a href="#" class="text-teal-600 hover:underline flex items-center gap-1">Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        <a href="#" class="text-slate-500 hover:text-slate-800 flex items-center gap-1">Source Code <i class="fa-brands fa-github text-xs"></i></a>
                    </div>
                </div>
            </div>

            <div class="group rounded-2xl overflow-hidden bg-white/80 backdrop-blur-sm border border-slate-200 hover:shadow-md transition-all">
                <div class="h-52 bg-slate-50/50 flex items-center justify-center relative overflow-hidden border-b border-slate-100">
                    <i class="fa-solid fa-chart-line text-5xl text-slate-400 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <div class="p-6">
                    <div class="flex gap-2 mb-3">
                        <span class="text-xs px-2 py-1 rounded bg-slate-100 text-cyan-700 font-medium">JavaScript</span>
                        <span class="text-xs px-2 py-1 rounded bg-slate-100 text-cyan-700 font-medium">React</span>
                        <span class="text-xs px-2 py-1 rounded bg-slate-100 text-cyan-700 font-medium">MySQL</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-slate-900">SaaS Real-time Kanban Board</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">An enterprise task management tool utilizing WebSockets for real-time team collaboration and custom project analytics.</p>
                    <div class="flex gap-4 text-sm font-medium">
                        <a href="#" class="text-cyan-600 hover:underline flex items-center gap-1">Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i></a>
                        <a href="#" class="text-slate-500 hover:text-slate-800 flex items-center gap-1">Source Code <i class="fa-brands fa-github text-xs"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 px-6 max-w-4xl mx-auto border-t border-slate-100/60 bg-white/40 backdrop-blur-md rounded-3xl mb-12">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <div class="inline-flex items-center gap-2 text-teal-600 text-sm font-semibold uppercase tracking-wider mb-3">
                Connect
            </div>
            <h2 class="text-3xl font-bold text-slate-900">Get In Touch</h2>
            <p class="text-slate-500 text-sm mt-2">Have an interesting project or a role available? Drop me a message!</p>
        </div>

        <div class="grid md:grid-cols-12 gap-8 items-start">
            <div class="md:col-span-5 space-y-4">
                <a href="mailto:nadirnoori420@gmail.com" class="block p-4 rounded-xl bg-white/80 border border-slate-100 hover:border-teal-500 transition-colors shadow-sm">
                    <div class="text-xs text-slate-400 mb-1">Email directly</div>
                    <div class="text-sm font-medium text-slate-800">nadirnoori420@gmail.com</div>
                </a>
                
               <div class="p-4 rounded-xl bg-white/80 border border-slate-100 shadow-sm">
    <div class="text-xs text-slate-400 mb-3">Follow & Connect on Social Media</div>
    <div class="flex flex-wrap gap-3">
        <!-- GitHub -->
        <a href="https://github.com/Noori2008" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white border border-slate-200 text-slate-600 flex items-center justify-center hover:bg-[#24292e] hover:text-white hover:border-[#24292e] transition-all" title="GitHub">
            <i class="fa-brands fa-github text-lg"></i>
        </a>
        <!-- LinkedIn -->
        <a href="https://linkedin.com/in/nxdir-noori" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white border border-slate-200 text-slate-600 flex items-center justify-center hover:bg-[#0077b5] hover:text-white hover:border-[#0077b5] transition-all" title="LinkedIn">
            <i class="fa-brands fa-linkedin-in text-lg"></i>
        </a>
        <!-- Discord -->
        <a href="https://discord.com/users/nadir_noori" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white border border-slate-200 text-slate-600 flex items-center justify-center hover:bg-[#5865F2] hover:text-white hover:border-[#5865F2] transition-all" title="Discord">
            <i class="fa-brands fa-discord text-lg"></i>
        </a>
        <!-- Facebook -->
        <a href="https://www.facebook.com/share/1DErjeUokQ/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white border border-slate-200 text-slate-600 flex items-center justify-center hover:bg-[#1877f2] hover:text-white hover:border-[#1877f2] transition-all" title="Facebook">
            <i class="fa-brands fa-facebook-f text-lg"></i>
        </a>
        <!-- Instagram -->
        <a href="https://www.instagram.com/nxdir.noori" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-lg bg-white border border-slate-200 text-slate-600 flex items-center justify-center hover:bg-gradient-to-tr hover:from-[#f9ce34] hover:via-[#ee2a7b] hover:to-[#6228d7] hover:text-white hover:border-transparent transition-all" title="Instagram">
            <i class="fa-brands fa-instagram text-lg"></i>
        </a>
    </div>
</div>
            </div>

            <form class="md:col-span-7 space-y-4" action="#" method="POST">
                    <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Name</label>
                        <input  id="name" name="name" type="text" required class="w-full bg-white/80 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-teal-500 text-slate-800 focus:bg-white transition-all">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Email</label>
                        <input id="email" name="email" type="email" required class="w-full bg-white/80 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-teal-500 text-slate-800 focus:bg-white transition-all">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Message</label>
                    <textarea  id="message" name="message" rows="4" required class="w-full bg-white/80 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-teal-500 text-slate-800 focus:bg-white transition-all"></textarea>
                </div>
                <button id="send-message" type="submit" class="w-full py-3 rounded-xl bg-slate-900 hover:bg-teal-600 text-white font-semibold transition-all text-sm shadow-sm">Send Message
        
                </button>


            </form>
        </div>
    </section>

    <footer class="border-t border-slate-100 bg-white/50 backdrop-blur-sm py-8 px-6 text-center text-xs text-slate-400">
        <p>&copy; 2026 Nadir Noori. All rights reserved.</p>
    </footer>

    <!-- Three.js Interactive 3D Background Script -->
    <script>
        const canvas = document.querySelector('#bg-canvas');
        const scene = new THREE.Scene();
        
        // Soft gradient base environment color matching the existing teal accents
        scene.background = new THREE.Color(0xfbffff); 

        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.z = 5;

        const renderer = new THREE.WebGLRenderer({ canvas: canvas, antialias: true, alpha: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

        // Create 3D Particle Nodes Architecture
        const particlesCount = 180;
        const positions = new Float32Array(particlesCount * 3);
        const colors = new Float32Array(particlesCount * 3);

        const tealColor = new THREE.Color('#0d9488');
        const cyanColor = new THREE.Color('#0891b2');

        for(let i = 0; i < particlesCount * 3; i+=3) {
            // Distribute points systematically across space
            positions[i] = (Math.random() - 0.5) * 12;
            positions[i+1] = (Math.random() - 0.5) * 12;
            positions[i+2] = (Math.random() - 0.5) * 12;

            // Blend colors seamlessly between teal and cyan themes
            const mixedColor = tealColor.clone().lerp(cyanColor, Math.random());
            colors[i] = mixedColor.r;
            colors[i+1] = mixedColor.g;
            colors[i+2] = mixedColor.b;
        }

        const geometry = new THREE.BufferGeometry();
        geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
        geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

        // Material Configuration for soft glowing 3D depth field points
        const material = new THREE.PointsMaterial({
            size: 0.06,
            vertexColors: true,
            transparent: true,
            opacity: 0.45,
            sizeAttenuation: true
        });

        const particleMesh = new THREE.Points(geometry, material);
        scene.add(particleMesh);

        // Tracking interactive cursor dynamics
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;

        window.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX / window.innerWidth) - 0.5;
            mouseY = (event.clientY / window.innerHeight) - 0.5;
        });

        // Fluid layout resizing updates
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        // Frame Rendering Cycle Loop
        const clock = new THREE.Clock();

        const tick = () => {
            const elapsedTime = clock.getElapsedTime();

            // Self-guided slow constant orbit translation
            particleMesh.rotation.y = elapsedTime * 0.04;
            particleMesh.rotation.x = elapsedTime * 0.02;

            // Interpolated mouse tracking response for responsive feedback
            targetX = mouseX * 0.6;
            targetY = mouseY * 0.6;
            particleMesh.position.x += (targetX - particleMesh.position.x) * 0.05;
            particleMesh.position.y += (-targetY - particleMesh.position.y) * 0.05;

            renderer.render(scene, camera);
            window.requestAnimationFrame(tick);
        };

        tick();
    </script>
</body>
</html>