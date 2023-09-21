<?php include 'header.php' ?>
<body class="w3-khaki">
    <div class="bg-img">
        <div class="content">
            <header class="w3-text-red">LOGIN</header>
            <!-- Cek pesan notifikasi -->
            <form action="action/cek_login.php" method="post">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="username" placeholder="Username" size="9" maxlength="9" />
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" class="pass-key" placeholder="Password" size="12" maxlength="12" />
                    <span class="show">SHOW</span>
                </div>
                <div class="pass">
                    <label>
                        <input type="checkbox" checked="checked" name="ingat"> Ingat Saya
                    </label>
                </div>
                <div class="field">
                    <input type="submit" value="MASUK" />
                </div>
            </form>
        </div>
    </div>
<?php include 'footer.php' ?>