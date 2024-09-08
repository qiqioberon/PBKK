 <!DOCTYPE html>
 <!-- Created By CodingLab - www.codinglabweb.com -->
 <html lang="en" dir="ltr">

 <head>
     <meta charset="UTF-8">
     <title> Glassmorphism Calculator| CodingLab </title>
     <link rel="stylesheet" href = "{{ asset('css/kalkulator.css') }}">
 </head>

 <body>
     <div class="bubbles">
         <span class="one"></span>
         <span class="two"></span>
         <span class="three"></span>
         <span class="four"></span>
         <span class="five"></span>
         <span class="six"></span>
         <span class="seven"></span>
         <span class="seven"></span>
     </div>
     <div class="bubbles">
         <span class="one"></span>
         <span class="two"></span>
         <span class="three"></span>
         <span class="four"></span>
         <span class="five"></span>
         <span class="six"></span>
         <span class="seven"></span>
         <span class="seven"></span>
     </div>
     <div class="bubbles">
         <span class="one"></span>
         <span class="two"></span>
         <span class="three"></span>
         <span class="four"></span>
         <span class="five"></span>
         <span class="six"></span>
         <span class="seven"></span>
         <span class="seven"></span>
     </div>
     <div class="bubbles">
         <span class="one"></span>
         <span class="two"></span>
         <span class="three"></span>
         <span class="four"></span>
         <span class="five"></span>
         <span class="six"></span>
         <span class="seven"></span>
         <span class="seven"></span>
     </div>
     <div class="container">
         <form action="#" name="forms">
             <input type="text" name="answer">
             <div class="buttons">
                 <input type="button" value="AC" onclick="forms.answer.value = ''">
                 <input type="button" value="DEL"
                     onclick="forms.answer.value = forms.answer.value.substr(0 , forms.answer.value.length -1)">
                 <input type="button" value="%" onclick="forms.answer.value += '%'">
                 <input type="button" value="/" onclick="forms.answer.value += '/'">
             </div>
             <div class="buttons">
                 <input type="button" value="7" onclick="forms.answer.value += '7'">
                 <input type="button" value="8" onclick="forms.answer.value += '8'">
                 <input type="button" value="9" onclick="forms.answer.value += '9'">
                 <input type="button" value="*" onclick="forms.answer.value += '*'">
             </div>
             <div class="buttons">
                 <input type="button" value="4" onclick="forms.answer.value += '4'">
                 <input type="button" value="5" onclick="forms.answer.value += '5'">
                 <input type="button" value="6" onclick="forms.answer.value += '6'">
                 <input type="button" value="-" onclick="forms.answer.value += '-'">
             </div>
             <div class="buttons">
                 <input type="button" value="1" onclick="forms.answer.value += '1'">
                 <input type="button" value="2" onclick="forms.answer.value += '2'">
                 <input type="button" value="3" onclick="forms.answer.value += '3'">
                 <input type="button" value="+" onclick="forms.answer.value += '+'">
             </div>
             <div class="buttons">
                 <input type="button" value="0" onclick="forms.answer.value += '0'">
                 <input type="button" value="00" onclick="forms.answer.value += '00'">
                 <input type="button" value="." onclick="forms.answer.value += '.'">
                 <input type="button" value="=" onclick="forms.answer.value = eval(forms.answer.value)">
             </div>
         </form>
     </div>
 </body>

 </html>
