import "./bootstrap";

import { createInertiaApp } from "@inertiajs/svelte";

createInertiaApp({
    id: "app",
    resolve: (name) => {
        const pages = import.meta.glob("./pages/**/*.svelte", { eager: true });
        return pages[`./pages/${name}.svelte`];
    },
    setup({ el, App, props }) {
        new App({ target: el, props });
    },
});
