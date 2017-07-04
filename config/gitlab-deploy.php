<?php

return [

    'secret_token'  =>  env('GITLAB_DEPLOY_SECRET_TOKEN', ''),

    /*
    |--------------------------------------------------------------------------
    | Email recipients
    |--------------------------------------------------------------------------
    |
    | The email address and name that notification emails will be sent to.
    | Leave the array empty to disable emails.
    |
    | [
    |     ['name' => 'Joe Bloggs', 'address' => 'email@example1.com'],
    |     ['name' => 'Jane Doe', 'address' => 'email@example2.com'],
    |     ...
    | ]
    |
    */

    'email_recipients' => env('GITLAB_DEPLOY_NOTIFICATION', []),

    /*
    |--------------------------------------------------------------------------
    | Email sender
    |--------------------------------------------------------------------------
    |
    | The email address and name that notification emails will be sent from.
    | This will default to the sender in config(mail.from) if left null.
    |
    */

    'email_sender' => ['address' => null, 'name' => null],

    /*
    |--------------------------------------------------------------------------
    | Repository path
    |--------------------------------------------------------------------------
    |
    | This the root path of the Git repository that will be pulled. If this
    | is left empty the script will try to determine the directory itself
    | but looking for the project's .env file it's nearby .git directory.
    |
    | No trailing slash
    |
    */

    'repo_path' => env('GITLAB_DEPLOY_REPO_PATH', ''),


    /*
    |--------------------------------------------------------------------------
    | Allowed sources
    |--------------------------------------------------------------------------
    |
    | A request will be ignored unless it comes from an IP listed in this
    | array. Leave the array empty to allow all sources.
    |
    | This is useful for a little extra security if you run your own Git
    | repo server.
    |
    */

    'allowed_sources' => env('GITLAB_DEPLOY_ALLOWED_SOURCES', []),

    /*
    |--------------------------------------------------------------------------
    | Remote name
    |--------------------------------------------------------------------------
    |
    | The name of the remote repository to pull the changes from
    |
    */

    'remote' => env('GITLAB_DEPLOY_ALLOWED_SOURCES', 'origin'),

    /*
    |--------------------------------------------------------------------------
    | Git binary path
    |--------------------------------------------------------------------------
    |
    | The full path to the system git binary. e.g. /usr/bin/git
    |
    | Leave blank to let the system detect using the current PATH variable
    |
    */

    'git_path' => env('GITLAB_DEPLOY_ALLOWED_SOURCES', ''),

];
