@extends('layouts.app')

@section('content')
    <div class="flex justify-center px-2 sm:px-7 lg:px-32 mt-5">
        <div class="w-12/12 sm:w-10/12 bg-white p-6 rounded-lg">

            <form action="{{ route('create-post') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="title" class="sr-only">Title</label>
                    <input type="text" name="title" placeholder="Title"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('name') border-red-500 @enderror" value="{{ old('title') }}">

                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea id="body" cols="30" rows="4" name="body" placeholder="Post something!"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg
                    @error('body') border-red-500 @enderror" value="{{ old('body') }}"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" 
                    class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection