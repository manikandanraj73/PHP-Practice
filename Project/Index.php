<?php
require_once("User.php");
require_once("Demo.php");
use App\models\User as modelUser;
use App\demo\User as demoUser;
$user= new modelUser();
$user2= new demoUser();

$user-> show();
echo"\n";
$user2->show();

class Payment{
    public function details(){
        echo"payment done\n";
    }

    

}
echo"\n";
class Booking{
    Private Payment $payment;

     public function __construct(Payment $payment){
            $this->payment = $payment;
        }
    public function book(){
        $this->payment->details();
       echo"Booking confirmed\n";
       
    }
    
}
$payment=new Payment();
$booking=new Booking($payment);
$booking->book();
?>
