<?php

class PaymentProduct extends WireData {
  public function __construct($title, $amount, $quantity = 1, $tax = null) {
    $this->title = $title;
    $this->amount = $amount;
    $this->quantity = $quantity;
    $this->tax = $tax;
    $this->total = $amount * $quantity;
  }
}
