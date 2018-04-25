@extends('layouts.home')
@section('content')
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Error: 404 Not Found</h2>
                    <p>{{ $exception->getMessage() }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection