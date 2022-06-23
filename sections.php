
            <!-- homepage -->
            <section class="sections" data-section-id="0">
                <div class="main-heading">
                    <h1>Krisp1k</h1>
                </div>
                <div class="description">
                    <div>
                        <p>Student, Front-end Developer, Graphic Designer and a music enthusiast</p>
                    </div>
                </div>
            </section>

            <!-- about me -->
            <section class="sections" data-section-id="1">
                <div class="main-heading">
                    <h1>About me</h1>
                </div>
                <div class="description">
                    <div>
                        <div>
                            <p>So hey, I'm just a regular Czech student.</p>
                            <p>I like to experiment and I think of commissions as something more than just a way of making money.</p>
                            <p>My goal is to always meet the wishes I get so my clients are 100% satisfied.</p>
                        </div>
                        <div>
                            <p class="description-special-p">I'm taught in</p>
                            <ul class="about-ul">
                                <li><span class="about-li">Web Development</span> (HTML, CSS, JS)</li>
                                <li><span class="about-li">Graphic Design</span> (Photoshop, CorelDraw)</li>
                                <li><span class="about-li">a bit of programming</span> (Python, PHP)</li>
                                <li><span class="about-li">video editing</span> (DaVinci Resolve 17)</li>
                            </ul>
                        </div>
                        <div>
                            <p class="description-special-p">Things I offer are listed in <span class="bigger">Prices & services</span> section and more details are in the <span class="bigger">FaQ</span> section.</p>
                        </div>
                    </div>
                    <div class="socials">
                        <div>
                            <a href="http://krispjs.funsite.cz/" target="_blank" id="js-projects">My JS projects</a>
                        </div>
                        <div>
                            <a href="https://github.com/Krisp1k" target="_blank" id="github-icon">
                                <img src="GitHub-Mark.webp" alt="Github Icon" title="Github">
                            </a>
                            <span class="github-text">
                                <b>Github</b> 
                                <br>
                                I upload random stuff here every once in a while.
                            </span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- faq -->
            <section class="sections" data-section-id="2">
                <div class="main-heading">
                    <h1>FaQ</h1>
                </div>
                <div class="description">
                    <div class="seznam-container">
                        
                        <div class="seznam-child">
                            <div class="seznam-button-container">
                                <button class="seznam-btn" data-id="0">Open</button>
                                <h1 class="seznam-heading">Why so anonymous?</h1>
                            </div>

                            <div class="seznam-child-content" id="seznam-1">
                                Simple, being anonymous makes me a free dev. This way, if I ever get any not so SFW commissions, I won't have problems with clients such as official companies. These sorta clients could mind having a service from someone who doesn't always follow family friendly standards.
                            </div>
                        </div>

                        <div class="seznam-child">
                            <div class="seznam-button-container">
                                <button class="seznam-btn" data-id="1">Open</button>
                                <h1 class="seznam-heading">Prices too high?</h1>
                            </div>
                            <div class="seznam-child-content" id="seznam-2">
                                Being a student might make you pretty busy. Doing websites, Graphic design etc. are
                                things I'm passionate about and I want them to shape my future, therefore I put them together with making money and so here we are. The prices I'm offering are not even that high compared to professional work.
                                <br>
                                <i>we MIGHT make a cheaper deal if I feel like it</i>
                            </div>
                        </div>

                        <div class="seznam-child">
                            <div class="seznam-button-container">
                                <button class="seznam-btn" data-id="2">Open</button>
                                <h1 class="seznam-heading">Process of making?</h1>
                            </div>
                            <div class="seznam-child-content" id="seznam-3">
                                My services are 24/7 under YOUR control. You rule, I create. My clients receive WIPs (Work In Progress content) such as images or a dedicated URL adress where they can check their WIP website themselves. 
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- services & work -->
            <section class="sections" data-section-id="3">
                <div class="main-heading">
                    <h1>Services & work</h1>
                </div>
                <div class="description">
                    <div class="work-sub-desc">
                        <p class="commissions">E-Commissions are OPEN</p>
                        <p>Please DISCUSS everything with me. I can't read your mind, so provide me with information before I get to work.</p>
                        <p>All payments go through my <a href="#" target="blank">PayPal</a>, I don't accept refunds.</p>
                        <p>My main focus are <u>websites</u>.</p>
                    </div>
                    <div>
                        <div class="prices-row">
                            <div class="prices-item">
                                <button class="prices-btn" onclick="toggleWebsites()" data-p-b-id="0">Websites</button>
                            </div>
                            <div class="prices-item">
                                <button class="prices-btn" onclick="toggleGraphic()" data-p-b-id="1">Graphic
                                    Design</button>
                            </div>
                            <div class="prices-item">
                                <button class="prices-btn" onclick="toggleOthers()" data-p-b-id="2">Other</button>
                            </div>
                        </div>
                        <div class="work-container">
                            <h2>My Clients</h2>
                            <div class="work-row">

                                <div class="work-row-child">
                                    <div class="work-row-child-heading">
                                        <p>Kager Official</p>
                                    </div>
                                    <div class="work-row-child-image" id="work-one-img"></div>
                                    <div class="work-row-child-desc">
                                        <p>What was included :</p>
                                        <p><a href="https://kagerofficial.xyz/" target="_blank">Website</a></p>
                                        <p><a href="https://www.twitch.tv/kgr_official" target="_blank">Twitch Graphics</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- contact -->
            <section class="sections" data-section-id="4">
                <div class="main-heading">
                    <h1>Contact</h1>
                </div>
                <div class="description">
                    <div>
                        <p>Please fill out the form below or directly message me on Discord <span class="about-li">(Krisp1k#8008)</span></p>
                    </div>
                    <style>.required-field {color:rgb(175, 38, 38); }</style>
                    <div class="form">
                        <form method="POST" action="submit_form.php">
                            <div class="form-group">
                                <label for="service"><span class="required-field">*</span> What do you want from me ?</label>
                                <select name="service" id="select-service">
                                    <option value="Choose option" disabled selected>Choose option</option>
                                    <option value="Web Development - Coded Website">Web Development - Coded Website</option>
                                    <option value="Web Development - Wordpress">Web Development - Wordpress</option>
                                    <option value="Graphic design - Logo" >Graphic design - Logo</option>
                                    <option value="Graphic design - Twitch Graphics">Graphic design - Twitch Graphics</option>
                                    <option value="Video Editing">Video Editing</option>
                                    <option value="Something else (please include in the field below)">Something else (please include in the field below)</option>
                                </select>
                                <span class="form-group-note">Please select something or else your email won't be submitted.</span>
                            </div>
                            <div class="form-group">
                                <label for="name"><span class="required-field">*</span> Your name:</label>
                                <input type="text" name="name" required class="form-input">
                                <span class="form-group-note">Your real name or nickname, depends on what you prefer.</span>
                            </div>
                            <div class="form-group">
                                <label for="email"><span class="required-field">*</span> Your e-mail:</label>
                                <input type="email" name="email" required class="form-input">
                                <span class="form-group-note">Your e-mail adress which you will use for our communication.</span>
                            </div>
                            <div class="form-group">
                                <label for="textarea">Anything to say:</label>
                                <textarea name="textarea" id="textarea" cols="30" rows="10" min="0" maxlength="666"></textarea>
                                <span class="form-group-note"><span id="words"></span> characters left</span>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" id="submit-form">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
