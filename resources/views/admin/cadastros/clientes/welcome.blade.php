<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">

<head>
    <style>
        .divlogo p {
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
        }

        .divlogo h2 {
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 22px;
            font-weight: bold;
        }

        .divlogo {
            display: flex;
            background-color: #D74819;
            height: 100vh;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-bottom: 40px solid #03A696;
        }

        .header {
            padding: 10px 0px;
            flex-direction: column;
            justify-content: center;
            border-bottom: 3px solid #03A696;
            text-align: center;
            color: #707070;
            font-size: 12px;
        }

        .title {
            text-align: center;
            padding-top: 20px
        }



        .title h2 {
            color: #3D3E42;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 26px;
            font-weight: bold;
        }

        .title p {
            color: #707070;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 12px;
        }

        .form {
            display: 1;
            align-items: center;
            text-align: center;
            justify-items: center;
            justify-content: center;
            padding: 20px 50px;
        }

        .form input {
            border-radius: 0px;
            border-top: 0;
            border-right: 0;
            border-left: 0;
            border-bottom: 0 0 1 0 solid #707070;
            font-size: 12px;
            color: #707070;
            margin-top: 15px;
        }

        .form input:focus {
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 2px solid #D74819;
        }

        .form a {
            margin-top: 60px;
            width: 200px;
            background-color: #03A696;
            border: 0;
        }

        .form a:hover {
            width: 200px;
            background-color: #D74819;
            border: 0;
        }

        .row>* {
            padding-left: 0;
        }
    </style>
</head>

<body>
    <div id="loader"></div>
    <!-- Main content -->
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-6 divlogo">
            <div>
                <img src="{{ asset('assets/admin/img/logo.svg') }}" alt="">
                <br> <br> <br>
                <p>Faça seu cadastro e aproveite <br>
                    todas as vantagens</p>
                <h2>Corre lá</h2>
            </div>

        </div>
        <div class="col-6 login">
            <div class="header">
                <span>Quero me cadastrar</span>
            </div>
            <div class="title">
                <p>Etapa 1 de 2</p>
                <h2>Cadastro do Cliente</h2>
                <p>Os campos marcados com (*) são obrigatórios</p>
            </div>
            <div class="form">
                <form action="" method="post">
                    <div class="form">
                        <div class="form-group-lg">
                            <input type="text" name="name" class="form-control" placeholder="Nome (Documento)*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Sobrenome*">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"
                                placeholder="Qual seu apelido ou nome social?">
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control cpf" placeholder="CPF*">
                        </div>
                        <div class="form-group">
                            <input type="date" name="name" class="form-control" placeholder="Data de nascimento*">
                        </div>
                        <div class="form-group">
                            <a href="{{ route('register') }}" class="btn btn-primary">Continuar <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- /.content -->
    <!-- jQuery -->
    <script src="{{ asset('assets/admin/plugins/jquery/jQuery-2.1.4.min.js') }}"></script>
    <script>
        // Este evendo é acionado após o carregamento da página
    jQuery(window).load(function() {
        //Após a leitura da pagina o evento fadeOut do loader é acionado, esta com delay para ser perceptivo em ambiente fora do servidor.
        jQuery("#loader").fadeOut("slow");
    });
    </script>
    <script>
        $(function () {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });
  
      $('.filter-container').filterizr({gutterPixels: 3});
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
    </script>
    <script src="{{ asset('assets/admin/dist/js/jquery.mask.js')}}"></script>
    <script>
        $('.year').mask('0000');
     $('.date').mask('00/00/0000');
     $('.time').mask('00:00:00');
     $('.time2').mask('00:00');
     $('.date_time').mask('00/00/0000 00:00:00');
     $('.cep').mask('00000-000');
     $('.phone').mask('0000-0000');
     $('.phone_with_ddd').mask('(00)00000-0000'); //(99)99999-9999
     $('.phone_us').mask('(000) 0000-0000');
     $('.mixed').mask('AAA 000-S0S');
     $('.cpf').mask('000.000.000-00', {reverse: true});
     $('.rg').mask('99.999.999-9');    // Máscara para RG<br/>
     $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
     $('.money').mask('000.000.000.000.000,00', {reverse: true});
     $('.money2').mask("#.##0,00", {reverse: true});
     $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
     translation: {
     'Z': {
         pattern: /[0-9]/, optional: true
     }
     }
 });
     $('.ip_address').mask('099.099.099.099');
     $('.percent').mask('##0,00%', {reverse: true});
     $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
     $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
     $('.fallback').mask("00r00r0000", {
         translation: {
             'r': {
             pattern: /[\/]/,
             fallback: '/'
             },
             placeholder: "__/__/____"
         }
         });
     $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
 
    </script>
</body>

</html>