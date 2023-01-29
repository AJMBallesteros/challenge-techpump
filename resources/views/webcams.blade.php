<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title></title>

    <!-- Star CSS and Javascript -->
    <link rel="stylesheet" href="/assets/{{ $affiliate->assetsRoute() }}/css/reset.css" type="text/css" media="screen,projection">
    <link rel="stylesheet" href="/assets/{{ $affiliate->assetsRoute() }}/css/estilos.css" type="text/css" media="screen,projection">
    <!-- end CSS and Javascript -->
</head>

<body>

<div class="box-header">
    <div class="header">
        <h1 class="logo-sitio"><a href="#" title="{{ $affiliate->webName() }}">{{ $affiliate->webName() }}</a></h1>
        <div class="tit-webcams">Webcams</div>

        <div class="logo-cum"><a href="#" title="Cumlouder.com">Cumlouder.com</a></div>

        <div class="menu">
            <a href="#" title="Acceso a las Chicas en Directo">Acceso a las Chicas en Directo</a> <span>|</span>
            <a href="#" title="Acceso Miembros">Acceso Miembros</a> <span>|</span>
            <a href="#" title="Compra Créditos">Compra Créditos</a>
        </div>

        <div class="clear"></div>
    </div>
</div>
<!-- termina HEADER -->

<div class="listado-chicas">
    @foreach ($CamGirls as $key=>$CamGirl)
        @switch($key)
            @case(5)
            @case(29)
            @case(53)
                <div class="chica chica-grande">
                @break
            @case(20)
            @case(43)
                <div class="chica chica-grande grande-derecha">
                @break
            @default
            <div class="chica">
        @endswitch

            <a class="link" href={{ url("http://webcams.cumlouder.com/joinmb/cumlouder/" . urlencode($CamGirl->wbmerNick()) . "/?nats=" . env('CODIGO_TRACKING')) }} title="">
                <span class="thumb"><img src="images/thumb-01.jpg" width="175" height="150" alt="" title="" /></span>
                <span class="nombre-chica"> <span class="ico-online"></span>{{ $CamGirl->wbmerNick() }}</span>
                <span id="favorito" class="ico-favorito" ></span>
            </a>
        </div>
    @endforeach





    <div class="clear"></div>

    <a class="btn-mas-modelos" href="#" title="Mostrar más modelos">Siguiente Página</a>

</div>
<!-- termina LISTADO DE CHICAS -->

<div class="box-footer">
    <div class="menu">
        <a href="#" title="Acceso a las Chicas en Directo">Acceso a las Chicas en Directo</a> <span>|</span>
        <a href="#" title="Acceso Miembros">Acceso Miembros</a> <span>|</span>
        <a href="#" title="Compra Créditos">Compra Créditos</a>
    </div>
</div>
<!-- termina MENU FOOTER -->

<div class="box-copy">
    <div class="menu">
        <p>Copyright © WAMCash Spain Todos los derechos reservados <span>|</span> <a href="#" title="Webmasters">Webmasters</a> </p>
        <p>Contenido para adultos <span>|</span> Tienes que tener mas de 18 años para poder visitarlo. Todas las modelos de esta web son mayores de edad.</p>
    </div>
</div>
<!-- termina COPY -->

<div class="box-data">
    <div class="menu">
        <a href="#" title="Soporte Epoch">Soporte Epoch</a> <span>|</span>
        <a href="#" title="18 U.S.C. 2257 Record-Keeping Requirements Compliance Statement">18 U.S.C. 2257 Record-Keeping Requirements Compliance Statement</a> <span>|</span>
        <a href="#" title="Contacto">Contacto</a> <span>|</span>
        <a href="#" title="Please visit Epoch.com, our authorized sales agent">Please visit Epoch.com, our authorized sales agent</a>
    </div>
</div>
<!-- termina DATA -->

</body>
</html>
