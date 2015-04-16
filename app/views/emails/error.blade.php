<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Consorcio del Conocimiento, A.C. | Correo</title>
    </head>

    <body>
        <div style="width:100%;" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center" valign="top" style="background-color:#020202;" bgcolor="#ff0066;">
                        <table width="600" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="20" align="left" valign="top" bgcolor="#000000" style="background-color:#FFFFFF;">&nbsp;</td>
                                <td align="center" valign="top" bgcolor="#000000" style="background-color:#FFFFFF; color:#7b7b7b; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
                                    <br/><br/>
                                    {{ HTML::image('images/consorcio.png', 'Logo', ['style'=>"height: 100px; display:block;"]) }}
                                    <br><br/><br/>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" valign="middle">
                                                <div style="background-color:#0F1837; height:5px; width:544px"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="65" align="center" valign="middle">
                                                <div style="color:#CE2A37; font-size:28px; font-family:Arial, Helvetica, sans-serif;">
                                                    Error del Consorcio del Conocimiento, A.C.
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="middle">
                                                <div style="background-color:#0F1837; height:5px; width:544px"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <br/><br/>
                                    <div style="color:#060606; font-family:Arial, Helvetica, sans-serif; font-size:16px;">
                                        <b>{{$descripcion}}
                                        @if($imagen<>null)
                                            </b><br/><br/><br/>
                                            {{ HTML::image('images/correo/'.$imagen,null,['style'=>"width:100%;"]) }}
                                        @endif
                                        <br/>
                                    </div>
                                    <br/><br/><br/><br/><br/>
                                    <div style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:14px;">
                                        © 2015 Consorcio del Conocimiento, A.C.
                                    </div>
                                    <br/><br/><br/>
                                </td>
                                <td width="20" align="left" valign="top" bgcolor="#000000" style="background-color:#FFFFFF;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </body>

</html>
