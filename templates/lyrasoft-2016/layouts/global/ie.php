<?php
/** @var JApplicationWebClient $client */
$client = JFactory::getApplication()->client;
$invalidIE = (JApplicationWebClient::IE === $client->browser && $client->browserVersion <= 9);
$isHome = \Windwalker\Helper\UriHelper::isHome();
?>

<?php if ($invalidIE && $isHome): ?>
<style>
	#do-not-use-old-ie
	{
		text-align: center;
	}
	#do-not-use-old-ie .pull-left
	{
		line-height: 1.5em;
		padding: 0 8px;
	}
</style>

<div id="do-not-use-old-ie" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<p>
					為確保你瀏覽順暢，建議你使用以下的瀏覽器
				</p>

				<div>
					<div class="pull-left">
						<a href="http://www.google.com/intl/zh-TW/chrome/">
							<img src="https://s3-ap-northeast-1.amazonaws.com/ihealth-tw/images/browser-logo/chrome.jpg" alt="Google Chrome" />
							<br />
							Google Chrome
						</a>
					</div>
					<div class="pull-left">
						<a href="http://mozilla.com.tw/firefox/new/">
							<img src="https://s3-ap-northeast-1.amazonaws.com/ihealth-tw/images/browser-logo/firefox.jpg" alt="Mozilla FireFox" />
							<br />
							Mozilla FireFox
						</a>
					</div>
					<div class="pull-left">
						<a href="http://windows.microsoft.com/zh-TW/internet-explorer/download-ie">
							<img src="https://s3-ap-northeast-1.amazonaws.com/ihealth-tw/images/browser-logo/ie10.jpg" alt="Internet Explorer 10" />
							<br />
							Internet Explorer 10
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	jQuery('#do-not-use-old-ie').modal();
</script>
<?php endif; ?>
