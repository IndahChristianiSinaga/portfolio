<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Indah Christiani Sinaga' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FAF9F6] text-[#20263A]">
    <x-navbar />
    @yield('content')

    <footer class="relative overflow-hidden bg-[#3155D8] text-[#FAF9F6]">
        <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
            <div class="border-t border-white/15 py-20 lg:py-24">
                <div class="grid gap-12 lg:grid-cols-[1.3fr_0.7fr] lg:items-end">
                    <div>
                        <div class="flex items-center gap-3">
                            <span class="h-px w-10 bg-[#FAF9F6]/70"></span>
                            <p class="text-[10px] uppercase tracking-[0.3em] text-[#FAF9F6]/65">
                                Thanks for stopping by
                            </p>
                        </div>

                        <h2 class="mt-8 max-w-4xl text-[16vw] font-semibold leading-[0.78] tracking-[-0.08em] text-[#FAF9F6] sm:text-[9rem] lg:text-[11rem]">
                            INDAH<span class="font-serif italic text-[#8C3040]">.</span>
                        </h2>

                        <p class="mt-10 max-w-md text-sm leading-7 text-[#FAF9F6]/75 sm:text-base">
                            Building, learning, and figuring things out
                            one project at a time.
                        </p>
                    </div>

                    <div class="lg:pb-3">
                        <p class="text-[10px] uppercase tracking-[0.25em] text-[#FAF9F6]/60">
                            Explore
                        </p>

                        <nav class="mt-5 flex flex-col gap-3">
                            <a href="/" class="group flex items-center justify-between border-b border-white/15 pb-3 text-sm text-[#FAF9F6]/75 transition duration-300 hover:text-[#FAF9F6]">
                                <span>Home</span>
                                <span class="translate-x-[-5px] text-[#FAF9F6] opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">↗</span>
                            </a>
                            <a href="/about" class="group flex items-center justify-between border-b border-white/15 pb-3 text-sm text-[#FAF9F6]/75 transition duration-300 hover:text-[#FAF9F6]">
                                <span>About</span>
                                <span class="translate-x-[-5px] text-[#FAF9F6] opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">↗</span>
                            </a>
                            <a href="/projects" class="group flex items-center justify-between border-b border-white/15 pb-3 text-sm text-[#FAF9F6]/75 transition duration-300 hover:text-[#FAF9F6]">
                                <span>Projects</span>
                                <span class="translate-x-[-5px] text-[#FAF9F6] opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">↗</span>
                            </a>
                            <a href="/contact" class="group flex items-center justify-between border-b border-white/15 pb-3 text-sm text-[#FAF9F6]/75 transition duration-300 hover:text-[#FAF9F6]">
                                <span>Contact</span>
                                <span class="translate-x-[-5px] text-[#FAF9F6] opacity-0 transition duration-300 group-hover:translate-x-0 group-hover:opacity-100">↗</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-5 border-t border-white/15 py-7 text-[11px] sm:flex-row sm:items-center sm:justify-between">
                <p class="text-[#FAF9F6]/55">
                    © {{ date('Y') }} Indah Christiani Sinaga
                </p>

                <div class="flex items-center gap-5">
                    <a href="#" class="text-[#FAF9F6]/55 transition duration-300 hover:text-[#FAF9F6]">Instagram</a>
                    <a href="#" class="text-[#FAF9F6]/55 transition duration-300 hover:text-[#FAF9F6]">LinkedIn</a>
                    <a href="#" class="text-[#FAF9F6]/55 transition duration-300 hover:text-[#FAF9F6]">YouTube</a>
                    <span class="h-3 w-px bg-white/20"></span>
                    <span class="text-[#FAF9F6]/50">Built with Laravel</span>
                </div>
            </div>
        </div>
    </footer>

    <button
        id="back-to-top"
        type="button"
        aria-label="Back to top"
        class="fixed bottom-6 right-6 z-[100] flex translate-y-5 items-center gap-3 rounded-full border border-[#3155D8]/20 bg-[#FAF9F6]/95 px-4 py-3 text-[10px] font-medium uppercase tracking-[0.18em] text-[#20263A]/65 opacity-0 shadow-lg shadow-[#20263A]/10 backdrop-blur-md transition-all duration-300 pointer-events-none hover:border-[#3155D8] hover:bg-[#3155D8] hover:text-[#FAF9F6] sm:bottom-8 sm:right-8"
    >
        <span>Back to top</span>
        <span class="text-sm">↑</span>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const backToTop = document.getElementById('back-to-top');
            if (!backToTop) return;

            function updateBackToTop() {
                if (window.scrollY > 500) {
                    backToTop.classList.remove('translate-y-5', 'opacity-0', 'pointer-events-none');
                    backToTop.classList.add('translate-y-0', 'opacity-100');
                } else {
                    backToTop.classList.remove('translate-y-0', 'opacity-100');
                    backToTop.classList.add('translate-y-5', 'opacity-0', 'pointer-events-none');
                }
            }

            window.addEventListener('scroll', updateBackToTop, { passive: true });
            backToTop.addEventListener('click', function () {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
            updateBackToTop();
        });
    </script>
</body>
</html>
