<?php

return [
    'email_verified_success' => 'Email Verified Successfully',
    'invalid_email_activation_code' => 'Invalid Activation Code',
    'please_verifiy_email_first' => 'Please verifiy your email first',
    'account_not_approved' => 'Your profile is not approved by admin yet.',
    'please_check_your_mail' => 'Please check your mail',
    'invalid_password_reset_code' => 'Invalid code',
    'password_reset_success' => 'Account password reset success',
    'profile_updated' => 'Your profile data has been updated successfully',
    'profile_data' => 'Sponsor profile data',
    'please_activate_email' => 'Please check your email to activate your account',
    'admin_pending_status' => 'Please update your account information accourding to notes to meet system requirements',
    'refused_status' => 'Sorry your account has beent refused , you have to signup again and put these notes in considrations',
    'under_review' => 'your account is watting for admin review',

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
    ],
    'criterias' => [
        'index_greater_100' => 'priority index musn\'t be greater than 100',
        'priority_greater_100' => 'Sum of icp criterias priority index is greater than 100 '
    ],
    'events' => [
        'no_sponsor_icps' => 'Sponsor dosn\'t have any icps to select events based on their criterias',
        'no_sponsor_icps_criterias' => 'Sponsor icps don\'t contain criterias',
        'sponsor_events' => 'Sponsor events matches with his icps criterias',
        'not_found' => 'Event not found',
        'details' => 'Event details',

        'sponosership' => [
            'package' => [
                'index' => 'List of sponsorShip Packages',
            ],
            'proposal' => [
                'created' => 'sponsorShip Proposal request has been created successfully',
                'already_submited_before' => 'You Already submited an proposal before for this event sponsorship package',
                'not_found' => 'Proposal not found',
                'payment-transfer' => [
                    'mark_as_paid' => 'Payment transfer document has been uploaded successfully.'
                ]
            ],
        ],

        'notifications' => [
            'events' => [
                'sponsorship' => [
                    'sponsor-approved-proposal' => [
                        'title' => 'Sponsorship Propsal Approved',
                        'body' => ':sponsor_name has been approved your sponsorship proposal for :event_name'
                    ],
                    'admin-payment-transfer-confirmed' => [
                        'title' => 'Payment Transfer Confirmation',
                        'body' => 'Your payment transfer has been confirmed by the admin for :event_name'
                    ],
                ]
            ]
        ]

    ],

    'site' => [
        'login_to_your_account' => 'Login to your Account',
        'email_address' => 'Email Address',
        'already_have_account' => 'Already have an account?',
        'password' => 'Password',
        'confirm_password' => 'Confirm Password',
        'please_confirm_password' => 'Please confirm your password before continuing',
        'keep_me_logged_in' => 'Keep me logged in',
        'login' => 'Login',
        'forget_password' => 'Forgot Your Password?',
        'dont_have_account' => 'Don’t have an account?',
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
            'login' => [
                'success' => 'Successfully logged in',
                'refuesd' => 'Your account has been refused, resign again putting refused note in consideration',
                'pending' => 'Your account hasn\'t yet been accepted by admin!',
                'admin_pending' => 'You have to commplete your profile according to notes sent by admin',
                'blocked' => 'Your account has been blocked, can\'t login',

            ],
            'mails' => [
                'congratulations_greating' => 'Congratulations , :sponsor_name',
                'your_account_approved' => 'Your Account is approved you can login now and create sponsorship proposals for events.',
                'login_now' => 'Login Now',
                'thanks' => 'Thanks',
                'unfortunately_greating' => 'Unfortunately, :sponsor_name',
                'your_account_blocked' => 'Your Account is blocked, because of the following reasons :',
                'hello_greating' => 'Hello , :sponsor_name',
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
            'personal_data' => 'Personal Data',
            'create_new_account' => 'Create New Account',
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
            'sponsor_type' => 'Sponsor Type',
            'sponsor_account_types' => [
                'company' => 'Company',
                'individual' => 'Individual',
                'government' => 'Government',
                'non_profit' => 'Non Profit',
            ],
            'first_name' => 'First Name',
            'position' => 'Position',
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
        ],
        'placeholders' => [
            'write_youtube_url' => 'Youtube URL',
            'write_position' => 'Write Your Position',
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
