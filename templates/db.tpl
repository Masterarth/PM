<h2>Datenbank</h2>
<div class="section">
    <div class="row">
        <div class="card red">
            <div class="card-content white-text">
                <p><strong>Achtung!</strong> Falls Datenbank vorhanden ist wird diese gelöscht!</p>
                <p>Nachdem die Datenbank gelöscht wurde wird diese neu angelegt und mit Testdaten befüllt!</p>
            </div>
        </div>
    </div>
    <div class="row">
        <form method="post" action="/pm/db">
            <button type='submit' name='reg[refresh]' value="true" class='col s12 btn btn-large waves-effect waves-light'>Datenbank installieren</button>
        </form>
    </div>
</div>