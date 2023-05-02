<?php
include "koneksi2.php";
$Q = mysqli_query($koneksi, "SELECT * FROM wisata where id_wisata=".$id)or die(mysqli_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}

?>