<?php

class contentdev {

    public $suggestion text;




    public function __construct() {
    }

    public function suggest() {
        // TODO implement here
    }

    public function approve_content() {
        // TODO implement here
        $sql = "SELECT 'content_id' FROM 'content' WHERE content_keyword.content_id IN (SELECT keyword FROM 'content_keyword')";
        $result1 = mysqli_query($this->connection, $sql);

        if (mysqli_num_rows($result1) > 0)
        {}
    	echo '<div class="iframe-container">
		<iframe width="160" height="200" src="https://www.youtube.com/embed/mN0zPOpADL4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<div>' ;
    }

}