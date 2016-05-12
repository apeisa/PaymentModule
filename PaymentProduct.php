<?php

class PaymentProduct extends WireData {
  public function __construct($title, $amount, $quantity = 1, $tax_percentage = null) {
    $this->title = $title;
    $this->amount = $amount;
    $this->quantity = $quantity;
    $this->tax_percentage = $tax_percentage;
    $this->total = $amount * $quantity;
  }
}
