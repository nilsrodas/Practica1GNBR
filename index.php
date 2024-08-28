<!DOCTYPE html>
<html language= "es">
    <head>
        <title> GRAHAM NILS BUTTER RODAS</title>
        <meta name = "viewport" content="width=device-width. initial-scale=1"/>
        <meta charset= "UTF-8"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src= "js/jquery-3.7.1.min.js"></script>
        <script src= "js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="contenedor">
                <div class="row align-items-center h-100">
                    <div class="col"></div>
                    <div class="col">
                        <div class="align-items-center">
                            <p>Graham Nils Butter Rodas</p>
                            <form name="frm_login" id="frm_login"action="core/process.php">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="parrafo centrado">Inicio de Sesión</th>
                                        </tr>
                                        <tr>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="txt_usuario">USUARIO:</label>
                                                        <input type="text" class="form-control" name="txt_usuario" id="txt_usuario" maxlength="15" aria_describedby="txt_user_help" required />
                                                        <small id="txt_user_help" class="form-text text_muted">El usuario es obligatorio</small>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="txt_password">CONTRASEÑA:</label>
                                                        <input type="password" class="form-control" name="txt_password" id="txt_password" maxlength="15" aria_describedby="txt_password_help" required />
                                                        <small id="txt_password_help" class="form-text text_muted">La contraseña es obligatoria</small>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <button type="button" class="btn btn-primary" name="btn_entrar" id="btn_entrar"></button>
                                                <div class="mensaje"></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
