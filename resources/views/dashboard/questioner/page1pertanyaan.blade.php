@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Questioner</h1>
    </div>
    <div>
        <form action="{{ route('survey.pageTwo') }}" method="POST">
            @csrf
        <section class="fs-5 general">
            <div class="p-3 px-5">
                <div class="px-5">
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Semester Saat ini</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" name="" placeholder="5">
                    </div>
                    <div class="mb-5">
                        <label for="exampleFormControlInput1" class="form-label">Berapa IPK mu saat ini</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="3.75">
                    </div>
                </div>
            </div>
        </section>
        <button type="submit" class="btn btn-primary">Next</button>
    </form>
    </div>
@endsection
