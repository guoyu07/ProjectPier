<?php

return array (
    
    // ---------------------------------------------------
    // Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => '测试邮件设置',
    'administration tool desc test_mail_settings' => '使用这个简单的工具来检查,服务器是否被合理的配置并能够成功地发送邮件',
    'administration tool name mass_mailer' => '批量邮件发送器',
    'administration tool desc mass_mailer' => '此简单的工具能够让您给系统中某组中的所有人发送纯文本信息',
    'administration tool name system_info' => '系统信息',
    'administration tool desc system_info' => '显示您系统详情的简单工具',
    'administration tool name browse_log' => '浏览系统日志',
    'administration tool desc browse_log' => '使用该工具，可以浏览系统日志并检测错误',
    
    // ---------------------------------------------------
    // Configuration categories and options
    // ---------------------------------------------------
    
    'configuration' => '配置',
    
    'mail transport mail()' => '默认PHP设置',
    'mail transport smtp' => 'SMTP服务器',
    
    'secure smtp connection no' => '否',
    'secure smtp connection ssl' => '是,使用SSL',
    'secure smtp connection tls' => '是,使用TLS',
    
    'file storage file system' => '文件系统',
    'file storage mysql' => '数据库(MySQL)',
    
    // Categories
    'config category name general' => '常规',
    'config category desc general' => '常规ProjectPier系统设置',
    'config category name mailing' => '邮件发送',
    'config category desc mailing' => '使用此配置来设置ProjectPier系统如何发送邮件通知。你可以按照php.ini文件中提供的信息配置，或者使用SMTP服务器的配置信息',
    'config category name features' => '功能',
    'config category desc features' => '使用如下参数来启用或者禁用不同的功能，或者选择项目数据显示的不同方式',
    'config category name database' => '数据库',
    'config category desc database' => '使用如下参数类配置数据库相关选项',
    'config category name authentication' => '身份验证',
    'config category desc authentication' => '访问所有身份验证设置项',

    // ---------------------------------------------------
    // Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => '当前所在',
    'config option desc site_name' => '这个值将被作为项目的当前所在在仪表板页面上显示',
    'config option name file_storage_adapter' => '文件存储',
    'config option desc file_storage_adapter' => '选择用来存储附件、头像、图标图片和其他任何上传文档的位置。 <strong>推荐使用数据库引擎存储</strong>.',
    'config option name default_project_folders' => '默认文件夹',
    'config option desc default_project_folders' => '当一个项目被创建的时候，会生成一个文件夹。每一个文件夹名称应该占新的一行。 重复的或者空行将被程序忽略',
    'config option name theme' => '皮肤',
    'config option desc theme' => '使用皮肤功能你可以改变Projectpier系统默认的外观和颜色',
    'config option name calendar_first_day_of_week' => '每周的第一天',
    'config option name check_email_unique' => '邮件地址必须是唯一的',
    'config option name remember_login_lifetime' => '保持登录状态的秒数',
    'config option name installation_root' => 'Web站点的路径',
    'config option name installation_welcome_logo' => '登录页面的Logo图标',
    'config option name installation_welcome_text' => '登录页面上的文字',
    'config option name installation_base_language' => '基础语言(也用于登录页面)',
    'config option name dashboard action index' => '概览',
    'config option name dashboard action my_projects' => '我的项目',
    'config option name dashboard action my_tasks' => '我的任务',
    'config option name dashboard action my_projects_by_name' => '我的项目 - 按名称排序',
    'config option name dashboard action my_projects_by_priority' => '我的项目 - 按优先级排序',
    'config option name dashboard action my_projects_by_milestone' => '我的项目 - 按里程碑排序',
    'config option name dashboard action my_tasks_by_name' => '我的任务 - 按名称排序',
    'config option name dashboard action my_tasks_by_priority' => '我的任务 - 按优先级排序',
    'config option name dashboard action my_tasks_by_milestone' => '我的任务 - 按里程碑排序',
    'config option name dashboard action contacts' => '联系人',
    'config option name dashboard action search_contacts' => '搜索联系人',
    
    // LDAP authentication support
    'config option name ldap_domain' => 'LDAP 域名',
    'config option desc ldap_domain' => '活动目录域名',
    'config option name ldap_host' => 'LDAP 主机',
    'config option desc ldap_host' => '活动目录主机名或者IP地址',
    'secure ldap connection no' => '否',
    'secure ldap connection tls' => '是，使用TLS',
    'config option name ldap_secure_connection' => '使用安全LDAP连接',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => '使用升级包在线检查',
    'config option desc upgrade_check_enabled' => '如果选 \'是\' 系统将每天检查是否ProjectPier有可以下载的新版本发布',
    'config option name logout_redirect_page' => '退出页面重定向页面',
    'config option desc logout_redirect_page' => '配置当用户退出系统后，被重定向的跳转页面。使用默认字符串变更到默认配置',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange兼容模式',
    'config option desc exchange_compatible' => '如果您使用的是Microsoft Exchange 服务器，设置这个选项为是， 来避免一些已知错误。',
    'config option name mail_transport' => '邮件发送',
    'config option desc mail_transport' => '使用默认的PHP配置来发送邮件，或者指定一个 SMTP服务器',
    'config option name mail_from' => '邮件发件人: 地址',
    'config option name mail_use_reply_to' => '用于回复: 给发件人',
    'config option name smtp_server' => 'SMTP 服务器',
    'config option name smtp_port' => 'SMTP 端口',
    'config option name smtp_authenticate' => '使用SMTP认证',
    'config option name smtp_username' => 'SMTP 用户名',
    'config option name smtp_password' => 'SMTP 密码',
    'config option name smtp_secure_connection' => '使用安全SMTP连接',
    
    'config option name per_project_activity_logs' => '项目前期活动记录',
    'config option name categories_per_page' => '每页分类的数量',
    
    'config option name character_set' => '使用的字符集',
    'config option name collation' => '字符集排序',
    
    'config option name session_lifetime' => '会话剩余时间',
    'config option name default_controller' => '默认主页',
    'config option name default_action' => '默认次页',
    
    'config option name logs_show_icons' => '在应用记录中显示图标',
    'config option name default_private' => '私有选项为默认设置',
    'config option name send_notification_default' => '发送通知的默认设置',
    'config option name enable_efqm' => '启用EFQM',
    'config option name login_show_options' => '显示登录页选项',
    'config option desc login_show_options' => '如果选是，语言与主题会按相关选项显示',
    'config option name display_application_logs' => '显示应用程序日志',
    'config option desc display_application_logs' => '如果否，日志仍然被记录但不再显示',
    'config option name dashboard_logs_count' => '应用日志最大显示行数',
    'config option desc dashboard_logs_count' => '显示于仪表盘的日志条数',
    
    // Authentication
    'config option name authdb server' => '数据库服务器',
    'config option desc authdb server' => '用于身份校验数据库服务器的IP地址或域名，可以包含端口',
    'config option name authdb username' => '数据库用户名',
    'config option desc authdb username' => '访问数据库的用户名',
    'config option name authdb password' => '数据库密码',
    'config option desc authdb password' => '上述用户对应的密码',
    'config option name authdb database' => '数据库名',
    'config option desc authdb database' => '数据库服务器中的数据库名',
    'config option name authdb sql' => '查询SQL',
    'config option desc authdb sql' => '该SQL用于检索出一条包含用户信息的数据。返回的数据中至少要返回一个字段：email。用户名/密码以占位符 $username/$password 表示。',
    
    'config option name parking space reservation url' => '泊车位的URL',
    'config option desc parking space reservation url' => '填写泊车位预定网站的完整地址',
    
    'config option name map url' => '显示地图的URL',
    'config option desc map url' => '用于显示联系人或公司所在位置的url。位置详情以 $location 为占位符',
    'config option name route url' => '显示路线的URL',
    'config option desc route url' => '用于显示当前用户或联系人到某个联系人或公司所在地的URL。占位符 $from/$to。',
    
); // array

?>