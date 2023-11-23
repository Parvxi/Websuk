<?php

    
    
   // if(isset($_POST['send'])){
        $name= $_POST['Fname'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $idNumber= $_POST['id'];
        $location= $_POST['city'];

        $qes1= $_POST['choice1'];
        $textArea= $_POST['textArea'];

        $qes2= $_POST['choice2'];
        $qes3= $_POST['choice3'];

        $Check1= filter_input(INPUT_POST,'usageFeedback', FILTER_VALIDATE_BOOL);
        $Check2= filter_input(INPUT_POST,'recommend', FILTER_VALIDATE_BOOL);
        

        /// --for database
        $host = 'localhost';
        $DBname = 'sukoon';
        $username = 'root';
        $password = '';
        //--connection
        $connect = mysqli_connect( hostname:$host, 
                        username: $username, 
                        password:$password,
                        database: $DBname);


        if(mysqli_connect_errno()){
            die("Connection error: " .mysqli_connect_error());
        }else{
            echo "Connection Seccessful >>";
        }

        

        $InsrtToTable = "INSERT INTO feedbackform (UserName, Email, PhoneNum, UserID, city, 
                                        UserFriendliness, SystemFeaturse, SystemUsage1, SystemUsage2)
                            
                         VALUES (? , ? , ?, ?, ?, ?, ?, ?, ?)";
                            
                            $queryEmail = "SELECT Email FROM feedbackform WHERE Email = '$email'";
                            $resultEmail = mysqli_query($connect, $queryEmail);
                            $queryID = "SELECT UserID FROM feedbackform WHERE UserID = '$idNumber";
                            $resultID = mysqli_query($connect, $queryID);


                            $stmt = mysqli_stmt_init($connect);
                            
                            if (mysqli_num_rows($resultEmail) > 0 ) {
                              // Email already exists, display an error message
                              echo "Email already exists. ";
                            }else if(mysqli_num_rows($resultID) > 0){
                                // ID number already exists, display an error message
                              echo "ID already exists.";
                            } else {
                              // Email is new, save the data
                              // Perform the necessary database insertion or processing here
                              // For example:
                              if(!mysqli_stmt_prepare($stmt, $InsrtToTable)){
                                die(mysqli_error($connect));
                            }
                    
                            mysqli_stmt_bind_param($stmt, "sssisssss",
                                                    $name, 
                                                    $email,
                                                    $phone,
                                                    $idNumber,
                                                    $location,
                                                    $ques1,
                                                    $textArea,
                                                    $ques2,
                                                    $ques3);
                    
                            mysqli_stmt_execute($stmt);
                            echo "Record saved.";

                            }

                            
        
       

        //// Close the statement and database connection
        mysqli_stmt_close($stmt);
        mysqli_close($connect);
      

  
?>

