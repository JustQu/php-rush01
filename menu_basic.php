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
            height: 50px;
            border: 1px solid blue;
            margin-left: 50px;
            margin-top: 10px;
        }

        .about p {
            text-align: center;
            font-family: 'Ruda', sans-serif;
            color: white;
        }

        span {
            color: #FF0000;
            margin-right: 20px;
        }

        .player {
            text-align: center;
            font-family: 'Orbitron', sans-serif;
            font-weight: bolder;
            color: white;
        }
    </style>


    <div class="background">
        <div class="menu">
            <p class="player">PLAYER 1</p>
            <div class="about">
                <p class="text">name: <span>%treshotka1%</span></p>
            </div>
            <div class="about">
                    <p class="text">ships left: <span>%15%</span></p>
            </div>
        </div>
        <div class="menu">
                <p class="player">PLAYER 2</p>
                <div class="about">
                    <p class="text">name: <span>%treshotka2%</span></p>
                </div>
                <div class="about">
                        <p class="text">ships left: <span>%17%</span></p>
                </div>
        </div>
    </div>
</html>