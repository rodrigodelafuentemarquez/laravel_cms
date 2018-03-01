@extends('layouts.page')

@section('title')
    {{$page->name . " Form"}}
@stop

@section('content')
{!! Form::model($page, ['method'=>'PATCH', 'action'=>['AdminPagesController@updateTemplate', $page->id], 'files'=>true]) !!}
    {{csrf_field()}}
    <div class="container-fluid p-0">
        
        <div class="banner centro home">
            <div class="bannerinner">
                <h1>{!! Form::text('h1', null) !!}</h1>
                <h2 class="dia">EN 1 DÍA</h2>
            </div>
        </div>
    </div>
    <div class="form-group">
            {!! Form::submit('Actualizar Página', ['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    <div class="bannerhalfvideo">
        <div class="video" data-toggle="modal" data-target="#video">
            <img src="{{asset('images/templates/avilesbanner.jpg')}}" class="thumb" />
            <img src="{{asset('images/templates/playbutton.png')}}" class="play" />
        </div>
        <div class="cards">
            <div class="card">
                <div class="cardimage">
                    <img src="{{asset('images/templates/prot1.jpg')}}" style="object-position: left"/>
                </div>
                <div class="cardtext">
                    <h4>En un solo día</h4>
                    <p>Nuestro equipo médico especializado se vuelca en el paciente para que pueda estrenar su sonrisa cuanto antes.</p>
                    <div class="btn btn-blanco" data-toggle="modal" data-target="#modal_1">
                        <span style="font-size: 2em; margin: 6px 0.3em 0 0; line-height: 0;">+</span> Más detalles
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="cardimage">
                    <img src="{{asset('images/templates/prot2.jpg')}}" class="fr-fil" />
                </div>
                <div class="cardtext">
                    <h4>Tecnología CAD/CAM</h4>
                    <p>Con un diagnóstico y planificación en 3D se realiza la cirugía mínimamente invasiva guiada por ordenador, alcanzando tasas de éxito cercanas al 100%.</p>
                    <div class="btn btn-blanco" data-toggle="modal" data-target="#modal_2">
                        <span style="font-size: 2em; margin: 6px 0.3em 0 0; line-height: 0;">+</span> Más detalles
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="cardimage">
                    <img src="{{asset('images/templates/prot3.jpg')}}" style="object-position:right;" />
                </div>
                <div class="cardtext">
                    <h4>Sin prótesis provisionales</h4>
                    <p>En tan solo 24 horas y con la mayor precisión, se recupera la sonrisa y la masticación.</p>
                    <div class="btn btn-blanco" data-toggle="modal" data-target="#modal_3">
                        <span style="font-size: 2em; margin: 6px 0.3em 0 0; line-height: 0;">+</span> Más detalles
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid avilesencima" style="background-image: url({{asset('images/templates/bgavilestop.png')}})">
        <div class="container">
            <div class="banner centro">
                <div class="bannerinner">
                    <h2 class="text-align: center">Financiación hasta 36 meses <span style="color:#73c1c1">sin intereses</span> </h2>
                    <p>Volver a disfrutar de tu dentadura en un solo día ahora está a tu alcance</p>
                </div>
            </div>
		</div>
        <div class="cardwrapper azul1 tres justify-content-center">
            <div aria-role="button" data-target="#contacto_inferior" data-toggle="modal" class="cardvertical mr-sm-3" >
                <img src="{{asset('images/templates/bo1.jpg')}}">
                <div class="cardtext">
                    <h3 style="white-space: nowrap">Arcada inferior</h3>
                    <h4>Desde 8.000€</h4>
                    <p>Incluye prótesis definitivas en 24 horas de titanio y acrílico</p>
                </div>
                <div class="d-none d-lg-flex justify-content-center">
                    <div class="plusbtn">+</div>
                </div>
                <div class="d-lg-none" style="position: absolute; bottom: -38px;">
                    <div class="btn btn-blanco"><span style="font-size: 2em; margin: 6px 0.3em 0 0; line-height: 0;">+</span> Más información</div>
                </div>
            </div>
            <div class="cardvertical ml-sm-3" data-target="#contacto_superior" data-toggle="modal" >
                <img src="{{asset('images/templates/bo2.jpg')}}">
                <div class="cardtext">
                    <h3 style="white-space: nowrap">Arcada superior</h3>
                    <h4>Desde 9.000€</h4>
                    <p>Incluye prótesis definitivas en 24 horas de titanio y acrílico</p>
                </div>
                <div class="d-none d-lg-flex justify-content-center">
                    <div class="plusbtn">+</div>
                </div>
                <div class="d-lg-none" style="position: absolute; bottom: -38px;">
                    <div class="btn btn-blanco"><span style="font-size: 2em; margin: 6px 0.3em 0 0; line-height: 0;">+</span> Más información</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="financia" style="max-width:960px; margin:0px auto;">
                <p>
                    <small>* Los precios pueden variar en función de la cantidad de hueso o condiciones anatómicas especiales del paciente.
                    </small>
                    <br />
                    <small>* Existe la posibilidad de elegir otros materiales como circonio y cerámica o porcelana, variando el coste definitivo.</small>
                    <br />
                    <small>* En caso de financiación, los gastos de comisión de apertura serán del 3% </small>
                </p>
            </div>
        </div>
    </div>

    <div class="banner izda aviles" style="background-image: url({{asset('images/templates/bgaviles.jpg')}})">
        <div class="overlay">
            <div class="bannerinner container">
                <h2>Dr. Pablo <span style="color:#73c1c1">#AvilésResponde</span></h2>
                <h4>Uniendo estas dos técnicas a un completo equipo médico
especializado que se vuelca con el paciente durante la
jornada que dura el tratamiento, es posible estrenar sonrisa
en un solo día.</h4>
                <div data-toggle="modal" data-target="#video" class="btn btn-azul2">Descubre más</div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid avilesdebajo" style="background-image: url({{asset('images/templates/bgavilesbot.png')}})">
        <div class="citas container">
            <div class="banner centro">
                <div class="bannerinner">
                    <h2>Cientos de <span style="color:#73c1c1">pacientes felices</span></h2>
                    <p>Nada nos hace sentir más orgullosos que el bienestar de nuestros pacientes al recuperar su dentadura en tiempo récord.</p>
                </div>
            </div>
            <div class="cita">
                <p>Llevaba mucho tiempo sin poder disfrutar de mi boca. Con las prótesis dentales fijas del doctor Avilés... ¡He vuelto a sonreir! </p>
                <small>Ana Jiménez</small>
            </div>
            <div class="cita">
                <p>Pensé que iba a ser un proceso tedioso y largo pero en un solo día he pasado de estar acomplejado por mis dientes a poder morder con ganas otra vez.</p>
                <small>Miguel Sanchis</small>
            </div>
            <div class="cita">
                <p>Gracias al doctor Avilés he arreglado de forma definitiva mi boca. ¡Nada de dolor, nada de incomodidades, por fin vuelvo a comer como antes!</p>
                <small>Nerea Rodríguez</small>
            </div>
        </div>
    </div>

    <div class="container" id="contacto_footer">
        <div class="banner centro">
            <div class="bannerinner">
                <h2>¿Hablamos?</h2>
                <p>Déjanos tus datos y te atenderemos de forma personalizada lo antes posible</p>
            </div>
        </div>
        <form onsubmit="$('#gracias').modal('show');" action="https://docs.google.com/forms/d/e/1FAIpQLSeSZ3UOF-cwrTozJJBN8p_Ucl2Sb_nLa6u0AT_bqc9XhCLwQg/formResponse"
                target="no-target">
            <div class="row contactform pb-4">
                <div class="col-md-6 col-12">
                    <input name="entry.1199946029" type="text" id="nombre" autocomplete="given-name" required placeholder="Nombre" aria-label="Nombre">
                    <input name="entry.249173692" type="text" id="apellidos" autocomplete="family-name" required placeholder="Apellidos" aria-label="Apellidos">
                    <input name="emailAddress" type="email" id="email" autocomplete="email" required placeholder="Email" aria-label="Email">
                </div>
                <div class="col-md-6 col-12">
                    <input name="entry.659781189" type="tel" id="telefono" autocomplete="tel" placeholder="Teléfono" aria-label="Teléfono">
                    <textarea class="descrip" rows="4" name="entry.1197895751" id="descripcion" placeholder="Descripción" aria-label="Descripción"></textarea>
                    <input name="entry.1446172262" type="hidden" value="Formulario inferior" >
                    <button type="submit" class="btn btn-azul2">Enviar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="floattab d-none d-md-block" data-toggle="modal" data-target="#contacto_flota">
        <small style="color: white; text-align: right">Te llamamos<br>gratis</small>
    </div>

    <div class="fixedbuttonsmobile d-flex d-md-none justify-content-between">
        <div class="btn" data-toggle="modal" data-target="#contacto_flota">Reserva tu cita</div>
        <a href="tel:952009955" class="btn btn-azul2">952 00 99 55</a>
    </div>

<iframe src="#" id="no-target" name="no-target" style="pointer-events: none; z-index:-10000000; visibility: hidden; position:fixed; top:0px; left:0px; bottom:0px; right:0px; height: 100%; width:100%" width="0" height="100%"></iframe>

</body>



<div id="gracias" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gracias" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" >
            <div class="modal-body">
                <h4>Hemos recibido tus datos correctamente</h4>
                <p>En breve contactaremos contigo para atenderte personalmente</p>
                <div class="btn btn-azul2" data-dismiss="modal">Continuar</div>
            </div>
        </div>
    </div>
</div>

<div id="video" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="video" aria-hidden="true">
    <div class="modal-dialog vidclin" role="document" style="max-width: 765px;">
        <div class="modal-content" >
            <div class="modal-body mx-auto videoyt">
                <span data-dismiss="modal" style="position: absolute; top: 5px; right: 5px; font-size: 2em;">&times;</span>
                <iframe id="iframemobile" class="d-block d-sm-none" width="300" height="170" src="https://www.youtube.com/embed/CsKHhB_tEMo?rel=0&amp;showinfo=0;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <iframe id="iframedesktop" class="d-none d-md-block" width="730" height="410" src="https://www.youtube.com/embed/CsKHhB_tEMo?rel=0&amp;showinfo=0;enablejsapi=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div id="modal_1" class="modal fade ancha" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span data-dismiss="modal" style="position: absolute; top: 5px; right: 5px; font-size: 2em;">&times;</span>
            <div class="banner centro">
                    <div class="bannerinner">
                            <h1>En un solo día</h1>
                            <h3>Ponemos la tecnología al servicio de tu comodidad</h3>
                    </div>
            </div>
            <div class="container">
                    <div class="bannerhalf reverse">
                            <div class="halftext" style="padding: 3em;">
                                <h3>¿Cómo podemos colocar prótesis fijas definitivas en tan solo un día?</h3>
                                <p>Una combinación de tecnología de vanguardia y un completo equipo médico especializado volcado en el paciente nos permite <strong>reducir al máximo los tiempos de tratamiento</strong>, ofrecer un precio más competitivo y minimizar las molestias post-quirúrgicas.</p>
                                <p>En un solo día nuestros clientes pueden disfrutar cómodamente de su nueva sonrisa.</p>
                            </div>
                            <div class="halfimage">
                                    <img src="{{asset('images/templates/sedacion2.jpg')}}" style="margin-top:40px;"/>
                            </div>
                    </div>
            </div>
            <div class="volv" style="display: flex; padding: 1em;">
                    <div class="btn btn-blanco" data-dismiss="modal" aria-label="Close" style="margin: 0 auto;">
                            <span style="font-size: 2rem; line-height: 0; margin: 5px 8px 0 0">&times;</span>Volver
                    </div>
                    <br />
            </div>
            </div>
        </div>
    </div>
</div>
<div id="modal_2" class="modal fade ancha" tabindex="-1" role="dialog" aria-labelledby="modal_2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span data-dismiss="modal" style="position: absolute; top: 5px; right: 5px; font-size: 2em;">&times;</span>
            <div class="banner centro">
                    <div class="bannerinner">
                        <h1>Tecnologías de vanguardia</h1>
                        <h3>La innovación es nuestra seña de identidad</h3>
                    </div>
            </div>
            <div class="banner" style="background-image:url({{asset('images/templates/maq.jpg')}}); background-position: center; background-size: cover; min-height: 300px;"></div>
            <div class="container">
                    <div class="banner centro">
                        <h3>Cirugía Mínimamente Invasiva</h3>
                        <p>La <strong>Cirugía Mínimamente Invasiva</strong> guiada por ordenador nos permite planificar virtualmente el tratamiento, garantizando la colocación de los implantes en el punto exacto y alcanzando unas tasas de éxito cercanas al 100%</p>
                    </div>
                    <div class="bannerhalf reverse" style="margin-top: 0;">
                        <div class="halftext">
                            <h3>Tecnología Digital CAD/CAM</h3>
                            <p>La <strong>Tecnología Digital CAD/CAM</strong> nos permite realizar simulaciones para que el paciente escoja su nueva sonrisa. Después fabricamos las piezas seleccionadas en el laboratorio, trasladando la máxima fiabilidad de la planificación virtual al resultado final.</p>
                        </div>
                        <div class="halfimage maxheight350resp">
                            <img src="{{asset('images/templates/maq2.jpg')}}" />
                        </div>
                    </div>
                    <div class="bannerhalf">
                        <div class="halfimage maxheight350resp">
                                <img src="{{asset('images/templates/maq3.jpg')}}" />
                        </div>
                        <div class="halftext">
                            <h3>Innovación y experiencia</h3>
                            <p>Nuestro equipo médico especializado en el manejo de estas técnicas supone una mezcla perfecta de innovación y experiencia al servicio de nuestros pacientes.</p>
                        </div>
                    </div>
            </div>
            <div class="volv" style="display: flex; padding: 1em;">
                    <div class="btn btn-blanco" data-dismiss="modal" aria-label="Close" style="margin: 0 auto;">
                            <span style="font-size: 2rem; line-height: 0; margin: 5px 8px 0 0">&times;</span>Volver
                    </div>
                    <br />
            </div>
            </div>
        </div>
    </div>
</div>
<div id="modal_3" class="modal fade ancha" tabindex="-1" role="dialog" aria-labelledby="modal_3" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span data-dismiss="modal" style="position: absolute; top: 5px; right: 5px; font-size: 2em;">&times;</span>
            <div class="banner centro">
                    <div class="bannerinner">
                            <h1>Sin prótesis provisionales</h1>
                            <h3>En tan solo 24 horas y con la mayor precisión, se recupera la sonrisa y la masticación.</h3>
                    </div>
            </div>
            <div class="banner" style="background-image:url({{asset('images/templates/prot3.jpg')}}); background-size: cover; background-position: 75%; min-height: 300px;"></div>
            <div class="container">
                    <div class="bannerhalf reverse">
                            <div class="halftext" style="padding: 3em;">
                                <h3>¿Qué ventajas logra Aviles Digital Dental Clinic frente a otras técnicas tradicionales?</h3>
                                <p>Gracias a la incorporación de procesos digitalizados 360º superamos el principal obstáculo de la técnica tradicional: tener que utilizar una prótesis provisional hasta que se confecciona la definitiva. Contamos con un gran aliado en la tecnología que nos permite ganar en planificación, precisión y rapidez.</p>
                                <p>Todo ello con la máxima comodidad, flexibilidad y las menores molestias para el paciente.</p>
                            </div>
                            <div class="halfimage" style="max-height:350px;">
                                    <img src="{{asset('images/templates/prot5.png')}}" style="margin-top:40px;"/>
                            </div>
                    </div>
            </div>

            <div class="volv" style="display: flex; padding: 1em;">
                    <div class="btn btn-blanco" data-dismiss="modal" aria-label="Close" style="margin: 0 auto;">
                            <span style="font-size: 2rem; line-height: 0; margin: 5px 8px 0 0">&times;</span>Volver
                    </div>
                    <br />
            </div>
            </div>
        </div>
    </div>
</div>

<div id="contacto_superior" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contacto_superior" aria-hidden="true">
    <div class="modal-dialog formmod" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span data-dismiss="modal" style="position: absolute; top: 5px; right: 5px; font-size: 2em;">&times;</span>
                <div class="container">
                    <div class="banner centro">
                        <div class="bannerinner">
                            <h2>Contáctanos</h2>
                            <p>Déjanos tus datos y te atenderemos de forma personalizada lo antes posible</p>
                        </div>
                    </div>
                    <form onsubmit="$('#contacto_superior').modal('hide'); $('#gracias').modal('show');" action="https://docs.google.com/forms/d/e/1FAIpQLSeSZ3UOF-cwrTozJJBN8p_Ucl2Sb_nLa6u0AT_bqc9XhCLwQg/formResponse"
                        target="no-target">
                        <div class="row contactform">
                            <div class="col-12">
                                <input name="entry.1199946029" class="name" type="text" id="nombre" autocomplete="given-name" required placeholder="Nombre" aria-label="Nombre">
                                <input class="lastname" name="entry.249173692" type="text" id="apellidos" autocomplete="family-name" required placeholder="Apellidos" aria-label="Apellidos">
                                <input name="emailAddress" type="email" id="email" autocomplete="email" required placeholder="Email" aria-label="Email">
                                <input name="entry.659781189" type="tel" id="telefono" autocomplete="tel" placeholder="Teléfono" aria-label="Teléfono">
                                <textarea rows="4" name="entry.1197895751" id="descripcion" placeholder="Descripción" aria-label="Descripción"></textarea>
                                <button type="submit" class="btn btn-azul2">Enviar</button>
                            </div>
                            <input name="entry.1446172262" type="hidden" value="Arcada superior">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contacto_inferior" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contacto_inferior" aria-hidden="true">
    <div class="modal-dialog formmod" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span data-dismiss="modal" style="position: absolute; top: 5px; right: 5px; font-size: 2em;">&times;</span>
                <div class="container">
                    <div class="banner centro">
                        <div class="bannerinner">
                            <h2>Contáctanos</h2>
                            <p>Déjanos tus datos y te atenderemos de forma personalizada lo antes posible</p>
                        </div>
                    </div>
                    <form onsubmit="$('#contacto_inferior').modal('hide'); $('#gracias').modal('show');" action="https://docs.google.com/forms/d/e/1FAIpQLSeSZ3UOF-cwrTozJJBN8p_Ucl2Sb_nLa6u0AT_bqc9XhCLwQg/formResponse"
                        target="no-target">
                        <div class="row contactform">
                            <div class="col-12">
                                <input name="entry.1199946029" class="name"  type="text" id="nombre" autocomplete="given-name" required placeholder="Nombre" aria-label="Nombre">
                                <input class="lastname" name="entry.249173692" type="text" id="apellidos" autocomplete="family-name" required placeholder="Apellidos" aria-label="Apellidos">
                                <input name="emailAddress" type="email" id="email" autocomplete="email" required placeholder="Email" aria-label="Email">
                                <input name="entry.659781189" type="tel" id="telefono" autocomplete="tel" placeholder="Teléfono" aria-label="Teléfono">
                                <textarea rows="4" name="entry.1197895751" id="descripcion" placeholder="Descripción" aria-label="Descripción"></textarea>
                                <button type="submit" class="btn btn-azul2">Enviar</button>
                            </div>
                            <input name="entry.1446172262" type="hidden" value="Arcada Inferior">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contacto_flota" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contacto_flota" aria-hidden="true">
    <div class="modal-dialog formmod" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <span data-dismiss="modal" style="position: absolute; top: 7px; right: 7px; font-size: 2em;">&times;</span>
                <div class="container">
                    <div class="banner centro">
                        <div class="bannerinner">
                            <h2>Te llamamos</h2>
                            <p>Si prefieres que te llamemos para resolverte cualquier duda, deja tu teléfono y la hora que quieras que te contactemos</p>
                        </div>
                    </div>
                    <form onsubmit="$('#contacto_flota').modal('hide'); $('#gracias').modal('show');" action="https://docs.google.com/forms/d/e/1FAIpQLSeSZ3UOF-cwrTozJJBN8p_Ucl2Sb_nLa6u0AT_bqc9XhCLwQg/formResponse"
                        target="no-target">
                        <div class="row contactform">
                            <div class="col-12">
                                <input name="entry.1199946029" class="name" type="text" id="nombre" autocomplete="given-name" required placeholder="Nombre" aria-label="Nombre">
                                <input class="lastname" name="entry.249173692" type="text" id="apellidos" autocomplete="family-name" required placeholder="Apellidos" aria-label="Apellidos">
                                 <input name="entry.659781189" type="tel" id="telefono" autocomplete="tel" placeholder="Teléfono" aria-label="Teléfono">
                                <input name="entry.800186018" type="text" id="hora" placeholder="¿A qué hora te llamamos?">
                                
                                <button type="submit" class="btn btn-azul2">Enviar</button>
                            </div>
                            <input name="entry.1446172262" type="hidden" value="Llamanos">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@stop


@section('scripts')
<!-- Include JS file. -->

<script>
    $(function(){
        var command = {
            "event": "command",
            "func": "pauseVideo"
        };
        $("#video").on("hide.bs.modal", function(){
            document.getElementById('iframedesktop').contentWindow.postMessage(JSON.stringify(command), "*");
            document.getElementById('iframemobile').contentWindow.postMessage(JSON.stringify(command), "*");
        });
        $("#gracias").on("shown.bs.modal", function(){
            $("[id^='contacto_'] form").trigger("reset");
        });
    });
</script>

@stop