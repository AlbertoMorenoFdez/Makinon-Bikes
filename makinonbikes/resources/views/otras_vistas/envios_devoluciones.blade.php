@extends('layouts.app')

@section('main')
    <div class="row w-4/5 d-flex justify-center">

        <div class="contenedor-info">
            <div class="contacto-info">
                <h2>Envíos</h2>
                <hr class="mb-3">
                <p>Los envíos se realizan a través de la empresa de mensajería MRW. Los plazos de entrega son de 24-48 horas
                    para la Península y de 48-72 horas para Baleares. Para Canarias, Ceuta y Melilla, el plazo de entrega es
                    de 5-7 días laborables.</p>
                <p>Si haces tu pedido los días laborables hasta las 15:00 hrs, te lo enviaremos el mismo día. ¡Prometido!
                </p>
                <p>Los gastos de envío son de 20€ para peedidos inferiores a 50€, siendo gratuitos a partir de ese importe
                </p>

                <p>En el caso de que el producto no esté disponible en el momento de la compra, se informará al cliente del
                    plazo de entrega estimado.</p>

                <p>Si recibes un envío en estado dañado, entonces rechaza - si es posible - la aceptación del envío y
                    contacta con nuestro equipo. ¡Entonces encontraremos una solución juntos!</p>

            </div>
            <div>
                <h2>Devoluciones</h2>
                <hr class="mb-3">
                <p>Si no estás satisfecho con tu compra, tienes un plazo de 14 días naturales para devolver el producto.
                    Para
                    ello, ponte en contacto con nosotros a través de nuestro <a href={{ route('contacto') }}
                        label="contacto"><strong>formulario de contacto</strong></a> o en el teléfono 952 33
                    95
                    58.</p>
                <p>Los productos deben ser devueltos en su embalaje original y en perfecto estado. Los gastos de envío
                    de la
                    devolución corren a cargo del cliente salvo error por parte nuestro.</p>
                <p>Una vez recibido el producto y comprobado su estado, procederemos a la devolución del importe del
                    producto
                    en un plazo de 14 días naturales utilizando el mismo método con el que el cliente reallizo el
                    pedido.
                </p>
            </div>
        </div>

    </div>
@endsection
