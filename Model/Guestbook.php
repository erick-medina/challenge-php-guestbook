<?php

class Guestbook
{

    private $AllPosts = []; // this should be an array of Posts

    public function __construct()
    {
        $data = json_decode(file_get_contents('JSON/userData.json'));
        foreach ($data as &$value) {
            $AllPosts[] = $value;
        }
        //make new post push to allposts
        $this->AllPosts = json_decode(file_get_contents('JSON/userData.json')); // make sure u have all the posts

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
           array_push($this->AllPosts, $info_array);
            $json_string = json_encode($this->AllPosts, JSON_PRETTY_PRINT); // to convert object into json
            file_put_contents($users_file, $json_string); // to write data to a file MAKE SURE U HAVE ALL THE POSTS (not only the latest)
            echo $json_string;

        }

    }

}

