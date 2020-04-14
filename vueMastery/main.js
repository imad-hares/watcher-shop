const app = new Vue({
    el: "#app",
    data: {
        product: "Socks",
        brand: "Computed",
        description: "A pair of warm, fuzzy socks",
        selectedVariant: 0,
        altText: "A pair of Socks",
        imageLink: "https://github.com/vuejs/vue-devtools",
        inventory: 10,
        onSale: true,
        details: ["80% Cotton", "20% Polyester", "gender-neutral"],

        variants: [
            {
                variantId: 2234,
                variantColor: "green",
                variantImage: "./img/socks-green.png",
                variantQuantity: 10
            },
            {
                variantId: 2235,
                variantColor: "blue",
                variantImage: "./img/socks-blue.png",
                variantQuantity: 0
            }
        ],
        sizes: ["41", "42", "43", "44"],
        cart: 0
    },
    //METHODS
    methods: {
        addToCart() {
            this.cart += 1;
        },
        updateProduct(index) {
            this.selectedVariant = index;
        }
    },

    //COMPUTED PROPERTIES
    computed: {
        title() {
            return this.brand + " " + this.product;
        },
        image() {
            return this.variants[this.selectedVariant].variantImage;
        },
        inStock() {
            return this.variants[this.selectedVariant].variantQuantity;
        }
    }
});
