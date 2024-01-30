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
        public function movieOfTheWeek($movie){
            return '<h2>Questa settimana ti consigliamo '.$movie.'.</h2>';
        }
    }

    $potter_1 = new movie('Harry Potter e la pietra filosofale', 152, 'fantasy');
    $potter_1->vote = '8/10';
    $potter_2 = new movie('Harry Potter e la camera dei segreti', 161, 'fantasy');
    $potter_3 = new movie('Harry Potter e il prigioniero di Azkaban', 139, 'fantasy');

    echo $potter_2->movieOfTheWeek($potter_2->title);
    echo '<h1>Lista dei film</h1>';
    $movies = [
        $potter_1,
        $potter_2,
        $potter_3,
    ];
    
    foreach($movies as $movie){
        echo '<h3>Titolo:'.$movie->title.'</h3> <p>genere:'.$movie->genre.'</p> <p>Durata:'.$movie->duration.'</p>';
        if($movie->vote != null){
            echo '<p>Voto:'.$movie->vote.'</p>';
        }

    }
?>