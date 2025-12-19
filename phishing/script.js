const query = document.getElementById('query');

// Asynchronous capture user input from query field
async function logQuery(action) {
    try {
        const response = await fetch(`search.php?action=${action}&query=${encodeURIComponent(query)}`);
    } catch (error) {
        console.error('Error logging query:', error);
    }
}