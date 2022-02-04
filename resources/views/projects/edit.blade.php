@extends("layouts.app2")

@section("content")
    <div class="flex justify-center flex-wrap p-4 mt-5">
        @include("projects.form")
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
@endsection
