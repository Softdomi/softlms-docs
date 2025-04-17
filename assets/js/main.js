function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('svg');
    
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

document.addEventListener('DOMContentLoaded', function() {
    const monthlyBtn = document.getElementById('monthly-pricing');
    const annualBtn = document.getElementById('annual-pricing');
    
    // Add event listeners for toggle buttons
    monthlyBtn.addEventListener('click', function() {
        monthlyBtn.classList.add('bg-primary', 'text-white');
        annualBtn.classList.remove('bg-primary', 'text-white');
        // Logic to update prices would go here
    });
    
    annualBtn.addEventListener('click', function() {
        annualBtn.classList.add('bg-primary', 'text-white');
        monthlyBtn.classList.remove('bg-primary', 'text-white');
        // Logic to update prices would go here
    });
});