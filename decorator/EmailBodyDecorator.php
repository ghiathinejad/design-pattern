<?php
require_once 'EmailBody.php';
require_once 'Email.php';
abstract class EmailBodyDecorator implements EmailBody {
    protected $emailBody;
    public function __construct(EmailBody $e) {
        $this->emailBody = $e;
    }
    abstract public function loadBody();
}