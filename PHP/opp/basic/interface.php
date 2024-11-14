<?php 

interface PaymentProcessorInterface {
  public function processPayment($amount);
}

//=========================================================
class BkashPaymentProcess implements PaymentProcessorInterface {
  public function processPayment($amount){
    //code here...
  }
}
class NogodPaymentProcess implements PaymentProcessorInterface {
  public function processPayment($amount){
    //code here...
  }
}


//=========================================================
class Order {
  protected $paymentProcessor;

  public function __construct(PaymentProcessorInterface $paymentProcessor) {
    $this->paymentProcessor = $paymentProcessor;
  }

  public function checkout($amount) {
    $this->paymentProcessor->processPayment($amount);
    //code to complete the order
  }
}

//==========================================================
$bkashOrder = new Order(new BkashPaymentProcess());
$bkashOrder->checkout(100);

