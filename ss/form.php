<?
// passwords
include_once '../passwords.php';
include_once '../include/bodys.php';
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>支援物資情報</title>
	<link rel="stylesheet" href="/assets/bootstrap-3.3.6-dist/css/bootstrap-flatly.min.css?v=2016041801" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
	<?=$bodys[0]?>
		<div class="container">
			<div class="page-header" id="banner">
				<div class="jumbotron">
					<h1>支援物資状況の登録</h1>
					<p>このサイトは製作中です。</p>
					<p>掲載している情報はすべてダミーです</p>
				</div>
			</div>
			<!-- forms -->
			<div class="row">
				<div class="col-lg-12">
					<div class="well bs-component">
						<form class="form-horizontal">
							<fieldset>
								<legend>支援物資状況登録</legend>
								<p>支援物資で必要なものや不足しているものを登録できます。</p>
								<p>登録は一つづつ行ってください。</p>
								<div class="form-group">
									<label for="iem" class="col-lg-2 control-label">Email(公開)</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="iem" placeholder="Email" />
									</div>
								</div>
								<div class="form-group">
									<label for="ipn" class="col-lg-2 control-label">携帯電話番号(公開)</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="ipn" placeholder="携帯電話番号" />
									</div>
								</div>
								<div class="form-group">
									<label for="ispn" class="col-lg-2 control-label">避難所の郵便番号</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="ispn" placeholder="避難所の郵便番号" />
									</div>
								</div>
								<div class="form-group">
									<label for="isa" class="col-lg-2 control-label">避難所の住所</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="isa" placeholder="避難所の住所" />
									</div>
								</div>
								<div class="form-group">
									<label for="iaid" class="col-lg-2 control-label">物資名</label>
									<div class="col-lg-10">
										<input type="text" class="form-control" id="iaid" placeholder="レトルト食品, 飲料水, ティッシュ, 携帯トイレ, 紙おむつ等" />
									</div>
								</div>
								<div class="form-group">
									<label for="saidc" class="col-lg-2 control-label">物資のカテゴリ</label>
									<div class="col-lg-10">
										<select class="form-control" id="saidc">
											<?php
												$category = array(
													'食料・飲料等',
													'薬・ガーゼ等',
													'洗顔・衛生用品等',
													'子供用・介護用品等',
													'生理用品等',
													'防寒用品等',
													'乾電池・充電器等',
													'ライト・懐中電灯等',
													'食器・調理器具等',
													'紙皿・ラップ等',
													'移動補助・リアカー等',
													'その他'
												);
												for ($i=0; $i < count($category); $i++) {
													echo '<option>'.$category[$i].'</option>'."\n";
												}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="saidl" class="col-lg-2 control-label">物資の残り数</label>
									<div class="col-lg-10">
										<select class="form-control" id="saidl">
											<?php
												$remaining = array(
													'なし',
													'残りわずか(半日持たない)',
													'足りない(１日ほど)',
													'かなり少ない(2~3日分ほど)',
													'少ない3~5日分ほど',
													'すこし少ない(1週間分ほど)',
													'早めにほしい(1~2週間ほど)',
													'用意してほしい(まだ2週間以上はある)'
												);
												for ($i=0; $i < count($remaining); $i++) {
													echo '<option>'.$remaining[$i].'</option>'."\n";
												}
											?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="msg" class="col-lg-2 control-label">支援者へのメッセージ</label>
									<div class="col-lg-10">
										<textarea class="form-control" rows="3" id="msg" placeholder="支援者や配達者へ避難所の目印など伝えたいことや注意点があれば書いてください。"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-lg-10">
										<button type="submit" class="btn btn-primary">送信</button>
									</div>
								</div>
								<!-- fieldset end -->
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<?=$bodys[1]?>
		</div>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</html>
