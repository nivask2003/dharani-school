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



    const autoClose = true;

document.querySelectorAll('.acc-item').forEach(el => {
  const summary = el.querySelector('summary');
  const wrapper = el.querySelector('.content-wrapper');

  summary.onclick = (e) => {
    e.preventDefault();
    const isOpen = el.classList.contains('is-open');

	if (isOpen) {
	  el.classList.remove('is-open');
	  wrapper.style.height = '0px';
	  setTimeout(() => el.open = false, 310);
	} else {
	  if (autoClose) {
		document.querySelectorAll('.acc-item.is-open').forEach(openItem => {
		  openItem.classList.remove('is-open');
		  openItem.querySelector('.content-wrapper').style.height = '0px';
		  setTimeout(() => openItem.open = false, 310);
		});
	  }
	  el.open = true;
      el.classList.add('is-open');
      wrapper.style.height = wrapper.querySelector('.content-body').scrollHeight + 'px';
	}
  };
});    

document.addEventListener("DOMContentLoaded", function () {

    const tabs = document.querySelectorAll(".education-tab");
    const contents = document.querySelectorAll(".education-content-box");

    tabs.forEach(tab => {

        tab.addEventListener("click", function () {

            tabs.forEach(item => item.classList.remove("active"));
            contents.forEach(item => item.classList.remove("active"));

            this.classList.add("active");

            const target = this.getAttribute("data-tab");
            document.getElementById(target).classList.add("active");

        });

    });

});
