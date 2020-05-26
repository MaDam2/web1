<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<title>Index</title>
<style>
html, body {
	min-width:1800px;
	margin: 0;
	padding: 1px;
	background:#fff;
}
a{
	display:inline-block; width:85%;
	color: #333;
}

ul {
	list-style:none;
	margin:0px;
	padding:0px;
}
li {
	padding-bottom:3px;
}

table, th, td {
	border-collapse:collapse;
}

.idx-table {
	width:100%;
	background:#fff;
	border-spacing:0px 0px;
}

#idx td {
	border:1px solid #ccc;
}
.title {
	padding:10px;
	background:#243C6A;
	font-size:16px;
	font-weight:bold;
	color:#fff;
}

.menu-1-odd {
	padding:10px;
/*	background:#6F8395;		*/
	background:#DAD5CD;
	font-size:15px;
	font-weight:bold;
	color:#fff;
}
.menu-1-eve {
	padding:10px;
/*	background:#6F8395;		*/
	background:#F2E8D6;
	font-size:15px;
	font-weight:bold;
	color:#fff;
}

.td-odd {
	vertical-align:top;
	height:50px;
	line-height:170%;
	font-size:14px;
	color:#333;
	background:#E6E1DA;
}
.td-eve {
	vertical-align:top;
	line-height:170%;
	font-size:14px;
	color:#333;
	background:#fdf5e6;
}

.ul-menu-2 {
	padding:15px 5px 0 20px;
	font-size:14px;
	font-weight:bold;
	color:#333;
	text-emphasis-color:#000;
/*	background-color:#E6E1DA;	*/
}

.ul-menu-3 {
	padding:5px 30px 7px 30px;
	font-size:14px;
	color:#333;
}

.ul-menu-3 > li{
	padding:8px 5px 1px 3px;
	border-bottom:1px dotted #666;
}

.menu-1-title {
	padding:3px 5px 3px 5px;
	background:#5CACEB;
	color:#000;
}

.menu-2-title {
	padding:3px 5px 3px 5px;
	background:#669922;
	color:#fff;
}

.menu-3-prog {
	color:#054C9B;
	font-weight:bold;
}
</style>
</head>

<body>
<div style="background:#333; padding:1px 20px 15px 20px; color:#fff; font-size:14px; line-height:180%;">
	<h1>PACK 퍼블리싱 진행현황</h1>
	<b>[ 작업진행사항 확인 ]</b><br />
	- "✔" 표시된 항목은 퍼블리싱이 완료된 페이지로 클릭 시 해당 페이지 확인<br />
	<br />
</div>
<div>
	<table id="idx" class="idx-table">
		<!-- 관리자 Start -->
		<tr>
			<td class="title" colspan="7">관리자</td>
		</tr>
		<tr>
			<td class="menu-1-odd" style="width:14%"><span class="menu-1-title">관리자 인증</span></td>
			<td class="menu-1-eve" style="width:14%"><span class="menu-1-title">상품관리</span></td>
			<td class="menu-1-odd" style="width:14%"><span class="menu-1-title">쇼핑몰관리</span></td>
			<td class="menu-1-eve" style="width:14%"><span class="menu-1-title">구매관리</span></td>
			<td class="menu-1-odd" style="width:14%"><span class="menu-1-title">게시판</span></td>
			<td class="menu-1-eve" style="width:14%"><span class="menu-1-title">정보변경</span></td>
			<td class="menu-1-odd" style="width:14%"><span class="menu-1-title">회원관리</span></td>
		</tr>

		<tr>
			<td class="td-odd" style="height:660px;">
				<ul class="ul-menu-2"><span class="menu-2-title">로그인</span></ul>
				<ul class="ul-menu-3">
					<li>ㆍ<a href="/pack_login/login.php" target="pub">로그인</a><span class="menu-3-prog">✔</span></li>
                    <li>ㆍ<a href="/pack_member/join.php" target="pub">회원가입</a><span class="menu-3-prog">✔</span></li>
					<li>ㆍ<href="search_id.php" target="pub">아이디 찾기</a></li>
					<li>ㆍ<href="search_pwd.php" target="pub">비밀번호 찾기</a></li>
					<li>ㆍ<a href="/pack_main.php" target="pub">메인</a><span class="menu-3-prog">✔</span></li>
				</ul>
			</td>
			<td class="td-eve">
				<ul class="ul-menu-2"><span class="menu-2-title">상품관리</span></ul>
				<ul class="ul-menu-3">
					<li>ㆍ<href="/050_order/leaflet_print.php" target="pub">상품저장하기</a></li>
					<li>ㆍ<href="/050_order/originalimage/form.php" target="pub">상품등록하기</a></li>
					<li>ㆍ<href="/050_order/leaflet/lists.php" target="pub">상품자료실</a></li>
					<li>ㆍ<href="/050_order/leaflet/designer_assign.php" target="pub">고시정보입력</a></li>
				</ul>
			</td>
			<td class="td-odd">
				<ul class="ul-menu-2"><span class="menu-2-title">쇼핑몰관리</span></ul>
				<ul class="ul-menu-3">
					<li>ㆍ<a href="/020_mall/myshopintro.php" target="pub">My Shop 인트로</a><span class="menu-3-prog">✔</span></li>
					<li>ㆍ<a href="/020_mall/mallSelling.php" target="pub">판매 관리</a><span class="menu-3-prog">✔</span></li>
					<li>ㆍ<a href="/020_mall/mallSetting.php" target="pub">설정</a><span class="menu-3-prog">✔</span></li>
				</ul>
			</td>
			<td class="td-eve">
				<ul class="ul-menu-2"><span class="menu-2-title">구매관리</span></ul>
				<ul class="ul-menu-3">
					<li>ㆍ<a href="/030_purchase/shippingAgencySetting.php" target="pub">배송대행지 설정</a><span class="menu-3-prog">✔</span></li>
					<li>ㆍ<a href="/030_purchase/shippingStatus.php" target="pub">배송상태 확인</a><span class="menu-3-prog">✔</span></li>
				</ul>
			</td>
			<td class="td-odd">
				<ul class="ul-menu-2"><span class="menu-2-title">게시판</span></ul>
				<ul class="ul-menu-3">
					<li>ㆍ<a href="/040_bbs/bbs.php" target="pub">본사 공지사항</a><span class="menu-3-prog">✔</span></li>
					<li>ㆍ<a href="/040_bbs/bbs_write&idx.php" target="pub">공지사항 등록/수정</a><span class="menu-3-prog">✔</span></li>
					<li>ㆍ<a href="/040_bbs/bbs_view&idx.php" target="pub">공지사항 상세보기</a><span class="menu-3-prog">✔</span></li>
					<li>ㆍ<a href="/040_bbs/shoppingNotice.php" target="pub">통합쇼핑몰 게시판</a><span class="menu-3-prog">✔</span></li>
				</ul>
			</td>
			<td class="td-eve">
				<ul class="ul-menu-2"><span class="menu-2-title">정보변경</span></ul>
				<ul class="ul-menu-3">
					<li>ㆍ<href="/090_system/indef.php" target="pub">정보변경</a></li>
					<li>ㆍ<href="/090_system/phone_send_reject.php" target="pub">비밀번호변경</a></li>
				</ul>
			</td>
            <td class="td-odd">
				<ul class="ul-menu-2"><span class="menu-2-title">회원관리</span></ul>
				<ul class="ul-menu-3">
					<li>ㆍ<href="/060_calculate/designer.php" target="pub">회원목록</a></li>
					<li>ㆍ<href="/060_calculate/printing.php" target="pub">결제목록</a></li>
				</ul>
			</td>
		</tr>
		<!-- 관리자 End -->
	</table>

</div>
</body>
</html>
