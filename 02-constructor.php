<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 - constructor</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="flex min-h-[100vh] justify-center items-center text-black/80%">
    <main class="bg-slate-100/50 h-[640px] w-[380px] rounded">
        <header class="flex justify-center items-center py-5 gap-5 bg-black/60 rounted-t-md">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-yellow-50 hover:-translate-x-4 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                
            </a>
            <h1 class="text-2xl">02 - constructor</h1>
        </header>
        <section class="p-5 border-2 my-2 overflow-y-auto h-[520px]">
            
        <?php
            class PlayList {
                //atributos
                private $name;
                private $artist = Array();
                private $album = Array();
                private $cover = Array();
                private $year = Array();
                //methods
                public function __construct($name){
                    $this->name = $name;

                }
                public function setPlayList($artist, $album, $cover, $year){
                    
                    $this->artist[] = $artist;
                    $this->album[] = $album;
                    $this->cover[] = $cover;
                    $this->year[] = $year;
                }
                public function getPlayList(){
                    echo "<div class='p-2 ring-1 ring-white/80 rounded-md'>
                                <h2 class='text-center text-2xl my-4'> $this->name   </h2>";
                                for($i = 0; $i < count($this->artist); $i++){
                                echo "<div class= 'p-2 mb-4 flex text-white/80 flex-col gap-4 bg-black/40 rounded-md'>
                                <p>".$this->album[$i]."</p>
                                <img src='".$this->cover[$i]."' alt='cover' widt='280px'>
                                <p>".$this->artist[$i]."</p>
                                <p>".$this->year[$i]."</p>
                                

                                </div>";
                                }
                            "</div>";
                }
            }
            $myPlayList = new PlayList ('My Favorite Music');
            $myPlayList -> setPlayList ('Nirvana', 'Nevermind', 'https://tinyurl.com/yr4x6wd7', 1991);
            $myPlayList -> setPlayList ('Coldplay', 'Parachutes', 'https://tinyurl.com/yd3bdd34', 2000);
            $myPlayList -> setPlayList ('Rolling Stones', ' Beggars Banquet', 'https://tinyurl.com/bdebt7mc', 1968);
            $myPlayList -> setPlayList ('The weekend', 'After Hours', 'https://tinyurl.com/2nky74sn', 2020);
            $myPlayList -> setPlayList ('Cigarretes after sex', 'Cry', 'https://tinyurl.com/4dhcyjb7', 2019);


           $myPlayList->getPlayList();
        ?>
              
        </section>
        <script src="js/taiwind-3.2.4.js"></script>
    </main>

</body>
</html>