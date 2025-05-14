@extends('layouts.master')

@section('title')
    Profile Page
@endsection

@section('konten')
    <!--Opening & sejarah perusahaan-->
    <div class="hero bg-base-200 min-h-screen">
        <div class="mx-auto px-20 mb-5 hero-content flex-col lg:flex-row">
            <img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp"
                class="max-w-sm rounded-lg shadow-2xl" />
            <div>
                <h1 class="text-5xl font-bold">Box Office News!</h1>
                <p class="py-6">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, delectus!.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <!--Visi misi perusahaan / our value-->


    <!--Meet the team-->
    <section id="people" class="pt-4 pb-4">
        <div class="container mx-auto">
            <div class="w-full">
                <div class="max-w-xl mx-auto text-center mb-8"> <!--Why Header-->
                    <h4 class="font-bold text-4xl text-primary">The Founder</h4>
                </div>
                <div id="people1" class="flex flex-wrap border-t border-slate-800 items-center justify-between"> <!-- people 1-->
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/2 xl:w-1/3 mt-8"> <!--profile-->
                        <div class="card w-full">
                            <div class="card-body">
                                <h2 class="card-title">John Doe</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus facere ipsa unde optio adipisci eos amet doloribus ratione, nemo culpa deserunt quod. Totam voluptatibus unde quam ea delectus debitis molestias porro beatae, voluptate repellendus, optio non quod dolorem ipsam labore quos est culpa voluptatum ipsum officiis maxime et autem.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus facere ipsa unde optio adipisci eos amet doloribus ratione, nemo culpa deserunt quod. Totam voluptatibus unde quam ea delectus debitis molestias porro beatae, voluptate repellendus, optio non quod dolorem ipsam labore quos est culpa voluptatum ipsum officiis maxime et autem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/2 xl:w-1/3 mt-8"> <!--image-->
                        <div class="card w-full">
                            <figure>
                                <img class="max-w-[400px] h-auto w-96 rounded-lg shadow-md" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                        </div>
                    </div>
                </div>
                <div id="people1" class="flex flex-wrap border-t border-slate-800 items-center justify-between"> <!-- people 1-->
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/2 xl:w-1/3 mt-8"> <!--profile-->
                        <div class="card w-full">
                            <div class="card-body">
                                <h2 class="card-title">John Doe</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus facere ipsa unde optio adipisci eos amet doloribus ratione, nemo culpa deserunt quod. Totam voluptatibus unde quam ea delectus debitis molestias porro beatae, voluptate repellendus, optio non quod dolorem ipsam labore quos est culpa voluptatum ipsum officiis maxime et autem.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit possimus facere ipsa unde optio adipisci eos amet doloribus ratione, nemo culpa deserunt quod. Totam voluptatibus unde quam ea delectus debitis molestias porro beatae, voluptate repellendus, optio non quod dolorem ipsam labore quos est culpa voluptatum ipsum officiis maxime et autem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 px-4 md:w-1/2 lg:w-1/2 xl:w-1/3 mt-8"> <!--image-->
                        <div class="card w-full">
                            <figure>
                                <img class="max-w-[400px] h-auto w-96 rounded-lg shadow-md" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Keunggulan / why us?-->
    <section id="keunggulan" class="pt-4 pb-4">
        <div class="container mx-auto">
            <div class="w-full">
                <div class="max-w-xl mx-auto text-center mb-16"> <!--Why Header-->
                    <h4 class="font-bold text-4xl text-primary mb-2">Why us?</h4>
                    <p class="font-medium text-xl text-secondary">Here's where were good at</p>
                </div>
                <div class="flex flex-wrap">
                    <div id="why1" class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/3"> <!-- Why 1-->
                        <div class="card bg-base-100 w-96 shadow-sm">
                            <figure>
                                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Card Title</h2>
                                <p>A card component has a figure, a body part, and inside body there are title and actions
                                    parts</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="why2" class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/3"> <!-- Why 2-->
                        <div class="card bg-base-100 w-96 shadow-sm">
                            <figure>
                                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Card Title</h2>
                                <p>A card component has a figure, a body part, and inside body there are title and actions
                                    parts</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="why3" class="w-full px-4 md:w-1/2 lg:w-1/3 xl:w-1/3"> <!-- Why 3-->
                        <div class="card bg-base-100 w-96 shadow-sm">
                            <figure>
                                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                            <div class="card-body">
                                <h2 class="card-title">Card Title</h2>
                                <p>A card component has a figure, a body part, and inside body there are title and actions
                                    parts</p>
                                <div class="card-actions justify-end">
                                    <button class="btn btn-primary">Buy Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
