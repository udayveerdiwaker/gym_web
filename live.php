<?php
include 'header.php';
?>
<!-- Use preprocessors via the lang attribute! e.g. <template lang="pug"> -->
<template>
    <div id="app">
        <section class="section container">
            <h1 class="title">Show / Hide Password In Vue</h1>
            <p class="content">
                This Pen demonstrates a feature that lets the user view the unmasked contents of a password field. A <code>showPassword</code> flag controls whether or not the user is working with a type="text" or type="password" input control. Type in the password field and press the eye icon to show or hide the password.
            </p>
            <div class="columns is-mobile is-centered has-text-centered">
                <div class="column is-three-quarters-mobile is-two-thirds-tablet is-half-desktop is-one-third-widescreen is-one-quarter-fullhd">
                    <div class="card">
                        <div class="card-content">
                            <div class="field">
                                <label class="label">Username</label>
                                <div class="control">
                                    <input type="text" class="input" />
                                </div>
                            </div>
                            <label class="label">Password</label>
                            <div class="field has-addons">
                                <div class="control is-expanded">
                                    <input v-if="showPassword" type="text" class="input" v-model="password" />
                                    <input v-else type="password" class="input" v-model="password">
                                </div>
                                <div class="control">
                                    <button class="button" @click="toggleShow"><span class="icon is-small is-right">
                                            <i class="fas" :class="{ 'fa-eye-slash': showPassword, 'fa-eye': !showPassword }"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button class="button is-success card-footer-item">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                showPassword: false,
                password: null
            };
        },
        computed: {
            buttonLabel() {
                return (this.showPassword) ? "Hide" : "Show";
            }
        },
        methods: {
            toggleShow() {
                this.showPassword = !this.showPassword;
            }
        }
    };
</script>