window.addEventListener("scroll", function () {

    const header = document.getElementById("mainHeader");

    if (window.scrollY > 100) {
        header.classList.add("sticky-header");
    } else {
        header.classList.remove("sticky-header");
    }

});





 // Filter Gallery

        const filterButtons = document.querySelectorAll(".filter-btn");
        const galleryItems = document.querySelectorAll(".gallery-item");

        filterButtons.forEach(button => {

            button.addEventListener("click", () => {

                filterButtons.forEach(btn => btn.classList.remove("active"));

                button.classList.add("active");

                const filter = button.getAttribute("data-filter");

                galleryItems.forEach(item => {

                    if (filter === "all" || item.classList.contains(filter)) {

                        item.classList.remove("hide");

                    } else {

                        item.classList.add("hide");

                    }

                });

            });

        });

        // Popup Image

        function showGalleryImage(element) {

            let imageSrc = element.getAttribute("href");

            document.getElementById("galleryModalImage").src = imageSrc;

        }



        