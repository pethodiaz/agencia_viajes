function search() {
    const destination = document.getElementById('destination').value;
    const travelStartDate = document.getElementById('travel-start-date').value;
    const travelEndDate = document.getElementById('travel-end-date').value;

    const xhr = new XMLHttpRequest();
    xhr.open('GET', `buscar-vuelos.php?destination=${destination}&travel_start_date=${travelStartDate}&travel_end_date=${travelEndDate}`, true);
    xhr.onload = function() {
        if (this.status === 200) {
            document.getElementById('results-container').innerHTML = this.responseText;
        }
    };
    xhr.send();
}

function clearFilters() {
    document.getElementById('destination').value = '';
    document.getElementById('travel-start-date').value = '';
    document.getElementById('travel-end-date').value = '';
    document.getElementById('results-container').innerHTML = '';
}
