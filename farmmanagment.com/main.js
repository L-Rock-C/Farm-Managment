document.addEventListener('DOMContentLoaded', () => {
    const radioButtons = document.querySelectorAll('input[type="radio"]');
    const labels = document.querySelectorAll('label');

    radioButtons.forEach(radio => {
        radio.addEventListener('change', () => {
            // Remove the highlight class from all labels
            labels.forEach(label => label.classList.remove('user-highlight'));

            // Find the corresponding label and add the highlight class
            const label = document.querySelector(`label[for="${radio.id}"]`);
            label.classList.add('user-highlight');
        });
    });
});