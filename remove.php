<?php
    $text = $_GET['text'];
    $rm = new Remove($text);

   // echo $rm->remove99();
    //echo $rm->remove98();

    echo $rm->remove98($rm->remove99());

    
    class Remove{
       var $str;
       //Used in the 1st Function 1*3*5*98*8*1*12*98     => output => 1*3*8*1  

       //Usedin the 2nd Function 1*3*5*99*8*3 =>    output => 8*3
       function __construct($s)
       {
        
         $this->str = $s;

       }
       //1st Function
       public function remove99(){
        $explodeStr = explode("*",$this->str);
        while(array_search("99",$explodeStr) != false){
             $firstIndex = array_search("99",$explodeStr);
             $explodeStr = array_slice($explodeStr,$firstIndex+1);

        }
        return join("*",$explodeStr);

       }
       //2nd Function
       public function remove98(){
        $explodeStr = explode("*",$this->str);
        while(array_search("98",$explodeStr) != false){
             $firstIndex = array_search("98",$explodeStr);
             array_splice($explodeStr,$firstIndex-1,2);

        }
        return join("*",$explodeStr);

// We included this file to help us learn the simple logic behind ussd algorithmn,
  // --- when a user chooses different options on the menu and how the system works in the backgroung

       }
    }


    ?>
