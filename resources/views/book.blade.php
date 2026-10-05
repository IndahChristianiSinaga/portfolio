@extends('layouts.app')

@section('content')

<section class="overflow-hidden bg-[#FAF9F6] py-12 lg:py-14 border-b border-[#20263A]/10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="flex items-end justify-between">

            <div>
                <p class="font-mono text-[9px] uppercase tracking-[0.24em] text-[#8C3040]">
                    Selected Works
                </p>

                <h1 class="mt-3 text-4xl font-semibold tracking-[-0.05em] text-[#20263A] sm:text-5xl">
                    Book
                </h1>
            </div>

            <p class="hidden font-mono text-[9px] uppercase tracking-[0.18em] text-[#20263A]/30 sm:block">
                Personal Writing
            </p>

        </div>

    </div>
</section>

<section class="overflow-hidden bg-[#FAF9F6] py-16 lg:py-20">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="text-center">

            <p
                id="bookCategoryTop"
                class="font-mono text-[9px] uppercase tracking-[0.22em] text-[#8C3040]"
            >
                Personal Writing
            </p>

            <h2
                id="bookTitle"
                class="mt-3 text-4xl font-semibold tracking-[-0.05em] text-[#20263A] sm:text-5xl lg:text-6xl"
            >
                I Know Who I Am
            </h2>

            <p
                id="bookAuthor"
                class="mt-3 font-mono text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40"
            >
                by Indah Christiani
            </p>

        </div>

        <div class="mx-auto mt-10 max-w-7xl">

            <div class="grid items-center gap-8 lg:grid-cols-[0.75fr_1.7fr_0.75fr] lg:gap-10">

                <div class="hidden lg:block">

                    <div class="max-w-[230px]">

                        <div class="flex items-center gap-3">

                            <span class="h-px w-7 bg-[#3155D8]"></span>

                            <span
                                id="bookLeftLabel"
                                class="font-mono text-[8px] uppercase tracking-[0.2em] text-[#8C3040]"
                            >
                                About the book
                            </span>

                        </div>

                        <h3
                            id="bookLeftTitle"
                            class="mt-4 text-2xl font-medium leading-tight tracking-[-0.04em] text-[#20263A]"
                        >
                            A story about becoming.
                        </h3>

                        <p
                            id="bookDescriptionLeft"
                            class="mt-4 text-sm leading-7 text-[#20263A]/55"
                        >
                            Sebuah perjalanan untuk mengenal diri sendiri,
                            memahami pertanyaan-pertanyaan yang sering kita simpan,
                            dan melihat kembali proses menjadi diri kita hari ini.
                        </p>

                    </div>

                </div>

                <div class="relative">

                    <div
                        id="bookCarousel"
                        class="relative mx-auto h-[620px] w-full max-w-[760px] select-none overflow-visible"
                    >

                        <div
                            id="bookStage"
                            class="absolute inset-x-0 top-0 h-[530px]"
                        >

                            <div
                                id="bookPrev"
                                class="book-card absolute left-1/2 top-1/2 h-[390px] w-[245px]
                                transition-all duration-700
                                ease-[cubic-bezier(.22,1,.36,1)]"
                            >

                                <div
                                    class="book-inner h-full w-full overflow-hidden rounded-[5px]
                                    border border-[#20263A]/10
                                    bg-[#FAF9F6]
                                    shadow-[0_25px_60px_rgba(23,23,23,0.15)]"
                                >

                                    <div
                                        class="flex h-full flex-col justify-between p-7 text-[#20263A]"
                                    >

                                        <div class="flex items-center justify-between">

                                            <span class="font-mono text-[8px] tracking-[0.16em] text-[#20263A]/35">
                                                02
                                            </span>

                                            <span class="font-mono text-[7px] uppercase tracking-[0.15em] text-[#20263A]/25">
                                                Sample
                                            </span>

                                        </div>

                                        <div>

                                            <p class="font-serif text-3xl italic">
                                                The Quiet
                                            </p>

                                            <p class="text-3xl font-semibold tracking-[-0.06em]">
                                                Things
                                            </p>

                                            <div class="mt-5 h-px w-9 bg-[#3155D8]"></div>

                                            <p class="mt-3 font-mono text-[7px] uppercase tracking-[0.16em] text-[#20263A]/40">
                                                Indah Christiani
                                            </p>

                                        </div>

                                        <span class="font-mono text-[7px] uppercase tracking-[0.16em] text-[#20263A]/25">
                                            Personal Writing
                                        </span>

                                    </div>

                                </div>

                            </div>

                            <div
                                id="bookCurrent"
                                class="book-card absolute left-1/2 top-1/2 z-30 h-[500px] w-[320px]
                                transition-all duration-700
                                ease-[cubic-bezier(.22,1,.36,1)]"
                            >

                                <div
                                    class="book-inner h-full w-full overflow-hidden rounded-[5px]
                                    border border-[#20263A]/10
                                    bg-[#FAF9F6]
                                    shadow-[0_35px_80px_rgba(23,23,23,0.20)]"
                                >

                                    <img
                                        id="bookCurrentImage"
                                        src="{{ asset('images/iknowwhoiam.png') }}"
                                        alt="I Know Who I Am"
                                        class="h-full w-full object-contain"
                                    >

                                </div>

                            </div>

                            <div
                                id="bookNext"
                                class="book-card absolute left-1/2 top-1/2 h-[390px] w-[245px]
                                transition-all duration-700
                                ease-[cubic-bezier(.22,1,.36,1)]"
                            >

                                <div
                                    class="book-inner h-full w-full overflow-hidden rounded-[5px]
                                    border border-[#20263A]/10
                                    bg-[#FAF9F6]
                                    shadow-[0_25px_60px_rgba(23,23,23,0.15)]"
                                >

                                    <div
                                        class="flex h-full flex-col justify-between p-7 text-[#20263A]"
                                    >

                                        <div class="flex items-center justify-between">

                                            <span class="font-mono text-[8px] tracking-[0.16em] text-[#20263A]/35">
                                                03
                                            </span>

                                            <span class="font-mono text-[7px] uppercase tracking-[0.15em] text-[#20263A]/25">
                                                Sample
                                            </span>

                                        </div>

                                        <div>

                                            <p class="text-3xl font-semibold tracking-[-0.06em]">
                                                Notes
                                            </p>

                                            <p class="font-serif text-3xl italic">
                                                to Myself
                                            </p>

                                            <div class="mt-5 h-px w-9 bg-[#3155D8]"></div>

                                            <p class="mt-3 font-mono text-[7px] uppercase tracking-[0.16em] text-[#20263A]/40">
                                                Indah Christiani
                                            </p>

                                        </div>

                                        <span class="font-mono text-[7px] uppercase tracking-[0.16em] text-[#20263A]/25">
                                            Personal Writing
                                        </span>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div
                            class="absolute bottom-[82px] left-1/2
                            w-full max-w-md -translate-x-1/2 px-6
                            text-center lg:hidden"
                        >

                            <p
                                id="bookDescriptionMobile"
                                class="text-sm leading-7 text-[#20263A]/55"
                            >
                                Sebuah perjalanan untuk mengenal diri sendiri,
                                memahami pertanyaan-pertanyaan yang sering kita simpan,
                                dan melihat kembali proses menjadi diri kita hari ini.
                            </p>

                        </div>

                        <div
                            class="absolute bottom-0 left-1/2 z-50
                            flex -translate-x-1/2 items-center gap-4"
                        >

                            <button
                                id="bookPreviousButton"
                                type="button"
                                aria-label="Previous book"
                                class="flex h-10 w-10 items-center justify-center
                                rounded-full border border-[#3155D8]/25
                                bg-transparent
                                text-[#3155D8]
                                transition-all duration-300
                                hover:border-[#D96C3F]
                                hover:bg-[#3155D8]
                                hover:text-[#20263A]"
                            >
                                <span class="text-sm">
                                    ←
                                </span>
                            </button>

                            <button
                                id="bookOpenButton"
                                type="button"
                                class="flex h-10 min-w-[78px] items-center justify-center
                                rounded-full bg-[#FAF9F6]
                                px-5
                                font-mono text-[8px] uppercase tracking-[0.16em]
                                text-[#20263A]
                                transition-all duration-300
                                hover:bg-[#3155D8]"
                            >
                                Read
                            </button>

                            <button
                                id="bookNextButton"
                                type="button"
                                aria-label="Next book"
                                class="flex h-10 w-10 items-center justify-center
                                rounded-full border border-[#3155D8]/25
                                bg-transparent
                                text-[#3155D8]
                                transition-all duration-300
                                hover:border-[#D96C3F]
                                hover:bg-[#3155D8]
                                hover:text-[#20263A]"
                            >
                                <span class="text-sm">
                                    →
                                </span>
                            </button>

                        </div>

                    </div>

                </div>

                <div class="hidden lg:block">

                    <div class="max-w-[230px]">

                        <div class="flex items-center gap-3">

                            <span class="h-px w-7 bg-[#3155D8]"></span>

                            <span
                                id="bookRightLabel"
                                class="font-mono text-[8px] uppercase tracking-[0.2em] text-[#8C3040]"
                            >
                                About the writing
                            </span>

                        </div>

                        <h3
                            id="bookRightTitle"
                            class="mt-4 text-2xl font-medium leading-tight tracking-[-0.04em] text-[#20263A]"
                        >
                            The story behind it.
                        </h3>

                        <p
                            id="bookDescriptionRight"
                            class="mt-4 text-sm leading-7 text-[#20263A]/55"
                        >
                            Buku ini masih dalam proses penulisan.
                            Setiap bagian dibangun dari refleksi,
                            pengalaman, dan pertanyaan yang membawa pembaca
                            lebih dekat kepada dirinya sendiri.
                        </p>

                        <div class="mt-5">

                            <span
                                id="bookStatus"
                                class="inline-flex border border-[#D96C3F]/30
                                px-3 py-1.5
                                font-mono text-[8px] uppercase tracking-[0.16em]
                                text-[#8C3040]"
                            >
                                Currently Writing
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="border-t border-[#20263A]/10 bg-[#FAF9F6] px-6 py-20 text-[#20263A] lg:px-8 lg:py-24">

    <div class="mx-auto max-w-7xl">

        <div class="flex items-end justify-between gap-6">
            <div>
                <p class="font-mono text-[9px] uppercase tracking-[0.22em] text-[#8C3040]">
                    Design Works
                </p>
                <h2 class="mt-4 text-4xl font-semibold tracking-[-0.04em] sm:text-5xl">
                    Visual pieces from the process.
                </h2>
            </div>
            <p class="hidden max-w-xs text-right text-sm leading-6 text-[#20263A]/50 sm:block">
                A small collection of design work created alongside my writing projects.
            </p>
        </div>

        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([1, 2, 3, 4] as $design)
                <button
                    type="button"
                    class="group overflow-hidden border border-[#20263A]/10 bg-white text-left transition duration-300 hover:-translate-y-1 hover:border-[#3155D8]/35 hover:shadow-[0_18px_40px_rgba(32,38,58,0.08)]"
                    data-design-image="{{ asset('images/design-' . $design . '.png') }}"
                    data-design-number="{{ sprintf('%02d', $design) }}"
                >
                    <div class="aspect-[4/5] overflow-hidden bg-[#EEF1F7]">
                        <img
                            src="{{ asset('images/design-' . $design . '.png') }}"
                            alt="Design work {{ $design }}"
                            class="h-full w-full object-cover transition duration-500 group-hover:scale-[1.03]"
                            loading="lazy"
                        >
                    </div>
                    <div class="flex items-center justify-between px-4 py-4">
                        <span class="font-mono text-[8px] uppercase tracking-[0.18em] text-[#20263A]/45">
                            Design {{ sprintf('%02d', $design) }}
                        </span>
                        <span class="text-sm text-[#3155D8] transition group-hover:translate-x-1">↗</span>
                    </div>
                </button>
            @endforeach
        </div>
    </div>
</section>

<div
    id="designModal"
    class="fixed inset-0 z-[100] hidden items-center justify-center bg-[#20263A]/75 p-5 backdrop-blur-sm"
    aria-hidden="true"
>
    <button id="designModalClose" type="button" aria-label="Close design preview" class="absolute right-5 top-5 flex h-10 w-10 items-center justify-center border border-white/20 bg-white/10 text-white transition hover:bg-white/20">
        ×
    </button>
    <div class="relative flex max-h-[90vh] max-w-5xl items-center justify-center">
        <img id="designModalImage" src="" alt="Design preview" class="max-h-[88vh] max-w-full object-contain shadow-2xl">
    </div>
</div>

<section class="bg-[#EEF1F7] px-6 py-20 text-[#20263A] lg:px-8">

    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">

            <div class="max-w-2xl">

                <p class="font-mono text-[9px] uppercase tracking-[0.22em] text-[#8C3040]">
                    More to come
                </p>

                <h2 class="mt-5 text-4xl font-semibold leading-tight tracking-[-0.04em] sm:text-5xl">
                    Some stories are still
                    <span class="font-serif italic font-normal">
                        being written.
                    </span>
                </h2>

            </div>

            <a
                href="/contact"
                class="inline-flex w-fit shrink-0 items-center rounded-full
                bg-[#FAF9F6] px-6 py-3
                text-sm font-medium text-[#20263A]
                transition-all duration-300
                hover:bg-[#3155D8]
                hover:text-[#20263A]"
            >
                Let's talk
                <span class="ml-2">
                    →
                </span>
            </a>

        </div>

    </div>

</section>

<script>

    const books = [

        {
            title: 'I Know Who I Am',
            author: 'Indah Christiani',
            category: 'Personal Writing',

            leftLabel: 'About the book',
            leftTitle: 'A story about becoming.',

            descriptionLeft:
                'Sebuah perjalanan untuk mengenal diri sendiri, memahami pertanyaan-pertanyaan yang sering kita simpan, dan melihat kembali proses menjadi diri kita hari ini.',

            rightLabel: 'About the writing',
            rightTitle: 'The story behind it.',

            descriptionRight:
                'Buku ini masih dalam proses penulisan. Setiap bagian dibangun dari refleksi, pengalaman, dan pertanyaan yang membawa pembaca lebih dekat kepada dirinya sendiri.',

            status: 'Currently Writing',

            image: "{{ asset('images/iknowwhoiam.png') }}",

            readUrl: null
        },

        {
            title: 'Kindness',
            author: 'Indah Christiani Sinaga',
            category: 'Personal Writing',

            leftLabel: 'About the book',
            leftTitle: 'Stories of kindness.',

            descriptionLeft:
                'Sebuah buku yang mengumpulkan cerita tentang kebaikan yang pernah hadir di antara kita, termasuk kebaikan-kebaikan kecil yang sering tidak terlihat.',

            rightLabel: 'About the writing',
            rightTitle: 'A collection in progress.',

            descriptionRight:
                'Buku ini masih dalam proses penulisan dan pengumpulan cerita. Setiap cerita menjadi bagian dari perjalanan untuk mengingat bahwa kebaikan sering hadir dalam hal-hal sederhana.',

            status: 'Currently Writing',

            image: "{{ asset('images/KINDNESS.png') }}",

            readUrl: null
        },

        {
            title: 'Notes to Myself',
            author: 'Indah Christiani',
            category: 'Sample Edition',

            leftLabel: 'About the book',
            leftTitle: 'A collection of reflections.',

            descriptionLeft:
                'Contoh konsep buku ketiga untuk memperlihatkan perpindahan antar karya dalam carousel.',

            rightLabel: 'About the writing',
            rightTitle: 'Still taking shape.',

            descriptionRight:
                'Ini merupakan sample visual. Nantinya bagian ini dapat diganti dengan karya, sinopsis, dan link bacaan yang sebenarnya.',

            status: 'Sample Edition',

            image: null,

            coverType: 'dark',

            readUrl: null
        }

    ];

    let currentBook = 0;

    const previousCard =
        document.getElementById('bookPrev');

    const currentCard =
        document.getElementById('bookCurrent');

    const nextCard =
        document.getElementById('bookNext');

    function renderSampleCover(card, book, number) {

        const inner =
            card.querySelector('.book-inner');

        if (book.image) {

            inner.className =
                'book-inner h-full w-full overflow-hidden rounded-[5px] border border-[#20263A]/10 bg-[#FAF9F6] shadow-[0_25px_60px_rgba(23,23,23,0.15)]';

            inner.innerHTML = `
                <img
                    src="${book.image}"
                    alt="${book.title}"
                    class="h-full w-full object-contain"
                >
            `;

            return;
        }

        const background =
            book.coverType === 'green'
                ? '#EEF1F7'
                : '#FAF9F6';

        inner.className =
            'book-inner h-full w-full overflow-hidden rounded-[5px] border border-[#20263A]/10 shadow-[0_25px_60px_rgba(23,23,23,0.15)]';

        inner.innerHTML = `

            <div
                class="flex h-full flex-col justify-between p-7 text-[#20263A]"
                style="background:${background};"
            >

                <div class="flex items-center justify-between">

                    <span class="font-mono text-[8px] tracking-[0.16em] text-[#20263A]/35">
                        ${String(number).padStart(2, '0')}
                    </span>

                    <span class="font-mono text-[7px] uppercase tracking-[0.15em] text-[#20263A]/25">
                        Sample
                    </span>

                </div>

                <div>

                    ${
                        book.title === 'Notes to Myself'
                            ? `
                                <p class="text-3xl font-semibold tracking-[-0.06em]">
                                    Notes
                                </p>

                                <p class="font-serif text-3xl italic">
                                    to Myself
                                </p>
                            `
                            : `
                                <p class="text-3xl font-semibold tracking-[-0.06em]">
                                    Notes
                                </p>

                                <p class="font-serif text-3xl italic">
                                    to Myself
                                </p>
                            `
                    }

                    <div class="mt-5 h-px w-9 bg-[#3155D8]"></div>

                    <p class="mt-3 font-mono text-[7px] uppercase tracking-[0.16em] text-[#20263A]/40">
                        ${book.author}
                    </p>

                </div>

                <span class="font-mono text-[7px] uppercase tracking-[0.16em] text-[#20263A]/25">
                    ${book.category}
                </span>

            </div>

        `;
    }

    function updateInformation() {

        const book =
            books[currentBook];

        document.getElementById('bookTitle')
            .textContent = book.title;

        document.getElementById('bookAuthor')
            .textContent = `by ${book.author}`;

        document.getElementById('bookCategoryTop')
            .textContent = book.category;

        document.getElementById('bookLeftLabel')
            .textContent = book.leftLabel;

        document.getElementById('bookLeftTitle')
            .textContent = book.leftTitle;

        document.getElementById('bookDescriptionLeft')
            .textContent = book.descriptionLeft;

        document.getElementById('bookRightLabel')
            .textContent = book.rightLabel;

        document.getElementById('bookRightTitle')
            .textContent = book.rightTitle;

        document.getElementById('bookDescriptionRight')
            .textContent = book.descriptionRight;

        document.getElementById('bookStatus')
            .textContent = book.status;

        document.getElementById('bookDescriptionMobile')
            .textContent = book.descriptionLeft;

    }

    function renderCarousel(animate = true) {

        const previousIndex =
            (currentBook - 1 + books.length)
            % books.length;

        const nextIndex =
            (currentBook + 1)
            % books.length;

        renderSampleCover(
            previousCard,
            books[previousIndex],
            previousIndex + 1
        );

        renderSampleCover(
            currentCard,
            books[currentBook],
            currentBook + 1
        );

        renderSampleCover(
            nextCard,
            books[nextIndex],
            nextIndex + 1
        );

        const duration =
            animate ? '700ms' : '0ms';

        previousCard.style.transitionDuration =
            duration;

        currentCard.style.transitionDuration =
            duration;

        nextCard.style.transitionDuration =
            duration;

        previousCard.style.transform = `
            translate(-50%, -50%)
            translateX(-205px)
            translateZ(-80px)
            scale(.76)
            rotate(-3deg)
        `;

        previousCard.style.opacity =
            '.78';

        previousCard.style.zIndex =
            '10';

        currentCard.style.transform = `
            translate(-50%, -50%)
            translateX(0)
            translateZ(100px)
            scale(1)
            rotate(0deg)
        `;

        currentCard.style.opacity =
            '1';

        currentCard.style.zIndex =
            '30';

        nextCard.style.transform = `
            translate(-50%, -50%)
            translateX(205px)
            translateZ(-80px)
            scale(.76)
            rotate(3deg)
        `;

        nextCard.style.opacity =
            '.78';

        nextCard.style.zIndex =
            '10';

        updateInformation();

    }

    function goNext() {

        currentBook =
            (currentBook + 1)
            % books.length;

        renderCarousel(true);

    }

    function goPrevious() {

        currentBook =
            (currentBook - 1 + books.length)
            % books.length;

        renderCarousel(true);

    }

    document
        .getElementById('bookNextButton')
        .addEventListener(
            'click',
            goNext
        );

    document
        .getElementById('bookPreviousButton')
        .addEventListener(
            'click',
            goPrevious
        );

    document
        .getElementById('bookOpenButton')
        .addEventListener(
            'click',
            function () {

                const book =
                    books[currentBook];

                if (book.readUrl) {

                    window.open(
                        book.readUrl,
                        '_blank',
                        'noopener,noreferrer'
                    );

                }

            }
        );

    renderCarousel(false);

    const designModal = document.getElementById('designModal');
    const designModalImage = document.getElementById('designModalImage');
    const designModalClose = document.getElementById('designModalClose');

    document.querySelectorAll('[data-design-image]').forEach(function (button) {
        button.addEventListener('click', function () {
            designModalImage.src = this.dataset.designImage;
            designModal.classList.remove('hidden');
            designModal.classList.add('flex');
            designModal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('overflow-hidden');
        });
    });

    function closeDesignModal() {
        designModal.classList.add('hidden');
        designModal.classList.remove('flex');
        designModal.setAttribute('aria-hidden', 'true');
        designModalImage.src = '';
        document.body.classList.remove('overflow-hidden');
    }

    designModalClose.addEventListener('click', closeDesignModal);

    designModal.addEventListener('click', function (event) {
        if (event.target === designModal) {
            closeDesignModal();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && !designModal.classList.contains('hidden')) {
            closeDesignModal();
        }
    });

</script>

@endsection
