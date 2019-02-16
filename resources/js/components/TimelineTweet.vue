<template>
    <section class="col-md-8">
        <section class="card ctn-create-tweet">
        <section class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Quoi de neuf aujourd'hui ? </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn_blue_principal">Twitter</button>
            </form>
        </section>
    </section>
    <section class="card ctn-tweet mt-3">
        <section class="card-body">
            <article class="tweet">
                <div class="icon_profile">
                    <img src="{{ asset('pictures/profile_twitter.jpeg') }}" alt="">
                </div>
                <div class="content-tweet">
                    <p class="txt-tweet">
                        <span>Name Profile</span>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam, corporis dolor dolore eius ex expedita id laborum magni minus, molestias nulla pariatur quasi quidem sapiente ullam velit vitae. Repellendus!
                    </p>
                    <img src="{{ asset('pictures/img_twitter.jpg') }}" alt="" class="tweet">
                </div>
            </article>
        </section>
    </section>
    </section>
</template>

<script>
    export default {
        name: "TimelineTweet"
    }
</script>

<style scoped>

</style>