@extends('layouts.app')

@section('content')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-[#FAF9F6] px-6 py-24 text-[#20263A] lg:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">

            <div class="max-w-5xl">
                <p class="text-sm font-medium uppercase tracking-[0.25em] text-[#8C3040]">
                    Contact
                </p>

                <h1 class="mt-6 text-5xl font-semibold leading-[0.98] tracking-[-0.045em] sm:text-6xl lg:text-[7rem]">
                    Let’s make something
                    <span class="font-serif italic text-[#3155D8]">meaningful.</span>
                </h1>

                <p class="mt-8 max-w-2xl text-lg leading-8 text-[#20263A]/60">
                    Whether you have an opportunity, a project idea,
                    or simply want to connect, feel free to reach out.
                </p>
            </div>

        </div>
    </section>


    {{-- CONTACT OPTIONS --}}
    <section class="bg-[#F1F4FA] px-6 py-24 text-[#20263A] lg:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">

            <div class="grid gap-14 lg:grid-cols-[0.8fr_1.2fr] lg:gap-20">

                {{-- LEFT --}}
                <div>
                    <p class="text-sm font-medium uppercase tracking-[0.25em] text-[#8C3040]">
                        Get in touch
                    </p>

                    <h2 class="mt-5 max-w-md text-4xl font-semibold leading-tight tracking-[-0.03em] sm:text-5xl">
                        Say hello.
                    </h2>

                    <p class="mt-6 max-w-md text-base leading-7 text-[#20263A]/55">
                        Open to conversations, opportunities, collaborations,
                        and interesting ideas.
                    </p>
                </div>


                {{-- RIGHT --}}
                <div class="divide-y divide-[#20263A]/10 border-y border-[#20263A]/10">

                    {{-- EMAIL --}}
                    <a
                        href="mailto:christianisinaga2512@gmail.com"
                        class="group flex items-center justify-between gap-6 py-7 transition-all duration-300 hover:px-3"
                    >
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                                Email
                            </p>

                            <p class="mt-2 text-lg font-medium sm:text-xl">
                                christianisinaga2512@gmail.com
                            </p>
                        </div>

                        <span class="text-xl text-[#20263A]/25 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>
                    </a>


                    {{-- WHATSAPP --}}
                    <a
                        href="https://wa.me/62881025919154"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex items-center justify-between gap-6 py-7 transition-all duration-300 hover:px-3"
                    >
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                                WhatsApp
                            </p>

                            <p class="mt-2 text-lg font-medium sm:text-xl">
                                Let’s chat
                            </p>
                        </div>

                        <span class="text-xl text-[#20263A]/25 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#25D366]">
                            ↗
                        </span>
                    </a>


                    {{-- LINKEDIN --}}
                    <a
                        href="https://www.linkedin.com/in/indah-christiani-sinaga/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex items-center justify-between gap-6 py-7 transition-all duration-300 hover:px-3"
                    >
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                                LinkedIn
                            </p>

                            <p class="mt-2 text-lg font-medium sm:text-xl">
                                indah-christiani-sinaga
                            </p>
                        </div>

                        <span class="text-xl text-[#20263A]/25 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#0A66C2]">
                            ↗
                        </span>
                    </a>


                    {{-- INSTAGRAM --}}
                    <a
                        href="https://www.instagram.com/sweethyin/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex items-center justify-between gap-6 py-7 transition-all duration-300 hover:px-3"
                    >
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                                Instagram
                            </p>

                            <p class="mt-2 text-lg font-medium sm:text-xl">
                                @sweethyin
                            </p>
                        </div>

                        <span class="text-xl text-[#20263A]/25 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#E1306C]">
                            ↗
                        </span>
                    </a>


                    {{-- YOUTUBE --}}
                    <a
                        href="https://www.youtube.com/channel/UCOic04wLkqPXSX1TyfiS3lA"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex items-center justify-between gap-6 py-7 transition-all duration-300 hover:px-3"
                    >
                        <div>
                            <p class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                                YouTube
                            </p>

                            <p class="mt-2 text-lg font-medium sm:text-xl">
                                My channel
                            </p>
                        </div>

                        <span class="text-xl text-[#20263A]/25 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#FF0000]">
                            ↗
                        </span>
                    </a>

                </div>

            </div>

        </div>
    </section>


    {{-- CLOSING --}}
    <section class="bg-[#3155D8] px-6 py-24 text-[#FAF9F6] lg:px-8 lg:py-28">
        <div class="mx-auto max-w-7xl">

            <div class="flex flex-col justify-between gap-10 md:flex-row md:items-end">

                <div>
                    <p class="text-sm uppercase tracking-[0.25em] text-[#F0A0AA]">
                        Stay connected
                    </p>

                    <h2 class="mt-4 max-w-2xl text-3xl font-medium leading-tight tracking-[-0.02em] sm:text-4xl">
                        Good things can start with a simple conversation.
                    </h2>
                </div>

                <a
                    href="mailto:christiani2512@gmail.com"
                    class="group inline-flex w-fit items-center gap-3 border-b border-[#FAF9F6]/35 pb-2 text-sm text-[#FAF9F6]/75 transition-colors duration-300 hover:border-[#FAF9F6] hover:text-[#FAF9F6]"
                >
                    Send me an email
                    <span class="transition-transform duration-300 group-hover:translate-x-1">
                        ↗
                    </span>
                </a>

            </div>

        </div>
    </section>

@endsection
