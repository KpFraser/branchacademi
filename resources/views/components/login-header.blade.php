<nav class="relative w-full flex flex-wrap items-center justify-between bg-white text-gray-800 shadow-lg navbar navbar-expand-lg navbar-light py-8">
    <div class="container flex flex-wrap justify-between items-center mx-auto px-2">
        <a href="#" class="flex">
            <div class="flex items-center">
                <x-tagui.img imgClass="h-11" imgSrc="/img/logo_A.svg" imgAlt="Workflow"></x-tagui.img>
                <x-tagui.span spanClass="text-xs pl-3" spanText="Why branch Academi?"></x-tagui.span>
            </div>
        </a>
        <div class="flex lg:order-2 items-center">
            <div class="hidden lg:block">
                <x-tagui.button buttonType="button" buttonClass="px-3 py-2 text-sm text-bold bg-transparent text-black border-2 border-black ml-3 hover:bg-black hover:text-white" buttonText="Login" module="customButton"></x-tagui.button>
                <x-tagui.button buttonType="button" buttonClass="px-3 py-2 text-sm text-bold bg-black text-white border-2 border-black ml-3 hover:bg-transparent hover:text-black" buttonText="Sign Up" module="customButton"></x-tagui.button>
                <x-tagui.icon iconClass="fas fa-globe border-2 border-black px-3 py-2.5 text-xs hover:text-white hover:bg-black ml-2"></x-tagui.icon>
            </div>
            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="inline-flex items-center p-2 text-sm bg-teal-900-500 text-white rounded-lg lg:hidden hover:bg-teal-900-700 focus:outline-none focus:ring-gray-200 dark:hover:bg-teal-900-600 dark:focus:ring-teal-900-600" aria-controls="mobile-menu-4" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent1" id="navbarSupportedContent1">
            <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium px-6 items-center">
                <x-tagui.li ancrHref="#" ancrClass="block py-2 pr-4 pl-3 text-gray-700 hover:text-gray-600 border-b border-gray-100 hover:bg-teal-900-500 lg:hover:bg-transparent lg:border-0 lg:hover:text-teal-900-700 lg:p-0 lg:dark:hover:dark:text-gray-600 dark:text-gray-400 dark:hover:bg-teal-900-500 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700" ancrText="Categories" ></x-tagui.li>           
                <li>
                    <div class="relative mt-1">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <x-tagui.icon iconClass="fas fa-search"></x-tagui.icon>
                        </div>
                        <x-input type="text" class="bg-gray-100 border-gray-300 pl-10 rounded-full w-80 text-sm" placeholder="Search for Anything" module="customInput"/>
                    </div>
                </li>
                <x-tagui.li ancrHref="#" ancrClass="block py-2 pr-4 pl-3 text-gray-700 lg:hover:text-gray-600 border-b border-gray-100 hover:bg-gray-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-teal-900-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" ancrText="Branch Academi" ></x-tagui.li>
                <x-tagui.li ancrHref="#" ancrClass="block py-2 pr-4 pl-3 text-gray-700 lg:hover:text-gray-600 border-b border-gray-100 hover:bg-gray-500 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-teal-900-500 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" ancrText="Sponser on branch" ></x-tagui.li>
                <li class="block lg:hidden pl-3 pt-1">
                    <x-tagui.button buttonType="button" buttonClass="px-3 py-2 text-sm text-bold bg-transparent text-black border-2 border-black ml-3 hover:bg-black hover:text-white" buttonText="Login" module="customButton"></x-tagui.button>
                    <x-tagui.button buttonType="button" buttonClass="px-3 py-2 text-sm text-bold bg-black text-white border-2 border-black ml-3 hover:bg-transparent hover:text-black" buttonText="Sign Up" module="customButton"></x-tagui.button>
                    <x-tagui.icon iconClass="fas fa-globe border-2 border-black px-3 py-2.5 text-xs hover:text-white hover:bg-black ml-2"></x-tagui.icon>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{$slot}}