const counters = document.querySelectorAll('.counter');

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if (entry.isIntersecting) {

            const counter = entry.target;

            const target = parseInt(counter.dataset.target);

            const prefix = counter.dataset.prefix || '';

            const suffix = counter.dataset.suffix || '';

            let current = 0;

            const increment = target / 80;

            const updateCounter = () => {

                if (current < target) {

                    current += increment;

                    counter.innerText =
                        prefix +
                        Math.ceil(current) +
                        suffix;

                    requestAnimationFrame(updateCounter);

                } else {

                    counter.innerText =
                        prefix +
                        target +
                        suffix;
                }
            };

            updateCounter();

            observer.unobserve(counter);
        }
    });

}, {
    threshold: 0.5
});

counters.forEach(counter => {
    observer.observe(counter);
});