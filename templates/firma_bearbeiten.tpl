<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/firma/bearbeiten">
            <div class='row'>
                <div class='input-field col s12'>
                    <input type="hidden" value="{$firma->id}" name="reg[f_id]"/>
                    <input class='validate' type='text' name='reg[name]' id='name' required="" aria-required="true" value="{$firma->f_name}" autocomplete="off"/>
                    <label class="left-align" for='name'>Firmenname</label>
                </div>
            </div>

            <br />
            <center>
                <div class='row'>
                    <button type='submit' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Ändern</button>
                </div>
            </center>
        </form>
    </div>
</div> 

{if isset($toast)}
    {$toast}
{/if}