<?php
	class MessageModel extends RelationModel{
		protected $_auto = array ( 
			array('time','time',1,'function'),
			array('uid','getId',1,'callback'),
		);
		protected function getId(){
			return $_SESSION['id'];
		}
		protected $_link = array(
            'User'=>array(
				'mapping_type'    =>BELONGS_TO,
                'class_name'    =>'User',
                'foreign_key'=>'uid',
				'mapping_name'=>'User',
				'mapping_fields'=>'username',
				'as_fields'=>'username'
				),
		);

	}
?>