<x-master-layout>
	<x-master-header></x-master-header>
		<!-- Main Content Start -->
		<section class="main-content">
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-9 items-center justify-items-center">
						<div class="py-3">
								<h1 class="text-4xl leading-normal font-bold">With the right support,<br>
										<x-tagui.span spanClass="text-teal-900" spanText="anything's possibles"></x-tagui.span>
								</h1>
								<x-tagui.para paraClass="text-sm text-gray-600" paraText="Give yourself the connections needed to achieve"></x-tagui.para>
								<x-tagui.button buttonType="button" buttonClass="p-3.5 bg-teal-900 text-white hover:bg-Emerald-900 mt-3"  buttonText="Get Started" module="customButton"></x-tagui.button>
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
								<x-tagui.para paraClass="py-2" paraText="MOTIVATE, VALIDATE, EDUCATE"></x-tagui.para>
						</div>
				</div>
				<!-- Services -->
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-10 items-center justify-items-center">
						<div class="py-3">
								<x-tagui.img imgClass="h-72" imgSrc="{{url('img/Motivate.svg')}}" imgAlt="Motivate"></x-tagui.img>
						</div>
						<div class="py-3">
								<h4 class="font-bold text-xl py-2">Motivation</h4>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="We are better together" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Networking between Neighbourhoods" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Creating recreation" module="customPara"></x-tagui.para>
								<x-tagui.ancr ancrHref="#" ancrClass="fas fa-check text-teal-900 py-2" ancrText="Learn More" iconClass="fas fa-greater-than text-dark teal-900" module="customAncr"> </x-tagui.ancr>
						</div>
				</div>
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-10 items-center justify-items-center">
						<div class="py-3">
								<h4 class="font-bold text-xl py-2">Validation</h4>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="A role for everyone" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Accountability through teamwork" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Getting things done" module="customPara"></x-tagui.para>
								<x-tagui.ancr ancrHref="#" ancrClass="text-teal-900 font-semibold pt-3.5" ancrText="See what role you can play" iconClass="fas fa-greater-than text-teal-900" module="customAncr"> </x-tagui.ancr>
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
								<h4 class="font-bold text-xl py-2">Education</h4>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Supporting Neighours" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="SCQF Qualifications" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Linking Communities" module="customPara"></x-tagui.para>
								<x-tagui.ancr ancrHref="#" ancrClass="text-teal-900 font-semibold pt-3.5" ancrText="Learn about Community Success" iconClass="fas fa-greater-than text-teal-900" module="customAncr"> </x-tagui.ancr>
						</div>
				</div>
		</section>
		<!-- Main Content End -->
		<x-master-footer></x-master-footer>
</x-master-layout>
