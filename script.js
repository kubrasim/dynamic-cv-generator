// Inputları ve Preview alanlarını eşleştirme
const inputs = ['ad', 'email', 'telefon', 'egitim', 'deneyim', 'yetenek'];

inputs.forEach(id => {
    document.getElementById(`input-${id}`).addEventListener('input', (e) => {
        document.getElementById(`preview-${id}`).innerText = e.target.value;
    });
});