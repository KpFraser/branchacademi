<x-master-layout>
    <x-login-header></x-login-header>
    <!-- Middle Content Start -->
    <section class="login_middle_content">
        <div class="container mx-auto flex justify-center">
            <div class="w-11/12 md:w-1/3 py-7">
                <div>
                    <div>
                        <h1 class="text-xl font-bold border-b pb-3">Log in to Your Branch Account!</h1>
                    </div>
                    <div class="py-3">
                        <x-tagui.button buttonType="button" buttonClass="border-2 text-sm font-semibold px-5 py-2.5 text-center inline-flex items-center w-full	mr-2 mb-2" iconClass="fab fa-meetup text-red-600 text-sm pr-2" buttonText="Continue with MeetUp"></x-tagui.button>
                        <x-tagui.button buttonType="button" buttonClass="border-2 text-sm font-semibold px-5 py-2.5 text-center inline-flex items-center w-full mr-2 mb-2" iconClass="fab fa-facebook text-blue-600 text-sm pr-2" buttonText="Continue with Facebook"></x-tagui.button>
                        <x-tagui.button buttonType="button" buttonClass="border-2 text-sm font-semibold px-5 py-2.5 text-center inline-flex items-center w-full	mr-2 mb-2" iconClass="fab fa-google text-red-600 text-sm pr-2" buttonText="Continue with Google"></x-tagui.button>
                        <x-tagui.button buttonType="button" buttonClass="border-2 text-sm font-semibold px-5 py-2.5 text-center inline-flex items-center w-full	mr-2 mb-2" iconClass="fab fa-github text-black text-sm pr-2" buttonText="Continue with Github"></x-tagui.button>
                    </div>
                    <div>
                        <div class="relative mt-1">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <x-tagui.icon iconClass="fas fa-envelope text-gray-700"></x-tagui.icon>
                            </div>
                            <x-input type="email" id="email" name="email" class="w-full pl-10 border-2" placeholder="Email" module="customInput"/>
                        </div>
                        <div class="relative mt-1">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <x-tagui.icon iconClass="fas fa-lock text-gray-700"></x-tagui.icon>
                            </div>
                            <x-input type="password" id="password" name="password" class="w-full pl-10 border-2" placeholder="Password" module="customInput"/>
                        </div>
                        <div class="py-2">
                            <x-tagui.button buttonType="button" buttonClass="w-full bg-purple-500 text-white py-2"  buttonText="Login" module="customButton"></x-tagui.button>
                        </div>
                        <div class="py-1 text-center text-sm">
                            <x-tagui.para paraClass="" paraText="or" ancrHref="#" ancrClass="text-purple-500 font-bold" ancrText="Forget Password" module="customParaAncr"></x-tagui.para>
                        </div>
                        <div class="pt-2 text-center text-sm">
                            <x-tagui.para paraClass="" paraText="Don't have an Account?" ancrHref="#" ancrClass="text-purple-500 font-bold" ancrText="Sign Up" module="customParaAncr"></x-tagui.para>
                        </div>
                        <div class="pt-1 text-center text-sm">
                            <x-tagui.ancr ancrHref="#" ancrClass="text-purple-500 font-bold" ancrText="Login with your organization" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Middle Content End -->
    <x-login-footer></x-login-footer>
</x-master-layout>