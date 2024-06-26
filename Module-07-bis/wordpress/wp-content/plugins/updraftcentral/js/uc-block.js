var registerBlockType = wp.blocks.registerBlockType;
var createElement = wp.element.createElement;
var concatChildren = wp.element.concatChildren;
var serverSideRender = wp.serverSideRender;
var InspectorControls = wp.blockEditor.InspectorControls;
var PanelBody = wp.components.PanelBody;
var CheckboxControl = wp.components.CheckboxControl;
var ToggleControl = wp.components.ToggleControl;

var uc_icon = createElement('svg', { width: 24, height: 25, xmlns: 'http://www.w3.org/2000/svg', viewBox: '0 0 24 25' },
  createElement('path', { fill: '#DF6926', d: 'M3.73944 9.15206C3.74104 10.2569 3.71133 11.3321 3.74998 12.4049C3.87768 15.9496 6.43323 19.0957 9.87449 19.9809C14.0145 21.0459 18.1914 18.929 19.7311 14.9711C20.0931 14.0404 20.2832 13.0692 20.2777 12.0634C20.2696 10.5801 20.272 9.09672 20.2699 7.6134C20.2697 7.49136 20.2699 7.36931 20.2699 7.1984C20.7169 7.1984 21.1477 7.1984 21.5785 7.1984C21.591 7.17135 21.6035 7.14429 21.616 7.11723C20.5653 5.85064 19.5145 4.58405 18.4237 3.26923C17.341 4.57171 16.2841 5.84309 15.1726 7.18009C15.6852 7.18009 16.1083 7.18009 16.5591 7.18009C16.5669 7.31173 16.5776 7.40996 16.5777 7.50821C16.5785 9.00181 16.584 10.4954 16.5761 11.989C16.5649 14.1125 15.1518 15.9136 13.1057 16.4277C10.3127 17.1295 7.56375 15.0771 7.45076 12.1792C7.40735 11.0658 7.43714 9.94942 7.43651 8.83437C7.43525 6.63489 7.43867 4.4354 7.4337 2.23592C7.43275 1.81451 7.41463 1.388 6.95288 1.14984C6.95508 1.12219 6.95729 1.09453 6.95949 1.06687C7.67346 0.830703 8.37691 0.553649 9.10355 0.366713C10.718 -0.0486334 12.3566 -0.108474 14.0025 0.173539C16.6288 0.62355 18.881 1.80294 20.6958 3.74841C23.3602 6.60468 24.4624 10.0092 23.8227 13.8577C23.0461 18.5299 20.3282 21.7147 15.8894 23.3262C11.0371 25.0879 5.43919 23.3383 2.40132 19.1454C-0.203008 15.5509 -0.668955 11.6311 0.906066 7.48335C1.3741 6.25081 2.08212 5.14988 2.9475 4.15381C3.22942 3.82932 3.5331 3.89023 3.65545 4.31154C3.71987 4.53335 3.73452 4.7756 3.73573 5.00881C3.74283 6.37963 3.73936 7.75051 3.73944 9.15206Z' } )
);

registerBlockType('updraftcentral/dashboard', {
	title: uc_block.title,
	description: uc_block.description,
	icon: uc_icon,
	category: 'widgets',
	supports: {
		html: false,
		reusable: false,
		lock: false,
		multiple: false,
		customClassName: false,
	},
	attributes: {
		require_role: { type: 'string', default: 'administrator' },
		fill: { type: 'boolean', default: true },
	},
	edit: function (props) {
		function update_fill(value) {
			props.setAttributes({
				fill: value
			})
		}

		function get_role_state(role) {
			var requires = props.attributes.require_role.split(',');
			return (-1 !== requires.indexOf(role)) ? true : false;
		}

		function set_role_state(role, value) {
			var requires = props.attributes.require_role.split(',');
			if (value) {
				if (-1 === requires.indexOf(role)) {
					requires.splice(requires.length, 0, role);
				}
			} else {
				if (-1 !== requires.indexOf(role)) {
					requires.splice(requires.indexOf(role), 1);
				}
			}
			requires.sort();
			props.setAttributes({
				require_role: requires.join(',')
			});
		}

		var roles = Object.keys(uc_block.roles);
		roles.sort();

		var children = [];
		roles.forEach(function(role, index) {
			if (uc_block.roles[role].hasOwnProperty('name')) {
				this.push(createElement(
					'div',
					null,
					createElement(ToggleControl,
					{
						label: uc_block.roles[role].name,
						onChange: function(value) {
							set_role_state(role, value);
						},
						checked: get_role_state(role),
					})
				));
			}
		}, children);
		children = concatChildren(children);

		return createElement(
			'div',
			null,
			createElement(InspectorControls,
				null,
				createElement(PanelBody, {
						title: uc_block.settings,
						initialOpen: true
					},
					createElement('style',
						null,
						'.uc_block_label { margin-bottom: 10px; display: block; font-size: 12px; font-family: verdana; text-transform: uppercase; }'
					),
					createElement('label',
						{ className: 'components-base-control__label uc_block_label' },
						uc_block.layout,
					),
					createElement(CheckboxControl, {
						label: uc_block.fill_content,
						onChange: update_fill,
						checked: props.attributes.fill,
					}),
					createElement('p', null),
					createElement('label', {
						className: 'components-base-control__label uc_block_label' },
						uc_block.require_role,
					),
					children
				)
			),
			createElement(serverSideRender, {
				block: 'updraftcentral/dashboard',
				attributes: props.attributes,
			})
		);
	},
} );
