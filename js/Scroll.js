var ofcElements = document.getElementsByClassName("ofc__content-item");
var mainScrollBlock = document.getElementsByClassName("ofc__content")[0];
var numOfcElements = 0;
var zoomPlusBtn = document.getElementById("zoomplus");
var zoomMinusBtn = document.getElementById("zoomminus");
var currentZoom = 100;
var zoomNumberElem = document.getElementById("zoomnumber");

window.addEventListener("load", function() {
    const pageHeight = document.documentElement.clientHeight;
    const pageWidth = document.documentElement.clientWidth;

    var scrollElem = document.getElementsByClassName("ofc__canvas")[0];
    if (scrollElem)
    {
        scrollElem.style.height = (pageHeight - 163) + 'px';
        scrollElem.style.width = (pageWidth - 350) + 'px';
    }

    scrollElem = document.getElementsByClassName("reglaments__content")[0];
    if (scrollElem)
    {
        scrollElem.style.height = (pageHeight - 356) + 'px';
    }

    scrollElem = document.getElementsByClassName("report__table-body")[0];
    if (scrollElem)
    {
        scrollElem.style.height = (pageHeight - 396) + 'px';
    }

    var scrollCols = document.getElementsByClassName("communication__content-col");

    for (var i = 0; i < scrollCols.length; i++)
    {
        scrollElem = scrollCols[i];

        if (scrollElem)
        {
            scrollElem.style.height = (pageHeight - 204) + 'px';
        }
    }

    scrollElem = document.getElementsByClassName("employees__content")[0];
    if (scrollElem)
    {
        scrollElem.style.height = (pageHeight - 319) + 'px';
    }

    scrollElem = document.getElementsByClassName("pay__content")[0];
    if (scrollElem)
    {
        scrollElem.style.height = (pageHeight - 302) + 'px';
    }

    scrollElem = document.getElementsByClassName("settings__content")[0];
    if (scrollElem)
    {
        scrollElem.style.height = (pageHeight - 277) + 'px';
    }
}, false);

for (var i = 0; i < ofcElements.length; i++)
{
    numOfcElements++;
}

if (mainScrollBlock) 
{
    mainScrollBlock.style.width = numOfcElements/3 * 320 + 'px';
}


if (zoomPlusBtn)
{
    zoomPlusBtn.addEventListener("click", zoom, false);
}
if (zoomMinusBtn)
{
    zoomMinusBtn.addEventListener("click", zoom, false);
}

function zoom(e)
{
    if (e.target.closest('#zoomplus') && currentZoom < 200)
    {
        currentZoom += 20;
    } 
    else if (e.target.closest('#zoomminus') && currentZoom > 20)
    {
        currentZoom -= 20;
    } 
    mainScrollBlock.style.zoom = currentZoom + '%';
    zoomNumberElem.innerHTML = currentZoom + '%';
}