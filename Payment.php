<?php

abstract class PaymentModule extends WireData implements Module, ConfigurableModule {

  protected $amount = 0;
  protected $currency = '';
  protected $processUrl = '';
  protected $successUrl = '';
  protected $failureUrl = '';
  protected $cancelUrl = '';
  protected $failureReason = '';
  protected $customerEmail = '';

  /**
   * Process the payment
   * @return bool true|false depending if the payment was successful
   */
  public function processPayment() {

  }

  /**
   * Set the payment amount in cents. So one dollar would be 100
   * @param int $amount in cents
   */
  public function setAmount($amount) {
    $this->amount = $amount;
  }
  
  /**
   * Set description of the products/service that the payment is for
   * @param string $desc 
   */
  public function setDescription($desc) {
    $this->description = $desc;
  }

  /**
   * Set currency code for the payment in uppercase
   * @param string $currency ie. USD|EUR
   */
  public function setCurrency($currency) {
    $this->currency = $currency;
  }

  /**
   * Set the url, where payment will be processed. This will be the url where you will load this same 
   * module and call $payment->processPayment()
   * @param string $url 
   */
  public function setProcessUrl($url) {
    $this->processUrl = $url;
  }

  /**
   * Set the url where payment processor redirects user if payment fails.
   * @param string $url 
   */
  public function setFailureUrl($url) {
    $this->failureUrl = $url;
  }

  /**
   * Set the url where payment processor redirects user if user cancelles the payment. Usually same as failureUrl
   * @param string $url 
   */
  public function setCancelUrl($url) {
    $this->cancelUrl = $url;
  }

  /**
   * Set the reason of failure
   * @param string $string 
   */
  public function setFailureReason($string) {
    $this->failureReason = $string;
  }

  /**
   * Returns the reason of failure
   * @return string
   */
  public function getFailureReason() {
    return $this->failureReason;
  }

  /**
   * Set the customers email
   * @param string $email 
   */
  public function setCustomerEmail($email) {
    $this->customerEmail = $email;
  }

  /**
   * Returns the client friendly title for the payment
   * @return string
   */
  public function getTitle()  {

  }
}

interface PaymentModuleEmbed {
  /* Embed method returns string containing the embed html (usually <script> tag or like) */
  public function embed();
}

interface PaymentModuleRedirect {
  /* Redirect method makes the actual redirect */
  public function redirect();
}