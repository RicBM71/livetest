<x-app-layout>
    <x-slot name="header">

        <div class="flex justify-start">
                <pre>{{$empresa}}</pre>
                <div>Titulo1</div>
            </div>







    </x-slot>

    <div class="py-1">
        <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <div class="flex justify-end">
          <button type="button" class="inline-block m-2 px-2 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out">Nuevo</button>
          <button type="button" class="inline-block m-2 px-2 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out">Ampliar</button>
          <button type="button" class="inline-block m-2 px-2 py-2.5 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out">Capitalizar</button>
    </div>
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-2 text-2xl">
                        Welcome to your Jetstream application!
                    </div>

                    <div class="mt-6 text-gray-500">
                        Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
                        to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                        you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
                        ecosystem to be a breath of fresh air. We hope you love it.
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
