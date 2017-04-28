<?php
/*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

include_once(_PS_MODULE_DIR_.'/nps/nps.php');

class AdminInstallmentsController extends AdminController
{
	public $toolbar_title;

	public function __construct()
	{
    $this->bootstrap = true;
		$this->table = 'installment';
		$this->className = 'Installment';
		$this->lang = false;
		$this->addRowAction('edit');
		$this->addRowAction('delete');    
		$this->explicitSelect = true;
		$this->allow_export = true;
		$this->deleted = false;
		$this->context = Context::getContext();

    if (Context::getContext()->cookie->shopContext)
    {
      $split = explode('-', Context::getContext()->cookie->shopContext);    
      $shop_id = $split[1];
    }else {
      $shop_id = $this->context->shop->id;
    }
    
		$this->_defaultOrderBy = 'id_installment';
		
    $this->bulk_actions = array(
			'delete' => array('text' => $this->l('Delete selected'), 'confirm' => $this->l('Are you sure that you want to delete the selected items?')),
			);    
    $this->_select = 'id_installment, id_shop';
    $this->_where = "AND id_shop = '{$shop_id}'";
		//$this->_orderBy = 'id_installment';
		//$this->_orderWay = 'DESC';

		$this->fields_list = array(
		'id_payment_product' => array(
			'title' => $this->l('Product'),
			'align' => 'center',
		),
		'qty' => array(
			'title' => $this->l('Qty'),
			'align' => 'center',
		),
		'rate' => array(
			'title' => $this->l('Rate Percentage'),
			'align' => 'center',
		),        
        );

		parent::__construct();
	}

	public function renderForm()
	{
		if (Context::getContext()->shop->getContext() != Shop::CONTEXT_SHOP && Shop::isFeatureActive())
			$this->errors[] = $this->l('You have to select a shop before creating new installments.');

		$this->fields_form = array(
			'legend' => array(
				'title' => $this->l('Installment:'),
				'image' => '../img/admin/money.gif'
			),
			'input' => array(
				array(
					'type' => 'select',
					'label' => $this->l('Product:'),
					'name' => 'id_payment_product',
					'size' => 1,
					'maxlength' => 11,
					'required' => true,
					'options' => array(
						'query' => Nps::retrieveProductsForOptionsQuery(),
						'name' => 'name',
						'id' => 'key'
					)
				),          
				array(
					'type' => 'text',
					'label' => $this->l('Qty:'),
					'name' => 'qty',
					'size' => 30,
					'maxlength' => 32,
					'required' => true,
					'hint' => $this->l('Only integer numbers are allowed.')
				),
				array(
					'type' => 'text',
					'label' => $this->l('Rate Percentage:'),
					'name' => 'rate',
          'desc' => 'e.g: 25.00',
					'size' => 30,
					'maxlength' => 32,
					'required' => true,
					'hint' => $this->l('Only numbers with or without decimals are allowed.')
				),          
          
			)
		);

		$this->fields_form['submit'] = array(
			'title' => $this->l('Save   '),
		);

		return parent::renderForm();
	}
  
	public function beforeAdd($installment)
	{
		$installment->id_shop = $this->context->shop->id;
	}  
  
	public function initToolbar()
	{
		$res = parent::initToolbar();
		if (Context::getContext()->shop->getContext() != Shop::CONTEXT_SHOP && isset($this->toolbar_btn['new']) && Shop::isFeatureActive())
			unset($this->toolbar_btn['new']);
		return $res;
	}

	/**
	 * AdminController::setMedia() override
	 * @see AdminController::setMedia()
	 */
	public function setMedia()
	{
		parent::setMedia();

		$this->addJqueryPlugin('fieldselection');
	}  

  
	public function postProcess()
	{
		if (Tools::isSubmit('submitAddinstallment'))
		{
			$installment = new Installment((int)Tools::getValue('id_installment'));
      $installment->id_shop = Context::getContext()->shop->id;
		}
		return parent::postProcess();
	}  
  
	public function getList($id_lang, $orderBy = null, $orderWay = null, $start = 0, $limit = null, $id_lang_shop = null)
	{
    parent::getList($id_lang, $orderBy, $orderWay, $start, $limit, $this->context->shop->id);
    
		$nb = count($this->_list);
		if ($this->_list)
		{
			for ($i = 0; $i < $nb; $i++)
			{
				$this->_list[$i]['id_payment_product'] = Nps::getProductNameByIdProduct($this->_list[$i]['id_payment_product']);
			}
		}    
    
  }  
  

}
