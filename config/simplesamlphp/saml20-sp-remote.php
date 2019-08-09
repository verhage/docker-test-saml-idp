<?php
/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

$metadata[getenv('SIMPLESAMLPHP_SP_ENTITY_ID')] = array(
    //'AssertionConsumerService' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
    'AssertionConsumerService' => array (
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
            'index' => 1,
        ],
        [
            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
            'Location' => getenv('SIMPLESAMLPHP_SP_ASSERTION_CONSUMER_SERVICE'),
            'index' => 0,
        ],
    ),
    'SingleLogoutService' => getenv('SIMPLESAMLPHP_SP_SINGLE_LOGOUT_SERVICE'),
);
