<?php

class CalcController extends \BaseController {

	public function sendCalc()
	{
		// if (Request::ajax())
		// {
			$input = ['name' => $_POST['name'], 'phone' => $_POST['phone']];

			$validator = Validator::make($input, Order::$rules);

			if ($validator->fails())
			{
			    return '<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Поле с именем или номером телефона заполнены неверно!</div>';
			}
			else
			{
				$it_outsourcing = [
					'computer' 		=> (isset($_POST['computer'])) ? $_POST['computer'] : 'no',
					'local-network' => (isset($_POST['local-network'])) ? $_POST['local-network'] : 'no',
					'internet' 		=> (isset($_POST['internet'])) ? $_POST['internet'] : 'no',
					'firewall' 		=> (isset($_POST['firewall'])) ? $_POST['firewall'] : 'no',
					'printer' 		=> (isset($_POST['printer'])) ? $_POST['printer'] : 'no',
					'file-server' 	=> (isset($_POST['file-server'])) ? $_POST['file-server'] : 'no',
					'domain-server' => (isset($_POST['domain-server'])) ? $_POST['domain-server'] : 'no',
					'mail-server' 	=> (isset($_POST['mail-server'])) ? $_POST['mail-server'] : 'no',
					'application-server' 	=> (isset($_POST['application-server'])) ? $_POST['application-server'] : 'no',
					'terminal-server' 		=> (isset($_POST['terminal-server'])) ? $_POST['terminal-server'] : 'no',
					'gateway' 				=> (isset($_POST['gateway'])) ? $_POST['gateway'] : 'no',
					'accounting-software' 	=> (isset($_POST['accounting-software'])) ? $_POST['accounting-software'] : 'no'
				];

				$web_development = [
					'website' 			=> (isset($_POST['website'])) ? $_POST['website'] : 'no',
					'landing-page' 		=> (isset($_POST['landing-page'])) ? $_POST['landing-page'] : 'no',
					'internet-shop' 	=> (isset($_POST['internet-shop'])) ? $_POST['internet-shop'] : 'no',
					'web-application' 	=> (isset($_POST['web-application'])) ? $_POST['web-application'] : 'no'
				];

				$seo_smm = [
					'seo' => (isset($_POST['seo'])) ? $_POST['seo'] : 'no',
					'smm' => (isset($_POST['smm'])) ? $_POST['smm'] : 'no'
				];

				$training_center = [
					'system-administration' => (isset($_POST['system-administration'])) ? $_POST['system-administration'] : 'no',
					'web-programming' 		=> (isset($_POST['web-programming'])) ? $_POST['web-programming'] : 'no'
				];

				$data = [
					'name' => $input['name'],
					'phone' => $input['phone'],
					'it_outsourcing' => $it_outsourcing,
					'web_development' => $web_development,
					'seo_smm' => $seo_smm,
					'training_center' => $training_center
				];

				Mail::send('emails.app', $data, function ($message) {
				  	$message->to('is.adilet@mail.ru', 'Is. Adilet')->subject('Новая заявка. CompNet.kz');
				});

				$data['it_outsourcing'] = serialize($it_outsourcing);
				$data['web_development'] = serialize($web_development);
				$data['seo_smm'] = serialize($seo_smm);
				$data['training_center'] = serialize($training_center);

				Order::create($data);

				return (isset($_POST['services-element']))
					? '<div class="alert alert-dismissable alert-success">Спасибо! Ваша заявка принята.</div><script>$("#sendCalc").attr("disabled", "disabled");</script>'
					: '<div class="alert alert-dismissable alert-success">Спасибо! Ваша заявка принята.</div><script>$("#sendTr").attr("disabled", "disabled");</script>';
			}
		// }
	}
}
