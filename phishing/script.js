const query = document.getElementById('query');

// Asynchronous capture user input from query field
async function logQuery(action) {
    try {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
           query.innerHTML = this.responseText;
        }
        xhttp.open("POST", "search.php?action=" + action + "&query=" + query.value, true);
        xhttp.send();
        console.log('Query logged successfully');
    } catch (error) {
        console.error('Error logging query:', error);
    }
}