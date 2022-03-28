# <div align="center"><p> HTML-CSS </p></div>
 ## Họ và tên: Mai Thị Hoàng Yến
 ## Ngày báo cáo: Ngày 24/3/2022
 ### MỤC LỤC
  1. [Tìm hiểu về CSS](#lythuyet)
  
      1.1 [Khái niệm HTML](#kn)
     
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
      
#### 1. Tìm hiểu về CSS <a name="lythuyet"></a>
1.1 Khái niệm CSS:<a name="kn"></a>
   - Cascading Style Sheets, hay còn gọi là CSS, là một ngôn ngữ tạo phong cách cho trang Web. Về mặt ngữ nghĩa, ta có thể hiểu như sau:
      - Cascading là cách làm việc của CSS.
      - Style Sheets điều khiển cách hiển thị các nội dung của trang web.
   - CSS là một ngôn ngữ dùng để định dạng các phần tử HTML như chỉnh kích cỡ, font chữ, màu chữ, màu nền, đường viền, hình nền,…
1.2 Cách sử dụng CSS:<a name="kn"></a>
   - Chúng ta sẽ có ba cách sử dụng CSS trong HTML là:
     - Inline: mã CSS viết tại thuộc tính Style của phần tử HTML
     - Internal: mã CSS trong chính văn bản HTML, nằm trong khối thẻ <style>
     - External: mã CSS ở một file riêng biệt sau đó nạp vào trong HTML bằng phần tử <link>
1.3 Vai trò CSS:<a name="kn"></a> 
   - Chúng ta cần dùng CSS vì nó cho phép bạn định nghĩa kiểu và cách hiển thị các phần tử HTML. Từ đó, CSS sẽ hỗ trợ bạn phân tách nội dung và cách trình bày trang. Nếu chúng ta chỉ sử dụng HTML thì việc định dạng phần tử, kiểu phần tử phải ở cùng một vị trí với phần tử trong văn bản, điều này thật sự khó cho việc bảo trì.
   - Các định dạng sẽ được loại bỏ khỏi văn bản HTML, định dạng được lưu vào một file CSS khi sử dụng CSS.
 
1.4 Các thuộc tính định dạng quan trọng của CSS:<a name="kn"></a>  
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
 2.1 Trang [Đăng nhập](/Task1_HTML/login.css):<a name="kn"></a>
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
 2.2 Trang [Đăng ký](/Task1_HTML/signup.css):<a name="kn"></a>
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
 2.3 Trang [Search](/Task1_HTML/search.css):<a name="kn"></a>
 
 2.4 Trang [Upload](/Task1_HTML/upload.css):<a name="kn"></a>
 
 2.5 Trang [Bình luận](/Task1_HTML/comments.css):<a name="kn"></a>
 
 
     
      
   3.2 Trong project của em có sử dụng những thẻ CSS như sau: 
      - margin: Nó sẽ chỉ định lề cho từng phần tử
         - `margin-top:` Chỉ định lề phía trên
         - `margin-left:` Chỉ định lề bên trái
         - `margin-right:` Chỉ định lề bên phải
         - `margin-bottom:` Chỉ định lề phía dưới
      - text-align: Nó dùng để căn lề ngang cho văn bản
         - `text-align:` Căn đều
         - `text-left:` Căn trái
         - `text-right:` Căn phải
      - padding: Tạo khoản cách xung quanh giữa các phần tử
         - `padding-top:` Chỉ định khoảng cách phía trên
         - `padding-left:` Chỉ định khoảng cách bên trái
         - `padding-right:` Chỉ định khoảng cách bên phải
         - `padding-bottom:` Chỉ định khoảng cách phía dưới
      - width: Đặt chiều rộng cho từng phần tử
      - height: Đặt chiều cao cho từng phần tử
      - background: Đặt màu nền cho phần tử
      - float: Sử dụng để định vị và định dạng nội dung
         - `float-left:` Hiển thị bên trái vùng chứa của nó
         - `float-right:` Hiển thị bên phải vùng chứa của nó
         - `float-none:` Hiển thị mặc định
      - color: Đặt màu cho văn bản
      - font-size: Đặt kích thước cho văn bản
      - text-decoration: Thêm các dòng trang trí cho văn bản như: gạch ngang hay gạch dưới
      - list-style: Để đánh dấu mục danh sách
      - line-height: Dùng để thiết lập chiều cao giữa các dòng
      - border: Chỉ định loại đường viền để hiển thị
      - overflow: Trong website của em sử dụng overflow ở dạng hiden để ẩn đi nội dụng văn bản quá nhiều
      - font-weight: Tô đậm văn bản 
      - outline: Nó là một đường kẻ xung quanh phần tử thường nằm ngoài boder
      - align-items: Căn giữa cho tất cả các mục của phần tử
      - justify-content: Căn chỉnh các mục có bên trong vùng chứa
      - display: Xác định loại hiển thị của thành phần
      - transition: Xác định quá trình chuyển đổi khi có một hành động
      - position: Trang web em sử dụng position với giá trị là relative để xác định vị trí tuyệt đối cho thành phần
      - transform: Xác định một chuyển đổi 2 chiều hoặc 3 chiều 
      - cursor: Hiển thị con trỏ chuột khi di chuyển con trỏ chuột tới thành phần
