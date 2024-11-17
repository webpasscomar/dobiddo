<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Responsive con Tablas</title>
    <style>
        @media (min-width: 600px) {

            /*  .col-50 {
                width: 50%;
                display: table-cell;
                padding: 0 20px
            }

            .content {
                padding: 30px 0
            }
            */
            .text-welcome {
                vertical-align: top;
                text-align: justify;
                padding: 0 10px;
            }
        }
    </style>
</head>

<body style="background-color:#f8f9fa; font-family:Arial, sans-serif; margin:0; padding:0" bgcolor="#f8f9fa">
    <table class="container" cellpadding="0" cellspacing="0" border="0"
        style="background-color:#fff; box-shadow:0 0 10px rgba(0, 0, 0, 0.1); margin:auto; max-width:600px; padding:0px; width:100%"
        bgcolor="#ffffff" width="100%">
        <tr>
            <td>
                <table class="header" width="100%" cellpadding="0" cellspacing="0" border="0"
                style="padding:15px 10px; text-align:left; margin-bottom:10px;" align="left">
                    <tr>
                        <td>
                        <a href="%7B%7B%20route('home')%20%7D%7D" title="Home">
                        <img src="https://dobiddo.webpass.com.ar/img/logotipos/08%20Logo%20claim%20izquierdo%20rojo.png"
                        alt="Logo Dobiddo"
                        style="border:0; height:auto; line-height:100%; max-width:200px;    text-decoration:none"
                        height="auto">
                        </a>
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <table class="content" width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="text-align:left; margin-bottom:20px;">
                    <tr class="row" style="width:100%" width="100%">
                        <td style="display:block; width:100%; padding:0;" align="left" width="100%">
                            <img src="{{ asset('img/email/dobiddo-mod.png') }}" alt="Imagen Dobiddo"
                                style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                                height="auto">
                        </td>
                        <td style="display:block; text-align:justify; margin-top:35px;padding:0 10px;">
                            <p style="margin-top:0">
                                Hola <b> {{ Str::title($data['name']) }}!</b>, ¡Ya sos parte de la <em>comunidad dobiddo</em>!
                            </p>
                            <p>
                                Te damos la bienvenida y esperamos que <em>dobiddo</em> te resulte de mucha utilidad al
                                momento de buscar nuevas oportunidades y desafíos!
                            </p>
                            <p>
                                Diariamente actualizamos el listado de convocatorias que se publican de manera oficial y
                                podrás acceder en un solo clic a los enlaces de cada llamado para que puedas continuar
                                con el proceso de postulación según los requisitos y procedimientos de cada organismo
                                convocante.
                            </p>
                        </td>
                        <td style="display:block; width:100%; padding:0;" align="left" width="100%">
                            <img src="{{ asset('img/email/dobiddo-mod2.png') }}" alt="Dobiddo"
                                style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                                height="auto">
                        </td>
                    </tr>
                </table>
            </td>
            <td>
                <!-- footer -->
            </td>
            <table textalign="right" width="100%" margin="20" cellpadding="0" cellspacing="0"                style="background-color: #333333">
                <tr>
                    <div class="col-md-2">
                        <p class="h6 fw-bold text-white">Nuestras redes</p>
                        <ul class="list-group list-group-horizontal">
                           <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                            <a href="mailto:info@dobiddo.com" class="text-decoration-none link-light" title="Envianos un email"> <i
                            class="fa-solid fa-envelope fs-5"></i> </a>
                            </li>
                            <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                            <a href="https://www.instagram.com/thebiddoers/" target="_blank" class="text-decoration-none link-light"
                            title="Nuestro Instagram"> <i class="fa-brands fa-instagram fs-5"></i> </a>
                            </li>
                            <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                            <a href="https://www.linkedin.com/company/dobiddo" target="_blank" class="text-decoration-none link-light"
                            title="Nuestro LinkedIn"> <i class="fa-brands fa-linkedin fs-5"></i> </a>
                            </li>
                            </ul>
                        </div>
                </tr>
            </table>

            <td>
                <!-- condiciones -->
                <table width="100%" margin="0" cellpadding="0" cellspacing="10" role="presentation"
                border="0">
                    <tbody>
                         <tr>
                            <td>
                                <div
                                     style="padding:0 10px;color:#a5a5ac;direction:ltr;font-family:Arial, Helvetica, sans-serif;font-size:11px;font-weight:400;letter-spacing:0px;text-align:justify; margin-top:20px;">
                                    <p style="margin: 0; margin-bottom: 8px;">
                                    <em>
                                        Nuestro trabajo se limita a difundir convocatorias e información de interés
                                        para la comunidad de consultores.
                                    </em>
                                    </p>
                                    <p style="margin-bottom: 8px;">
                                     <em>
                                     dobiddo no participa en los procesos de postulación, siendo esta instancia de exclusiva responsabilidad del consultor y de los organismos según sus políticas de selección y contratación.
                                    </em>
                                    </p>
                                    <p style="margin-bottom: 8px;">
                                    <em>
                                    dobiddo se compromete al cumplimiento de su obligación de secreto con respecto a sus datos de carácter personal y a tratarlos con confidencialidad, así como a no cederlos a terceros sin su previo consentimiento. Podrá ejercer en cualquier momento sus derechos de acceso,rectificación y cancelación.
                                    </em>
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>

        </tr>
    </table>
</html>