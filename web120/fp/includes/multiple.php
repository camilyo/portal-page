<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

#EDIT THE FOLLOWING:
$toAddress = "de.o.santos@seattlecentral.edu";  //place your/your client's email address here
$toName = "COS - Advocacia & Consultoria"; //place your client's name here
$website = "COS - Advocacia & Consultoria";  //place NAME of your client's website here
#--------------END CONFIG AREA ------------------------#
$sendEmail = TRUE; //if true, will send an email, otherwise just show user data.
$dateFeedback = true; //if true will show date/time with reCAPTCHA error - style a div with class of dateFeedback
include_once 'config.php'; #site keys go inside your config.php file
include 'contact-lib/contact_include.php'; #complex unsightly code moved here
$response = null;
$reCaptcha = new ReCaptcha($secretKey);
if (isset($_POST["g-recaptcha-response"]))
{// if submitted check response
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}
if ($response != null && $response->success)
    {#reCAPTCHA agrees data is valid (PROCESS FORM & SEND EMAIL)
        handle_POST($skipFields,$sendEmail,$toName,$fromAddress,$toAddress,$website,$fromDomain);             #Here we can enter the data sent into a database in a later version of this file
    ?>
    <!-- START HTML FEEDBACK -->
    <div class="contact-feedback">
        <h2>Entraremos em Contato em Breve!</h2>
        <p>Obrigada!</p>
        <p>Responderemos seu e-mail em menos de 48 horas.</p>
    </div>    
    <!-- END HTML FEEDBACK -->        
    <?php
}else{#show form, either for first time, or if data not valid per reCAPTCHA 
    if($response != null && !$response->success)
    {
        $feedback = dateFeedback($dateFeedback);
        send_POSTtoJS($skipFields); #function for sending POST data to JS array to reload form elements
    }//end failure feedback
 
?>
	<!-- START HTML FORM -->
	<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Nome Completo:<br /><input type="text" name="Name" required="required" placeholder="Informe seu nome completo" title="Nome completo é obrigatório" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Informe seu email" title="Email válido é obrigatório" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			Como Você Ficou Sabendo Sobre Nossos Serviços?:<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Escolha uma Opção</option>
				<option value="Social Media">Media Social</option>
				<option value="Google">Google</option>
				<option value="A Friend">Indicaçao de Amigo</option>
				<option value="A Family Member">Indicaçao de um Familiar</option>
				<option value="Other">Outros</option>
			</select>
		</label>
	</div>
		<div>	
		<fieldset>
			<legend>Você Deseja Receber a Nossa Newsletter?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes"  
			required="required" title="Mailing list is required" tabindex="50"  
			/> Sim <br />
			<input type="radio" name="Join_Mailing_List?" value="Não" /> Não <br />
		</fieldset>
	</div>
    <div>
		<label>
			Assunto:<br /><input type="text" name="Subject" required="required" placeholder="Qual o Motivo do seu Contato?" title="Motivo do contato" tabindex="10" size="44" />
		</label>
	</div>
	<div>	
		<label>
			Mensagem:<br /><textarea name="Comments" cols="36" rows="4" tabindex="60"></textarea>
		</label>
	</div>	
	<div><?=$feedback?></div>
    <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
<?php
}
?>
