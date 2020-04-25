<?php require_once 'config.php';

    if(admin_loggedin()){
        return_admin();
    }

    if(isset($_POST) && !empty($_POST['submit'])){

        $admin_login_errors = '';
        $admin_login_success = '';
        

        $username_error = '';

        $username = filter_var(trim($_POST['admin_username']), FILTER_SANITIZE_STRING);
        if(!empty(trim($_POST['admin_password']))){
            $password = hash('sha512', $_POST['admin_password']);
        }else{
            $password = '';
        }
        $user_data = db( 'SELECT * FROM users WHERE user = :username AND password = :password' , array(':username'=>$username, ':password'=>$password));

        print_r($password. '<br>');
        print_r($user_data );
        


        if(empty($username)){
            $admin_login_errors = 'Username or Password incorrect.';
            $username_error .= $username;
        }
        if(empty($password)){
            $admin_login_errors = 'Username or Password incorrect.';
        }


        if(!empty($user_data)){

            if(!empty($username) && !empty($password) && empty($admin_login_errors)){
                $admin_login_success = 'Loggedin Succesfully.';
                $_SESSION['admin'] = $username;
                return_admin();
            }
        }   
    }else{
        $username_error = '';
    }

    require_once 'views/login.view.php';

?>