@extends('layouts.master')

@section('content')
    <br/>
    <h2>자유게시판</h2>

    <ul class="list-group">
        @forelse($posts as $post)
            <li class="list-group-item">
                <a href="{{  route("post.show", $post->id)  }}">{{  $post->title  }}</a>
            </li>
        @empty
            <li>
                정보가 없습니다.
            </li>
        @endforelse
    </ul>
    {{ $posts->links('pagination::bootstrap-5') }}
    {{-- bootstrap-4 아니면 5 둘 중에 스타일 고를 수 있음 --}}

    <h3>
        <a href="{{ route('post.create') }}" class="btn btn-primary"> 글 작성하기 </a>
        <a href="{{ route('welcome.index') }}" class="btn btn-primary"> 두둥퇴장하기 </a>
    </h3>
@endsection
