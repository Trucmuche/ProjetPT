<?php
	class essai extends Module
	{
		public function action_index()
		{
			$this->tpl->assign("variable",$_SESSION);	
		}
	}
?>