<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image" href="{{url('assets/img/logo1.png')}}">
    <title>CrediFast</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{url('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{url('assets/img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/img/apple-touch-icon-114x114.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Stylesheet
    ================================================== -->

    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/nivo-lightbox/nivo-lightbox.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/nivo-lightbox/default.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        table .titulo {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <img id="logo" src="{{url('assets/img/logo1.png')}}">
                <a1 style="color:#000000">CrediFast</a1>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="titulo" scope="col" colspan="4" align="center"><b>Cotización de Préstamo</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Solicitante:</th>
                    <td>{{Auth::user()->name}}</td>
                    <th scope="row">Fecha:</th>
                    <td> {{$date}} </td>
                </tr>
                <tr>
                    <th scope="row">Vigencia</th>
                    <td>{{$endDate}}</td>
                    <th scope="row">Tipo de Préstamo</th>
                    
                    <td>{{Session::get('nomtipo')}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <td style="color:#456789;font-size:250%;" colspan="5" align="center" scope="col">Amortización</td>
                </tr>
                <tr>
                    <th width='40%'>Núm. Pago</th>
                    <th width='15%' class="texr-center">Pago Interés</th>
                    <th width='20%' class="texr-center">Pagos Capital</th>
                    <th width='20%' class="texr-center">Saldo</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach (Session::get('cart') as $indice => $amortizacion) { ?>
                    <tr>

                        <td scope="row" width='40%'><?php echo $amortizacion['No'] ?></td>
                        <td width='15%' class="texr-center"><?php echo $amortizacion['Intereses'] ?></td>
                        <td width='20%' class="texr-center"><?php echo $amortizacion['Capital'] ?></td>
                        <td width='20%' class="texr-center"><?php echo $amortizacion['Insoluto'] ?></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>

</body>

</html>