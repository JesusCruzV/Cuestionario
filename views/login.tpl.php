<div class="alert-success">
    <div class="table-responsive">
        <center><h1><?=$titulo ?></h1></center>
        <center><p><?=$contenido ?></p></center>

        <center>
            <form action="" method="post" id="oneform">
                <table>

                    <tr><td><i class="glyphicon glyphicon-user">Define tu usuario</i></td><td><input type="text" name="user"></td></tr>
                    <tr><td><i class="glyphicon glyphicon-lock">Define tu Password</i></td><td><input type="password" name="pass"></td></tr>
                    <tr><td colspan="2"><input type="submit" class="btn-block btn-primary" value="Entrar"/> </td></tr>
                </table>
            </form>
        </center>
    </div>

</div>

<div id="validate">          </div>


<script type="text/javascript">
    $(function (e) {
        $('#oneform').submit(function (e) {
            e.preventDefault()
            $('#validate').load('../valida.php?' + $('#oneform').serialize())
        })
    })
</script>