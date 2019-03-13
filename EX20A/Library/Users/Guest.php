<?php

namespace Library\Users;

 // Declaring a class 

        class Guest {

//      Creating properties within the class.            
            private $first_name;
            private $last_name;
            
            
//      Creating methods  
//      add method for Guest to search allowed tables
   
            public function __constructor(){
                return "Welcome, $this->first_name" . " " . $this->last_name . "\n";
            }
            
            function view($list) {
                if ($list == "Author" || "Author_Book_Intemediary" || "Book" || "Category" ) {
                    for ($i = 0; $i < count($list); $i++){
                        return $list[$i]; 
                    }   
                }else {
                    return ("Access denied");
                     }  
            }
            
            function search($list, $item){
                for ($i = 0; $i < count($list); $i++){
                    if ($list[$i] == $item){
                        echo($list[$i]);
                    } else
                        {
                        echo "Item not available \n";
                    }
                        
                }
            }
        }

