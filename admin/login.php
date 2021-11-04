<!DOCTYPE html>
<head>
    <title>Đăng nhập admin</title>
    <?php
	include'./pages/linkHead.php'
?>
</head>
<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Sign In Now</h2>
            <form action="handleLogin.php" method="post">
                <input type="text" class="ggg" name="username" placeholder="USERNAME" required="">
                <input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
                <span><input type="checkbox" />Remember Me</span>
                <div class="clearfix"></div>
                <input type="submit" value="Sign In" name="login">
            </form>
        </div>
    </div>
    <!--Start Script-->
    <?php
	include'./pages/script.php'
?>
    <!--End Script -->
</body>

</html>