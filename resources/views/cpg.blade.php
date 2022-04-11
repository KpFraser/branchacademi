<x-master-layout>
	<x-master-header></x-master-header>
		<!-- Main Content Start -->
		<section class="main-content">
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-9 items-center justify-items-center">
						<div>
								<h1 class="pt-6 leading-normal text-zinc-800 text-4xl font-semibold">NO cost, LOW cost<br>
										<x-tagui.span spanClass="text-teal-900  text-6xl" spanText="RECREATION"></x-tagui.span>
								</h1>
								<x-tagui.para paraClass="text-sm text-zinc-800" paraText="Amature neighbourhood development"></x-tagui.para>
								<x-tagui.button buttonType="button" buttonClass="p-3.5 bg-teal-900 text-white hover:bg-Emerald-900 mt-3"  buttonText="Get Started" module="customButton"></x-tagui.button>
						</div>
						<div class="py-3">
								<x-tagui.img imgClass="h-80" imgSrc="{{url('img/cpg-business-logo.svg')}}" imgAlt="cpg-business-logo"></x-tagui.img>
						</div>
				</div>
		</section>

		<section class="middle-content">
				<div class="">
						<div class="text-center py-5">
								<h1 class="text-3xl font-bold text-zinc-800 ">Guiding Principles</h1>
								<x-tagui.para paraClass="py-2 text-zinc-800 " paraText="We are guided by the follow set of principles."></x-tagui.para>
						</div>
				</div>
				<!-- Services -->
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-10 items-center justify-items-center text-zinc-600">
						<div class="pl-6">
								<h4 class="pl6 font-bold text-xl py-2 text-zinc-800">NON Elite</h4>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="No elite plathway" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Wholly social" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Friendly competitions" module="customPara"></x-tagui.para>
						</div>
						<div class="py-3">
								<x-tagui.img imgClass="h-72" imgSrc="{{url('img/NonElite.svg')}}" imgAlt="Motivate"></x-tagui.img>
						</div>
				</div>
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-10 items-center justify-items-center text-zinc-600">
						<div class="py-3">
								<x-tagui.img imgClass="h-72" imgSrc="{{url('img/NonGender.svg')}}" imgAlt="NonDNA"></x-tagui.img>
						</div>
						<div class="py-3">
								<h4 class="font-bold text-xl py-2 text-zinc-800">NON Gender</h4>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Boys and Girls Play together" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="No sexual discrimination" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Everyone can join in" module="customPara"></x-tagui.para>
						</div>
				</div>
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-10 items-center justify-items-center text-zinc-600">
						<div class="py-3">
								<h4 class="font-bold text-xl py-2 text-zinc-800 ">NON DNA</h4>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Short and tall can play together" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Fast and slow can play together" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Strong or weak can play together" module="customPara"></x-tagui.para>
							</div>
						<div class="py-3">
								<x-tagui.img imgClass="h-72" imgSrc="{{url('img/NonDNA.svg')}}" imgAlt="NonDNA"></x-tagui.img>
						</div>
				</div>
				<div class="grid lg:grid-cols-2 md:grid-cols-1 py-10  items-center justify-items-center text-zinc-600">
						<div class="py-3">
								<x-tagui.img imgClass="h-72" imgSrc="{{url('img/NoOngoing.svg')}}" imgAlt="Educating"></x-tagui.img>
						</div>
						<div class="py-3">
								<h4 class="font-bold text-xl py-2 text-zinc-800">NON Ongoing</h4>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Seasonal" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="10-12 Week blocks" module="customPara"></x-tagui.para>
								<x-tagui.para paraClass="" iconClass="fas fa-check text-teal-900 py-2" paraText="Linking Communities" module="customPara"></x-tagui.para>
								<x-tagui.ancr ancrHref="#" ancrClass="text-teal-900 font-semibold pt-3.5" ancrText="Learn about Community Success" iconClass="fas fa-greater-than text-teal-900" module="customAncr"> </x-tagui.ancr>
						</div>
				</div>
		</section>
		<!-- Main Content End -->
		<x-master-footer></x-master-footer>
</x-master-layout>
