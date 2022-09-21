@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @include('admin.posts.includes.form')
                </form>
            </div>
        </div>
    </div>
@endsection
