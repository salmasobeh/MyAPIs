<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My APIS</title>
</head>
<link rel="stylesheet" href="styles.css">

<body>
<div class="container">
        <div class="row">
            <div class="card">
            <div class="inputxy">
                <lable class="lable"> Enter value for x and y</lable>
                <p class="lable">X: <input id="inputx" size="5"/></p>
                <p class="lable">Y: <input id="inputy" size="5"/></p>
                <p class="lable">expression value: <span id ="exp"> </span> </p>
                <button class="button" id="btn" style=" background-color: #cf6925 !important;"> Submit</button>
            </div>
             </div>
          
            <div class="card">
            <div class="palindrome">
                <br>
            <lable class="lable"> Enter a string to check if its palindrome or not </lable>
                <p><input id="palcheck" size="20"/></p>
                <p class="lable">Palindrome Checker: <span id ="pal"> </span> </p>
                <button class="button" id="btnpalindrome" style=" background-color: #cf6925 !important;">Check</button>
                
            </div>
            </div>
           <div class="card">
            <div class="extraspace">
                <br>
            <lable class="lable"> Enter a string to remove extra spaces</lable>
            <p><input id="space" size="20"/></p></p>
            <p class="lable"> New string: <span id ="remove"> </span> </p>
            <button class="button" id="btnspace" style=" background-color: #cf6925 !important;">Submit</button>
            </div>
           </div>
        </div>
        <div class="row2">
        <div class="card2">
            <div class="validation">
           <label class="lable" for="pwd"> Enter a password:</label> 
            <input type="password" id="pwd" class="pass" name="pwd" minlength="8">
            <p class="lable"> validate password: <span id ="hash"> </span> </p>   
            <button class="button" id="btnpass" style=" background-color: #cf6925 !important;">Validate</button>
            </div>
</div>
        </div>
            
      
    </div>
</body>
<script type="text/javascript" src="api.js"></script>
</html>