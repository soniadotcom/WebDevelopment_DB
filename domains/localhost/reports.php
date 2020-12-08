<!DOCTYPE html>
<html lang="ua">
<header>
    <meta charset="UTF-16">
    <title>Звіти</title>
    <style>
        .btn-info, .btn-info-2 {
            border: 0px;
            text-decoration: none;
            outline: none;
            display: inline-block;
            width: 120px;
            height: 45px;
            line-height: 45px;
            border-radius: 35px;
            margin: 10px 20px;
            font-family: 'Montserrat', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 3px;
            font-weight: 600;
            color: #524f4e;
            background: white;
            box-shadow: 0 8px 15px rgba(0,0,0,.1);
            transition: .3s;
        }
        .btn-info:hover, .btn-info-2:hover {
            background: #0ab8ce;
            box-shadow: 0 15px 20px rgba(46,229,157,.4);
            color: white;
            transform: translateY(-7px);
        }

        .btn-info-2 {
            width: 280px;
            height: auto;
        }
        .btn-info-2:hover {
            background: #0ab8ce;
            box-shadow: 0 15px 20px rgba(46,229,157,.4);
            color: white;
            transform: translateY(-7px);
        }

        /* Фіксація футера внизу вікна браузера */
        footer {
            position: fixed; 
            left: 0; bottom: 0;
            padding: 10px;
            width: 100%; 
        }

        a {
            text-decoration: none;
            color:#524f4e;
        }
        
    </style>

    <h3 align="center" font="Courier New">ЗВІТИ  З ЛАБОРАТОРНИХ РОБІТ З ДИСЦИПЛІНИ «РОЗРОБЛЕННЯ WEB-ЗАСТОСУВАННЬ»</h3>
    <h3 align="center" font="Courier New">Бригади №8. Поліщук Владислава та Федор Софії</h3>

</header>
<body>
    <nav>
        <button class="btn-info" onclick="changeLab('1')"> ЛP №1 </button>
        <button class="btn-info" onclick="changeLab('2')"> ЛР №2 </button>
        <button class="btn-info" onclick="changeLab('3')"> ЛР №3 </button>
        <button class="btn-info" onclick="changeLab('4')"> ЛР №4 </button>
        <button class="btn-info" onclick="changeLab('5')"> ЛР №5 </button>
        <button class="btn-info" onclick="changeLab('6')"> ЛР №6 </button>
        <button class="btn-info" onclick="changeLab('7')"> ЛР №7 </button>
        <button class="btn-info" onclick="changeLab('8')"> ЛР №8 </button>
        <button class="btn-info" onclick="changeLab('9')"> ЛР №9 </button>
    </nav>
    <section style="width: 380px; float: left;">
        <button id="btn1" class="btn-info-2" onclick="btnClick(1)"> </button>
        <button id="btn2" class="btn-info-2" onclick="btnClick(2)"> </button>
        <button id="btn3" class="btn-info-2" onclick="btnClick(3)"> </button>
        <button id="btn4" class="btn-info-2" onclick="btnClick(4)"> </button>
        <button id="btn5" class="btn-info-2" onclick="btnClick(5)"> </button>
        <button id="btn6" class="btn-info-2" onclick="btnClick(6)"> </button>
        <button id="btn7" class="btn-info-2" onclick="btnClick(7)"> </button>
        <button id="btn8" class="btn-info-2" onclick="btnClick(8)"> </button>
        <button id="btn9" class="btn-info-2" onclick="btnClick(9)"> </button>
        <button id="btn10" class="btn-info-2" onclick="btnClick(10)"> </button>
        <button id="btn11" class="btn-info-2" onclick="btnClick(11)"> </button>
        <button id="btn12" class="btn-info-2" onclick="btnClick(12)"> </button>
    </section>
    <aside id="place">
        <canvas id="cunt" width="1100" style="overflow: auto; width:1000px; border:0px solid #0ab8ce; margin-right: 50px; margin-top: 20px;">
        </canvas>
    </aside>
    <footer>
        <br>
        <a href="index.php">На головну</a>
        <br>
    </footer>
    <script src="reports.js"></script>

</body>
</html>