<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Converter</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Playfair+Display:wght@600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h3>Case Converter</h3>
    </header>
    <textarea type="text" id="string" placeholder="Type or Paste your Text here"></textarea>
    <div class="count">
        <p>Count Letters/Numbers: 
        <span id="countString">0</span> | Word Count: <span id="wordCount">0</span> | Line Count: <span id="lineCount">0</span>
        </p>
    </div>
    <div class="btn-set">
        <button type="submit" id="revString" class="btn ">Reverse String</button>
        
        <button type="submit" id="uppercaseBtn" class="btn ">UPPER CASE</button>
        
        <button type="submit" id="lowercaseBtn" class="btn ">lower case</button>
        
        <button type="submit" id="CapitalizeBtn" class="btn ">Capitalize Case</button>
        
        <button type="submit" id="altcaselowBtn" class="btn ">aLtErNaTiNg cAsE</button>
        
        <button type="submit" id="altcaseupperBtn" class="btn">AlTeRnAtInG CaSe</button>
        
        <button id="copyCbd" class="btn">Copy To Clipboard</button>

        <button id="clear" class="btn">Clear</button>
    </div>
    
    <script src="main.js"></script>
</body>
</html>