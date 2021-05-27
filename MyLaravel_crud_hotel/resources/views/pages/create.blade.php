@extends('layouts.main-layouts')

@section('sectionCreate')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3>
                    Create New Employee
                </h3>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-12">


                <form class="" action="{{route('add')}}" method="POST">

                    @csrf
                    @method('POST');

                    <div class="">
                        <label for="firstname">Firstname</label>
                        <input id="firstname" type="text" name="firstname" value="">
                    </div>

                    <div class="">
                        <label for="lastname">Lastname</label>
                        <input id="lastname" type="text" name="lastname" value="">
                    </div>

                    <div class="">
                        <label for="role">Role</label>
                        <input id="role" type="number" name="role" value="">
                    </div>

                    <div class="">
                        <label for="ral">Ral</label>
                        <input id="ral" type="number" name="ral" value="">
                    </div>

                    <button class="btn btn-primary mt-5" type="submit" name="button">
                        Add Employee
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
