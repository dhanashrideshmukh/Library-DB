<?php

namespace Library\Users;

class Librarian extends Member {
    
        private $emp_id; // Employee ID
        private $position; 
        
        function view($list) {
            for ($i = 0; $i < count($list); $i++){
                return $list[$i]; 
            }   
        }
    
        function updateAll($item,$updatedItem) {
              if (empty($updatedItem)){
                return $item;
            } else {
                return $item = $updatedItem;
            }
        }
        
        function insertAll($list, $item) {
                return array_push($list, $item);
            }
}

