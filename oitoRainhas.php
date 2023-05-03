<?php

// $array vazio

// gera um aleatorio pra coluna 1 e armazena no array - $array1

// verifica $array1 



function rodar (){

    $iteracoes = 0;
    
    a: 
    $iteracoes++;
    
        
            $arr = array(
                array('X','X','X','X','X','X','X','X'),
                array('X','X','X','X','X','X','X','X'),
                array('X','X','X','X','X','X','X','X'),
                array('X','X','X','X','X','X','X','X'),
                array('X','X','X','X','X','X','X','X'),
                array('X','X','X','X','X','X','X','X'),
                array('X','X','X','X','X','X','X','X'),
                array('X','X','X','X','X','X','X','X')
            );
            
            
            // COLUNA 0
            
            
            $rnd = rand(0,7);
            $arr[$rnd][0] = 'O';
            
            
            // COLUNA 1
            
            
                $test1 = true;
                while ($test1 == true){
                    $rnd1 = rand(0,7);
                    if($rnd1 != $rnd && $rnd1 != $rnd + 1 && $rnd1 != $rnd - 1) {
                        $test1 = false;
                        break;
                    } 
                } 
            
            $arr[$rnd1][1] = 'O';
            
            
            
            // COLUNA 2
            
                $test2 = true;
                while ($test2 == true) {
                    $rnd2 = rand(0,7);
                    if($rnd2 != $rnd1 && $rnd2 != $rnd1 + 1 && $rnd2 != $rnd1 - 1 && $rnd2 != $rnd - 2 && $rnd2 != $rnd && $rnd2 != $rnd + 2) {
                        $test2 = false;
                        break;
                    } 
                }
            
            $arr[$rnd2][2] = 'O';
            
            
            
            // COLUNA 3 
            
            $test3 = true;
            while ($test3 == true) {
                $rnd3 = rand(0,7);
                if($rnd3 != $rnd2 && $rnd3 != $rnd2 + 1 && $rnd3 != $rnd2 - 1 && $rnd3 != $rnd1 + 2 && $rnd3 != $rnd1 - 2 && $rnd3 != $rnd && $rnd3 != $rnd1 && $rnd3 != $rnd + 3 && $rnd3 != $rnd - 3) {
                    $test3 = false;
                    break;
                } 
            }
            
            $arr[$rnd3][3] = 'O';
            
            
            // COLUNA 4
            
            $test4 = true;
            while ($test4 == true) {
                $rnd4 = rand(0,7);
                if($rnd4 != $rnd3 && $rnd4 != $rnd2 && $rnd4 != $rnd1 && $rnd4 != $rnd && $rnd4 != $rnd3 + 1 && $rnd4 != $rnd3 - 1 && $rnd4 != $rnd2 + 2 && $rnd4 != $rnd2 - 2 && $rnd4 != $rnd1 + 3 && $rnd4 != $rnd + 4) {
                    $test4 = false;
                    break;
                } 
            }
            
            $arr[$rnd4][4] = 'O';
            
            
            // COLUNA 5
            
            
            $i = 0;
            $encontrou1 = false;
            while ($i < 20) {
        
                    $rnd5 = rand(0,7);
                    if($rnd5 != $rnd4 && $rnd5 != $rnd3 && $rnd5 != $rnd2 && $rnd5 != $rnd1 && $rnd5 != $rnd && $rnd5 != $rnd4 + 1 && $rnd5 != $rnd4 - 1 && $rnd5 != $rnd3 - 2 && $rnd5 != $rnd3 + 2 && $rnd5 != $rnd2 + 3 && $rnd5 != $rnd2 - 3 && $rnd5 != $rnd1 + 4 && $rnd5 != $rnd1 - 4 && $rnd5 != $rnd + 5 && $rnd5 != $rnd - 5) {
                        $encontrou1 = true;
                        break;
                    }
                    
                    $i++;
            } 
    
            if($encontrou1 != true) {
                 goto a;
             } 
            
            
            $arr[$rnd5][5] = 'O';
            
            
            // COLUNA 6
            
            $encontrou2 = false;
            $i = 0;
            while ($i < 20) {
    
                    $rnd6 = rand(0,7);
    
                    if($rnd6 != $rnd5 && $rnd6 != $rnd4 && $rnd6 != $rnd3 && $rnd6 != $rnd2 && $rnd6 != $rnd1 && $rnd6 != $rnd && $rnd6 != $rnd5 + 1 && $rnd6 != $rnd5 - 1 && $rnd6 != $rnd4 - 2 && $rnd6 != $rnd4 + 2 && $rnd6 != $rnd3 + 3 && $rnd6 != $rnd3 - 3 && $rnd6 != $rnd2 + 4 && $rnd6 != $rnd2 - 4 && $rnd6 != $rnd1 + 5 && $rnd6 != $rnd1 - 5 && $rnd6 != $rnd + 6 && $rnd6 != $rnd - 6) {
        
                        $encontrou2 = true;
                        break;
                       
                    }
                    $i++;
            }
    
                 if($encontrou2 != true) {
                     goto a;
                 } 
                    
            
            $arr[$rnd6][6] = 'O';
            
            
            // COLUNA 7
            
            $i = 0;
            $encontrou3 = false;
            while ($i < 20) {
            
                    $rnd7 = rand(0,7);
                    if($rnd7 != $rnd6 && $rnd7 != $rnd5 && $rnd7 != $rnd4 && $rnd7 != $rnd3 && $rnd7 != $rnd2 && $rnd7 != $rnd1 && $rnd7 != $rnd && $rnd7 != $rnd6 + 1 && $rnd7 != $rnd6 - 1 && $rnd7 != $rnd5 - 2 && $rnd7 != $rnd5 + 2 && $rnd7 != $rnd4 + 3 && $rnd7 != $rnd4 - 3 && $rnd7 != $rnd3 + 4 && $rnd7 != $rnd3 - 4 && $rnd7 != $rnd2 + 5 && $rnd7 != $rnd2 - 5 && $rnd7 != $rnd1 + 6 && $rnd7 != $rnd1 - 6 && $rnd7 != $rnd + 7 && $rnd7 != $rnd - 7) {
                        $encontrou3 = true;
                        break;
                    } 
    
                    $i++;
            }
    
             if($encontrou3 != true) {
                goto a;
             } 
            
            $arr[$rnd7][7] = 'O';
            
            
            
            echo PHP_EOL;
            // VISUALIZACAO DA TABELA
            echo 'Solução:';
            echo PHP_EOL;
            echo 'Indices: ' . ($rnd+1),1 . " " . ($rnd1+1),2 . " " . ($rnd2+1),3 . " " . ($rnd3+1),4 . " " . ($rnd4+1),5 . " " . ($rnd5+1),6 . " " . ($rnd6+1),7 . " " . ($rnd7+1),8;
    
            echo PHP_EOL;
            echo PHP_EOL;
    
            echo $arr[0][0] . '|'.  $arr[0][1] . '|'.  $arr[0][2] . '|'.  $arr[0][3] . '|'.  $arr[0][4] . '|'.  $arr[0][5] . '|'.  $arr[0][6] . '|'.  $arr[0][7];
            echo PHP_EOL;
            echo $arr[1][0] . '|'.  $arr[1][1] . '|'.  $arr[1][2] . '|'.  $arr[1][3] . '|'.  $arr[1][4] . '|'.  $arr[1][5] . '|'.  $arr[1][6] . '|'.  $arr[1][7];
            echo PHP_EOL;
            echo $arr[2][0] . '|'.  $arr[2][1] . '|'.  $arr[2][2] . '|'.  $arr[2][3] . '|'.  $arr[2][4] . '|'.  $arr[2][5] . '|'.  $arr[2][6] . '|'.  $arr[2][7];
            echo PHP_EOL;
            echo $arr[3][0] . '|'.  $arr[3][1] . '|'.  $arr[3][2] . '|'.  $arr[3][3] . '|'.  $arr[3][4] . '|'.  $arr[3][5] . '|'.  $arr[3][6] . '|'.  $arr[3][7];
            echo PHP_EOL;
            echo $arr[4][0] . '|'.  $arr[4][1] . '|'.  $arr[4][2] . '|'.  $arr[4][3] . '|'.  $arr[4][4] . '|'.  $arr[4][5] . '|'.  $arr[4][6] . '|'.  $arr[4][7];
            echo PHP_EOL;
            echo $arr[5][0] . '|'.  $arr[5][1] . '|'.  $arr[5][2] . '|'.  $arr[5][3] . '|'.  $arr[5][4] . '|'.  $arr[5][5] . '|'.  $arr[5][6] . '|'.  $arr[5][7];
            echo PHP_EOL;
            echo $arr[6][0] . '|'.  $arr[6][1] . '|'.  $arr[6][2] . '|'.  $arr[6][3] . '|'.  $arr[6][4] . '|'.  $arr[6][5] . '|'.  $arr[6][6] . '|'.  $arr[6][7];
            echo PHP_EOL;
            echo $arr[7][0] . '|'.  $arr[7][1] . '|'.  $arr[7][2] . '|'.  $arr[7][3] . '|'.  $arr[7][4] . '|'.  $arr[7][5] . '|'.  $arr[7][6] . '|'.  $arr[7][7];
            
            
        
    echo PHP_EOL;
    echo PHP_EOL;
    
    echo "Tentativas até achar a solução: " . $iteracoes;
}

$ler = readline("Deseja visualizar o tabuleiro das soluções? (s/n) ");

if ($ler == 's'){
    rodar();
}
