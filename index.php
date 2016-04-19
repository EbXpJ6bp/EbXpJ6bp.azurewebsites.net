<?php
	// passwords
	include_once './passwords.php';
	include_once './include/bodys.php';
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>支援物資情報</title>
	<link rel="stylesheet" href="/assets/bootstrap-3.3.6-dist/css/bootstrap-flatly.min.css?v=2016041801" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
<?=$bodys[0]?>
	<div class="container">
		<div class="page-header" id="banner">
			<div class="jumbotron">
				<div class="header-logo"></div>
				<p>このサイトは製作中です。</p>
				<p>掲載している情報はすべてダミーです</p>
			</div>
		</div>
		<div class="container">
			<h2>このサイトは何ですか？</h2>
			<p>震災で被災されている方々の支援物資を分配するときに役に立てるように製作しているサイトです。</p>
			<p>必要な物や不足している生活用品などを登録して確認できます。</p>
			<p class="text-danger">※安否確認についてはGoogle等のサイトをご利用ください。</p>
		</div>
		<div class="jumbotron">
			<h2><a href="#" class="btn btn-info btn-lg">OO県 OO町 OO避難所</a></h2>
			<p>住所: aaaaaa <a class="btn btn-success" href="#">Googleマップで開く</a></p>
			<div class="container">
				<h3><i class="material-icons">done</i> = 配達済み</h3>
				<h3><i class="material-icons">clear</i> = 配達されていません</h3>
				<h3><i class="material-icons">directions_car</i> = 現在配達中</h3>
				<span class="label label-danger">赤 = 至急</span>
				<span class="label label-warning">オレンジ = 早めに</span>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>状態</th>
						<th>物資名</th>
						<th>カテゴリ</th>
						<th>残り</th>
						<th>希望数</th>
						<th>到着予定</th>
					</tr>
				</thead>
				<tbody>
					<tr class="danger">
						<td><i class="material-icons">clear</i></td>
						<td>子供用紙おむつ</td>
						<td>おむつ</td>
						<td>1箱</td>
						<td>20人分</td>
						<td>未定</td>
					</tr>
					<tr class="warning">
						<td><i class="material-icons">clear</i></td>
						<td>飲料水</td>
						<td>水</td>
						<td>5箱</td>
						<td>15箱</td>
						<td>未定</td>
					</tr>
					<tr class="danger">
						<td><i class="material-icons">directions_car</i></td>
						<td>携帯用ガスコンロ</td>
						<td>調理器具</td>
						<td>なし</td>
						<td>4台</td>
						<td>今晩</td>
					</tr>
					<tr>
						<td><i class="material-icons">done</i></td>
						<td>タオル</td>
						<td>衣類</td>
						<td>なし</td>
						<td>50枚</td>
						<td>済み</td>
					</tr>
					<tr>
						<td><i class="material-icons">done</i></td>
						<td>レトルト食品</td>
						<td>食品</td>
						<td>少し</td>
						<td>150人分</td>
						<td>済み</td>
					</tr>
				</tbody>
			</table>
		</div>
		<?=$bodys[1]?>
	</div>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
