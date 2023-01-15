

export function add_class_scrollWindow() {

    window.addEventListener("DOMContentLoaded", (e) => {
        const widthScreen = window.innerWidth;
        const headerNode = document.querySelector("header");
        if (widthScreen > 864) {
            if (window.scrollY > 100) {
                headerNode.classList.add("bg-black");
            }
            else {
                headerNode.classList.remove("bg-black");
            }
            window.addEventListener("scroll", () => {
                const topHeader = window.scrollY;
                if (topHeader > 100) {
                    headerNode.classList.add("bg-black");
                }
                else {
                    headerNode.classList.remove("bg-black");
                }
            });
        }
    });

}