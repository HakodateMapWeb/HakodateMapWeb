<html>
<head>

<title>Index Page</title>
	<div class="title" id="ti"><p><b>ABOUT</b></p></div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://code.jquery.com/ui/jquery-ui-git.js"></script>
<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
<script type="text/javascript"><!--
$(window).load(function() {
    $("body").removeClass("preload");
});
// --></script>
</head>
<body class="preload">
	
	<div style="width:100%; margin:auto; padding:auto; ">
		<div id="heading2"><p>このサイトについて</p></div>
		<div style="margin: 20px; text-align: justify;/* font-size:16px; text-shadow:0 0 1px rgba(150,150,150,.2);*/">
			<p>はこだてMap+（プラス）は、函館市公式観光情報サイト「はこぶら」の、函館市のおすすめ観光スポットを巡ることが出来る「まちあるきマップ」の支援Webアプリケーションです。
			このアプリケーションで気になる場所を探して街へ出かけてみましょう。</p>
			<br>
			<p>本アプリに掲載されている情報は、下記のWebサイトよりご提供いただいたものです。</p>
			<p>【協力サイト】</p>
			<ul>
				<li>函館市公式観光情報サイト「はこぶら」： <a href="http://www.hakobura.jp/" target="_blank">http://www.hakobura.jp/</a></li>
				<li>函館まちあるきマップ： <a href="http://hakodate-machiaruki.com/" target="_blank">http://hakodate-machiaruki.com/</a></li>
				<li>はこだてフィルムコミッション： <a href="http://www.hakodate-fc.com/" target="_blank">http://www.hakodate-fc.com/</a></li>
				<li>函館近代化遺産ポータルサイト： <a href="http://hnct-pbl.jimdo.com/" target="_blank">http://hnct-pbl.jimdo.com/</a></li>
			</ul>
			<br>
			<p style="margin-left: 1em; text-indent: -1em; text-align: center;">※本アプリはLOD（リンクト・オープン・データ）を活用して作成されております。コンテンツの拡充にご協力いただける方は、下記ページよりご連絡ください。</p>
			
			<div class="emphasize">
				<h2>「公立はこだて未来大学　高度ICT演習　観光系プロジェクト Facebookページ」</h2>
				<p><a href="https://www.facebook.com/FUNTourismProject" target="_blank">https://www.facebook.com/FUNTourismProject</a></p>
			</div>
	</div>
	
	</div>
	<br>
	<div style="width:100%; margin:0 0 30px 0;">
		<div id="heading2"><p>使い方</p></div>
		<div class="arrow_box" style="margin: 20px; text-align: justify;">
			<h2>COURSELIST</h2>
			<p>COURSELIST（コースリスト）では「まちあるきコース」の一覧を見ることが出来ます。コースを選択すると、MAPページに移動してルートの詳細な情報が表示されます。</p>
			<h2>MAP</h2>
			<p>MAPページでは地図から観光地を探す事が出来ます。COURSELIST（コースリスト）から飛ぶページもこちらです。</p>
			<h1>画面説明</h1>
			<p>それぞれの観光地にはピンが刺さっており、クリックする事で詳細情報がページ右のエリアに表示されます。また、このピンはMapページ右上のチェックボックスをクリックする事でカテゴリ別で表示又は非表示にすることも可能です。</p>
			<br />
			<h1>オリジナルコース</h1>
			<p>「まちあるきコース」だけではなくあなたの「オリジナルコース」を作成することもできます。右のエリア内の観光地の詳細情報にある「追加」ボタンを押すことでMapページ下部にある青いエリアに現在選択している観光地が追加されます。
			観光地が追加されると2つの観光地間の距離、移動時間が表示されます。観光地の順番を変更したい時にはそれぞれの要素をドラッグアンドドロップで入れ替えることが出来ます。
			観光地をルートから削除したい場合は画面左下にあるゴミ箱に観光地をドラッグアンドドロップすることで削除します。</p>
		</div>
	</div>
	
</body>

<footer class="aboutfooter">
	<div>
	<h2>スマホで利用するには？</h2>
	<p>スマートフォンではこだてMap+を使いたい時にはアプリ版をお勧めします。スマートフォンアプリではあなたの位置情報をを地図に表示することができ、あなたのまちあるきを力強くサポートします。ぜひご利用ください。</p>

		 <?php
		  echo '<a  target="_blank" href=https://itunes.apple.com/app/id744881889>'; 
		  echo $this->Html->image('appstore.png',array('alt' => 'APPSTORE','width'=>'150','height'=>'45'));
		  echo '</a>';
		  echo '<a  target="_blank" href=https://itunes.apple.com/app/id744881889>';
		  echo $this->Html->image('googleplay.png',array('alt' => 'GOOGLEPLAY','width'=>'140','height'=>'55'));
		  echo '</a>';
		  ?>
		 
	</div>
</footer>

</html>