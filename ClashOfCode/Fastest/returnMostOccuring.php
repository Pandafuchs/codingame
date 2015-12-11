//Enter your code here, enjoy!
error_reporting ( 0 );

$myarr = array(2,3,4,5,6,6,2,2,3,1,7,4,4,4,7,5);
$countArray = array();

foreach( $myarr as $key => $value ){
    $countArray[$value] = $countArray[$value] + 1;
}

echo array_search ( max($countArray) , $countArray  );
