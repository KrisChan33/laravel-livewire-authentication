import "./bootstrap";

window.addEventListener("alert", (event) => {
    console.log(event);
    Swal.fire("SweetAlert2 is working!");
});
