<?
      header('content-type: text/html; charset=utf-8');
    // 데이터베이스 접속 문자열. (db위치, 유저 이름, 비밀번호)
      $connect=@mysql_connect( "localhost", "root", "gncn") or
          die( "SQL server에 연결할 수 없습니다.");

     mysql_query("SET NAMES UTF8");
   // 데이터베이스 선택
     mysql_select_db("sotonge",$connect);

     $bid = $_POST['u_id'];

     $pida=mysql_fetch_array(mysql_query("SELECT SUBID FROM board_list WHERE BOARDID = '$bid'"));
     $pid= $pida['SUBID'];

  //   echo $pid;
     $result=mysql_query("SELECT SUBNAME FROM sub_list WHERE SUBID = '$pid'");



     if($result)
     {
       $sname = mysql_fetch_array($result);
       echo $sname['SUBNAME'];
     }

     else         //실패시(FALSE)\
     {
          die("mysql query error");
     }

?>
