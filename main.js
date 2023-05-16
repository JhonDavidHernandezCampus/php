let btn = document.querySelector("#boton");
console.log(btn);

let URl = "http://localhost/SpUkM01-083/php"
btn.addEventListener("click", async (e)=>{
/*     console.log("esta");
    console.log(await ((await fetch(`${URl}`)).json())); */
    let res = await ((await fetch(`${URl}/api.php`)).json());
    console.log(res);
    document.querySelector("pre").innerHTML = res;
})