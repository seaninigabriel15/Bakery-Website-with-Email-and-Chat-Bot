<!DOCTYPE html>
<html>
    <head>

      
        <meta charset="utf=8">
    <title>Kezha Bake| Inquiries</title>
    <meta name = "viewport" content="width=device width , initial-scale=1.0">
    <!-- Favicon  -->
    <link rel="icon" href="images/KLogo.png">
      <link rel="stylesheet" href="css/chat.css"> 
       <link rel="stylesheet" href="css/column.css">  
    </head>
   
    <body > 

<!-- Header -->
<header>
  <?php include'header.php'
?>
</header>


<!-- End of Header -->

<!-- START CHAT BOT  -->
<!-- START CHAT BOT  -->
        <div class="row">

<div class="col s6">
  <div class="instruct">
    <h2>Price List </h2>
   <p>1 TIER CUSTOMIZED CAKE, PRICE STARTS AT 2,500</p>
<p>2 TIER CUSTOMIZED CAKE</p>
<p>PRICE STARTS AT 4,000</p>
<p>3 TIER CUSTOMIZED CAKE</p>
<p>PRICE STARTS AT 7,000</p>
<p>CUSTOMIZED CUPCAKES</p>
<p>PRICE STARTS AT 700 PER 1DOZEN</p>
<p>CUSTOMIZED COOKIES</p>
<p>PRICE STARTS AT 500 PER 1DOZEN</p>
<p>CUSTOMIZED CAKEPOPS</p>
<p>PRICE STARTS AT 400 PER 1DOZEN</p>

            </div>
          </div>
<div class="col s6"
style="padding-top:20px;



 ">
     <textarea readonly="true" id="botChat" 
        style="text-align:left; 

                width:550px;
                height: 300px;
                padding:10px;
                
                margin: 10px;
                left: 500px;
                border:3px solid black; 
                resize:none;
                font-family:Arial; 
                overflow-y:auto;
                user-select:none; 
                font-size:15px;"> 
        </textarea>        
     <p style="position:relative;
               padding-left: 10px;
                 top:-25px;
                ">       
     <input type="text" placeholder="Ask a question" onKeypress="enterButton(event, document.getElementsByTagName('input')[0].value);"
      style="color:red; 
              background-color:black; 
              width:380px;
              height: 150%;
              padding:5;
              margin: 5;

      ">        
      <button onClick="answer(document.getElementsByTagName('input')[0].value)">Ask Me</button></p>  
    </div>
            </div>
         <script>
    
var you = "Me";
botSays("Thanks for checking out our chatBot. Ask for Inquiries\n       Type 'command' or 'help' to start\n---")
            // Recognized Speech Patterns for Question Responses
var Hello = ["HI", "HEY", "HOWDY", "HEYA", "HOLA", "HELLO", "SUP", "KONNICHIWA", "ALOHA"]
var Goodbye = ["BYE", "SEE YA", "CYA", "LATER", "ADIOS", "SAYONARA", "SEEYA"]
var Greeting = ["WHAT'S UP", "HOW'S IT GOING", "HOW ARE YOU", "NICE DAY", "GOOD MORNING", "GOOD NIGHT"]
var Name = [ "WHAT IS YOUR NAME", "WHAT'S YOUR NAME", "WHO ARE YOU", "WHAT DO THEY CALL YOU", "COMO TE LLAMAS"]
var Actions = ["HELP", "COMMANDS", "COMMAND"]
var Questions = ["QUESTION", "COMMANDS", "RATES", "LOCATION", "CONTACT", "TIMEFRAME","Time"];
var HTMLTags1 = ["<P>", "<I>", "<SPAN>", "<DIV>", "<ARTICLE>", "<IFRAME>", "<A>", "<ABBR>","<ADDRESS>","<AUDIO>"];
        // Skip the CMD Line and learn HTML by reading my code!~~ LMAO, here have fun.
var HTMLTags2 = [
"<A>", //    Defines a hyperlink
"<ABBR>", //Defines an abbreviation or an acronym
"<ACRONYM>", //    Not supported in HTML5. Use <abbr> instead. Defines an acronym
"<ADDRESS>", //    Defines contact information for the author/owner of a document
"<APPLET>", //    Not supported in HTML5. Use <embed> or <object> instead. Defines an embedded applet
"<AREA>", //    Defines an area inside an image-map
"<ARTICLE>", //    Defines an article
"<ASIDE>", //    Defines content aside from the page content
"<AUDIO>", //    Defines sound content
"<B>" // Defines bold text
]
var HTMLTags3 = [
"<BASE>", // Specifies the base URL/target for all relative URLs in a document
"<BASEFONT>", //    Not supported in HTML5. Use CSS instead. Specifies a default color, size, and font for all text in a document
"<BDI>",    // Isolates a part of text that might be formatted in a different direction from other text outside it
"<BDO>",    //Overrides the current text direction
"<BIG>",    //Not supported in HTML5. Use CSS instead. Defines big text
"<BLOCKQUOTE>", //    Defines a section that is quoted from another source
"<BODY>",    //Defines the document's body
"<BR>",    //Defines a single line break
"<BUTTON>",    //Defines a clickable button
"<CANVAS>"    //Used to draw graphics, on the fly, via scripting (usually JavaScript)
]
var HTMLTags4 = [
"<CAPTION>",    //Defines a table caption
"<CENTER>", //    Not supported in HTML5. Use CSS instead. Defines centered text
"<CITE>", //Defines the title of a work
"<CODE>",    //Defines a piece of computer code
"<COL>",    //Specifies column properties for each column within a <colgroup> element 
"<COLGROUP>",    //Specifies a group of one or more columns in a table for formatting
"<DATALIST>",    //Specifies a list of pre-defined options for input controls
"<DD>",    //Defines a description/value of a term in a description list
"<DEL>",    //Defines text that has been deleted from a document
"<DETAILS>",    //Defines additional details that the user can view or hide
"<DFN>" //    Represents the defining instance of a term
]
var colors = ["BLUE", "RED", "GREEN", "YELLOW", "WHITE", "BLACK", "SILVER", "GRAY" ];
var Else = true;
var questions = [colors, HTMLTags4, HTMLTags3, HTMLTags2, HTMLTags1, Hello, Goodbye, Greeting, Name, Actions, Questions];


var reactions=[BotHello, BotGoodbye,BotGreeting];
var BotHello = ["HI", "HEY", "HOWDY", "HEYA", "HOLA", "HELLO", "SUP", "KONNICHIWA", "ALOHA"]
var BotGoodbye = ["BYE", "SEE YA", "CYA", "LATER", "ADIOS", "SAYONARA", "SEEYA"]
var BotGreeting = ["WHAT'S UP", "HOW'S IT GOING", "HOW ARE YOU", "NICE TO SEE YOU", "GOOD MORNING", "WELCOME"]
var BotPleasant = ["Thanks.", "Good job.", "Cool.", "I see.", "Anyway.", "right-o."]

function answer(x) {
    var botOut = botChat.value;
    document.getElementsByTagName("textarea")[0] = botChat
    //RESPONSES//

                document.getElementsByTagName("input")[0].value = ""
                if (x.charAt(0).includes("!") === false){
                youSay(x); botChat.scrollTop = botChat.scrollHeight;
                } 
                question = x.toUpperCase()
                for (i = 0; i < 10; i++) {
            /*          EMPTY RESPONSE          */                    
                if (question === " " || null) {
                    setTimeout( function() { botSays("\nBot : Please Reply with the Proper Commands :) Thanks;)"); botChat.scrollTop = botChat.scrollHeight;}, 600);
                return; }
                /*          COMMAND MENU RESPONSES         */                    
                else if (question.includes("COMMANDS") ) {
                botSays("\nKezhaBot : Type Rates, Location, Contact and Timeframe."); botChat.scrollTop = botChat.scrollHeight;
                return;
                }else if (question === "RATES" ) {
                    botSays("\nKezhaBot : Rates are base on Produuct Category."); botChat.scrollTop = botChat.scrollHeight; botChat.style.backgroundColor = x.slice(9);
                return;
                } else if (question === "LOCATION" ) {
                    botSays("\nKezhaBot : #12 NorthLane Street, Greymarville Subdivision, Talon 2, Las Piñas"); botChat.scrollTop = botChat.scrollHeight; botChat.style.color = x.slice(6);
                return;
                } else if (question === "CONTACT") {
                    botSays("\nKezhaBot : You can reach us through: \nPhone number:09098383801 \nFacebook Page: https://www.facebook.com/KezhaBakesCakesAndCupcakes/?ref=br_rs \nInstagram Page: https://www.instagram.com/kezhabakes/ \n"); botChat.scrollTop = botChat.scrollHeight;
                return;
                } else if (question === "TIMEFRAME") {
                    botSays("\nKezhaBot : Estimated processing is 3-5 days"); botChat.scrollTop = botChat.scrollHeight;
                return;
                }
 /* Questions, Answers and Responses */
                if (question.includes(Goodbye[i])) {
                    Else = false;
                    setTimeout(botSays, 600, "\
                                 Bot : Godspeed. Leave an upvote?")
                } else if (question.includes(Name[i])) {
                    Else = false; setTimeout(botSays, 600, "\nKezhaBot : I am KezhaBot. How can I help you? Please type help to see my commands.")
                } else if ( question.includes(HTMLTags1[i]) ) {
                    /*HTML Tag Definitions Courtesy of W3Schools.com*/
                    Else = false; if (HTMLTags1[i] === "<P>" ) { setTimeout(botSays, 600, "\nKezhaBot : The HTML tag '<p>' Defines a paragraph.") } else if (HTMLTags1[i] === "<I>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<i>' Defines a part of text in an alternate voice or mood. Italics.") } else if (HTMLTags1[i] === "<SPAN>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<Span>' Defines a section in a document.") } else if (HTMLTags1[i] === "<A>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<Span>' Defines a section in a document.") }
                } else if ( question.includes(HTMLTags2[i]) ) {
                    /*HTML Tag Definitions Courtesy of W3Schools.com*/
                    Else = false; if (HTMLTags2[i] === "<ABBR>" ) { setTimeout(botSays, 600, "\nKezhaBot : The HTML tag '<abbr>' Defines an abbreviation or acronym.") } else if (HTMLTags2[i] === "<ACRONYM>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<acronym>' Not supported in HTML5, use '<abbr>' instead.") } else if (HTMLTags2[i] === "<ADDRESS>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<address>' Defines contact information for the author/owner of a document.") } else if (HTMLTags2[i] === "<APPLET>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<applet>' Not supported in HTML5, use '<embed>' or '<object>' instead.") }else if (HTMLTags2[i] === "<AREA>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<area>' Defines an area inside an image map") } else if (HTMLTags2[i] === "<ARTICLE>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<article>' Defines an article.") } else if (HTMLTags2[i] === "<ASIDE>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<aside>' Defines content aside from the page content.") }  else if (HTMLTags2[i] === "<AUDIO>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<audio>' Defines sound content.") } else if (HTMLTags2[i] === "<B>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<B>' Defines bold text.") }
                } else if ( question.includes(HTMLTags3[i]) ) {
                    Else = false;
                    if (HTMLTags3[i] === "<BASE>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<base>' Specifies the base URL/target for all relative URLs in a document") } else if (HTMLTags3[i] === "<BASEFONT>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<basefont>' Not supported in HTML5. Use CSS instead.  Specifies a default color, size, and font for all text in a document. ") } else if (HTMLTags3[i] === "<BDI>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<bdi>' Isolates a part of text that might be formatted in a different direction from other text outside it. ") } else if (HTMLTags3[i] === "<BDO>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<bdo>' Overrides the current text direction. ") } else if (HTMLTags3[i] === "<BIG>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<big>' Not supported in HTML5, use CSS instead. Defines big text. ") } else if (HTMLTags3[i] === "<BLOCKQUOTE>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<blockquote>' Defines a section that is quoted from another source. ") } else if (HTMLTags3[i] === "<BODY>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<body>' Defines a document's body. ") } else if (HTMLTags3[i] === "<BR>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<br>' Defines a single line break. ") } else if (HTMLTags3[i] === "<BUTTON>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<button>' Defines a clickable button. ") } else if (HTMLTags3[i] === "<CANVAS>" ) { setTimeout(botSays, 600, "\nBot : The HTML tag '<canvas>' Used to draw graphics, on the fly, via scripting. Usually Javascript. ") }         

                }else if (question.includes(Actions[i])) {
                    Else = false; if (question.includes === "COMMANDS" || "COMMAND") { setTimeout(botSays, 600, "\nKezhaBot : Type Rates, Location, Contact and Time.") } else { setTimeout(botSays, 600, "\nBot : I am KezhaBot. How can I help you? Please type help to see my commands.") }
                } else if (question.includes(Questions[i])) {
				Else = false; if (Greeting[i].includes("HOW")&&Greeting[i].includes("YOU")) {
                    var reactHello = "How am I";
                    var reactGreeting = "I would say I am 40% complete." }
                    else {
                   num = Math.ceil(Math.random()*3)
                    var reactHello = Greeting[num]
                    reactHello = reactHello.toLowerCase();
                    reactHello = reactHello.charAt(0).toUpperCase() + reactHello.slice(1);
                    var reactGreeting = "\nKezhaBot : Same old. Getting coded mostly.";
                    }
                    var reactPleasant = BotPleasant[num]
                    setTimeout(botSays, 600, "\nKezhaBot : " + reactHello + ". " + reactGreeting + " " + reactPleasant )
                  } else if (question.includes(Hello[i])) {
                  var reactHello = Hello[i];
                  reactHello = reactHello.toLowerCase();
                  reactHello = reactHello.charAt(0).toUpperCase() + reactHello.slice(1);
                  var reactGreeting = "";
                  var reactPleasant = ""
                    Else = false;
                      setTimeout(botSays, 600, "\nKezhaBot : " + reactHello + ".")
                } else { } }  setTimeout( function() {
                 if (Else === true) {
                  botSays("\nKezhaBot : I don't understand your request. Please type 'help' or 'command/s' to see my commands.");
                   } 
                 } , 700);  
                setTimeout( function() {
                  Else = true; botChat.scrollTop = botChat.scrollHeight;}, 730)
            } function botSays(x) {
                document.getElementsByTagName("textarea")[0].innerHTML += x;
            } function youSay(x) { botSays("\n"+ you + " \ : " + x)
            }
            function youDo(x) { botSays("\n"+ you + " " + x)                                            
            } function enterButton(e, x) { if (e.keyCode == 13) { answer(x); }   }   
             </script>

<!-- END CHAT BOT  -->
<!-- END  CHAT BOT  -->

  <?php include'footer.php'
?>
 </body>
 </html>


 <style>

.instruct{

  padding-top: 30px;
  padding-right: 50px;
  

  .instruct p{

font-family: Arial;
font-size: 10px;
margin-top: 5px;


  }
 </style>>