<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>

    <body>
        <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center" valign="top" bgcolor="#f1f69d" style="height:106px; background-color:#222222; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:13px; color:#000000; padding:10px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                        <tr>
                            <td align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#525252;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="center" valign="top" bgcolor="#f1f69d" style="background-color:#EAEAEA; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:13px; color:#000000; padding:50px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
                        <tr>
                            <td align="left" valign="top" style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:25px; color: black;">
                                <div style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:35px; color: black;">
                                    Contacto desde el Sitio Web {{ HTML::image('images/consorcio.png','',['width'=>"213", 'align'=>"right", 'style'=>"margin-left:10px;"]) }}
                                </div>
                                <div style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; color:#696969;">
                                    <strong style="color: rgb(42, 42, 42);">Asunto: </strong> {{$asunto}}
                                </div>
                                <div style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; color:#696969;">
                                    <br/><br/><strong style="color: rgb(42, 42, 42);">{{$nombre}}</strong> @if($empresa<>'') de la empresa <strong style="color: rgb(42, 42, 42);">{{$empresa}}</strong> @endif escribe,
                                </div>

                                <div style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:20px; color:#696969;">
                                    {{$mensaje}}
                                </div>
                                <br/><br/><br/><br/>
                                <div style="font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:18px; color:#696969;">
                                    <strong style="color: rgb(42, 42, 42);">Correo de contacto:</strong> {{$correo}}
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td align="left" valign="top" bgcolor="#478730" style="background-color:#222222; height:106px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="15">
                        <tr>
                            <td align="left" valign="top" style="color:#ffffff; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size:13px;"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>

</html>
