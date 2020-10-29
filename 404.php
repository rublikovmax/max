<?php header("HTTP/1.0 404 Not Found"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta charset="utf-8">
		<title>Максим Рубликов. Официальный сайт</title>
		<meta name="keywords" content="Максим Рубликов, визажист Максим Рубликов, официальный сайт Максима Рубликова, Максим Рубликов сайт, контакты Максима Рубликова, макияж Кострома, визажист Кострома, вечерний макияж, свадебный макияж, дневной макияж"/>
		<meta name="description" content="Максим Рубликов. Официальный сайт визажиста. Информация о Максиме: фотографии работ, контактная информация"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="/css/style.css" rel="stylesheet"/>
		<meta name="yandex-verification" content="587662de729dbe94"/>
		
		<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="http://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
	</head>
    <body>
	<div class="main-body">
		<div class="page-header">
			
			<?php require $_SERVER['DOCUMENT_ROOT'].'/_parts/menu.php';?>
			
		</div>
	
        <div class="error-404">
			<img class="block banner-404" src="/_img/404.jpg"/>
        </div>
        
        <div class="information">
            <p>По какой-то причине запрашиваемая страница не найдена. Пожалуйста, <a class="normal-link" href="javascript:history.back()">вернитесь назад</a> или <a class="normal-link" href="/">перейдите на главную</a>.</p>
			
			<?php require $_SERVER['DOCUMENT_ROOT'].'/_parts/free-days.html';?>
        </div>
        
        <div class="footer">
		
			<div class="block hidden button-up"></div>
			
			<?php require $_SERVER['DOCUMENT_ROOT'].'/_parts/catch-block.html';?>
			
			<script type="text/javascript" src="/_js/animation.js"></script>
			<script type="text/javascript" src="/_js/fancybox_options.js"></script>
			
            <!-- Yandex.Metrika counter -->
                <script type="text/javascript" >
                    (function (d, w, c) {
                        (w[c] = w[c] || []).push(function() {
                            try {
                                w.yaCounter45338217 = new Ya.Metrika({
                                    id:45338217,
                                    clickmap:true,
                                    trackLinks:true,
                                    accurateTrackBounce:true,
                                    webvisor:true
                                });
                            } catch(e) { }
                        });

                        var n = d.getElementsByTagName("script")[0],
                            s = d.createElement("script"),
                            f = function () { n.parentNode.insertBefore(s, n); };
                        s.type = "text/javascript";
                        s.async = true;
                        s.src = "https://mc.yandex.ru/metrika/watch.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else { f(); }
                    })(document, window, "yandex_metrika_callbacks");
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/45338217" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
            <!-- /Yandex.Metrika counter -->
        </div>
	</div>
    </body>
</html>