@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden bg-[#FAF9F6] px-6 pt-10 pb-0 text-[#20263A] lg:px-8 lg:pt-12 lg:pb-0">

    <div class="relative mx-auto max-w-7xl">

        <div class="flex items-center gap-4">
            <span class="h-px w-10 bg-[#3155D8]"></span>

            <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                About / 01
            </p>
        </div>

        <div class="relative mt-3 min-h-[440px] lg:mt-4 lg:min-h-[460px]">

<div class="pointer-events-none absolute left-1/2 top-[42%] z-0 -translate-x-1/2 -translate-y-1/2">
    <h1 class="whitespace-nowrap text-[17vw] font-semibold leading-none tracking-[-0.09em] text-[#3155D8]/30 sm:text-[10rem] lg:text-[12rem]">
        INDAH<span class="font-serif italic text-[#8C3040]/60">.</span>
    </h1>
</div>

            <div class="absolute left-0 top-3 z-20 max-w-[190px] lg:top-5 lg:max-w-[205px]">

                <p class="text-sm uppercase tracking-[0.25em] text-[#3155D8]">
                    Hi, I’m
                </p>

                <p class="mt-3 text-2xl font-medium leading-tight text-[#20263A]">
                    Indah
                    <span class="font-serif italic text-[#20263A]/60">
                        Christiani.
                    </span>
                </p>

                <span class="mt-5 block h-px w-14 bg-[#8C3040]"></span>

                <p class="mt-4 text-sm leading-7 text-[#20263A]/55">
                    An Information Systems graduate interested in web development and interface design.
                </p>

            </div>

            <div class="absolute bottom-0 left-1/2 z-10 w-[58%] max-w-sm -translate-x-1/2 sm:w-[42%] lg:w-[29%]">

                <div class="relative z-10">
                    <img
                        src="{{ asset('images/aboutme.png') }}"
                        alt="Indah Christiani Sinaga"
                        class="h-auto w-full object-contain"
                    >
                </div>

            </div>

            <div class="absolute right-0 top-5 z-20 w-[215px] lg:top-7 lg:w-[255px]">

                <p class="text-xs uppercase tracking-[0.25em] text-[#3155D8]">
                    A little about me
                </p>

                <p class="mt-4 text-xl font-medium leading-tight text-[#20263A] sm:text-2xl">
                    I enjoy working on web projects
                </p>

                <p class="mt-4 text-sm leading-7 text-[#20263A]/55">
                    exploring how different parts of a website come together, and improving my skills through hands-on work.
                </p>

                <div class="mt-7 flex items-center gap-5">

                    <a
                        href="https://www.instagram.com/sweethyin/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram"
                        class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#3155D8]"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
                            <rect
                                x="3"
                                y="3"
                                width="18"
                                height="18"
                                rx="5"
                                stroke="currentColor"
                                stroke-width="1.8"
                            />
                            <circle
                                cx="12"
                                cy="12"
                                r="4.2"
                                stroke="currentColor"
                                stroke-width="1.8"
                            />
                            <circle
                                cx="17.4"
                                cy="6.6"
                                r="1.1"
                                fill="currentColor"
                            />
                        </svg>
                    </a>

                    <a
                        href="https://www.youtube.com/channel/UCOic04wLkqPXSX1TyfiS3lA"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="YouTube"
                        class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#8C3040]"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31 31 0 0 0 0 12a31 31 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31 31 0 0 0 24 12a31 31 0 0 0-.5-5.8ZM9.6 15.8V8.2l6.5 3.8-6.5 3.8Z"/>
                        </svg>
                    </a>

                    <a
                        href="https://www.linkedin.com/in/indah-christiani-sinaga/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn"
                        class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#3155D8]"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4.98 3.5C3.88 3.5 3 4.38 3 5.48s.88 1.98 1.98 1.98 1.98-.88 1.98-1.98S6.08 3.5 4.98 3.5ZM3.3 8.2h3.35V21H3.3V8.2ZM8.65 8.2h3.21v1.75h.05c.45-.85 1.54-2.05 3.78-2.05 4.04 0 4.79 2.66 4.79 6.12V21h-3.34v-6.2c0-1.48-.03-3.38-2.06-3.38-2.06 0-2.38 1.61-2.38 3.27V21H8.65V8.2Z"/>
                        </svg>
                    </a>

                    <a
                        href="https://wa.me/62881025919154"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="WhatsApp"
                        class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#3155D8]"
                    >
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 .1 5.3.1 11.9c0 2.1.5 4.1 1.6 5.9L0 24l6.3-1.6a11.8 11.8 0 0 0 5.8 1.5h.1c6.5 0 11.8-5.3 11.8-11.9 0-3.2-1.2-6.2-3.5-8.5Zm-8.4 18.4h-.1a9.9 9.9 0 0 1-5.1-1.4l-.4-.2-3.7 1 1-3.6-.2-.4a9.8 9.8 0 0 1-1.5-5.3C1.3 6.5 6.1 2.1 12 2.1c2.6 0 5.1 1 7 2.9a9.8 9.8 0 0 1 2.9 7c0 5.5-4.4 9.9-9.8 9.9Zm5.4-7.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-1.5-.8-2.5-1.4-3.5-3.1-.3-.5.3-.5.8-1.7.1-.2 0-.4 0-.5 0-.1-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1-1.1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.2 5.1 4.5.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.8-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.1-.3-.2-.6-.3Z"/>
                        </svg>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="relative overflow-hidden bg-[#EEF1F7] px-6 py-20 text-[#20263A] lg:px-8 lg:py-24">

    <div class="relative mx-auto max-w-7xl">

        <div class="flex items-center gap-4">
            <span class="h-px w-10 bg-[#3155D8]"></span>

            <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                Background / 02
            </p>
        </div>

        <div class="mt-10 max-w-2xl">

            <h2 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                Where I’ve learned,
                <span class="font-serif italic text-[#8C3040]">
                    worked,
                </span>
                and grown.
            </h2>

            <p class="mt-5 max-w-xl leading-7 text-[#20263A]/55">
                A collection of experiences and education that shaped
                the way I approach technology, design, and problem solving.
            </p>

        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-2">

            <div>

                <div class="mb-5 flex items-center justify-between">

                    <div class="flex items-center gap-3">
                        <span class="text-sm text-[#3155D8]">
                            01
                        </span>

                        <h3 class="text-sm font-medium uppercase tracking-[0.2em]">
                            My Experience
                        </h3>
                    </div>

                    <span class="text-xs text-[#20263A]/35">
                        Work
                    </span>

                </div>

                <div class="group relative overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                Sep 2024 — Dec 2024
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Platform / Web Developer Intern
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                                PT Akselerasi Edukasi Internasional
                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 flex items-center gap-3 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        <span>Web Development</span>
                        <span>·</span>
                        <span>Internship</span>
                    </div>

                </div>

                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#8C3040]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#8C3040] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#8C3040]">
                                2023
                            </p>

                            <p class="mt-2 text-xs uppercase tracking-[0.2em] text-[#20263A]/40">
                                Part-time
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Cashier
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                                Raja Rawit
                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#8C3040]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Customer Service · Cashier
                    </div>

                </div>

                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                2026
                            </p>

                            <p class="mt-2 text-xs uppercase tracking-[0.2em] text-[#20263A]/40">
                                Full-time
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Cashier
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                                Calico Petshop
                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Customer Service · Cashier
                    </div>

                </div>

            </div>

            <div>

                <div class="mb-5 flex items-center justify-between">

                    <div class="flex items-center gap-3">
                        <span class="text-sm text-[#8C3040]">
                            02
                        </span>

                        <h3 class="text-sm font-medium uppercase tracking-[0.2em]">
                            My Education
                        </h3>
                    </div>

                    <span class="text-xs text-[#20263A]/35">
                        Learning
                    </span>

                </div>

                <div class="group relative overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#8C3040]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#8C3040] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#8C3040]">
                                2022 — 2026
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Universitas Pamulang
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                                S1 Sistem Informasi · IPK 3.78
                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#8C3040]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Information Systems
                    </div>

                </div>

                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                2019 — 2022
                            </p>

                            <p class="mt-2 text-xs uppercase tracking-[0.2em] text-[#20263A]/40">
                                Vocational School
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                SMK Swasta RK Bintang Timur
                                Pematangsiantar
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                                Rekayasa Perangkat Lunak
                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Software Engineering
                    </div>

                </div>

                <div class="mt-6 flex items-center gap-4 px-2">

                    <span class="font-mono text-xs text-[#3155D8]">
                        &lt;/&gt;
                    </span>

                    <span class="h-px flex-1 bg-[#20263A]/10"></span>

                    <span class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                        Always learning
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="relative overflow-hidden bg-[#FAF9F6] text-[#20263A]">

    <div class="grid lg:grid-cols-2">

        <div class="relative overflow-hidden px-6 py-20 lg:px-12 lg:py-28">

            <div class="relative mx-auto max-w-xl lg:mx-0">

                <div class="flex items-center gap-4">

                    <span class="h-px w-10 bg-[#8C3040]"></span>

                    <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                        Skills / 03
                    </p>

                </div>

                <h2 class="mt-14 max-w-md text-5xl font-semibold leading-[0.95] tracking-tight sm:text-6xl lg:text-7xl">

                    Things I

                    <span class="font-serif italic text-[#3155D8]">
                        enjoy building.
                    </span>

                </h2>

                <p class="mt-8 max-w-sm leading-8 text-[#20263A]/55">
                    A mix of technical skills, design tools, and
                    practical experience that I continue to develop
                    through projects and everyday learning.
                </p>

                <div class="mt-16 flex items-center gap-4">

                    <span class="text-4xl font-light text-[#20263A]/15">
                        03
                    </span>

                    <span class="h-px w-16 bg-[#20263A]/15"></span>

                    <span class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                        What I work with
                    </span>

                </div>

            </div>

        </div>

        <div class="bg-[#20263A] px-6 py-14 text-[#FAF9F6] lg:px-12 lg:py-20">

            <div class="mx-auto max-w-2xl lg:mx-0 lg:ml-auto">

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                01
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Web Development
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        HTML, CSS, JavaScript, PHP, Laravel.
                    </p>

                </div>

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                02
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                UI Design
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9FA]/20 transition-all duration-300 group-hover:translate-x-1 hover:text-[#8C3040]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        Figma, interface design, layout.
                    </p>

                </div>

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                03
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Database
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        MySQL, relational database.
                    </p>

                </div>

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                04
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Tools
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#8C3040]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        GitHub, Cursor, Visual Studio Code, Microsoft Office.
                    </p>

                </div>

                <div class="group py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                05
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Professional
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        Problem solving, communication, adaptability,
                        and continuous learning.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
