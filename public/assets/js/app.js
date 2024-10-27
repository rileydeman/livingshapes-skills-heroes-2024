let projectItems = document.getElementsByClassName("pRepItem");
let pRepItemBackground = document.getElementsByClassName("pRepItemBackground");

for (let i = 0; i < projectItems.length; i++) {
    projectItems[i].addEventListener("mouseover", function () {
        pRepItemBackground[i].scrollBy(0, pRepItemBackground[i].offsetHeight);
    })

    projectItems[i].addEventListener("mouseout", function () {
        pRepItemBackground[i].scrollBy(0, -pRepItemBackground[i].offsetHeight);
    })
}