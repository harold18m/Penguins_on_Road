@extends ('usuario-pasajero.navbar-boletas')

@section ('css-personalizado')
    <link rel="stylesheet" href="{{ asset ('css/Passenger/style-ticket.css') }}">
@stop

@section ('titulo')
    {{ 'Menu || Boletas de viaje' }}
@stop

@section ('contenido')
<!--contenido tabla de boletas-->
    <main>
        <div class="contenido-ticket">
            <h3>Mis boletas de viaje</h3>
            <div class="contenido-tabla">
                <table>
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Turno</th>
                            <th>Ruta</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($boletas as $boleta)
                        <tr>
                            <td>{{ $boleta->fecha_formateada }}</td>
                            <td>{{ $boleta->viaje->ruta->turno->nombre }}</td>
                            <td>{{ $boleta->viaje->ruta->punto_inicial }}➡️{{ $boleta->viaje->ruta->punto_final }}</td>
                            <td>
                                <a href="{{ route('usuario-pasajero.ver_boleta', ['idBoleta' => $boleta->id_boleta]) }}">
                                    <ion-icon name="eye"></ion-icon>
                                </a>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href=""><ion-icon name="eye"></ion-icon></a>
                            </td>
                        </tr>
                    </tbody>
                </table>  
            </div>
 
        </div>
    </main>

@stop   