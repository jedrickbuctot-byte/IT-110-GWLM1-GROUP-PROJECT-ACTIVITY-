document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contactForm');
    const successMessage = document.getElementById('successMessage');

    if (!(form instanceof HTMLFormElement)) {
        return;
    }

    const fields = [
        {
            input: document.getElementById('fullName'),
            error: document.getElementById('nameError'),
            message: 'Please enter your full name.'
        },
        {
            input: document.getElementById('email'),
            error: document.getElementById('emailError'),
            message: 'Please enter your email address.'
        },
        {
            input: document.getElementById('subject'),
            error: document.getElementById('subjectError'),
            message: 'Please enter a subject.'
        },
        {
            input: document.getElementById('message'),
            error: document.getElementById('messageError'),
            message: 'Please enter your message.'
        }
    ];

    function validateField(field) {
        const value = field.input.value.trim();
        let errorMessage = '';

        if (!value) {
            errorMessage = field.message;
        } else if (field.input.id === 'email') {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(value)) {
                errorMessage = 'Please enter a valid email address.';
            }
        }

        field.error.textContent = errorMessage;
        field.input.classList.toggle('invalid', errorMessage !== '');
        field.input.setAttribute('aria-invalid', String(errorMessage !== ''));

        return errorMessage === '';
    }

    fields.forEach(function (field) {
        field.input.addEventListener('blur', function () {
            validateField(field);
        });

        field.input.addEventListener('input', function () {
            successMessage.classList.remove('show');

            if (field.input.getAttribute('aria-invalid') === 'true') {
                validateField(field);
            }
        });
    });

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        successMessage.classList.remove('show');

        let isValid = true;

        fields.forEach(function (field) {
            if (!validateField(field)) {
                isValid = false;
            }
        });

        if (!isValid) {
            return;
        }

        successMessage.classList.add('show');
        form.reset();

        fields.forEach(function (field) {
            field.error.textContent = '';
            field.input.classList.remove('invalid');
            field.input.setAttribute('aria-invalid', 'false');
        });
    });
});
