<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit783da1ef6aab2e169337631c9fe9c5b1
{
    public static $files = array (
        '7634b3f724afa497ea6859a91d1c51d1' => __DIR__ . '/../..' . '/includes/helpers.php',
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Config' => 
            array (
                0 => __DIR__ . '/../..' . '/includes',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WpLaunchChecklist\\Launch_Checklist\\Admin' => __DIR__ . '/../..' . '/admin/class-admin.php',
        'WpLaunchChecklist\\Launch_Checklist\\Admin_Notice' => __DIR__ . '/../..' . '/includes/class-admin-notice.php',
        'WpLaunchChecklist\\Launch_Checklist\\Loader' => __DIR__ . '/../..' . '/includes/class-loader.php',
        'WpLaunchChecklist\\Launch_Checklist\\Options_Page' => __DIR__ . '/../..' . '/admin/class-options-page.php',
        'WpLaunchChecklist\\Launch_Checklist\\Plugin_Requirements' => __DIR__ . '/../..' . '/includes/class-plugin-requirements.php',
        'WpLaunchChecklist\\Launch_Checklist\\Uninstaller' => __DIR__ . '/../..' . '/includes/class-uninstaller.php',
        'WpLaunchChecklist\\Launch_Checklist\\WCAG' => __DIR__ . '/../..' . '/includes/class-wcag.php',
        'WpLaunchChecklist\\Launch_Checklist\\i18n' => __DIR__ . '/../..' . '/includes/class-i18n.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit783da1ef6aab2e169337631c9fe9c5b1::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit783da1ef6aab2e169337631c9fe9c5b1::$classMap;

        }, null, ClassLoader::class);
    }
}
