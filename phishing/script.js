const input = document.getElementById("query");
const form = document.getElementById("searchForm");

// 1. ASYNC LOGGING (no redirect)
input.addEventListener("input", function () {
  const value = this.value.trim();
  if (!value) return;

  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", "log.php", true);
  xhttp.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  xhttp.send("query=" + encodeURIComponent(value));
});

// 2. SUBMIT HANDLER (redirect ONLY here)
form.addEventListener("submit", function (e) {
  e.preventDefault();

  const value = input.value.trim();
  if (!value) return;

  window.location.href =
    "https://www.google.com/search?q=" + encodeURIComponent(value);
});