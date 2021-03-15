{extends file="../templates/main.tpl"}

{block name=content}



<h2 class="content-head is-center">Kalkulator Kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1-2">

        <form action="http://localhost/loan-calc/app/calc.php" method="post">
            <label for="id_amount"> Kwota Pozyczki: </label>
            <input id="id_amount" type="text" name="amount" value="{$form['amount']}" >
            <label for="years"> Lata: </label><input id="years" type="text" name="years" value="{$form['years']}" >
            <label for="interest"> Oprocentowanie: </label><input id="interest" type="text" name="interest" value="{$form['interest']}" >
            <input type="submit" value="Oblicz" />
        </form>
        </div>

<div class="l-box-lrg pure-u-1-2">

{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}



        {if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
	{$result}
	</p>
{/if}

        </div>
</div>
{/block}
