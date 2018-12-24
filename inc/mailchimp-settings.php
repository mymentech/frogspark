
<?php
/**
 * Generated by the WordPress Option Page generator
 * at http://jeremyhixon.com/wp-tools/option-page/
 */
class MailchimpAPIInfo {
	private $mailchimp_api_info_options;
	private $options = array();

	public function __construct() {
        add_action( 'admin_init', array( $this, 'set_mailchimp_data' ) );
        add_action( 'admin_menu', array( $this, 'mailchimp_api_info_add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'mailchimp_api_info_page_init' ) );
        add_action('wp_ajax_nopriv_mailchimp_connect', array($this, 'mailchimp_form_mailchimp_connect'));
        add_action('wp_ajax_mailchimp_connect', array($this, 'mailchimp_form_mailchimp_connect'));
	}

	public function mailchimp_api_info_add_plugin_page() {
		add_options_page(
			'Mailchimp API Info', // page_title
			'Mailchimp API Info', // menu_title
			'manage_options', // capability
			'mailchimp-api-info', // menu_slug
			array( $this, 'mailchimp_api_info_create_admin_page' ) // function
		);
	}

	public function mailchimp_api_info_create_admin_page() {
		$this->mailchimp_api_info_options = get_option( 'mailchimp_api_info_option_name' ); ?>

		<div class="wrap">
			<h2>Mailchimp API Info</h2>
			<p>Enter API info of your MailChimp account.</p>
			<?php settings_errors(); ?>

			<form method="post" action="options.php">
				<?php
					settings_fields( 'mailchimp_api_info_option_group' );
					do_settings_sections( 'mailchimp-api-info-admin' );
					submit_button();
				?>
			</form>
		</div>
	<?php }

	public function mailchimp_api_info_page_init() {
		register_setting(
			'mailchimp_api_info_option_group', // option_group
			'mailchimp_api_info_option_name', // option_name
			array( $this, 'mailchimp_api_info_sanitize' ) // sanitize_callback
		);

		add_settings_section(
			'mailchimp_api_info_setting_section', // id
			'Settings', // title
			array( $this, 'mailchimp_api_info_section_info' ), // callback
			'mailchimp-api-info-admin' // page
		);

		add_settings_field(
			'api_key_0', // id
			'API Key', // title
			array( $this, 'api_key_0_callback' ), // callback
			'mailchimp-api-info-admin', // page
			'mailchimp_api_info_setting_section' // section
		);

		add_settings_field(
			'list_id_1', // id
			'List ID', // title
			array( $this, 'list_id_1_callback' ), // callback
			'mailchimp-api-info-admin', // page
			'mailchimp_api_info_setting_section' // section
		);
	}

	public function mailchimp_api_info_sanitize($input) {
		$sanitary_values = array();
		if ( isset( $input['api_key_0'] ) ) {
			$sanitary_values['api_key_0'] = sanitize_text_field( $input['api_key_0'] );
		}

		if ( isset( $input['list_id_1'] ) ) {
			$sanitary_values['list_id_1'] = sanitize_text_field( $input['list_id_1'] );
		}

		return $sanitary_values;
	}

	public function mailchimp_api_info_section_info() {
		
	}

	public function api_key_0_callback() {
		printf(
			'<input class="regular-text" type="text" name="mailchimp_api_info_option_name[api_key_0]" id="api_key_0" value="%s">',
			isset( $this->mailchimp_api_info_options['api_key_0'] ) ? esc_attr( $this->mailchimp_api_info_options['api_key_0']) : ''
		);
	}

	public function list_id_1_callback() {
		printf(
			'<input class="regular-text" type="text" name="mailchimp_api_info_option_name[list_id_1]" id="list_id_1" value="%s">',
			isset( $this->mailchimp_api_info_options['list_id_1'] ) ? esc_attr( $this->mailchimp_api_info_options['list_id_1']) : ''
		);
	}

    public function mailchimp_form_mailchimp_connect() {
        if (check_ajax_referer('mailchimp_connect', 'smf_s')) {
            $data['firstname'] = 'N';
            $data['lastname']  = 'A';
            $data['phone']     = '';
            $data['email']     = strtolower($_POST['smf_email']);
            $data['status']    = 'subscribed';
            $response          = $this->syncMailchimp($data);
            echo $response;
            die();
        }
    }

    private function syncMailchimp($data) {
        $apiKey = $this->options['api_key'];
        $listId = $this->options['list_id'];

        $memberId   = md5(strtolower($data['email']));
        $dataCenter = substr($apiKey, strpos($apiKey, '-') + 1);
        $url        = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

        $json = json_encode([
            'email_address' => $data['email'],
            'status'        => $data['status'], // "subscribed","unsubscribed","cleaned","pending"
            'merge_fields'  => [
                'FNAME' => $data['firstname'],
                'LNAME' => $data['lastname'],
                'PHONE' => $data['phone']
            ]
        ]);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        $result   = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return $httpCode;
    }

    public function set_mailchimp_data(){
        $options = get_option( 'mailchimp_api_info_option_name' );
        $this->options['api_key'] = $options['api_key_0'];
        $this->options['list_id'] = $options['list_id_1'];
    }


}
if ( is_admin() ){
    $mailchimp_api_info = new MailchimpAPIInfo();
}