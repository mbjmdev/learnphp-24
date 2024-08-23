<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
    </head>
    <body>
        <?php
            // This is a single comment
            # This is a single comment
            /*
                this is a multi line comment
            */
            echo '<h3>Hwllo</h3>';
            echo 'my last name is mukesh';
            echo '</br>'; 
            print('hello');
            echo '</br>';
            print_r('hello');
            echo '</br>';
            $mynewname = "Sam";
            var_dump($mynewname);

            $name = "sam";
            echo "<h1>My name is $name</h1>";
            echo '<h1>My name is '.$name.'</h1>';
            $active = false;
        ?>
        <h1 style="color: <?php if($active === true){ echo 'red'; } else { echo 'violet'; } ?>">This is my website</h1>
    </body>
</html>