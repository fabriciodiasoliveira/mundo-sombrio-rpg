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
collapse1 = '<br><a data-bs-toggle="collapse" href="#collapseExample';
collapse2 = '" role="button" aria-expanded="false" aria-controls="collapseExample">';
collapse3 = '</a><div class="collapse" id="collapseExample';
collapse4 = '"><div class="card card-body">'
collapse5 = '</div></div>'
id = 0;
class_total = '';
function set_collapse(){
    class_person = $("#class").html();
    chapters = class_person.split("<h3>");
    chapters.forEach(concatenate);
    $("#class").html(class_total);
}
function concatenate(){
    class_chapter = chapters[id].split("</h3>");
    if(id != 0){
        class_total = class_total + collapse1+id;
        class_total = class_total + collapse2;
        class_total = class_total + class_chapter[0];
        class_total = class_total + collapse3 + id;
        class_total = class_total + collapse4;
        class_total = class_total + class_chapter[1];
        class_total = class_total + collapse5;
    }
    else{
        class_total = class_total + class_chapter[0];
    }
    id++;
}
