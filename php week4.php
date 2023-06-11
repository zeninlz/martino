 <?php 
 for($si = 0 ; $si < 50; $si++);
 echo $si."<br>"; 

 $myArray = array ("martino","moes","lucas","younus","yessin","mark","henk","geert", "chris","tom");

 foreach ($myArray as $si){
    echo $si."<br>";
}
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni',
 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

 for ($si = 0; $si < count($maanden); $si++){
    echo "maand".($si+1)." is maand".'<br>';
 }






 ?>