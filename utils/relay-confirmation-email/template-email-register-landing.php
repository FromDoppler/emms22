 <?php
 $html = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="x-apple-disable-message-reformatting">
  <meta content="telephone=no" name="format-detection">
  <title>EMMS by Doppler</title>
  <style>
    html,
    body {
      margin: 0 auto !important;
      padding: 0 !important;
    }

    * {
      -ms-text-size-adjust: 100%;
      -webkit-text-size-adjust: 100%;
    }

    div[style*="margin: 16px 0"] {
      margin: 0 !important;
    }

    table,
    td {
      mso-table-lspace: 0pt !important;
      mso-table-rspace: 0pt !important;
    }

    table table table {
      table-layout: auto;
    }

    img {
      -ms-interpolation-mode: bicubic;
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    /* Hover styles for buttons */
    .button--td:hover,
    .button--a:hover {
      background: #008046 !important;
    }

    .link-hover:hover {
      color: #008046 !important
    }

    /* ... */
    /*--- Preheader declaration in style block in addition to inline for Outlook */
    .preheader {
      display: none !important;
      visibility: hidden;
      opacity: 0;
      color: transparent;
      height: 0;
      width: 0;
    }

    *[x-apple-data-detectors],
    .x-gmail-data-detectors,
    .x-gmail-data-detectors *,
    .aBn {
      border-bottom: 0 !important;
      cursor: default !important;
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    th {
      font-weight: normal;
    }

    /* MEDIA QUERIES */
    @media all and (max-width:480px) {
      .wrapper {
        width: 320px !important;
        padding: 0 !important;
      }

      .container {
        width: 300px !important;
        padding: 0 !important;
      }

      .mobile {
        width: 300px !important;
        display: block !important;
        padding: 0 !important;
      }

      .img {
        width: 100% !important;
        height: auto !important;
      }

      .mobileOff {
        width: 0px !important;
        display: none !important;
      }

      .mobileOn {
        display: inline-block !important;
        max-height: none !important;
      }

      .no-background {
        background-image: none !important;
        background-color: #ffffff !important;
      }

      .mobile-pl,
      .mobile-pl-btn,
      u+.body .mobile-pl,
      u+.body .mobile-pl-btn {
        padding-left: 0 !important;
      }

      .mobile-pr,
      .mobile-pr-btn,
      u+.body .mobile-pr,
      u+.body .mobile-pr-btn {
        padding-right: 0 !important;
      }

      .mobile-pt,
      u+.body .mobile-pt {
        padding-top: 20px !important;
      }

      .mobilePadding {
        padding-left: 3% !important;
        padding-right: 3% !important;
      }

      u~div .wrapper {
        width: 100vw !important;
      }
    }
  </style>
  <!--[if gte mso 9]>
            <xml>
                <o:OfficeDocumentSettings>
                <o:AllowPNG/>
                <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->
</head>
<body style="margin:0; padding:0;"><span class="preheader"
    style="display: none !important; visibility: hidden; opacity: 0; color: transparent; height: 0; width: 0;">¡Ya estás
    registrado al evento más esperado!
    &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
  </span>
  <center>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color: #FFFFFF;">
      <tr>
        <td align="center" valign="top">
          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper">
            <tr>
              <td align="center" valign="top" class="container">
                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top">
                      <table cellpadding="0" cellspacing="0" border="0" class="container">
                        <tr>
                          <td height="60" style="font-size:60px; line-height:60px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle">
                            <a href="#" style="cursor: default;">
                              <img src="https://goemms.com/utils/relay-confirmation-email/logo-emms.png?version=2"
                                style="width: 100%; max-width: 103px !important;" width="103" class="img"
                                alt="Logo de EMMS by Doppler" />
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td height="40" style="font-size:40px; line-height:40px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle">
                            <a href="#" style="cursor: default;">
                              <img src="https://goemms.com/utils/relay-confirmation-email/asset-confirmation.png"
                                style="width: 100%; max-width: 123px !important;" width="123" class="img"
                                alt="Asset de auriculares" />
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td height="20" style="font-size:20px; line-height:20px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="middle" class="container"
                            style=" font-family: Helvetica, Arial, sans-serif;font-size: 15px;line-height: 21px;font-weight: 400;">
                            <span style="color:#333333;">EMMS - DEL 8 AL 10 DE NOVIEMBRE</span>
                          </td>
                        </tr>
                        <tr>
                          <td height="10" style="font-size:10px; line-height:10px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="top" style="font-family: Helvetica, Arial, sans-serif;">
                            <p style=" font-size: 31px;line-height: 31px;font-weight: 700;color:#333333;margin: 0;">
                              ¡Gracias por registrarte!
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td height="20" style="font-size:20px; line-height:20px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="top" style="font-family: Helvetica, Arial, sans-serif;">
                            <p
                              style=" font-size: 15px;line-height: 21px;font-weight: 700;color:#333333;margin: 0; max-width: 363px;">
                              Llega una nueva edición del evento más esperado por la comunidad del Marketing
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td height="40" style="font-size:40px; line-height:40px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="top" style="font-family: Helvetica, Arial, sans-serif;">
                            <p
                              style=" font-size: 14px;line-height: 19px;font-weight: 400;color:#333333;margin: 0; max-width: 552px;">
                              Te mantendremos informado de las últimas novedades a través de tu Email. Además, por ser
                              parte del EMMS, recibirás
                              contenido exclusivo, invitaciones a capacitaciones y certificaciones gratuitas.
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td height="40" style="font-size:40px; line-height:40px;">&nbsp;</td>
                        </tr>
                        <tr>
                          <td align="center" valign="top" style="font-family: Helvetica, Arial, sans-serif;">
                            <p
                              style=" font-size: 14px;line-height: 19px;font-weight: 400;color:#333333;margin: 0; max-width: 552px;">
                              ¡Agrega el evento a tu calendario para no perderlo de vista!
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td height="50" style="font-size:50px; line-height:50px;" class="mobile">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="center" valign="top">
                      <table cellpadding="0" cellspacing="0" border="0" class="container">
                        <tr>
                          <th width="170" align="center" valign="top" class="mobile">
                            <table cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="center" width="152" height="51" bgcolor="#33AD73"
                                    style="-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; color: #FFFFFF; display: block;"
                                    class="button--td cta--width">
                                    <a href="https://www.addevent.com/event/iI14884549"
                                      style="font-size: 14px; font-weight: bold; font-family: sans-serif; text-decoration: none; line-height: 50px; width: 100%; display: inline-block;"
                                      target="_blank">
                                      <span style="color: #FFFFFF;"> EMMS DÍA 1 </span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                          <th width="170" align="center" valign="top" class="mobile mobile-pt">
                            <table cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="center" width="152" height="51" bgcolor="#33AD73"
                                    style="-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; color: #FFFFFF; display: block;"
                                    class="button--td cta--width">
                                    <a href="https://www.addevent.com/event/iS14401775"
                                      style="font-size: 14px; font-weight: bold; font-family: sans-serif; text-decoration: none; line-height: 50px; width: 100%; display: inline-block;"
                                      target="_blank">
                                      <span style="color: #FFFFFF;"> EMMS DÍA 2 </span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                          <th width="170" align="center" valign="top" class="mobile mobile-pt">
                            <table cellspacing="0" cellpadding="0">
                              <tbody>
                                <tr>
                                  <td align="center" width="152" height="51" bgcolor="#33AD73"
                                    style="-webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; color: #FFFFFF; display: block;"
                                    class="button--td cta--width">
                                    <a href="https://www.addevent.com/event/pl14402520"
                                      style="font-size: 14px; font-weight: bold; font-family: sans-serif; text-decoration: none; line-height: 50px; width: 100%; display: inline-block;"
                                      target="_blank">
                                      <span style="color: #FFFFFF;"> EMMS DÍA 3 </span>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </th>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td height="80" style="font-size:80px; line-height:80px;" class="mobile">&nbsp;</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <!--footer begin-->
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top" style="background-color: #ffffff;">
          <table width="640" cellpadding="0" cellspacing="0" border="0" class="wrapper">
            <tr>
              <td align="center" valign="top">
                <table width="600" cellpadding="0" cellspacing="0" border="0" class="container">
                  <tr>
                    <td align="left" valign="top" style="font-size: 14px; padding: 16px 0px;">
                      <table width="185" border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="37" align="left">
                              <a href="https://twitter.com/fromDoppler" target="_blank">
                                <img src="https://goemms.com/utils/relay-confirmation-email/twitter-icon.png"
                                  style="width: 100%; max-width: 32px !important;" width="32" class="img"
                                  alt="Twitter" />
                              </a>
                            </td>
                            <td width="37" align="left">
                              <a href="https://www.facebook.com/DopplerEmailMarketing" target="_blank">
                                <img src="https://goemms.com/utils/relay-confirmation-email/facebook-icon.png"
                                  style="width: 100%; max-width: 32px !important;" width="32" class="img"
                                  alt="Facebook" />
                              </a>
                            </td>
                            <td width="37" align="left">
                              <a href="https://www.linkedin.com/company/228261" target="_blank">
                                <img src="https://goemms.com/utils/relay-confirmation-email/linkedin-icon.png"
                                  style="width: 100%; max-width: 32px !important;" width="32" class="img"
                                  alt="Linkedin" />
                              </a>
                            </td>
                            <td width="37" align="left">
                              <a href="https://www.youtube.com/user/FromDoppler" target="_blank">
                                <img src="https://goemms.com/utils/relay-confirmation-email/youtube-icon.png"
                                  style="width: 100%; max-width: 32px !important;" width="32" class="img"
                                  alt="Youtube" />
                              </a>
                            </td>
                            <td width="37" align="left">
                              <a href="https://www.instagram.com/fromdoppler" target="_blank">
                                <img src="https://goemms.com/utils/relay-confirmation-email/instagram-icon.png"
                                  style="width: 100%; max-width: 32px !important;" width="32" class="img"
                                  alt="Instagram" />
                              </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="15" style="font-size: 15px; line-height: 15px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" style="padding: 25px 0 0;">
                      <p
                        style="padding: 0; margin: 0; font-family: Helvetica, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 16px; color: #999999;">
                        &copy; 2022 <a href="https://www.fromdoppler.com" target="_blank"
                          style="text-decoration: none; color: #33AD73;" class="link-hover">Doppler LLC</a>. Todos los
                        derechos reservados.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top">
                      <p
                        style="padding: 0; margin: 0; font-family: Helvetica, Arial, Helvetica, sans-serif; font-size: 11px; line-height: 14px; color: #999999;">
                        Te informamos que los datos personales contenidos en esta comunicaci&oacute;n fueron recogidos
                        en
                        nuestro Formulario de registro, cuyo responsable es Doppler LLC, dado que prestaste tu
                        consentimiento para recibir nuestras comunicaciones. Al registrarte como usuario, acept&aacute;s
                        y
                        consent&iacute;s que tus datos sean almacenados por nuestra plataforma, cuyos servidores
                        est&aacute;n en Estados Unidos, para gestionar el env&iacute;o de las comunicaciones
                        correspondientes. Podr&aacute;s ejercer tus derechos de acceso, rectificaci&oacute;n,
                        limitaci&oacute;n
                        y eliminaci&oacute;n de los datos escribiendo a
                        <a href="mailto:legal@fromdoppler.com" target="_blank"
                          style="text-decoration: none; color: #33AD73;" class="link-hover">legal@fromdoppler.com</a>,
                        as&iacute; como presentar una
                        reclamaci&oacute;n ante una autoridad de control. Si no dese&aacute;s seguir recibiendo nuestras
                        Campa&ntilde;as, pod&eacute;s darte de baja autom&aacute;ticamente haciendo clic en el
                        enlace que se encuentra debajo. Pod&eacute;s consultar informaci&oacute;n adicional y detallada
                        sobre la protecci&oacute;n de tus datos personales en nuestra
                        <a href="https://www.fromdoppler.com/legal/privacidad" target="_blank"
                          style="text-decoration: none; color: #33AD73;" class="link-hover">Pol&iacute;tica de
                          Privacidad</a>.
                      </p>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>';
