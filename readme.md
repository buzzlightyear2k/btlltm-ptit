## Bài tập lớn môn Lập trình mạng

### Phần desktop-app

Phần quản lí thông tin và thống kê người dùng: thiết kế và cài đặt trên web (có thể dùng JSP hoặc PHP)

Phần tương tác giữa các người dùng (chát, chơi, thi đấu): thiết kế và cài đặt trên 2 công nghệ: phiên bản dùng socket (giao thức TCP hoặc UDP). Có thể dùng RMI

Đề bài: Game giải toán nhanh thi đấu đối kháng online

• Hệ thống có một server và nhiều client. Server lưu toàn bộ thông tin và dữ liệu.

• Để chơi, người chơi phải login vào tài khoản của mình từ một máy client. Sau khi login thành công, giao diện hiện lên một danh sách các người chơi đang online, mỗi người chơi có các thông tin: tên, tổng số điểm hiện có của người chơi, trạng thái (hoặc đang bận nếu đang chơi với người khác, hoặc đang rỗi nếu không chơi với ai)

• Muốn mời (thách đấu) ai thì người chơi click vào tên của đối thủ đó trong danh sách online.

• Khi bị thách đấu, người chơi có thể chấp nhận (OK), hoặc từ chối (Reject).

• Khi chấp nhận, 2 người chơi sẽ vào chơi với nhau, và server sẽ làm trọng tài. Giao diện chơi gồm một danh sách N câu hỏi toán nhanh theo dạng trắc nghiệm, ô thời gian và nút thoát.

• Server sẽ sinh tự động cùng một đề bài và gửi về cho cả hai đối thủ chơi. Mỗi người chơi phải click chọn các đáp án của các câu hỏi. Khi hoàn thành thì click nút submit bài làm.

Ai đúng hết và nhanh hơn thì giành chiến thắng. Nếu cả hai đều có ít nhất 1 câu sai thì hòa.

• Sau mỗi trận, server sẽ kiểm tra xem ai thắng và gửi kết quả về cho cả 2 đối thủ: thắng 1 điểm, hòa 0.5 điểm, thua 0 điểm.

• Sau mỗi ván, đều có dialog hỏi mỗi người chơi có muốn tiếp tục không. Nếu cả hai tiếp tục thì chơi tiếp, nếu một trong hai đối thủ dừng chơi thì thoát ra và server báo cho người chơi còn lại.

• Kết quả các trận đấu được lưu vào server. Mỗi người chơi đều có thể vào xem bảng xếp hạng các người chơi trong toàn bộ hệ thống, theo lần lượt các tiêu chí: tổng số điểm (giảm dần), trung bình điểm của các đối thủ đã gặp (giảm dần), trung bình thời gian kết thúc trong các trận thắng (tăng dần).