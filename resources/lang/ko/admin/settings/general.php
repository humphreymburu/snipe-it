<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory 도메인',
    'ad_domain_help'			=> '이것은 보통은 당신의 이메일 주소와 같지만, 항상 같지는 않습니다.',
    'admin_cc_email'            => '참조 이메일',
    'admin_cc_email_help'       => '사용자에게 보낸 반입/반출 이메일 사본을 추가 이메일 계정으로 보내려면, 여기에 입력하세요. 그렇지 않으면 이 필드를 비워 두세요.',
    'is_ad'				        => '이것은 액티브 디렉토리 서버입니다.',
	'alert_email'				=> '알림 전송',
	'alerts_enabled'			=> '알림 사용',
	'alert_interval'			=> '(일자) 최대값 만료 알림',
	'alert_inv_threshold'		=> '재고 알림 최대값',
	'asset_ids'					=> '자산 ID',
	'audit_interval'            => '감사 간격',
    'audit_interval_help'       => '자산을 정기적으로 물리적인 감사를 해야하는 경우, 간격을 개월 단위로 입력하십시오.',
	'audit_warning_days'        => '감사 경고 임계값',
    'audit_warning_days_help'   => '자산 회계 감사가 예정되어 있을 때 몇 일 전에 경고할까요?',
	'auto_increment_assets'		=> '자동-증가 자산 ID 생성',
	'auto_increment_prefix'		=> '접두사 (부가적)',
	'auto_incrementing_help'    => '이 것을 설정하려면 자동-증가 자산 ID 사용을 하세요.',
	'backups'					=> '예비품',
	'barcode_settings'			=> '바코드 설정',
    'confirm_purge'			    => '삭제 확인',
    'confirm_purge_help'		=> '당신의 삭제된 기록들을 지우려면 다음 상자 안에 "DELETE" 를 입력하세요. 이 동작은 취소할 수 없습니다.',
	'custom_css'				=> '사용자 지정 CSS',
	'custom_css_help'			=> '사용하려는 사용자 CSS를 입력하세요. &lt;style&gt;&lt;/style&gt; 태그들은 넣지 마세요.',
    'custom_forgot_pass_url'	=> '사용자정의 암호 재설정 URL',
    'custom_forgot_pass_url_help'	=> '이것은 로그인 화면에 내장된 잊어버린 비밀번호 URL을 변경하여, 내부 또는 호스트 LDAP 암호 재설정 기능으로 사람들을 안내할 때 유용합니다. 로컬 사용자가 잊어버린 비밀번호 기능을 효과적으로 비활성화합니다.',
    'dashboard_message'			=> '대시보드 메시지',
    'dashboard_message_help'	=> '이 문구는 대시보드 조회 권한이 있는 모든 사용자 대상으로 대시보드에 표시됩니다.',
	'default_currency'  		=> '기본 통화',
	'default_eula_text'			=> '기본 사용권 계약',
  'default_language'			=> '기본 언어',
	'default_eula_help_text'	=> '또한 특정 자산 분류에는 맞춤형 사용권 계약들과 연결을 해야 합니다.',
    'display_asset_name'        => '자산 명 표시',
    'display_checkout_date'     => '반출 일자 표시',
    'display_eol'               => '테이블 보기에서 폐기일 표시',
    'display_qr'                => 'Qr 코드 표시',
	'display_alt_barcode'		=> '1 D 바코드 표시',
	'barcode_type'				=> '2D 바코드 형식',
	'alt_barcode_type'			=> '1D 바코드 형식',
    'eula_settings'				=> '최종 사용 계약 설정',
    'eula_markdown'				=> '이 최종 사용 계약은 <a href="https://help.github.com/articles/github-flavored-markdown/">GFM을 따른다</a>.',
    'footer_text'               => '추가 꼬리말',
    'footer_text_help'          => '이 글은 오른쪽 꼬리말에 보여집니다. 링크는 <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>를 참조하시면 됩니다. 줄 바꿈 머리글, 이미지 등은 보여지지 않습니다.',
    'general_settings'			=> '일반 설정',
	'generate_backup'			=> '백업 생성',
    'header_color'              => '머릿말 색상',
    'info'                      => '이 설정들은 설치본의 특정 분야를 설정하는 것입니다.',
    'laravel'                   => 'Laravel 버전',
    'ldap_enabled'              => 'LDAP 활성',
    'ldap_integration'          => 'LDAP 연동',
    'ldap_settings'             => 'LDAP 설정',
    'ldap_login_test_help'      => '위에서 지정한 기본 DN의 유효한 LDAP 사용자 이름 및 비밀번호를 입력하여 LDAP 로그인이 올바르게 구성되었는지 테스트하십시오. 반드시 업데이트 된 LDAP 설정을 먼저 저장해야합니다.',
    'ldap_login_sync_help'      => '이것은 LDAP가 올바르게 동기화 될 수 있는지 테스트합니다. LDAP 인증 질의어가 올바르지 않으면 사용자가 여전히 로그인하지 못할 수 있습니다. 반드시 업데이트 된 LDAP 설정을 먼저 저장해야합니다.',
    'ldap_server'               => 'LDAP 서버',
    'ldap_server_help'          => '이것은 (복호화또는 TLS 용) ldap로 시작합니다:// 또는 (SSL용) ldaps://',
	'ldap_server_cert'			=> 'LDAP SSL 인증서 확인',
	'ldap_server_cert_ignore'	=> '유효하지 않은 SSL 인증서 허용',
	'ldap_server_cert_help'		=> '자체 서명한 SSL 인증서를 사용하고, 유효하지 않은 SSL 인증서 사용을 승인하고자 하는 경우, 이 확인 상자를 선택하십시오.',
    'ldap_tls'                  => 'TLS 사용',
    'ldap_tls_help'             => '이것은 LDAP 서버에서 STARTTLS를 실행하는 경우에만 검사됩니다. ',
    'ldap_uname'                => 'LDAP 연결용 사용자명',
    'ldap_pword'                => 'LDAP 연결용 비밀번호',
    'ldap_basedn'               => 'Base BIND DN',
    'ldap_filter'               => 'LDAP 필터',
    'ldap_pw_sync'              => 'LDAP 암호 동기화',
    'ldap_pw_sync_help'         => '로컬 암호와 PDAP 암호를 동기화 하지 않으려면 이 박스의 체크를 풀어주세요. 이것을 해제하면 당신의 LDAP 서버에 여러 원인으로 접속할 수 없다면 사용자들도 로그인 할 수 없게 됩니다.',
    'ldap_username_field'       => '사용자명 항목',
    'ldap_lname_field'          => '성:',
    'ldap_fname_field'          => 'LDAP 이름',
    'ldap_auth_filter_query'    => 'LDAP 인증 요청',
    'ldap_version'              => 'LDAP 버전',
    'ldap_active_flag'          => 'LDAP 활성 플래그',
    'ldap_emp_num'              => 'LDAP 피고용인 번호',
    'ldap_email'                => 'LDAP 이메일',
    'license'                  => '소프트웨어 라이센스',
    'load_remote_text'          => '원격 스크립트',
    'load_remote_help_text'		=> '이 Snipe-IT 설치는 인터넷에서 스크립트들을 읽어 올 수 있습니다.',
    'login_note'                => '로그인 참고',
    'login_note_help'           => '선택적으로 분실되거나 도난당한 장치를 찾은 사람들을 돕기 위한, 로그인 화면에 몇 문장을 포함하십시오. 이 항목에는 <a href="https://help.github.com/articles/github-flavored-markdown/"> Github flavored markdown </a>를 사용할 수 있습니다.',
    'login_remote_user_text'    => '원격 사용자 로그인 옵션',
    'login_remote_user_enabled_text' => '원격 사용자 헤더로 로그인 활성화',
    'login_remote_user_enabled_help' => '이 옵션은 "공용 게이트웨이 인터페이스 (rfc3875)" 를 따르는 REMOTE_USER 헤더를 통한 인증을 활성화 합니다',
    'login_common_disabled_text' => '다른 인증 메커니즘 비활성화',
    'login_common_disabled_help' => '이 옵션은 다른 인증 메커니즘을 비활성화 합니다. REMOTE_USER 로그인이 이미 작동하고 있다면 이 옵션을 활성화 하세요.',
    'login_remote_user_custom_logout_url_text' => '사용자 정의 로그아웃 URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'logo'                    	=> '로고',
    'full_multiple_companies_support_help_text' => '자신이 속한 공급자 자산에 공급자를 할당하는 것을 제한하는 사용자들 (관리자 포함)',
    'full_multiple_companies_support_text' => '전체 다중 공급자들 지원',
    'show_in_model_list'   => '모델 드롭다운에 표시',
    'optional'					=> '선택 사항',
    'per_page'                  => '페이지 당 결과',
    'php'                       => 'PHP 버전',
    'php_gd_info'               => 'QR 코드를 보려면 php-gd를 설치하셔야 합니다. 설치 설명서를 참고하세요.',
    'php_gd_warning'            => 'PHP 이미지 처리 및 GD 플러그인이 설치되어 있지 않습니다.',
    'pwd_secure_complexity'     => '비밀번호 복잡성',
    'pwd_secure_complexity_help' => '어떤 비밀번호 복잡성 규칙을 적용할지 선택하십시오.',
    'pwd_secure_min'            => '비밀번호 최소 글자수',
    'pwd_secure_min_help'       => '최소 허용 값은 5',
    'pwd_secure_uncommon'       => '자주쓰이는 비밀번호 방지',
    'pwd_secure_uncommon_help'  => '이것은 사용자가 위변조로 보고된 상위 10,000 개의 비밀번호를 기반해 일반적으로 사용되는 비밀번호를 허용하지 않게 합니다.',
    'qr_help'                   => '이 것을 설정하려면 먼저 QR 코드 사용하기를 하세요',
    'qr_text'                   => 'QR 코드 문구',
    'setting'                   => '설정',
    'settings'                  => '설정',
    'show_alerts_in_menu'       => '상단 메뉴에 경고 표시',
    'show_archived_in_list'     => '보관된 자산',
    'show_archived_in_list_text'     => '"모든 자산" 목족에 보관된 자산 표시',
    'show_images_in_email'     => '이메일에 이미지 표시',
    'show_images_in_email_help'   => 'Snipe-IT 설치가 VPN 또는 폐쇄 형 네트워크 하에 있고 네트워크 외부 사용자가 이 설치에서 제공된 이미지를 이메일에 불러올수 없는 경우 이 상자의 선택을 해제하세요.',
    'site_name'                 => '사이트 명',
    'slack_botname'             => 'Slack Bot 명',
    'slack_channel'             => 'Slack 채널',
    'slack_endpoint'            => 'Slack 종료점',
    'slack_integration'         => 'Slack 설정',
    'slack_integration_help'    => '느슨한 통합은 부가기능이지만, 사용하고 싶다면 종료점과 채널이 필요합니다. 느슨한 통합을 설정하려면, 우선  Slack 장부에<a href=":slack_link" target="_new">webhook 저장소를 생성해야 합니다</a>.',
    'slack_integration_help_button'    => '슬랙 정보를 저장하면, 테스트 버튼이 나타납니다.',
    'slack_test_help'           => '슬랙 통합이 올바르게 구성되었는지 테스트하십시오. 반드시 먼저 갱신된 지연 슬랙 설정을 저장해야합니다.',
    'snipe_version'  			=> 'Snipe-IT 버전',
    'support_footer'            => '꼬리말 링크 지원',
    'support_footer_help'       => 'Snipe-IT 지원 정보 및 사용자 매뉴얼 보기 권한 설정',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => '시스템 정보',
    'update'                    => '갱신 설정',
    'value'                     => '가치',
    'brand'                     => '브랜딩',
    'about_settings_title'      => '설정에 관해',
    'about_settings_text'       => '이 설정들은 설치본의 특정 분야를 설정하는 것입니다.',
    'labels_per_page'           => '페이지 당 꼬리표',
    'label_dimensions'          => '꼬리표 크기(인치)',
    'next_auto_tag_base'        => '다음 자동 증가',
    'page_padding'              => '페이지 여백 (인치)',
    'privacy_policy_link'       => '개인정보 보호정책 링크',
    'privacy_policy'            => '개인정보 보호정책',
    'privacy_policy_link_help'  => '여기에 url이 포함되어 있으면, GDPR을 준수하는 개인정보 보호정책에 대한 링크가, 어플리케이션 최하단과 시스템에서 발송하는 모든 이메일에 포함됩니다. ',
    'purge'                     => '삭제된 기록들 지우기',
    'labels_display_bgutter'    => '꼬리표 아래쪽 가운데 여백',
    'labels_display_sgutter'    => '꼬리표 옆쪽 가운데 여백',
    'labels_fontsize'           => '꼬리표 글꼴 크기',
    'labels_pagewidth'          => '꼬리표 지 넓이',
    'labels_pageheight'         => '꼬리표 지 높이',
    'label_gutters'        => '꼬리표 여백(인치)',
    'page_dimensions'        => '꼬리표 면적(인치)',
    'label_fields'          => '꼬리표 가시 항목',
    'inches'        => '인치',
    'width_w'        => '넓이',
    'height_h'        => '높이',
    'show_url_in_emails'                => 'Snipe-IT에 이메일로 링크',
    'show_url_in_emails_help_text'      => '전자 메일 바닥 글에 Snipe-IT 설치를 다시 연결하지 않으려면이 상자를 선택 취소하십시오. 대부분의 사용자가 로그인하지 않는 경우 유용합니다.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => '최대 썸네일 높이',
    'thumbnail_max_h_help'   => '섬네일이 목록 보기에 표시될 수있는 최대 높이 (픽셀) 입니다. 최소 25, 최대 500.',
    'two_factor'        => '2단계 인증',
    'two_factor_secret'        => '2단계 코드',
    'two_factor_enrollment'        => '2단계 등록',
    'two_factor_enabled_text'        => '2중 활성화',
    'two_factor_reset'        => '2중 보안 재설정',
    'two_factor_reset_help'        => '이 기능은 강제로 사용자들을 구글 인증을 사용하여 각각의 장치에 다시 등록하게 합니다. 이 기능은 현재 등록한 장치들이 분실이나 도난 당했다면 유용할 것입니다. ',
    'two_factor_reset_success'          => '2중 장치 재설정이 되었습니다',
    'two_factor_reset_error'          => '2중 장치 재설정이 실패했습니다',
    'two_factor_enabled_warning'        => '2중 활성화가 현재 활성화되지 않다면 구글 인증으로 등록된 장치를 즉시 강제로 인증하게 할 것입니다. 당신은 하나가 현재 등록되지 않았다면 당신의 장치를 등록할 수 있어야 합니다.',
    'two_factor_enabled_help'        => '이 것은 구글 인증을 사용하는 2중 인증 기능을 동작시킵니다.',
    'two_factor_optional'        => '선택적 (허용 하는 경우 사용자가 활성화 하거나 비활성화할 수 있습니다)',
    'two_factor_required'        => '모든 사용자에게 필수',
    'two_factor_disabled'        => '비활성화',
    'two_factor_enter_code'	=> '2중 코드 입력',
    'two_factor_config_complete'	=> '코드 제출',
    'two_factor_enabled_edit_not_allowed' => '관리자가 이 설정의 수정을 허용하지 않았습니다.',
    'two_factor_enrollment_text'	=> "2중 인증은 필수입니다만, 당신의 장치는 아직 등록되지 않았습니다. 구글 인증 앱을 실행하고 등록할 장치 아래의 QR 코드를 스캔하세요. 당신의 장치가 등록됐다면, 아래 코드를 입력하세요",
    'require_accept_signature'      => '서명 필수',
    'require_accept_signature_help_text'      => '이 기능을 활성화하면 자산 수락시에 물리적 서명을 필수로 하게 됩니다.',
    'left'        => '왼쪽',
    'right'        => '오른쪽',
    'top'        => '위',
    'bottom'        => '아래',
    'vertical'        => '수직',
    'horizontal'        => '수평',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => '0 채움을 포함한, 자산 태그 길이',
);
