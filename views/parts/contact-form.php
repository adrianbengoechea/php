<?php
/* ------- FORM VERIFICATION ------- */

$errors = '';
$send = false;

/* If have an error */

$load_fname = '';
$load_lname = '';
$load_email = '';
$load_phone = '';
$load_message = '';

if(isset($_POST['submit'])):

    $fname = filter_var(trim($_POST['f_name']), FILTER_SANITIZE_STRING);
    $lname = filter_var(trim($_POST['l_name']), FILTER_SANITIZE_STRING) ;
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) ;
    $phone = preg_replace('/[^0-9]/', '', trim($_POST['phone']));
    $message = stripslashes(htmlspecialchars(trim($_POST['message']))) ;

    

    if(empty($fname)){
        $errors .= 'First Name is Required. </br>'; 
    }

    if(empty($lname)){
        $errors .= 'Last Name is Required. </br>'; 
    }

    if(empty($email)){
        $errors .= 'Email is Required. </br>'; 
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors .= 'Enter a valid email. </br>'; 
    }

    if(strlen($phone) <= 7) {
        $errors .= 'Enter a valid Phone number. </br>';
    }

    if(empty($message)){
        $errors .= 'The Message is Required. </br>';
    }


    if(empty($errors)){
        $send_to = '';
        $subject = 'Contact Us - MyBlog Website';

        $the_message = '';
        $the_message .= "From: $fname $lname \n";
        $the_message .= "Email: $email \n";
        $the_message .= "Message: $message";

        // mail($send_to, $subject, $the_message);
        $send = true;
    }else{
        $load_fname .= $fname;

        $load_lname .= $lname;
        $load_email .= $email;
        $load_phone .= $phone;
        $load_message .= $message;
    }

endif;
/* ----- END FORM VERIFICATION ----- */
?>


<div class="block-section">
    <div id="contact-form-section">
        <div class="block-section-content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="form-contact">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <label>
                                        <span class="sr-only">First Name*:</span>
                                        <input type="text" id="f_name" name="f_name" placeholder="First Name*"  value="<?php echo $load_fname; ?>" required>
                                    </label>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label>
                                        <span class="sr-only">Last Name*:</span>
                                        <input type="text" id="l_name" name="l_name" placeholder="Last Name*"  value="<?php echo $load_lname; ?>" required>
                                    </label>
                                    
                                </div>

                                <div class="col-12 col-md-6">
                                    <label>
                                        <span class="sr-only">Email*:</span>
                                        <input type="email" id="email" name="email" placeholder="Email*"  value="<?php echo $load_email; ?>" required>
                                    </label>
                                </div>

                                <div class="col-12 col-md-6">
                                    <label>
                                        <span class="sr-only">Phone:</span>
                                        <input type="text" id="phone" name="phone" placeholder="Phone"  value="<?php echo $load_phone; ?>">
                                    </label>
                                </div>

                                <div class="col-12  ">
                                    <label>
                                        <span class="sr-only">Message*:</span>
                                        <textarea name="message" id="message" rows="10" placeholder="Message*" required><?php echo $load_message; ?></textarea>
                                    </label>
                                </div>

                                <div class="col-12">
                                    <?php if(!empty($errors)): ?>

                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <?php echo $errors; ?>
                                            
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>


                                    <?php elseif($send): ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Enviado Correctamente.
                                            
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php endif; ?>


                                
                                </div>

                                <div class="col-12 col-md-6">
                                    <input type="submit" name="submit" value="Send">
                                </div>

                                

                                


                            </div>
                        </form>
                        <div class="form-contact-alerts">
                            <div class="row">
                                <div class="col-12">
                                    
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>