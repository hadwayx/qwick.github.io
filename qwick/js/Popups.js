var currentElem;
var menuLine = document.getElementById("menuline");
var question1 = document.getElementById("question1");
var question2 = document.getElementById("question2");
var question3 = document.getElementById("question3");
var question4 = document.getElementById("question4");
var question5 = document.getElementById("question5");
var question6 = document.getElementById("question6");
var message1 = document.getElementById("message1");
var message2 = document.getElementById("message2");
var message3 = document.getElementById("message3");
var message4 = document.getElementById("message4");
var message5 = document.getElementById("message5");
var message6 = document.getElementById("message6");
var confirmLearningBtn1 = document.getElementById("confirmlearning1");
var confirmLearningBtn2 = document.getElementById("confirmlearning2");
var confirmLearningBtn3 = document.getElementById("confirmlearning3");
var confirmLearningBtn4 = document.getElementById("confirmlearning4");
var confirmLearningBtn5 = document.getElementById("confirmlearning5");
var isLearnedQuestion1 = false;
var isLearnedQuestion2 = false;
var isLearnedQuestion3 = false;
var isLearnedQuestion4 = false;
var isLearnedQuestion5 = false;
var isLearnedQuestion6 = false;

var recoverPasswordBtn = document.getElementById("recoverpassword");

if (recoverPasswordBtn)
{
    recoverPasswordBtn.addEventListener("click", showMessageSuccessRecoverPassword, false);
}

function showMessageSuccessRecoverPassword(e)
{
    var message = document.getElementById("recovermessage");

    // If we press the button and message has display none
    if (message)
    {
        if (message.style.display != 'block' && e.target.id == 'recoverpassword')
        {
            message.style.display = 'block';
        }
        else if (e.target.id != 'recoverpassword' && message.style.display == 'block') {
            message.style.display = 'none';
        }
    }
}

if (question1)
{
    question1.addEventListener("click", showMessage, false);
}
if (question2)
{
    question2.addEventListener("click", showMessage, false);
}
if (question3)
{
    question3.addEventListener("click", showMessage, false);
}
if (question4)
{
    question4.addEventListener("click", showMessage, false);
}

//    question3.addEventListener("click", showMessage, false);
//    question4.addEventListener("click", showMessage, false);
//    question5.addEventListener("click", showMessage, false);
//    question6.addEventListener("click", showMessage, false);
if (confirmLearningBtn1) 
{
    confirmLearningBtn1.addEventListener("click", confirmLearning, false);
}
if (confirmLearningBtn2)
{
    confirmLearningBtn2.addEventListener("click", confirmLearning, false);
}
if (confirmLearningBtn3)
{
    confirmLearningBtn3.addEventListener("click", confirmLearning, false);
}

//    confirmLearningBtn3.addEventListener("click", confirmLearning, false);
//    confirmLearningBtn4.addEventListener("click", confirmLearning, false);
//    confirmLearningBtn5.addEventListener("click", confirmLearning, false);
//    confirmLearningBtn6.addEventListener("click", confirmLearning, false);

function showMessage(e)
{
    if (e.target.closest(".main__content-question"))
    {
        message1.style.display = 'block';
    } 
    else if (e.target.closest(".main__question-inner"))
    {
        message2.style.display = 'block';
    }
    else if (e.target.closest(".popup__question--1"))
    {
        message3.style.display = 'block';
    }
    else if (e.target.closest(".popup__question--2"))
    {
        message4.style.display = 'block';
    }
    else if (e.target.closest(".main__content-question"))
    {
        message5.style.display = 'block';
    }
    else if (e.target.closest(".main__content-question"))
    {
        message6.style.display = 'block';
    }
}

function confirmLearning(e)
{
    if (e.target.closest(".main__message-btn"))
    {
        question1.style.display = 'none';
        message1.style.display = 'none';
        isLearnedQuestion1 = true;
    } 
    else if (e.target.closest(".ofc__message-btn"))
    {
        question2.style.display = 'none';
        message2.style.display = 'none';
        isLearnedQuestion2 = true;
    }
    else if (e.target.closest(".popup__message-btn--1"))
    {
        question3.style.display = 'none';
        message3.style.display = 'none';
        isLearnedQuestion3 = true;
    }
    else if (e.target.closest(".popup__message-btn--2"))
    {
        question4.style.display = 'none';
        message4.style.display = 'none';
        isLearnedQuestion4 = true;
    }
    else if (e.target.closest(""))
    {
        message5.style.display = 'none';
    }
    else if (e.target.closest(""))
    {
        message6.style.display = 'none';
    }
}

var closeBtn = document.getElementById("close");

if (closeBtn)
{
    closeBtn.addEventListener("click", closePopupWindow, false);
}

function closePopupWindow(e)
{
    var currentPopupWindow = document.getElementById(e.target.closest('.popup').id);
    currentPopupWindow.style.display = 'none';
}

var ofcItemDots = document.getElementsByClassName("ofc__content-dots");

for (var i = 0; i < ofcItemDots.length; i++)
{
    ofcItemDots[i].addEventListener("click", showPopupWindow, false);
}

function showPopupWindow(e)
{
    var currentPopup = document.getElementById("popup1");
    currentPopup.style.display = 'block';
}