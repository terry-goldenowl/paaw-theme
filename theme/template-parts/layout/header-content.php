<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paaw_studio
 */

?>

<header>
    <div class="w-full py-10 flex justify-between xl:px-[100px] lg:px-[80px] md:px-[60px] px-[16px]">
        <div class="text-slate-900 text-2xl font-bold font-['Quicksand'] tracking-tight">
            Paaw Studio
        </div>
        <div class="xl:gap-10 gap-5 xl:flex hidden">
            <a href="#"
                class="link-to-contact-button text-black text-base font-normal font-['Quicksand'] leading-7 hover:font-bold">
                Services
            </a>
            <a href="#"
                class="link-to-contact-button text-black text-base font-normal font-['Quicksand'] leading-7 hover:font-bold">
                Contact
            </a>
            <!-- <div>
                <a href="<?php site_url() ?>/vi"
                  class="text-black text-base font-normal font-['Quicksand'] leading-7 hover:font-bold"
                >
                  VI
                </a>
                |
                <a href="<?php site_url() ?>/"
                  class="text-black text-base font-normal font-['Quicksand'] leading-7 hover:font-bold"
                >
                  EN
                </a>
              </div>
               -->
        </div>
        <div class="relative xl:hidden block">
            <button id="nav-menu-btn">
                <i class="fa-solid fa-equals text-xl"></i>
            </button>
            <div class="absolute top-[20px] right-0 bg-white hidden shadow-md" id="nav-menu-popup">
                <a href="#"
                    class="link-to-contact-button block py-2 px-4 text-black text-base font-normal font-['Quicksand'] leading-7 xl:hover:font-bold">Services</a>
                <a href="#"
                    class="link-to-contact-button block py-2 px-4 text-black text-base font-normal font-['Quicksand'] leading-7 xl:hover:font-bold">Contact</a>
            </div>
        </div>
    </div>
</header>