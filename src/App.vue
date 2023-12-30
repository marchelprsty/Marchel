<template>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <router-link :to="{ name: 'home' }" class="nav-link">HOME</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{ name: 'mahasiswa.index' }" class="nav-link">DATA MAHASISWA</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>