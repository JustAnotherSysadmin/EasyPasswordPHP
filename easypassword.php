<?php
###############################################################################
##
##  PURPOSE:  Generate an easy to remember temporary password.
##
##  AUTHOR:   John Lucas
##  CREATED ON:  2019-08-08
##  LAST UPDATED:  2024-11-07
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
        $TheAnimals = array("Aardvark","Albatross","Alligator","Alpaca","Angelfish","Ant","Anteater","Antelope","Ape","Armadillo","Baboon","Badger","Bandicoot","Barb","Barnacle","Barracuda","Bat","Beagle","Bear","Beaver","Bee","Beetle","Bird","Bison","Bloodhound","Boar","Bobcat","Bombay","Bongo","Bonobo","Booby","Buffalo","Bulldog","Bullfrog","Butterfly","Camel","Cat","Caterpillar","Catfish","Cattle","Cheetah","Chicken","Chipmunk","Cichlid","Clam","Cobra","Cockroach","Cod","Collie","Coral","Cormorant","Cougar","Cow","Coyote","Crab","Crane","Crocodile","Crow","Cuttlefish","Dachshund","Dalmatian","Deer","Dhole","Dingo","Dog","Dogfish","Dolphin","Donkey","Dove","Duck","Eagle","Earwig","Eel","Elephant","Elk","Emu","Falcon","Ferret","Finch","Fish","Fly","Fox","Frog","Panda","Gibbon","Giraffe","Goat","Goldfinch","Goldfish","Goose","Gopher","Gorilla","Grasshopper","Greyhound","Guppy","Hamster","Hare","Harrier","Hawk","Hedgehog","Heron","Herring","Hippopotamus","Hornet","Horse","Human","Hummingbird","Hyena","Iguana","Impala","Insect","Jackal","Jaguar","Jay","Jellyfish","Kangaroo","Kingfisher","Kiwi","Koala","Ladybird","Lapwing","Lark","Lemming","Lemur","Leopard","Liger","Lion","Lionfish","Lizard","Llama","Lobster","Locust","Louse","Lynx","Lyrebird","Macaw","Magpie","Mallard","Mayfly","Meerkat","Millipede","Mink","Mole","Molly","Mongoose","Mongrel","Monkey","Moose","Mosquito","Moth","Mouse","Mule","Newt","Nightingale","Ocelot","Octopus","Opossum","Ostrich","Otter","Owl","Ox","Oyster","Panther","Parrot","Partridge","Peacock","Peafowl","Pelican","Penguin","Persian","Pheasant","Pig","Pike","Piranha","Platypus","Pony","Poodle","Porcupine","Porpoise","Possum","Prawn","Puffin","Pug","Puma","Quail","Rabbit","Raccoon","Rail","Ram","Rat","Rattlesnake","Raven","Reindeer","Rhinoceros","Robin","Rook","Rottweiler","Salamander","Salmon","SandDollar","Sandpiper","Sardine","Scorpion","Seahorse","Seal","Shark","Sheep","Shrew","Shrimp","Skunk","Sloth","Snail","Snake","Snowshoe","Somali","Sparrow","Spider","Sponge","Squid","Squirrel","Starfish","Starling","Stingray","Stinkbug","Stork","Swallow","Swan","Tang","Termite","Tetra","Tiger","Toad","Tortoise","Toucan","Trout","Turkey","Turtle","Viper","Vulture","Wallaby","Walrus","Warthog","Wasp","Weasel","Whale","Wolf","Wombat","Woodpecker","Worm","Wren","Yak","Zebra","Zonkey");
        #var_dump($TheAnimals);
        $randIndex = array_rand($TheAnimals);
        $myAnimal = $TheAnimals[$randIndex];
        return $myAnimal;
} //getRandomAnimal();


function getRandomEmotion() {
	$TheEmotions = array("Accepting","Admireable","Adoring","Affectate","Afraid","Agitated","Agonizing","Aggressive","Alarmed","Alienating","Amazing","Ambivalent","Amusing","Angry","Anguished","Annoyed","Anticipating","Anxious","Apathetic","Apprehensive","Arrogant","Assertive","Astonished","Attentive","Attractive","Averse","Awed","Baffled","Bewildered","Bitter","Bittersweet","Blissful","Bored","Brazen","Brooding","Calm","Carefree","Careless","Caring","Charitable","Cheeky","Cheerfulness","Claustrophobic","Coercive","Comfortable","Confident","Confused","Contemptful","Contented","Courageous","Cowardly","Cruel","Curious","Cynical","Dazed","Dejected","Delighted","Demoralized","Depressed","Desireable","Despaired","Determined","Disappointed","Disbeliving","Discombobulated","Discomforted","Discontent","Disgruntled","Disgust","Disheartened","Dislikable","Dismayed","Disoriented","Dispirited","Displeasured","Distractable","Distressed","Disturbed","Domineering","Doubtful","Dreadful","Driven","Dumbstruck","Eager","Ecstatic","Elative","Embarrassed","Empathatic","Enchanted","Enjoyed","Enlightened","Ennui","Enthusiastic","Envious","Empathetic","Euphoric","Exasperated","Excited","Expecting","Fascinating","Fearful","Flakey","Focused","Fond","Friendly","Frightened","Frustrated","Furious","Gleeful","Gloomy","Glum","Grateful","Greedy","Grief-filled","Grouchy","Grumpy","Guilty","Happy","Hateful","Helpless","Homesick","Hopeful","Hopeless","Horrified","Hospitable","Humiliated","Humility","Hurt","Hysterical","Idle","Impatient","Indiffert","Indignant","Infatuated","Infuriated","Insecure","Insightful","Insulted","Interested","Intrigued","Irritated","Isolated","Jealous","Jovial","Joyous","Jubilated","Kind","Lazy","Likable","Loathing","Lonely","Longing","Loopy","Lovly","Lustful","Mad","Melancholy","Miserable","Miserliness","Mixed-up","Modest","Moody","Mortified","Mystified","Nasty","Nauseated","Negative","Neglectful","Nervous","Nostalgic","Numb","Obstinate","Offended","Optimistic","Outragous","Overwhelmed","Panicked","Paranoid","Passioniate","Patient","Pensive","Perplexed","Persevering","Pessimistic","Pitiful","Pleased","Pleasured","Polite","Positive","Possessive","Powerless","Prideful","Puzzled","Raging","Rash","Rattled","Regretful","Rejected","Relaxed","Relieved","Reluctant","Remorseful","Resenting","Resigned","Restless","Revolting","Ruthless","Sad","Satisfied","Scared","Schadenfreuded","Scornful","Self-caring","Self-compassionate","Self-confident","Self-conscious","Self-critical","Self-loathing","Self-motivated","Self-pity","Self-respecting","Self-understanding","Sentimentality","Serenity","Shameful","Shameles","Shocked","Smug","Sorrowful","Spiteful","Stressed","Strong","Stubborn","Stuck","Submissive","Suffering","Sullenness","Surprised","Suspensful","Suspicious","Sympathy","Tenderness","Tension","Terror","Thankful","Thrilled","Tired","Tolerant","Tormented","Triumphant","Troubled","Trusting","Uncertain","Undermined","Uneasy","Unhappy","Unnerved","Unsettled","Unsure","Upset","Vengeful","Vicious","Vigilant","Vulnerable","Weak","Woeful","Worried","Worthy","Wrath");
	$randIndex = array_rand($TheEmotions); 
        $myEmotion = $TheEmotions[$randIndex];
	//$myEmotion = "Happy";
	return $myEmotion;
} //getRandomEmotion

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

function getEmotionOrColor() {
        $zarray = array(getRandomColor(),getRandomEmotion());
        //$zarray = array(getRandomEmotion());
        //$zarray = array(getRandomColor());
        $randIndex = array_rand($zarray);
        $EoC = $zarray[$randIndex];
        return $EoC;
}

function getMyRandomPass() {
        //$mypass = getRandomSymbol().getRandomNum().getRandomColor().getRandomAnimal().getRandomPunc();
        $mypass = getRandomSymbol().getRandomNum().getEmotionOrColor().getRandomAnimal().getRandomPunc();
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
$myRowsCount = "30";

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
          <th colspan=\"".$myColumnsCount."\" class=\"myTitle\">Pseudo Semi-Random Temporary Passwords</th>
        </tr>
";

# rows
for ($i = 1; $i <= $myRowsCount; $i++) {
        echo "        <tr>\n";
        # columns
        for ($y = 1; $y <= $myColumnsCount; $y++) {
                echo "          <td>";
                echo "<span class=\"myPass\">".getMyRandomPass()."</span></td>\n";
        } //columns
        echo "        </tr>\n";
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
