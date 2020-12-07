<?php include("header.php")?>
<link rel="stylesheet" type="text/css" href="css/pages.css">
<?php include("nav.php") ?>
<?php include("banner.php") ?>
<!-- main -->
<main>
	<section class="container contact">
		<ul class="d-flex justify-content-start align-items-center Breadcrumb">
			<li><a href=".">首頁</a></li>
			<li>聯絡我們</li>
		</ul>
		<div class="title">
			<h1>聯絡我們</h1>
		</div>
		<div><p>感謝您的提問，收到訊息後，本公司將於三天內回覆訊息，謝謝!</p></div>
		<div class="row mx-auto">
			<div class="col-xl-7 col-lg-7 col-md-5">
				<div class="title">
					<h3>聯絡表單</h3>
				</div>
				<dl class="forms-group">
					<dd class="d-xl-flex justify-content-start align-items-center">
						<label class="col-xl-2">您的姓名<sup>*</sup></label>
						<input type="text" id="name" name="name">
					</dd>
					<dd class="d-xl-flex justify-content-start align-items-center">
						<label class="col-xl-2">聯絡電話<sup>*</sup></label>
						<input type="text" name="phone">
					</dd>
					<dd class="d-xl-flex justify-content-start align-items-center">
						<label class="col-xl-2">回電時間<sup>*</sup></label>
						<input type="text" name="phone">
					</dd>
					<dd class="d-xl-flex justify-content-start align-items-center">
						<label class="col-xl-2">電子信箱<sup>*</sup></label>
						<input type="text" name="email">
					</dd>
					<dd class="d-xl-flex justify-content-start align-items-center">
						<label class="col-xl-2">聯絡地址</label>
						<div class="col px-0 d-lg-flex justify-content-lg-start align-items-center">
							<div class="col mb-lg-0 mb-2 px-0 d-flex justify-content-start align-items-center">
								<input value="" id="pay_zip" type="text" name="pay_zip" class="col-3 mr-2 zipcode pay_zip" placeholder="郵遞區號">
								<select id="pay_city" name="pay_city" class="col mr-2"><option value="">選擇縣市</option><option value="臺北市" data-index="0">臺北市</option><option value="基隆市" data-index="1">基隆市</option><option value="新北市" data-index="2">新北市</option><option value="宜蘭縣" data-index="3">宜蘭縣</option><option value="桃園市" data-index="4">桃園市</option><option value="新竹市" data-index="5">新竹市</option><option value="新竹縣" data-index="6">新竹縣</option><option value="苗栗縣" data-index="7">苗栗縣</option><option value="臺中市" data-index="8">臺中市</option><option value="彰化縣" data-index="9">彰化縣</option><option value="南投縣" data-index="10">南投縣</option><option value="嘉義市" data-index="11">嘉義市</option><option value="嘉義縣" data-index="12">嘉義縣</option><option value="雲林縣" data-index="13">雲林縣</option><option value="臺南市" data-index="14">臺南市</option><option value="高雄市" data-index="15">高雄市</option><option value="澎湖縣" data-index="16">澎湖縣</option><option value="金門縣" data-index="17">金門縣</option><option value="屏東縣" data-index="18">屏東縣</option><option value="臺東縣" data-index="19">臺東縣</option><option value="花蓮縣" data-index="20">花蓮縣</option><option value="連江縣" data-index="21">連江縣</option></select>
								<select id="pay_county" name="pay_county" class="col mr-lg-2"><option value="" selected="">---</option></select>
							</div>
							<div class="col-lg-7 px-0">
								<input id="pay_addr" value="" name="pay_addr" type="text" title="聯絡地址" size="32" placeholder="請輸入地址">
							</div>
						</div>
					</dd>
					<dd class="d-xl-flex justify-content-start align-items-start">
						<label class="col-xl-2">內　　容<sup>*</sup></label>
						<textarea name="message"></textarea>
					</dd>
					<dd class="d-xl-flex justify-content-start align-items-center">
						<label class="col-xl-2">驗證碼<sup>*</sup></label>
						<input id="xcode" type="text" name="captcha_word">
						<img src="imgcode/securimage_show.png">
					</dd>
					<dd>
						<button type="reset">清除重填</button>
						<button type="submit">確認送出</button>
					</dd>
				</dl>
			</div>
			<div class="col-xl-5 col-lg-5 col-md-7">
				<div class="title">
					<h3>聯絡資訊</h3>
				</div>
				<dl class="info">
					<dd class="d-flex justify-content-start align-items-satr">
						<span><i class="fas fa-phone"></i>電話：</span>02-12345678
					</dd>
					<dd class="d-flex justify-content-start align-items-start">
						<span><i class="fas fa-envelope"></i>Email：</span><a href="mailto:findinterior@gmail.com">findinterior@gmail.com</a>
					</dd>
					<dd class="d-flex justify-content-start align-items-center">
						<span><i class="fas fa-map-marker-alt"></i>地址：</span>110 台北市信義區基隆路一段 155 號 8 樓
					</dd>
				</dl>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.0091282465064!2d121.54398011500616!3d25.03376428397249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd250edcf89%3A0x304c1b74cce8ab5!2zMTA25Y-w5YyX5biC5aSn5a6J5Y2A5aSn5a6J6Lev5LiA5q61MjQ56Jmf!5e0!3m2!1szh-TW!2stw!4v1555986120162!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include("footer.php")?>
</body>
</html>