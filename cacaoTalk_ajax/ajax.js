let offset = 0;
const messageContainer = document.querySelector(".message-container");
const showMoreBtn = document.querySelector(".showMore");
showMoreBtn.addEventListener("click", showMsg);

window.addEventListener("load", showMsg)

function showMsg() {
const xhr = new XMLHttpRequest();
    xhr.open("GET", `loadMessages.php?offset=${offset}`);

    xhr.addEventListener("load", () => {
        offset += 5;
        const response = xhr.responseText;
        console.log(offset);
        console.log(response);
        messageContainer.innerHTML += response;
    });

    xhr.send(null);
}