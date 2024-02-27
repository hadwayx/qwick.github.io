var contentForPrint = document.getElementsByClassName("ofc__canvas")[0];
var printBtn = document.getElementById("print");

if (printBtn) 
{
    printBtn.addEventListener("click", print, false);
}

function print()
{
    var css = '<link rel="stylesheet" href="css/main.css" type="text/css" />';
    var WinPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
    WinPrint.document.write('<div id="print" class="contentpane">');
    WinPrint.document.write(css);
    WinPrint.document.write(contentForPrint.innerHTML);
    WinPrint.document.write('</div>');
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}