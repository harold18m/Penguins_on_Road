<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            {{ __('Reserva de Viaje') }}
        </h2>
    </x-slot>
    <div class="bg-white p-6">
        <div class="flex flex-row ">
            <div class="w-full p-6">
                <div id="reader" class="w-full h-96"></div>
            </div>

            <audio id="myAudio1">
                <source src="{{ asset('audios/success.mp3') }}" type="audio/mpeg">
            </audio>
              
            <audio id="myAudio2">
                <source src="{{ asset('audios/failes.mp3') }}" type="audio/mpeg">
            </audio>

            <div class="w-full p-6">
                <h4 class="text-lg font-semibold">Resultado del escáner:</h4>
                <form id="reserva-form" method="POST" action="{{ route('utilizar-reserva') }}">
                    @csrf
                    <input type="text" name="codigoDeAcceso" class="input mt-2" id="result"  placeholder="Resultado" readonly>
                    <button type="submit">Enviar</button>
                </form>
                <p class="mt-4"  id="mensaje"></p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/escaneo-chofer.js') }}"></script>
    <script src="{{ asset('js/html5_qrcode.js') }}"></script>        
    <script src="{{ asset('js/escaner.js') }}"></script>
</x-app-layout>
