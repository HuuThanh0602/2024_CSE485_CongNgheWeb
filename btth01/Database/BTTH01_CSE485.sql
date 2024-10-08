﻿CREATE DATABASE BTTH01_CSE485;

USE BTTH01_CSE485;

CREATE TABLE tacgia(
	ma_tgia int  not null primary key,
	ten_tgia varchar(100) not null ,
	hinh_tgia varchar(100)
);

create Table theloai(
	ma_tloai int not null primary key ,
	ten_tloai varchar(50) not null
);

create table baiviet(
	ma_bviet int not null primary key,
	tieude varchar(200) not null,
	tenbhat varchar(100) not null,
	ma_tloai int not null,
	tomtat text not null,
	noidung text,
	ma_tgia int not null,
	ngayviet datetime default current_timestamp not null,
	hinhthanh varchar(200),
	FOREIGN KEY (ma_tloai) REFERENCES theloai(ma_tloai),
    FOREIGN KEY (ma_tgia) REFERENCES tacgia(ma_tgia)
);

CREATE TABLE Users(
	users VARCHAR(50)  PRIMARY KEY NOT NULL,
	passwords VARCHAR (50),
	user_Permissions VARCHAR(50)
	);

INSERT INTO Users VALUES ('admin','admin','admin');
INSERT INTO Users VALUES ('client','1','client');

-- Chèn dữ liệu vào bảng theloai
INSERT INTO theloai VALUES (1, 'Nhạc trẻ');
INSERT INTO theloai VALUES (2, 'Nhạc trữ tình');
INSERT INTO theloai VALUES (3, 'Nhạc cách mạng');
INSERT INTO theloai VALUES (4, 'Nhạc thiếu nhi');
INSERT INTO theloai VALUES (5, 'Nhạc quê hương');
INSERT INTO theloai VALUES (6, 'POP');
INSERT INTO theloai VALUES (7, 'Rock');
INSERT INTO theloai VALUES (8, 'R&B');


-- Chèn dữ liệu vào bảng tacgia (đảm bảo rằng không có bản ghi trùng lặp)
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (1, 'Nhacvietplus');
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (2, 'Sưu tầm');
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (3, 'Sandy');
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (4, 'Lê Trung Ngân');
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (5, 'Khánh Ngọc');
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (6, 'Night Stalker');
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (7, 'Phạm Phương Anh');
INSERT INTO tacgia (ma_tgia, ten_tgia) VALUES (8, 'Tâm tình');


-- Chèn dữ liệu vào bảng baiviet (đảm bảo rằng không có bản ghi trùng lặp và tất cả các khóa ngoại đều hợp lệ)
INSERT INTO baiviet (ma_bviet, tieude, tenbhat, ma_tloai, tomtat, ma_tgia, ngayviet, hinhthanh) VALUES
(1, 'Lòng mẹ', 'Lòng mẹ', 2, 'Và mẹ ơi đừng khóc nhé! Cả đời này mẹ đã khóc nhiều lắm rồi, hãy cười lên vì con đã trưởng thành! Con sẽ lại về dậy sớm nấu cơm cho mẹ, nấu nước cho mẹ tắm như ngày xưa. "Dù cho vai nắng nhưng lòng thương chẳng nhạt màu, vẫn mơ quay về vui vầy dưới bóng mẹ yêu"', 1, '2012-07-23', 'longme'),
(2, 'Cảm ơn em đã rời xa anh', 'Vết mưa', 2, 'Cảm ơn em đã cho anh những tháng ngày hạnh phúc, cho anh biết yêu và được yêu. Em cho anh được nếm trải hương vị ngọt ngào của tình yêu nhưng cũng đầy đau khổ và nước mắt. Những tháng ngày đó có lẽ suốt cuộc đời anh không bao giờ quên', 3, '2012-02-12','vetmua'),
(3, 'Cuộc đời có mấy ngày mai?', 'Phôi pha', 2, 'Đêm nay, trời quang mây tạnh, trong người nghe hoang vắng và tôi ngồi đây "Ôm lòng đêm, Nhìn vầng trăng mới về" mà ngậm ngùi "Nhớ chân giang hồ. Ôi phù du, từng tuổi xuân đã già"', 4, '2014-03-13','phoipha'),
(4, 'Quê tôi!', 'Quê hương', 5, 'Quê hương là gì mà chở đầy kí ức nhỏ xinh. Có đám trẻ nô đùa bên nhau dưới gốc ổi nhà bà Năm giữa trưa nắng gắt chỉ để chờ bà đi vắng là hái trộm. Có hai anh em tôi bì bõm lội sình bắt cua đem về nhà cho mẹ nấu canh, nấu cháo… Có ba chị em tôi lục đục tự nấu ăn khi mẹ vắng nhà. Có anh tôi luôn dắt tôi đi cùng đường ngõ xóm chỉ để em được vui. Có cả những trận cãi nhau nảy lửa của ba anh em nữa…', 5, '2014-02-20','quehuong'),
(5, 'Đất nước', 'Đất nước', 5, 'Đã bao nhiêu lần tôi tự hỏi: liệu trên Thế giới này có nơi nào chiến tranh tang thương mà lại rất đổi anh hùng như nước mình không? Liệu có mảnh đất nào mà mỗi tấc đất hôm nay đã thấm máu xương của những thế hệ đi trước nhiều như nước mình không? Và, liệu có một đất nước nào lại có nhiều bà mẹ đau khổ nhưng cũng hết sức gan góc như đất nước mình không?', 1, '2010-05-25','datnuoc'),
(6, 'Hard Rock Hallelujah', 'Hard Rock Hallelujah', 7, 'Những linh hồn đang lạc lối, mù quáng mất phương hướng trong cõi trần gian đầy nghiệt ngã hãy nên lắng nghe "Hard Rock Hallelujah" để có thể quên tất cả mọi thứ để tìm về đúng bản chất sâu thẳm nhất trong tâm hồn chính mình!', 6, '2013-09-12','hardrock'),
(7, 'The Unforgiven', 'The Unforgiven', 7, 'Lâu lắm rồi mới nghe lại The Unforgiven II, vì bài này không phải là bài mà tôi thích. Anh bạn tôi lúc trước, đi đâu cũng nghêu ngao bài này ấy, chỉ tại vì hắn đang... thất tình mà lị. Mà sao Metallica có The Unforgiven rồi lại có thêm bài này chi nữa vậy không biết nữa, làm cho tôi cảm thấy hình như hơi bị đúng so với tâm trạng của tôi lúc này.', 1, '2010-05-25','TheUnforgiven'),
(8, 'Nơi tình yêu bắt đầu', 'Nơi tình yêu bắt đầu', 1, 'Nhiều người sẽ nghĩ làm gì có yêu nhất và làm gì có yêu mãi. Ừ! Chẳng có gì là mãi mãi cả, vì chúng ta không trường tồn vĩnh cửu', 1, '2014-02-03','noitinhyeubatdau'),
(9, 'Love Me Like There’s No Tomorrow', 'Love Me Like There’s No Tomorrow', 8, 'Nếu ai đã từng yêu Queen, yêu cái chất giọng cao, sắc sảo như một vết cắt thật ngọt ẩn giấu bao cảm xúc mãnh liệt của Freddie chắc không thể không "điêu đứng" mỗi khi nghe Love Me Like There’s No Tomorrow.', 1, '2013-02-26','loveme'),
(10, 'Stronger', 'Stronger', 7, 'Em không phải là người giỏi giấu cảm xúc, nhưng em lại là người giỏi đoán biết cảm xúc của người khác vậy nên đừng cố nói nhớ em, rằng mọi thứ chỉ là do hoàn cảnh. Và cũng đừng dối em rằng anh đã từng yêu em. Em nhắm mắt cũng cảm nhận được mà, thật đấy', 2, '2013-08-21','stronger'),
(11, 'Ôi Cuộc Sống Mến Thương', 'Ôi Cuộc Sống Mến Thương', 5, 'Có một câu nói như thế này "Âm nhạc là một cái gì khác lạ mà hầu như tôi muốn nói nó là một phép thần diệu.Vì nó đứng giữa tư tưởng và hiện tượng, tinh thần và vật chất, mọi thứ trung gian mơ hồ thế đó mà không là thế đó giữa các sự vật mà âm nhạc hòa giải"', 2, '2011-10-09','csmt');






