<?php
// Email templates
Configure::set('GenericDomains.email_templates', [
    'en_us' => [
        'lang' => 'en_us',
        'text' => 'Your new domain is being processed and will be registered soon!

Domain: {service.domain}

Thank you for your business!',
        'html' => '<p>Your new domain is being processed and will be registered soon!</p>
<p>Domain: {service.domain}</p>
<p>Thank you for your business!</p>'
    ]
]);

// Transfer fields
Configure::set('GenericDomains.transfer_fields', [
    'domain' => [
        'label' => Language::_('GenericDomains.transfer.domain', true),
        'type' => 'text'
    ],
    'transfer_key' => [
        'label' => Language::_('GenericDomains.transfer.transfer_key', true),
        'type' => 'text'
    ]
]);

// Domain fields
Configure::set('GenericDomains.domain_fields', [
    'domain' => [
        'label' => Language::_('GenericDomains.domain.domain', true),
        'type' => 'text'
    ],
]);
