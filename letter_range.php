<?php
        
        function letter_range($length){
            $data_range = array();
            $letters = range('A', 'Z');
            for($i=0; $i<$length; $i++)
            {
                $position = $i*26;
                foreach($letters as $ii => $letter)
                {
                    $position++;
                    if($position <= $length)
                        $data_range[] = ($position > 26 ? $data_range[$i-1] : '').$letter;
                }
            }
            return $data_range;
        }
        if($_GET["number"]>0){
            print_r(letter_range($_GET["number"]));
        }
        else{
            echo "Invalid input";
        }
        
    ?>