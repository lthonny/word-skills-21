document.addEventListener('DOMContentLoaded', function () {
    const seatsElements = document.querySelectorAll('.seats .seat');

    const selectedSeatsElement = document.querySelector('.selected-seats');

    const seats = [];
    const maxSeats = 4;

    function renderSelectedSeats(selectedSeats) {
        selectedSeatsElement.innerHTML = selectedSeats.length ? 
        selectedSeats.join(', ') : 'Вы не выбрали места';
    }

    seatsElements.forEach(seat => seat.addEventListener('change', event => {
        const seatLabel = event.target.dataset.label;

        if (event.target.checked) {
            if (seats.length + 1 > maxSeats) {
                event.target.checked = false;
                return;
            }
            seats.push(seatLabel);
        } else {
            const seatIndex = seats.findIndex(_seat => _seat === seatLabel);

            if (seatIndex !== -1) {
                seats.splice(seatIndex, 1);
            }
        }
        renderSelectedSeats(seats);
    }));
    renderSelectedSeats(seats);
});
