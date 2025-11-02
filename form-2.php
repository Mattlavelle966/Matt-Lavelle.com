<?php
    if(isset($_POST['email']) && $_POST['email'] != ''){
        
        if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
            
            $botinput = $_POST['bot'];
            
            if($botinput == ""){
                
                $username = $_POST['name'];
                $useremail = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                $time = date("Y-m-d H:i:s");
                $User_ip = $_SERVER['REMOTE_ADDR'];
                $language = $_POST['language'];
                
                $file = fopen("form-save.txt","a");
        
                fwrite($file, "name :");
                fwrite($file, $username . "\n");
                fwrite($file, "subject :");
                fwrite($file, $subject . "\n");
                fwrite($file, "email :");
                fwrite($file, $useremail . "\n");
                fwrite($file, "message :");
                fwrite($file, $message . "\n");
                fwrite($file, "time :");
                fwrite($file, $time . "\n");
                fwrite($file, "User Ip :");
                fwrite($file, $User_ip . "\n");
                fclose($file);
                
                $to = 'Joseph.lavelle@queensu.ca';
                $body = "";
                
                $body .= "from: " . $username . "\n";
                $body .= "email: " . $useremail . "\n";
                $body .= "message: " . $message . "\n";
                
                mail($to, $subject, $body);
                if($language == "english"){
                    header("Location: http://www.josephlavelle.com");
                } else{
                    header("Location: http://www.josephlavelle.com");
                }
                
            }
            else{
                $time = date("Y-m-d H:i:s");
                $inject_bot = "bot sensor was activated";
                $User_ip = $_SERVER['REMOTE_ADDR'];
                
                $file = fopen("form-save.txt","a");
        
                fwrite($file, "Bot Input field:");
                fwrite($file, $inject_bot . "\n");
                fwrite($file, "time :");
                fwrite($file, $time . "\n");
                fwrite($file, "User Ip :");
                fwrite($file, $User_ip . "\n");
                fclose($file);
                header("Location: http://www.josephlavelle.com");
            }

        }
        else{
            header("Location: http://www.josephlavelle.com");
        }
    }
    else{
        header("Location: http://www.josephlavelle.com");
    }
    
    
?>