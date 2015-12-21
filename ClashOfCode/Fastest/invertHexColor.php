<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

$colorHexa = stream_get_line(STDIN, 256, "\n");
$colorHexa = strtoupper($colorHexa);

FUNCTION inverseHex( $color )
{
     $color       = TRIM($color);
     $prependHash = FALSE;
 
     IF(STRPOS($color,'#')!==FALSE) {
          $prependHash = TRUE;
          $color       = STR_REPLACE('#',NULL,$color);
     }
 
     SWITCH($len=STRLEN($color)) {
          CASE 3:
               $color=PREG_REPLACE("/(.)(.)(.)/","\\1\\1\\2\\2\\3\\3",$color);
          CASE 6:
               BREAK;
          DEFAULT:
               TRIGGER_ERROR("Invalid hex length ($len). Must be (3) or (6)", E_USER_ERROR);
     }
 
     IF(!PREG_MATCH('/[a-f0-9]{6}/i',$color)) {
          $color = HTMLENTITIES($color);
          TRIGGER_ERROR( "Invalid hex string #$color", E_USER_ERROR );
     }
 
     $r = DECHEX(255-HEXDEC(SUBSTR($color,0,2)));
     $r = (STRLEN($r)>1)?$r:'0'.$r;
     $g = DECHEX(255-HEXDEC(SUBSTR($color,2,2)));
     $g = (STRLEN($g)>1)?$g:'0'.$g;
     $b = DECHEX(255-HEXDEC(SUBSTR($color,4,2)));
     $b = (STRLEN($b)>1)?$b:'0'.$b;
 
     RETURN ($prependHash?'#':NULL).$r.$g.$b;
}

echo(strtoupper(inverseHex($colorHexa)));
?>