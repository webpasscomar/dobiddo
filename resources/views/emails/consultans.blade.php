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
              <a href="https://dobiddo.com" title="Home">
                <img src="https://dobiddo.com/img/logo-2.png" alt="Logo Dobiddo"
                  style="border:0; height:auto; line-height:100%; max-width:200px; text-decoration:none" height="auto">
              </a>
            </td>
          </tr>
        </table>

        <table class="content" width="100%" cellpadding="0" cellspacing="0" border="0"
          style="text-align:left; margin-bottom:20px;">
          <tr class="row" style="width:100%" width="100%">
            <td style="display:block; width:100%; padding:0;" align="left" width="100%">
              <img src="https://dobiddo.com/img/email/dobiddo-mod.png" alt="Imagen Dobiddo"
                style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none" height="auto">
            </td>
          </tr>
          <tr>
            <td style="display:block; text-align:justify; margin-top:35px;padding:0 30px;">
              <p style="margin-top:0">
              </p>
              <p>
                Hola <b>{{ Str::title($data['name']) }} !</b>, ¡Ya sos parte de la <em>comunidad dobiddo</em>!
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
          </tr>
          <tr>
            <td style="display:block; width:100%; padding:0; margin:0" width="100%">
              <img src="https://dobiddo.com/img/email/dobiddo-mod2.png" alt="Imagen Dobiddo"
                style="border:0; height:auto; line-height; max-width:100%; text-decoration:none" height="auto">
            </td>
          </tr>
        </table>

        <table textalign="center" width="100%" margin="0" cellpadding="0" cellspacing="0" role="presentation"
          border="0" style="background-color: #333333">
          <tbody>
            <tr>
              <td>
                <table textalign="center" margin="0,0,0,20" cellpadding="0" border="0" role="presentation"
                  style="margin:0 auto;">
                  <tbody>
                    <tr>
                      <td width="60%">
                      </td>
                      <td width="40%" style="color:white; font-weight: 500;">
                        <p>
                          Nuestras redes
                        </p>
                        <a href="mailto:info@dobiddo.com" target="_blank" style="text-decoration: none;">
                          <img src="https://dobiddo.com/img/social_media_iconos/mail.png" width="35" alt="Email"
                            style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                            height="auto">

                        </a>
                        <a href="https://www.instagram.com/thebiddoers/" style="text-decoration: none;" target="_blank">
                          <img src="https://dobiddo.com/img/social_media_iconos/instagram.png" width="35"
                            alt="Instagram"
                            style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                            height="auto">
                        </a>
                        <a href="https://www.linkedin.com/company/dobiddo" style="text-decoration: none;"
                          target="_blank">
                          <img src="https://dobiddo.com/img/social_media_iconos/linkedin.png" width="35"
                            alt="Linkedin" title="linkedin"
                            style="border:0; height:auto; line-height:100%; max-width:100%; text-decoration:none"
                            height="auto">
                        </a>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>

        <table width="100%" margin="0" cellpadding="0" cellspacing="0" role="presentation" border="0">
          <tbody>
            <tr>
              <td>
                <div
                  style="padding:0 10px;color:#a5a5ac;direction:ltr;font-family:Arial, Helvetica, sans-serif;font-size:11px;font-weight:400;letter-spacing:0px;line-height:120%;text-align:justify; margin-top:20px;">
                  <p style="margin: 0; margin-bottom: 5px;">
                    <em>
                      Nuestro trabajo se limita a difundir convocatorias e información de interés
                      para la comunidad de consultores.
                    </em>
                  </p>
                  <p style="margin-bottom: 5px;">
                    <em>
                      dobiddo no participa en los procesos de postulación, siendo esta instancia
                      de exclusiva responsabilidad del consultor y de los organismos según sus
                      políticas de selección y contratación.
                    </em>
                  </p>
                  <p style="margin-bottom: 5px;">
                    <em>
                      dobiddo se compromete al cumplimiento de su obligación de secreto con
                      respecto a sus datos de carácter personal y a tratarlos con
                      confidencialidad, así como a no cederlos a terceros sin su previo
                      consentimiento. Podrá ejercer en cualquier momento sus derechos de acceso,
                      rectificación y cancelación.
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
