<nav class="relative w-full flex flex-wrap items-center justify-between bg-white text-gray-800 shadow-lg navbar navbar-expand-lg navbar-light py-8">
    <div class="container flex flex-wrap justify-between items-center mx-auto px-4">
        <a href="#" class="flex">
            <div class="flex items-center">
                <x-tagui.img imgClass="h-11" imgSrc="/img/logo_A.svg" imgAlt="Workflow"></x-tagui.img>
                <x-tagui.span spanClass="text-xs pl-3" spanText=""></x-tagui.span>
            </div>
        </a>
        <div class="flex md:order-2 items-center">
            <div class="hidden md:block">
                <x-tagui.ancr ancrHref="#" ancrClass="" ancrText="Login" />
                <x-tagui.button buttonType="button" buttonClass="p-3.5 bg-teal-900 text-white hover:bg-Emerald-900 mt-3"  buttonText="Get Started" module="customButton"></x-tagui.button>
            </div>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="inline-flex items-center p-2 text-sm bg-teal-900-500 text-white rounded-lg md:hidden hover:bg-teal-900-700 focus:outline-none focus:ring-gray-200 dark:hover:bg-teal-900-600 dark:focus:ring-teal-900-600" aria-controls="mobile-menu-4" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent1" id="navbarSupportedContent1">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium px-6">
                <x-tagui.span spanClass="text-teal-900" spanText="what's happenin'"></x-tagui.span>
                <li class="block md:hidden pl-3 pt-1">


                    <x-tagui.ancr ancrHref="#" ancrClass="" ancrText="Login" />
                    <x-tagui.button buttonType="button" buttonClass="p-3.5 bg-teal-900-500 text-white ml-3 hover:bg-teal-900-700" buttonText="Get Started" module="customButton"></x-tagui.button>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{$slot}}
