<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Responsive con Tablas</title>
    <style>
        @media (min-width: 768px) {
            .col-50 {
                width: 50%;
                display: table-cell;
                padding: 0 20px
            }

            .content {
                padding: 30px 0
            }

            .text-welcome {
                vertical-align: top;
                text-align: justify
            }
        }
    </style>
</head>

<body style="background-color:#f8f9fa; font-family:Arial, sans-serif; margin:0; padding:0" bgcolor="#f8f9fa">
    <table class="container" cellpadding="0" cellspacing="0" border="0"
        style="background-color:#fff; box-shadow:0 0 10px rgba(0, 0, 0, 0.1); margin:auto; max-width:768px; padding:10px; width:100%"
        bgcolor="#ffffff" width="100%">
        <tr>
            <td>
                <table class="header" width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="margin-bottom:50px; padding:10px 0; text-align:center" align="center">
                    <tr>
                        <td>
                            <a href="%7B%7B%20route('home')%20%7D%7D" title="Home">
                                <img src="https://dobiddo.webpass.com.ar/img/logotipos/08%20Logo%20claim%20izquierdo%20rojo.png"
                                    alt="Logo Dobiddo"
                                    style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                                    height="auto">
                            </a>
                        </td>
                    </tr>
                </table>
                <table class="content" width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="padding:20px 5px; text-align:left" align="left">
                    <tr class="row" style="width:100%" width="100%">
                        <td class="col col-50" style="display:block; text-align:center; width:100%" align="center"
                            width="100%">
                            <img src="https://dobiddo.webpass.com.ar/img/email/dobiddo.jpg" alt="Imagen Dobiddo"
                                style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                                height="auto">
                        </td>
                        <td class="col col-50 text-welcome"
                            style="display:block; text-align:justify; width:100%; margin-top:35px; vertical-align:top"
                            align="justify" width="100%" valign="top">
                            <p class="text-welcome-first-paragraph" style="margin-top:0">
                                Hola {{ Str::title($data['name']) }}!, ¡Ya sos parte de la <em>comunidad dobiddo</em>!
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
                            <p>
                                Si necesitas que te ayudemos a formular alguna propuesta no dudes en contactarte
                                enviando tu consulta a consultas a <a href="mailto:info@dobiddo.com"
                                    style="text-decoration: underline; color: #7747FF;">
                                    info@dobiddo.com
                                </a>
                            </p>
                        </td>
                    </tr>
                </table>
                <table textalign="center" width="100%" margin="0" cellpadding="0" cellspacing="0"
                    role="presentation" border="0" style="background-color: #e66741">
                    <tbody>
                        <tr>
                            <td>
                                <table textalign="center" margin="0" cellpadding="0" cellspacing="20" border="0"
                                    role="presentation" style="margin:0 auto;">
                                    <tbody>
                                        <tr>
                                            <td width="50%" style="letter-spacing: 10px; text-align:left;">
                                                <a href="https://www.linkedin.com/" target="_blank"
                                                    style="text-decoration: none;">
                                                    <img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/linkedin@2x.png"
                                                        width="32" alt="Linkedin" title="linkedin"
                                                        style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                                                        height="auto">
                                                </a>
                                                <a href="https://www.instagram.com/" style="text-decoration: none;"
                                                    target="_blank">
                                                    <img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/circle-dark-gray/instagram@2x.png"
                                                        width="32" alt="Instagram" title="instagram"
                                                        style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                                                        height="auto">
                                                </a>
                                            </td>
                                            <td width="50%">
                                                <div
                                                    style="color:#f3e6e6;direction:ltr;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:400;line-height:120%;">
                                                    <p style="margin-bottom: 16px;">
                                                        <a href="https://dobiddo.webpass.com.ar/calls"
                                                            style="text-decoration: underline; color: #f3e6e6;">
                                                            ¡Empezá ahora!
                                                        </a>
                                                    </p>
                                                    <p style="margin-bottom: 16px;">
                                                        <strong>
                                                            Equipo dobiddo
                                                        </strong>
                                                    </p>
                                                    <p>
                                                        dobiddo.com
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table margin="0" cellpadding="0" cellspacing="0" role="presentation" border="0"
                    style="background-color: #383535; padding:20px;">
                    <tbody>
                        <tr>
                            <td style="font-weight: 400;">
                                <div
                                    style="color:#e1e6eb;direction:ltr;font-family:Arial, Helvetica, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:left;">
                                    <p style="margin: 0;">
                                        Si necesitas que te ayudemos a formular alguna propuesta no dudes en contactarte
                                        enviando tu consulta a consultas a
                                        <a href="mailto:info@dobiddo.com" target="_blank"
                                            style="text-decoration: underline; color: #e66741;" rel="noopener">
                                            info@dobiddo.com
                                        </a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table width="100%" margin="0" cellpadding="0" cellspacing="0" role="presentation"
                    border="0">
                    <tbody>
                        <tr>
                            <td>
                                <div
                                    style="color:#a5a5ac;direction:ltr;font-family:Arial, Helvetica, sans-serif;font-size:11px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:justify; margin-top:40px;">
                                    <p style="margin: 0; margin-bottom: 16px;">
                                        <em>
                                            Nuestro trabajo se limita a difundir convocatorias e información de interés
                                            para la comunidad de consultores.
                                        </em>
                                    </p>
                                    <p style="margin-bottom: 16px;">
                                        <em>
                                            dobiddo no participa en los procesos de postulación, siendo esta instancia
                                            de exclusiva responsabilidad del consultor y de los organismos según sus
                                            políticas de selección y contratación.
                                        </em>
                                    </p>
                                    <p style="margin-bottom: 16px;">
                                        <em>
                                            dobiddo se compromete al cumplimiento de su obligación de secreto con
                                            respecto a sus datos de carácter personal y a tratarlos con
                                            confidencialidad, así como a no cederlos a terceros sin su previo
                                            consentimiento. Podrá ejercer en cualquier momento sus derechos de acceso,
                                            rectificación y cancelación.
                                        </em>
                                    </p>
                                    <p>
                                        <em>
                                            Si no desea seguir recibiendo información haga clic aquí
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
</body>

</html>
