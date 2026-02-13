/**
 * Test Cart Item Action
 */
import { registerCartItemAction } from '@woocommerce/blocks-checkout';
import { __ } from '@wordpress/i18n';

const MyCartItemAction = ( { lineItem, cart } ) => {

	const handleClick = () => {
		alert( 'Action clicked for item: ' + lineItem.key );
	};

	return (
		<button
			className="my-custom-action"
			onClick={ handleClick }
		>
			{ __( 'Custom Action', 'test-cart-action' ) }
		</button>
	);
};

registerCartItemAction( MyCartItemAction );
