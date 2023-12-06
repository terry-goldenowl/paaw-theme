<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paaw_studio
 */

?>

<footer class="px-[80px] py-[60px] bg-neutral-800">
	<p
	class="text-emerald-500 text-3xl font-bold font-['Poppins'] tracking-tight mb-[25px]"
	>
	Paaw Studio
	</p>
	<div class="flex gap-[100px]">
	<div class="w-5/12">
		<p
		class="text-stone-300 text-xl font-light font-['Poppins'] mb-[13px]"
		>
		Address
		</p>
		<p
		class="text-white text-xl font-light font-['Poppins'] leading-normal"
		>
		Sarina Condominium, 62 Hoang The Thien An Loi Dong Ward,
		District 2, Ho Chi Minh City, Viet Nam.
		</p>
	</div>

	<div class="w-5/12">
		<p
		class="text-stone-300 text-xl font-light font-['Poppins'] mb-[13px]"
		>
		Contact
		</p>
		<p
		class="text-stone-300 text-xl font-light font-['Poppins'] mb-[13px]"
		>
		Phone &emsp; <span class="text-white">(+84) 28 62705825</span>
		</p>
		<p class="text-stone-300 text-xl font-light font-['Poppins']">
		Email &emsp;
		<a href="" class="text-white hover:underline">hello@goldenowl.asia</a>
		</p>
		<div class="flex gap-[18px] mt-[16px]">
		<img
			src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png"
			alt=""
			class="w-[24px] h-[24px]"
		/>
		<img
			src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png"
			alt=""
			class="w-[24px] h-[24px]"
		/>
		<img
			src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png"
			alt=""
			class="w-[24px] h-[24px]"
		/>
		</div>
	</div>

	<div class="w-2/12">
		<a
		href="#"
		class="block text-stone-300 text-xl font-light font-['Poppins'] mb-[13px]"
		>About us</a
		>
		<a
		href="#"
		class="block text-stone-300 text-xl font-light font-['Poppins'] mb-[13px]"
		>Service</a
		>
		<a
		href="#"
		class="block text-stone-300 text-xl font-light font-['Poppins'] mb-[13px]"
		>Our work</a
		>
	</div>
	</div>
</footer>
