@extends('layouts.app')

@section('content')
    @if ($posts->count())
        @foreach ($posts as $post)
        <div class="flex justify-center px-2 sm:px-7 lg:px-32 mb-3">
            <div class="w-11/12 sm:w-10/12 bg-white p-3 sm:p-6 rounded-lg mt-5">
                {{-- <img class="mx-auto" src="/storage/images_post/ocean.jpg" alt="" width="100%" height="auto"> --}}
                <h2 class="my-5 text-2xl sm:text-4xl lg:text-5xl font-bold">{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <p class="my-2"><span class="pr-5 pl-1 py-1 rounded-r-lg  bg-blue-200">{{$post->user->name}}</span><span class="ml-1">{{$post->created_at->diffForHumans()}}</span></p>
                
                @can('delete', $post)
                    <div>
                        <form action="{{ route('dashboard-delete', $post) }}" class="mr-1" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Delete</button>
                        </form>
                    </div>
                @endcan

                <div class="flex item-center">
                    @auth
                        @if (!$post->likedBy(auth()->user()))
                        <form action="{{ route('dashboard.likes', $post->id) }}" class="mr-1" method="post">
                            @csrf
                            <button type="submit" class="text-blue-500">Like</button>
                        </form>
                        @else
                        <form action="{{ route('dashboard.likes', $post->id) }}" class="mr-1" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Unlike</button>
                        </form>
                        @endif
                    @endauth

                    <span>{{ $post->likes->count() }} {{ Str::plural('like',
                    $post->likes->count()) }}</span>
                </div>
            </div>
        </div>
        @endforeach
        {{ $posts->links() }}
    @else
    <div class="flex justify-center px-2 sm:px-7 lg:px-32">
        <div class="w-11/12 sm:w-10/12 bg-white p-3 sm:p-6 rounded-lg mt-5">
            <p>There are no posts</p>
        </div>
    </div>
    @endif
@endsection