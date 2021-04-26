{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
<span style="float:right;">
	<a href="{$conf->action_url}logout"  class="pure-button pure-button-primary">wyloguj: {$user->login}</a>
	<a href="{$conf->action_url}showCalc"  class="pure-button pure-button-primary">kalkulator</a>
	</span>
</div>

<fieldset>
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
    <tr>
        <th> Kwota </th>
        <th> Oprocentwoanie </th>
        <th> Lata </th>
        <th> Rata </th>
        <th> Data i Czas </th>
    </tr>
</thead>
<tbody>
{foreach $records as $r}
        {strip}
            <tr>
                <td> {$r["amount"]} </td>
                <td> {$r["interest"]} </td>
                <td> {$r["years"]} </td>
                <td> {$r["result"]} </td>
                <td> {$r["date"]} </td>
            </tr>
        {/strip}
        {/foreach}
</tbody>
</table>
</fieldset>

{/block}