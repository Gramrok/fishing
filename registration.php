<?require 'head.php';?>
<body>
   <div class="main-block">
      <div class="container paper">
         <?require 'header.php';?>
         <div id="main">
            <div id="catalog">
               <h2><a class="post_ttl" title="РЕГИСТРАЦИЯ">РЕГИСТРАЦИЯ</a></h2>
               <div id="form_reg">
                  <form method="post" action="register.php">
                   <p align="center">Логин (не менее 6 символов)</p>
                   <input type="text" name="login" minlength="6" placeholder="Логин (не менее 6 символов)" required>
                   <p align="center">Пароль (не менее 8 символов)</p>
                   <input type="password" name="password" minlength="8" placeholder="Пароль (не менее 8 символов)" required>
                  <br>
                  <br>
                  <p align="center"><input style="height: 50px; width: 250px; font-size: 22px; cursor:pointer;" type="submit" value="Зарегистрироваться"></p>
                  <?php
						if (isset($_SESSION['login'])) {
							echo '<script>location.href="index.php"</script>';
						}
						else {
							if(!empty($_SESSION['login_already_exist'])){
								if ($_SESSION['login_already_exist']==true)
								{
									echo '<p align="center">Этот логин занят. Пожалуйста, введите другой логин.</p>';
									$_SESSION['login_already_exist']=false;
								}
							}
						}
						?>
               </div>
            </div>
         </div>
         <div class="clear-both"></div>
      </div>
   </div>
   <?require 'footer.php';?>
</body>
</html>
