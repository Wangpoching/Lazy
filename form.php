<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>lazy-form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./normalize.css">
	<link rel="stylesheet" href="./form_modal.css">
	<script src="./index.js"></script>
</head>

<body>
	<div class="all__wrapper">
		<form class="form__wrapper" method="POST" action="./submit.php">

			<div class="top"></div>

			<div class="wrapper">
				<section class="form__info">
					<h1>新拖延運動報名表單</h1>
					<div>活動日期：2020/12/10 ~ 2020/12/11<div>
					<div>活動地點：台北市大安區新生南路二段1號<div>
					<div class="remider">*必填<div>
				</section>
			</div>

			<div class="wrapper">
				<section class="form__info nickname-block">
					<h2>暱稱</h2>
					<input class="input__text nickname-input" type="text" placeholder="您的回答" name="nickname">
				</section>
			</div>

			<div class="wrapper">
				<section class="form__info mail-block">
					<h2>電子郵件</h2>
					<input class="input__text mail-input" type="text" placeholder="您的電子郵件" name="email">
				</section>
			</div>

			<div class="wrapper">
				<section class="form__info phone-block">
					<h2>手機號碼</h2>
					<input class="input__text phone-input" type="tel" placeholder="您的手機號碼" name="phone">
				</section>
			</div>

			<div class="wrapper">
				<section class="form__info enrolltype-block" >
					<h2>報名類型</h2>
						<div>
							<input class="input__radio" type="radio" id="first" name="options" value="1"><label for="first">躺在床上用想像力實作</label>
						</div>
						<div>
							<input class="input__radio" type="radio" id="second" name="options" value="2"><label for="second">趴在地上滑手機找現成的</label>
						</div>
				</section>
			</div>

			<div class="wrapper">
				<section class="form__info how-block">
					<h2>你怎麼知道這個活動的</h2>
					<input class="input__text how-input" type="text" placeholder="您的回答" name="referrer">
				</section>
			</div>

			<div class="wrapper">
				<section class="form__otherinfo">
					<h2 class="other">其他</h2>
					<div>對活動的一些建議</div>
					<input class="input__text other-input" type="text" placeholder="您的回答" name="others">
				</section>
			</div>

			<div class="wrapper">
				<section class="form__info">
					<input class="input__submit" type="submit" value="提交">
				</section>
			</div>

			<div class="bottom__wrapper">
				<p>請勿透過表單送出您的密碼</p>
			</div>
		</form>
	</div>
	<footer>
		© 2020 © Copyright. All rights Reserved.
	</footer>
</body>
</html>

