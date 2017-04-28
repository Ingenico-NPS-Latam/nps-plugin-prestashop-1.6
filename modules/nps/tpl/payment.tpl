{*
* 2007-2013 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @version  Release: $Revision: 14011 $
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<style>
p.payment_module a.nps:after {    
  display: block;
  content: "";
  position: absolute;
  right: 20px;
  margin-top: -11px;
  top: 50%;
  font-family: "FontAwesome";
  font-size: 25px;
  height: 22px;
  width: 14px;
  color: #777777;    
}

p.payment_module a.nps {
  background: url("{$modulePath|escape:'htmlall':'UTF-8'}/logo.png") no-repeat scroll 15px 15px #fbfbfb;
}
</style>

<div class="row">
    <div class="col-xs-12">
    <p class="payment_module">    
        <a class="nps" href="{$pathSsl|escape:'htmlall':'UTF-8'}payment.php" title="{l s='Pay by NPS.' mod='nps'}">
            {l s='Pay by NPS' mod='nps'}
            <span>{l s='(pay with credit card or cash deposit)' mod='nps'}</span>
        </a>
    </p>    
    </div>
</div>