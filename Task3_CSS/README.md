# <div align="center"><p> HTML-CSS </p></div>
 ## Họ và tên: Mai Thị Hoàng Yến
 ## Ngày báo cáo: Ngày 24/3/2022
 ### MỤC LỤC
  1. [Tìm hiểu về CSS](#lythuyet)
  
      1.1 [Khái niệm CSS](#kn)
     
      1.2 [Cách sử dụng CSS](#qt)
     
      1.3 [Vai trò CSS](#ct)
     
      1.4 Các thuộc tính định dạng quan trọng của CSS](#vt)
     
     
  2. [Những trang có sử dụng CSS](#thuchanh)  
  
      2.1 [Trang đăng nhập](#dn)
      
      2.2 [Trang đăng ký](#dk)
      
      2.3 [Trang tìm kiếm](#tk)
      
      2.4 [Trang upload](#up)
      
      2.5 [Trang bình luận](#cmt)
      
#### 1. Tìm hiểu về CSS <a name="lythuyet"></a>
1.1 Khái niệm CSS:<a name="kn"></a>
   - Cascading Style Sheets, hay còn gọi là CSS, là một ngôn ngữ tạo phong cách cho trang Web. Về mặt ngữ nghĩa, ta có thể hiểu như sau:
      - Cascading là cách làm việc của CSS.
      - Style Sheets điều khiển cách hiển thị các nội dung của trang web.
   - CSS là một ngôn ngữ dùng để định dạng các phần tử HTML như chỉnh kích cỡ, font chữ, màu chữ, màu nền, đường viền, hình nền,…
   
1.2 Cách sử dụng CSS:<a name="qt"></a>
   - Chúng ta sẽ có ba cách sử dụng CSS trong HTML là:
     - Inline: mã CSS viết tại thuộc tính Style của phần tử HTML
     - Internal: mã CSS trong chính văn bản HTML, nằm trong khối thẻ <style>
     - External: mã CSS ở một file riêng biệt sau đó nạp vào trong HTML bằng phần tử <link>
 
1.3 Vai trò CSS:<a name="ct"></a> 
   - Chúng ta cần dùng CSS vì nó cho phép bạn định nghĩa kiểu và cách hiển thị các phần tử HTML. Từ đó, CSS sẽ hỗ trợ bạn phân tách nội dung và cách trình bày trang. Nếu chúng ta chỉ sử dụng HTML thì việc định dạng phần tử, kiểu phần tử phải ở cùng một vị trí với phần tử trong văn bản, điều này thật sự khó cho việc bảo trì.
   - Các định dạng sẽ được loại bỏ khỏi văn bản HTML, định dạng được lưu vào một file CSS khi sử dụng CSS.
 
1.4 Các thuộc tính định dạng quan trọng của CSS:<a name="vt"></a>  
   - `color:` Thuộc tính này dùng để thiết lập màu chữ cho phần tử. Xác định giá trị của thuộc tính theo:
      - Tên màu
      - Giá trị Hex
      - Giá trị RGB
   - `Background – color:` Thuộc tính thiết lập màu nền cho phần tử. Xác định giá trị thuộc tính theo tên màu, giá trị Hex, giá trị RGB.
   - `Font – size:` Thiết lập kích cỡ chữ cho phần tử. 
   - `Font – family:` Thiết lập kiểu chữ cho phần tử.
   - `Text – align:` Căn lề cho nội dung của phần tử. Có 3 giá trị:
      - left: căn lề cho nội dung nằm bên trái
      - center: căn lề cho nội dung nằm ở giữa
      - right: căn lề cho nội dung nằm bên phải
   - `Border:` Tạo đường viền bao xung quanh phần tử.
   - `Width, height:` Thiết lập chiều rộng và chiều cao cho phần tử. Có thể xác định theo đơn vị px hoặc %.
 #### 2. Những trang có sử dụng CSS <a name="thuchanh"></a>
 
 2.1 Trang [Đăng nhập](/Task1_HTML/login.css):<a name="dn"></a>
   - `margin:` Nó sẽ chỉ định lề cho từng phần tử
      - `margin-right:` Chỉ định lề bên phải
      - `margin-bottom:` Chỉ định lề phía dưới
   - `padding:` Tạo khoản cách xung quanh giữa các phần tử
      - `padding-left:` Chỉ định khoảng cách bên trái
   - `outline:` Nó là một đường kẻ xung quanh phần tử thường nằm ngoài boder
   - `text-decoration:` Chỉ định trang trí được thêm vào văn bản
   - `align-items:` Căn giữa cho tất cả các mục của phần tử
   - `justify-content:` Căn chỉnh các mục có bên trong vùng chứa
   - `display:` Xác định loại hiển thị của thành phần
   - `Width, height:` Thiết lập chiều rộng và chiều cao cho phần tử. Có thể xác định theo đơn vị px hoặc %
   - `border-radius:` Xác định bán kính của các góc của phần tử
   - `Background:` Thuộc tính thiết lập màu nền cho phần tử. Xác định giá trị thuộc tính theo tên màu, giá trị Hex, giá trị RGB
   - `background-size:`Chỉ định kích thước của hình nền
   - `transition:` Xác định quá trình chuyển đổi khi có một hành động
   - `color:` Thuộc tính này dùng để thiết lập màu chữ cho phần tử
   - `position:` Trang web em sử dụng position với giá trị là relative để xác định vị trí tuyệt đối cho thành phần
   - `transform:` Xác định một chuyển đổi 2 chiều hoặc 3 chiều 
   - `cursor:` Hiển thị con trỏ chuột khi di chuyển con trỏ chuột tới thành phần
 
 2.2 Trang [Đăng ký](/Task1_HTML/signup.css):<a name="dk"></a>
   - `margin:` Nó sẽ chỉ định lề cho từng phần tử
         - `margin-right:` Chỉ định lề bên phải
         - `margin-bottom:` Chỉ định lề phía dưới
   - `text-align:` Nó dùng để căn lề ngang cho văn bản
         - `text-align:` Căn đều
   - `padding:` Tạo khoản cách xung quanh giữa các phần tử
         - `padding-left:` Chỉ định khoảng cách bên trái
   - `width:` Đặt chiều rộng cho từng phần tử
   - `height:` Đặt chiều cao cho từng phần tử
   - `transform:` Xác định một chuyển đổi 2 chiều hoặc 3 chiều 
   - `transition:` Xác định quá trình chuyển đổi khi có một hành động
   - `cursor:` Hiển thị con trỏ chuột khi di chuyển con trỏ chuột tới thành phần
   - `border:` Chỉ định loại đường viền để hiển thị
   - `border-radius:` Xác định bán kính của các góc của phần tử
   - `background-size:`Chỉ định kích thước của hình nền
   - `background-repeat:` Đặt nếu / cách một hình nền sẽ được lặp lại
   - `background-position:` Đặt vị trí bắt đầu của hình nền.
   - `align-items:` Căn giữa cho tất cả các mục của phần tử
   - `justify-content:` Căn chỉnh các mục có bên trong vùng chứa
   - `outline:` Nó là một đường kẻ xung quanh phần tử thường nằm ngoài boder
 
 2.3 Trang [Search](/Task1_HTML/search.css):<a name="se"></a>
   - `font-size:` Đặt kích thước cho văn bản
   - `width:` Đặt chiều rộng cho từng phần tử
   - `height:` Đặt chiều cao cho từng phần tử
   - `border:` Chỉ định loại đường viền để hiển thị
   - `border-radius:` Xác định bán kính của các góc của phần tử
   - `box-shadow:` Gắn một hoặc nhiều bóng vào một phần tử
   - `margin:` Nó sẽ chỉ định lề cho từng phần tử
   - `padding:` Tạo khoản cách xung quanh giữa các phần tử
   - `float-left:` Hiển thị bên trái vùng chứa của nó
   - `margin-top:` Chỉ định lề phía trên
   - `margin-left:` Chỉ định lề bên trái
   - `margin-bottom:` Chỉ định lề phía dưới
   - `text-align:` Nó dùng để căn lề ngang cho văn bản
   - `color:` Thuộc tính này dùng để thiết lập màu chữ cho phần tử
 
 2.4 Trang [Upload](/Task1_HTML/upload.css):<a name="up"></a>
   - `box-sizing:` Xác định cách tính chiều rộng và chiều cao của một phần tử: chúng có bao gồm phần đệm và đường viền hay không
   - `Font – family:` Thiết lập kiểu chữ cho phần tử
   - `font-size:` Đặt kích thước cho văn bản
   - `-webkit-font-smoothing:` Được sử dụng trong trình duyệt webkit để đảm bảo văn bản đẹp trên tiêu đề
   - `Background – color:` Thuộc tính thiết lập màu nền cho phần tử. Xác định giá trị thuộc tính theo tên màu, giá trị Hex, giá trị RGB
   - `Width, height:` Thiết lập chiều rộng và chiều cao cho phần tử. Có thể xác định theo đơn vị px hoặc %
   - `border:` Chỉ định loại đường viền để hiển thị
   - `display:` Xác định loại hiển thị của thành phần
   - `margin:` Nó sẽ chỉ định lề cho từng phần tử
   - `align-items:` Căn giữa cho tất cả các mục của phần tử
   - `flex:` Để tất cả các mục linh hoạt có cùng độ dài
   - `padding:` Tạo khoản cách xung quanh giữa các phần tử
   - `color:` Thuộc tính này dùng để thiết lập màu chữ cho phần tử
   - `font-weight:` Đặt cách các ký tự dày hoặc mỏng trong văn bản sẽ được hiển thị
   - `text-decoration:` Chỉ định trang trí được thêm vào văn bản
   - `border-bottom:` Đặt kiểu của đường viền dưới cùng cho các phần tử
   - `border-radius:` Xác định bán kính của các góc của phần tử
   - `border-collapse:` Đặt liệu các đường viền bảng nên thu gọn thành một đường viền duy nhất hay được phân tách như trong HTML chuẩn
   - `vertical-align:` Thiết lập căn chỉnh theo chiều dọc của một phần tử
   - `align-items:` Căn giữa cho tất cả các mục của phần tử
 
 2.5 Trang [Bình luận](/Task1_HTML/comments.css):<a name="cmt"></a>
   - `justify-content:` Căn chỉnh các mục có bên trong vùng chứa
   - `display:` Xác định loại hiển thị của thành phần
   - `border-bottom:` Đặt kiểu của đường viền dưới cùng cho các phần tử
   - `padding:` Tạo khoản cách xung quanh giữa các phần tử   
   - `margin-bottom:` Chỉ định lề phía dưới
   - `Background – color:` Thuộc tính thiết lập màu nền cho phần tử. Xác định giá trị thuộc tính theo tên màu, giá trị Hex, giá trị RGB
   - `Width, height:` Thiết lập chiều rộng và chiều cao cho phần tử. Có thể xác định theo đơn vị px hoặc %
   - `border:` Chỉ định loại đường viền để hiển thị
   - `font-size:` Đặt kích thước cho văn bản
   - `color:` Thuộc tính này dùng để thiết lập màu chữ cho phần tử
   - `text-decoration:` Chỉ định trang trí được thêm vào văn bản
   - `border-radius:` Xác định bán kính của các góc của phần tử
   - `font-weight:` Đặt cách các ký tự dày hoặc mỏng trong văn bản sẽ được hiển thị
   - `margin-top:` Chỉ định lề phía trên
   - `cursor:` Hiển thị con trỏ chuột khi di chuyển con trỏ chuột tới thành phần
   - `padding-top:` Chỉ định khoảng cách phía trên
   - `padding-left:` Chỉ định khoảng cách bên trái
   
