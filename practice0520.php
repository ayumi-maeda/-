<?php 
 

  $favorite_singer1 = array('name' => 'Ed Sheeran', 'grammy' => 'won');
  $favorite_singer2 = array('name' => 'Avril Lavigne', 'grammy' => 'won');
  $favorite_singer3 = array('name' => 'Adele', 'grammy' => 'won');
  $favorite_singer4 = array('name' => 'Charlie Puth', 'grammy' => 'nominated');
  $favorite_singer5 = array('name' => 'Beyonce', 'grammy' => 'won');
  $favorite_singer6 = array('name' => 'Micheal Buble', 'grammy' => 'won');
  $favorite_singer7 = array('name' => 'Bruno Mars', 'grammy' => 'won');
  $favorite_singer8 = array('name' => 'Shota Shimizu', 'grammy' => 'none');
  $favorite_singer9 = array('name' => 'Taylor Swift', 'grammy' => 'won');
  $favorite_singer10 = array('name' => 'One Ok Rock', 'grammy' => 'none');
  $favorite_singer11= array('name' => 'Little Mix', 'grammy' => 'none');
  $favorite_singer12 = array('name' => 'Namie Amuro', 'grammy' => 'none');
  $favorite_singer13 = array('name' => 'Shinee', 'grammy' => 'none');
  $favorite_singer14 = array('name' => 'Rihana', 'grammy' => 'won');

// 2次元
  // $female = array($favorite_singer2, $favorite_singer3, $favorite_singer5, $favorite_singer9, $favorite_singer11, $favorite_singer12, $favorite_singer14);
  // $male = array($favorite_singer1, $favorite_singer4, $favorite_singer6, $favorite_singer7, $favorite_singer8, $favorite_singer10, $favorite_singer13);


  $USA = array($favorite_singer4, $favorite_singer5, $favorite_singer7, $favorite_singer9,);
  $The_UK = array($favorite_singer1, $favorite_singer3, $favorite_singer11);
  $Canada = array($favorite_singer2, $favorite_singer6);
  $Japan = array($favorite_singer8, $favorite_singer10, $favorite_singer12);
  $Korea = array($favorite_singer13);
  $Barbados = array($favorite_singer14);

  // ３次元

  $America = array($USA, $The_UK, $Canada, $Barbados);
  $Asia = array($Japan, $Korea);
  $Europe = array($The_UK);
  
  // 4次元

  $asian =array($Asia);
  $western = array($America, $Europe);

  // 5次元
  $Singers = array($Black_hair, $Light_color_hair);


  echo '私の好きな歌手は'. $Singers[1][1][0][0]['name'].'です。<br>';
  echo 'This singer got '.$Singers[1][1][0][0]['grammy'].'grammy awards<br>';
  echo 'この歌手は'.$Singers[1][0][0][3]['name'].'の親友です。<br>';
  echo '最近コードを書きながら'.$Singers[1][0][2][1]['name'].'を聞いています。<br>';
  echo '昔は'.$Singers[0][0][1][0]['name'].'が好きでしたが、今は全然聞いてません。<br>';
?>