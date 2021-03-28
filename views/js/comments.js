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
        window.location.href = "http://localhost/project-example/movie.php";
    }, 2000)
}

if (
    token !== undefined &&
    action !== undefined &&
    data !== undefined
) {
    postData("http://localhost/project-example/api/api.php", {
        token: token,
        action: action,
        data: data
    }).then((data) => {
        if (data.message !== undefined && data.message === "Successfully deleted") {
            showMessage(data.message);
        } else {
            console.log("Unauthorized");
        }
    });
}