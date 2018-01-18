/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Should be called in the body onload event, use in conjunction with
 * slim/csrf and CsrfView middlewares
 * @param {string} nameKey
 * @param {string} valueKey
 * @param {string} name
 * @param {string} value
 * @returns {undefined}
 */
function csrf(nameKey,name,valueKey,value)
{
    var forms = document.forms;
    var field;
    for (var i = 0; i < forms.length; i++) {
        
        field = document.createElement('INPUT');
        field.setAttribute('type','hidden');
        field.setAttribute('name',nameKey);
        field.setAttribute('value',name);
        forms[i].appendChild(field);
        
        field = document.createElement('INPUT');
        field.setAttribute('type','hidden');
        field.setAttribute('name',valueKey);
        field.setAttribute('value',value);
        forms[i].appendChild(field);
    }
}