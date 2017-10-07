<?php

  /*
* Project    : EIS Subscription Module
* EAO IT Services Pvt. Ltd. | www.eaoservices.com
* Copyright reserved @2017

* File Description :

* Created on : 3 Oct, 2017 | 12:38:33 PM
* Author     : Bilal Wani
* Email      : bilal.wani@eaoservices

*/
  
require_once 'eis-db.php';

/*
 * Table : eis-team
 * Column	Type	Null	Default	Comments
    id          int(11)	No 	 	 
    name	varchar(60)	No 	 	 
    designation	varchar(60)	No 	 	 
    img_url	varchar(250)	Yes 	NULL 	 
    style_line	varchar(80)	Yes 	NULL 	 
    status	tinyint(4)	No 	 	 
    Indexes

    Keyname	Type	Unique	Packed	Column	Cardinality	Collation	Null	Comment
    PRIMARY	BTREE	Yes	No	id	0	A	No	
 * 
 */

if ( !class_exists('EisTeamModel')) {
    class EisTeamModel extends EisSqlDb{
        private $m_table_name = 'eis-team';
                
        public function __construct($host, $user, $pwd, $dbname) {
            parent::__construct($host, $user, $pwd, $dbname);            
            
        }
        
        public function GetAllMembers(){
            $query = 'SELECT * from `' . $this->m_table_name . '`';
            $result = $this->ExecuteSelectQuery($query);
            return $result;
            
        }
         public function ExecuteCUDQuery($query) {
            return $this->m_link->query($query);
        }
        
          public function ExecuteSelectQuery($query) {
            $result = $this->m_link->query($query);
            $dataArray = array();
            if ($result->num_rows > 0) {
                //output data of each row
                while ($row = $result->fetch_assoc()) {
                    array_push($dataArray, $row);
                }
            }
            return $dataArray;
        }
        
        protected function GetDbLink(){
            
        }
       
        /* Function: CreateMember
         * Description: Creates Member
         * Params:
         * 1 - name
         * 2 - designation 
         * 3 - img
       
         * Return:
         * On error return null, else some postive integer
         */

        public function CreateMember($m_model_team) {
            if (is_object($m_model_team)) {
                $ud = $m_model_team->user_data;

                $query = sprintf("INSERT INTO $this->m_user_table"
                        . " VALUES (null, '%s', '%s', '%s')", $ud['name'], $ud['designation'], $ud['img']
                );

    
                return $this->ExecuteCUDQuery($query);
            }
        }
    }
    
}