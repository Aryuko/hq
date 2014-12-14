<html>
    <head>
        <title>showUser</title>
		<meta charset="utf-8">
    </head>
    <body>
        <h1>I tabellen users finns denna information:</h1>
        <?php

            $c = mysql_connect("localhost", "root", "");
            mysql_select_db("Test", $c);
            $r = mysql_query("select id, fname, lname from users", $c);

            while ($post = mysql_fetch_object($r)) {
                    $v = $post->id;
                    $t = $post->fname . " " . $post->lname;
                    echo "$t har id $v <br/>"; 	
            }
            mysql_free_result($r);
            mysql_close();

        ?>
    </body>
</html>