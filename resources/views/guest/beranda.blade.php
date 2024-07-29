<x-guest-layout>
    {{-- <div class="px-16 py-10 flex items-center justify-center">
        <div class="bg-white rounded-md shadow-sm max-w-5xl overflow-hidden" x-data="{
            slides: ['{{ asset('img/Slider-BSI.jpeg') }}', '{{ asset('img/Slider-BSI2.jpeg') }}', '{{ asset('img/Slider-BSI3.jpeg') }}'],
            activeSlideIndex: 0,
            delay: 2000
        }"
            x-init="() => {
                setInterval(() => {
                    delay -= 10
                    if (delay === 0) {
                        if (activeSlideIndex === slides.length - 1) {
                            activeSlideIndex = 0
                        } else {
                            activeSlideIndex += 1
                        }
                        delay = 2000
                    }
                }, 10)
            }">
            <ul class="relative">
                <template x-for="(slide, index) in slides" >
                    <li x-bind:class="{ 'absolute inset-0 opacity-0': index !== activeSlideIndex }">
                        <img x-bind:src="slide" alt="bsi-slider1" >
                    </li>
                </template>
            </ul>
        </div>

    </div> --}}

    <div x-data="{
        slides: [{
                imgSrc: '{{ asset('img/Slider-BSI.jpeg') }}',
            },
            {
                imgSrc: '{{ asset('img/Slider-BSI2.jpeg') }}',
            },
            {
                imgSrc: '{{ asset('img/Slider-BSI3.jpeg') }}',
            },
        ],
        currentSlideIndex: 1,
        previous() {
            if (this.currentSlideIndex > 1) {
                this.currentSlideIndex = this.currentSlideIndex - 1
            } else {
                // If it's the first slide, go to the last slide
                this.currentSlideIndex = this.slides.length
            }
        },
        next() {
            if (this.currentSlideIndex < this.slides.length) {
                this.currentSlideIndex = this.currentSlideIndex + 1
            } else {
                // If it's the last slide, go to the first slide
                this.currentSlideIndex = 1
            }
        },
    }" class="relative px-16 py-10 w-full overflow-hidden">

        <!-- slides -->
        <!-- Change min-h-[50svh] to your preferred height size -->
        <div class="relative h-[65svh] max-w-5xl mx-auto">
            {{-- PREVIOUS BUTTON --}}
            <button type="button"
                class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 "
                aria-label="previous slide" x-on:click="previous()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                    stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            {{-- IMG CONTENT --}}
            <template x-for="(slide, index) in slides">
                <div x-show="currentSlideIndex == index + 1" class="absolute inset-0"
                    x-transition.opacity.duration.1000ms>
                    <img class="absolute w-full h-full inset-0 text-slate-700 " x-bind:src="slide.imgSrc"
                        x-bind:alt="slide.imgAlt" />
                </div>
            </template>

            {{-- NEXT BUTTON --}}
            <button type="button"
                class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/40 p-2 text-slate-700 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:outline-offset-0 "
                aria-label="next slide" x-on:click="next()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"
                    stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>

            {{-- INDICATORS --}}
            <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2 "
                role="group" aria-label="slides">
                <template x-for="(slide, index) in slides">
                    <button class="size-2 cursor-pointer rounded-full transition bg-white "
                        x-on:click="currentSlideIndex = index + 1"
                        x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-700 ' :
                            'bg-white '
                        ]"
                        x-bind:aria-label="'slide ' + (index + 1)"></button>
                </template>
            </div>
        </div>


    </div>


</x-guest-layout>
