window.onload = function(){
    var fulfil = document.getElementById("fulfil");

    var fulfil_select = document.getElementById("fulfils");
    for (var i = 0; i < fulfil_select.options.length; i++){
        if (fulfil_select.options[i].value == fulfil.value){
            fulfil_select.options[i].selected = true;
            break;
        }
    };

    var tr = document.getElementById("tr") ;
    var trs = document.getElementsByName("handles");
    if(trs.length){
        switch (fulfil.value){
            case '0' :
                tr.innerHTML="<td class='admin-table-td'>学号</td> <td class='admin-table-td'>姓名</td> <td class='admin-table-td'>预览</td> <td class='admin-table-td'>申请日期</td> <td class='admin-table-td'></td>";
                for (var i = 0; i<trs.length;i++){
                    trs(i).hidden = true;
                }
                break;
            case '1' :
                tr.innerHTML="<td class='admin-table-td'>学号</td> <td class='admin-table-td'>姓名</td> <td class='admin-table-td'>预览</td> <td class='admin-table-td'>申请日期</td> <td class='admin-table-td'>办理</td>";
                break;
            case '2' :
                tr.innerHTML="<td class='admin-table-td'>学号</td> <td class='admin-table-td'>姓名</td> <td class='admin-table-td'>预览</td> <td class='admin-table-td'>处理日期</td> <td class='admin-table-td'>办理</td>";
                break;
            case '3' :
                tr.innerHTML="<td class='admin-table-td'>学号</td> <td class='admin-table-td'>姓名</td> <td class='admin-table-td'>预览</td> <td class='admin-table-td'>处理日期</td> <td class='admin-table-td'>办理</td>";
                break;
            case '4' :
                tr.innerHTML="<td class='admin-table-td'>学号</td> <td class='admin-table-td'>姓名</td> <td class='admin-table-td'>预览</td> <td class='admin-table-td'>处理日期</td> <td class='admin-table-td'>办理</td>";
                break;
            case '5' :
                tr.innerHTML="<td class='admin-table-td'>学号</td> <td class='admin-table-td'>姓名</td> <td class='admin-table-td'>预览</td> <td class='admin-table-td'>处理日期</td> <td class='admin-table-td'></td>";
                for (var i = 0; i<trs.length;i++){
                    trs(i).hidden = true;
                }
                break;
            default:
                break;
        }
    } else {
        var table =document.getElementById("table");
        table.hidden = true;
    }


}