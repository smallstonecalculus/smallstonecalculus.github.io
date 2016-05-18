<?php
 $_SESSION['currentProb'] = 0;
    session_start();
   
?>
<!DOCTYPE HTML>
<html>
<style>
    /*body {
      margin: 0;
      overflow: hidden;
      width: 100%;
      height: 100vh;
      background: #2196F3;
      background: linear-gradient(to top left, #4CB8C4 -40%, #2196F3);
    }*/
    
    .container {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 250px;
        height: 250px;
        margin: auto;
        z-index: 999;
        background-color: white;
    }
    
    .part {
        width: 250px;
        position: absolute;
    }
    
    .svgpath {
        fill: #FFFFFF;
        stroke: rgba(130, 99, 152, 0.95);
        /*#18FFFF;*/
        stroke-width: 1.5px;
        stroke-dasharray: 1000;
        stroke-linecap: round;
        z-index: 1000;
    }
    
    .svgbg {
        fill: rgba(255, 255, 255, 0.2);
        z-index: 999;
    }
    
    #playload {
        animation: dash 2.5s reverse ease-in-out infinite;
    }
    
    @keyframes dash {
        to {
            stroke-dashoffset: 2000;
        }
    }
</style>

<div id="loading">
    <div class='container'>
        <svg class='part' x="0px" y="0px" viewBox="0 0 256 256" style="enable-background:new 0 0 256 256;" xml:space="preserve">
        <path class="svgpath" id="playload" d="M189.5,140.5c-6.6,29.1-32.6,50.9-63.7,50.9c-36.1,0-65.3-29.3-65.3-65.3
        c0,0,17,0,23.5,0c10.4,0,6.6-45.9,11-46c5.2-0.1,3.6,94.8,7.4,94.8c4.1,0,4.1-92.9,8.2-92.9c4.1,0,4.1,83,8.1,83
        c4.1,0,4.1-73.6,8.1-73.6c4.1,0,4.1,63.9,8.1,63.9c4.1,0,4.1-53.9,8.1-53.9c4.1,0,4.1,44.1,8.2,44.1c4.1,0,3.1-34.5,7.2-34.5
        c4.1,0,3.1,24.6,7.2,24.6c4.1,0,2.5-14.5,5.2-14.5c2.2,0,0.8,5.1,4.2,4.9c0.4,0,13.1,0,13.1,0c0-34.4-27.9-62.3-62.3-62.3
        c-27.4,0-50.7,17.7-59,42.3" />

        <path class="svgbg" d="M61,126c0,0,16.4,0,23,0c10.4,0,6.6-45.9,11-46c5.2-0.1,3.6,94.8,7.4,94.8c4.1,0,4.1-92.9,8.2-92.9
        c4.1,0,4.1,83,8.1,83c4.1,0,4.1-73.6,8.1-73.6c4.1,0,4.1,63.9,8.1,63.9c4.1,0,4.1-53.9,8.1-53.9c4.1,0,4.1,44.1,8.2,44.1
        c4.1,0,3.1-34.5,7.2-34.5c4.1,0,3.1,24.6,7.2,24.6c4.1,0,2.5-14.5,5.2-14.5c2.2,0,0.8,5.1,4.2,4.9c0.4,0,22.5,0,23,0" />
      </svg>
    </div>
</div>


<head>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>


    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
            color: black;
            background-color: #B5B5B5;
            font-weight: 600;
        }
        
        #whiteBackground {
            width: 100%;
            height: 100%;
            position: absolute;
            background-color: white;
            z-index: 2;
        }
        
        #questionContainer {
            width: 95%;
            padding-top: 20px;
            background-color: rgb(109, 83, 128);
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
            height: 90vh;
            border-radius: 5px;
            box-shadow: 1px 1px 10px #1a1a1a;
        }
        
        .questionBackground {
            padding: 10px;
            background-color: #FFDD54;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            width: 95%;
            border-radius: 5px;
            box-shadow: 1px 1px 10px #1a1a1a;
        }
        
        .answerDiv {
            /*Green:#70E08C
                Red: #DE4040
            */
            background-color: #FFE478;
            padding: 10px;
            margin: 0;
            width: 98%;
            border-radius: 5px;
        }
        
        .answerForm {
            width: 30%;
            padding: 5px;
        }
        
        .solution {
            float: right;
            margin-top: 0px;
            padding-top: 4px;
        }
        
        #submitButton {
            margin-right: auto;
            margin-left: auto;
            width: 400px;
            text-align: center;
            background-color: #FFDD54;
            box-shadow: 1px 1px 10px #1a1a1a;
            border-radius: 10px;
            font-size: 120%;
            transition: box-shadow 0.4s, letter-spacing 0.4s, background-color 0.4s, transform 0.4s;
        }
        
        #submitButton:hover {
            box-shadow: 5px 5px 10px #1a1a1a;
            background-color: #FFE478;
            transform: scale(1.05, 1.05);
        }
        
        table {
            margin-top: 10px;
            margin-bottom: 10px;
            margin-right: auto;
            margin-left: auto;
            border-collapse: collapse;
            background-color: #ffe066;
        }
        
        td {
            border: 2px solid #1F1F1F;
            width: 30px;
            padding: 5px;
        }
        
        .questionClass {
            padding: 10px;
        }
        
        tr:nth-child(even) {
            background-color: #FFE88C
        }
    </style>

    <style>
        .list {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #FFDD54;
            font-weight: 600;
            font-size: 105%;
            color: #212121;
        }
        
        .element {
            display: block;
            float: right;
            padding: 15px 50px;
            text-align: center;
            transition: background-color 0.15s;
        }
        
        .title {
            display: block;
            float: left;
            text-align: center;
            letter-spacing: 2.5px;
            font-weight: 700;
            padding: 8px 20px;
            font-style: italic;
            font-size: 140%;
        }
        
        #generate {
            color: grey;
        }
        
        .nav a {
            color: inherit;
            text-decoration: none;
        }
        
        .element:hover {
            background-color: #FFF1B8;
        }
        
        #header {
            line-height: 40px;
            text-align: center;
        }
    </style>

</head>


<script type="text/x-mathjax-config">
    MathJax.Hub.Config( { extensions: ["[Contrib]/forminput/forminput.js"], tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}, messageStyle: "none" });


</script>
<script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_CHTML"></script>
<script type="text/x-mathjax-config">
    MathJax.Ajax.config.path["Contrib"] = "//cdn.mathjax.org/mathjax/contrib";
</script>

<body>
    <div id="whiteBackground"></div>

    <div class="header">
        <ul class="list nav">
            <li><a href="/"><span class="title">Small Stone</a></li>




            <a href='/generate'>
                <li><span class='element' id='generate'>Generate</span></li>
            </a>



            <a href="/about">
                <li><span class="element" id="about">About</span></li>
            </a>

            <script>
                $.ajax({
                    type: "post",
                    url: "php/verify.php"
                }).done(function(data) {
                    if (data == 1) {
                        $("ul").append("<a href='/profile'><li><span class='element' id = 'profile'>Profile</span></li></a>");
                    } else {
                        $("ul").append("<a href='/login'><li><span class = 'element' id = 'login'>Login</span></li></a>");
                    }
                });
            </script>
        </ul>
    </div>

    <div id="questionContainer">
        <div class="questionBackground">
            <p id="header"></p>
            <ol>

                <script>
                    var submitted = false;
                    $(document).ready(function() {
                        var problemParams = ["physics", "volume&min=2&max=5", "relatedRates", "optimization", "riemann"];
                        var problemTypes = ["Physics", "Area and Volume", "Related Rates", "Optimization", "Riemann Sums"];

                        //var randSelect = Math.floor(Math.random() * problemParams.length);
                        var randSelect = <?php echo $_SESSION['currentProb'] ?>;
                        <?php $_SESSION['currentProb']  = ($_SESSION['currentProb']+1)%5;?>
                        //console.log(<?php echo 4?>);
                        var probLink = problemParams[randSelect];
                        var probType = problemTypes[randSelect];
                        //probLink = problemParams[4];
                        $.ajax({
                            type: "get",
                            url: "http://calculus-generator.appspot.com/?type=" + probLink
                        }).done(function(data) {
                            //console.log(data);
                            // $("#sendHelp").remove();
                            $("#header").html(data[0].header);
                            for (i = 0; i < data.length; i++) {
                                $("ol").append("<li class = 'questionClass' id = 'question" + i + "'>" + data[i].question + "</li>");
                                $("#question" + i + "").append(
                                    "<div class = 'answerDiv' id = 'answerDiv" + i + "'><input class = 'answerForm' placeholder='Type your answer here!' type = 'text' id = 'answer" + i + "'></div>"
                                );
                                MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
                                setTimeout(function() {
                                    $("#whiteBackground").fadeOut(1000);
                                    $("#loading").fadeOut("fast");
                                }, 500);

                            }


                            $("#submitButton").click(function() {
                                // if(!submitted){
                                if (!submitted) {
                                    submitted = true;
                                    $("#submitButton").html("<h1>Next Problem</h1>");
                                    var totalCorrect = 0;
                                    for (i = 0; i < data.length; i++) {
                                        //console.log("AA")

                                        var answerVal = $("#answer" + i).val();
                                        if (data[i].optional) {
                                            if (data[i].solution.toLowerCase().indexOf("overestimate") > -1 && answerVal.toLowerCase().indexOf("overestimate") > -1 ||
                                                data[i].solution.toLowerCase().indexOf("underestimate") > -1 && answerVal.toLowerCase().indexOf("underestimate") > -1) {
                                                totalCorrect = totalCorrect + 1;
                                                $("#answerDiv" + i).css("background-color", "#70E08C");
                                                $("#answerDiv" + i).append("<p class = 'solution'>Correct!</p>")
                                            } else {
                                                $("#answerDiv" + i).css("background-color", "#DE4040");
                                                $("#answerDiv" + i).append("<p class = 'solution'>The answer is: " + data[i].solution + "</p>")
                                            }
                                        } else if (Math.abs(answerVal - data[i].solution) <= 0.3) {
                                            totalCorrect = totalCorrect + 1;
                                            $("#answerDiv" + i).css("background-color", "#70E08C");
                                            $("#answerDiv" + i).append("<p class = 'solution'>Correct!</p>")

                                        } else {
                                            $("#answerDiv" + i).css("background-color", "#DE4040");
                                            $("#answerDiv" + i).append("<p class = 'solution'>The answer is: " + data[i].solution + "</p>")
                                        }

                                        

                                        //console.log($("#answer"+i).val());
                                    }
                                    MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
                                    $.ajax({
                                        type: "post",
                                        url: "php/score.php",
                                        data: {
                                            totalCorrect: totalCorrect,
                                            totalPoints: data.length,
                                            topic: "Your mom!"
                                        }
                                    }).done(function(data) {
                                        console.log(data);
                                    });
                                }else{
                                    location.reload();
                                }
                            });
                        });
                        //$('#loading').remove();

                    });
                </script>

            </ol>
        </div>
        <div id='submitButton'>
            <h1>Submit</h1></div>
    </div>
</body>

</html>