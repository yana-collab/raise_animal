<template>
    <div>
        <ul class="header">
            <li class="add_btn"><router-link :to="{name:'categories'}">
                <img src="../img/add_btn.png">
            </router-link></li>
            <li>
                <router-link :to="{name: 'animals'}" style="text-decoration: none"><img class="house_img" src="../img/animals_house.png">
                    <p>Посмотреть всех</p>
                </router-link>
            </li>
        </ul>
    </div>
    <div class="container">
        <router-view></router-view>
    </div>
</template>

