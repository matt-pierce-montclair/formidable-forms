/**
 * Copyright (C) 2023 Formidable Forms
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';

/**
 * Internal dependencies
 */
import { getElements } from '../elements';
import { PLANS } from '../shared';
import { hideElements, show } from '../utils';
import { getModalWidget } from './';

/**
 * Display the locked template modal.
 *
 * @param {HTMLElement} template The template element.
 * @return {void}
 */
export function showLockedTemplateModal( template ) {
	const plan = template.dataset.requiredPlan;

	switch ( plan ) {
		case PLANS.BASIC:
		case PLANS.PLUS:
		case PLANS.BUSINESS:
		case PLANS.ELITE:
			showUpgradeModal( plan, template );
			break;
		case PLANS.RENEW:
			showRenewAccountModal();
			break;
		case PLANS.FREE:
			showLeaveEmailModal();
			break;
	}
}

/**
 * Base function to show a modal dialog with a customizable pre-open execution step.
 *
 * @param {Function} executePreOpen The function to be executed before opening the modal dialog.
 * @return {Function} A higher-order function that can be invoked to display the modal dialog.
 */
const showModal = executePreOpen => async( ...params ) => {
	const dialogWidget = getModalWidget();
	if ( ! dialogWidget ) {
		return;
	}

	const { modalItems } = getElements();
	hideElements( modalItems );

	await executePreOpen?.( ...params );
	dialogWidget.dialog( 'open' );
};

// Mapping each plan to the subsequent plans it can upgrade to
const upgradablePlans = {
	'basic': [ 'basic', 'plus', 'business', 'elite' ],
	'plus': [ 'plus', 'business', 'elite' ],
	'business': [ 'business', 'elite' ],
	'elite': [ 'elite' ]
};

/**
 * Display the modal dialog to prompt the user to upgrade their account.
 *
 * @param {string} plan Current plan name
 * @param {HTMLElement} template The template element
 * @return {void}
 */
export const showUpgradeModal = showModal( ( plan, template ) => {
	const templateName = template.getAttribute( 'frm-search-text' );
	const { upgradeModal, upgradeModalTemplateNames, upgradeModalPlansIcons } = getElements();

	// Update template names
	upgradeModalTemplateNames.forEach( element => element.textContent = templateName );

	// Update plan icons and their availability
	upgradeModalPlansIcons.forEach( icon => {
		const planType = icon.dataset.plan;
		const shouldDisplayCheck = upgradablePlans[plan].includes( planType );

		// Toggle icon class based on plan availability
		icon.classList.toggle( 'frm-plan-checkmark-icon', shouldDisplayCheck );

		// Update SVG icon
		const svg = icon.querySelector( 'svg > use' );
		svg.setAttribute( 'xlink:href', shouldDisplayCheck ? '#frm_checkmark_icon' : '#frm_close_icon' );
	});

	show( upgradeModal );
});

/**
 * Display the modal dialog to prompt the user to renew their account.
 *
 * @return {void}
 */
export const showRenewAccountModal = showModal( () => {
	const { renewAccountModal } = getElements();
	show( renewAccountModal );
});

/**
 * Display the modal dialog to prompt the user to leave an email.
 *
 * @return {void}
 */
export const showLeaveEmailModal = showModal( () => {
	const { leaveEmailModal } = getElements();
	show( leaveEmailModal );
});

/**
 * Display the modal dialog to prompt the user to save the code sent to their email address.
 *
 * @return {void}
 */
export const showCodeFromEmailModal = showModal( () => {
	const { codeFromEmailModal } = getElements();
	show( codeFromEmailModal );
});
