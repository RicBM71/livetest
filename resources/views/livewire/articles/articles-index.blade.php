<div>
    <x-slot name="header">
        <div class="grid grid-cols-2 gap-4">
            <div class="flex justify-start">Listado de articulos</div>
            <div class="flex justify-end">
                <button type="button"
                    class="font-small rounded bg-transparent px-2 text-xs uppercase leading-tight text-blue-600 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-blue-700 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200">
                    Nuevo
                </button>
                <button type="button"
                    class="font-small rounded bg-transparent px-2 text-xs uppercase leading-tight text-blue-600 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-blue-700 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200">
                    Ampliar
                </button>
                <button type="button"
                    class="font-small rounded bg-transparent px-2 text-xs uppercase leading-tight text-blue-600 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-blue-700 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200">
                    Recuperar
                </button>
            </div>
        </div>
    </x-slot>
    <div class="py-1">
        <div class="max-w-9xl mx-auto sm:px-2 lg:px-0">
            <div class="bg-white overflow-hidden sm:rounded-lg">

                <div class="p-2 sm:px-2">
                    <h2>{{ $categoria }}
                        {{-- <input wire:model="categoria" type="text" placeholder="categoria"> --}}
                        <div class="py-2">
                            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">

                                {{-- <input wire:model.debounce.500ms="search" type="text" placeholder="buscar..."> --}}
                                <div class="max-w-2xl m-2">
                                    <x-jet-input wire:model.debounce.500ms="search" class="block mt-1 w-full"
                                        type="text" autofocus placeholder="buscar..." />
                                </div>
                                <ul class="mt-6 mx-4">
                                    @foreach ($articulos as $article)
                                        <li>{{ $article->title }}</li>
                                    @endforeach
                                </ul>


                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
