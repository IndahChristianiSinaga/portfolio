@extends('layouts.app')

@section('content')

    <section class="relative overflow-hidden bg-[#FAF9F6] px-6 py-14 text-[#20263A] lg:px-8 lg:py-18">

        <div class="relative mx-auto max-w-7xl">

            <div class="flex items-center gap-4">
                <span class="h-px w-10 bg-[#F0A0AA]"></span>

                <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                    Projects / 01
                </p>
            </div>

            <div class="mt-7 grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">

                <div>

                    <h1 class="max-w-5xl text-[11vw] font-semibold leading-[0.86] tracking-[-0.075em] sm:text-[5.5rem] lg:text-[7rem]">
                        Things
                        <span class="font-serif italic text-[#8C3040]">
                            I’ve
                        </span>
                        built<span class="text-[#3155D8]">.</span>
                    </h1>

                </div>

                <div class="lg:pb-2">

                    <p class="max-w-md text-sm leading-7 text-[#20263A]/55 sm:text-base">
                        A collection of things I’ve built while learning,
                        experimenting, and turning ideas into digital products.
                    </p>

                    <div class="mt-6 flex items-center gap-4">

                        <span class="h-7 w-px bg-[#F0A0AA]"></span>

                        <p class="text-[10px] uppercase tracking-[0.25em] text-[#20263A]/35">
                            Web · UI · Digital Products
                        </p>

                    </div>

                </div>

            </div>

            <div class="mt-12 flex items-center justify-between border-t border-[#20263A]/10 pt-4">

                <p class="text-[10px] uppercase tracking-[0.25em] text-[#20263A]/30">
                    Selected projects
                </p>

                <p class="text-xs text-[#3155D8]/60">
                    02 projects
                </p>

            </div>

        </div>

    </section>

<section class="relative overflow-hidden bg-[#3155D8] px-6 py-16 text-[#FAF9F6] lg:px-8 lg:py-24">

    <div class="relative mx-auto max-w-6xl">

        <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">

            <div class="group relative lg:order-1">

                <div class="relative mx-auto max-w-[540px]">

                    <div class="relative overflow-hidden rounded-[1.5rem] border border-[#FAF9F6]/15 bg-[#FAF9F6] p-2.5 shadow-[0_24px_60px_rgba(32,38,58,0.18)] transition duration-500 group-hover:-translate-y-1 sm:rounded-[1.75rem] sm:p-3">

                        <div class="relative aspect-[16/10] overflow-hidden rounded-[1.2rem] bg-[#20263A]">

                            <img
                                id="catemu-preview"
                                src="{{ asset('images/catemu-login.png') }}"
                                alt="CATEMU login page preview"
                                class="block h-full w-full object-cover object-top transition-opacity duration-300"
                            >

                        </div>

                        <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 items-center gap-1 rounded-full border border-[#FAF9F6]/10 bg-[#20263A]/90 p-1.5 backdrop-blur-md">

                            <button
                                type="button"
                                data-catemu-image="{{ asset('images/catemu-home.png') }}"
                                data-catemu-label="Home"
                                class="catemu-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Home
                            </button>

                            <button
                                type="button"
                                data-catemu-image="{{ asset('images/catemu-login.png') }}"
                                data-catemu-label="Login"
                                class="catemu-page-btn rounded-full bg-[#FAF9F6] px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#20263A] transition"
                            >
                                Login
                            </button>

                            <button
                                type="button"
                                data-catemu-image="{{ asset('images/catemu-register.png') }}"
                                data-catemu-label="Register"
                                class="catemu-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Register
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="lg:order-2">

                <p class="text-[10px] font-medium uppercase tracking-[0.25em] text-[#F0A0AA]">
                01 / Web Application
                </p>

                <h2 class="mt-5 text-4xl font-semibold tracking-[-0.06em] sm:text-5xl lg:text-6xl">
                    CATEMU<span class="font-serif italic text-[#F0A0AA]">.</span>
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-[#FAF9F6]/60 sm:text-base">
                A web project for helping cat owners find nearby
                clinics, shelters, and other sources of assistance.
                </p>

                <div class="mt-6">

                    <span class="inline-flex rounded-full border border-[#F0A0AA]/40 bg-[#F0A0AA]/10 px-4 py-2 text-[10px] uppercase tracking-[0.18em] text-[#F0A0AA]">
                        In Progress
                    </span>

                </div>

                <div class="mt-6 flex flex-wrap gap-2">

                    <span class="rounded-full border border-[#FAF9F6]/15 px-3 py-1.5 text-[10px] text-[#FAF9F6]/50">
                        Laravel
                    </span>

                    <span class="rounded-full border border-[#FAF9F6]/15 px-3 py-1.5 text-[10px] text-[#FAF9F6]/50">
                        MySQL
                    </span>

                    <span class="rounded-full border border-[#FAF9F6]/15 px-3 py-1.5 text-[10px] text-[#FAF9F6]/50">
                        UI Design
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="relative overflow-hidden bg-[#F1F4FA] px-6 py-16 text-[#20263A] lg:px-8 lg:py-24">

<div class="relative mx-auto max-w-6xl">

    <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">

        <div class="group relative lg:order-1">

            <div class="relative mx-auto max-w-[540px]">

                <div class="relative overflow-hidden rounded-[1.5rem] border border-[#20263A]/10 bg-[#20263A] p-2.5 shadow-2xl shadow-[#20263A]/15 transition duration-500 group-hover:-translate-y-1 sm:rounded-[1.75rem] sm:p-3">

                <div class="relative aspect-[16/10] overflow-hidden rounded-[1.2rem] bg-[#20263A]">

<img
    id="qr-preview"
    src="{{ asset('images/qr-login.png') }}"
    alt="QR Attendance System login preview"
    class="block h-full w-full object-cover object-top transition-opacity duration-300"
>

</div>

<div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 items-center gap-1 rounded-full border border-[#FAF9F6]/10 bg-[#20263A]/90 p-1.5 backdrop-blur-md">

<button
    type="button"
    data-qr-image="{{ asset('images/qr-login.png') }}"
    data-qr-label="Login"
    class="qr-page-btn rounded-full bg-[#FAF9F6] px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#20263A] transition"
>
    Login
</button>

<button
    type="button"
    data-qr-image="{{ asset('images/qr-dashboard-admin.png') }}"
    data-qr-label="Dashboard Admin"
    class="qr-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
>
    Admin
</button>

<button
    type="button"
    data-qr-image="{{ asset('images/qr-dashboard-guru.png') }}"
    data-qr-label="Dashboard Guru"
    class="qr-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
>
    Guru
</button>

</div>
                </div>

            </div>

        </div>

        <div class="lg:order-2">

            <p class="text-[10px] font-medium uppercase tracking-[0.25em] text-[#8C3040]">
            02 / Academic Project
            </p>

            <h2 class="mt-5 max-w-xl text-4xl font-semibold leading-[0.95] tracking-[-0.06em] sm:text-5xl lg:text-6xl">
                QR Attendance
                <span class="font-serif italic text-[#8C3040]">
                    System.
                </span>
            </h2>

            <p class="mt-5 max-w-md text-sm leading-7 text-[#20263A]/55 sm:text-base">
            A web-based student attendance system that uses
QR Code for attendance and provides attendance
management features for school staff.
            </p>

            <div class="mt-6">

                <span class="inline-flex rounded-full border border-[#3155D8]/20 bg-[#3155D8]/5 px-4 py-2 text-[10px] uppercase tracking-[0.18em] text-[#3155D8]">
                    Completed
                </span>

            </div>

            <div class="mt-6 flex flex-wrap gap-2">

                <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                    PHP
                </span>

                <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                    MySQL
                </span>

                <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                    QR Code
                </span>

            </div>

        </div>

    </div>

</div>

</section>

<section class="relative overflow-hidden bg-[#FAF9F6] px-6 py-16 text-[#20263A] lg:px-8 lg:py-24">

    <div class="relative mx-auto max-w-6xl">

        <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">

            <div class="group relative lg:order-1">

                <div class="relative mx-auto max-w-[540px]">

                    <div class="relative overflow-hidden rounded-[1.5rem] border border-[#20263A]/10 bg-[#20263A] p-2.5 shadow-[0_24px_60px_rgba(32,38,58,0.14)] transition duration-500 group-hover:-translate-y-1 sm:rounded-[1.75rem] sm:p-3">

                        <div class="relative aspect-[16/10] overflow-hidden rounded-[1.2rem] bg-[#17104A]">

                            <iframe
                                src="https://indahchristianisinaga.github.io/for-mamak/"
                                title="A Birthday in Space live preview"
                                class="h-full w-full border-0"
                                loading="lazy"
                                allow="autoplay; fullscreen"
                            ></iframe>

                        </div>

                    </div>

                </div>

            </div>

            <div class="lg:order-2">

                <p class="text-[10px] font-medium uppercase tracking-[0.25em] text-[#8C3040]">
                    03 / Personal Project
                </p>

                <h2 class="mt-5 max-w-xl text-4xl font-semibold leading-[0.95] tracking-[-0.06em] sm:text-5xl lg:text-6xl">
                    A Birthday
                    <span class="font-serif italic text-[#8C3040]">
                        in Space.
                    </span>
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-[#20263A]/55 sm:text-base">
                    A personal project created as a birthday gift, turning a simple idea into an interactive experience through animation and visuals.
                </p>

                <div class="mt-6">

                    <span class="inline-flex border border-[#3155D8]/25 bg-[#3155D8]/[0.06] px-4 py-2 text-[10px] uppercase tracking-[0.18em] text-[#3155D8]">
                        Completed
                    </span>

                </div>

                <div class="mt-6 flex flex-wrap gap-2">

                    <span class="border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        HTML
                    </span>

                    <span class="border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        CSS
                    </span>

                    <span class="border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        JavaScript
                    </span>

                </div>

                <div class="mt-7">

                    <a
                        href="https://indahchristianisinaga.github.io/for-mamak/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 text-[10px] font-medium uppercase tracking-[0.2em] text-[#3155D8] transition hover:text-[#20263A]"
                    >
                        View live project
                        <span aria-hidden="true">↗</span>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

    <section class="relative overflow-hidden bg-[#3155D8] px-6 py-20 text-[#FAF9F6] lg:px-8 lg:py-28">

        <div class="relative mx-auto max-w-7xl">

            <div class="grid gap-8 lg:grid-cols-[1fr_1fr] lg:items-end">

                <div>

                    <p class="text-[10px] uppercase tracking-[0.3em] text-[#F0A0AA]">
                        More to come
                    </p>

                    <h2 class="mt-5 max-w-2xl text-4xl font-semibold leading-tight tracking-[-0.04em] sm:text-5xl lg:text-6xl">
                        Still learning,
                        <span class="font-serif italic text-[#F0A0AA]">
                            still building.
                        </span>
                    </h2>

                </div>

                <div>

                    <p class="max-w-md text-sm leading-7 text-[#FAF9F6]/40 sm:text-base">
                        More projects will find their way here as I keep
                        learning, experimenting, and building new things.
                    </p>

                </div>

            </div>

        </div>

    </section>
    <script>
    const catemuPreview = document.getElementById('catemu-preview');
    const catemuButtons = document.querySelectorAll('.catemu-page-btn');

    catemuButtons.forEach((button) => {
        button.addEventListener('click', () => {

            const image = button.dataset.catemuImage;

            catemuPreview.style.opacity = '0';

            setTimeout(() => {
                catemuPreview.src = image;
                catemuPreview.style.opacity = '1';
            }, 150);

            catemuButtons.forEach((btn) => {
                btn.classList.remove(
                    'bg-[#FAF9F6]',
                    'text-[#20263A]'
                );

                btn.classList.add('text-[#FAF9F6]/55');
            });

            button.classList.remove('text-[#FAF9F6]/55');

            button.classList.add(
                'bg-[#FAF9F6]',
                'text-[#20263A]'
            );
        });
    });
    const qrPreview = document.getElementById('qr-preview');
const qrButtons = document.querySelectorAll('.qr-page-btn');

qrButtons.forEach((button) => {
    button.addEventListener('click', () => {

        const image = button.dataset.qrImage;

        qrPreview.style.opacity = '0';

        setTimeout(() => {
            qrPreview.src = image;
            qrPreview.style.opacity = '1';
        }, 150);

        qrButtons.forEach((btn) => {
            btn.classList.remove(
                'bg-[#FAF9F6]',
                'text-[#20263A]'
            );

            btn.classList.add('text-[#FAF9F6]/55');
        });

        button.classList.remove('text-[#FAF9F6]/55');

        button.classList.add(
            'bg-[#FAF9F6]',
            'text-[#20263A]'
        );
    });
});
</script>
@endsection
