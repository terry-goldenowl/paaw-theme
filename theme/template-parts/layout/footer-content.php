<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paaw_studio
 */

?>

<footer class="xl:px-[80px] xl:py-[60px] bg-neutral-800 md:px-[60px] py-[40px] px-[24px]">
    <p class="text-emerald-500 text-3xl font-bold font-['Quicksand'] tracking-tight mb-[25px]">
        Paaw Studio
    </p>
    <div class="flex xl:flex-row flex-col xl:gap-[100px] gap-[24px]">
        <div class="xl:w-5/12 w-full">
            <p class="text-stone-300 text-xl font-light font-['Quicksand'] mb-[13px]">
                Address
            </p>
            <p class="text-white text-xl font-light font-['Quicksand'] leading-normal">
                Sarina Condominium, 62 Hoang The Thien An Loi Dong Ward,
                District 2, Ho Chi Minh City, Viet Nam.
            </p>
        </div>

        <div class="xl:w-5/12 w-full">
            <p class="text-stone-300 text-xl font-light font-['Quicksand'] mb-[13px]">
                Contact
            </p>
            <p class="text-stone-300 text-xl font-light font-['Quicksand'] mb-[13px]">
                Phone &emsp; <span class="text-white">(+84) 28 62705825</span>
            </p>
            <p class="text-stone-300 text-xl font-light font-['Quicksand']">
                Email &emsp;
                <a href="" class="text-white hover:underline">hello@goldenowl.asia</a>
            </p>
            <div class="flex gap-[18px] mt-[16px]">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt=""
                        class="w-[24px] h-[24px]" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png" alt=""
                        class="w-[24px] h-[24px]" /></a>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png" alt=""
                        class="w-[24px] h-[24px]" /></a>

            </div>
        </div>

        <div class="xl:w-2/12 w-full flex xl:block gap-[24px]">
            <a href="#" class="xl:block text-stone-300 text-xl font-light font-['Quicksand'] xl:mb-[13px]">About us</a>
            <a href="#"
                class="link-to-contact-button xl:block text-stone-300 text-xl font-light font-['Quicksand'] xl:mb-[13px]">Service</a>
            <a href="#" class="xl:block text-stone-300 text-xl font-light font-['Quicksand'] xl:mb-[13px]">Our work</a>
        </div>
    </div>
</footer>