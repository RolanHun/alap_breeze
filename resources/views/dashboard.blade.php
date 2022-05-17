<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tesztekkérdések') }}
        </h2>
        
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ url('js/ajax.js') }}"></script>
        <script src="{{ url('js/kerdesLista.js') }}"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="kategoriaVal">
                        <select name="kategoriaV" id="kategoriaV">
                            <option id="kategoriaO">kateg</option>
                        </select>
                    </form>
                    <br>
                <div class="tesztek">
                    <div class="kerdes">
                        <div class="teszt"><h1>kerdes</h1></div>
                        <div class="valaszok">
                            <div class="valasz"><h2 id="1">v1</h2></div>
                            <div class="valasz"><h2 id="2">v2</h2></div>
                            <div class="valasz"><h2 id="3">v3</h2></div>
                            <div class="valasz"><h2 id="4">v4</h2></div>
                        </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
