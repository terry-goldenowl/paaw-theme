<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paaw_studio
 */

?>

<!-- Banner -->
<main
    class="flex flex-col xl:gap-[80px] lg:gap-60px] md:gap-[50px] gap-[24px] items-center justify-center xl:mb-[90px]">
    <section>
        <div
            class="flex xl:flex-row flex-col 2xl:gap-[100px] gap-[40px] pb-[50px] 2xl:px-[200px] lg:px-[120px] md:px-[60px] py-[40px] px-[24px]">
            <div class="2xl:w-3/5 xl:w-1/2 w-full flex flex-col gap-10 xl:order-1 order-2">
                <div>
                    <span
                        class="text-emerald-500 lg:text-6xl text-4xl font-bold font-['Quicksand'] lg:leading-[90px] leading-normal tracking-tight">MOVE
                        TO DIGITAL <br /></span><span
                        class="text-slate-900  lg:text-6xl text-4xl font-bold font-['Quicksand'] lg:leading-[90px] leading-normal tracking-tight">GROW
                        YOUR BUSINESS</span>
                </div>
                <div>
                    <div class="opacity-80">
                        <span
                            class="text-black lg:text-xl text-md font-normal font-['Quicksand'] lg:leading-9 leading-[26px]">We
                            help your business reach out </span><span
                            class="text-black lg:text-xl text-md font-bold font-['Quicksand'] lg:leading-9 leading-[26px]">more
                            potential customers</span><span
                            class="text-black lg:text-xl text-md font-normal font-['Quicksand'] lg:leading-9 leading-[26px]">
                            and create </span><span
                            class="text-black lg:text-xl text-md font-bold font-['Quicksand'] lg:leading-9 leading-[26px]">creative
                            marketing campaigns</span><span
                            class="text-black lg:text-xl text-md font-normal font-['Quicksand'] lg:leading-9 leading-[26px]">
                            to elevate your business with your own budget.
                        </span>
                    </div>
                </div>
                <button
                    class="link-to-contact-button xl:px-5 px-3 py-2.5 bg-emerald-500 text-center text-white xl:text-2xl text-[16px] font-semibold font-['Quicksand'] w-fit  ">
                    Get FREE digital marketing plan NOW!
                </button>
            </div>
            <div class="2xl:w-2/5 xl:w-1/2 w-full xl:order-2 order-1 flex justify-center items-center">
                <img class="xl:w-full w-4/5" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.png" />
            </div>
        </div>
    </section>

    <!-- Overview -->
    <section>
        <div class="xl:px-[200px] lg:px-[160px] md:px-[60px] py-[40px] px-[24px]">
            <div>
                <div
                    class="text-slate-900 lg:text-[40px] text-[32px] font-bold font-['Quicksand'] capitalize lg:leading-[52px] leading-[48px] tracking-tight">
                    Digital statistics that you may be impressed with…
                </div>
                <div class="flex justify-center mt-[34px]">
                    <div class="grid grid-cols-2 xl:gap-[40px] gap-y-[60px] gap-x-[10px] xl:w-5/6 w-full">
                        <div class="col-span-1 flex xl:justify-center justify-start items-start flex-col">
                            <div
                                class="text-emerald-500 xl:text-[120px] lg:text-[90px] text-[40px] xl:leading-[180px] lg:leading-[130px]  leading-[60px] font-bold font-['Quicksand']">
                                <span class="counter" data-target="106">0</span>%
                            </div>
                            <div class="opacity-80 xl:w-4/5 text-left">
                                <span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-normal font-['Quicksand'] xl:leading-relaxed leading-[26px]">Of
                                    average ROI (Return on invest) when using </span><span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-bold font-['Quicksand'] xl:leading-relaxed leading-[26px]">SEO
                                    (Search Engine Optimization)</span>
                            </div>
                        </div>

                        <div class="col-span-1 flex xl:justify-center justify-start items-start flex-col">
                            <div
                                class="text-emerald-500  xl:text-[120px] lg:text-[90px] text-[40px] xl:leading-[180px] lg:leading-[130px]  leading-[60px] font-bold font-['Quicksand']">
                                <span class="counter" data-target="72">0</span>%
                            </div>
                            <div class="opacity-80 xl:w-4/5 text-left">
                                <span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-normal font-['Quicksand'] xl:leading-relaxed leading-[26px]">Of
                                    marketers claim that </span><span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-bold font-['Quicksand'] xl:leading-relaxed leading-[26px]">Social
                                    Media </span><span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-normal font-['Quicksand'] xl:leading-relaxed leading-[26px]">has
                                    helped them </span><span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-bold font-['Quicksand'] xl:leading-relaxed leading-[26px]">increase
                                    their website traffic</span>
                            </div>
                        </div>
                        <div class="col-span-1 flex xl:justify-center justify-start items-start flex-col">
                            <div
                                class="text-emerald-500  xl:text-[120px] lg:text-[90px] text-[40px] xl:leading-[180px] lg:leading-[130px]  leading-[60px] font-bold font-['Quicksand']">
                                <span class="counter" data-target="3">0</span>:1
                            </div>
                            <div class="opacity-80 xl:w-4/5 text-left">
                                <span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-normal font-['Quicksand'] xl:leading-relaxed leading-[26px]">Average
                                    ROI when investing in </span><span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-bold font-['Quicksand'] xl:leading-relaxed leading-[26px]">Content
                                    Marketing</span>
                            </div>
                        </div>
                        <div class="col-span-1 flex xl:justify-center justify-start items-start flex-col">
                            <div
                                class="text-emerald-500  xl:text-[120px] lg:text-[90px] text-[40px] xl:leading-[180px] lg:leading-[130px]  leading-[60px] font-bold font-['Quicksand']">
                                <span class="counter" data-target="42">0</span>:1
                            </div>
                            <div class="opacity-80 xl:w-4/5 text-left">
                                <span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-normal font-['Quicksand'] xl:leading-relaxed leading-[26px]">Average
                                    ROI when investing in </span><span
                                    class="text-black xl:text-xl lg:text-[18px] text-[16px] font-bold font-['Quicksand'] xl:leading-relaxed leading-[26px]">Email
                                    Marketing</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact form -->
    <section id="contact-form-section">
        <div
            class="bg-[#00023D] bg-opacity-90 2xl:px-[160px] xl:[px-80px] lg:py-[80px] lg:px-[80px] md:px-[60px] py-[40px] px-[24px]">
            <div class="flex 2xl:gap-[300px] xl:gap-[180px] gap-[24px] xl:flex-row flex-col">
                <div class="xl:w-3/5 w-full xl:pt-[100px] flex items-end">
                    <div class="flex flex-col gap-[30px]">
                        <div>
                            <span
                                class="text-emerald-500 xl:text-[40px] lg:text-[36px] text-[32px] font-bold font-['Quicksand'] capitalize xl:leading-[55px] leading-[48px] tracking-tight">It’s
                                time for </span><span
                                class="text-slate-50 xl:text-[40px] lg:text-[36px] text-[32px] font-bold font-['Quicksand'] capitalize xl:leading-[55px] leading-[48px] tracking-tight">Paaw
                                Studio</span><span
                                class="text-emerald-500 xl:text-[40px] lg:text-[36px] text-[32px] font-bold font-['Quicksand'] capitalize xl:leading-[55px] leading-[48px] tracking-tight">
                                to elevate your business with Digital Marketing!</span>
                        </div>
                        <div class="text-white xl:text-xl lg:text-[18px] text-[16px] font-normal font-['Quicksand'] leading-[30px]">
                            Paaw Studio is a digital marketing agency based in Vietnam.
                            We offer full services of digital marketing from Digital
                            Marketing Strategy, Content Marketing, Landing Page/Website
                            development, SEO, Social Media Management, Meta and Google
                            Ads to Visual Production.
                        </div>
                    </div>
                </div>
                <div class="xl:w-2/5 w-full relative">
                    <div class="top-0 left-0 relative flex justify-center" id="contact-form-container">
                        <div class="z-10 absolute flex justify-center" id="contact-form">
                            <div
                                class="bg-white md:px-[60px] md:py-[70px] md:pb-[100px] md:w-4/5 xl:w-full px-[28px] py-[32px] relative">
                                <p
                                    class="text-right text-black md:text-lg text-[13px] font-semibold font-['Quicksand'] xl:leading-[29.70px] leading-[21px]">
                                    Contact us for
                                    <span class="text-emerald-500">FREE 1-month Digital Marketing Plan</span>
                                    for your business!
                                </p>
                                <div class="flex justify-end">
                                    <div class="xl:w-[85px] w-[51px] xl:h-[5px] h-[3.1px] bg-black mt-[20px]"></div>
                                </div>

                                <?php echo do_shortcode('[contact-form-7 id="contact-form-7" title="Contact form 1"]'); ?>

                                <div
                                    class="w-0 h-0 xl:border-[65px] border-[50px] xl:border-l-[65px] border-l-[50px] border-t-0 border-transparent border-t-[#00023D] border-l-[#00023D] absolute top-0 left-0 border-opacity-90">
                                </div>
                                <svg viewBox="0 0 210 210" width="210" height="210" xmlns="http://www.w3.org/2000/svg"
                                    class="circle-text md:block absolute hidden left-[-155px] bottom-[70px]"
                                    style="transition: transform 0.2s">
                                    <path id="circlePath1" fill="none" stroke-width="0" stroke="hsl(0 100% 50% / 0.5)"
                                        d="
                                            M 30, 105
                                            a 75,75 0 1,1 150,0
                                            a 75,75 0 1,1 -150,0
                                        " />
                                    <text id="text-circle-1" font-size="30px" font-family="Helvetica" font-weight="700"
                                        class="text-emerald-500" fill="rgb(16 185 129)" letter-spacing="-2">
                                        <textPath id="textPath1" href="#circlePath1">
                                            Get in touch & Let's make something
                                        </textPath>
                                    </text>
                                </svg>

                                <svg viewBox="0 0 120 120" width="120" height="120" xmlns="http://www.w3.org/2000/svg"
                                    class="circle-text md:hidden block absolute left-[-80px] bottom-[70px]"
                                    style="transition: transform 0.2s">
                                    <path id="circlePath2" fill="none" stroke-width="0" stroke="hsl(0 100% 50% / 0.5)"
                                        d="
                                            M 15, 60
                                            a 45,45 0 1,1 90,0
                                            a 45,45 0 1,1 -90,0
                                        " />
                                    <text id="text-circle-2" font-size="16px" font-family="Helvetica" font-weight="700"
                                        class="text-emerald-500" fill="rgb(16 185 129)" letter-spacing="-1">
                                        <textPath id="textPath2" href="#circlePath2">
                                            Get in touch & Let's make something
                                        </textPath>
                                    </text>
                                </svg>
                                <div class="xl:w-[400px] xl:h-[400px] w-[300px] h-[260px] absolute xl:bottom-[-30px] xl:left-[-30px] left-[-20px] bottom-[30px] -z-10"
                                    style="
                                    background: repeating-linear-gradient(
                                    -34deg,
                                    #00000000,
                                    #00000000 6px,
                                    #3c8a56 6px,
                                    #3c8a56 7px
                                    );
                                "></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section>
        <div
            class="xl:px-[100px] xl:py-[40px] bg-white flex flex-col xl:gap-[80px] gap-[48px] md:px-[60px] py-[40px] px-[24px]">
            <h2
                class="opacity-80 text-black xl:text-[50px] text-[32px] leading-[50px] font-extrabold font-['Quicksand']">
                Our services
            </h2>

            <!-- Meta ads and google ads -->
            <div class="flex xl:flex-row flex-col xl:gap-32 gap-[24px]">
                <div class="xl:w-1/2 w-full flex items-end">
                    <h3
                        class="text-black xl:text-[50px] text-[24px] xl:leading-[75px] font-bold font-['Quicksand'] uppercase">
                        Meta ads <br />Google ads
                    </h3>
                </div>
                <div class="xl:w-1/2 w-full">
                    <div>
                        <p
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            Utilizing test and learn techniques to ensure the strongest
                            return on investment (ROI) and results.
                        </p>
                        <ul
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:mt-12 mt-[24px] list-disc xl:ms-12 ms-6 xl:leading-normal leading-[24px]">
                            <li>Digital budget allocation.</li>
                            <li>
                                Develop Ads campaign on Meta, Google Ads, Youtube,...
                            </li>
                            <li>Ads Optimization.</li>
                        </ul>
                    </div>
                    <button
                        class="link-to-contact-button w-fit xl:px-5 xl:py-2.5 px-[20px] py-[10px] bg-emerald-500 justify-center items-center gap-2.5 inline-flex text-white xl:text-2xl text-[16px] leading-[24px] font-semibold font-['Quicksand'] mt-[23px] xl:ml-[19px]">Learn
                        more</button>
                </div>
            </div>

            <!-- Social media -->
            <div class="flex xl:flex-row flex-col xl:gap-32 gap-[24px]">
                <div class="xl:w-1/2 w-full xl:order-1 order-2">
                    <div>
                        <p
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            Building a strong presence on social media to increase brand
                            visibility, customer engagement, and business growth.
                        </p>
                        <ul
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:mt-12 mt-[24px] list-disc xl:ms-12 ms-6 xl:leading-normal leading-[24px]">
                            <li>Social Media Management.</li>
                            <li>Content Creation (social posts, videos,...).</li>
                            <li>Facebook Communities.</li>
                        </ul>
                    </div>
                    <button
                        class="link-to-contact-button w-fit xl:px-5 xl:py-2.5 px-[20px] py-[10px] bg-emerald-500 justify-center items-center gap-2.5 inline-flex text-white xl:text-2xl text-[16px] leading-[24px] font-semibold font-['Quicksand'] mt-[23px] xl:ml-[19px]">Learn
                        more</button>
                </div>
                <div class="xl:w-1/2 w-full flex items-end xl:justify-end xl:order-2 order-1">
                    <h3
                        class="text-black xl:text-[50px] text-[24px]  leading-[75px] font-bold font-['Quicksand'] uppercase xl:text-right text-left">
                        Social media
                    </h3>
                </div>
            </div>

            <!-- WEBSITE/LANDING PAGE SEO OPTIMIZATION -->
            <div class="flex xl:flex-row flex-col xl:gap-32 gap-[24px]">
                <div class="xl:w-1/2 w-full flex items-end">
                    <h3 class="text-black xl:text-[50px] text-[24px] font-bold font-['Quicksand'] uppercase">
                        <span class="xl:leading-[75px] leading-[36px]">WEBSITE/LANDING PAGE</span><br><span
                            class="xl:leading-[75px] leading-[36px]">SEO OPTIMIZATION</span>

                    </h3>
                </div>
                <div class="xl:w-1/2 w-full">
                    <div>
                        <p
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            As a part of Golden Owl Company - one of the best
                            outsourcing technology companies in South East Asia, Paaw
                            Studio has full access to innovative website/landing page
                            tools and a large pool of talents to support clients.
                        </p>
                        <div class="flex gap-[21px] md:gap-[60px] xl:mt-12 mt-[24px] md:flex-row flex-col ">
                            <div>
                                <p
                                    class="text-black xl:text-3xl text-[16px] font-bold font-['Quicksand'] leading-[36px]">
                                    Website Development
                                </p>
                                <ul
                                    class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] mt-2  list-disc xl:ms-12 ms-6 xl:leading-normal leading-[24px]">
                                    <li>Concept Development</li>
                                    <li>Content Creation</li>
                                    <li>Designing and Featuring</li>
                                    <li>Testing</li>
                                    <li>Launching</li>
                                    <li>Monitoring</li>
                                </ul>
                            </div>
                            <div>
                                <p
                                    class="text-black xl:text-3xl text-[16px] font-bold font-['Quicksand'] leading-[36px]">
                                    SEO Optimization
                                </p>
                                <ul
                                    class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] mt-2  list-disc xl:ms-12 ms-6 xl:leading-normal leading-[24px]">
                                    <li>Keyword Research</li>
                                    <li>Competitor Analysis</li>
                                    <li>Website Audit</li>
                                    <li>Content Strategy</li>
                                    <li>Link Building</li>
                                    <li>Analytics and Tracking</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <button
                        class="link-to-contact-button w-fit xl:px-5 xl:py-2.5 px-[20px] py-[10px] bg-emerald-500 justify-center items-center gap-2.5 inline-flex text-white xl:text-2xl text-[16px] leading-[24px] font-semibold font-['Quicksand'] mt-[23px] xl:ml-[19px]">Learn
                        more</button>
                </div>
            </div>

            <!-- MEDIA PRODUCTION -->
            <div class="flex xl:flex-row flex-col xl:gap-32 gap-[24px]">
                <div class="xl:w-1/2 w-full  xl:order-1 order-2">
                    <div>
                        <p
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            We encompass everything from crafting brand identities to
                            producing dynamic videos and impactful media materials.
                            Elevate your brand narrative with our expertise in
                            comprehensive production.
                        </p>
                        <ul
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:mt-12 mt-[24px] list-disc xl:ms-12 ms-6 xl:leading-normal leading-[24px]">
                            <li>CIP (Corporation Identify Program)</li>
                            <li>
                                Editorial content (Social posts, videos and copies, blogs,
                                articles, banners)
                            </li>
                            <li>Concept Design (Comic concept)</li>
                            <li>
                                POSM (Point-of-sale-material such as Brochures, leaflets,
                                stickers, posters)
                            </li>
                        </ul>
                    </div>
                    <button
                        class="link-to-contact-button w-fit xl:px-5 xl:py-2.5 px-[20px] py-[10px] bg-emerald-500 justify-center items-center gap-2.5 inline-flex text-white xl:text-2xl text-[16px] leading-[24px] font-semibold font-['Quicksand'] mt-[23px] xl:ml-[19px]">Learn
                        more</button>
                </div>
                <div class="xl:w-1/2 w-full flex items-end  xl:justify-end xl:order-2 order-1">
                    <h3
                        class="text-black xl:text-[50px] text-[24px]  leading-[75px] font-bold font-['Quicksand'] uppercase xl:text-right text-left">
                        MEDIA PRODUCTION
                    </h3>
                </div>
            </div>

            <!-- Meta ads and google ads -->
            <div class="flex xl:flex-row flex-col xl:gap-32 gap-[24px]">
                <div class="xl:w-1/2 w-full flex items-end">
                    <h3
                        class="text-black xl:text-[50px] text-[24px] xl:leading-[75px] leading-[36px] font-bold font-['Quicksand'] uppercase">
                        DIGITAL MARKETING STRATEGY
                    </h3>
                </div>
                <div class="xl:w-1/2 w-full">
                    <div>
                        <pdi
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            Digital Marketing Strategy will guide the business through
                            an effective and consistent roadmap to save money and
                            optimize customer engagements.
                        </pdi>
                        <ul
                            class="text-black xl:text-3xl text-[16px] font-light font-['Quicksand'] xl:mt-12 mt-[24px] list-disc xl:ms-12 ms-6 xl:leading-normal leading-[24px]">
                            <li>Market Research</li>
                            <li>Brand Strategy</li>
                            <li>Content Strategy</li>
                            <li>Advertising Strategy</li>
                        </ul>
                    </div>
                    <button
                        class="link-to-contact-button w-fit xl:px-5 xl:py-2.5 px-[20px] py-[10px] bg-emerald-500 justify-center items-center gap-2.5 inline-flex text-white xl:text-2xl text-[16px] leading-[24px] font-semibold font-['Quicksand'] mt-[23px] xl:ml-[19px]">Learn
                        more</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Our features works -->
    <section>
        <div
            class="bg-gradient-to-r from-emerald-500 to-white xl:py-[100px] xl:px-[84px] md:px-[60px] py-[40px] ps-[24px]">
            <h2
                class="opacity-80 text-black xl:text-[50px] text-[32px] font-extrabold font-['Quicksand'] leading-[50px] xl:mb-[44px] mb-[40px]">
                Our feature works
            </h2>
            <div
                class="features-container mt-[60px] 2xl:gap-[60px] xl:gap-[48px] md:gap-[36px] gap-[24px] pe-4 flex overflow-scroll no-scrollbar">
                <div class="feature-container 2xl:w-1/3 lg:w-2/5 md:w-3/5 w-4/5 shrink-0">
                    <div
                        class="w-full 2xl:h-[424px] xl:h-[350px] md:h-[275px] h-[200px] relative rounded-[20px] shadow overflow-hidden flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/disc.png"
                            class="w-full h-full object-cover" alt="" />
                        <div class="overlay w-full h-full left-0 top-0 absolute bg-zinc-300 bg-opacity-70"></div>
                    </div>
                    <div class="text-center xl:mt-[51px] mt-[24px]">
                        <p
                            class="text-black xl:text-2xl text-[18px] font-bold font-['Quicksand'] xl:leading-normal leading-[27px]">
                            DISC - Personality Test Website
                        </p>
                        <ul
                            class="text-black xl:text-2xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            <li>Website Development</li>
                            <li>Content Creation</li>
                        </ul>
                    </div>
                </div>
                <div class="feature-container 2xl:w-1/3 lg:w-2/5 md:w-3/5 w-4/5 shrink-0">
                    <div
                        class="w-full 2xl:h-[424px] xl:h-[350px] md:h-[275px] h-[200px] relative rounded-[20px] shadow overflow-hidden flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/morning-bird.png"
                            class="w-full h-full object-cover" alt="" />
                        <div class="overlay w-full h-full left-0 top-0 absolute bg-zinc-300 bg-opacity-70"></div>
                    </div>
                    <div class="text-center xl:mt-[51px] mt-[24px]">
                        <p
                            class="text-black xl:text-2xl text-[18px] font-bold font-['Quicksand'] xl:leading-normal leading-[27px]">
                            Morning Bird - Event Reminder App
                        </p>
                        <ul
                            class="text-black xl:text-2xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            <li>App Development</li>
                            <li>Content Creation</li>
                            <li>Meta Ads</li>
                        </ul>
                    </div>
                </div>
                <div class="feature-container 2xl:w-1/3 lg:w-2/5 md:w-3/5 w-4/5 shrink-0">
                    <div
                        class="w-full 2xl:h-[424px] xl:h-[350px] md:h-[275px] h-[200px] relative rounded-[20px] shadow overflow-hidden flex justify-center items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vietbrite.png"
                            class="w-full h-full object-cover" alt="" />
                        <div class="overlay w-full h-full left-0 top-0 absolute bg-zinc-300 bg-opacity-70"></div>
                    </div>
                    <div class="text-center xl:mt-[51px] mt-[24px]">
                        <p
                            class="text-black xl:text-2xl text-[18px] font-bold font-['Quicksand'] xl:leading-normal leading-[27px]">
                            VietBrite - Logistic Company
                        </p>
                        <ul
                            class="text-black xl:text-2xl text-[16px] font-light font-['Quicksand'] xl:leading-normal leading-[24px]">
                            <li>Website Development</li>
                            <li>Content Creation</li>
                            <li>Social Media</li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div
            class="w-full bg-white flex xl:flex-row flex-col xl:justify-between xl:items-center xl:px-[100px] xl:gap-[200px] gap-[24px] md:px-[60px] py-[40px] px-[24px] pt-0">
            <p
                class="text-black xl:text-[50px] text-[24px] xl:leading-normal leading-[36px] font-semibold font-['Quicksand'] xl:w-[60%] w-full italic">
                Let's mark your Paaw into the digital world with us.
            </p>
            <a href="#" class="block xl:w-[40%] w-full text-end"><i
                    class="fa-solid fa-arrow-right xl:text-[70px] text-[50px] text-black"></i></a>
        </div>
    </section>
</main>