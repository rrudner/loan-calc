{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
<span style="float:right;">
	<a href="{$conf->action_url}logout"  class="pure-button pure-button-primary">wyloguj: {$user->login}</a>
	<a href="{$conf->action_url}showTable"  class="pure-button pure-button-primary">tabela</a>
	</span>
</div>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator Kredytowy</legend>
	<fieldset>
        <div class="pure-control-group">
			<label for="id_amount">Kwota Pożyczki: </label>
			<input id="id_amount" type="text" name="amount" value="{$form->amount}" />
		</div>

		<div class="pure-control-group">
			<label for="id_years">Liczba Lat: </label>
			<input id="id_years" type="text" name="years" value="{$form->years}" />
		</div>
       
        <div class="pure-control-group">
			<label for="id_interest">Oprocentowanie: </label>
			<input id="id_interest" type="text" name="interest" value="{$form->interest}" />
		</div>

		<div class="pure-controls">
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}