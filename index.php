<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
    </head>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('ul.close').hide();
            
            $('span.category').click(function(){
              $(this).next().toggle('slow');  
            });
        });
    </script>    
    <body>        
        <ul>
            <li>
                <span class="category">Главная</span>
                <ul class="close">
                    <li>Новости</li>
                    <li>О нас</li>
                    <li>Контакты</li>
                </ul>    
            </li>                
        </ul>    
    </body>
</html>
