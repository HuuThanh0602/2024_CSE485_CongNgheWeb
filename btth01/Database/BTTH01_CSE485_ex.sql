
-- truy vấn dữ liệu --
SELECT b.ma_bviet, b.tieude, b.tenbhat
FROM baiviet b
JOIN theloai t ON b.ma_tloai = t.ma_tloai
WHERE t.ten_tloai = 'Nhạc trữ tình';

SELECT b.ma_bviet, b.tieude, b.tenbhat
FROM baiviet b
JOIN tacgia tg ON b.ma_tgia = tg.ma_tgia
WHERE tg.ten_tgia = 'Nhacvietplus';


SELECT t.ma_tloai, t.ten_tloai
FROM theloai t
LEFT JOIN baiviet b ON t.ma_tloai = b.ma_tloai
WHERE b.ma_bviet IS NULL;

SELECT b.ma_bviet, b.tieude, b.tenbhat, tg.ten_tgia, t.ten_tloai, b.ngayviet
FROM baiviet b
JOIN tacgia tg ON b.ma_tgia = tg.ma_tgia
JOIN theloai t ON b.ma_tloai = t.ma_tloai;


SELECT t.ten_tloai, COUNT(b.ma_bviet) AS so_bai_viet
FROM theloai t
JOIN baiviet b ON t.ma_tloai = b.ma_tloai
GROUP BY t.ten_tloai
HAVING COUNT(b.ma_bviet) = (
    SELECT MAX(bai_viet_count)
    FROM (
        SELECT COUNT(ma_bviet) AS bai_viet_count
        FROM baiviet
        GROUP BY ma_tloai
    ) AS subquery
);