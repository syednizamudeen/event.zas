@extends('layouts.visitor')
@section('content')
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Error: 500 Internal Server Error</h2>
                    <p>{{ $exception->getMessage() }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection