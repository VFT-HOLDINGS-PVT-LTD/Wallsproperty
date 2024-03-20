<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Codeigniter Pagination Example</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pagination.css">
          <!--bootstrap CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-

        BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }            

            #body {
                margin: 0 15px 0 15px;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }

            h1 {
                margin-left: 15px;
            }

            .error {
                color: #E13300;
            }

            .success {
                color: darkgreen;
            }
        </style>
    </head>
    <body>
        <div id="container">
            <h1>CodeIgniter Pagination Example</h1>            
            <div id="body">
                <?php
                foreach ($ad_list->result() as $blog) {
                    ?>
                    <div class="post">
                        <h2 class="title"><?php echo $blog->AD_ID; ?></h2>
                        <p class="meta">
                            <?php
                            echo $blog->AD_ID;
                            ?>
                        <div class="entry">
                            <p><?php echo $blog->AD_ID; ?></p>
                        </div>
                    </div>
                 <div class="pagination_links"> 
                    <?php
                }
                if (strlen($pagination)) {
                    echo $pagination;
                }
                ?>
                 </div>
            </div>
        </div>
    </body>
</html>