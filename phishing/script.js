function logQuery(el) {
  const query = el.value.trim();
  if (!query) return;

  const xhttp = new XMLHttpRequest();

  xhttp.onload = function () {
    if (this.status === 200) {
      // redirect ONLY after server confirms logging
      window.location.href =
        "https://www.google.com/search?q=" + encodeURIComponent(query);
    } else {
      console.error("Server error:", this.status, this.responseText);
    }
  };

  xhttp.onerror = function () {
    console.error("Network error");
  };

  xhttp.open("POST", "search.php", true);
  xhttp.setRequestHeader(
    "Content-Type",
    "application/x-www-form-urlencoded"
  );
  xhttp.send("query=" + encodeURIComponent(query));
}