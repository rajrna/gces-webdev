<?php

$gcesStaffs=[
    "academic" =>[
        [
            "name"=>"Nishal",
            "address"=>"Pokhara",
            "phone"=>[
                "980123456",
                "981234561"
                ],
            "subjects"=>[
                "Web Technology",
                "Java"
                ]   
        ],
        [
            "name"=>"Rajendra",
            "address"=>"Pokhara",
            "phone"=>[
                "9801111106",
                "9812394561"
                ],
            "subjects"=>[
                "C",
                "C++"
                ]   
        ],
        [
            "name"=>"Tara",
            "address"=>"Pokhara",
            "phone"=>[
              "980******",
              "981******"
             ]  ,
            "subjects"=>[
                "C",
                "C++"
            ]   
        ]
     ],
     "non-academic"=>[
        [
            "name"=>"Mama",
            "address"=>"Pokhara",
            "phone"=>[
                "980254566",
                "980785655"
            ]
            ],
        [
            "name"=>"Madam",
            "address"=>"Pokhara",
            "phone"=>[
                "980259877",
                "980788888"
            ]
            ]
            
     ]   
     ];

 
    foreach($gcesStaffs as $type => $staff)
        {
   
            echo '<table border="1px solid ">';
            echo '<tr >'.$type.' : '.'<br/>'.'</tr>';
    foreach($staff as $info =>$details )
    {
        
            foreach($details as $specific => $specific_value)
            {
                echo '<tr>';
                if(is_array($specific_value) || is_object($specific_value))
                {
                    echo '<td  colspan="2">'.$specific.' : '.'</td>';
                    foreach($specific_value as $i => $j)
                    {
                        echo '<td>'.$j.'</td>';
                    }
                }
                else
                {
                    echo '<td class="rows">'.$specific.':'.'</td>'.'<td colspan="3">'.$specific_value.'</td>';
                }
                echo '</tr>';
        }
           
    }
    echo '</tr>';
    echo '</table>';
    echo "<br />";
}