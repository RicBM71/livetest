<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-start">
            {{$empresa}}
        </div>
    </x-slot>

    <div class="py-1">
        <div class="max-w-9xl mx-auto sm:px-2 lg:px-0">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="p-6 sm:px-20">

                    <div class="mt-2 text-2xl">
                        Welcome to your Jetstream application!
                    </div>


                </div>

            </div>
        </div>
    </div>
</x-app-layout>
