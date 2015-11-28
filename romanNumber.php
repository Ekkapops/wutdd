<?php
//  class RomanNumber
  //{
    function convert($number)
    {
        $str = "";
        if($number == 100){
          $number = $number-100;
          $str .= "C";
        }

        if($number >= 90){
          $number = $number-90;
          $str .= "XC";
        }

        if($number >= 80){
          $number = $number-80;
          $str .= "LXXX";
        }

        if($number >= 70){
          $number = $number-70;
          $str .= "LXX";
        }

        if($number >= 60){
          $number = $number-60;
          $str .= "LX";
        }

        if($number >= 50){
          $number = $number-50;
          $str .= "L";
        }

        if($number >= 40){
          $number = $number-40;
          $str .= "XL";
        }

        if($number >= 30){
          $number = $number-30;
          $str .= "XXX";
        }

        if($number >= 20){
          $number = $number-20;
          $str .= "XX";
        }

        if($number >= 10){
          $number = $number-10;
          $str .= "X";
        }

          switch ($number) {
            case 1: $str .= "I"; break;
            case 2: $str .= "II"; break;
            case 3: $str .= "III"; break;
            case 4: $str .= "IV"; break;
            case 5: $str .= "V"; break;
            case 6: $str .= "VI"; break;
            case 7: $str .= "VII"; break;
            case 8: $str .= "VIII"; break;
            case 9: $str .= "IX"; break;
          }

        return $str;
    }

//  }
echo convert(99);

?>
