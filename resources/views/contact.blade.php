@extends('layouts.master')

@section('title', 'Contact')

@section('content')
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                            class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Get in touch</h1>
                    <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        {{-- Successful message area --}}
                        @if (session('success'))
                            <div class="alert alert-success">
                                <ul class="mb-0">
                                    @foreach (session('data') as $data)
                                        @if ($loop->first)
                                        @else
                                            <li>{{ $data }}</li>
                                        @endif
                                        @if ($loop->last)
                                            <li>Successfully message is posted</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- Error message section --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="contactForm" method="POST" action="{{ route('contact.success') }}">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                @if (session('success'))
                                    <input class="form-control" id="name" name="name" type="text"
                                        placeholder="Enter your name..." disabled value="{{ session('data')['name'] }}" />
                                    <label for="name">Full name</label>
                                @else
                                    <input class="form-control" id="name" name="name" type="text"
                                        placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Full name</label>
                                @endif

                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                @if (session('success'))
                                    <input class="form-control" id="email" name="email" type="email"
                                        placeholder="name@example.com" disabled value="{{ session('data')['email'] }}" />
                                    <label for="email">Email address</label>
                                @else
                                    <input class="form-control" id="email" name="email" type="email"
                                        placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                @endif

                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                @if (session('success'))
                                    <input class="form-control" id="phone" name="phone" type="tel"
                                        placeholder="01*******" disabled value="{{ session('data')['phone'] }}" />
                                    <label for="phone">Phone number</label>
                                @else
                                    <input class="form-control" id="phone" name="phone" type="tel"
                                        placeholder="01*******" data-sb-validations="required" />
                                    <label for="phone">Phone number</label>
                                @endif

                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                @if (session('success'))
                                    <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..."
                                        style="height: 10rem" disabled>{{ session('data')['message'] }}</textarea>
                                    <label for="message">Message</label>
                                @else
                                    <textarea class="form-control" id="message" name="message" type="text" placeholder="Enter your message here..."
                                        style="height: 10rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                @endif

                            </div>
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton"
                                    type="submit">Submit</button>
                            </div>
                    </div>

                </div>

                </form>
            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
