# <div align="center"><p> HTML-CSS </p></div>
 ## Họ và tên: Mai Thị Hoàng Yến
 ## Ngày báo cáo: Ngày 24/3/2022
 ### MỤC LỤC
  1. [Tìm hiểu về HTML5](#lythuyet)
  
      1.1 [Khái niệm HTML5](#kn)
     
      1.2 [Quá trình xử lý của HTML](#qt)
     
      1.3 [Cấu trúc của một đoạn HTML](#ct)
     
      1.4 [Vai trò của của HTML](#vt)
      
      1.5 [Một số thẻ hay dùng trong HTML](#ms)
     
  2. [Những trang có sử dụng HTML](#thuchanh)  
  
      2.1 [Trang đăng nhập](#dn)
      
      2.2 [Trang đăng ký](#dk)
      
      2.3 [Trang download](#dow)
      
      2.4 [Trang tìm kiếm](#tk)
      
      2.5 [Trang upload](#up)
      
      2.6 [Trang bình luận](#cmt)
#### 1. Tìm hiểu về HTML5 <a name="lythuyet"></a>

1.1 Khái niệm HTML5:<a name="kn"></a> 
   - Là những thành phần đánh dấu hoặc cú pháp mới
   - Có Các thẻ (tag).Ví dụ: `<ul>`, `<li>`, `<div>`,...
 
1.2 Sự khác nhau giữa HTML và HTML5:
  <table align="center">
    <tr>
        <td align="center">Đặc điểm</td>
        <td align="center">Định nghĩa</td>
        <td align="center">Định vị địa lý</td>
        <td align="center">Tương thích trình duyệt</td>
        <td align="center">Phiên bản</td>
        <td align="center">Hỗ trợ đa phương tiện</td>
        <td align="center">Lưu trữ</td>
        <td align="center">Giao tiếp</td>
        <td align="center">Đồ họa</td>
        
    </tr>
    <tr>
        <td align="center"> HTML5</td>
        <td align="center">Phiên bản mới nhất của HTML, bổ sung Markup để mô tả cấu trúc và nội dung website</td>
        <td align="center">Sử dụng Javascript Geolocation API để theo dõi người dùng bất kể vị trí nào</td>
        <td align="center">Hoạt động tốt trong trình duyệt mới và hỗ trợ hiển thị trình duyệt cũ</td>
        <td align="center">Phiên bản mới nhất</td>
        <td align="center">Tích hợp sẵn các chức năng hỗ trợ video và âm thanh</td>
        <td align="center">Có thể lưu trữ nhiều nơi như Application cache, SQL database, Web storage.Ngoài ra, chạy JS trong nền bằng JS API có sẵn cho việc lưu trữ.</td>
        <td align="center">Hỗ trợ Web Socket cho việc giao tiếp song song giữa Server và Client.</td>
        <td align="center">Đồ họa vector trong HTML5 hỗ trợ mặc định với Canvas và SVG</td>
    </tr>
     <tr>
        <td align="center"> HTML</td>
        <td align="center">Ngôn ngữ đánh dấu siêu văn bản được dùng để phát triển website</td>
        <td align="center">Khó xác định nếu người dùng sử dụng thiết bị di động</td>
        <td align="center">Chỉ hoạt động tốt trong các trình duyệt cũ</td>
        <td align="center">Phiên bản cũ</td>
        <td align="center"> Không hỗ trợ video và âm thanh</td>
        <td align="center">Dùng cache của trình duyệt là bộ nhớ tạm thời</td>
        <td align="center">Không hỗ trợ Web Socket cho việc giao tiếp giữa Client với Server</td>
        <td align="center">Đồ họa vector trong HTML phải dùng Sliver light, Adobe Flash, VML ...</td>
    </tr>
</table>

 
      - [Trang chủ](/Task1_HTML/index.html)
   
2.2 Sự khác nhau giữa HTML và HTML5
     - Theo em tìm hiểu thì HTML5 nó sẽ có những đặc điểm khác so với HTML là:
       - HTML5 cho phép Javascript chạy ở chế độ nền còn HTML thì không
       - HTML5 thì hỗ trợ tất cả các trình duyệt còn HTML thì chỉ hỗ trợ trên các trình duyệt cũ
       - HTML5 nó có thể xử lý những lỗi cú pháp không chính xác
       - Ngoài ra, trong HTML5 có các elements bị điều chỉnh như:
            >**Được thêm vào:** nav, audio, video, figcaption, time, section, canvas, header, footer, article, nav, output.
            
            >**Được chuyển đổi:** applet -> object, acronym -> abbr, dir -> ul.
            
            >**Được lược bỏ:** frameset, frame, noframes.
            
   2.3 Trong project của em có sử dụng những thẻ HTML5 như sau:
      - Thẻ meta:
        - `<meta charset="UTF-8"> :` Chỉ định mã hoá ký tự cho tài liệu HTML    
     - Thẻ h3,h4:
        - `<h3>:` Dùng để xác định tiêu đề quan trọng 
        - `<h4>:` Dùng để xác định các tiêu đề ít quan trọng hơn
      - Thẻ div:
        - `<div>:` Dùng để xác định một phần hoặc một bộ phần nào đó. Trong đó, chúng ta có thể chứa các html hoặc thiết kế với css 
      - Thẻ article:
        - `<article>:` Nó chỉ định một nội dung độc lập. Ví dụ như một bài viết về tin tức, thời sự 
      - Thẻ link rel="":
        - `<link rel="">:` Thường được dùng để liên kết các trang với nhau 
      - Thẻ input:
        - `<input type="">:` Nó sẽ chỉ định từng loại phần tử có trong type để hiển thị  
      - Thẻ img:
        - `<img>:` Dùng để nhúng các hình ảnh mong muốn vào trang web 
      - Thẻ nav:
        - `<nav>:` Dùng để tập hợp các liên kết chính 
      - Thẻ header:
        - `<header>:` Nó đại diện cho một vùng chứa nội dung giới thiệu hoặc các liên kết chính 
      - Thẻ footer:
        - `<footer>:` Nó được dùng để xác định chân trang cho một trang web 
      - Thẻ form:
        - `<form>:` Dùng để tạo một biểu mẫu cho html
      - Thẻ ul:
        - `<ul>:` Dùng để xác định danh sách không có thứ tự 
      - Thẻ li:
        - `<li>:` Dùng để xác định một mục danh sách 
