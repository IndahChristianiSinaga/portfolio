<nav class="border-b border-[#20263A]/10 bg-[#FAF9F6]">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
        <a href="/" class="group flex items-center">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Indah Christiani Sinaga"
                class="h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-[1.03]"
            >
        </a>

        <div class="flex items-center gap-7 text-[13px] font-medium tracking-[0.02em] text-[#20263A]/65">
            <a href="/" class="relative py-2 transition-colors duration-300 hover:text-[#3155D8]">Home</a>
            <a href="/about" class="relative py-2 transition-colors duration-300 hover:text-[#3155D8]">About</a>
            <a href="/projects" class="relative py-2 transition-colors duration-300 hover:text-[#3155D8]">Projects</a>

            <div class="group relative">
                <button type="button" class="flex items-center gap-2 py-2 transition-colors duration-300 hover:text-[#3155D8]">
                    <span>Works</span>
                    <svg class="h-3 w-3 transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 12 12" fill="none">
                        <path d="M2.5 4.5L6 8L9.5 4.5" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <div class="invisible absolute right-0 top-full z-50 mt-2 w-48 translate-y-2 rounded-xl border border-[#20263A]/10 bg-[#FAF9F6] p-1.5 opacity-0 shadow-xl shadow-[#20263A]/10 transition-all duration-200 group-hover:visible group-hover:translate-y-0 group-hover:opacity-100">
                    <a href="/works/articles" class="group/item flex items-center justify-between rounded-lg px-4 py-3 text-[13px] text-[#20263A]/65 transition-all duration-200 hover:bg-[#3155D8]/8 hover:text-[#3155D8]">
                        <span>Articles</span>
                        <span class="translate-x-[-4px] text-[#3155D8] opacity-0 transition-all duration-200 group-hover/item:translate-x-0 group-hover/item:opacity-100">↗</span>
                    </a>
                    <a href="/works/book" class="group/item flex items-center justify-between rounded-lg px-4 py-3 text-[13px] text-[#20263A]/65 transition-all duration-200 hover:bg-[#3155D8]/8 hover:text-[#3155D8]">
                        <span>Book</span>
                        <span class="translate-x-[-4px] text-[#3155D8] opacity-0 transition-all duration-200 group-hover/item:translate-x-0 group-hover/item:opacity-100">↗</span>
                    </a>
                </div>
            </div>

            <a href="/contact" class="relative py-2 transition-colors duration-300 hover:text-[#3155D8]">Contact</a>
        </div>
    </div>
</nav>
