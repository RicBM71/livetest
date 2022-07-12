
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             Listado de articulos
        </h2>
    </x-slot>

    <h2>{{ $categoria }}
        <input wire:model="categoria" type="text" placeholder="categoria">
    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <input wire:model.debounce.500ms="search" type="text" placeholder="buscar..."> --}}
                <x-jet-input wire:model.debounce.500ms="search" class="block mt-1 w-full" type="text" autofocus placeholder="buscar..."/>
                    <ul>
                        @foreach($articulos as $article)
                            <li>{{$article->title}}</li>
                        @endforeach

            </div>
        </div>
    </div>

</div>
