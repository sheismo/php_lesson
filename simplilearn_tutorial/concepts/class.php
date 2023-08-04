<!-- Classes -->
<html>
    <body>
        <h1>The Fruit Program</h1>

        <?php
        // * Classes
            // class Fruit {
            //     public $name;
            //     public $color;

            //     function set_name($name) {
            //         $this->name = $name;
            //     }

            //     function get_name() {
            //         return $this->name;
            //     }
            // }
        // * Objects
            // $orange = new Fruit();
            // $orange->set_name('Orange');

            // $apple = new Fruit();
            // $apple->set_name('Apple');   
            
            // echo $apple->get_name();
            // echo "<br>";
            // echo $orange->get_name();

        // * The objects features are called properties(defined with variables)
        // * The objects behaviour are called methods(defined with functions)

        // * Constructors & Destructors
            // class Car  {
            //     public $name;
            //     public $color;

            //     function __construct($name, $color)
            //     {
            //         $this->name = $name;
            //         $this->color = $color;
            //     }

            //     function __destruct()
            //     {
            //         echo "The Car is ($this->name) and the color is ($this->color) ";
            //     }

                // function get_name() {
                //     return $this->name;
                // }

                // function get_color() {
                //     return $this->color;
                // }
            // }

            // $toyota = new Car("Toyota Corolla", "Red");
            // echo $toyota->get_name();
            // echo "<br>";
            // echo $toyota->get_color();
            
        // * Inheritance
            // class Fruit {
            //     public $name;
            //     public $color;

            //     function __construct($name, $color)
            //     {
            //         $this->name = $name;
            //         $this->color = $color;
            //     }

            //     public function intro() {
            //         echo "A ($this->name) is a fruit and the color is ($this->color)";
            //     }
            // }

            // class Mango extends Fruit {
            //     public function message() {
            //         echo "Is Mango a fruit?";
            //     }
            // }

            // $mango = new Mango("Mango", "green");
            // $mango->message();
            // $mango->intro();

        // * Polymorphism    
            class Fruit {
                public $name;
                public $color;

                function __construct($name, $color)
                {
                    $this->name = $name;
                    $this->color = $color;
                }

                public function intro() {
                    echo "A ($this->name) is a fruit and the color is ($this->color)";
                }
            }

            class Cherry extends Fruit {
                public $weight;
                public function __construct($name, $color,$weight)
                {
                    $this->name = $name;
                    $this->color = $color;
                    $this->weight = $weight; 
                }

                public function intro() {
                    echo "This fruit is ($this->name), the color is ($this->color) and the weight is ($this->weight)";
                }
            }
            $cherry = new Cherry("Cherry", "green", 20);
            $cherry->intro();
        ?>
    </body>
</html>