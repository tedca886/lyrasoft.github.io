<?php
/**
 * Part of ihealth project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

use Ihealth\Router\Route;

?>
<section id="banner">
	<div class="row-fluid">
		<div id="owl-banner-slideshow" class="owl-carousel">
			<div class="owl-div banner-01"><!--first testimony start-->
				<div class="banner-slogan">
					<h1>iHealth 拉近健康的距離</h1>
				</div>

				<div class="banner-reservation-button">
					<a class="btn btn-large" href="<?php echo JUri::root(true); ?>/schedules/?new=1">
						立即預約
					</a>
				</div>
			</div>

			<div class="owl-div banner-04">
				<div class="banner-reservation-button">
					<a class="btn btn-large btn-success" href="http://topic.cw.com.tw/change/diary_d02.aspx" target="_blank">
						前往觀看天下雜誌專題報導
					</a>
				</div>
			</div>

			<div class="owl-div banner-03">
				<div class="banner-reservation-button">
					<a class="btn btn-large" href="http://www.surelife.com.tw" target="_blank">
						前往了解
					</a>
				</div>
			</div>

			<div class="owl-div banner-02">
				<div class="banner-reservation-button">
					<a class="btn btn-large" href="<?php echo JUri::root(true); ?>/schedules/?new=1">
						立即預約
					</a>
				</div>
			</div>

		</div>
	</div>
</section>

<section id="campaign-section" class="campaign-section">
	<div class="video-wrap">
		<div class="row-fluid">
			<div class="span6 compaign-section__video">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/dZ0dFsfMPkc" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="span6 compaign-section__description">
				<h1><a href="http://socialventurechallenge.asia/" target="_blank">DBS-NUS亞洲社會企業挑戰賽</a></h1>
				<h3>
					政昇處方宅配藥局榮獲 DBS-NUS 亞洲社會企業挑戰賽第三名！
				</h3>
				<p>
					由星展銀行基金會和新加坡國立大學合作舉辦的亞洲社會企業挑戰賽。
					來自台灣的政昇處方宅配藥局從全亞洲<strong> 600 </strong>多個團隊（包含日本及韓國）脫穎而出，最後獲得全亞洲第三名，也是 <strong>唯一</strong> 入圍且得獎的社會企業團隊！
				</p>
			</div>
		</div>
	</div>
</section>


<div id="body">

<!--STEP-->
	<section id="step" class="main-block">
		<h1 class="text-center">
			最迅捷的<span class="highlight" style="color: #d9534f">免費</span>處方宅配
		</h1>

		<div class="container-fluid step-wrap">
			<div class="row-fluid">
				<div class="step span4 text-center">
					<div class="step-item">
						<h2 class="step-header">
							步驟一
						</h2>

						<p>
							<img src="images/steps/step1.png" alt="step1" />
						</p>

						<h3>預約</h3>

						<p>
							註冊會員後，即可為自己或家人新增處方資料
						</p>
					</div>
				</div>

				<div class="step span4 text-center">
					<div class="step-item">
						<h2 class="step-header">
							步驟二
						</h2>

						<p>
							<img src="images/steps/step2.png" alt="step2" />
						</p>

						<h3>上傳處方箋</h3>

						<p>
							透過傳真、網路或LINE等方式上傳處方箋後即完成預約
						</p>
					</div>
				</div>

				<div class="step span4 text-center">
					<div class="step-item">
						<h2 class="step-header">
							步驟三
						</h2>

						<p>
							<img src="images/steps/step3.png" alt="step3" />
						</p>

						<h3>宅配</h3>

						<p>
							專業藥師親自將處方藥依照約定時間送達您指定的地址
						</p>

						<em>(尚未服務台東、金門、澎湖與連江縣)</em>
					</div>
				</div>
			</div>
		</div>

		<div class="text-center">
			<a class="btn btn-success btn-xlarge" href="<?php echo JUri::root(true); ?>/schedules">
				立即開始
			</a>
		</div>
	</section>

	<!-- Features -->
	<section id="features" class="main-block green-block">
		<div class="container-fluid">
			<h1 class="text-center">
				最貼心的藥事服務
			</h1>

			<div class="row-fluid">
				<div class="feature-item span4 text-center">
					<div class="feature-icon">
						<span class="icon-comments-2" style="font-size: 120px"></span>
					</div>

					<h3>專業藥師親自解說</h3>

					<p>
						藥師指導與評估用藥，避免藥物誤用或交互作用
					</p>
				</div>

				<div class="feature-item span4 text-center">
					<div class="feature-icon">
						<span class="icon-clock" style="font-size: 120px"></span>
					</div>

					<h3>減少時間與精力浪費</h3>

					<p>
						免除舟車勞頓與漫長等待，節省時間與金錢
					</p>
				</div>

				<div class="feature-item span4 text-center">
					<div class="feature-icon">
						<span class="icon-star" style="font-size: 120px"></span>
					</div>

					<h3>藥品與醫院同等級</h3>

					<p>
						保證與醫院藥品相同，為最新效期藥，且無缺藥問題。
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Pharmacies -->
	<section id="pharmacists" class="main-block">
		<div class="container-fluid">
			<h1 class="text-center with-subtitle">
				最專業的藥師團隊
			</h1>
			<h2 class="text-center subtitle">
				投保900萬藥師業務責任險
			</h2>

			<div class="row-fluid">
				<div class="span4 muted text-center" style="font-size: 1.25em; padding-top: 30px;">
					<p>
						<em class="text-main-green" style="font-size: 120px;">15</em>
						<em class="text-main-green" style="font-size: 50px;">位</em>
					</p>
					<p>專業藥師</p>
					<p>
						單月服務超過 <em class="text-main-green">10,000</em> 處方箋
					</p>
					<p>
						與 <em class="text-main-green">500</em> 家安養中心
					</p>
					<!-- 徵才活動
					<p>
						<a href="<?php echo JRoute::_('recruitment'); ?>">
						<button type="button" class="btn btn-large btn-success">更多徵才資訊
						</button>
						</a>
					</p>
					-->
				</div>
				<div class="span8">
					<img src="<?php echo $this->tpl->baseurl . '/templates/' . $this->tpl->template . '/images/about/pharmacists.png'; ?>" alt="" />
				</div>
			</div>
		</div>
	</section>

<!--TESTIMONY-->
	<section id="testimony" class="main-block green-block">
		<div class="container-fluid">
			<h1 class="text-center">
				最窩心的客戶推薦
			</h1>
			<div class="row-fluid">
				<div id="owl-customer-quotes" class="owl-carousel">
					<div class="owl-div"><!--first testimony start-->
						<div class="testimony-container">
							<div class="testimony-item">
								<p class="customer-avatar">
									<img src="<?php echo JUri::root() . '/templates/ihealth-2014/img/thump.png' ?>" alt="Avatar" />
								</p>

								<p>
									謝謝你們提供的宅配服務，讓我真的領藥方便多了，我在七月的時候就有看到你們的網站，但還是遲疑了不敢使用，選擇習慣性的到台大醫院領藥，但上個月回醫院領看到你們發的傳單跟牌子，認為說應該不會是詐騙集團的網站，姑且一試，真的很感謝你們提供這麼好的服務，我會繼續支持你們，祝你們生意興隆。
								</p>

								<h3 class="pull-right">台北市 魏小姐</h3>
							</div>
						</div>
					</div><!--first testimony end-->
					<div class="owl-div"><!--second testimony start-->
						<div class="testimony-container">
							<div class="testimony-item">
								<p class="customer-avatar">
									<img src="<?php echo JUri::root() . '/templates/ihealth-2014/img/thump.png' ?>" alt="Avatar" />
								</p>

								<p>
									我住在老人安養護中心，上個月去榮總領藥時看到你們的廣告單，詢問你們的處方宅配使用方式，當場你們也幫我把處方照相回去，今天依照約好宅配時間幫我送來，讓我領藥方便多了，不用再搭一小時的公車去醫院領藥，辛苦你們了，感謝你們。
								</p>

								<h3 class="pull-right">台北市 駱伯伯</h3>
							</div>
						</div>
					</div><!--second testimony end-->
					<div class="owl-div"><!--third testimony start-->
						<div class="testimony-container">
							<div class="testimony-item">
								<p class="customer-avatar">
									<img src="<?php echo JUri::root() . '/templates/ihealth-2014/img/thump.png' ?>" alt="Avatar" />
								</p>

								<p>
									我跟爺爺奶奶住一起，兩個人各看了五、六科醫生，用藥都不同，拿藥時間也不一樣，我要照顧小孩，不能常跑醫院，好在有藥師幫忙送這些藥到家裡來，還花時間跟我們解說，就不會擔心吃錯藥，也省了很多時間。
								</p>

								<h3 class="pull-right">苗栗 潘太太</h3>
							</div>
						</div>
					</div><!--third testimony end-->
				</div>
			</div>
		</div>

	</section>



	<section id="our-service">
		<div class="row-fluid">
			<a class="bamahome service" href="http://www.bamahome.com.tw" target="_blank">
				<div class="service-item text-center">
					<h1>
						<div class="service-img-wrap">
							<img src="images/about/services/bamahome-w.png" alt="Bamahome" />
						</div>
					</h1>
					<p>
						照顧模式免費諮詢，幫您推薦適合的養護機構
					</p>
				</div>
			</a>

			<a class="carejob service" href="http://www.carejob.com.tw" target="_blank">
				<div class="service-item text-center">
					<h1>
						<div class="service-img-wrap">
							<img src="images/about/services/carejob-w.png" alt="Bamahome" />
						</div>
					</h1>
					<p>
						居家、醫院與機構看護媒合
					</p>
				</div>
			</a>

			<a class="paycare service" href="http://www.paycare.com.tw" target="_blank">
				<div class="service-item text-center">
					<h1>
						<div class="service-img-wrap">
							<img src="images/about/services/paycare-w.png" alt="Bamahome" />
						</div>
					</h1>
					<p>
						各式銀髮族相關補助，專人諮詢解決您的煩惱
					</p>
				</div>
			</a>

		</div>
	</section>

</div>

<!--<div id="sub-banner">-->
<!--	<img style="width: 100%;" src="--><?php //echo $this->tpl->baseurl . '/templates/' . $this->tpl->template . '/images/sub-banner.jpg'; ?><!--" alt="Banner" />-->
<!--</div>-->

<!--MEDIA EXPOSE-->
<section id="media-expose" class="main-block" style="padding-bottom: 0;">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span5 media-logo-block">
				<h1 class="text-center">
					<a href="<?php echo JUri::root(true) . '/about/media-report';?>">
						媒體報導
					</a>
				</h1>

				<script>
					/**
					 * Inner hover script to go with this block
					 */
					jQuery(document).ready(function($)
					{
						var logos = $('.media-logo-block .media-logo');

						var inners = logos.find('.media-logo-inner');

						inners.css('display', 'none');

						logos.hover(
							function()
							{
								$(this).find('.media-logo-inner').stop().fadeIn({duration: 200});
							},
							function()
							{
								$(this).find('.media-logo-inner').stop().fadeOut({duration: 200});
							}
						);
					});
				</script>

				<!--MEDIA LOGO ROW 1-->
				<div class="row-fluid media-logo-row row-1">
					<div class="span4">
						<a class="media-logo vision-logo" href="http://www.gvm.com.tw/Boardcontent_25856_1.html" target="_blank">
							<div class="media-logo-inner">
								Vision
							</div>
						</a>
					</div>
					<div class="span4">
						<a class="media-logo sei-logo" href="http://www.seinsights.asia/story/3137/9/2406" target="_blank">
							<div class="media-logo-inner">
								Sei
							</div>
						</a>
					</div>

					<div class="span4">
						<a class="media-logo ez66-logo" href="http://www.ez66.com.tw/?affiliateid=2" target="_blank">
							<div class="media-logo-inner">
								EZ66
							</div>
						</a>
					</div>

					<?php if (false): ?>
					<div class="span4">
						<a class="media-logo lian-logo" href="https://docs.google.com/file/d/0BzCJpRrXwA6rSThuMjJZT0VvUVk" target="_blank">
							<div class="media-logo-inner">
								Lian
							</div>
						</a>
					</div>
					<?php endif; ?>
				</div>

				<!--MEDIA LOGO ROW 2-->
				<div class="row-fluid media-logo-row row-2">
					<div class="span4">
						<a class="media-logo daaitv-logo" href="http://www.daai.tv/daai-web/news/topic.php?id=47883" target="_blank">
							<div class="media-logo-inner">
								DaAiTV
							</div>
						</a>
					</div>
					<div class="span4">
						<a class="media-logo businesstoday-logo" href="http://www.businesstoday.com.tw/article-content-92751-104527" target="_blank">
							<div class="media-logo-inner">
								Business Today
							</div>
						</a>
					</div>
					<div class="span4">
						<a class="media-logo cti-logo" href="https://www.youtube.com/watch?v=-IkFm7QW5xc" target="_blank">
							<div class="media-logo-inner">
								CTI
							</div>
						</a>
					</div>
				</div>

				<!--MEDIA LOGO ROW 3-->
				<div class="row-fluid media-logo-row row-3">
					<div class="span4">
						<a class="media-logo apple-logo" href="http://www.appledaily.com.tw/appledaily/article/finance/20131118/35445924" target="_blank">
							<div class="media-logo-inner">
								Apple
							</div>
						</a>
					</div>
					<div class="span4">
						<a class="media-logo era-logo" href="https://www.youtube.com/watch?v=okdgo0rebuY" target="_blank">
							<div class="media-logo-inner">
								Era
							</div>
						</a>
					</div>
					<div class="span4">
						<a class="media-logo tvbs-logo" href="http://news.tvbs.com.tw/entry/535749" target="_blank">
							<div class="media-logo-inner">
								TVBS
							</div>
						</a>
					</div>
				</div>

				<div class="row-fluid media-logo-row row-3">
					<div class="span4">
						<a class="media-logo gov-logo" href="<?php echo JUri::root(true) . '/about/state-media-reports'; ?>" target="_blank">
							<div class="media-logo-inner">
								政府媒體報導
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="span7 partner">
				<h1 class="text-center">
					<a href="<?php echo JUri::root(true) . '/about/cooperation-agencies';?>">
						合作夥伴
					</a>
				</h1>
				<div class="row-fluid">
					<div class="span6 partner">
						<p class="china-insurance-logo-wrap text-center">
							<a href="http://www.chinalife.com.tw" target="_blank">
								<img class="china-insurance-logo" style="height: 60px;"
									src="<?php echo JUri::root(true) . '/images/about/partner/china_insurance.png'; ?>" alt="China Insurance" />
							</a>
						</p>

						<p class="partner-desc text-center">
						</p>

						<div class="text-center">
							<a class="btn btn-success btn-medium" href="china-life">
								了解更多
							</a>
						</div>
					</div>
					<div class="span6 partner">
						<p class="china-insurance-logo-wrap text-center">
							<a href="http://www.tfb.org.tw/" target="_blank">
								<img class="china-insurance-logo" style="height: 60px;"
									src="images/about/media-logo/cefb_logo.gif" alt="Taiwan Foundation of Blind" />
							</a>
						</p>

						<p class="partner-desc text-center">
						</p>

						<div class="text-center">
							<a class="btn btn-success btn-medium" href="taiwan-foundation-of-blind">
								了解更多
							</a>
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6 partner">
						<p class="china-insurance-logo-wrap text-center">
							<a href="http://www.commonhealth.com.tw/" target="_blank">
								<img class="china-insurance-logo" style="height: 60px;"
									src="<?php echo JUri::root(true) . '/images/about/partner/commonhealth-logo.png'; ?>" alt="commonhealth" />
							</a>
						</p>

						<p class="partner-desc text-center">
						</p>

						<div class="text-center">
							<a class="btn btn-success btn-medium" href="commonhealth">
								了解更多
							</a>
						</div>
					</div>

					<div class="span6 partner">
						<p class="china-insurance-logo-wrap text-center">
							<a href="https://itunes.apple.com/tw/app/bao-xian-ren-yi-sheng/id980866891" target="_blank">
								<img class="china-insurance-logo" style="height: 60px;"
									src="<?php echo JUri::root(true) . '/images/about/partner/movement_app.png'; ?>" alt="保險人醫生" />
								<span style="color: #000000;">保險人醫生 App</span>
							</a>

						</p>
						<div class="text-center">
							<a id="movement-app"
								class="btn btn-success btn-medium"
								data-toggle="popover"
								data-placement="bottom"
								data-content="推銷和增員都管了！<br><br>這是一項具二岸專利並且創新應用的手機軟體，也是每位保險人私人活動管家APP"
								title=""
								data-original-title="保險人醫生">
								了解更多
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>


	</div>
</section>

<?php echo (new \Astra\Layout\FileLayout('global.house'))->render(null); ?>

<script type="text/javascript">
	jQuery(document).ready(function() {

		var customerQuotes = jQuery('#owl-customer-quotes');
		var bannerSlideshow = jQuery('#owl-banner-slideshow');

		customerQuotes.owlCarousel({
			navigation : true, // Show next and prev buttons
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true
		});

		bannerSlideshow.owlCarousel({
			navigation : false, // Show next and prev buttons
			slideSpeed : 200,
			paginationSpeed : 800,
			rewindSpeed : 1000,
			autoPlay : true,
			singleItem :true
		});
	});
</script>
