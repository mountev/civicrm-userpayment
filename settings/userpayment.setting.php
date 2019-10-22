<?php

use CRM_Userpayment_ExtensionUtil as E;

return [
  'userpayment_paymentadd_title' => [
    'name' => 'userpayment_paymentadd_title',
    'type' => 'Text',
    'html_type' => 'text',
    'default' => E::ts('Make Payment'),
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Page Title'),
    'description' => E::ts('Default page title for the add payment page'),
    'html_attributes' => [],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 0,
      ]
    ],
  ],
  'userpayment_paymentadd_introduction' => [
    'name' => 'userpayment_paymentadd_introduction',
    'type' => 'wysiwyg',
    'html_type' => 'textarea',
    'default' => E::ts('Please enter your details and make a payment'),
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Introduction'),
    'description' => E::ts('Introduction text for the page'),
    'html_attributes' => ['cols' => 60, 'rows' => 5, 'class' => 'crm-form-wysiwyg'],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 5,
      ]
    ],
  ],
  'userpayment_paymentadd_emailreceipt' => [
    'name' => 'userpayment_paymentadd_emailreceipt',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 1,
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Send an email receipt?'),
    'description' => E::ts('Send a receipt on payment?'),
    'html_attributes' => [],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 10,
      ]
    ],
  ],
  'userpayment_paymentadd_freezeamount' => [
    'name' => 'userpayment_paymentadd_freezeamount',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 1,
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Freeze the amount to pay?'),
    'description' => E::ts('Do you want to allow the user to modify the amount they are going to pay - they could choose to pay more or less than the required amount.'),
    'html_attributes' => [],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 12,
      ]
    ],
  ],
  'userpayment_paymentadd_captcha' => [
    'name' => 'userpayment_paymentadd_captcha',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => 1,
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Enable reCaptcha?'),
    'description' => E::ts('Enable reCaptcha on the form?'),
    'html_attributes' => [],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 15,
      ]
    ],
  ],
  'userpayment_paymentadd_redirect' => [
    'name' => 'userpayment_paymentadd_redirect',
    'type' => 'Integer',
    'html_type' => 'radio',
    'default' => 0,
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('On successful form submission?'),
    'description' => E::ts('What to do on successful form submission'),
    'html_attributes' => [],
    'options' => [
      CRM_Userpayment_Form_AddPayment::PAYMENTADD_REDIRECT_THANKYOU => E::ts('Display a thankyou page'),
      CRM_Userpayment_Form_AddPayment::PAYMENTADD_REDIRECT_URL => E::ts('Redirect to URL')
    ],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 20,
      ]
    ],
  ],
  'userpayment_paymentadd_redirecturl' => [
    'name' => 'userpayment_paymentadd_redirecturl',
    'type' => 'String',
    'html_type' => 'text',
    'default' => '',
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Redirect URL'),
    'description' => E::ts('The URL to redirect to on successful submission'),
    'html_attributes' => ['size' => 80],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 25,
      ]
    ],
  ],
  'userpayment_paymentadd_redirectthankyou' => [
    'name' => 'userpayment_paymentadd_redirectthankyou',
    'type' => 'wysiwyg',
    'html_type' => 'textarea',
    'default' => 'Thankyou for your payment',
    'add' => '5.13',
    'is_domain' => 1,
    'is_contact' => 0,
    'title' => E::ts('Thankyou message'),
    'description' => E::ts('The message to display on the thankyou page'),
    'html_attributes' => ['cols' => 60, 'rows' => 5, 'class' => 'crm-form-wysiwyg'],
    'settings_pages' => [
      'userpayment_paymentadd' => [
        'weight' => 30,
      ]
    ],
  ],
];