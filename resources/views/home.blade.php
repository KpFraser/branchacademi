<x-master-layout>
	<x-master-header></x-master-header>
    <!-- Main Content Start -->
    <section class="main-content">
        <div class="grid lg:grid-cols-2 md:grid-cols-1 py-9 items-center justify-items-center">
            <div class="py-3">
                <h1 class="text-4xl leading-normal font-bold">With the right<br> connections,<br> 
                    <x-tagui.span spanClass="text-purple-600" spanText="anything's possibles"></x-tagui.span>
                </h1>
                <x-tagui.para paraClass="text-sm text-gray-600" paraText="Give yourself the connections needed to achieve"></x-tagui.para>
                <x-tagui.button buttonType="button" buttonClass="p-3.5 bg-purple-500 text-white hover:bg-purple-600 mt-3"  buttonText="Get Started" module="customButton"></x-tagui.button>
            </div>
            <div class="py-3">
                <x-tagui.img imgClass="h-80" imgSrc="{{url('img/logo_branch.svg')}}" imgAlt="Branch Logo"></x-tagui.img>
            </div>
        </div>
        <div class="grid grid-cols-1">
            <div class="p-5">
                <h6 class="text-center">Branch Academi is trusted by communities around the world</h6>
            </div>
        </div>
    </section>
    <section class="middle-content">
        <div class="">
            <div class="text-center py-5">
                <h1 class="text-3xl font-bold">Personal Growth- with your Neighbourhood</h1>
                <x-tagui.para paraClass="py-2" paraText="Lorem ipsum dolor sit, amet consectetur adipisicing elit"></x-tagui.para>
            </div>
        </div>
        <!-- Services -->
        <div class="grid lg:grid-cols-2 md:grid-cols-1 py-10 items-center justify-items-center">
            <div class="py-3">
                <x-tagui.img imgClass="h-72" imgSrc="{{url('img/clusters.svg')}}" imgAlt="Cluster"></x-tagui.img>
            </div>
            <div class="py-3">
                <h4 class="font-bold text-xl py-2">Clusters</h4>
                <x-tagui.para paraClass="" iconClass="fas fa-check text-purple-600 py-2" paraText="Organizing Group with MeetUp" module="customPara"></x-tagui.para>
                <x-tagui.para paraClass="" iconClass="fas fa-check text-purple-600 py-2" paraText="Coalecses group with Neighbourhood" module="customPara"></x-tagui.para>
                <x-tagui.para paraClass="" iconClass="fas fa-check text-purple-600 py-2" paraText="Groups have a role for Everyone" module="customPara"></x-tagui.para>
                <x-tagui.ancr ancrHref="#" ancrClass="fas fa-check text-purple-600 py-2" ancrText="Learn More" iconClass="fas fa-greater-than text-purple-600" module="customAncr"> </x-tagui.ancr>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 md:grid-cols-1 py-10 items-center justify-items-center">
            <div class="py-3">
                <h4 class="font-bold text-xl py-2">Developing & Empowering Leaders</h4>
                <x-tagui.para paraClass="" paraText="Branch Academi has a role for Everyone. From Networks,<br> Leaders, Assistants, Attendes, Friends and Sponsers."></x-tagui.para>
                <x-tagui.ancr ancrHref="#" ancrClass="text-purple-600 font-semibold pt-3.5" ancrText="See what role you can play" iconClass="fas fa-greater-than text-purple-600" module="customAncr"> </x-tagui.ancr>
            </div>
            <div class="py-3">
                <x-tagui.img imgClass="h-72" imgSrc="{{url('img/developing.svg')}}" imgAlt="Developing"></x-tagui.img>
            </div>
        </div>
        <div class="grid lg:grid-cols-2 md:grid-cols-1 py-10  items-center justify-items-center">
            <div class="py-3">
                <x-tagui.img imgClass="h-72" imgSrc="{{url('img/educating.svg')}}" imgAlt="Educating"></x-tagui.img>
            </div>
            <div class="py-3">
                <h4 class="font-bold text-xl py-2">Educating</h4>
                <x-tagui.para paraClass="" iconClass="fas fa-check text-purple-600 py-2" paraText="Supporting Neighbour for Personal growth" module="customPara"></x-tagui.para>
                <x-tagui.para paraClass="" iconClass="fas fa-check text-purple-600 py-2" paraText="SOQF Qualifications" module="customPara"></x-tagui.para>
                <x-tagui.para paraClass="" iconClass="fas fa-check text-purple-600 py-2" paraText="Partnering & Linking Communities" module="customPara"></x-tagui.para>
                <x-tagui.ancr ancrHref="#" ancrClass="text-purple-600 font-semibold pt-3.5" ancrText="Learn about Community Success" iconClass="fas fa-greater-than text-purple-600" module="customAncr"> </x-tagui.ancr>
            </div>
        </div>
    </section>
    <!-- Main Content End -->
    <x-master-footer></x-master-footer>
</x-master-layout>

