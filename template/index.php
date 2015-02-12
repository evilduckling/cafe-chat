<?php

class IndexTemplate extends Template {

	public function crt() {

		$html = '<div style="border:3px solid green; border-radius:7px; background-color:#55FF55; width:180px; height:250px; padding:8px; font-size:12px;">';
		
		if($this->data['cafe'] === 0) {
			$html .= 'Allez il faut boire du cafe.';
		}
		
		for($a = $this->data['cafe']; $a > 0; $a--) {
			$html .= '<img src="/media/cafe.png" style="margin-bottom:6px; margin-top:-5px;"/> ';
		}
				
		$html .= '<br/>Pensez a carresser les chats aussi.';
		
		$html .= '<ul style="margin-left:-20px;">
			<li><a href="cafe">boire un cafe</a></li>
			<li><a href="chat">oh un chat</a></li>
		</ul>
		<br/>
		<center>
			<img src="media/cream'.(($this->data['cafe'] - $this->data['chat'] > 3) ? '_crazy' : '').'.png" style="margin-left:114px;margin-top:30px;">
		</center>
		</div>';
		
		echo $html;
		
	}

}
