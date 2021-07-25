<template>
    <div class="nav-bar">
        <div class="container ">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center py-3">
                    <img src="/images/address.png" alt="" class="me-3">
                    <p class="m-0">
                        387 Railroad Court Palmetto, FL 34221
                    </p>
                </div>
                <div class="col-md-2 d-flex align-items-center py-2 justify-content-end">
                    <img src="/images/email.png" alt="" class="me-3">
                    <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
                </div>
                <div class="col-md-2 d-flex align-items-center py-2 justify-content-end">
                    <img src="/images/phone.png" alt="" class="me-3">
                    <p class="m-0"> +(123) 456 789</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
.nav-bar {
    background: #2b3948;
    p{
        color: #fff;
    }
    a{
        color: #fff;
        text-decoration: none;
    }
}
</style>
