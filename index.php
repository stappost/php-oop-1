<?php 
    class movie{
        public $title;
        public $duration;
        public $genre;
        public $vote;

        function __construct($_title, $_duration, $_genre){
            $this->title = $_title;
            $this->duration = $_duration;
            $this->genre = $_genre;
        }
    }

    $potter_1 = new movie('Harry Potter e la pietra filosofale', 152, 'fantasy');
    $potter_1->vote = '8/10';
    $potter_2 = new movie('Harry Potter e la camera dei segreti', 161, 'fantasy');
    $potter_3 = new movie('Harry Potter e il prigioniero di Azkaban', 139, 'fantasy');
?>