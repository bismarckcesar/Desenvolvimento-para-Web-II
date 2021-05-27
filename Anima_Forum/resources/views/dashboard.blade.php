<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  @foreach(Auth::user()->posts as $post) 
                    <div class="px-6 py-3">
                    {{$post->title }}<br>
                    {{$post->subtitle}}<br>
                    {{$post->contents}}<br>
                    </div>
                  @endforeach
                  <form method="POST" action="{{route ('create_post')}}">
                  @csrf
                  <x-input id="title" class="block mt-1 w-full" type="title" name="title" placeholder="title"/>
                  <x-input id="subtitle" class="block mt-1 w-full" type="subtitle" name="subtitle" placeholder="subtitle"/>
                  <x-input id="contents" class="block mt-1 w-full" type="contents" name="contents" placeholder="contents"/>
                  <x-button>Salvar</x-button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
