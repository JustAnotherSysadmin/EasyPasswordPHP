<?php
###############################################################################
##
##  PURPOSE:  Generate an easy to remember temporary password.
##
##  AUTHOR:   John Lucas
##  CREATED ON:  2019-08-08
##
##
###############################
#



##############################################################################
##   ____                                        _        _   _
##  |  _ \  ___   ___ _   _ _ __ ___   ___ _ __ | |_ __ _| |_(_) ___  _ __
##  | | | |/ _ \ / __| | | | '_ ` _ \ / _ \ '_ \| __/ _` | __| |/ _ \| '_ \
##  | |_| | (_) | (__| |_| | | | | | |  __/ | | | || (_| | |_| | (_) | | | |
##  |____/ \___/ \___|\__,_|_| |_| |_|\___|_| |_|\__\__,_|\__|_|\___/|_| |_|
##
##     _    _   _ ____       ____       __
##    / \  | \ | |  _ \     |  _ \ ___ / _| ___ _ __ ___ _ __   ___ ___
##   / _ \ |  \| | | | |    | |_) / _ \ |_ / _ \ '__/ _ \ '_ \ / __/ _ \
##  / ___ \| |\  | |_| |    |  _ <  __/  _|  __/ | |  __/ | | | (_|  __/
## /_/   \_\_| \_|____/     |_| \_\___|_|  \___|_|  \___|_| |_|\___\___|
##
###############################################################################
#
#  How TO - Copy Text to Clipboard:  https://www.w3schools.com/howto/howto_js_copy_clipboard.asp
#  Hoverable table:   https://www.w3schools.com/css/css_table.asp
#  CSS Fonts:  https://www.w3schools.com/css/css_font.asp


##############################################################################
##   _____ _   _ _   _  ____ _____ ___ ___  _   _ ____
##  |  ___| | | | \ | |/ ___|_   _|_ _/ _ \| \ | / ___|
##  | |_  | | | |  \| | |     | |  | | | | |  \| \___ \
##  |  _| | |_| | |\  | |___  | |  | | |_| | |\  |___) |
##  |_|    \___/|_| \_|\____| |_| |___\___/|_| \_|____/
##
###############################################################################

function getRandomAnimal() {
        $TheAnimals = array("Aardvark","Albatross","Alligator","Alpaca","Angelfish","Ant","Anteater","Antelope","Ape","Armadillo","Baboon","Badger","Bandicoot","Barb","Barnacle","Barracuda","Bat
        #var_dump($TheAnimals);
        $randIndex = array_rand($TheAnimals);
        $myAnimal = $TheAnimals[$randIndex];
        return $myAnimal;
} //getRandomAnimal();

function getRandomColor() {
        $TheColors = array("Red", "Orange", "Yellow", "Green", "Cyan", "Blue", "Indigo", "Violet", "Purple", "Magenta", "Pink", "Brown", "White", "Gray", "Black");
        #var_dump($TheColors);
        $randIndex = array_rand($TheColors);
        $myColor = $TheColors[$randIndex];
        return $myColor;
} //getRandomColor();

function getRandomSymbol() {
        $zarray = array("", "#", "$");
        #var_dump($TheColors);
        $randIndex = array_rand($zarray);
        $mychar = $zarray[$randIndex];
        return $mychar;
} //getRandomSymbol();

function getRandomNum() {
        $znum = rand(0, 9);
        return $znum;
}

function getRandomPunc() {
        $zarray = array("", "!", "?", ".");
        $randIndex = array_rand($zarray);
        $mychar = $zarray[$randIndex];
        return $mychar;
}

function getMyRandomPass() {
        $mypass = getRandomSymbol().getRandomNum().getRandomColor().getRandomAnimal().getRandomPunc();
        return $mypass;
}


#############################################
##   __  __    _    ___ _   _
##  |  \/  |  / \  |_ _| \ | |
##  | |\/| | / _ \  | ||  \| |
##  | |  | |/ ___ \ | || |\  |
##  |_|  |_/_/   \_\___|_| \_|
#
#############################################
#


$myColumnsCount = "6";
$myRowsCount = "40";

echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <title>Randomish Passwords</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style>
      body {
           background: #000000;
      }
      .myTitle {
           font-size:18px;
           font-weight: bold;
           #font-style: italic;
           font-family: \"Allerta\", sans-serif;
      }
      .myName {
           color: grey;
           font-size:8px;
           #font-weight: bold;
           font-style: italic;
           font-family: \"Allerta\", sans-serif;
      }
      .myPass {
           color: black;
           font-size:14px;
           #font-weight: bold;
           #font-style: italic;
           font-family: \"Lucida Console\", monospace;
      }
      table {
        border: 1px solid black;
        padding: 5px;
        text-align: center;
        background: #FFFFFF;
      }
      tr:nth-child(even) {background-color: #f2f2f2;}
      th {
        background-color: #4CAF50;
        color: white;
      }
      td {
        text-align: center;
        vertical-align: middle;
        padding: 5px;
      }
      td:hover {
        background: #edc1b9;
      }
    </style>
  </head>
  <body>
    <table>
      <tbody>
        <tr>
          <th colspan=\"".$myColumnsCount."\" class=\"myTitle\">Pseudo Semi-Random Temporary Passwords</td>
        </tr>
";

# rows
for ($i = 1; $i <= $myRowsCount; $i++) {
        echo "        <tr>";
        # columns
        for ($y = 1; $y <= $myColumnsCount; $y++) {
                echo "          <td>";
                echo "<span class=\"myPass\">".getMyRandomPass()."</span>";
                echo "          </td>";
        } //columns
        echo "        </tr>";
} //rows

echo "
      </tbody>
    </table>
    <span class=\"myName\">by John Lucas
    </span>
  </body>
</html>
";


### End PHP
?>

