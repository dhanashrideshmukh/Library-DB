<?php

namespace Library\Users;

class Librarian extends Member {
    
        private $emp_id;
        private $position; 
        
        function viewAll($list) {
                return $list;
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

