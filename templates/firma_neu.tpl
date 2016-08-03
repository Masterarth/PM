<div class="card">
    <div class="card-content">
        <form method="post" action="/pm/firma/neu">
            <div class='row'>
                <div class='input-field col s12'>
                    <input class='validate' type='text' name='reg[name]' id='name' required="" aria-required="true" autocomplete="off"/>
                    <label class="left-align" for='name'>Firmenname</label>
                </div>
            </div>

            <br />
            <center>
                <div class='row'>
                    <button type='submit' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Anlegen</button>
                </div>
            </center>
        </form>
    </div>
</div> 

{if isset($toast)}
    {$toast}
{/if}