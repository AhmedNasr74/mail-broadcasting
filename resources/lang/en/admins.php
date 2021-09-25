<?php

return [

    'email_verified_success' => 'Email Verified Successfully',
    'invalid_email_activation_code' => 'Invalid Activation Code',
    'please_verifiy_email_first' => 'Please verifiy your email first',
    'account_not_approved' => 'Your profile is not approved by admin yet.',
    'please_check_your_mail' => 'Please check your mail',
    'invalid_password_reset_code' => 'Invalid code',
    'password_reset_success' => 'Account password reset success',
    'profile_updated' => 'Your profile data has been updated',
    'profile_data' => 'Organizer profile details',
    'please_activate_email' => 'Please check your email to activate your account',
    'admin_pending_status' => 'Please update your account information accourding to notes to meet system requirements',
    'refused_status' => 'Sorry your account has been refused , you have to signup again and put these notes in considrations',
    'under_review' => 'your account is watting for admin review',

    'organizer' => [
        'refused_success' => 'Organizer account refused successfully',
        'status_changed' => 'Organizer account status changed to :status successfully',
        'status_blocked' => 'Organizer account status changed to :status successfully',
        'updated_profile_list' => 'All organizer profiles need to approve update',
        'updated_profile_not_exist' => 'This organizer has no profile updates needed to approved',
        'updated_profile_not_found' => 'This organizer has no profile',
        'profile_approved' => 'organizer profile has been approved successfully',
        'not_found' => 'Organizer not found',
        'show' => 'Organizer Details',
    ],

    'sponsor' => [
        'refused_success' => 'Sponsor account refused successfully',
        'status_changed' => 'Sponsor account status changed to :status successfully',
        'status_blocked' => 'Organizer account status changed to :status successfully',
        'profile_update_not_found' => 'This profile dos\'nt exist',
        'updated' => 'Sponsor profile updated successfully',
        'not_found' => 'Sponsor not found',
        'show' => 'Sponsor Details',
        'payment-transfers' => [
            'all' => 'List Payment Transfers',
            'change-status' => 'Payment Proposal changed to :status',
            'status' => [
                'pending' => 'Pending',
                'under_review' => 'Under Review',
                'confirmed' => 'Confirmed',
                'rejected' => 'Rejected'
            ]
        ],
    ],

    'lookups' => [
        'event_categories' => [
            'index' => 'List of Event Categories',
            'store' => 'Event Category has been created successfully',
            'update' => 'Event Category has been updated successfully',
            'delete' => 'Event Category has been deleted successfully',
            'not_found' => 'Event Category with provided id not found',
            'show' => 'Event Category details',
        ],
        'city' => [
            'index' => 'List of cities',
            'store' => 'City has been created successfully',
            'update' => 'City has been updated successfully',
            'destroy' => 'City has been deleted successfully',
            'not_found' => 'There is no city with provided id',
            'show' => 'City details',
        ],

        'country' => [
            'index' => 'List of countries',
            'store' => 'Country has been created successfully',
            'update' => 'Country has been updated successfully',
            'destroy' => 'Country has been deleted successfully',
            'show' => 'Country details',
            'not_found' => 'There is no country with provided id'
        ],

        'region' => [
            'index' => 'List of regions',
            'store' => 'Region has been created successfully',
            'update' => 'Region has been updated successfully',
            'destroy' => 'Region has been deleted successfully',
            'not_found' => 'There is no region with provided id',
            'show' => 'Region details',
        ],

        'event-category' => [
            'index' => 'List of Event Categories',
            'store' => 'Event Category has been created successfully',
            'update' => 'Event Category has been updated successfully',
            'destroy' => 'Event Category has been deleted successfully',
            'not_found' => 'There is no Event Category with provided id'
        ],
        'event-purpose' => [
            'index' => 'List of Event Purposes',
            'store' => 'Event Purposes has been created successfully',
            'show' => 'Event Purpose details',
            'update' => 'Event Purposes has been updated successfully',
            'destroy' => 'Event Purposes has been deleted successfully',
            'not_found' => 'There is no Event Purposes with provided id'
        ],

        'event-subcategory' => [
            'index' => 'List of event subcategories',
            'store' => 'event subcategory has been created successfully',
            'update' => 'Event subcategory has been updated successfully',
            'show' => 'Event subcategory details',
            'destroy' => 'Event subcategory has been deleted successfully',
            'not_found' => 'There is no event subcategory with provided id'
        ],

        'venue-type' => [
            'index' => 'List of venue types',
            'show' => 'Venue Type details',
            'saved' => 'Venue type saved successfully',
            'updated' => 'Venue type updated successfully',
            'deleted' => 'Venue type deleted successfully',
            'not_found' => 'Venue type with provided id not found',
        ],

        'patronage-type' => [
            'index' => 'List of patronage types',
            'saved' => 'Patronage type saved successfully',
            'updated' => 'Patronage type updated successfully',
            'deleted' => 'Patronage type deleted successfully',
            'show' => 'Patronage type details',
            'not_found' => 'Patronage type not found with provided id'
        ],
        'participant-levels' => [
            'index' => 'List of participant levels',
            'saved' => 'Participant levels saved successfully',
            'updated' => 'Participant levels updated successfully',
            'deleted' => 'Participant levels deleted successfully',
            'show' => 'Participant level details',
            'not_found' => 'Participant level not found with provided id'
        ],
        'support-type' => [
            'index' => 'List of support types',
            'show' => 'Support type details',
            'saved' => 'Support type saved successfully',
            'updated' => 'Support type updated successfully',
            'deleted' => 'Support type deleted successfully',
            'not_found' => 'Support type not found with provided id'
        ],

        'sponosership-type' => [
            'index' => 'List of sponosership types',
            'store' => 'Sponosership type has been created successfully',
            'update' => 'Sponosership type has been updated successfully',
            'destroy' => 'Sponosership type has been deleted successfully',
            'not_found' => 'There is no sponosership type with provided id',
            'show' => 'Sponosership type details',
        ],

        'sponosership-type-option' => [
            'index' => 'List of sponosership type options',
            'store' => 'Sponosership type option has been created successfully',
            'update' => 'Sponosership type option has been updated successfully',
            'destroy' => 'Sponosership type option has been deleted successfully',
            'not_found' => 'There is no sponosership type option with provided id'
        ],

        'partner-type' => [
            'index' => 'List of partner types',
            'saved' => 'Partner type saved successfully',
            'updated' => 'Partner type updated successfully',
            'deleted' => 'Partner type deleted successfully',
            'not_found' => 'Partner Type not found with provider id',
            'show' => 'Partner Type data'
        ],

        'financial-category' => [
            'index' => 'List of financial categories',
            'deleted' => 'Financial Category deleted successfully',
            'saved' => 'Financial Category saved successfully',
            'updated' => 'Financial Category updated successfully',
            'show' => 'Financial Category details',
            'not_found' => 'Financial Category not found with provided id'
        ],

        'marketing-campaign' => [
            'index' => 'List of marketing campaigns',
            'show' => 'Marketing campaign details',
            'store' => 'Marketing campaign has been created successfully',
            'update' => 'Marketing campaign has been updated successfully',
            'destroy' => 'Marketing campaign has been deleted successfully',
            'not_found' => 'There is no Marketing campaign with provided id'
        ],

        'marketing-campaign-option' => [
            'index' => 'List of marketing campaign options',
            'store' => 'Marketing campaign option has been created successfully',
            'show' => 'Marketing campaign option details',
            'update' => 'Marketing campaign option has been updated successfully',
            'destroy' => 'Marketing campaign option has been deleted successfully',
            'not_found' => 'There is no Marketing campaign option with provided id'
        ],

        'event-type' => [
            'index' => 'List of event types',
            'show' => 'Event type details',
            'store' => 'Event type has been created successfully',
            'update' => 'Event type has been updated successfully',
            'destroy' => 'Event type has been deleted successfully',
            'not_found' => 'There is no event type with provided id'
        ],

        'event-type-option' => [
            'index' => 'List of event type options',
            'store' => 'Event type option has been created successfully',
            'update' => 'Event type option has been updated successfully',
            'destroy' => 'Event type option has been deleted successfully',
            'not_found' => 'There is no event type option with provided id',
            'show' => 'Event Type Option Details',
        ],

        'bank_account' => [
            'index' => 'List of bank accounts',
            'store' => 'Bank Account has been created successfully',
            'update' => 'Bank Account has been updated successfully',
            'destroy' => 'Bank Account has been deleted successfully',
            'not_found' => 'There is no bank Account with provided id',
            'show' => 'Bank Account details',
        ],

        'benefits-categories' => [
            'index' => 'List of benefit category',
            'saved' => 'Benefit category saved successfully',
            'updated' => 'Benefit category updated successfully',
            'deleted' => 'Benefit category deleted successfully',
            'show' => 'Benefit category details',
            'not_found' => 'Benefit category not found',
        ],


        'benefit-category-option' => [
            'index' => 'List of benefit category options',
            'saved' => 'Benefit category option saved successfully',
            'updated' => 'Benefit category option updated successfully',
            'deleted' => 'Benefit category  option deleted successfully',
            'show' => 'Benefit category option details',
            'not_found' => 'Benefit category option not found',
        ],

        'event-hosting' => [
            'index' => 'List of event hostings',
            'store' => 'Event hosting has been created successfully',
            'update' => 'Event hosting has been updated successfully',
            'destroy' => 'Event hosting has been deleted successfully',
            'not_found' => 'There is no event hosting with provided id',
            'show' => 'There is no event hosting details'
        ],

        'event-hosting-option' => [
            'index' => 'List of event hosting options',
            'store' => 'Event hosting option has been created successfully',
            'update' => 'Event hosting option has been updated successfully',
            'destroy' => 'Event hosting option has been deleted successfully',
            'not_found' => 'There is no event hosting option with provided id'
        ],

        'accompanying-activity' => [
            'index' => 'List of accompanying activities',
            'store' => 'Accompanying activity has been created successfully',
            'show' => 'Accompanying activity details',
            'update' => 'Accompanying activity has been updated successfully',
            'destroy' => 'Accompanying activity has been deleted successfully',
            'not_found' => 'There is no accompanying activity with provided id'
        ],


        'accompanying-activity-option' => [
            'index' => 'List of accompanying activities options',
            'store' => 'Accompanying activity option has been created successfully',
            'update' => 'Accompanying activity option has been updated successfully',
            'destroy' => 'Accompanying activity option has been deleted successfully',
            'not_found' => 'There is no accompanying activity option with provided id'
        ],

        'award-type' => [
            'index' => 'List of award types',
            'store' => 'Award type has been created successfully',
            'update' => 'Award type has been updated successfully',
            'destroy' => 'Award type has been deleted successfully',
            'not_found' => 'There is no award type with provided id',
            'show' => 'Award type details',
        ],

        'edit' => 'Edit',
        'delete' => 'Delete',
    ],

    'events' => [
        'list' => 'List of events',
        'show' => 'Event details',
        'not_found' => 'Event not found',
        'already_approved' => 'Event already approved before',
        'sponsorship' => [
            'proposal' => [
                'financial_report' => 'Proposal financial report'
            ]
        ],
        'approved' => 'Event has been approved successfully',
    ],

    'notifications' => [
        'event' => [
            'creation' => [
                'title' => 'New event',
                'body' => ':organizer_name has been created new event with name :event_name'
            ],
            'sponsorship' => [
                'proposal' => [
                    'title' => 'Sponsorship package payment',
                    'body' => ':sponsor_name has been paid for Sponsorship packae for :event_name event'
                ]
            ]
        ],
        'organizer' => [
            'creation' => [
                'title' => 'New organizer',
                'body' => ':organizer-name has been registered new account'
            ],
            'profile' => [
                'title' => 'Organizer update profile',
                'body' => ':organizer-name has been updated his profile information'
            ],
            'Account' => [
                'account_status' => [
                    'title' => 'Admin changed tour account status',
                    'body' => 'Your account status has been changed to :status'
                ],
                'approve_profile_updates' => [
                    'title' => 'Admin approved your profile updates',
                    'body' => 'Your profile updates has been approved by the admin'
                ],
            ]
        ],
        'sponsor' => [
            'creation' => [
                'title' => 'New sponsor',
                'body' => ':sponsor-name has been registered new account'
            ],
            'profile' => [
                'title' => 'Sponsor update profile',
                'body' => ':sponsor-name has been updated his profile information'
            ],
            'Account' => [
                'account_status' => [
                    'title' => 'Admin changed tour account status',
                    'body' => 'Your account status has been changed to :status'
                ],
                'approve_profile_updates' => [
                    'title' => 'Admin approved your profile updates',
                    'body' => 'Your profile updates has been approved by the admin'
                ],
            ],
        ],
    ],
    'regulator' => [
        'index' => 'List of regulators',
        'store' => 'Regulator has been created successfully',
        'update' => 'Regulator has been updated successfully',
        'delete' => 'Regulator has been deleted successfully',
        'not_found' => 'Regulator not found',
    ],

    'site' => [
        'login_to_your_account' => 'Login to your Account',
        'email_address' => 'E-mail Address',
        'password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'remember_me' => 'Remember me',
        'please_confirm_password' => 'Please confirm your password before continuing',
        'keep_me_logged_in' => 'Keep me logged in',
        'already_have_account' => 'Already have an account?',
        'login' => 'Login',
        'forget_password' => 'Forgot Your Password?',
        'forget_password_title' => 'Forgot Password',
        'dont_have_account' => 'Don’t have an account?',
        'sign_up_now' => 'Sign Up Now',
        'sign_in' => 'Sign In',
        'not_worry' => 'Not to worry, we will help you to access your account.',
        'reset_password' => 'Reset Password',
        'reset_email_sent' => 'Reset Email Sent!',
        'reset_email_msg' => 'We sent you a reset link to update your password.',
        'back_to' => 'Back to',
        'few_click' => 'A few more clicks to',
        'sign_account' => 'sign in to your account.',
        'manage_account' => 'Manage all your system accounts in one place',
        'messages' => [
            'invalid_credentials' => 'These credentials do not match our records',
            'login_faild' => 'Login failed, please try again!',
            'logged_out' => 'logged out!',
            'deleted' => 'Deleted!',
            'warning' => 'Warning!',
            'error_processing_request' => 'Error Processing Request',
            'failure' => 'Failure!',
            'operation_faild' => 'Operation Faild',
            'all_selected_records_deleted' => 'All selected records has been deleted',
            'are_you_sure' => 'Are you sure?',
            'please_select_at_leaset_one_record' => 'Please Select at least one record',
            'login' => [
                'success' => 'Successfully logged in',
                'refuesd' => 'Your account has been refused, resign again putting refused note in consideration',
                'pending' => 'Your account hasn\'t yet been accepted by admin!',
                'admin_pending' => 'You have to commplete your profile according to notes sent by admin',
                'blocked' => 'Your account has been blocked, can\'t login',

            ],
            'mails' => [
                'congratulations_greating' => 'Congratulations , :organizer_name',
                'your_account_approved' => 'Your Account is approved you can login now and start creating your events and gain sponsorship.',
                'login_now' => 'Login Now',
                'thanks' => 'Thanks',
                'unfortunately_greating' => 'Unfortunately, :organizer_name',
                'your_account_blocked' => 'Your Account is blocked, because of the following reasons :',
                'hello_greating' => 'Hello , :admin_name',
                'here_is_account_activation' => 'Here is your account activation.',
                'thanks_for_signing_to_bwader' => 'Thanks for signing up to :name.',
                'to_get_access_msg' => 'To get access to your account please verify your email address by clicking the link below.',
                'verifiy_email_address' => 'Verifiy email address',
                'here_password_reset_code' => 'Here is your password reset code',
                'igonre_if_not_you' => 'If it\'s not you ignore this mail.',
                'your_account_refused' => 'Your account is refused by system admin.',
                'you_can_resign' => 'You can resign again .',
                'put_reasons_in_considration' => 'Put the following notes in your considration when resign up again please.',
                'thanks_for_using' => 'Thanks for using :config.',
            ]
        ],
        'labels' => [
            'create_new_account' => 'Create New Account',
            'personal_data' => 'Personal Data',
            'clients' => 'Clients',
            'experince' => 'Experince',
            'commerical_data' => 'Commerical Data',
            'previous_events' => 'Previous Events',
            'your_trusted_system' => 'Your trusted event platform system',
            'client_name' => 'Client Name',
            'attached_link' => 'Attached link - optional',
            'ref_number' => 'Ref. Phone Number - optional',
            'add_more' => 'Add More',
            'submit' => 'Submit',
            'organizer_type' => 'Organization Type',
            'organizer_account_types' => [
                'company' => 'Company',
                'individual' => 'Individual',
                'government' => 'Government',
                'non_profit' => 'Non Profit',
            ],
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'national_id' => 'National ID',
            'email' => 'Email',
            'mobile' => 'Mobile Number',
            'password' => 'Password',
            'password_confirmation' => 'Password Confirmation',
            'agree_terms_conditions' => 'I agree with terms & conditions',
            'next' => 'Next',
            'upload_new_photo' => 'Upload new photo',
            'company_name' => 'Company Name',
            'upload_video_or_image' => 'Upload video or image',
            'upload_file' => 'Upload File',
            'commercial_registration_no' => 'Commercial Registration No',
            'company_landline_no' => 'Company Landline No',
            'fax' => 'Fax',
            'address' => 'Address',
            'full_time_emp' => 'No. of Full Time Employees',
            'part_time_emp' => 'No. of Part Time Employees',
            'registered_capital' => 'Registered Capital',
            'business_activity' => 'Business Activity',
            'social_media_account' => 'Social Media Account',
            'event_url' => 'Event URL',
            'award' => 'Award',
            'previous' => 'Previous',
            'year' => 'Year',
            'image_size_hint' => 'Your image should be 82x82 for maintain ratio',
            'event_name' => 'Event Name',
            'remove' => 'Remove',
            'event_types' => [
                'sport' => 'Sport',
                'cultural' => 'Cultural',
                'entertainment' => 'Entertainment',
                'educational' => 'Educational',
                'social' => 'Social',
                'business' => 'Business',
            ],
            'events' => [
                'create_new_event' => 'Create New Event',
                'Keep_attendee_heading' => 'Keep your attendees hooked to your event. Your attendees can watch sessions,
                network with other attendees and exhibitors.',
                'take_attendee_heading' => 'Take the attendee experience to new levels with your Virtual Event App',
                'event_introduction' => 'Event Introductions',
                'event_type' => 'Event Type',
                'event_name' => 'Event Name',
                'objective' => 'Objective',
                'event_main_activities' => 'Event Main Activites',
                'your_purpose' => 'Your purpose with bwader',
                'start_creating' => 'Start Creating Event',
                'event_id' => 'ID :id',
                'edit' => 'edit',
                'upload_new_photo' => 'Upload new photo',
                'add_more_photos' => 'Add More Photos',
                'add_video' => 'Add Video',
                'upload_video' => 'Upload Video',
                'event_website_url' => 'Event Website URL',
                'image' => 'image',
                'add_cover_img' => 'Add Cover Image',
                'social_medial_links' => 'Add Social Media Links',
                'benefite_package' => 'Sponsorship Benefits Package',
                'name' => 'Name',
                'description' => 'Description',
                'sponsorship_type' => 'Sponsorship Type',
                'value' => 'Value',
                'create_package' => 'Create Package',
                'event_details' => 'Event Details',
                'patronage_qst' => 'Will the Event have a patronage?',
                'patronage_upload_photo' => 'Upload new photo',
                'patronage_type' => 'Patronage Type',
                'patronage_name' => 'Name',
                'patronage_biography' => 'Biography',
                'date_and_time' => 'Date & Time',
                'start_date' => 'Start Date',
                'start_time' => 'Start Time',
                'end_date' => 'End Date',
                'end_time' => 'End Time',
                'timezone' => 'Time Zone',

            ],

            'event_category_criteria' => [
                'title' => 'Event Category Criteria For :category',
                'assign' => 'Assign Criterias to :category',
                'show_all' => 'Show All :event_category_name Critiras',
                'no_critira' => 'No Critiras Assigned to :event_category_name',
                'columns' => [
                    'id' => 'ID',
                    'event_category' => 'Event Category',
                    'criteria' => 'Criteria',
                    'criterias' => 'Criterias',
                    'created_at' => 'Created At',
                    'active_status' => 'Active Status',
                    'action' => 'Action',
                    'active' => 'Active',
                ]
            ],

            'lookups' => [
                'venue_types' => [
                    'title' => 'Venue Type',
                    'create' => 'Add Venue Type',
                    'edit' => 'Edit Venue Type',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],
                'award_types' => [
                    'title' => 'Award Type',
                    'create' => 'Add Award Type',
                    'edit' => 'Edit Award Type',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],
                'marketing_campaigns' => [
                    'title' => 'Marketing Campaingn',
                    'create' => 'Add Marketing Campaingn',
                    'edit' => 'Edit Marketing Campaingn',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'marketing-campaign-options' => [
                    'title' => 'Marketing Campaingn Option',
                    'create' => 'Add Marketing Campaingn Option',
                    'edit' => 'Edit Marketing Campaingn Option',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'marketing_campaign' => 'Marketing Campaign',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],
                'partner_types' => [
                    'title' => 'Partner Type',
                    'create' => 'Add Partner Type',
                    'edit' => 'Edit Partner Type',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],
                'patronage_types' => [
                    'title' => 'Patronage Type',
                    'create' => 'Add Patronage Type',
                    'edit' => 'Edit Patronage Type',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'support_types' => [
                    'title' => 'Support Type',
                    'create' => 'Add Support Type',
                    'edit' => 'Edit Support Type',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'financial_categories' => [
                    'title' => 'Financial Category',
                    'create' => 'Add Financial Category',
                    'edit' => 'Edit Financial Category',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],
                'event_hostings' => [
                    'title' => 'Event Hosting',
                    'create' => 'Add Event Hosting',
                    'edit' => 'Edit Event Hosting',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'event-hosting-options' => [
                    'title' => 'Event Hosting Option',
                    'create' => 'Add Event Hosting Option',
                    'edit' => 'Edit Event Hosting Option',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'event_hosting' => 'Event Hosting',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'event_tickets' => [
                    'title' => 'Event Tickets',
                    'create' => 'Create Event Ticket',
                    'create_ticket' => 'Create Ticket',
                    'edit' => 'Edit Event Ticket',
                    'yes' => 'Yes',
                    'no' => 'No',
                    'will_event_has_tickets' => 'Will event have ticket sales?',
                    'columns' => [
                        'id' => 'ID',
                        'price' => 'Price',
                        'privileges' => 'Privileges',
                        'number' => 'No.of tickets',
                        'type' => 'Ticket Type',
                    ]
                ],

                'accompanying_activities' => [
                    'title' => 'Accompanying Activity',
                    'create' => 'Add Accompanying Activity',
                    'edit' => 'Edit Accompanying Activity',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],
                'accompanying_activities_options' => [
                    'title' => 'Accompanying Activity Option',
                    'create' => 'Add Accompanying Activity Option',
                    'edit' => 'Edit Accompanying Activity Option',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'accompanying_activity_id' => 'Accompanying Activity',
                        'accompanying_activity' => 'Accompanying Activity',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'event_categories' => [
                    'title' => 'Event Category',
                    'create' => 'Add Event Category',
                    'edit' => 'Edit Event Category',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'event_purposes' => [
                    'title' => 'Event Purpose',
                    'create' => 'Add Event Purpose',
                    'edit' => 'Edit Event Purpose',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],


                'benefit-categories' => [
                    'title' => 'Benefit Category',
                    'create' => 'Add Benefit Category',
                    'edit' => 'Edit Benefit Category',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'benefit-category-options' => [
                    'title' => 'Benefit Category Option',
                    'create' => 'Add Benefit Category Option',
                    'edit' => 'Edit Benefit Category Option',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'benefit_category_id' => 'Benefit Category',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'countries' => [
                    'title' => 'Country',
                    'create' => 'Add Country',
                    'edit' => 'Edit Country',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                        'in_region' => 'In Region',
                    ]
                ],

                'regions' => [
                    'title' => 'Region',
                    'create' => 'Add Region',
                    'edit' => 'Edit Region',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                        'country' => 'Country',
                    ]
                ],

                'cities' => [
                    'title' => 'City',
                    'create' => 'Add City',
                    'edit' => 'Edit City',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                        'country' => 'Country',
                        'region' => 'Region',
                    ]
                ],

                'participant_levels' => [
                    'title' => 'Participant Level',
                    'create' => 'Add Participant Level',
                    'edit' => 'Edit Participant Level',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'event-types' => [
                    'title' => 'Event Type',
                    'create' => 'Add Event Type',
                    'edit' => 'Edit Event Type',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'event_type' => 'Event Type',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'event-type-options' => [
                    'title' => 'Event Type Option',
                    'create' => 'Add Event Type Option',
                    'edit' => 'Edit Event Type Option',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'event_type' => 'Event Type',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'sponsorship-types' => [
                    'title' => 'Sponsorship Type',
                    'create' => 'Add Sponsorship Type',
                    'edit' => 'Edit Sponsorship Type',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'subcategories' => [
                    'title' => 'Event Subcategory',
                    'create' => 'Add Subcategory',
                    'edit' => 'Edit Subcategory',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Name',
                        'event_category' => 'Event Category',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

                'bank-accounts' => [
                    'title' => 'Bank Accounts',
                    'create' => 'Add Bank Account',
                    'edit' => 'Edit Bank Account',
                    'columns' => [
                        'id' => 'ID',
                        'name' => 'Bank Name',
                        'bank_account_number' => 'Account Number',
                        'bank_account_iban' => 'Account Iban',
                        'category' => 'Category',
                        'created_at' => 'Created At',
                        'active_status' => 'Active Status',
                        'active' => 'Active',
                    ]
                ],

            ]
        ],
        'placeholders' => [
            'write_youtube_url' => 'Youtube URL',
            'write_client_name' => 'Write client name',
            'write_attached_link' => 'Write Client attachedLink',
            'write_ref_number' => 'Write ref phone number',
            'write_first_name' => 'Write First Name',
            'write_last_name' => 'Write Last Name',
            'write_national_id' => 'Enter your national id',
            'write_email' => 'Enter your email address',
            'write_mobile' => 'ex: 01012345678',
            'write_password' => 'Enter your password',
            'write_password_confirmation' => 'confirm your password',
            'write_company_name' => 'Write your company name',
            'write_commercial_registration_number' => 'Write Commercial Registration Number',
            'write_landline' => 'ex: 02 34566545',
            'write_fax' => 'Write your fax number',
            'write_address' => 'Write your Address',
            'write_emp_no' => 'ex 15',
            'write_registered_capital' => 'Write Registered Capital',
            'write_business_activity' => 'Write your Business Activity',
            'write_event_url' => 'Write Event URL',
            'write_award' => 'Write Event Award',
            'write_year' => 'Write event Year',
            'write_event_name' => 'Write full event name',
            'social_media_platforms' => [
                'facebook' => 'Facebook',
                'twitter' => 'Twitter',
                'linkedin' => 'Linkedin',
                'instagram' => 'Instagram',
                'snapchat' => 'Snapchat',
            ],
            'write_patronage_name' => 'Write patronage name'
        ],
        'reset_link' => 'send reset link email',

        'criterias' => [
            'assigned_successfully' => 'Criterias have been assigned successfully',
            'detached_successfully' => 'Criterias have been detached successfully',
            'activated_successfully' => 'Criteria status has been changed to :activated successfully',
            'not_valid' => 'Event category is not valid'
        ],

        'lables' => [
            'lookups' => [
                'venue' => [
                    'name' => 'Venue Type',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new venue type item',
                    'update' => 'Update venue type item',
                    'submit' => 'Submit'
                ],
                'partner' => [
                    'name' => 'Partner Type',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new partner type item',
                    'update' => 'Update partner type item',
                    'submit' => 'Submit'
                ],
                'support' => [
                    'name' => 'Support Type',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new support type item',
                    'update' => 'Update support type item',
                    'submit' => 'Submit'
                ],
                'financial_category' => [
                    'name' => 'Financial Category',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new financial category item',
                    'update' => 'Update financial category item',
                    'submit' => 'Submit'
                ],
                'participant_level' => [
                    'name' => 'Participant Level',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new participant level item',
                    'update' => 'Update participant level item',
                    'submit' => 'Submit'
                ],
                'patronage_type' => [
                    'name' => 'Patronage Type',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new patronage type item',
                    'update' => 'Update patronage type item',
                    'submit' => 'Submit'
                ],
                'benefit_category' => [
                    'name' => 'Benefit Category',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new benefit category item',
                    'update' => 'Update benefit category item',
                    'submit' => 'Submit'
                ],
                'country' => [
                    'name' => 'Country',
                    'active' => "Active",
                    'in_region' => "In Region",
                    'create' => 'Create new country item',
                    'update' => 'Update country item',
                    'submit' => 'Submit'
                ],
                'event_type' => [
                    'name' => 'Event Type',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new event type item',
                    'update' => 'Update event type item',
                    'submit' => 'Submit'
                ],
                'marketing_campaign' => [
                    'name' => 'Marketing Campaign',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new marketing campaign item',
                    'update' => 'Update marketing campaign item',
                    'submit' => 'Submit'
                ],
                'sponsorship_type' => [
                    'name' => 'Sponsorship Type',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new sponsorship type item',
                    'update' => 'Update sponsorship type item',
                    'submit' => 'Submit'
                ],
                'bank_account' => [
                    'name' => 'Account Name',
                    'number' => 'Account Number',
                    'iban' => 'Account Iban',
                    'active' => "Active",
                    'create' => 'Create new bank account item',
                    'update' => 'Update bank account item',
                    'submit' => 'Submit'
                ],
                'event_category' => [
                    'name' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new event category item',
                    'update' => 'Update event category item',
                    'submit' => 'Submit'
                ],
                'event_hosting' => [
                    'name' => 'Event Hosting',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new event hosting item',
                    'update' => 'Update event hosting item',
                    'submit' => 'Submit'
                ],
                'accompanying_activity' => [
                    'name' => 'Accompanying Activity',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new accompanying activity item',
                    'update' => 'Update accompanying activity item',
                    'submit' => 'Submit'
                ],
                'event-categories' => [
                    'title' => 'Event Categories',
                ],
                'award_type' => [
                    'name' => 'Award Type',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new award type item',
                    'update' => 'Update award type item',
                    'submit' => 'Submit'
                ],
                'region' => [
                    'name' => 'Region',
                    'country' => 'Country',
                    'active' => "Active",
                    'create' => 'Create new region item',
                    'update' => 'Update region item',
                    'submit' => 'Submit'
                ],
                'city' => [
                    'name' => 'City',
                    'country' => 'Country',
                    'region' => 'Region',
                    'active' => "Active",
                    'create' => 'Create new city item',
                    'update' => 'Update city item',
                    'submit' => 'Submit'
                ],
                'marketing_campaign_option' => [
                    'name' => 'Marketing Campaign Option',
                    'event_category' => 'Event Category',
                    'marketing_campaign' => 'Marketing Campaign',
                    'active' => "Active",
                    'create' => 'Create new marketing campaign option item',
                    'update' => 'Update marketing campaign option item',
                    'submit' => 'Submit'
                ],
                'event_purpose' => [
                    'name' => 'Event Purpose',
                    'event_category' => 'Event Category',
                    'active' => "Active",
                    'create' => 'Create new event purpose item',
                    'update' => 'Update event purpose item',
                    'submit' => 'Submit'
                ],
            ],

        ],

        'placeholder' => [
            'lookups' => [
                'venue' => [
                    'name' => 'Venue Type',
                    'event_category_id' => 'Event Category Id',
                ],
                'partner' => [
                    'name' => 'Partner Type',
                    'event_category_id' => 'Event Category Id',
                ],
                'support' => [
                    'name' => 'Support Type',
                    'event_category_id' => 'Event Category Id',
                ],
                'financial_category' => [
                    'name' => 'Financial Category',
                    'event_category_id' => 'Event Category Id',
                ],
                'participant_level' => [
                    'name' => 'Participant Level',
                    'event_category_id' => 'Event Category Id',
                ],
                'patronage_type' => [
                    'name' => 'Patronage Type',
                    'event_category_id' => 'Event Category Id',
                ],
                'benefit_category' => [
                    'name' => 'Benefit Category',
                    'event_category_id' => 'Event Category Id',
                ],
                'country' => [
                    'name' => 'Country',
                    'in_region' => "In Region",
                ],
                'event_type' => [
                    'name' => 'Event Type',
                    'event_category_id' => 'Event Category Id',
                ],
                'marketing_campaign' => [
                    'name' => 'Marketing Campaign',
                    'event_category_id' => 'Event Category Id',
                ],
                'sponsorship_type' => [
                    'name' => 'Sponsorship Type',
                    'event_category_id' => 'Event Category Id',
                ],
                'bank_account' => [
                    'name' => 'Account Name',
                    'number' => 'Account Number',
                    'iban' => 'Account Iban',
                ],
                'event_category' => [
                    'name' => 'Event Category',
                ],
                'event_hosting' => [
                    'name' => 'Event Hosting',
                    'event_category_id' => 'Event Category Id',
                ],
                'accompanying_activity' => [
                    'name' => 'Accompanying Activity',
                    'event_category_id' => 'Event Category Id',
                ],
                'award_type' => [
                    'name' => 'Award Type',
                    'event_category_id' => 'Event Category Id',
                ],
                'region' => [
                    'name' => 'Region',
                    'country_id' => 'Country Id',
                ],
                'city' => [
                    'name' => 'City',
                    'country_id' => 'Country Id',
                    'region_id' => 'Region Id',
                ],
                'marketing_campaign_option' => [
                    'name' => 'Marketing Campaign Option',
                    'event_category_id' => 'Event Category Id',
                    'marketing_campaign' => 'Marketing Campaign',
                ],
                'event_purpose' => [
                    'name' => 'Event Purpose',
                    'event_category_id' => 'Event Category Id',
                ],
            ],

        ],

        'sidebar' => [
            'profile' => 'Profile',
            'venue_type' => 'Venue Type',
            'partner_type' => 'Partner Type',
            'support_type' => 'Support Type',
            'financial_category' => 'Financial Category',
            'participant_level' => 'Participant Level',
            'patronage_type' => 'Patronage Type',
            'benefit_category' => 'Benefit Category',
            'benefit_category_option' => 'Benefit Category Option',
            'country' => 'Country',
            'event_type' => 'Event Type',
            'marketing_campaign' => 'Marketing Campaign',
            "sponsorship_type" => "Sponsorship Type",
            "bank_account" => "Bank Account",
            "event_category" => "Event Category",
            "event_subcategory" => "Event SubCategory",
            "event_hosting" => "Event Hosting",
            "event_hosting_option" => "Event Hosting Option",
            "accompanying_activity" => "Accompanying Activity",
            "accompanying_activity_option" => "Accompanying Option",
            "award_type" => "Award Type",
            "event_type_option" => "Event Type Option",
            "region" => "Region",
            "city" => "City",
            "marketing_campaign_option" => "Marketing Campaign Option",
            "event_purpose" => "Event Purpose",
            "sport" => "Sport",
            "entertainment" => "Entertainment",
            "cultural" => "Cultural",
            "educional_business" => "Educational & Business",
            "organizers" => "Organizers",
            "sponsors" => "Sponsors",
        ],

        'table-Head' => [
            'name' => 'Name',
            'active' => 'Active',
            'event_category' => 'Event Category',
        ]

    ],


    'actions' => [
        'save' => 'Save',
        'submit' => 'Submit',
        'assign' => 'Assign',
        'cancel' => 'Cancel',
        'go' => 'Go',
        'reset' => 'Reset',
        'delete' => 'Delete',
        'approve' => 'Approve',
        'refuse' => 'Refuse',
        'block' => 'Block',
        'set_pending' => 'Set Pending',
        'table_action' => 'Actions',
        'yes_delete_it' => 'Yes, delete it!',
    ],
    'tabulator' => [
        'export' => 'Export',
        'btn' => [
            'xlsx' => 'Export XLSX',
            'csv' => 'Export CSV',
            'json' => 'Export JSON',
            'html' => 'Export HTML',
            'print' => 'Print',

        ],
    ],
    'search' => [
        'title' => 'Search',
        'field' => 'Field',
        'type' => 'Type',
        'operators' => [
            'like' => 'Like'
        ],
        'value' => 'Value',
        'placeholder' => 'Search...',
    ],
    'alerts' => [
        'confirmation' => [
            'are_you_sure' => 'Are you sure?',
            'do_you_really' => 'Do you really want to delete these records?',
            'proceed_can_not_undo' => 'This process cannot be undone.',
            'approve_account_msg' => 'Approve Account To Let :account_type Login and start his cycle.',
            'refuse_account_msg' => 'You Will Refuse :account_type Account.',
            'block_account_msg' => 'You Will Block :account_type Account.',
            'admin_pending_account_msg' => 'You Will set :account_type Account To Pending.',

        ],
    ],

    'sidebare' => [
        'menue' => [
            'dashboard' => [
                'home' => 'Home',
                'event_category_criteria' => 'Category Criterias',
            ],
            'lookups' => [
                'head' => 'LookUps',
                'venue_type' => 'Venue Type',
                'event_purpose' => 'Event Purpose',
                'award_type' => 'Award Type',
                'accompanying_activity' => 'Accompanying Activity',
                'event_hosting' => 'Event Hosting',
                'event_hosting_option' => 'Event Hosting Option',
                'event_category' => 'Event Category',
                'event_subcategory' => 'Event Subcategory',
                'partner_type' => 'Partner Type',
                'patronage_type' => 'Patronage Type',
                'support_type' => 'Support Type',
                'financial_category' => 'Financial Category',
                'participant_level' => 'Participant Level',
                'benefit_category' => 'Benefit Category',
                'country' => 'Country',
                'region' => 'Region',
                'city' => 'City',
                'marketing_campaign' => 'Marketing Campaign',
                'marketing_campaign_option' => 'Marketing Option',
                'event_type' => 'Event Type',
                'event_type_option' => 'Event Type Option',
                'sponsorship_type' => 'Sponsorship Type',
                'bank_account' => 'Bank Account',
                'accompanying_activity_option' => 'Accompanying Option',
                'benefit_category_options' => 'Benefit Option',
            ],
        ]
    ],

    'labels' => [
        'password_confirmation' => 'Password Confirmation',
        'password' => 'Password',
        'general_info' => 'General Information',
        'change_photo' => 'Change Profile Photo',
        'name' => 'Name',
        'email' => 'Email',
        'profile' => 'Profile',
        'logout' => 'Logout',
        'dashboard' => 'Dashboard',
    ],
    'placeholders' => [
        'enter_password_confirmation' => 'Enter Password Confirmation',
        'enter_password' => 'Enter Password',
        'enter_email' => 'Enter Email',
        'enter_name' => 'Enter Name',
    ],

    'you_have_to_confirm_mail' => 'You have to activate your new mail',

    'profile_statuses' => [
        'pending' => 'Pending',
        'admin_pending' => 'Admin Pending',
        'approved' => 'Approved',
        'refused' => 'Refused',
        'blocked' => 'Blocked',
    ],

    'account_types' => [
        'organizer' => 'Organizer',
        'sponsor' => 'Sponsor',
        'admin' => 'Admin',
        'regulator' => 'Regulator',
    ]

];
