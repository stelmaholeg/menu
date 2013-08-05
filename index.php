<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
    </head>
    <style>
        ul.menu{
            margin: 0;
            padding: 0; 
            width: 150px;
        }
        li.menu{
             list-style-type: none;
        }        
        .submenu{
            margin: 0;
            padding: 0; 
            list-style-type: none;
            display: none;
        }        
        .submenu li{
            /*list-style-type: none;*/
            color: #FFF;                     
        }
        .submenu a{
            display: block;
            padding-left: 20px; 
            color: #000;
            text-decoration: none;            
        }
        .submenu a:hover{  
          /*  display: block;
            padding-left: 20px;*/ 
            color: #FFF;
            background-color: #0000FF;   
            cursor: pointer;
        }        
    </style>    
    <script src="js/jquery.js" type="text/javascript"></script>
    <script>
        $(window).load(function(){ 
            $('span.category').click(function(){
                  $(this).next('ul').slideToggle(300);
              });
              
            //$('li.submenu').  
        });
    </script>    
    <body>  
        
        <ul class="menu">
            <li class="menu">
                <span class="category">Главная</span>
                <ul class="submenu">
                    <li><a href="#" title="">Новости</a></li>
                    <li><a href="#" title="">О нас</a></li>
                    <li><a href="#" title="">Контакты</a></li>
                </ul>
            </li>
            <li class="menu">
                <span class="category">Каталог</span>
                <ul class="submenu">
                    <li><a href="#" title="">Телефоны</a></li>
                    <li><a href="#" title="">Ноутбуки</a></li>
                    <li><a href="#" title="">Холодильники</a></li>
                </ul>    
            </li>                
        </ul>
        
    </body>
</html>
