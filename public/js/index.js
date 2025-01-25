function myFunction() {
    let input = document.getElementById("navSearch");
    let filter = input.value.toUpperCase();
    let ul = document.getElementById("navMenu");
    let li = ul.getElementsByTagName("li");

    for (i = 0; i < li.length; i++) {
        let a = li[i].getElementsByTagName("a")[0];

        if (a.innerText.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

let search = document.getElementById("navSearch");
search.addEventListener("keyup", myFunction);

