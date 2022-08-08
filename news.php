<style>

    li {
        list-style-type: none;
    }

</style>

<!-- 5.4: Im Frontend sollen nun die Inhalte der einzelnen News ausgegeben werden  -->
<h2>News Page</h2>

<ul style="padding-left: 0px;"> 

    <?php

        $dir    = __DIR__. '/admin/pages/news_eintraege/';
        $files = scandir($dir);
    
        foreach ($files as $file) {

            if ($file !== '.' && $file !== '..') {

                echo ('<li>

                <a href="index.php?page=news_detail&file=' . $file . '">' . $file . '</a>
                
                </li> <br>');

            }
            
        }
    
    ?>

</ul>

<style>

    li:hover {
        border: solid 0.1em black;
        color: white;
        background: none;
    }
    li {
        background: #2b2b2f;
        border: none;
        padding: 10px 14px;
        font-size: 16px;
        width: 120px;
        text-align: center;
    }

</style>