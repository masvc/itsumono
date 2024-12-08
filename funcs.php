<?PHP

// DB接続
function db_connect()
{
    try {
        $pdo = new PDO('mysql:dbname=itsumono;host=localhost;charset=utf8', 'root', '');
    } catch (PDOException $e) {
        exit('DB_ConnectError:' . $e->getMessage());
    }
    return $pdo;
}

// SQLエラー
function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('SQL_Error:' . $error[2]);
}

// リダイレクト
function redirect($url)
{
    header('Location: ' . $url);
    exit();
}

// htmlspecialchars
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function sschk()
{
    if (!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()) {
        exit("Login Error");
    } else {
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    }
};
