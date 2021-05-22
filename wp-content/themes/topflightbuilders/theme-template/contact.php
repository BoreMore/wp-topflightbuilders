<?php 

include('config.php');

class ContactForm {
    private $to = EMAIL_ADDRESS;

    private $name;
    private $email;
    private $subject;
    private $message;

    private $errors = array();

    public function __construct($postName, $postEmail, $postMessage) {
        $this->name = $postName;
        $this->email = $postEmail;
        $this->subject = "New Estimate Request";
        $this->message = $postMessage;
    }

    public function verifyForm() {
        if (empty($this->name)) {
            array_push($this->errors, array("nameError" => "You must enter your name"));
        }
        if (empty($this->email)) {
            array_push($this->errors, array("emailError" => "You must enter your email"));
        } else if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errors, array("emailError" => "Invalid email format"));
        }
        if (empty($this->message)) {
            array_push($this->errors, array("messageError" => "You must enter a message"));
        }
    }

    public function insertForm() {
        if (empty($this->errors)) {
            $headers = array("Reply-To: " . $this->email,
                "X-Mailer: PHP/" . PHP_VERSION
            );
            $headers = implode("\r\n", $headers);

            $msg = "Email: " . $this->email . "\n\nName: " . $this->name . "\n\n" . $this->message;

            if (mail($this->to, $this->subject, wordwrap($msg, 70), $headers)) {
                $successVar = "success";
            } else {
                $successVar = array();
                array_push($successVar, array("formErrorGeneral" => "There was an error sending your form. Please try again."));
                $successVar = json_encode($successVar);
            }

            return $successVar;
        } else {
            return json_encode($this->errors);
        }
    }
}

if (isset($_POST['submitContactForm'])) { 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $contactForm = new ContactForm($name, $email, $message);
    $contactForm->verifyForm();
    echo $contactForm->insertForm();
    
}

?>