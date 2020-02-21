<?php

class Post
{
    private $first_name;
    private $last_name;
    private $subject;
    private $email;
    private $comment;

    /**
     * Post constructor.
     * @param $first_name
     */
    public function __construct($first_name, $last_name, $subject, $email, $comment)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->subject = $subject;
        $this->email = $email;
        $this->comment = $comment;

    }

    public function __destruct() {
        echo "First name is {$this->first_name}";
    }


}
