<?php

return [
    'success' => 'Success',
    'email_verified_success' => 'Email Verified Successfully',
    'invalid_email_activation_code' => 'Invalid Activation Code',
    'please_verifiy_email_first' => 'Please verifiy your email first',
    'account_not_approved' => 'Your profile is not approved by admin yet.',
    'please_check_your_mail' => 'Please check your mail',
    'invalid_password_reset_code' => 'Invalid code',
    'password_reset_success' => 'Account password reset success',
    'profile_updated' => 'Your profile data has been updated and listed for admin approve',
    'profile_data' => 'Organizer profile data',
    'please_activate_email' => 'Please check your email to activate your account',
    'admin_pending_status' => 'Please update your account information accourding to notes to meet system requirements',
    'refused_status' => 'Sorry your account has beent refused , you have to signup again and put these notes in considrations',
    'under_review' => 'your account is watting for admin review',

    'client' => [
        'saved' => 'Organizer client saved successfully',
        'deleted' => 'Organizer client deleted successfully',
    ],
    'previous-event' => [
        'deleted' => 'Previous event deleted successfully',
        'saved' => 'Previous event saved successfully',
    ],

    'events' => [
        'statuses' => [
            'created' => 'Created',
            'pending' => 'Pending',
            'completed' => 'Completed',
            'rejected' => 'Rejected',
            'drafted' => 'Drafted',
            'under_review' => 'In Review',
            'declined' => 'Declined',
            'approved' => 'Approved',
        ],
        'created' => 'Event has been created successfully',
        'found' => 'Event has been found successfully',
        'updated' => 'Event has been updated successfully',
        'deleted' => 'Event has been deleted successfully',
        'not_found' => 'Event not found',
        'events_list' => 'Organizer events list',
        'change_status' => 'Event status has been changed to :status successfully',

        'venue' => [
            'created' => 'Venue has been created successfully',
            'updated' => 'Venue has been updated successfully',
            'deleted' => 'Venue has been deleted successfully',
            'not_found' => 'Venue not found',
            'not_allowed' => 'You are not allowed to delete this venue',
        ],

        'budget' => [
            'saved' => 'Event Budget Saved Successfully',
            'deleted' => 'Event Budget deleted succssfully',
        ],

        'contact' => [
            'saved' => 'Event contact has been saved successfully',
        ],

        'document' => [
            'saved' => 'Event document saved successfully',
        ],

        'influencer' => [
            'saved' => 'Influncer saved successfully',
            'not_found' => 'Influncer not found',
            'deleted' => 'Influncer deleted successfully',
            'updated' => 'Influncer updated successfully',
        ],

        'partner' => [
            'saved' => 'Event Partners saved successfully',
        ],

        'reach' => [
            'saved' => 'Event Marketing Campains saved successfully',
            'deleted' => 'Event Marketing option deleted successfully',

        ],

        'scope' => [
            'created' => 'Event scope has been saved successfully',
            'updated' => 'Event scope has been updated successfully',
            'not_found' => 'Event scope not found',
        ],

        'sponosership' => [
            'saved' => 'Sponosership details has been saved successfully',
            'deleted' => 'Event Sponsorship deleted successfully',

            'package' => [
                'index' => 'List of sponsorShip Packages',
                'created' => 'SponsorShip Package has been created successfully',
                'updated' => 'SponsorShip Package has been updated successfully',
                'deleted' => 'SponsorShip Package Sponsorship deleted successfully',
                'not_found' => 'SponsorShip package not found',
                'assigned' => 'SponsorShip Package Benefite has been attached successfully'
            ],
            'proposal' => [
                'not_found' => 'SponsorShip Proposal Request not found',
                'show' => 'sponsorShip Proposal request',
                'updated' => 'sponsorShip Proposal request has been updated successfully',
            ]
        ],

        'support' => [
            'saved' => 'Event supoort request saved successfully',
        ],


        'enter_event_info' => 'Enter information in each step below to create new event',
        'sumary' => 'Summary',
        'send_for_review' => 'Send For Review',
        'publish_to_sponsors' => 'Publish To Sponsers',
    ],
    'bank_account' => [
        'index' => 'List of bank accounts',
        'store' => 'Bank Account has beent created successfully',
        'update' => 'Bank Account has beent updated successfully',
        'destroy' => 'Bank Account has beent deleted successfully',
        'not_found' => 'There is no bank Account with provided id'
    ],
    'patronage' => [
        'not_found' => 'Invalid Event Patronage',
        'saved' => 'Event Patronage saved successfully',
        'updated' => 'Event Patronage updated successfully',
        'deleted' => 'Event Patronage deleted successfully',
    ],
    'tickets' => [
        'not_found' => 'Invalid Event Ticket',
        'saved' => 'Event Ticket saved successfully',
        'updated' => 'Event Ticket updated successfully',
        'deleted' => 'Event Ticket deleted successfully',
    ],
    'drafted_event' => [
        'not_found' => 'Drafted event not found',
        'saved' => 'Event has been stored as drafted successfully',
        'deleted' => 'Event has been deleted successfully',
    ],
    'participant' => [
        'saved' => 'Event participant saved successfully',
        'updated' => 'Event participant updated successfully',
        'deleted' => 'Event participant deleted successfully',
        'not_found' => 'Invalid Event Participant',
    ],

    'notifications' => [
        'events' => [
            'approved-event' => [
                'title' => 'Approved Event',
                'body' => 'We Want to inform you that your event :event_name has been approved.',
                'body2' => 'You can recive sponsorship proposals for your event'
            ],
            'sponsorship' => [
                'sponsor-new-proposal' => [
                    'title' => 'Sponsorship Propsal Approved',
                    'body' => ':sponsor_name has been submited new proposal for :event_name'
                ],
                'admin-payment-transfer-confirmed' => [
                    'title' => 'Payment Transfer Confirmation',
                    'body' => ':sponsor_name has transfer money for :event_name sponsorship'
                ],
            ]
        ]
    ],
    'actions' => [
        'yes_delete_it' => 'Yes Delete It',
        'edit' => 'Edit',
        'delete' => 'Delete',
    ],
    'alerts' => [
        'confirmation' => [
            'are_you_sure' => 'Are you sure?',
            'do_you_really' => 'Do you really want to delete these records?',
            'proceed_can_not_undo' => 'This process cannot be undone.',

        ],
    ],
    'site' => [
        'login_to_your_account' => 'Login to your Account',
        'email_address' => 'Email Address',
        'password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'please_confirm_password' => 'Please confirm your password before continuing',
        'keep_me_logged_in' => 'Keep me logged in',
        'already_have_account' => 'Already have an account?',
        'login' => 'Login',
        'forget_password' => 'Forgot Your Password?',
        'dont_have_account' => 'Don???t have an account?',
        'sign_up_now' => 'Sign Up Now',
        'not_worry' => 'Not to worry, we will help you to access your account.',
        'reset_password' => 'Reset Password',
        'reset_email_sent' => 'Reset Email Sent!',
        'reset_email_msg' => 'We sent you a reset link to update your password.',
        'back_to' => 'Back to',

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
                'hello_greating' => 'Hello , :organizer_name',
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
                'summary' => 'Summary',
                'send_for_review' => 'Send For Review',
                'save_as_drafted' => 'Save As Drafted',
                'send_for_review' => 'Send For Review',
                'publish_to_sponsors' => 'Publish For Sponsors',

            ],
            'hosted_by' => "Hosted By",
            'event_category' => "Event Category",
            'event_sub_category' => "Event Subcategory",
            'event_type' => "Event Type",
            'status' => "Status",
            'active' => "Actions",
            'all_events' => "All Events",
            'filter_by' => "Filter By",
            'search_for_event' => "Search for event",
            'no_events' => "No Events",
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
    ],

];
