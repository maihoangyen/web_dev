<?php
    session_start();
    if (!(isset($_SESSION['username']) && $_SESSION['username'])) {
        echo ("<script LANGUAGE='JavaScript'>window.alert('Vui lòng đăng nhập');window.location.href='login.html';</script>");
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Trang bình luận</title>
		<link href="comments.css" rel="stylesheet" type="text/css">
	</head>
	<body >
		<div class="cmt">
			<h1 style="text-align: center; background: #4682B4; color: #ffff; ">Bình luận</h1>
		</div>
		<div class="content-home" >

			<h2 style="text-align: center";>Parse Server tồn tại lỗ hổng thực thi mã từ xa đặc biệt nghiêm trọng</h2>
			<img src="img/ps.jpg" alt=""style="width:500px; height: 300px; margin-left: 400px;">

			<p>Theo giải thích trên GitHub, lỗ hổng RCE tồn tại trong gói npm Parse Server. Ba nhà nghiên cứu Mikhail Shcherbakov, Cristian-Alexandru STAICU và Musard Balliu đã nhận thấy lỗ hổng prototype pollution trong tệp DatabaseController.js. Lỗi được xác nhận tồn tại trong phiên bản Ubuntu và Windows.</p>

			<p>Lỗ hổng prototype pollution là một cuộc tấn công chèn mã ảnh hưởng đến JavaScript, cho phép tin tặc sửa đổi các chức năng dự kiến của ứng dụng.</p>

			<p>Đây là một cuộc tấn công injection nhằm vào các JavaScript runtime. Với prototype pollution, hacker có thể kiểm soát các giá trị mặc định của thuộc tính đối tượng. Điều này cho phép kẻ tấn công giả mạo logic của ứng dụng và cũng có thể dẫn đến tấn công từ chối dịch vụ hoặc trong trường hợp nghiêm trọng là thực thi mã từ xa.</p>

			<p>Lỗ hổng Parse Server ảnh hưởng đến công cụ trong cấu hình MongoDB mặc định. Các nhà nghiên cứu giải thích mã tồn tại lỗ hổng có thể ảnh hưởng đến Postgres và các phụ trợ cơ sở dữ liệu khác.</p>

			<p>Được gắn mã định danh là CVE-2022-24760, lỗ hổng này có điểm CVSS 10/10, ảnh hưởng Parse Server phiên bản phát hành trước 4.10.7. Vì vậy, người dùng nên nâng cấp lên Parse Server 4.10.7 hoặc cao hơn để không bị ảnh hưởng bởi lỗ hổng này (phiên bản hiện tại bao gồm 5.0.0 .).</p>

			<p>Các nhà nghiên cứu cũng đã đề xuất một cách giải quyết tạm thời cho người dùng nếu họ không thể cập nhật bản vá, đó là vá trình điều khiển MongoDB Node.js và tắt thực thi mã BSON.</p>

			<p>Parse Server là một khung phụ trợ mã nguồn mở chạy trên Node.js, có thể được triển khai cho bất kỳ cơ sở hạ tầng nào và hỗ trợ tích hợp với các ứng dụng web hiện có. Parse Servercũng có thể hoạt động với khung ứng dụng web Express và thậm chí chạy độc lập.</p>
		
		</div>
	<div class="comments"></div>
Click vào đây để trở lại <a href="index.html">Trang chủ</a><br/>

<script>
const comments_page_id = 1; // This number should be unique on every page
fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
	document.querySelector(".comments").innerHTML = data;
	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
		element.onclick = event => {
			event.preventDefault();
			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
		};
	});
	document.querySelectorAll(".comments .write_comment form").forEach(element => {
		element.onsubmit = event => {
			event.preventDefault();
			fetch("comments.php?page_id=" + comments_page_id, {
				method: 'POST',
				body: new FormData(element)
			}).then(response => response.text()).then(data => {
				element.parentElement.innerHTML = data;
			});
		};
	});
});
</script>
	</body>
</html>

