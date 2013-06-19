
/*Fill with your info and run*/






<?php
$con=mysqli_connect("localhost","database_user","database_password","kdatabse_name");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



$filenames=glob("wallpaper/*.*"); /*image of files on this folder*/
$count=count($filenames); /*Count files number*/
$i=0;
$categoryString="popular"; /*files category on databse*/
$totalView="0";
$totalDownload="0";
$currentRating="0";

while($i<$count)
  {
        
 echo  $filelink="http://example.com/gallery/".$filenames[$i];
 
 
  @mysqli_query($con,"INSERT INTO gallery_table (category, image_url, total_view, total_download,current_rating)
                   VALUES ('$categoryString', '$filelink ','$totalView','$totalDownload','$currentRating')");


echo "<br>...File update to database successfull!<br>";

$i++;
  }
?>
