const categories = document.querySelectorAll(".categoryLabel");

categories.forEach(el => {
    const checkbox = el.querySelector("input");
    const image = el.querySelector("img");
    el.addEventListener("click", () => {
        if(checkbox.checked != true){
            el.style.backgroundColor = "chocolate";
            checkbox.checked = true;
            image.src = "./assets/images/added.svg";
        }else{
            el.style.backgroundColor = "bisque";
            checkbox.checked = false;
            image.src = "./assets/images/to-add.png";
        }
    });
});