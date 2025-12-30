const image = document.querySelector("img");
const file = document.querySelector("input");
const btn = document.querySelector("button");

btn.addEventListener("click", (event) =>{
    image.src = URL.createObjectURL(event.target.files[0]);
})