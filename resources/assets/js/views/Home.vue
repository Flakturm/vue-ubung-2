<template lang="html">

    <div class="container">

        <div class="columns">

            <div class="column">

                <div class="message" v-for="status in statuses">

                    <div class="message-header">
                        {{ status.user.name }} said...

                        <p>
                            {{ status.created_at | ago }}
                        </p>
                    </div>

                    <div class="message-body" v-text="status.body"></div>

                </div>

            </div>

        </div>

    </div>

</template>

<script>

import moment from 'moment';
import Status from '../models/Status';

export default {

    data() {

        return {

            statuses: []

        }

    },

    filters: {

        ago(date) {

            return moment(date).fromNow();

        }

    },

    created() {

        Status.all(statuses => this.statuses = statuses);

    },
}
</script>

<style lang="css">
</style>
