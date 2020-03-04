<?php

return [
    'userManagement'   => [
        'title'          => 'Användarhantering',
        'title_singular' => 'Användarhantering',
    ],
    'permission'       => [
        'title'          => 'Rättigheter',
        'title_singular' => 'Rättighet',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Titel',
            'title_helper'      => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
        ],
    ],
    'role'             => [
        'title'          => 'Roller',
        'title_singular' => 'Roll',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Titel',
            'title_helper'       => '',
            'permissions'        => 'Rättigheter',
            'permissions_helper' => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
        ],
    ],
    'user'             => [
        'title'          => 'Användare',
        'title_singular' => 'Användare',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Namn',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verifierad',
            'email_verified_at_helper' => '',
            'password'                 => 'Lösenord',
            'password_helper'          => '',
            'roles'                    => 'Roller',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
            'companies'                => 'Företag',
            'companies_helper'         => '',
        ],
    ],
    'auditLog'         => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Beskrivning',
            'description_helper'  => '',
            'subject_id'          => 'Ämnes ID',
            'subject_id_helper'   => '',
            'subject_type'        => 'Ämnes Type',
            'subject_type_helper' => '',
            'user_id'             => 'AnvändarID',
            'user_id_helper'      => '',
            'properties'          => 'Inställningar',
            'properties_helper'   => '',
            'host'                => 'Host',
            'host_helper'         => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
        ],
    ],
    'userAlert'        => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'alert_text'        => 'Varningstext',
            'alert_text_helper' => '',
            'alert_link'        => 'Varningslänk',
            'alert_link_helper' => '',
            'user'              => 'Användare',
            'user_helper'       => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
        ],
    ],
    'lobok'            => [
        'title'          => 'Lobok',
        'title_singular' => 'Lobok',
    ],
    'resource'         => [
        'title'          => 'Resource',
        'title_singular' => 'Resource',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Namn',
            'name_helper'       => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
        ],
    ],
    'reservation'      => [
        'title'          => 'Reservation',
        'title_singular' => 'Reservation',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'date'              => 'Datum',
            'date_helper'       => '',
            'start_time'        => 'Starttid',
            'start_time_helper' => '',
            'stop_time'         => 'Sluttid',
            'stop_time_helper'  => '',
            'resource'          => 'Resurs',
            'resource_helper'   => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
            'company'           => 'Företag',
            'company_helper'    => '',
            'extras'            => 'Extra tjänster',
            'extras_helper'     => '',
            'status'            => 'Status',
            'status_helper'     => '',
        ],
    ],
    'company'          => [
        'title'          => 'Företag',
        'title_singular' => 'Företag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Namn',
            'name_helper'       => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
        ],
    ],
    'schedule'         => [
        'title'          => 'Schedule',
        'title_singular' => 'Schedule',
    ],
    'booking'          => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
    ],
    'myCalendar'       => [
        'title'          => 'My Calendar',
        'title_singular' => 'My Calendar',
    ],
    'resourceCalendar' => [
        'title'          => 'Resource Calendar',
        'title_singular' => 'Resource Calendar',
    ],
    'myAccount'        => [
        'title'          => 'My Account',
        'title_singular' => 'My Account',
    ],
    'profile'          => [
        'title'          => 'Profile',
        'title_singular' => 'Profile',
    ],
    'changePassword'   => [
        'title'          => 'Change Password',
        'title_singular' => 'Change Password',
    ],
    'taskManagement'   => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'reservationStatus'       => [
        'title'          => 'Status',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Namn',
            'name_helper'       => '',
            'color'              => 'Färg',
            'color_helper'       => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
        ],
    ],
    'task'             => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'description'        => 'Description',
            'description_helper' => '',
            'status'             => 'Status',
            'status_helper'      => '',
            'tag'                => 'Tags',
            'tag_helper'         => '',
            'attachment'         => 'Attachment',
            'attachment_helper'  => '',
            'due_date'           => 'Due date',
            'due_date_helper'    => '',
            'assigned_to'        => 'Assigned to',
            'assigned_to_helper' => '',
            'created_at'        => 'Skapad',
            'created_at_helper' => '',
            'updated_at'        => 'Uppdaterad',
            'updated_at_helper' => '',
            'deleted_at'        => 'Borttagen',
            'deleted_at_helper' => '',
        ],
    ],
    'tasksCalendar'    => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
];
