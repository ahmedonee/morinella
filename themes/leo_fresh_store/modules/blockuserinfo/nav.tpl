
<!-- Block user information module NAV  -->
<ul id="header_user_info" class="pull-left">
	{if $is_logged}
	<li class="header_user_info">
		<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow">
			<span>{l s='Welcome' mod='blockuserinfo'}, {$cookie->customer_firstname} {$cookie->customer_lastname}</span>
		</a>
	</li>
	{else}
		<li class="login hidden-xs hidden-sm">{l s='Welcome visitor you can' mod='blockuserinfo'} <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Login to your customer account' mod='blockuserinfo'}">{l s='login' mod='blockuserinfo'}</a> {l s='or' mod='blockuserinfo'} <a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Create an account' mod='blockuserinfo'}">{l s='create an account.' mod='blockuserinfo'}</a></li>	
	{/if}
</ul>
<div class="header_user_info popup-over pull-right e-scale">
	<div class="popup-title"><i class="fa fa-user"></i></div>
	<div class="popup-content">
		<ul class="list">
			<li class="first">
				<a id="wishlist-total" href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|addslashes}" title="{l s='My wishlists' mod='blockuserinfo'}">{l s='Wish List' mod='blockuserinfo'}
				</a>
			</li>	
			<li>
				<a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" title="{l s='My account' mod='blockuserinfo'}">{l s='My Account' mod='blockuserinfo'}</a>
			</li>
			<li>
				<a href="{$link->getPageLink(order, true)|escape:'html':'UTF-8'}" title="{l s='Checkout' mod='blockuserinfo'}" class="last">{l s='Checkout' mod='blockuserinfo'}</a>
			</li>
			<li>
				<a href="{$link->getPageLink($order_process, true)|escape:'html'}" title="{l s='Shopping Cart' mod='blockuserinfo'}" rel="nofollow">
					{l s='Shopping Cart' mod='blockuserinfo'}
				</a>
			</li>
			<li>
				<a href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" title="{l s='Compare' mod='blockuserinfo'}" rel="nofollow">
					{l s='Compare' mod='blockuserinfo'}
				</a>
			</li>
			{if $is_logged}
					<li><a class="logout" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Sign in' mod='blockuserinfo'}">
				{l s='Sign out' mod='blockuserinfo'}
			</a></li>
			{/if}
		</ul>
	</div>
</div>	