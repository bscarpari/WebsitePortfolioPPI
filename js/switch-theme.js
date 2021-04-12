const switchBtn = document.getElementById("switch");
switchBtn.addEventListener("click", function () {
    var theme = document.body.classList.contains("dark") ?  "light" : "dark";
    $.post("./switch-theme.php", {new_theme: theme}, function () { 
        document.body.classList.toggle("light");
        document.body.classList.toggle("dark");
    })
});