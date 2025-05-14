@extends('layouts.master')

@section('title')
    Home Page
@endsection

@section('konten')
    <!--hero-->
    <section id="hero" class="pb-16">
        {{-- <div class="container mx-auto px-4"> --}}
        <div class="hero min-h-screen"
            style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
            <div class="hero-overlay"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                    <p class="mb-5">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </section>
    
    <!--dropdown faq-->
    <section id="faq" class="pt-16 pb-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg w-1/2 px-4">
                    <div class="max-w-xl mx-auto text-center mb-4">
                        <h4 class="font-bold text-4xl text-primary">FAQ</h4>
                        <p class="font-medium text-xl text-secondary">At first, they were also confused.</p>
                    </div>
                </div>
                <!--faq start-->
                <div class="lg w-1/2 px-4">
                    <div class="collapse collapse-plus bg-base-100 border border-base-300">
                        <input type="radio" name="my-accordion-3" checked="checked" /> <!--radio atau checkbox-->
                        <div class="collapse-title font-semibold">How do I create an account?</div>
                        <div class="collapse-content text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, ut molestias! Reiciendis, sapiente dolorum qui similique illo repudiandae quaerat odit quae. Fuga hic labore facilis minima, voluptatem sequi quos corporis dolore accusamus doloribus, quam quo deleniti provident nemo. Ratione dolor modi nulla eos veritatis laborum est cumque temporibus aut doloremque?</div>
                    </div>
                    <div class="collapse collapse-plus bg-base-100 border border-base-300">
                        <input type="radio" name="my-accordion-3" />
                        <div class="collapse-title font-semibold">I forgot my password. What should I do?</div>
                        <div class="collapse-content text-sm">Click on "Forgot Password" on the login page and follow the
                            instructions sent to your email.</div>
                    </div>
                    <div class="collapse collapse-plus bg-base-100 border border-base-300">
                        <input type="radio" name="my-accordion-3" />
                        <div class="collapse-title font-semibold">How do I update my profile information?</div>
                        <div class="collapse-content text-sm">Go to "My Account" settings and select "Edit Profile" to make
                            changes.</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--timeline project-->
    <section id="timeline" class="pt-16 pb-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-4xl text-primary mb-2">Timeline</h4>
                        <p class="font-medium text-xl text-secondary">How does it work?</p>
                    </div>
                </div>
                <!--timeline start-->
                <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                    <li>
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono italic">1984</time>
                            <div class="text-lg font-black">First Macintosh computer</div>
                            The Apple Macintosh—later rebranded as the Macintosh 128K—is the original Apple Macintosh
                            personal computer. It played a pivotal role in establishing desktop publishing as a general
                            office function. The motherboard, a 9 in (23 cm) CRT monitor, and a floppy drive were housed
                            in a beige case with integrated carrying handle; it came with a keyboard and single-button
                            mouse.
                        </div>
                        <hr />
                    </li>
                    <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-end md:mb-10">
                            <time class="font-mono italic">1998</time>
                            <div class="text-lg font-black">iMac</div>
                            iMac is a family of all-in-one Mac desktop computers designed and built by Apple Inc. It has
                            been the primary part of Apple's consumer desktop offerings since its debut in August 1998,
                            and has evolved through seven distinct forms
                        </div>
                        <hr />
                    </li>
                    <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono italic">2001</time>
                            <div class="text-lg font-black">iPod</div>
                            The iPod is a discontinued series of portable media players and multi-purpose mobile devices
                            designed and marketed by Apple Inc. The first version was released on October 23, 2001, about
                            8+1⁄2 months after the Macintosh version of iTunes was released. Apple sold an estimated 450
                            million iPod products as of 2022. Apple discontinued the iPod product line on May 10, 2022. At
                            over 20 years, the iPod brand is the oldest to be discontinued by Apple
                        </div>
                        <hr />
                    </li>
                    <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-end md:mb-10">
                            <time class="font-mono italic">2007</time>
                            <div class="text-lg font-black">iPhone</div>
                            iPhone is a line of smartphones produced by Apple Inc. that use Apple's own iOS mobile
                            operating system. The first-generation iPhone was announced by then-Apple CEO Steve Jobs on
                            January 9, 2007. Since then, Apple has annually released new iPhone models and iOS updates. As
                            of November 1, 2018, more than 2.2 billion iPhones had been sold. As of 2022, the iPhone
                            accounts for 15.6% of global smartphone market share
                        </div>
                        <hr />
                    </li>
                    <li>
                        <hr />
                        <div class="timeline-middle">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="timeline-start mb-10 md:text-end">
                            <time class="font-mono italic">2015</time>
                            <div class="text-lg font-black">Apple Watch</div>
                            The Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness
                            tracking, health-oriented capabilities, and wireless telecommunication, and integrates with
                            iOS and other Apple products and services
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--before after-->
    <section id="befafter" class="pt-16 pb-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full px-4">
                    <div class="max-w-xl mx-auto text-center mb-16">
                        <h4 class="font-bold text-4xl text-primary mb-2">See the evolve</h4>
                        <p class="font-medium text-xl text-secondary">PIK's garden</p>
                    </div>
                </div>
                <figure class="diff aspect-16/9" tabindex="0">
                    <div class="diff-item-1" role="img" tabindex="0">
                        <img alt="daisy"
                            src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a-blur.webp" />
                        <p>hello dear</p>
                    </div>
                    <div class="diff-item-2" role="img">
                        <img alt="daisy"
                            src="https://img.daisyui.com/images/stock/photo-1560717789-0ac7c58ac90a.webp" />
                        <p>hello love</p>
                    </div>
                    <div class="diff-resizer flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white bg-black rounded-full p-1"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </div>
                </figure>
                <div class="flex justify-between text-sm text-gray-600 px-2">
                    <span>Before</span>
                    <span>After</span>
                </div>
            </div>
        </div>
    </section>

    <!--clients-->
        <section id="clients" class="pt-4 pb-8">
        <div class="container mx-auto">
            <div class="w-full">
                <div class="max-w-xl mx-auto text-center mb-8"> <!--Client Header-->
                    <h4 class="font-bold text-4xl text-primary">Clients</h4>
                </div>
                <div id="people1" class="flex flex-wrap items-center justify-between">
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/4 xl:w-1/3 mt-8"> <!--image-->
                        <div class="card w-full">
                            <figure>
                                <img class="max-w-[400px] h-auto w-48 rounded-lg shadow-md" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                        </div>
                    </div>
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/4 xl:w-1/3 mt-8"> <!--image-->
                        <div class="card w-full">
                            <figure>
                                <img class="max-w-[400px] h-auto w-48 rounded-lg shadow-md" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                        </div>
                    </div>
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/4 xl:w-1/3 mt-8"> <!--image-->
                        <div class="card w-full">
                            <figure>
                                <img class="max-w-[400px] h-auto w-48 rounded-lg shadow-md" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                        </div>
                    </div>
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/4 xl:w-1/3 mt-8"> <!--image-->
                        <div class="card w-full">
                            <figure>
                                <img class="max-w-[400px] h-auto w-48 rounded-lg shadow-md" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--testimoni-->
    <section id="testimoni" class="pt-4 pb-8" style="background-color: azure">
        <div class="container mx-auto">
            <div class="max-w-xl mx-auto text-center mb-8"> <!--Why Header-->
                <h4 class="font-bold text-4xl text-primary mb-2">Testimonial</h4>
                <p class="font-medium text-xl text-secondary">Here's what they</p>
            </div>
            <div class="flex flex-wrap">
                <div id="why1" class="w-full px-4 md:w-1/2 lg:w-1/4 xl:w-1/4"> <!-- Why 1-->
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="w-6 h-6 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                        <blockquote>
                            <p class="text-lg italic font-medium text-gray-900 dark:text-white">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. A, dicta quidem. Facilis, totam iusto. Impedit quaerat eveniet
                                a quia quod.</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                            <img class="w-6 h-6 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                alt="profile picture">
                            <div
                                class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div id="why1" class="w-full px-4 md:w-1/2 lg:w-1/4 xl:w-1/4"> <!-- Why 2-->
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="w-6 h-6 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                        <blockquote>
                            <p class="text-lg italic font-medium text-gray-900 dark:text-white">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. A, dicta quidem. Facilis, totam iusto. Impedit quaerat eveniet
                                a quia quod.</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                            <img class="w-6 h-6 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                alt="profile picture">
                            <div
                                class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div id="why1" class="w-full px-4 md:w-1/2 lg:w-1/4 xl:w-1/4"> <!-- Why 3-->
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="w-6 h-6 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                        <blockquote>
                            <p class="text-lg italic font-medium text-gray-900 dark:text-white">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. A, dicta quidem. Facilis, totam iusto. Impedit quaerat eveniet
                                a quia quod.</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                            <img class="w-6 h-6 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                alt="profile picture">
                            <div
                                class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div id="why1" class="w-full px-4 md:w-1/2 lg:w-1/4 xl:w-1/4"> <!-- Why 4-->
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="w-6 h-6 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                            <path
                                d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                        </svg>
                        <blockquote>
                            <p class="text-lg italic font-medium text-gray-900 dark:text-white">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. A, dicta quidem. Facilis, totam iusto. Impedit quaerat eveniet
                                a quia quod.</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                            <img class="w-6 h-6 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png"
                                alt="profile picture">
                            <div
                                class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                <cite class="pe-3 font-medium text-gray-900 dark:text-white">Michael Gough</cite>
                                <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">CEO at Google</cite>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection
