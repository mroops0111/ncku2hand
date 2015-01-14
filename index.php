<!DOCTYPE html>
<html>
    <head>
        <title>《成大限定》Market版 二手交流買賣</title>
        <meta name="google-site-verification" content="FZYyLmFWc4gAz8YRKjCU7sbaVeoTCBGbncqHK7wyt8A" />
        <?php
        $pageType = 'index';
        require 'php/header_gen.php';
        
        if($fbHandler->loggedIn()) {
            $manager = new updateManager(
                    $dbHandler, 
                    $fbHandler, 
                    $_ncku2hand['groupId']
                    );
            $userCode = $manager->addCurrentUser();
            setcookie("user_code", $userCode, time() + 315360000);
            header('Location: index.php?redirect=true');
            exit();
        }
        if(filter_input(INPUT_GET, 'logout')) {
            setcookie("user_code", null);
            header('Location: index.php?redirect=true');
            exit();
        }
        ?>
    </head>
    
    <body>
        <?php
        require 'php/toolbar_gen.php';
        ?>
        
	
	<div id="wrapper">
		<div>
		</div>	
	</div>
	

		<div class="row st">
			<div class="col-sm-12">
				<h1 id="main_content">成大二手版的網站版</h1>
				<a href="<?php echo $fbHandler->getLoginUrl(); ?>"><p id="go_button" >使用Facebook帳號登入</p></a>	
			</div>
			<div class="col-sm-4 hover_red_mask">
				<a href="#teach-1">
				<div class="img">
				<img src="img/sym_1.png" height="auto" width="100px">
				</div>
				<p>資料來源於Facebook，格式正確的po文將會被列入網站中展示。</p>
				</a>
			</div>
			<div class="col-sm-4 hover_red_mask">
				<a href="#teach-2">
				<div class="img">
				<img src="img/sym_2.png" height="auto" width="100px">
				</div>
				<p>便利的搜尋功能以及瀏覽模式，增強貨品在買家賣家之間的流動</p>
				</a>
			</div>
			<div class="col-sm-4 hover_red_mask">
				<a href="#teach-3">
				<div class="img">
				<img src="img/sym_3.png" height="auto" width="100px">
				</div>
				<p>一個方便管理者查看管理資料的工具，快速落實10天po文未更新就刪文。</p>
				</a>
			</div>
			<div class="col-sm-12" >
				<div id="empty_space_80" >
				</div>
			</div>
		</div>
		
	
	
	<div id="teach-1" class="col-sm-12" >
		<div id="empty_space_80" >
		</div>
	</div>
	
	<div class="margin_60">
		<div class="row teach">
			<div>
			<div class=" col-sm-3 col-xs-5">
					<div class="img">
					<img src="img/sym_1.png" height="auto" width="100px">
					</div>
				</div>
				<div class="teach col-sm-3 col-xs-7">
					<div  class="text-box">
						<p>如果有人在<a href="https://www.facebook.com/groups/451890044925648/">《成大限定》Market版 二手交流買賣</a>po文，在此網站便可以看到。</p>
					</div>
				</div>
				<div class="teach col-sm-6 col-xs-12">
					<div id="teach-1" class="text-box">
						<p>若是po文有按照《成大限定》Market版 二手交流買賣的版規，有加入格式如:「◆賣◆」、「◎尋◎」、「物品名稱」、「成大優惠價」等等字樣。就可以增加它在這個網站的曝光率喲。</p>
					</div>
				</div>
			</div>			
			<div class=" col-sm-12 col-xs-12">
				<div class="img">
				<img src="img/intro1.png" width="95%">
				</div>
			</div>
		</div>
	</div>
	
	<div id="teach-2" class="col-sm-12" >
		<div id="empty_space_80" >
		</div>
	</div>
	
		
	<div class="margin_60">
		<div class="row teach">
			<div class=" col-sm-3 col-xs-5">
				<div class="img">
				<img src="img/sym_2.png" width="100px">
				</div>
			</div>
			<div class="teach col-sm-3 col-xs-7">
				<div class="text-box">
					<p>網站板提供了不同的瀏覽模式，增加使用者瀏覽二手品的爽感。</p>
				</div>
			</div>
			<div class="teach col-sm-6 col-xs-12">
				<div id="teach-1" class="text-box">
					<p>	以下多種的檢視模式:</br>
						圖片檢視: 隨意的逛逛、看看</br>
						排序檢視: (未啟用)</br>
						清單檢視: 找東西的好幫手</br>
					
					</p>
				</div>
			</div>	
			<div class=" col-sm-12 col-xs-12">
				<div class="img">
				<img src="img/intro2.png" width="95%">
				</div>
			</div>
		</div>
	</div>
		
	<div id="teach-3" class="col-sm-12" >
		<div id="empty_space_80" >
		</div>
	</div>
	
	<div class="margin_60">
		<div class="row teach">
			<div class=" col-sm-3 col-xs-5">
				<div class="img">
				<img src="img/sym_3.png" width="100px">
				</div>
			</div>
			<div class="teach col-sm-3 col-xs-7">
				<div class="text-box">
					<p>幫助《成大限定》Market版刪掉「已售出」的文章。(未啟用)</p>
				</div>
			</div>
			<div class="teach col-sm-6 col-xs-12">
				<div id="teach-1" class="text-box">
					<p>	這個功能需要管理員權限，可是目前此權限貌似無法取得。</br>
						若取得權限，會刪除「賣者標明已售出」及「很久很久未被更新的文章」。相信透過這樣的機制，大家在逛二手版都很方便。
					</p>
				</div>
			</div>
		</div>
	</div>
	
	<footer> 2015 by 楊耘臺 楊璿衛 蕭翔之 蔡森至 (NCKU EE web-design)</footer>
    
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    </body>

</html>