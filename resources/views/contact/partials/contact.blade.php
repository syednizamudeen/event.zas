<section id="contact" class="section-padding contact-section bg-secondary">
    <div class="container">
        <!-- Section Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
                <div class="section-title text-center faq-title">
                    <h2>Contact Me</h2>
                    <p>Please do contact us any time.</p>
                </div>
            </div>
        </div>
        <!-- //Section Title -->

        <!-- Contact Form -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Form -->
                {!! Form::open(['action' => 'ContactController@send', 'method' => 'POST', 'class' => 'contact-form bg-white']) !!}
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                        </div>
                        <div class="col-lg-6 form-group">
                            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        {{Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject'])}}
                    </div>

                    <div class="form-group">
                        {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Message'])}}
                    </div>
                    <div class="form-btn text-center">
                        {{ Form::button('Send Message', ['class' => 'button', 'type' => 'submit']) }}
                    </div>
                    {{ csrf_field() }}
                {!! Form::close() !!}
                <!-- // Form -->
            </div>
        </div>
        <!-- // Contact Form -->
    </div>
</section>