// Get form clues
    var formClueLogin = document.getElementById("clue-login");
    var formCluePassword = document.getElementById("clue-password");
    var formClueNewPassword1 = document.getElementById("clue-newpassword1");
    var formClueNewPassword2 = document.getElementById("clue-newpassword2");

    // Get inputs
    var formInputLogin = document.getElementById("input-email");
    var formInputPassword = document.getElementById("input-password");
    var formInputNewPassword1 = document.getElementById("newpasswordinput1");
    var formInputNewPassword2 = document.getElementById("newpasswordinput2");
    //var inputsType1 = ;
    //var inputType2 = ;

    var settingsInputs = document.getElementsByClassName("settings__content-input");
    var settingsInputsClue = document.getElementsByClassName("settings__content-clue");

    for (var i = 0; i < settingsInputs.length; i++)
    {
        settingsInputs[i].addEventListener("click", focusInput, false);
    }

    // Add event listener
    if (formInputLogin)
    {
        formInputLogin.addEventListener("click", toggleInput, false);
    }
    
    if (formInputPassword)
    {
        formInputPassword.addEventListener("click", toggleInput, false);
    }

    if (formInputNewPassword1)
    {
        formInputNewPassword1.addEventListener("click", toggleInput, false);
    }

    if (formInputNewPassword2)
    {
        formInputNewPassword2.addEventListener("click", toggleInput, false);
    }
    
    window.addEventListener("click", toggleInput, false);
    // window.addEventListener("click", showMessageSuccessRecoverPassword, false);

    // Realize function
    function toggleInput(e)
    {
        if (e.target.id == 'input-email')
        {
            if (formInputLogin)
            {
                formClueLogin.style.color = '#4F8BE4';
                formInputLogin.style.border = '1px solid #4F8BE4';
            }

            if (formInputPassword)
            {
                formCluePassword.style.color = '#979DBB';
                formInputPassword.style.border = '1px solid #A9ABBA';
            } 

            if (formInputLogin.value == 'E-mail')
            {
                formInputLogin.value = "";
            }            
        } 
        else if (e.target.id == 'input-password')
        {
            if (formInputLogin)
            {
                formClueLogin.style.color = '#979DBB';
                formInputLogin.style.border = '1px solid #A9ABBA';
            }

            if (formInputPassword)
            {
                formCluePassword.style.color = '#4F8BE4';
                formInputPassword.style.border = '1px solid #4F8BE4';
                formInputPassword.type = "password";
            }

            if (formInputPassword.value == 'Enter password')
            {
                formInputPassword.value = "";
            }
        }
        else if (e.target.id == 'newpasswordinput1')
        {
            formInputNewPassword1.style.border = '1px solid #4F8BE4';
            formClueNewPassword1.style.color = '#4F8BE4';
            formInputNewPassword2.style.border = '1px solid #979DBB';
            formClueNewPassword2.style.color = '#979DBB';
        }
        else if (e.target.id == 'newpasswordinput2')
        {
            formInputNewPassword2.style.border = '1px solid #4F8BE4';
            formClueNewPassword2.style.color = '#4F8BE4';
            formInputNewPassword1.style.border = '1px solid #979DBB';
            formClueNewPassword1.style.color = '#979DBB';
        }
        else  if (!e.target.closest(".login__inner") && !e.target.closest(".newpassword__inner")) {
            if (formInputLogin)
            {
                formClueLogin.style.color = '#979DBB';
                formInputLogin.style.border = '1px solid #979DBB';
            }

            if (formInputPassword)
            {
                formInputPassword.type = "text";
                formInputPassword.style.border = '1px solid #979DBB';
                formCluePassword.style.color = '#979DBB';
            }

            if (formInputNewPassword1)
            {
                formClueNewPassword1.style.color = '#979DBB';
                formInputNewPassword1.style.border = '1px solid #979DBB';
            }

            if (formInputNewPassword2)
            {
                formClueNewPassword2.style.color = '#979DBB';
                formInputNewPassword2.style.border = '1px solid #979DBB';
            }
        } 
    }

    var showPasswordBtn = document.getElementById("showpassword");

    if (showPasswordBtn)
    {
        showPasswordBtn.addEventListener("click", toggleShowPassword, false);
    }
    window.addEventListener("click", hidePassword, false);

    function toggleShowPassword(e)
    {
        if (formInputPassword)
        {
            if (formInputPassword.value == 'Enter password')
            {
                formInputPassword.value = "";
            }

            if (formInputPassword.type == 'password')
            {
                formInputPassword.type = "text";
            }
            else if (formInputPassword.type == 'text') 
            {
                formInputPassword.type = 'password';
            } 
        }
    }

    function hidePassword(e)
    {
        if (formInputPassword)
        {
            if (!e.target.closest('.login__inner'))
            {
                if (formInputPassword.value != 'Enter password')
                {
                        formInputPassword.type = 'password';
                }
            }
        }
    }

    var searchInput = document.getElementById("search");

    searchInput.addEventListener("click", focusSearchInput, false);
    window.addEventListener("click", clearSearchInput, false);

   function focusSearchInput()
   {
        searchInput.value = "";
   }

   function clearSearchInput(e)
   {
        if (e.target.id != "search")
        {
            searchInput.value = "Поиск......";
        }
   }

   function focusInput(e)
   {
        for (var i = 0; i< settingsInputs.length; i++)
        {
            settingsInputs[i].classList.remove("active-input");
        }

        for (var i = 0; i < settingsInputsClue.length; i++)
        {
            settingsInputsClue[i].classList.remove("active-text");
        }

        e.target.closest('.settings__content-inner').getElementsByClassName('settings__content-clue')[0].className += ' active-text';
        e.target.classList.add('active-input');
   }