<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Question Generator</title>
    <style>
        body{
        background-color: antiquewhite;
        color: #442c14;
        }
        
        #form1
        {
            position: absolute;
            margin-left: 500px;
            margin-top: 0px;
        }

        label{
                font-size: 22px;
        }

        #itext{
            width: 500px;
            height: 180px;
            margin: 10px 0px 15px 0px;
            font-size: 18px;
        }

        #test_type{
            width: 250px;
            height: 45px;
            padding: 10px;
            margin: 8px 0px;
            margin-bottom: 20px;
            font-size: 18px;
        }

        #noq{
            width: 245px;
            padding: 10px;
            margin: 8px 0px;
            font-size: 18px;
        }
        .option1{
            font-size: 20px;
        }

        #submit
        {
            background-color: #442c14;
            font-size: 20px;
            color: antiquewhite;
            padding: 10px;
            border-radius: 5px;
            margin-left: 200px;
            margin-top: 30px;
        }

        #submit:hover{
            opacity: 80%;
        }

        img{
            width: 60px;
            height: 70px;
        }

        #image
        {
        
            position: absolute;
            margin-left: 10px;
            margin-top: 5px;
        }

        .logo {
            display: flex;
            align-items: center;
            position: relative;
        
        }

        .logo .img {
            margin-left:10px;
            margin-top:10px;
            margin-right: 10px; 
        }

        .logo h3 {
            margin: 10 0 10 20px; 
        }

        .logo .game {
            position: absolute;
            top: 0;
            right: 0;
            margin: 30px;
        
        }
        span{
            font-size: 44px;
        }

        h4{
            font-size: 16px;
            font-weight: bolder;
            float: left;
            position:absolute;
            margin-top:70px;
            margin-left:140px;
            
        }

        #logout
        {
            color: #442c14;
            text-decoration: none;
            font-size: 20px;
        }

        #logout:hover
        {
            text-decoration:underline;
            color: #442c14;
        }

    </style>
</head>
<body>
    
    <div class="logo">
        <img class="img" src="images/image2.png" alt="text">
        <h3 id="questhive"><span>Q</span>uesthive</h3>
        <h4 class="head">Learn to lead</h4> 
        <div class="game">
        <a  id="logout" href="generate.php" >Back</a>
        </div>
    </div>
    
    <div id="form1">
    <h1>Generate Paragraph Questions</h1>
    <form method="post" action="paragraph_results.php">
        <label for="itext">Input Text:</label><br/>
        <textarea name="itext" id="itext" required></textarea><br/>

        <label for="test_type" id="choosetype">Choose Type:</label><br/>
        <select name="test_type" id="test_type" required>
            <option value="objective" class="option1">Objective (Questions only)</option>
            <option value="subjective" class="option1">Subjective (Questions and Answers)</option>
        </select><br/>

        <label for="noq" id="noq1">Number of Questions:</label><br/>
        <input type="number" name="noq" id="noq" required/><br/>

        <input type="submit" value="Generate Test"  id="submit"/>
    </form></div>
</body>
</html>