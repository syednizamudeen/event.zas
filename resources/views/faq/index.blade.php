@extends('layouts.main')
@section('content')
<section id="faq" class="section-padding faq-area bg-secondary">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center faq-title">
                    <h2>Frequently asked questions</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <!-- //Section Title -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Vendor</h2>
                <!-- FAQ Content -->
                <div class="faq-content" id="accordion">

                    <!-- Single FAQ -->
                    <div class="single-faq">

                        <!-- FAQ Header -->
                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-1">Can I create a few account if I provide different services?</h4>
                        <!-- // FAQ Header -->

                        <!-- FAQ Content -->
                        <div id="faq-1" class="collapse" data-parent="#accordion">
                            <div class="faq-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                            </div>
                        </div>
                        <!-- FAQ Content -->
                    </div>
                    <!-- // Single FAQ -->

                    <!-- Single FAQ -->
                    <div class="single-faq">

                        <!-- FAQ Header -->
                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-2">After the free trail period or in future can I choose to unsubscribe?</h4>
                        <!-- // FAQ Header -->

                        <!-- FAQ Content -->
                        <div id="faq-2" class="collapse" data-parent="#accordion">
                            <div class="faq-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                            </div>
                        </div>
                        <!-- FAQ Content -->
                    </div>
                    <!-- // Single FAQ -->

                    <!-- Single FAQ -->
                    <div class="single-faq">

                        <!-- FAQ Header -->
                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-3">How can I delete my account?</h4>
                        <!-- // FAQ Header -->

                        <!-- FAQ Content -->
                        <div id="faq-3" class="collapse" data-parent="#accordion">
                            <div class="faq-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                            </div>
                        </div>
                        <!-- FAQ Content -->
                    </div>
                    <!-- // Single FAQ -->

                </div>
                <!-- FAQ Content -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>User</h2>
                <!-- FAQ Content -->
                <div class="faq-content" id="accordion2">

                    <!-- Single FAQ -->
                    <div class="single-faq">

                        <!-- FAQ Header -->
                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-4">What can I do if I Forget my password or username?</h4>
                        <!-- // FAQ Header -->

                        <!-- FAQ Content -->
                        <div id="faq-4" class="collapse" data-parent="#accordion2">
                            <div class="faq-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                            </div>
                        </div>
                        <!-- FAQ Content -->
                    </div>
                    <!-- // Single FAQ -->

                    <!-- Single FAQ -->
                    <div class="single-faq">

                        <!-- FAQ Header -->
                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-5">Can I be a vendor?</h4>
                        <!-- // FAQ Header -->

                        <!-- FAQ Content -->
                        <div id="faq-5" class="collapse" data-parent="#accordion2">
                            <div class="faq-body">
                                Yes it is possible for anyone to be a vendor as long as you provide relevant event services. Click here to register with us today.
                            </div>
                        </div>
                        <!-- FAQ Content -->
                    </div>
                    <!-- // Single FAQ -->

                    <!-- Single FAQ -->
                    <div class="single-faq">

                        <!-- FAQ Header -->
                        <h4 class="collapsed" data-toggle="collapse" data-target="#faq-6">How to become a member with EventZAS for free?</h4>
                        <!-- // FAQ Header -->

                        <!-- FAQ Content -->
                        <div id="faq-6" class="collapse" data-parent="#accordion2">
                            <div class="faq-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos, similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                            </div>
                        </div>
                        <!-- FAQ Content -->
                    </div>
                    <!-- // Single FAQ -->

                </div>
                <!-- FAQ Content -->
            </div>
        </div>
    </div>
</section>
{{-- <section>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="section-heading text-uppercase">{{$title}}</h2>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                User: What can I do if I Forget my password or username? can I be a vendor?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Yes it is possible for anyone to be a vendor as long as you provide relevant event services. Click here to register with us today.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                forget your password and username?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                        How can I delete my account?
                        -can I create a few account if I provide different services?
                        - After the free trail period or in future can I choose to unsubscribe?
                        </div>
                    </div>
                </div>                    
            </div>
            <p class="text-info">For further enquiries, email us!</p>
        </div>
    </div>
</div>
</section>       --}}
@endsection