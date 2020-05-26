<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <title>PACK</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/assets/css/styles.css?ver=20200507001">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/button.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" /> -->
	<link rel="stylesheet" type="text/css" href="/assets/css/pdmenu.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/pagination.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/modal.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link rel="sytlesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <link rel="stylesheet" href="/assets/css/pack_style.css">
	<script type="text/javascript" src="/assets/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/assets/js/pdmenu_sup.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="/assets/js/script.js"></script>
	<script type="text/javascript" src="/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container_main">
        <header class="header">
		<div style="background:#4d4b4e; height:26px;">
			<div style="width:1280px;">
				<!--div class="header_logo"><img src="/assets/img/_header/logo_header.png"></div>
				<!-- 풀다운 바 시작-->

				<!--div class="menubar">
				<div class="inner clear_fix">
						<div class="r_btn r_btn_pc">
							<!-- pulldown menu >
					<a href="#" class="btn_lnb" id="current" title="전체메뉴 보기" onclick="javascript:;return false;">
					  <img src="/assets/img/_header/btn_allmenu.png"></a>

							<div class="sitemap">
								<ul class="clear_fix">
									<li>
										<dl>
											<dt>인쇄서비스 관리</dt>
											<dd><a href="order/leaflet_print.php" target="pub">인쇄주문</a></dd>
											<dd><a href="order/leaflet/list.php" target="pub">시안리스트</a></dd>
											<dd><a href="order/leaflet/designer_assign.php" target="pub">디자이너배정</a></dd>
											<dd><a href="order/leaflet/designer_draft/리스트넘버.php" target="pub">디자인 등록</a></dd>
											<dd><a href="order/leaflet/designer_draft/리스트넘버.php" target="pub">디자인 수정</a></dd>
											<dd><a href="delivery/leafet.php" target="pub">배송 관리</a></dd>
											<dd><a href="order/designer/list.php" target="pub">디자이너 관리</a></dd>
											<dd><a href="leaflet_sample/form.php" target="pub">샘플전단이미지 관리</a></dd>
										</dl>
									</li>

									<li>
										<dl>
											<dt>문자서비스 관리</dt>
											<dd><a href="sms/message/sendlists.php" target="pub">발송내역 관리</a></dd>
											<dd><a href="sms/reject/list.php" target="pub">수신거부 관리</a></dd>
										</dl>
									</li>

									<li>
										<dl>
											<dt>상품서비스 관리</dt>
											<dd><a href="service/product/list.php" target="pub">상품 관리</a></dd>
											<dd><a href="service/pop/list.php" target="pub">POP이미지 관리</a></dd>
											<dd><a href="service/mart_homepage/list.php" target="pub">모바일 홈페이지 관리</a></dd>
											<dd><a href="service/mart_homepage/hot_lpace_list.php" target="pub">핫플레이스 관리</a></dd>
										</dl>
									</li>

									<li>
										<dl>
											<dt>주문 관리</dt>
											<dd><a href="mart/order/list.php" target="pub">상품 리스트</a></dd>
											<dd><a href="mart/order/order_sheet/u/리스트넘버.php" target="pub">배달주문서 출력</a></dd>
										</dl>
									</li>

									<li>
										<dl>
											<dt>정산 관리</dt>
											<dd><a href="calculate/designer.php" target="pub">디자이너 정산</a></dd>
											<dd><a href="calculate/printing.php" target="pub">인쇄 정산</a></dd>
											<dd><a href="calculate/sms.php" target="pub">문자 정산</a></dd>
										</dl>
									</li>

									<li>
										<dl>
											<dt>시스템 관리</dt>
											<dd><a href="system/systempop.php" target="pub">시스템 팝업 관리</a></dd>
											<dd><a href="system/indef.php" target="pub">개발 도구</a></dd>
											<dd><a href="system/phone_send_reject.php" target="pub">설정</a></dd>
										</dl>
									</li>
								</ul>
							</div>
							<!-- // pulldown menu >
				  </div>
				  </div>

				</div>
				<!-- 풀다운 바 종료 -->
				<div class="top_button_box">
					<a href="#"><i class="fa fa-desktop" style="font-size:10px;"></i> 원격제어</a>
					<span class="icon_division"></span>
					<a href="#"><i class="fa fa-info-circle" style="font-size:10px;"></i> 정보수정</a>
					<span class="icon_division"></span>
					<a href="#"><i class="fa fa-unlock" style="font-size:10px;"></i> 로그아웃</a>
				</div>
			</div>
		</div>
		<div style="background:#243c6a; height:38px;">
			<div style="width:1280px;">
				<div class="top_message_box">
					<!--a href="#" class="btn_lnb" id="current" title="전체메뉴 보기" onclick="javascript:;return false;">
					<img src="/assets/img/_header/btn_allmenu.png" style="margin-right:8px;"></a-->
				</div>
				<div class="top_login_box">
					<i class="far fa-user-circle" style="color:#efefef; font-size:16px; margin:0 2px 0 20px; vertical-align:middle;"></i><a href="#"><span style="color:#ffde00; font-weight:bold;">PACK</span>님이 로그인 중입니다.</a>
				</div>
                <div class="top_menu_box">
                    <ul>
                        <li><a href="#">상품관리</a></li>
                        <li><a href="#">쇼핑몰관리</a></li>
                        <li><a href="#">구매관리</a></li>
                        <li><a href="#">게시판</a></li>
                        <li><a href="#">정보변경</a></li>
                        <li><a href="#">회원관리</a></li>
                    </ul>
                </div>
			</div>
		</div>

		</header>
