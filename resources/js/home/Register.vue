<template>
    <section id="register" class="content-section">
        <div id="contact-content">
            <div class="section-heading">
                <h1><em>Join Us</em><br/>Us</h1>
            </div>
            <div class="section-content">

            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#individual">Individual</a></li>
                        <li><a data-toggle="tab" href="#team">Team</a></li>
                    </ul>
                </div>
                <div class="card-body col-md-6 offset-md-3">
                    <div class="tab-content">
                        <div id="individual" class="tab-pane fade in active ">
                            <h2>Individual</h2>
                            <form @submit.prevent="registerPlayer">
                                <div class="mb-5">
                                    <p v-if="errors.player.length" class="alert alert-danger"><b>Please correct the following error(s):</b></p>
                                    <small class="alert alert-warning" v-for="error in errors.player">{{ error }}</small>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input
                                                v-model="player.name"
                                                type="text"
                                                class="form-control"
                                                placeholder="Your name..."
                                                />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input
                                                v-model="player.email"
                                                type="email" class="form-control"
                                                   placeholder="Your Email..." />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input
                                                v-model="player.password"
                                                type="password" class="form-control"
                                                   placeholder="Your Password..." />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input
                                                v-model="player.lolid"
                                                type="text" class="form-control"
                                                   placeholder="Your League of Legends Username..." />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 15px;">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="form-control-plaintext text-left" >Primary Lane</label>
                                                </div>
                                                <div class="col-6">
                                                    <select v-model="player.lane1" class="form-control"
                                                            placeholder="Your name..." >
                                                        <option value="Top">Top</option>
                                                        <option value="Mid">Mid</option>
                                                        <option value="Bot">Bot</option>
                                                        <option value="Support">Support</option>
                                                        <option value="Jungle">Jungle</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col" style="margin-bottom: 15px;">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="form-control-plaintext text-left" >Secondary Lane</label>
                                                </div>
                                                <div class="col-6">
                                                    <select v-model="player.lane2" class="form-control"
                                                            placeholder="Your name..." >
                                                        <option value="Top">Top</option>
                                                        <option value="Mid">Mid</option>
                                                        <option value="Bot">Bot</option>
                                                        <option value="Support">Support</option>
                                                        <option value="Jungle">Jungle</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <button type="submit" class="btn">Apply Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="team" class="tab-pane fade">
                            <form @submit.prevent="registerTeam">
                                <h2>Team</h2>
                                <div class="mb-5">
                                    <p v-if="errors.team.length" class="alert alert-danger"><b>Please correct the following error(s):</b></p>
                                    <small class="alert alert-warning" v-for="error in errors.team">{{ error }}</small>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input
                                                v-model="team.name"
                                                type="text"
                                                class="form-control"
                                                placeholder="Your Team Name..." />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input @change="onFileSelected" type="file" class="form-control"/>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input
                                                v-model="player.email"
                                                type="email"
                                                class="form-control"
                                                placeholder="Team Leader Email..." />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <fieldset>
                                            <input
                                                v-model="player.password"
                                                type="password"
                                                class="form-control"
                                                placeholder="Enter temporary team password..." />
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 15px">
                                    <div class="col">
                                        <fieldset>
                                            <button type="submit" class="btn">Create Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            </div>
        </div>
    </section>
</template>

<script>
    import axios from 'axios';
    import Swal from 'sweetalert2';
    export default{
        data: ()=>{
            return{
                errors: {
                    player: [],
                    team: []
                },
                player: {
                    name: '',
                    email: '',
                    password: '',
                    lolid: '',
                    lane1: '',
                    lane2: ''
                },
                team: {
                    name: '',
                    image: ''
                },
                teamplayer: {
                    user_id: '',
                    team_id: ''
                }
            }
        },
        methods: {
            onFileSelected(event){
                var file = event.target.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    this.team.image = reader.result;
                };
                reader.onerror = (error) => {
                    console.log('Error', error);
                }

            },
            registerPlayer(){
                // this.errors.player = [];
                // if(!this.player.email){
                //     this.errors.player.push("Email Required!");
                // }
                // if(!this.player.password){
                //     this.errors.player.push("Password Required!");
                // }
                if(!this.errors.player.length){
                    axios.post('/api/user', this.player)
                        .then((result) =>{
                            Swal.fire(
                                'Congratulations!',
                                'You are a proud Member of Teamwork',
                                'success'
                            );
                            console.log(result.data);

                            this.teamplayer.user_id = result.data[0].id;
                        }).catch((error) => {
                        console.log(error.toString());
                    });
                }
            },
            registerTeam(){
                this.errors.team = [];
                if(!this.team.name){
                    this.errors.team.push("Team Name Required");
                }
                if(!this.player.email){
                    this.errors.team.push("Admin Email Required!");
                }
                if(!this.player.password){
                    this.errors.team.push("Password Required!");
                }
                if(!this.errors.team.length){
                    console.log("IMage", this.team.image);
                    axios.post('/api/team', this.team)
                        .then((result)=>{
                            this.teamplayer.team_id = result.data[0].id;
                            axios.post('/api/user', this.player)
                                .then((result) =>{
                                    Swal.fire(
                                        'Congratulations!',
                                        'You are a proud Member of Teamwork',
                                        'success'
                                    );
                                    this.teamplayer.user_id = result.data[0].id;
                                    axios.post('/api/teamplayer', this.teamplayer)
                                        .then((stress) =>{
                                        }).catch((stress_error) => {
                                        alert("wtf");
                                    });
                                }).catch((error) => {
                                console.log(error.toString());
                            });

                        }).catch((error) =>{
                            alert("Team save crashed!")
                    });
                }

            }
        }
    }
</script>

