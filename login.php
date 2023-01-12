<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>

</head>

<body>
        <!-- <nav class="navbar navbar-default">LOGIN</nav> -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="journalist_register.php" >メディア登録</a>
                <a class="navbar-brand" href="journalist_register.php" >記者登録</a></div>
            </div>
            </div>
        </nav>
</header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->

    <p>記者の追加・編集・削除を行うにはログインが必要です</p>
    <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>


</body>

</html>
