function main()
{
    /*

    POPUP WINDOWS

    */
    

    /*
    var ofcElemCreator = document.getElementById("ofcitemcreator");
    var ofcElemDirector = document.getElementById("ofcitemdirector");
    var ofcElemsDepartmentDirector = document.getElementsByClassName("ofc__item-department");
    var ofcElemsWorker = document.getElementsByClassName("ofc__item-worker");
   */

   /*

   SCROLL

   */

//    window.addEventListener("load", addLinesToOfc, false);

//    function addLinesToOfc()
//    {
//         var creatorElemHeight = ofcElemCreator.offsetHeight;
//         var directorElemHeight = ofcElemDirector.offsetHeight;
//         var departmentElemsHeight = [];
//         var workerElemsHeight = [];
//         console.log(creatorElemHeight);

//         for (var i = 0; i < ofcElemsDepartmentDirector.length; i++)
//         {
//             departmentElemsHeight.push(Number(ofcElemsDepartmentDirector.style.height.slice(0, ofcElemsDepartmentDirector.style.height.length - 2)));
//         }

//         for (var i = 0; i < ofcElemsWorker.length; i++)
//         {
//             workerElemsHeight.push(Number(ofcElemsWorker.style.height.slice(0, ofcElemsWorker.style.height.length - 2)));
//         }

//         var lineFromCreator = document.createElement("div");
//         lineFromCreator.id = "linefromcreator";
//         lineFromCreator.style.position = 'absolute';
//         lineFromCreator.style.top = creatorElemHeight + 'px';
//         lineFromCreator.style.left = 14 + 'px';
//         lineFromCreator.style.height = 105 + 'px'
//         lineFromCreator.style.width = 21 + 'px';
//         lineFromCreator.style.borderBottom = '1px solid #979DBB'
//         lineFromCreator.style.borderLeft = '1px solid #979DBB';
//         ofcElemCreator.append(lineFromCreator);

//         var lineFromDirector = document.createElement("div");
//         lineFromDirector.id = "linefromdirector";
//         lineFromDirector.style.position = 'absolute';
//         lineFromDirector.style.top = directorElemHeight + 'px';
//         lineFromDirector.style.left = 138 + 'px';
//         lineFromDirector.style.height = 36 + 'px'
//         lineFromDirector.style.width = 1 + 'px';
//         lineFromDirector.style.backgroundColor = '#979DBB';
//         ofcElemDirector.append(lineFromDirector);
//    }

   /*

   TABS

   */

   var tabsPrimary = document.getElementsByClassName("popup__tab-primary");
   var tabsSecondary = document.getElementsByClassName("popup__tab-secondary");

   for (var i = 0; i < tabsPrimary.length; i++)
   {
        tabsPrimary[i].addEventListener("click", switchTabsPrimary, false);
   }

   for (var i = 0; i < tabsSecondary.length; i++)
   {
        tabsSecondary[i].addEventListener("click", switchTabsSecondary, false);
   }

   function switchTabsPrimary(e)
   {
        if (e.target.className.indexOf("tab") != -1)
        {
            var currentTab = e.target;
            var currentNum = e.target.id[e.target.id.length-1];
    
            for (var i = 0; i < tabsPrimary.length; i++)
            {
                if (tabsPrimary[i].className.indexOf("active-tab") != -1)
                {
                    var num = tabsPrimary[i].id[tabsPrimary[i].id.length-1];
                    tabsPrimary[i].classList.remove("active-tab");
                    document.getElementById(`tab-content-${num}`).style.display = 'none';
                    question4.style.display = 'none';
                    question5.style.display = 'none';
                }
            }
    
            if (currentNum == 2)
            {
                question4.style.display = 'flex';
            }
            else if (currentNum == 3 && !isLearnedQuestion4)
            {
                question5.style.display = 'flex';
            }
    
            currentTab.classList.add("active-tab");
            document.getElementById(`tab-content-${currentNum}`).style.display = 'block';
        }
   }

   function switchTabsSecondary(e)
   {
        var currentTab = e.target;
        var currentNum = e.target.id[e.target.id.length-1];

        for (var i = 0; i < tabsSecondary.length; i++)
        {
            if (tabsSecondary[i].className.indexOf("active-tab") != -1)
            {
                var num = tabsSecondary[i].id[tabsSecondary[i].id.length-1];
                tabsSecondary[i].classList.remove("active-tab");
                document.getElementById(`secondary-content-${num}`).style.display = 'none';
            }
        }

        currentTab.classList.add("active-tab");
        document.getElementById(`secondary-content-${currentNum}`).style.display = 'block';
   }
 
    return 0;
}

main();