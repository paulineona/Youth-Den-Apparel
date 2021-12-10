<?php 
    include 'includes/connection.php'; 

    $con = openCon();

    if (isset($_POST['login'])) { // this means that if the user clicked the submit bottom it will run the code
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        try {
            $sql = "SELECT `id`, `email`, `password` FROM `tbl_accounts` WHERE email = ?";
            
            if ($stmt = $con->prepare($sql)) {
                // Bind variables to the prepared statement as parameters
                $stmt->bind_param("s", $param_email);

                $param_email = $email;

                if ($stmt->execute()) {
                    $stmt->store_result();

                    if ($stmt->num_rows == 1) { 
                        $stmt->bind_result($id, $email, $hashed_password);

                        if ($stmt->fetch()) {
                            if ($password === $hashed_password) { // password_verify($password, $hashed_password) IS NOT WORKING SO FOR THE MEAN TIME === WILL BE USED
                                session_start();
                                
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["email"] = $email;  
    
                                header("location: index.php");
                            } else {
                                echo "password: " . $password . "\n\n";
                                echo "hash password: " . $hashed_password . "\n\n";
                                throw new Exception('invalid email or password! 1');
                            }
                        } else {
                            throw new Exception('cannot fetch data');
                        }
                    } else {
                        throw new Exception('invalid email or password! 2');
                    }
                } else {
                    throw new Exception('oops something went wrong please try again');
                }
            }

            $stmt->close();
        } catch (\Throwable $th) {
            $errorMessage = $th->getMessage();
            exit($errorMessage);
        }

        closeCon($con);
        header("location: index.php"); // it will display in url
    } 

?>