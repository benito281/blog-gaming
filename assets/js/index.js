/* Forms */
const formSignin = document.querySelector("#signin"),
      formSignup = document.querySelector("#signup");
let url = window.location.href;

/* Signin */
    formSignin.addEventListener("submit", (e) => {
        e.preventDefault();
        console.log('Funciona signin')
    })
/* Signup */


formSignup.addEventListener("submit", async (e) => {
    e.preventDefault();
    //const data = Object.fromEntries(new FormData(e.target));
    //console.log(data)
   let message = await signup(formSignup);
   console.log(message);
    
    /* if (message.message == 200) {
        console.log(message);
        setTimeout(() => { window.location.href = 'includes/dashboard.php'; },1500);
    }
 */
    //console.log('Funciona signup');
});



const signup = async (dataFormSignup) => {
    try {
        const response = await fetch('includes/signup.php', {
            method : 'POST',
            body : new FormData(dataFormSignup)
        });
        const result = await response.json();
        return result;        
    } catch (error) {
        return error;
    }
}

/* console.log(url + 'includes/signup.php') */