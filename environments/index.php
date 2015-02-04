<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:
 *
 * ```php
 * return [
 *     'environmentName' => [
 *         'path' => 'file storing the environment configuration',
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of directories that should be set executable
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *         'generateCookieValidationKey' => 'ENV_CONFIG_PARAM',
 *     ],
 * ];
 * ```
 */
return [
    'Development' => [
        'path' => '.dev.env',
        'setWritable' => [
            'backend/runtime',
            'backend/web/assets',
            'frontend/runtime',
            'frontend/web/assets',
        ],
        'setExecutable' => [
            'yii',
        ],
        'generateCookieValidationKey' => 'COOKIE_VALIDATION_KEY',
    ],
    'Production' => [
        'path' => '.prod.env',
        'setWritable' => [
            'backend/runtime',
            'backend/web/assets',
            'frontend/runtime',
            'frontend/web/assets',
        ],
        'setExecutable' => [
            'yii',
        ],
        'generateCookieValidationKey' => 'COOKIE_VALIDATION_KEY',
    ],
];
