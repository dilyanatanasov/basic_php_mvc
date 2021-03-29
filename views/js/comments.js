const urlParams = new URLSearchParams(window.location.search);
const token = urlParams.get("token");
const action = urlParams.get("action");
const data = urlParams.get("data");

showMessage = (message) => {
    let snackbar = document.getElementById("snackbar");
    document.getElementById("snackbar").innerHTML = message;
    snackbar.style.display = "block";
    snackbar.style.padding = "10px";
    setTimeout(() => {
        window.location.href = "http://localhost/mvc/movie.php";
    }, 2000)
}

if (
    token !== undefined &&
    action !== undefined &&
    data !== undefined
) {
    postData("http://localhost/mvc/api/Api.php", {
        token: token,
        action: action,
        data: data
    }).then((data) => {
        if (data.message !== undefined && data.message === "Successfully added comment") {
            showMessage(data.message);
        } else {
            console.log("Unauthorized");
        }
    });
}