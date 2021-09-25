<?php

return [
    'workflow' => [
        'index' => 'List of workflows',
        'store' => 'Workflow has been created successfully',
        'update' => 'Workflow has been updated successfully',
        'destroy' => 'Workflow has been deleted successfully',
        'not_found' => 'regulator workflow not found',
    ],
    'icps' => [
        'created' => 'Icp has been created successfully',
        'updated' => 'Icp has been updated successfully',
        'deleted' => 'Icp has been deleted successfully',
        'not_found' => 'Icp with provided id not found',

        'criterias' => [
            'store' => 'Icp criterias have been added successfully',
            'update' => 'Icp criterias have been updated successfully',
            'delete' => 'Icp criterias have been deleted successfully',
        ],

        'events' => [
            'no_regulator_icps' => 'Regulator dosn\'t have any icps to select events based on their criterias',
            'no_regulator_icps_criterias' => 'Regulator icps don\'t contain criterias',
            'regulator_events' => 'Regulator events matches with his icps criterias',
            'not_found' => 'Event not found',
            'details' => 'Event details',

            'notifications' => [
                'events' => [
                    'sponsorship' => [
                        'organizer-approved-proposal' => [
                            'title' => 'Regulatorship Propsal Approved',
                            'body' => ':organizer_name has been approved your sponsorship proposal for :event_name'
                        ],
                        'admin-payment-transfer-confirmed' => [
                            'title' => 'Payment Transfer Confirmation',
                            'body' => 'Your payment transfer has been confirmed by the admin for :event_name'
                        ],
                    ]
                ]
            ]

        ],

    ],
    'criterias' => [
        'index_greater_100' => 'priority index musn\'t be greater than 100',
        'priority_greater_100' => 'Sum of icp criterias priority index is greater than 100 '
    ],
];
