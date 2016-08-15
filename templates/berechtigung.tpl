
<div class="card-panel teal">
    <span class="white-text">
        <p>Achtung!</p>
        <p>Die Berechtigungen werden über die <strong>config/permission.php</strong> Datei geändert. Hier wird die genannte Datei nur Visualisiert.</p>
    </span>
</div>

<table class="responsive-table highlight">
    <thead>
        <tr>
            <th>Controller / Page</th>
                {foreach from=$rollen item=rolle}
                <th class="red-text">{$rolle->rolle}</th> 
                {/foreach}
        </tr>
    </thead>
    <tbody>
        {foreach from=$permissions item=roles key=page}
            <tr>
                <td class="red-text">{$page}</td>
                {foreach from=$roles item=role}
                    {foreach from=$rollen item=rolle}
                        {if ($rolle->rolle|upper) == ($role|upper)}
                            <td><i class="material-icons">clear</i></td> 
                        {else}
                            <td></td>
                        {/if}
                    {/foreach}
                {/foreach}
            </tr>
        {/foreach}
    </tbody>
</table>