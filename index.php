<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>The Adventure!</title>
    <link href="css/reset.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
</head>
<body>

    <!--Declerations-->
    <?php $harpoonEquipped ?>
    <?php $torchEquipped ?>
 

    <div id="impress">
        <!--The introduction to the game.-->
        <div id="intro" class="step slide">
            <div class="slide-text">
                <p>
                    You see swirling mists that slowly form into a pale face. In a deep, ominous voice, it speaks. "You...you are not supposed to be here, its not safe!
                    You need to find your way out, quickly! Go!"
                </p>
                <p>
                    You awaken groggily, and find yourself laying on a sandy beach. You realize you are bleeding from your head, but have no idea why, or where you are.
                    The last thing you remember was...was...you have no idea. Your mind is blank.
                </p>
                <br />
                <p>What do you do?</p>
                <p><a href="#getup">Get up and look around.</a></p>
                <p>or</p>
                <p><a href="#stayhere">Lay back down for awhile, maybe you will feel better.</a></p>
            </div>
        </div>

        <!--Get up and explore option-->
        <div id="getup" class="step slide" data-x="1500">
            <div class="slide-text">
                <p>You slowly climb to your feet, the ominous words still ringing in your ears. The sun is hot and beating down, it makes you feel dizzy.</p>
                <p>
                    As you look around you see a dark cave to the north, it looks cool, but very dark and uninviting. To the west the beach continues banked on one side by
                    thick jungle, and on the other by the ocean.
                </p>
                <p>The way to the east is covered with jagged rocks, but you think you can pick your way through them. To the south is endless ocean. </p>
                <br />
                <p>Which way do you go?</p>
                <p><a href="#north">Head north to the dark cave.</a></p>
                <p>or</p>
                <p><a href="#west">Walk west down the beach.</a></p>
                <p>or</p>
                <p><a href="#east">Pick your way through the rocks.</a></p>
            </div>
        </div>

        <!--Head North Option-->
        <div id="north" class="step slide" data-x="2500">
            <div class="slide-text">
                <p>You walk northward, towad the dark cave. The cool air rolls out to greet you, it feels so nice on your sun baked skin. It is dark inside, far too dark to see. If you put your hand to the wall, and walk slowly, you think you might make it though.</p>
                <p>From somewhere deep in the cave, you hear a deep but almost inaudible growl...it must be the wind.</p>
                <br />
                <p>Which way do you go?</p>
                <p><a href="#cave">Put your hand to the wall and walk into the cave. </a></p>
                <p>or</p>
                <p><a href="#beach">Turn around and head back to the beach </a></p>
            </div>
        </div>

        <!--Generic return to the start-->
        <div id="beach" class="step slide" data-x="3500">
            <div class="slide-text">
                <p>
                    You are back where you woke up. The blood from your head still stains the sand, though the waves hitting the shore slowly claim it. As you look around you see a dark cave to the north, it looks cool, but very dark and uninviting. To the west the beach continues banked on one side by
                    thick jungle, and on the other by the ocean.
                </p>
                <p>The way to the east is covered with jagged rocks, but you think you can pick your way through them. To the south is endless ocean. </p>
                <br />
                <p>Which way do you go?</p>
                <p><a href="#north">Head north to the dark cave.</a></p>
                <p>or</p>
                <p><a href="#west">Walk west down the beach.</a></p>
                <!--The harpoon is aquired via crossing the rocks. There is nowhere to go in that direction once the harpoon is aquired. Therefor, this is no longer an option.!-->
                <?php if($harpoonEquipped == false) : ?>
                    <p><a href="#east">Pick your way through the rocks.</a></p>
                <?php endif; ?>
            </div>
        </div>

        <!--Head East Option-->
        <div id="east" class="step slide" data-x="4500">
            <div class="slide-text">
                <p>You decide to try and pick your way through the rocks. Slowly, carefully, you move between the jagged points. One slip, and your as good as dead.</p>
                <p>Suddenly, you notice something shiney rolling back and forth in the waves, there is no way to tell for sure from here. The way to it is trecherous, the waves crash into the rocks, making them slippery. </p>
                <p>There is a stick laying to your right. Maybe you could use it to pull the object toward you.</p>
                <br />
                <p>Which way do you go?</p>
                <p><a href="#objectinwater">Attempt to reach whatever is in the water.</a></p>
                <p>or</p>
                <p><a href="#stick">Attempt to reach the stick, and use it to pull the object toward you.</a></p>
                <p>or</p>
                <p><a href="#beach">Return to the beach. This is too dangerous.</a></p>
            </div>
        </div>

        <!--Reach the object in the water option-->
        <div id="objectinwater" class="step slide" data-x="5500">
            <div class="slide-text">
                <!--The harpoon has been aquired-->
                <?php $harpoonEquipped = True ?>

                <p>You carefully clamber over the rocks and manage to reach the object in the water. It appears to be a fishermans harpoon. You decide to take the harpoon with you..it might come in handy. </p>
                <p>Harpoon in hand, you slowly climb back over the rocks.</p>
                <br />
                <p><a href="#beach">Return to the beach</a></p>

            </div>
        </div>


        <!--Death Section-->
        <!--Death Option Concussion-->
        <div id="stayhere" class="step slide" data-x="-1500">
            <div class="slide-text">
                <p>You decide to lay down and just rest awhile. You feel tired...so tired...and you drift off to sleep.</p>
                <p>The wound to your head was worse then you thought. A concussion takes hold, and you don't wake up...even as the tide rolls in...</p>
            </div>
            <p>You are Dead. Better luck next time.</p>
            <div class="menu">
                <a href="#intro">START OVER</a>
            </div>
        </div>

        <!--Death Option Snake-->
        <div id="stick" class="step slide" data-x="-2500">
            <div class="slide-text">
                <p>You reach out and grab the stick...but it isnt a stick..its a snake! The snake turns and bites you. Venom floods your veins, the pain is too much, you loose focus and slip...impaling yourself on a rock. </p>
            </div>
            <p>You are Dead. Better luck next time.</p>
            <div class="menu">
                <a href="#intro">START OVER</a>
            </div>
        </div>

        <!--End of Death Section-->










    </div>
    <!-- JavaScript Section -->
    <script src="js/impress.js"></script>
    <script>impress().init();</script>

</body>
</html>
