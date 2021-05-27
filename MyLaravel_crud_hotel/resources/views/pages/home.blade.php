@extends('layouts.main-layouts')

@section('sectionHome')

    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2>
                    Welcome home
                </h2>

                <h4>
                    Employees list
                </h4>

                <a class="btn btn-primary" href="{{ route('create') }}">
                    Create new Employ
                </a>

            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">
                <ul>
                    @foreach ($employees as $employee)
                        <li class="mt-3 mb-3">
                            <a  href=" {{ route('show', $employee -> id) }} ">
                                Name: {{ $employee -> firstname }} lastname: {{ $employee -> lastname }}
                            </a>

                            <a class="ml-3" href="{{ route('edit', $employee -> id) }}">
                                <i class="far fa-edit"></i>
                            </a>

                            <a class="ml-3" href="{{ route('destroy', $employee -> id ) }}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
