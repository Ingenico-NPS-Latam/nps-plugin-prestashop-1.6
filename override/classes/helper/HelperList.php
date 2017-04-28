<?php

class HelperList extends HelperListCore
{
	/**
	 * Display capture action link
	 */
	public function displayCaptureLink($token = null, $id, $name = null)
	{
    $order = new Order((int)$id);
    if($order->current_state != (int)Configuration::get('NPS_PENDING_CAPTURE')) {
      return;
    }
    
		$tpl = $this->createTemplate('list_action_capture.tpl');
		if (!array_key_exists('Capture', self::$cache_lang))
			self::$cache_lang['Capture'] = $this->l('Capture', 'Helper');

		$tpl->assign(array(
			'href' => Tools::safeOutput($this->currentIndex.'&'.$this->identifier.'='.$id.'&capture'.$this->table.'&token='.($token != null ? $token : $this->token)),
			'action' => self::$cache_lang['Capture'],
		));

		return $tpl->fetch();

	}  
  
	/**
	 * Display view action link
	 */
  public function displayViewLink($token = null, $id, $name = null)
  {
		$tpl = $this->createTemplate('list_action_view.tpl');
		if (!array_key_exists('View', self::$cache_lang))
			self::$cache_lang['View'] = $this->l('View', 'Helper');

    if( strpos($this->currentIndex, 'AdminNps') !== false ) {
      $href = Tools::safeOutput(Context::getContext()->link->getAdminLink('AdminOrders').'&'.$this->identifier.'='.$id.'&view'.$this->table);
    }else {
      $href = Tools::safeOutput($this->currentIndex.'&'.$this->identifier.'='.$id.'&view'.$this->table.'&token='.($token != null ? $token : $this->token));
    }
    
		$tpl->assign(array(
			'href' => $href,
			'action' => self::$cache_lang['View'],
		));

		return $tpl->fetch();

	}  

}
