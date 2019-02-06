<?php
/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */

$metadata['https://idp.ut.ac.ir:8443/idp/shibboleth'] = array (
    'authproc' => array(
        50 => array(
            'class' => 'core:AttributeMap',
            'oid2name',
        ),
    ),

    'entityid' => 'https://idp.ut.ac.ir:8443/idp/shibboleth',
    'description' =>
        array (
            'en' => 'University of Tehran',
        ),
    'OrganizationName' =>
        array (
            'en' => 'University of Tehran',
        ),
    'name' =>
        array (
            'en' => 'University of Tehran',
        ),
    'OrganizationDisplayName' =>
        array (
            'en' => 'University of Tehran IDP',
        ),
    'url' =>
        array (
            'en' => 'http://ut.ac.ir/',
        ),
    'OrganizationURL' =>
        array (
            'en' => 'http://ut.ac.ir/',
        ),
    'contacts' =>
        array (
            0 =>
                array (
                    'contactType' => 'technical',
                    'givenName' => 'Tech',
                    'emailAddress' =>
                        array (
                            0 => 'mailto:citc@ut.ac.ir',
                        ),
                ),
            1 =>
                array (
                    'contactType' => 'support',
                    'givenName' => 'Support',
                    'emailAddress' =>
                        array (
                            0 => 'mailto:info@ut.ac.ir',
                        ),
                ),
        ),
    'metadata-set' => 'saml20-idp-remote',
    'SingleSignOnService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:mace:shibboleth:1.0:profiles:AuthnRequest',
                    'Location' => 'https://idp.ut.ac.ir:8443/idp/profile/Shibboleth/SSO',
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                    'Location' => 'https://idp.ut.ac.ir:8443/idp/profile/SAML2/POST/SSO',
                ),
            2 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST-SimpleSign',
                    'Location' => 'https://idp.ut.ac.ir:8443/idp/profile/SAML2/POST-SimpleSign/SSO',
                ),
            3 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
                    'Location' => 'https://idp.ut.ac.ir:8443/idp/profile/SAML2/Redirect/SSO',
                ),
        ),
    'SingleLogoutService' =>
        array (
        ),
    'ArtifactResolutionService' =>
        array (
            0 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:1.0:bindings:SOAP-binding',
                    'Location' => 'https://idp.ut.ac.ir:8443/idp/profile/SAML1/SOAP/ArtifactResolution',
                    'index' => 1,
                ),
            1 =>
                array (
                    'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:SOAP',
                    'Location' => 'https://idp.ut.ac.ir:8443/idp/profile/SAML2/SOAP/ArtifactResolution',
                    'index' => 2,
                ),
        ),
    'NameIDFormats' =>
        array (
            0 => 'urn:mace:shibboleth:1.0:nameIdentifier',
            1 => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
        ),
    'keys' =>
        array (
            0 =>
                array (
                    'encryption' => false,
                    'signing' => true,
                    'type' => 'X509Certificate',
                    'X509Certificate' => '
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
                        ',
                ),
            1 =>
                array (
                    'encryption' => true,
                    'signing' => false,
                    'type' => 'X509Certificate',
                    'X509Certificate' => '
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
                        ',
                ),
        ),
    'scope' =>
        array (
            0 => 'ut.ac.ir',
        ),
    'RegistrationInfo' =>
        array (
            'registrationAuthority' => 'https://irfed.ir/',
        ),
    'UIInfo' =>
        array (
            'DisplayName' =>
                array (
                    'en' => 'University of Tehran',
                ),
            'Description' =>
                array (
                    'en' => 'University of Tehran IDP',
                ),
            'InformationURL' =>
                array (
                ),
            'PrivacyStatementURL' =>
                array (
                ),
            'Logo' =>
                array (
                    0 =>
                        array (
                            'url' => 'data:image/jpeg;base64,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
',
                            'height' => 42,
                            'width' => 80,
                        ),
                ),
        ),
);

