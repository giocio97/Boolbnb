<template>
    <div class="index-card custom">
        <div class="card h-100">

            <div class="card_img_container">
                <img :src="`/storage/${apartment.image}`" class="card-img-top card_img" :alt="apartment.title">

            </div>
            <div class="index-card-text">
                <div class="index-cover-img-l">
                    <span>Rooms:</span>
                    <span>{{ apartment.rooms }}</span>
                    <br>
                    <i class="fa-solid fa-bed"></i><span>{{ apartment.beds }}</span>
                    <br>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>{{ apartment.address }}</span>
                </div>
                <p class=" title">{{ apartment.title }}</p>
                <div class="description">
                    <p>{{ apartment.description }}</p>
                </div>
                <!-- services -->
                <div class="description">
                    <span class="show-price">Services included: </span>
                    <ul>
                        <li v-for="service in apartment.services" :key="service.id">{{ service.name }}</li>
                    </ul>
                </div>
            </div>
            <div class="card-footer">
                <small class="text-muted">{{ apartment.price }}€</small>
            </div>
            <div class="index-card-price" style="width: 100%">
                <router-link :to="{name: 'show', params: {id: apartment.id} }" class="index-btn">Read</router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CardApartment',
    props: {
        apartment: Object,
    }
}
</script>

<style>
.card_img_container {
    max-height: 170px;
}

.card_img {
    object-fit: cover;
    height: 100%;
}

.title {
    color: #df5656;
}

.description {
    height: 90px;
    overflow: scroll;
}
</style>
