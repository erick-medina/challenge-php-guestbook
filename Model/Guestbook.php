<?php

class Guestbook
{

    public function __construct()
    {
        if (isset($_POST['submit'])) {
            $users_file = "JSON/usersData.json";
            $info_array = array(
                'first name' => $_POST['firstName'],
                'last name' => $_POST['lastName'],
                'subject' => $_POST['subject'],
                'email' => $_POST['email'],
                'comment' => $_POST['comment'],
                'date' => date('m/d/Y h:i:s a', time())

            );
            $json_string = json_encode($info_array); // to convert object into json
            file_put_contents($users_file, $json_string); // to write data to a file
            echo $json_string;
        }
    }


}

