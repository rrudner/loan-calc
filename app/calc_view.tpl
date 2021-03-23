{extends file="../templates/main.tpl"}

{block name=content}



<h2 class="content-head is-center">Kalkulator Kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">

        <form action="http://localhost/loan-calc/app/calc.php" method="post">
            <label for="id_amount"> Kwota Pozyczki: </label>
            <input id="id_amount" type="text" name="amount" value="{$form->amount}">
            <label for="years"> Lata: </label><input id="years" type="text" name="years" value="{$form->years}" >
            <label for="interest"> Oprocentowanie: </label><input id="interest" type="text" name="interest" value="{$form->interest}" >
            <input type="submit" value="Oblicz" />
        </form>
        </div>

<div class="l-box-lrg pure-u-1-2">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

        </div>
</div>
{/block}
