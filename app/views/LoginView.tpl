{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post"  class="pure-form">
	<legend>Logowanie do systemu</legend>
	<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" />
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
