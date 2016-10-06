<div class="header-1 container-fluid">
    <div class="row ">
        
        <h1 class="logobox" >
            <img id="" src="../images/site_elements/logo.png" alt="比利时钻石"/>
        </h1>
        
        <div class="col-xs-5 col-sm-2 col-md-2 div-3 constantbuttons">
            <a href="/cn/contact.php">联系我们</a>
            
            
            <?php
						if(!isset($_SESSION['useraccount'])){
						?>
            <a href="/cn/login.php">用户登录</a>
            <?php
						}else{
							
							$sql_ordernum='SELECT COUNT(*) AS myordernum FROM viewing_record WHERE viewer = "'.$_SESSION['useraccount'].'"';
							foreach($conn->query($sql_ordernum) as $r_o_n){
								$myordernum=$r_o_n['myordernum'];
							}
							
						?>
            <a href="/cn/myaccount.php">我的钻戒(<?php echo $myordernum; ?>)</a>
            <?php
						}
						?>
            
            <script type="text/javascript">document.writeln("<a href=\"../en\" class=\"text-a-2\" style=\"font-family:Arial, Helvetica, sans-serif; font-weight:normal; font-size:14px;\"><img src=\"../images/site_elements/en-flag.png\" alt=\"安特卫普钻石\"/> English</a>");</script>
        </div>
       
        <div class="col-xs-2 col-sm-2 hidden-md hidden-lg navbar-inverse">
            <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target=".navbar-responsive-collapse" >
            菜单
            </button> -->
            <button type="button" class="navbar-toggle collapsed"
                data-toggle="collapse" data-target=".navbar-responsive-collapse"
                aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

    </div>
    <div class="row navbar-collapse navbar-responsive-collapse collapse header-nav-items">
        

        <div class="col-md-2 col-lg-2 div-2">
            <a class="text-a-2" href="/">首页</a>
        </div>
        <div class="col-md-2 col-lg-2 div-2">
            <a class="text-a-2" href="/cn/about.php">品牌文化</a>
        </div>
        <div class="col-md-2 col-lg-2 div-2">
            <a class="text-a-2" href="/cn/diamonds-rings.php">我的钻戒</a>
        </div>
        <div class="col-md-2 col-lg-2 div-2">
            <a class="text-a-2" href="/cn/jewelry.php">精品首饰</a>
        </div>
        <div class="col-md-2 col-lg-2 div-2">
            <a class="text-a-2" href="/cn/diamonds.php">精美裸钻</a>
        </div>
        
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 homepage-6" >
        </div>
    </div>
</div>
