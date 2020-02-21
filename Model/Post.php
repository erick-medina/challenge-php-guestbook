<?php

class Post
{
    private $first_name;
    private $last_name;
    private $subject;
    private $email;
    private $comment;
    private $date;

    /**
     * Post constructor.
     * @param $first_name
     */
    public function __construct($first_name, $last_name, $subject, $email, $comment, $date)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->subject = $subject;
        $this->email = $email;
        $this->comment = $comment;
        $this->date = $date;

    }

    public function __destruct() {
        $soy_array = [$this->first_name,
            $this->last_name,
            $this->subject,
            $this->email,
            $this->comment,
            $this->date];
        echo "Second name is {$this->last_name}";
        var_dump($soy_array);
    }


}
