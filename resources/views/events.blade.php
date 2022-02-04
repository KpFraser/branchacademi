<x-master-layout>
    <x-events-header></x-events-header>
    <!-- Main Content Start -->
    <section class="main-content">
        <div class="container mx-auto px-3 py-8">
            <div class="grid grid-cols-1 bg-gray-100 text-center py-12">
                <h1 class="text-3xl font-bold">Events & News</h1>
                <x-tagui.para paraClass="font-bold" paraText="2022"></x-tagui.para>
            </div>
        </div>
    </section>
    <section>
        <div class="container mx-auto px-2">
            <div class="grid lg:grid-cols-2 md:grid-cols-1 py-5">
                <div class="px-1">
                    <div class="flex justify-center py-2">
                        <div class="block rounded-lg border shadow-lg bg-white text-center w-full">
                            <div class="py-3 px-6 border-b border-gray-300 bg-black flex justify-between rounded">
                                <x-tagui.img imgClass="" imgSrc="{{url('/img/gardening.svg')}}" imgAlt="Gardening"></x-tagui.img>
                                <x-tagui.img imgClass="" imgSrc="{{url('/img/pickelball.svg')}}" imgAlt="Gardening"></x-tagui.img>
                                <x-tagui.img imgClass="" imgSrc="{{url('/img/running.svg')}}" imgAlt="Gardening"></x-tagui.img>
                                <x-tagui.img imgClass="" imgSrc="{{url('/img/litter_picking.svg')}}" imgAlt="Gardening"></x-tagui.img>
                            </div>
                            <div class="p-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-1">
                    <div class="grid lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-x-2 py-2">
                        <div class="py-1">
                            <div class="">
                                <div class="block rounded-lg shadow-lg bg-white w-full border">
                                    <div class="border-gray-300 flex justify-between p-3">
                                        <div class="flex">
                                            <x-tagui.img imgClass="h-11 rounded-full w-11" imgSrc="{{url('/img/twitterdp.jpg')}}" imgAlt="twitter-dp"></x-tagui.img>
                                            <div class="font-bold pl-3 pt-1 text-xs">
                                                <x-tagui.para paraClass="" paraText="Wonder of Science"></x-tagui.para>
                                                <x-tagui.span spanClass="font-medium text-gray-500" spanText="@wonderofscience"></x-tagui.span>
                                            </div>
                                        </div>
                                        <div class="flex items-center text-blue-500 text-lg">
                                            <x-tagui.icon iconClass="fab fa-twitter"></x-tagui.icon>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <x-tagui.para paraClass="pb-3 text-sm" paraText="A night fight over the Moonlight Earth in the International Space Center"></x-tagui.para>
                                        <x-tagui.img imgClass="rounded w-full" imgSrc="{{url('/img/twitterdp.jpg')}}" imgAlt="twitter-post"></x-tagui.img>
                                    </div>
                                    <div class="border-gray-300 flex justify-between px-4 py-3 text-xs text-gray-500">
                                        <div>
                                            <x-tagui.para paraClass="" paraText="10:45 AM - Jan 11 2022"></x-tagui.para>
                                        </div>
                                        <div>
                                            <x-tagui.icon iconClass="fas fa-info-circle"></x-tagui.icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-1">
                            <div class="block rounded-lg shadow-lg bg-white w-full border">
                                    <div class="border-gray-300 flex justify-between p-3">
                                        <div class="flex">
                                            <x-tagui.img imgClass="h-11 rounded-full w-11" imgSrc="{{url('/img/twitterdp.jpg')}}" imgAlt="twitter-dp"></x-tagui.img>
                                            <div class="font-bold pl-3 pt-1 text-xs">
                                                <x-tagui.para paraClass="" paraText="Wonder of Science"></x-tagui.para>
                                                <x-tagui.span spanClass="font-medium text-gray-500" spanText="@wonderofscience"></x-tagui.span>
                                            </div>
                                        </div>
                                        <div class="flex items-center text-blue-500 text-lg">
                                            <x-tagui.icon iconClass="fab fa-twitter"></x-tagui.icon>
                                        </div>
                                    </div>
                                    <div class="p-6">
                                        <x-tagui.para paraClass="pb-3 text-sm" paraText="A night fight over the Moonlight Earth in the International Space Center"></x-tagui.para>
                                        <x-tagui.img imgClass="rounded w-full" imgSrc="{{url('/img/twitterdp.jpg')}}" imgAlt="twitter-post"></x-tagui.img>
                                    </div>
                                    <div class="border-gray-300 flex justify-between px-4 py-3 text-xs text-gray-500">
                                        <div>
                                            <x-tagui.para paraClass="" paraText="10:45 AM - Jan 11 2022"></x-tagui.para>
                                        </div>
                                        <div>
                                            <x-tagui.icon iconClass="fas fa-info-circle"></x-tagui.icon>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content End -->
    <x-master-footer></x-master-footer>
</x-master-layout>
