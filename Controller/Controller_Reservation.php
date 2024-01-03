<?php
include_once 'Model\front\model_Reservation.php' ; 

class Controller_reservation{



    function addReservation() {
        extract($_GET) ; 
        print_r($_GET) ; 


        
        $Adminclient = new Adminclient() ; 
        $Adminclient->InsertClient($emailClient,null,1,0,0) ;

        $Adminreservation = new Adminreservation() ; 
        $Adminreservation->Insertreservation($emailClient,$trip_Id,$number_seat) ; 

        //  include_once 'View\front\addCard.php';


    }



   
}