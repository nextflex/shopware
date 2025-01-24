/**
 * @sw-package discovery
 */

import template from './sw-sales-channel-modal-detail.html.twig';
import './sw-sales-channel-modal-detail.scss';

// eslint-disable-next-line sw-deprecation-rules/private-feature-declarations
export default {
    template,

    compatConfig: Shopware.compatConfig,

    props: {
        detailType: {
            type: Object,
            required: false,
            default: null,
        },
    },
};
