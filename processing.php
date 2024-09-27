<?php

session_start();

class Force {
    
    private $table = 'user';
    protected $dsn = "mysql:host=localhost;dbname=force_db;charset=utf8";
    protected $username = 'root';
    protected $password = "";
    protected $dbh;
    
    //データベース接続関数
    public function __construct(){
        try {
            $this->dbh = new PDO($this->dsn, $this->username, $this->password);
            // return "データベース接続成功";
        } catch (PDOException $e) {
            // return "データベース接続失敗";
        }
    }

    //ユーザー登録
    public function signup($content) {

        $password = password_hash($content['password'], PASSWORD_DEFAULT); // パスワード暗号化
        $sql = "INSERT INTO $this->table (user_id, username, email_address, password, year_id) VALUES (NULL, :username, :email, :password, :year)";

        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindParam(':username', $content['username']);
            $stmt->bindParam(':email', $content['email']);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':year', $content['year']);
            if ($stmt->execute()) {
                $data = '登録成功';
                $_SESSION['username'] = $content['username'];
            } else {
                $data = '登録失敗';
            }
            return $data;
        } catch (PDOException $e) {
            // db接続失敗したらログにエラーメッセージ
            error_log($e->getMessage());
            $data = "データベース接続失敗";
            return $data;
        }
    }

    //メンター検索
    function view_mentor() {
        $sql = "SELECT * FROM {$this->table}";
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            // db接続失敗したらログにエラーメッセージ
            error_log($e->getMessage());
            $data = "データベース接続失敗";
            return $data;
        }
    }

    //メンバー一覧
    function view_member($content) {
        $sql = "SELECT * FROM {$this->table} WHERE year_id = :year";
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindParam(':year', $content['year'], PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            // db接続失敗したらログにエラーメッセージ
            error_log($e->getMessage());
            $data = "データベース接続失敗";
            return $data;
        }
    }

    // ログイン
    // public function login($content) {
        
    // }

    //プロジェクト検索
    function view_projects() {
        $sql = "SELECT * FROM projects";
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $e) {
            // db接続失敗したらログにエラーメッセージ
            error_log($e->getMessage());
            $data = "データベース接続失敗";
            return $data;
        }
    }
    //プロジェクト作成
    function project_post($content) {
        $sql = "INSERT INTO projects VALUES(NULL, :name, :description, :goal, :member, :rule, :reward, :contact, :username, :img)";
        try {
            $stmt = $this->dbh->prepare($sql);
            $stmt->bindParam(':name', $content['name']);
            $stmt->bindParam(':description', $content['description']);
            $stmt->bindParam(':goal', $content['goal']);
            $stmt->bindParam('member', $content['member']);
            $stmt->bindParam(':rule', $content['fule']);
            $stmt->bindParam(':reward', $content['reward']);
            $stmt->bindParam(':contact', $content['contact']);
            $stmt->bindParam(':username', $_SESSION['username']);
            $stmt->bindParam(':img', $content['img']);
            if ($stmt->execute()) {
                $data = '登録成功';
                // $_SESSION['username'] = $content['username'];
            } else {
                $data = '登録失敗';
            }
            return $data;
        } catch (PDOException $e) {
            // db接続失敗したらログにエラーメッセージ
            error_log($e->getMessage());
            $data = "データベース接続失敗";
            return $data;
        }
    //     // $sql = "select id from $this->table where username='".$_SESSION['username']."'";
    //     $user = $_SESSION['username'];
    //     $sql = "INSERT INTO projects VALUES(0,'".$content['name']."','".$content['description']."','".$content['goal']."','".$content['member']."' ,'".$content['rule']."', '".$content['reward']."', '".$content['contact']."', '".$user."', '".$content['img']."')";
    //     if ($this->db->query($sql)) {
    //         $data = '登録成功';
    //     } else {
    //         $data = '登録失敗';
    //     }
    //     return $data;
    }
}
?>