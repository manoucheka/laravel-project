<?php 
class Availability{
  public static function display ($availability) {
     if($availability ==0) {

            echo " Out of stock";                 

              } else if ($availability==1) {

              echo " in Stock";
              
           }
}


public static function displayClass ($availability) {
     if($availability ==0) {

            echo " Outofstock";                 

              } else if ($availability==1) {

              echo " instock";
              
           }
}


}