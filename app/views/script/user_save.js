function fieldChange() {
    var field_array = document.getElementsByName("fields");
    var field_checked;
    for(var i=0;i<field_array.length;i++)
    {
        if(field_array(i).checked)
        {
            field_checked = field_array.item(i).getAttribute("value");
            if(field_checked == 1){
                document.getElementById('data-d').value = 30;
                document.getElementById('base').value = "你处";
                break;
            } else {
                document.getElementById("data-d").value = 90;
                document.getElementById('base').value = null;
                break;
            }
        }
        else
        {
            continue;
        }
    }
}

function initSelect(){
    if (window.XMLHttpRequest) {xmlhttp = new XMLHttpRequest();} else {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");}

    xmlhttp.open("GET","/app/views/xml/college.xml",false);
    xmlhttp.send();
    xmlDoc = xmlhttp.responseXML;

    var college_id = document.getElementById("colleges");
    var colleges = xmlDoc.getElementsByTagName("college_node");
    var temp;

    for(var i=0; i < colleges.length; i++){
        temp = colleges[i].getElementsByTagName("value")[0].childNodes[0].nodeValue;
        college_id.options.add(new Option(temp,temp));
    }

    xmlhttp.open("GET","/app/views/xml/nationality.xml",false);
    xmlhttp.send();
    xmlDoc = xmlhttp.responseXML;

    var nationality_id = document.getElementById("nationalities");
    var nationalities = xmlDoc.getElementsByTagName("nationality_node");

    for(var j=0; j < nationalities.length; j++){
        temp = nationalities[j].getElementsByTagName("value")[0].childNodes[0].nodeValue;
        nationality_id.options.add(new Option(temp,temp));
    }

    var now = new Date();
    var year = now.getFullYear();

    var year_id = document.getElementById("years");
    for(var y = year-2; y<year+3; y++ ){
        year_id.options.add(new Option(y.toString(),y.toString()));
    }

    var month_id = document.getElementById("months");
    for(var m = 1; m<13 ; m++ ){
        month_id.options.add(new Option(m.toString(),m.toString()));
    }

}

window.onload = function(){

    initSelect();

    var field = document.getElementById("field");
    var sex = document.getElementById("sex");
    var formal = document.getElementById("formal");
    var college = document.getElementById("college");
    var nationality = document.getElementById("nationality");
    var year = document.getElementById("year");
    var month = document.getElementById("month");

    if(field.value == 1){
        var radio = document.getElementById("fields_1");
        radio.checked = true;
    } else {
        var radio = document.getElementById("fields_0");
        radio.checked = true;
    }

    var sex_select = document.getElementById("sexes");
    for (var i = 0; i < sex_select.options.length; i++){
        if (sex_select.options[i].value == sex.value){
            sex_select.options[i].selected = true;
            break;
        }
    }

    var formal_select = document.getElementById("formals");
    for (var i = 0; i < formal_select.options.length; i++){
        if (formal_select.options[i].value == formal.value){
            formal_select.options[i].selected = true;
            break;
        }
    }

    var college_select = document.getElementById("colleges");
    for (var i = 0; i < college_select.options.length; i++){
        if (college_select.options[i].value == college.value){
            college_select.options[i].selected = true;
            break;
        }
    };

    var nationality_select = document.getElementById("nationalities");
    for (var i = 0; i < nationality_select.options.length; i++){
        if (nationality_select.options[i].value == nationality.value){
            nationality_select.options[i].selected = true;
            break;
        }
    }

    var year_select = document.getElementById("years");
    for (var i = 0; i < year_select.options.length; i++){
        if (year_select.options[i].value == year.value){
            year_select.options[i].selected = true;
            break;
        }
    }

    var month_select = document.getElementById("months");
    for (var i = 0; i < month_select.options.length; i++){
        if (month_select.options[i].value == month.value){
            month_select.options[i].selected = true;
            break;
        }
    }

}