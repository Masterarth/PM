<?php
/* Smarty version 3.1.29, created on 2016-07-30 21:17:21
  from "E:\Programme\xampp\htdocs\PM\templates\antrag_neu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579cfd413d1534_91590582',
  'file_dependency' => 
  array (
    'a7a640815272a71011f673ae2dbec029aa82bfa5' => 
    array (
      0 => 'E:\\Programme\\xampp\\htdocs\\PM\\templates\\antrag_neu.tpl',
      1 => 1469906239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579cfd413d1534_91590582 ($_smarty_tpl) {
?>
<div class="card">
    <div class="card-content">
        <span class="card-title">Projekt Nr: </span>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <input id="projektname" type="text" class="validate">
                <label for="projektname">Projektname</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">query_builder</i>
                <input id="sollstartdatum" type="text" class=" datepicker">
                <label for="sollstartdatum">Startdatum</label>
            </div>
            <div class="input-field col s6">
                <i class="material-icons prefix">query_builder</i>
                <input id="sollenddatum" type="text" class=" datepicker">
                <label for="sollenddatum">Enddatum</label>
            </div>
            <div class="input-field col s4">
                <select>
                    <option value="" disabled selected>Auswählen</option>
                    <option value="1">Standort 1</option>
                    <option value="2">Standort 2</option>
                    <option value="3">Standort 3</option>
                </select>
                <label>Standort</label>
            </div>
            <div class="input-field col s4">
                <select>
                    <option value="" disabled selected>Auswählen</option>
                    <option value="1">Standort 1</option>
                    <option value="2">Standort 2</option>
                    <option value="3">Standort 3</option>
                </select>
                <label>Bereich</label>
            </div>
            <div class="input-field col s4">
                <select>
                    <option value="" disabled selected>Auswählen</option>
                    <option value="1">Standort 1</option>
                    <option value="2">Standort 2</option>
                    <option value="3">Standort 3</option>
                </select>
                <label>Team</label>
            </div>
            <div class="input-field col s12">
                <textarea id="kurzbeschreibung" class="materialize-textarea" length="320"></textarea>
                <label for="kurzbeschreibung">Kurzbeschreibung</label>
            </div>

            <div class="input-field col s12">
                <textarea id="rahmenbedingungen" class="materialize-textarea" length="320"></textarea>
                <label for="rahmenbedingungen">Rahmenbedingungen</label>
            </div>

            <div class="input-field col s12">
                <textarea id="Kommunikation" class="materialize-textarea" length="320"></textarea>
                <label for="Kommunikation">Kommunikation</label>
            </div>

            <div class="input-field col s6">
                <select>
                    <option value="" disabled selected>Auswählen</option>
                    <option value="1">Standort 1</option>
                    <option value="2">Standort 2</option>
                    <option value="3">Standort 3</option>
                </select>
                <label>Projektleiter</label>
            </div>
            <div class="input-field col s6">
                <select multiple>
                    <option value="" disabled selected>Auswählen</option>
                    <option value="1">Standort 1</option>
                    <option value="2">Standort 2</option>
                    <option value="3">Standort 3</option>
                </select>
                <label>Teammitglieder</label>
            </div>
        </div>
        <div class='row'>
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect blue-grey darken-3'>Weiter</button>
        </div>
    </div>
</div>
<?php }
}
