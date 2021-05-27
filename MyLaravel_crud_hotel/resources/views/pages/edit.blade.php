@extends('layouts.main-layouts')

@section('sectionEdit')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h4>
                    edit profile
                </h4>

                <form class="" action="{{route('update', $employee -> id)}}" method="POST">

                    @csrf
                    @method('POST');

                    <div class="">
                        <label for="firstname"></label>
                        <input id="firstname" type="text" name="firstname" value="{{ $employee -> firstname }}">
                    </div>

                    <div class="">
                        <label for="lastname"></label>
                        <input id="lastname" type="text" name="lastname" value="{{ $employee -> lastname }}">
                    </div>

                    <div class="">
                        <label for="role"></label>
                        <input id="role" type="number" name="role" value="{{ $employee -> role }}">
                    </div>

                    <div class="">
                        <label for="ral"></label>
                        <input id="ral" type="number" name="ral" value="{{ $employee -> ral }}">
                    </div>

                    <button class="btn btn-primary mt-5" type="submit" name="button">
                        Update
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
