/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */
/* Exibir uma classe */
/*
 <p>
 <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
 Link with href
 </a>
 <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
 Button with data-bs-target
 </button>
 </p>
 <div class="collapse" id="collapseExample">
 <div class="card card-body">
 Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
 </div>
 </div>
 */
/*Configurações e funções úteis*/
function kmpSearch(pattern, text) {
    if (pattern.length == 0)
        return 0; // Immediate match

    // Compute longest suffix-prefix table
    var lsp = [0]; // Base case
    for (var i = 1; i < pattern.length; i++) {
        var j = lsp[i - 1]; // Start by assuming we're extending the previous LSP
        while (j > 0 && pattern[i] !== pattern[j])
            j = lsp[j - 1];
        if (pattern[i] === pattern[j])
            j++;
        lsp.push(j);
    }

    // Walk through text string
    var j = 0; // Number of chars matched in pattern
    for (var i = 0; i < text.length; i++) {
        while (j > 0 && text[i] != pattern[j])
            j = lsp[j - 1]; // Fall back in the pattern
        if (text[i] == pattern[j]) {
            j++; // Next char matched, increment position
            if (j == pattern.length)
                return i - (j - 1);
        }
    }
    return -1; // Not found
}

/*Demais funções*/

/*Menu collapse da descrição da classe*/
collapse1 = '<br><a data-bs-toggle="collapse" href="#collapseExample';
collapse2 = '" role="button" aria-expanded="false" aria-controls="collapseExample">';
collapse3 = '</a><div class="collapse" id="collapseExample';
collapse4 = '"><div class="card card-body">'
collapse5 = '</div></div>'
global_element = 0;
chapters = 0;
class_total = 0;
function set_collapse(element) {
    global_element = element;
    id = 0;
    class_total = '';
    class_person = element.html();
    chapters = class_person.split("<h3>");
    chapters.forEach(concatenate);
    element.html(class_total);
}
function concatenate() {
    if (chapters[id] != undefined) {
        class_chapter = chapters[id].split("</h3>");
        if (class_chapter[1] != undefined) {
            if (class_chapter[1].search('<h4>') != -1) {
//                text = class_chapter[1];
//                chapters_subtitle = text.split("<h4>");
//                set_collapse_subtitle();
//                  class_total = class_chapter[1];
            }
        }
        if (id != 0) {
            class_total = class_total + collapse1 + id + global_element.attr('id');
            class_total = class_total + collapse2;
            class_total = class_total + class_chapter[0];
            class_total = class_total + collapse3 + id + global_element.attr('id');
            class_total = class_total + collapse4;
            class_total = class_total + class_chapter[1];
            class_total = class_total + collapse5;
        } else {
            class_total = class_total + class_chapter[0];
        }
    }
    id++;
}
function set_collapse_subtitle() {
    ids = 0;
    chapters_subtitle.forEach(concatenate_subtitle);
}
function concatenate_subtitle() {
    class_subtitle = text.split("</h4>");
    class_chapter[1] = '';
    class_chapter[1] = class_chapter[1] + collapse1 + ids;
    class_chapter[1] = class_chapter[1] + collapse2;
    class_chapter[1] = class_chapter[1] + class_subtitle[0];
    class_chapter[1] = class_chapter[1] + collapse3 + ids;
    class_chapter[1] = class_chapter[1] + collapse4;
    class_chapter[1] = class_chapter[1] + class_subtitle[1];
    class_chapter[1] = class_chapter[1] + collapse5 + collapse5;
    ids++;
}


//Atualização do valor da característica na ficha
function add_value(id, character) {
    var data = new FormData(document.getElementById("form-" + id));
    name = data.get('name');
    data.delete('name');
    data.delete('characteristic_type_name');
    value = data.get('value');
    general = name == 'Força de vontade no jogo' ||
            name == 'Pontos de sangue' ||
            name == 'Força de Vontade' ||
            name == 'Humanidade' ||
            name == 'Dano';


    if ((value < 5 && !general) ||
            (value < 10 && general)) {
        value++;
        data.set('value', value);
        url = '/characteristic_stereotype/' + id;
        fetch(url, {
            method: "POST",
            body: data
        }).then(function (response) {
            response.text()
                    .then(function (result) {
                        $("#td-" + id).html('');
                        for (i = 0; i < result; i++) {
                            $("#td-" + id).html($("#td-" + id).html() + character + " ");
                            $("#value-" + id).val(value);
                        }
                        console.log('Request success: ', result);
                    })
        }).catch(function (error) {
            console.log('Request failure: ', error);
        });
    }
}
function subtract_value(id, character) {
    var data = new FormData(document.getElementById("form-" + id));
    name = data.get('name');
    characteristic_type_name = data.get('characteristic_type_name');
    data.delete('name');
    data.delete('characteristic_type_name');
    value = data.get('value');
    //Configurando as condições do if
    attibute = characteristic_type_name == 'Fisico' ||
            characteristic_type_name == 'Mental' ||
            characteristic_type_name == 'Social';
    if ((value > 0 && !attibute) ||
            (value > 1 && attibute)) {
        value--;
        data.set('value', value);
        url = '/characteristic_stereotype/' + id;
        fetch(url, {
            method: "POST",
            body: data
        }).then(function (response) {
            response.text()
                    .then(function (result) {
                        $("#td-" + id).html('');
                        for (i = 0; i < result; i++) {
                            $("#td-" + id).html($("#td-" + id).html() + character + " ");
                            $("#value-" + id).val(value);
                        }

                        console.log('Request success: ', result);
                    })
        }).catch(function (error) {
            console.log('Request failure: ', error);
        });
    }
}
function get_card_user(url) {
    fetch(url, {
        method: 'get' // opcional
    })
            .then(function (response) {
            response.text()
                .then(function (result) {
                    $('#card').html(result)
                    $('#factions').html('')
                    console.log('Request success: ', result);
                })
            })
            .catch(function (err) {
                console.error(err);
            });
}