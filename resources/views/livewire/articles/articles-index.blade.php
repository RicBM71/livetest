<div>
    <x-slot name="header">
        <div class="flex justify-start">
            Listado de articulos
        </div>
    </x-slot>
    <div class="py-1">
        <div class="max-w-9xl mx-auto sm:px-2 lg:px-0">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="h-10 flex justify-end">
                    <button type="button"
                        class="m-2 px-2 py-2.5 bg-transparent text-blue-600 font-small text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out">Nuevo</button>
                    <button type="button"
                        class="inline-block m-2 px-2 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out">Ampliar</button>
                    <button type="button"
                        class="inline-block m-2 px-2 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out">Capitalizar</button>
                </div>
                <div class="p-2 sm:px-2">
                    <h2>{{ $categoria }}
                        {{-- <input wire:model="categoria" type="text" placeholder="categoria"> --}}
                        <div class="py-2">
                            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">

                                {{-- <input wire:model.debounce.500ms="search" type="text" placeholder="buscar...">
                                --}}
                                <div class="max-w-2xl m-2">
                                    <x-jet-input wire:model.debounce.500ms="search" class="block mt-1 w-full"
                                        type="text" autofocus placeholder="buscar..." />
                                </div>
                                <ul class="mt-6 mx-4">
                                    @foreach($articulos as $article)
                                    <li>{{$article->title}}</li>
                                    @endforeach
                                </ul>


                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
