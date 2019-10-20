<html>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Acme|Orbitron&display=swap');
        @import url('https://fonts.googleapis.com/css?family=Acme|Orbitron|Ruda&display=swap');

        .background {
            width: 400px;
            height: 700px;
            border: 4px solid greenyellow;
            background: black;
        }

        .menu {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 20px;
        }

        .about {
            width: 300px;
            height: 300px;
            border: 1px solid blue;
            margin-left: 50px;
            margin-top: 10px;
        }

        .about p {
            text-align: left;
            font-family: 'Ruda', sans-serif;
            color: white;
            box-sizing: border-box;
            margin: 10px;
        }

        span {
            color: #FF0000;
            margin-right: 20px;
        }

        .nameShip {
            text-align: center;
            font-family: 'Orbitron', sans-serif;
            font-weight: bolder;
            color: white;
            border-bottom: 1px solid greenyellow;
            margin-left: 50px;
            margin-right: 50px;
        }

        img {
            width: 250px;
            height: 250px;
            margin-left: 70px;
        }
    </style>


    <div class="background">
        <div class="menu">
            <img src="http://www.pngmart.com/files/3/Spaceship-Transparent-PNG.png";>
            <p class="nameShip">NAME SHIP</p>
            <div class="about">
                <p class="text">Name: <span>%treshotka1%</span></p>
                <p class="text">Hull points: <span>%6%</span></p>
                <p class="text">PP: <span>%10%</span></p>
                <p class="text">Speed: <span>%12%</span></p>
                <p class="text">Handling: <span>%4%</span></p>
                <p class="text">Bouclier: <span>%0%</span></p>
                <p class="text">Weapons: <span>%Marko Kanon%</span></p>
            </div>
        </div>
    </div>
</html>