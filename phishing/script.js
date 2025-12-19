const query = document.getElementById('query');

// Asynchronous capture user input from query field
async function logQuery(action) {
    try {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
           document.getElementById("query").innerHTML = this.responseText;
        }
        xhttp.open("POST", "search.php", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("query=" + encodeURIComponent(query.value));
        console.log('Query logged successfully');
    } catch (error) {
        console.error('Error logging query:', error);
    }
}