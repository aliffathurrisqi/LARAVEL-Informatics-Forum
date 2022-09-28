@extends('layouts.main')
@section('contents')
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-md-12 p-0">
                @foreach ($posts as $post)
                    <div class="card mb-2">
                        <div class="card-body h-100">
                            <div class="d-flex align-items-start">
                                <img src="/img/avatars/blank.png" width="36" height="36" class="rounded-circle me-2"
                                    alt="">
                                <div class="flex-grow-1">
                                    {{-- <small class="float-end text-navy">30m ago</small> --}}
                                    <strong>
                                        <a class="text-dark" href="/post/{{ $post['id'] }}">{{ $post['judul'] }}</a>
                                    </strong>
                                    <br>
                                    <small class="text-muted"><a href="#">{{ $post->user->name }}</a> - </small>
                                    <small class="text-muted">{{ $post['created_at'] }} WIB - </small>
                                    <small><a href="/categories/{{ $post->category->id }}"
                                            class="text-primary">{{ $post->category->name }}</a></small>

                                    <div class="text-muted mt-1 text-justify">
                                        {{ $post['body'] }}
                                    </div>

                                    {{-- <a href="#" class="btn btn-sm btn-outline-danger mt-1 me-1">
                                        <i class="bi bi-heart"></i>
                                        0 Like</a> --}}
                                    <a href="#" class="btn btn-sm btn-primary mt-1">
                                        <i class="bi bi-chat-dots"></i>
                                        0 Tanggapan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection