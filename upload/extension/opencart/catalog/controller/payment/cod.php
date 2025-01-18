<?php
namespace Opencart\Catalog\Controller\Extension\Opencart\Payment;
class Cod extends \Opencart\System\Engine\Controller {
	public function index(): string {
		$this->load->language('extension/opencart/payment/cod');

		$data['language'] = $this->config->get('config_language');
     //   $data['messageOrder'] =  $this->session->data['message_order'];
		return $this->load->view('extension/opencart/payment/cod', $data);
	}

	public function confirm(): void {
		$this->load->language('extension/opencart/payment/cod');
		$text_message = $this->session->data['message_order'];
		$json = [];

		if (!isset($this->session->data['order_id'])) {
			$json['error'] = $this->language->get('error_order');
		}

		if (!isset($this->session->data['payment_method']) || $this->session->data['payment_method'] != 'cod') {
			$json['error'] = $this->language->get('error_payment_method');
		}

		if (!$json) {
			$this->load->model('checkout/order');

			$this->model_checkout_order->addHistory($this->session->data['order_id'], $this->config->get('payment_cod_order_status_id'));

			$json['redirect'] = $this->url->link('checkout/success', 'language=' . $this->config->get('config_language'), true);
			// $json['redirect'] =   $text_message;
			// if (isset($this->session->data['order_id'])) {
			// 	$this->cart->clear();
				
			// 	unset($this->session->data['message_order']);
			// 	unset($this->session->data['order_id']);
			// 	unset($this->session->data['payment_address']);
			// 	unset($this->session->data['payment_method']);
			// 	unset($this->session->data['payment_methods']);
			// 	unset($this->session->data['shipping_address']);
			// 	unset($this->session->data['shipping_method']);
			// 	unset($this->session->data['shipping_methods']);
			// 	unset($this->session->data['comment']);
			// 	unset($this->session->data['coupon']);
			// 	unset($this->session->data['reward']);
			// 	unset($this->session->data['voucher']);
			// 	unset($this->session->data['vouchers']);
			// }
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
