export default {
    name: 'app',
    setup() {
        const msg = "Vue3";
        return { msg }
    },
    data() {
        return {
            msg: "Vue3"
        }
    },
    template: `<router-view />`,
}