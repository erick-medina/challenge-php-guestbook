<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class HomePageController
{
    //to render function with $_POST
    public function render()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $first_name = $_POST['firstName'];
                $last_name = $_POST['lastName'];
                $subject = $_POST['subject'];
                $email = $_POST['email'];
                $comment = $_POST['comment'];
                $date = date('m/d/Y h:i:s a', time()); // to get exact date when submitting the form

                $post_obj = new Post ($first_name, $last_name, $subject, $email, $comment, $date);
                var_dump($post_obj);

                $guestbook_obj = new Guestbook();
                var_dump($guestbook_obj);



        }


        require 'View/Homepage.php';
    }





}
