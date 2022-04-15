<x-master-layout>
	<x-master-header></x-master-header>
<link rel="stylesheet" href="https://aatrox.herokuapp.com/css/main.bundle.css" />
<link rel="apple-touch-icon" sizes="180x180" href="https://aatrox.herokuapp.com/images/favicons/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="https://aatrox.herokuapp.com/images/favicons/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="https://aatrox.herokuapp.com/images/favicons/favicon-16x16.png" />
<link rel="manifest" href="https://aatrox.herokuapp.com/images/favicons/site.webmanifest" />
<link rel="mask-icon" href="https://aatrox.herokuapp.com/images/favicons/safari-pinned-tab.svg" color="#5bbad5" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="theme-color" content="#ffffff" />
<link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
        <!-- Validation Errors -->
<div class="auth-layout-wrap flex justify-center min-h-screen flex-col bg-cover items-center"	    style="background-image: url('img/SignUp.svg')">
    <div class="container-session-v1 max-w-4xl">
        <div class="card overflow-hidden">
            <div class="grid grid-cols-12">
                <div class="col-span-12 bg-gray-200 lg:col-span-6 flex items-center justify-center">
                    <div class="p-4"><img class="hidden lg:block" src="http://127.0.0.1:8000/img/SignIn.svg" alt="" /></div>
                </div>
        <div class="col-span-12 lg:col-span-6 flex items-center">
        <div class="p-4">
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" action="{{ route('register') }}">
            @csrf
                            <div class="mb-3"><input class="ul-form-input" id="name" type="text" name="name" required="required" autofocus="autofocus" :value="old('name')" placeholder="Username"></div>
                            <div class="mb-3"><input class="ul-form-input" id="email" type="email" name="email" required="required" :value="old('email')" placeholder="Email"></div>
                            <div class="mb-3"><input class="ul-form-input" id="password" type="password" name="password" required="required" placeholder="Password" autocomplete="new-password">
                            </div>
                            <div class="mb-3"><input class="ul-form-input" id="password_confirmation" type="password" name="password_confirmation" required="required" placeholder="Confirm Password">
                            </div>
                            <div class="mb-8"><label class="inline-flex items-center mt-3"><input
                                        class="form-checkbox h-5 w-5 border border-gray-900 text-primary-500"
                                        type="checkbox" checked="" /><span class="ml-2 text-gray-700">I agree with terms
                                        and condtions.</span></label></div>
                            <div class="mb-4">
                                <div class="flex flex-wrap items-center">
									<button type="submit" class="btn btn btn-primary mr-2">
									    Sign Up
									</button>
                                    <p class="font-bold text-sm mr-2">Or</p><a
                                        class="text-primary-500 font-bold text-xl hover:text-primary-500" href="{{route('login')}}">Sign In</a>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<x-master-footer></x-master-footer>
</x-master-layout>