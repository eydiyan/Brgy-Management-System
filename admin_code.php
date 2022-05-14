<?php
session_start();
include_once('security.php');
                    //ADMIN TYPE
                    if(isset($_POST['registerbtn']))
                    {
                        $name = $_POST['name'];
                        $username = $_POST['username'];
                        $email = $_POST['email'];
                        $password = md5($_POST['password']);
                        $cpassword = md5($_POST['cpassword']);
                        $file     = $_FILES["admin_image"]['name'];

                        if($password === $cpassword)
                        {
                            $email_query = "SELECT * FROM admin_barangay WHERE email='$email' ";
                            $email_result = mysqli_query($db, $email_query);
                            if(!$email_result->num_rows >0)
                            {
                                $query = "INSERT INTO admin_barangay (name, username, email, password, file) VALUES ('$name', '$username', '$email', '$password', '$file')";
                                $result = mysqli_query($db, $query);
                                if ($result)
                                {
                                   move_uploaded_file($_FILES["admin_image"]["tmp_name"], "images/".$_FILES["admin_image"]["name"]);
                                    $_SESSION['success'] = "ADMIN PROFILE ADDED";
                                    header('Location: admin_profile.php');
                                }
                                else
                                {
                                    $_SESSION['status'] = "ADMIN PROFILE NOT ADDED";
                                    header('Location: admin_profile.php');
                                }
                            }
                            else
                            {
                                $_SESSION['status'] = "EMAIL ALREADY EXIST";
                                header('Location: admin_profile.php');
                            }
                        }
                        else
                        {
                            $_SESSION['status'] = "PASSWORD DOES NOT MATCH";
                            header('Location: admin_profile.php');
                        }
                    }


                        //ADMIN DELETE
                        if(isset ($_GET['deleteid']))
                        {
                            $id = $_GET['deleteid'];
                            $query = "DELETE FROM `admin_barangay` WHERE id='$id'";
                            $result = mysqli_query($db, $query);
                            if($result)
                            {
                              $_SESSION['status'] = "YOUR DATA IS DELATED";
                              header('Location: admin_profile.php');
                            }
                        }


                        //ADMIN UPDATE
                    if(isset($_POST['update_btn']))
                    {
                        $id = $_POST['edit_id'];
                        $name = $_POST['edit_name'];
                        $username = $_POST['edit_username'];
                        $email = $_POST['edit_email'];
                        $password = md5($_POST['edit_password']);
                         $file     = $_FILES["admin_image"]['name'];

                        $email_query = "SELECT * FROM admin_barangay WHERE email='$email' ";
                        $result = mysqli_query($db, $email_query);


                        if(!$email_result->num_rows >0)
                        {
                                    $query = "UPDATE admin_barangay SET name='$name', username='$username', email='$email', password='$password', file='$file' WHERE id='$id'";
                                $result = mysqli_query($db, $query);
                                if($result)
                                {
                                    move_uploaded_file($_FILES["admin_image"]["tmp_name"], "images/".$_FILES["admin_image"]["name"]);
                                    $_SESSION['success'] = "YOUR DATA IS UPDATED";
                                    header('Location: admin_profile.php');
                                }
                                else
                                {
                                    $_SESSION['status'] = "YOUR DATA IS NOT UPDATED";
                                    header('Location: admin_profile.php');
                                }
                        }
                        else
                        {
                                $_SESSION['status'] = "YOUR EMAIL ALREADY EXIST";
                                    header('Location: admin_profile.php');
                        }



                        

                    }


                    




                        

              ?>


