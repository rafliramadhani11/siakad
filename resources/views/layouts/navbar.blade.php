<nav class="mx-auto flex max-w-8xl items-center justify-between py-6 px-20" aria-label="Global">

    <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5 flex items-center">
            <img class="h-14" src="{{ asset('img/bsi-logo.png') }}" alt="">
            <span class="ml-3 text-xl font-bold">Univ Bina Sarana Informatika</span>
        </a>
    </div>

    <div class="hidden lg:flex lg:gap-x-6">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 uppercase">Tentang UBSI</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 uppercase">Fakultas</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 uppercase">PSDKU</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 uppercase">Lokasi Kampus</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 uppercase">Akademik</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 uppercase">Mahasiswa</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 uppercase">Hubungi Kami</a>
    </div>

</nav>

<!-- Mobile menu, show/hide based on menu open state. -->
<div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div
        class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                    alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    <div class="-mx-3">
                        <button type="button"
                            class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            aria-controls="disclosure-1" aria-expanded="false">
                            Product
                            <!--
                    Expand/collapse icon, toggle classes based on menu open state.

                    Open: "rotate-180", Closed: ""
                  -->
                            <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- 'Product' sub-menu, show/hide based on menu state. -->
                        <div class="mt-2 space-y-2" id="disclosure-1">
                            <a href="#"
                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                            <a href="#"
                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                            <a href="#"
                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                            <a href="#"
                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                            <a href="#"
                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                            <a href="#"
                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch
                                demo</a>
                            <a href="#"
                                class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact
                                sales</a>
                        </div>
                    </div>
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                </div>
                <div class="py-6">
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                        in</a>
                </div>
            </div>
        </div>
    </div>
</div>
