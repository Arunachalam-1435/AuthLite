const image = document.querySelector("img");
const file = document.querySelector("input");
const btn = document.querySelector("button");

file.addEventListener("change", (event) =>{
    image.src = URL.createObjectURL(event.target.files[0]);
})
btn.addEventListener("click", () => {
    const fData = new FormData();
    fData.append("image", file.files[0]);
    fetch("upload.php", { method: "POST", body: fData}).then(res => res.text()).then(data => console.log(data));
});