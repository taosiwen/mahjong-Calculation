<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>国标麻将番数计算器</title>
        <script type="text/javascript" src="src/jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
            var notShown;
            var shown;
            $(document).ready(function(){
                $(".notShown").click(function(){
                    var thisName = $(this).attr("name");
                    if ($(this).hasClass('notSelected')) {
                        $("[name="+thisName+"]").removeClass('notSelected').addClass('beSelected');
                        $(this).removeClass('notSelected').removeClass('beSelected').addClass('selected');

                    } else {
                        $("[name="+thisName+"]").removeClass('beSelected').addClass('notSelected');
                        $(this).removeClass('selected').addClass('notSelected');
                    }
                });
                $(".shown").click(function(){
                    var thisName = $(this).attr("name");
                    if ($(this).hasClass('notSelected')) {
                        $(this).removeClass('notSelected').addClass('selected');
                    } else {
                        $(this).removeClass('selected').addClass('notSelected');
                    }
                });
            });
        </script>
        <style>
            body {
                font-family: STHeiti;
            }
            .outline {
                border: 5px gray solid;
                border-radius: 20px;
                margin:10px 20px;
                padding: 10px 20px;
            }
            .notSelected {
                border: 5px transparent solid;
                border-radius: 10px;
            }
            .selected {
                border: 5px red solid;
                border-radius: 10px;
            }
            .beSelected {
                border: 5px blue solid;
                border-radius: 10px;
            }

        </style>
    </head>
    <body>
        <h1 style="text-align: center;">国标麻将番数计算器</h1>
<!--        <h4 style="text-align: center;">手机端访问建议将手机横过来使用</h4>-->
        <div class="outline">
            <h2>第一步：选择未亮明的手牌</h2>
            <table>
                    <?php
                        $huase = 't';
                        for ($color=1;$color<=3;$color++) {
                            switch ($color) {
                                case 1:
                                    $huase = 't';
                                    break;
                                case 2:
                                    $huase = 's';
                                    break;
                                case 3:
                                    $huase = 'w';
                                    break;
                            }
                            for ($repeat=1;$repeat<=4;$repeat++) {
                                echo '<tr>';
                                for ($t=1;$t<=9;$t++) {
                                    echo '<td class="notSelected notShown" name="'.$huase.'_'.$t.'_'.$repeat.'"><img height="100px" src="src/'.$huase.'_'.$t.'.jpg"></td>';
                                }
                                echo '</tr>';
                            }

                        }
                    ?>

            </table>
            <h2>第二步：选择已经亮明的手牌(吃、碰、杠)</h2>
            <table>
                <?php
                    $huase = 't';
                    for ($color=1;$color<=3;$color++) {
                        switch ($color) {
                            case 1:
                                $huase = 't';
                                break;
                            case 2:
                                $huase = 's';
                                break;
                            case 3:
                                $huase = 'w';
                                break;
                        }
                        for ($repeat=1;$repeat<=4;$repeat++) {
                            echo '<tr>';
                            for ($t=1;$t<=9;$t++) {
                                echo '<td class="notSelected shown" name="'.$huase.'_'.$t.'_'.$repeat.'"><img height="100px" src="src/'.$huase.'_'.$t.'.jpg"></td>';
                            }
                            echo '</tr>';
                        }

                    }
                ?>
            </table>
        </div>

    </body>
</html>
