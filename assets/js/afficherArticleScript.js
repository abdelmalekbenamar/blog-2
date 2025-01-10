const like = document.getElementById("like");
const likeButton = document.querySelector(".likeButton");

likeButton.addEventListener("click", () => {
    if(like.checked == true){
        likeButton.style.backgroundColor = "red";
    }else{
        likeButton.style.backgroundColor = "coral";
    }
});
