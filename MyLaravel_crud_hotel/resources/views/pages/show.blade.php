@extends('layouts.main-layouts')

@section('sectionShow')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <p>
                    Name: {{ $employee -> firstname }}
                </p>

                <p>
                    Lastame: {{ $employee -> lastname }}
                </p>

                <p>
                    Role: {{ $employee -> role }}
                </p>

                <p>
                    Ral: {{ $employee -> ral }}
                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <a class="btn btn-primary" href="{{ route('home') }}">
                    bringme back Home
                </a>
            </div>
        </div>
    </div>
@endsection
