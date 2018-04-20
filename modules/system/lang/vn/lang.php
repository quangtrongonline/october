<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Getting back to basics'
    ],
    'locale' => [
        'be' => 'Беларуская',
        'bg' => 'Български',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'kr' => '한국어',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polskie',
        'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)',
        'ro' => 'Română',
        'ru' => 'Русский',
        'fi' => 'Suomi',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'tr' => 'Türkçe',
        'uk' => 'Українська мова',
        'vn' => 'Tiếng việt',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文'
    ],
    'directory' => [
        'create_fail' => 'Không thể tạo danh mục: :name'
    ],
    'file' => [
        'create_fail' => 'Không thể tạo file: :name'
    ],
    'combiner' => [
        'not_found' => "Không tìm thấy combiner file ':name'."
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
        'categories' => [
            'cms' => 'CMS',
            'misc' => 'Misc',
            'logs' => 'Logs',
            'mail' => 'Mail',
            'shop' => 'Shop',
            'team' => 'Team',
            'users' => 'Users',
            'system' => 'System',
            'social' => 'Social',
            'backend' => 'Backend',
            'events' => 'Events',
            'customers' => 'Customers',
            'my_settings' => 'Cài đặt của tôi',
            'notifications' => 'Thông báo'
        ]
    ],
    'theme' => [
        'label' => 'Theme',
        'unnamed' => 'Theme chưa được đặt tên',
        'name' => [
            'label' => 'Tên theme',
            'help' => 'Tên của theme không được trùng lặp. Ví dụ RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Cài đặt themes',
        'search' => 'Tìm kiếm theme để cài đặt...',
        'installed' => 'Các theme đã cài đặt',
        'no_themes' => 'Không có theme nào được cài đặt từ chợ theme.',
        'recommended' => 'Được khuyến khích cài đặt',
        'remove_confirm' => 'Bạn có chắc chắn muốn xóa theme này?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Plugin chưa được đặt tên',
        'name' => [
            'label' => 'Tên plugin',
            'help' => 'Tên của plugin không được trùng lặp. For example, RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Quản lý các plugin',
        'enable_or_disable' => 'Bật hoặc tắt',
        'enable_or_disable_title' => 'Bật hoặc tắt plugin',
        'install' => 'Cài đặt plugin',
        'install_products' => 'Các sản phẩm để cài đặt',
        'search' => 'Tìm kiếm plugin để cài đặt...',
        'installed' => 'Các plugin đã cài đặt',
        'no_plugins' => 'Không có plugin nào được cài đặt từ chợ plugin',
        'recommended' => 'Được khuyến khích cài đặt',
        'remove' => 'Xóa',
        'refresh' => 'Làm mới',
        'disabled_label' => 'Đã tắt',
        'disabled_help' => 'Các plugin đã tắt và không được sử dụng bới ứng dụng',
        'frozen_label' => 'Tắt cập nhật',
        'frozen_help' => 'Những plugin tắt cập nhật sẽ không được sử lý cập nhật tự động.',
        'selected_amount' => 'Số plugin đã được chọn: :amount',
        'remove_confirm' => 'Xác nhận xóa plugin này?',
        'remove_success' => 'Đã xóa các plugin ra khỏi hệ thống.',
        'refresh_confirm' => 'Xác nhận?',
        'refresh_success' => 'Đã làm mới các plugin.',
        'disable_confirm' => 'Xác nhận tắt?',
        'disable_success' => 'Đã tắt các plugin.',
        'enable_success' => 'Đã bật các plugin.',
        'unknown_plugin' => 'Đã xóa các file của plugin ra khỏi hệ thống.'
    ],
    'project' => [
        'name' => 'Project',
        'owner_label' => 'Người sở hữu',
        'attach' => 'Chèn Project',
        'detach' => 'Gỡ bỏ Project',
        'none' => 'Trống',
        'id' => [
            'label' => 'Project ID',
            'help' => 'Cách để xem Project ID',
            'missing' => 'Điền vào Project ID để sử dụng.'
        ],
        'detach_confirm' => 'Xác nhận gỡ project?',
        'unbind_success' => 'Project đã được gỡ ra.'
    ],
    'settings' => [
        'menu_label' => 'Settings',
        'not_found' => 'Không tìm thấy các cài đặt được chỉ định.',
        'missing_model' => 'Không có  Model cho trang cài đặt.',
        'update_success' => 'Cài đặt :name đã được cài đặt',
        'return' => 'Trở lại trang cài đặt',
        'search' => 'Tìm kiếm'
    ],
    'mail' => [
        'log_file' => 'Log file',
        'menu_label' => 'Cấu hình mail',
        'menu_description' => 'Quản lý các cấu hình mail.',
        'general' => 'Cấu hình chung',
        'method' => 'Phương thức gửi mail',
        'sender_name' => 'Tên người gửi',
        'sender_email' => 'Email người gửi',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'Địa chỉ SMTP',
        'smtp_authorization' => 'Yêu cầu cấp quyền',
        'smtp_authorization_comment' => 'Check box này nếu SMTP sever của bạn yêu cầu cấp quyền truy cập(requires authorization).',
        'smtp_username' => 'Tên đăng nhập',
        'smtp_password' => 'Mật khẩu',
        'smtp_port' => 'SMTP port',
        'smtp_ssl' => 'SSL connection required',
        'smtp_encryption' => 'SMTP encryption protocol',
        'smtp_encryption_none' => 'No encryption',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail path',
        'sendmail_path_comment' => 'Please specify the path of the sendmail program.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun domain',
        'mailgun_domain_comment' => 'Please specify the Mailgun domain name.',
        'mailgun_secret' => 'Mailgun secret',
        'mailgun_secret_comment' => 'Enter your Mailgun API key.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill secret',
        'mandrill_secret_comment' => 'Enter your Mandrill API key.',
        'ses' => 'SES',
        'ses_key' => 'SES key',
        'ses_key_comment' => 'Enter your SES API key',
        'ses_secret' => 'SES secret',
        'ses_secret_comment' => 'Enter your SES API secret key',
        'ses_region' => 'SES region',
        'ses_region_comment' => 'Enter your SES region (e.g. us-east-1)',
        'drivers_hint_header' => 'Drivers not installed',
        'drivers_hint_content' => 'This mail method requires the plugin ":plugin" be installed before you can send mail.'
    ],
    'mail_templates' => [
        'menu_label' => 'Các mẫu mail',
        'menu_description' => 'Quản lý các mẫu mail sẽ được gửi cho user và administrators.',
        'new_template' => 'Thêm mẫu mới',
        'new_layout' => 'Thêm layout',
        'new_partial' => 'Thêm Partial',
        'template' => 'Giao diện mẫu',
        'templates' => 'Các giao diện mẫu',
        'partial' => 'Partial',
        'partials' => 'Partials',
        'menu_layouts_label' => 'Mail Layouts',
        'menu_partials_label' => 'Mail Partials',
        'layout' => 'Layout',
        'layouts' => 'Layouts',
        'no_layout' => '-- No layout --',
        'name' => 'Tên',
        'name_comment' => 'Tên của giao diễn mẫu không được trùng nhau.',
        'code' => 'Code',
        'code_comment' => 'Nhập một mã không được trùng với các mẫu giao diện khác',
        'subject' => 'Tiêu đề mail',
        'subject_comment' => 'Tiêu đề của mail',
        'description' => 'Mô tả',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Văn bản thô',
        'test_send' => 'Gửi mail test',
        'test_success' => 'Đã gửi mail test.',
        'test_confirm' => 'Gửi mail test đến :email. Tiếp tục?',
        'creating' => 'Đang tạo mẫu...',
        'creating_layout' => 'Đang tạo Layout...',
        'saving' => 'Đang lưu mẫu...',
        'saving_layout' => 'Đang lưu Layout...',
        'delete_confirm' => 'Xác nhận xóa template này?',
        'delete_layout_confirm' => 'Xác nhận xóa layout này?',
        'deleting' => 'Đang xóa mẫu...',
        'deleting_layout' => 'Đang xóa Layout...',
        'sending' => 'Đang gửi mail test...',
        'return' => 'Quay lại trang danh sách mail mẫu'
    ],
    'mail_brand' => [
        'menu_label' => 'Mail branding',
        'menu_description' => 'Chỉnh sửa màu sắc, giao diện của mẫu mail.',
        'page_title' => 'Tùy chỉnh giao diện của mẫu mail',
        'sample_template' => [
            'heading' => 'Heading',
            'paragraph' => 'This is a paragraph filled with Lorem Ipsum and a link. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
            'table' => [
                'item' => 'Item',
                'description' => 'Description',
                'price' => 'Price',
                'centered' => 'Centered',
                'right_aligned' => 'Right-Aligned'
            ],
            'buttons' => [
                'primary' => 'Primary button',
                'positive' => 'Positive button',
                'negative' => 'Negative button',
            ],
            'panel' => 'How awesome is this panel?',
            'more' => 'Some more text',
            'promotion' => 'Coupon code: OCTOBER',
            'subcopy' => 'This is the subcopy of the email',
            'thanks' => 'Thanks'
        ],
        'fields' => [
            '_section_background' => 'Background',
            'body_bg' => 'Body background',
            'content_bg' => 'Content background',
            'content_inner_bg' => 'Inner content background',
            '_section_buttons' => 'Buttons',
            'button_text_color' => 'Button text color',
            'button_primary_bg' => 'Primary button background',
            'button_positive_bg' => 'Positive button background',
            'button_negative_bg' => 'Negative button background',
            '_section_type' => 'Typography',
            'header_color' => 'Header color',
            'heading_color' => 'Headings color',
            'text_color' => 'Text color',
            'link_color' => 'Link color',
            'footer_color' => 'Footer color',
            '_section_borders' => 'Borders',
            'body_border_color' => 'Body border color',
            'subcopy_border_color' => 'Subcopy border color',
            'table_border_color' => 'Table border color',
            '_section_components' => 'Components',
            'panel_bg' => 'Panel background',
            'promotion_bg' => 'Promotion background',
            'promotion_border_color' => 'Promotion border color',
        ]
    ],
    'install' => [
        'project_label' => 'Chèn Project',
        'plugin_label' => 'Cài đặt Plugin',
        'theme_label' => 'Cài đặt Theme',
        'missing_plugin_name' => 'Điền vào tên Plugin để cài đặt.',
        'missing_theme_name' => 'Điền vào tên Theme để cài đặt.',
        'install_completing' => 'Hoàn tất cài đặt',
        'install_success' => 'Plugin đã được cài thành công'
    ],
    'updates' => [
        'title' => 'Quản lý các cập nhật',
        'name' => 'Cập nhật hệ thống',
        'menu_label' => 'Những cập nhật & Plugins',
        'menu_description' => 'Cập nhật hệ thống, quản lý và cài đặt plugins, themes.',
        'return_link' => 'Quay lại trang cập nhật hệ thống',
        'check_label' => 'Kiểm tra cập nhật',
        'retry_label' => 'Thử lại',
        'plugin_name' => 'Tên Plugin',
        'plugin_code' => 'Code',
        'plugin_description' => 'Mô tả',
        'plugin_version' => 'Phiên bản',
        'plugin_author' => 'Tác giả',
        'plugin_not_found' => 'Không tìm thấy Plugin',
        'core_current_build' => 'Current build',
        'core_build' => 'Build :build',
        'core_build_help' => 'Phiên bản build gần nhất.',
        'core_downloading' => 'Đang tải file ứng dụng',
        'core_extracting' => 'Đang giải nén',
        'core_set_build' => 'Cài đặt build number',
        'plugins' => 'Plugins',
        'themes' => 'Themes',
        'disabled' => 'Đã tắt',
        'plugin_downloading' => 'Đang tải plugin: :name',
        'plugin_extracting' => 'Đang giải nén plugin: :name',
        'plugin_version_none' => 'Tạo mới plugin',
        'plugin_current_version' => 'Phiên bản hiện tại version',
        'theme_new_install' => 'Cài đặt theme mới.',
        'theme_downloading' => 'Đang tải theme: :name',
        'theme_extracting' => 'Đang giải nén theme: :name',
        'update_label' => 'cập nhật hệ thống',
        'update_completing' => 'Cập nhật hoàn tất',
        'update_loading' => 'Đang kiểm tra các cập nhật có sẵn...',
        'update_success' => 'Cập nhật hoàn tất',
        'update_failed_label' => 'Lỗi cập nhật',
        'force_label' => 'Bắt buộc cập nhật',
        'found' => [
            'label' => 'Có cập nhật mới!',
            'help' => 'Bấm cập nhật hệ thống để bắt đầu cập nhật.'
        ],
        'none' => [
            'label' => 'Không có cập nhật',
            'help' => 'Không tìm thấy bản cập nhật nào.'
        ],
        'important_action' => [
            'empty' => 'Chọn hành động',
            'confirm' => 'Xác nhận cập nhật',
            'skip' => 'Bỏ qua bản cập nhật này (Chỉ lần này)',
            'ignore' => 'Bỏ qua bản cập nhật này (luôn luôn bỏ qua)'
        ],
        'important_action_required' => 'Hành động này là bắt buộc',
        'important_view_guide' => 'Xem hướng dẫn nâng cấp',
        'important_view_release_notes' => 'Xem ghi chú',
        'important_alert_text' => 'Một số cập nhật cần phải chú ý.',
        'details_title' => 'Chi tiết Plugin',
        'details_view_homepage' => 'Đến trang chủ',
        'details_readme' => 'Tài liệu hướng dẫn',
        'details_readme_missing' => 'Không có tài liệu được cung cấp.',
        'details_changelog' => 'Các lần thay đổi',
        'details_changelog_missing' => 'Không có bản ghi các lần thay đổi.',
        'details_upgrades' => 'Hướng dẫn nâng cấp',
        'details_upgrades_missing' => 'Không có hướng dẫn nâng cấp nào được cung cấp.',
        'details_licence' => 'Giấy phép',
        'details_licence_missing' => 'Không có giấy phép nào được cung cấp.',
        'details_current_version' => 'Phiên bản hiện tại',
        'details_author' => 'Tác giả'
    ],
    'server' => [
        'connect_error' => 'Lỗi kết nối đến server.',
        'response_not_found' => 'Không tìm thấy máy chủ cập nhật.',
        'response_invalid' => 'Phản hồi không hợp lệ từ máy chủ.',
        'response_empty' => 'Phản hồi trống từ máy chủ.',
        'file_error' => 'Lỗi server không thể gửi về các package.',
        'file_corrupt' => 'File trên server bị hỏng.'
    ],
    'behavior' => [
        'missing_property' => 'Class :class cần phải khai báo thuộc tính $:property được sử dụng bởi :behavior behavior.'
    ],
    'config' => [
        'not_found' => 'Không tìm thấy file cấu hình :file được khai báo cho :location.',
        'required' => "Cấu hình được sử dụng cho :location cần phải có giá trị ':property'."
    ],
    'zip' => [
        'extract_failed' => "Không thể trích xuất file ':file'."
    ],
    'event_log' => [
        'hint' => 'Bản ghi các lỗi có thể sảy ra trong ứng dụng, ví dụ exceptions và thông tin debug.',
        'menu_label' => 'Bản ghi các sự kiện',
        'menu_description' => 'Xem nhật ký hệ thống với thông tin thời gian cụ thể.',
        'empty_link' => 'Xóa hết các bản ghi',
        'empty_loading' => 'Đang xóa các bản ghi...',
        'empty_success' => 'Đã xóa các bản ghi sự kiện',
        'return_link' => 'Quay lại trang các bản ghi sự kiện',
        'id' => 'ID',
        'id_label' => 'Event ID',
        'created_at' => 'Ngày giờ',
        'message' => 'Nội dung',
        'level' => 'Cấp độ',
        'preview_title' => 'Event'
    ],
    'request_log' => [
        'hint' => 'Bản ghi các request lỗi của trình duyệt. Ví dụ, nếu có khách truy cập vào một trang nội dung mà hệ thống không tìm thấy trang đó, một bản ghi sẽ được tạo ra với status code 404.',
        'menu_label' => 'Bản ghi các Request',
        'menu_description' => 'Xem các request lỗi hoặc bị chuyển hướng, ví dụ như Page not found (404).',
        'empty_link' => 'Xóa hết các request log',
        'empty_loading' => 'Đang xóa request log...',
        'empty_success' => 'Đã xóa hết request log',
        'return_link' => 'Return to request log',
        'id' => 'ID',
        'id_label' => 'Log ID',
        'count' => 'Counter',
        'referer' => 'Referers',
        'url' => 'URL',
        'status_code' => 'Status',
        'preview_title' => 'Request'
    ],
    'permissions' => [
        'name' => 'Hệ thống',
        'manage_system_settings' => 'Quản lý các cài đặt của hệ thống',
        'manage_software_updates' => 'Quản lý các cập nhật của hệ thống',
        'access_logs' => 'Xem các bản ghi hệ thống',
        'manage_mail_templates' => 'Quản lý các mẫu mail',
        'manage_mail_settings' => 'Quản lý các cài đặt mail',
        'manage_other_administrators' => 'Quản lý các administrator khác',
        'manage_preferences' => 'Cá nhân hóa trang quản trị',
        'manage_editor' => 'Cá nhân hóa trình biên tập(code editor)',
        'view_the_dashboard' => 'Xem bảng điều khiển',
        'manage_branding' => 'Tùy chỉnh trang quản trị'
    ],
    'log' => [
        'menu_label' => 'Log settings',
        'menu_description' => 'Cấu hình những mục sẽ được ghi log.',
        'default_tab' => 'Logging',
        'log_events' => 'Ghi các sự kiện của hệ thống',
        'log_events_comment' => 'Lưu các sự kiện của hệ thống vào database dựa trên file log',
        'log_requests' => 'Bản ghi các lỗi request',
        'log_requests_comment' => 'Các lỗi request của trình duyệt, ví dụ 404 errors.',
        'log_theme' => 'Bản ghi các thay đổi của theme',
        'log_theme_comment' => 'Khi thay đổi theme thông qua giao diện quản trị.',
    ],
    'media' => [
        'invalid_path' => "Đường dẫn không hợp lệ: ':path'.",
        'folder_size_items' => 'item(s)',
    ],
];
