<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Hello <?php echo $_GET['name']; ?>!</h1>
    <?php 

    function Intersect($dads_hobbies, $my_hobbies, $childshobbies)
        {
            $result = array_intersect($dads_hobbies, $my_hobbies, $childshobbies);
            return($result);
        }
        echo $result;

        /* $dads_hobbies ='hobbies'=> array('riding his bike', 'walking', 'watching tv')
        $my_hobbies ='hobbies'=> array('mtb', 'walking', 'reading', 'riding my bike')
        $childshobbies = array('playing the piano', 'boxing', 'inline skatting', 'reading')
         */


    $family = array('Roza'=>'moeder', 'André'=>'vader', 'Pascal'=>'broer', 'Carla'=>'zus', 'Cristel'=>'schoonzus', 'Nick'=>'neef', 'Jeroen'=>'neef', 'Erwin'=>'man', 'Lisa'=>'dochter');

    $favorite_dishes = array (
        'italiaans' =>array('pizza'),
         'vlaams' =>array ('frietjes', ' witloof_met_hesp'));

   
    $dad = array(
        'first name'=>'André',
        'last name'=>'Meurs',
        'male'=>'true',
        'age'=>'73',
         $dads_hobbies ='hobbies'=> array('riding his bike', 'walking', 'watching tv')
    );

    $me = array(
        'first name'=>'Mireille',
        'last name'=>'Meurs',
        'female'=>'true',
        'papa' => $dad,
        'age'=> 45,
        $my_hobbies ='hobbies'=> array('mtb', 'walking', 'reading', 'riding my bike')
     );  
    $me['last name'] = 'Peeters';
    array_push($me['hobbies'], 'taxidermy');
    
    

    $soulmate = array(
        'first name' => 'Erwin',
        'last name' => 'Beckers',
        'male' => 'true',
        'his_age' => 45,
        $childshobbies = array('playing the piano', 'boxing', 'inline skatting', 'reading')
    );


    $web_development = array(
        $frontend = array(), 
        $backend = array (),
    );
     
    $frontend[0] = 'xhtml';
    $frontend[0] = 'html';  
    $frontend[1] = 'CSS'; 
    $frontend[2] = 'JavaScript'; 
    $backend[0] = 'Ruby on Rails';
    $backend[1] = 'Flash';
    unset($backend[1]);
    echo $frontend[0];

    echo '<pre>';
    print_r ($frontend);
    echo "</pre>";

    echo '<pre>';
    print_r ($backend);
    echo "</pre>";

    echo '<pre>';
    print_r ($me);
    echo "</pre>";

    echo '<pre>';
    print_r ($soulmate);
    echo "</pre>";

    echo '<pre>';
    print_r (Intersect($dads_hobbies, $my_hobbies, $childshobbies));
    echo "</pre>";

    echo count($my_hobbies);
    echo "<br />";
    echo $family['Erwin'];  
    echo "<br />";    
    echo $favorite_dishes['vlaams'][0];
    echo "<br />";  
    echo "<h5>".count($me['hobbies'])."</h5>"; //nog een manier om php te schrijven, hierdoor moet men geen br gebruiken
    echo count($me['papa']['hobbies']);
    echo "<br />";
    echo "<br />";
   
    
    ?>
  </body>
</html>