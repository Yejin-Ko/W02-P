<? php
  $ 링크 = mysqli_connect ( 'localhost' , 'root' , 'YJ674700' , 'fav' );
  $ query = "선택 * 음악에서" ;
  $ 결과 = mysqli_query ( $ 링크 , $ 쿼리 );
  $ 목록 = '' ;
  while ( $ row = mysqli_fetch_array ( $ result )) {
    $ 목록 = $ 목록 . "<li> <a href=\"index.php?id={$row['id']}\"> {$ row [ 'title']} </a> </ li>" ;
  }

  $ 기사 = 배열 (
    'title' => '환영합니다' ,
    'mood' => '이 노래의 분위기는 ...'
  );

  if ( isset ( $ _GET [ 'id' ])) {
    $ query = "SELECT * FROM music WHERE id = {$ _ GET [ 'id']}" ;
    $ 결과 = mysqli_query ( $ 링크 , $ 쿼리 );
    $ 행 = mysqli_fetch_array ( $ 결과 );
    $ 기사 = 배열 (
      'title' => $ row [ 'title' ],
      '기분' => $ row [ '기분' ]
    );
  }

 ?>

<! DOCTYPE html >
 < html >
   < 머리 >
     < 메타  문자 세트 = " utf-8 " >
     < title > 내 재생 목록 </ title >
   </ 머리 >
   < 본체 >
     < H1 > < HREF = " index.php를 " > MY FAVORITE SONG </ > </ H1 > 
     < ol > <? =  $ 목록  ?> </ ol >
     < form  action = " process_create.php " method = " POST " >
       < p > < 입력  유형 = " 텍스트 " 이름 = " 제목 " 자리 표시 자 = " 제목 " > </ p >
       < p > < textarea  name = " mood " placeholder = " mood " > </ textarea > </ p >
       < p > < 입력  유형 = " 제출 " > </ p >
     </ 양식 >
   </ 본문 >
 </ html >
