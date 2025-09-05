@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Project Name 1</h2>
                                    <p>Developed a full-stack web application featuring a responsive user interface and
                                        secure backend integration.
                                    </p>
                                    <p>- Implemented user authentication, product catalog management, and real-time search
                                        functionality.</p>
                                    <p>- Optimized performance and scalability to handle high traffic and large datasets.
                                    </p>
                                    <p>- Utilized technologies such as React, Node.js, and MySQL to deliver a seamless user
                                        experience.</p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Project Name 2</h2>
                                    <p>Built a dynamic web application with responsive design and scalable backend
                                        architecture.
                                    </p>
                                    <p>- Enhanced user experience with intuitive navigation and optimized page load times.
                                    </p>
                                    <p>- Integrated APIs for real-time data and implemented secure payment workflows.</p>
                                    <p>- Delivered the project within deadlines while ensuring code quality and
                                        maintainability.</p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contact me</a>
            </div>
        </div>
    </section>
@endsection
