<?php
/**
 * Created by PhpStorm.
 * User: chensiliang
 * Date: 2016/3/5
 * Time: 10:35
 */
    $ace = array( array('tir','tires','100'),
                  array('oil','pil','10'),
                  array('apple','pear','3'),
                );
    for($row = 0;$row<3;$row++){
        for($cow = 0;$cow<3;$cow++){
            echo '|',$ace[$row][$cow];
        }
        echo '<br/>';
    }
    $bbc = array( array('code'=>'tir',
                        'description'=>'tires',
                        'price'=>'100'
                        ),
                  array('code'=>'oil',
                        'description'=>'pil',
                        'price'=>'10'
                        ),
                  array('code'=>'apple',
                        'description'=>'pear',
                        'price'=>'3'
                       ),
                );
     for($i=0;$i<3;$i++){
         echo $bbc[$i]['code'].'<br/>';
         echo $bbc[$i]['description'].'<br/>';
         echo $bbc[$i]['price'].'<br/>';
     }
    for($r = 0; $r < 3; $r++){
        while (list($key,$value) = each ($ace[$r])){
            echo $key.'=>'.$value;
         }
        echo '|<br/>';
    }
    $abc = array('test'=>'100','tesa2'=>'89','tesa3'=>'4');
    function compare($x,$y){
        if($x[1] == $y[1]){
            return 0;
        } else if($x[1]<$y[1]){
            return -1;
        } else{
            return 1;
        }
    }
    usort($bbc,'compare');