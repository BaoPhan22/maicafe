<?php
function getNamePage($text)
{
    return $text;
}

function pdo_get_connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Kết nối thành công!";
        return $conn;
    } catch (PDOException $e) {
        echo "Lỗi kết nối: " . $e->getMessage();
    }
}

//sql
//sql,...,id
//"insert into loai(ten_loai) values(?)","Laptop"
//"update loai set ten_loai=? where ma_loai=?", "Laptop", "1"
//"delete from loai where ma_loai=?", "1"

// PDO::query – Chạy câu lệnh sql (thường là select), trả về đối tượng chứa dữ liệu
// PDOStatement::fetch –  Lấy ra 1 dòng dữ liệu, kết quả là 1 array
// PDOStatement::fetchAll –  Lấy ra tất cả các dòng dữ liệu , kết quả là 1 array
// PDOStatement::fetchObject – Lấy ra 1 dòng dữ liệu row and returns it as an object.
// PDO::exec – Chạy câu lệnh sql, (thường là insert, update, delete) , trả về số dòng ảnh hưởng
// PDOStatement::rowCount – Trả về số dòng ảnh hưởng bởi câu lệnh sql vừa chạy. Dùng để đểm số dòng dữ liệu lấy được chẳng hạn
// PDO::prepare –  Tạo đối tượng statement để chuẩn bị thực thi sau đó bởi hàm execute
// PDOStatement::execute –  thực thi statement đã tạo trước
// PDO::lastInsertId –  trả về id của record mới vừa chèn  vào table
// PDO::commit –  cho tác dụng các thực thi trong transaction
// PDO::rollBack – Thu hồi lại transaction
function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
//truy vấn nhiều dữ liệu
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
//truy vấn 1 dữ liệu
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
