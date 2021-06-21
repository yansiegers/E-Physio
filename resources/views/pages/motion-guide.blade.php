@section('title', 'Design Kit')

    <x-test-layout>
        <link rel="stylesheet"
            href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


        <!-- Section 1 -->

        <section class="px-2 pt-20 md:px-0 h-full" style="background-color: #000">
            <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
                <h1 class="text-4xl font-extrabold text-center sm:text-5xl md:text-6xl md:text-center">
                    <span class="block text-eph-white">Motion guide E-Physio</span>
                </h1>
                <p class="w-full mx-auto text-center sm:text-lg lg:text-2xl md:max-w-3xl md:text-center"
                    style="color: #8B8B8C;">
                    In deze motion guide zijn alle css animaties binnen het product van e-physio afgebeeld. Met daarbij een
                    onderbouwing over hoe en waarom de animatie is toegepast.
                </p>
                <div class="relative flex flex-col justify-center md:flex-row md:space-x-4">
                    <div class="flex justify-center gap-4">
                        <span
                            class="inline-flex text-eph-white font-base border-eph-purple border-4 py-2 px-6 rounded-full">Soepel</span>
                        <span
                            class="inline-flex text-eph-white font-base border-eph-purple border-4 py-2 px-6 rounded-full">Flexibel</span>
                        <span
                            class="inline-flex text-eph-white font-base border-eph-purple border-4 py-2 px-6 rounded-full">Vlot</span>
                        <span
                            class="inline-flex text-eph-white font-base border-eph-purple border-4 py-2 px-6 rounded-full">Toegankelijk</span>
                    </div>
                </div>
            </div>
            <div class="container items-center max-w-4xl px-5 mx-auto mt-16 text-center">
                <img src="img/hero-img.svg">
            </div>
        </section>

        <!-- Section 2 -->
        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24" style="background-color: #fff;">
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">


                <!-- Content -->
                <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
                    <div
                        class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                        <h5 class="heading-h5 sm:text-3xl text-2xl font-medium title-font mb-2" style="color: #2C303D;">
                            Pulse animatie</h5>

                        <p class="leading-relaxed text-base" style="color: #929DB1;">Kan worden toegepast als de
                            call-to-action 'nog' beter onder de aandacht gebracht moet worden.</p>

                        <div class="mt-7 flex items-center bg-eph-purple-light text-eph-purple rounded-full text-sm font-bold px-4 py-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>Kopieër onderstaande code om de animatie te gebruiken.</p>
                        </div>


                        <h6 class="text-eph-black prose mt-12 font-bold">Classes</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div style=" overflow:auto;width:auto;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;button</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;pulse2-btn bg-eph-purple font-bold text-eph-white rounded-full py-5 px-10&quot;</span><span style="color: #f92672">&gt;</span>Pulse<span style="color: #f92672">&lt;/button&gt;</span>
    </pre>
                            </div>

                        </div>
                        <h6 class=" text-eph-black font-bold prose mt-12">CSS-code</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div class="my-6 prose max-h-40 bg-eph-black overflow-hidden rounded-xl"
                                style="overflow-y: scroll;">
                                <div style="background: #272822; overflow:auto;width:auto;">
                                    <pre style="margin: 0; line-height: 125%"> <span style="color: #a6e22e">.pulse2-btn</span> <span style="color: #f8f8f2">{</span>
       <span style="color: #f8f8f2">animation</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">pulse2</span> <span style="color: #ae81ff">1.5s</span> <span style="color: #f8f8f2">infinite;</span>
       <span style="color: #f8f8f2">}</span>

       <span style="color: #66d9ef">@keyframes</span> <span style="color: #f92672">pulse2</span> <span style="color: #f8f8f2">{</span>
          <span style="color: #f92672">0%</span> <span style="color: #f8f8f2">{</span>
              <span style="color: #f8f8f2">transform</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">scale(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">.</span><span style="color: #ae81ff">9</span><span style="color: #f8f8f2">);</span>
              <span style="color: #f8f8f2">box</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0px</span> <span style="color: #66d9ef">rgb</span><span style="color: #f8f8f2">(</span><span style="color: #ae81ff">168</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">80</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">255</span><span style="color: #f8f8f2">);</span>
       <span style="color: #f8f8f2">}</span>
          <span style="color: #f92672">70%</span> <span style="color: #f8f8f2">{</span>
              <span style="color: #f8f8f2">transform</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">scale(</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
              <span style="color: #f8f8f2">box</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">11px</span> <span style="color: #f8f8f2">rgba(</span><span style="color: #ae81ff">88</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">120</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">243</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">);</span>
       <span style="color: #f8f8f2">}</span>
          <span style="color: #f92672">100%</span> <span style="color: #f8f8f2">{</span>
               <span style="color: #f8f8f2">transform</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">scale(</span><span style="color: #ae81ff">0</span><span style="color: #f92672">.</span><span style="color: #ae81ff">9</span><span style="color: #f8f8f2">);</span>
               <span style="color: #f8f8f2">box</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #f8f8f2">rgba(</span><span style="color: #ae81ff">88</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">120</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">243</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">);</span>
         <span style="color: #f8f8f2">}</span>
       <span style="color: #f8f8f2">}</span>
       </pre>
                                </div>


                            </div>
                        </div>

                    </div>

                    <style>
                        .pulse2-btn {
                            animation: pulse2 1.5s infinite;
                        }

                        @keyframes pulse2 {
                            0% {
                                transform: scale(0.9);
                                box-shadow: 0 0 0 0px rgb(168, 80, 255);
                            }

                            70% {
                                transform: scale(1);
                                box-shadow: 0 0 0 11px rgba(88, 120, 243, 0);
                            }

                            100% {
                                transform: scale(0.9);
                                box-shadow: 0 0 0 0 rgba(88, 120, 243, 0);
                            }
                        }

                    </style>
                    <div class="flex flex-col md:w-1/2 md:pl-12 items-center">
                        <button
                            class="pulse2-btn bg-eph-purple font-bold text-eph-white rounded-full py-5 px-10">Pulse</button>
                    </div>

                </div>
                <!-- End  Content -->
            </div>
        </section>

        <!-- Section 3 -->

        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24" style="background-color: #f8f7fc;">
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">


                <!-- Content -->
                <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
                    <div
                        class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                        <h5 class="heading-h5 sm:text-3xl text-2xl font-medium title-font mb-2" style="color: #2C303D;">
                            Hover en link</h5>
                        <p class="leading-relaxed text-base" style="color: #929DB1;">Deze animaties zitten verwerkt binnen
                            de websitee en zijn voorzien van een subtiele transitie die aan de basis principes van motion
                            design voldoen.</p>

                        <div class="mt-7 flex items-center bg-eph-purple-light text-eph-purple rounded-full text-sm font-bold px-4 py-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>Kopieër onderstaande code om de animatie te gebruiken.</p>
                        </div>

                        <h6 class="text-eph-black prose mt-12 font-bold">Class 'Outline'</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div style="soverflow:auto;width:auto;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;button</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;bg-transparant font-bold text-eph-purple hover:text-eph-white rounded-full py-5 px-10 border-eph-purple border-2 hover:bg-eph-purple transition duration-200&quot;</span><span style="color: #f92672">&gt;</span>Outline<span style="color: #f92672">&lt;/button&gt;</span>
    </pre>
                            </div>
                        </div>

                        <h6 class=" text-eph-black font-bold prose mt-12">Class 'login' ('mt-12' verwijderen)</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div style="overflow:auto;width:auto;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;button</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;mt-12 bg-transparant font-bold text-eph-grey hover:text-eph-white rounded-full py-5 px-10 border-eph-grey border-2 hover:bg-eph-grey transition duration-200&quot;</span><span style="color: #f92672">&gt;</span>Login<span style="color: #f92672">&lt;/button&gt;</span>
    </pre>
                            </div>

                        </div>

                        <h6 class=" text-eph-black font-bold prose mt-12">Class 'Lees verder' ('mt-12' verwijderen)</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div style="overflow:auto;width:auto;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;p</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;font-bold text-link inline-block cursor-pointer mt-12 text-eph-purple&quot;</span><span style="color: #f92672">&gt;&lt;a</span> <span style="color: #a6e22e">href=</span><span style="color: #e6db74">&quot;#&quot;</span><span style="color: #f92672">&gt;</span>Lees verder<span style="color: #f92672">&lt;/a&gt;&lt;/p&gt;</span>
    </pre>
                            </div>

                        </div>

                        <h6 class=" text-eph-black font-bold prose mt-12">CSS 'Lees verder'</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div class=" my-6 prose max-h-40 bg-eph-black overflow-hidden rounded-xl"
                                style="overflow-y: scroll;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #a6e22e">.line</span><span style="color: #f8f8f2">{</span>
       <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span><span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
       <span style="color: #f8f8f2">}</span>

       <span style="color: #a6e22e">.line:after</span><span style="color: #f8f8f2">{</span>
         <span style="color: #66d9ef">content</span><span style="color: #f92672">:</span><span style="color: #e6db74">&quot;&quot;</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#D9EDF8</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span><span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">left</span><span style="color: #f92672">:</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">right</span><span style="color: #f92672">:</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">top</span><span style="color: #f92672">:</span><span style="color: #ae81ff">65</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">bottom</span><span style="color: #f92672">:</span><span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span><span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">height</span><span style="color: #f92672">:</span><span style="color: #ae81ff">20</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">z-index</span><span style="color: #f92672">:-</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">;</span>
       <span style="color: #f8f8f2">}</span>

       <span style="color: #a6e22e">.text-link</span><span style="color: #f92672">:</span><span style="color: #a6e22e">:after</span> <span style="color: #f8f8f2">{</span>
         <span style="color: #66d9ef">content</span><span style="color: #f92672">:</span> <span style="color: #e6db74">&quot;&quot;</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2px</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">border</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100px</span><span style="color: #f8f8f2">;</span>
         <span style="color: #66d9ef">background</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#a850ff</span><span style="color: #f8f8f2">;</span>
         <span style="color: #f8f8f2">transition</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">width</span> <span style="color: #ae81ff">0.3s</span> <span style="color: #f8f8f2">ease</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">in</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">out;</span>
       <span style="color: #f8f8f2">}</span>

       <span style="color: #a6e22e">.text-link:hover</span><span style="color: #f92672">:</span><span style="color: #a6e22e">:after</span> <span style="color: #f8f8f2">{</span>
         <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
       <span style="color: #f8f8f2">}</span>
       </pre>
                            </div>




                        </div>

                    </div>

                    <style>

                    </style>
                    <div class="flex flex-col md:w-1/2 md:pl-12 items-center">
                        <button
                            class="bg-transparant font-bold text-eph-purple hover:text-eph-white rounded-full py-5 px-10 border-eph-purple border-2 hover:bg-eph-purple transition duration-200">Outline</button>
                        <button
                            class="mt-12 bg-transparant font-bold text-eph-grey hover:text-eph-white rounded-full py-5 px-10 border-eph-grey border-2 hover:bg-eph-grey transition duration-200">Login</button>
                        <p class="font-bold text-link inline-block cursor-pointer mt-12 text-eph-purple"><a href="#">Lees
                                verder</a></p>
                    </div>

                    <style>
                        .line {
                            position: relative;
                        }

                        .line:after {
                            content: "";
                            background: #D9EDF8;
                            position: absolute;
                            left: 0;
                            right: 0;
                            top: 65%;
                            bottom: 0;
                            margin: auto;
                            height: 20%;
                            z-index: -1;
                        }

                        .text-link::after {
                            content: "";
                            display: block;
                            width: 0;
                            height: 2px;
                            border-radius: 100px;
                            background: #a850ff;
                            transition: width 0.3s ease-in-out;
                        }

                        .text-link:hover::after {
                            width: 100%;
                        }

                    </style>
                </div>
                <!-- End  Content -->
            </div>
        </section>

        <!-- Section 2 -->
        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24" style="background-color: #ffffff;">
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">


                <!-- Content -->
                <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
                    <div
                        class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                        <h5 class="heading-h5 sm:text-3xl text-2xl font-medium title-font mb-2" style="color: #2C303D;">
                            Input field</h5>
                        <p class="leading-relaxed text-base" style="color: #929DB1;">De input fields zitten verwerkt binnen
                            de onboarding en de website. Voorzien van een animatie die ervoor zorgt dat de gebruikers
                            duidelijkheid hebben wat er geselecteerd.</p>

                        <div class="mt-7 flex items-center bg-eph-purple-light text-eph-purple rounded-full text-sm font-bold px-4 py-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>Kopieër onderstaande code om de animatie te gebruiken.</p>
                        </div>

                        <h6 class="text-eph-black prose mt-12 font-bold">Input Class</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div style="overflow:auto;width:auto;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;flex flex-col md:w-1/2 md:pl-12 items-center&quot;</span><span style="color: #f92672">&gt;</span>
                    <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;input-group-four&quot;</span><span style="color: #f92672">&gt;</span>
                    <span style="color: #f92672">&lt;input</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;text&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;&quot;</span> <span style="color: #a6e22e">id=</span><span style="color: #e6db74">&quot;text3&quot;</span> <span style="color: #a6e22e">placeholder=</span><span style="color: #e6db74">&quot; &quot;</span> <span style="color: #f92672">/&gt;</span>
                    <span style="color: #f92672">&lt;label</span> <span style="color: #a6e22e">for=</span><span style="color: #e6db74">&quot;text3&quot;</span><span style="color: #f92672">&gt;</span>Input field<span style="color: #f92672">&lt;/label&gt;</span>
                <span style="color: #f92672">&lt;/div&gt;</span>
              <span style="color: #f92672">&lt;/div&gt;</span>
    </pre>
                            </div>

                        </div>
                        <h6 class=" text-eph-black font-bold prose mt-12">Input CSS</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div class=" my-6 prose max-h-40 bg-eph-black overflow-hidden rounded-xl"
                                style="overflow-y: scroll;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #a6e22e">.input-group-four</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">360px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">2px</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">#cccccd</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">border</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">8px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">32px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">500</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">transition</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0.2s</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
    <span style="color: #a6e22e">.input-group-four</span> <span style="color: #f92672">input</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span> <span style="color: #ae81ff">24px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">background-color</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">transparent</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#363636</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">24px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.input-group-four:hover</span><span style="color: #f92672">,</span>
    <span style="color: #a6e22e">.input-group-four:focus-within</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">border-color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#2c303d</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">500</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.input-group-four</span> <span style="color: #f92672">input</span><span style="color: #a6e22e">:focus</span><span style="color: #f92672">,</span>
    <span style="color: #a6e22e">.input-group-four:hover</span> <span style="color: #f92672">input</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#2c303d</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">500</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.input-group-four</span> <span style="color: #f92672">input</span><span style="color: #a6e22e">:focus</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">outline</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">box</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">shadow</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.input-group-four</span> <span style="color: #f92672">label</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">background-color</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">transparent</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span> <span style="color: #ae81ff">24px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">24px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">bottom</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#929db1</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">text</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-weight</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">500</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.input-group-four:hover</span> <span style="color: #f92672">label</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#2c303d</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">transition</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0.3s</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">transition</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">timing</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">function</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">cubic</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">bezier(</span><span style="color: #f92672">.</span><span style="color: #ae81ff">16</span><span style="color: #f92672">,</span> <span style="color: #f92672">.</span><span style="color: #ae81ff">78</span><span style="color: #f92672">,</span> <span style="color: #f92672">.</span><span style="color: #ae81ff">44</span><span style="color: #f92672">,</span> <span style="color: #ae81ff">1</span><span style="color: #f92672">.</span><span style="color: #ae81ff">02</span><span style="color: #f8f8f2">);</span>
    <span style="color: #f8f8f2">}</span>

    <span style="color: #a6e22e">.input-group-four:focus-within</span> <span style="color: #f92672">label,</span>
    <span style="color: #a6e22e">.input-group-four</span> <span style="color: #f92672">input</span><span style="color: #a6e22e">:not</span><span style="color: #f92672">(</span><span style="color: #a6e22e">:placeholder-shown</span><span style="color: #f92672">)</span> <span style="color: #f92672">~</span> <span style="color: #f92672">label</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0px</span> <span style="color: #ae81ff">8px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">background-color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#ffffff</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-12px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">16px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">bottom</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">auto</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#2c303d</span><span style="color: #f8f8f2">;</span>
      <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
    <span style="color: #f8f8f2">}</span>
    </pre>
                            </div>

                        </div>

                    </div>

                    <style>
                        .input-group-four {
                            width: 360px;
                            position: relative;
                            border: 2px solid #cccccd;
                            border-radius: 8px;
                            margin: 32px;
                            font-weight: 500;
                            font-size: 16px;
                            transition: 0.2s;
                        }

                        .input-group-four input {
                            padding: 16px 24px;
                            border: none;
                            background-color: transparent;
                            width: 100%;
                            color: #363636;
                            font-size: 16px;
                            line-height: 24px;
                        }

                        .input-group-four:hover,
                        .input-group-four:focus-within {
                            border-color: #2c303d;
                            font-weight: 500;
                            font-size: 16px;
                        }

                        .input-group-four input:focus,
                        .input-group-four:hover input {
                            color: #2c303d;
                            font-weight: 500;
                            font-size: 16px;
                        }

                        .input-group-four input:focus {
                            outline: none;
                            box-shadow: none;
                        }

                        .input-group-four label {
                            position: absolute;
                            background-color: transparent;
                            padding: 16px 24px;
                            line-height: 24px;
                            top: 0;
                            left: 0;
                            bottom: 0;
                            color: #929db1;
                            cursor: text;
                            font-weight: 500;
                            font-size: 16px;
                        }

                        .input-group-four:hover label {
                            color: #2c303d;
                            transition: 0.3s;
                            transition-timing-function: cubic-bezier(.16, .78, .44, 1.02);
                        }

                        .input-group-four:focus-within label,
                        .input-group-four input:not(:placeholder-shown)~label {
                            padding: 0px 8px;
                            background-color: #ffffff;
                            top: -12px;
                            left: 16px;
                            bottom: auto;
                            color: #2c303d;
                            border: none;
                        }

                    </style>
                    <div class="flex flex-col md:w-1/2 md:pl-12 items-center">
                        <div class="input-group-four">
                            <input type="text" name="" id="text3" placeholder=" " />
                            <label for="text3">Input field</label>
                        </div>
                    </div>

                </div>
                <!-- End  Content -->
            </div>
        </section>

        <!-- Section 5 -->
        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24" style="background-color: #f8f7fc;">
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">


                <!-- Content -->
                <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
                    <div
                        class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                        <h5
                            class="text-eph-black heading-h5 sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                            Selections</h5>
                        <p class="leading-relaxed text-base" style="color: #8B8B8C;">Deze animatie zit verwerkt in de
                            onboarding bij het selecteren van een fysiotherapeut.</p>

                        <div class="mt-7 flex items-center bg-eph-purple-light text-eph-purple rounded-full text-sm font-bold px-4 py-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>Kopieër onderstaande code om de animatie te gebruiken.</p>
                        </div>

                        <h6 class="text-eph-black prose mt-12 font-bold">Classes</h6>
                        <div class="my-6 rounded-xl overflow-hidden bg-eph-black prose">
                            <div style="overflow:auto;width:auto;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;label</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;custom-radio&quot;</span><span style="color: #f92672">&gt;</span>
                        <span style="color: #f92672">&lt;input</span> <span style="color: #a6e22e">type=</span><span style="color: #e6db74">&quot;radio&quot;</span> <span style="color: #a6e22e">name=</span><span style="color: #e6db74">&quot;radio&quot;</span> <span style="color: #f92672">/&gt;</span>
                        <span style="color: #f92672">&lt;span</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;radio-btn p-3&quot;</span>
                          <span style="color: #f92672">&gt;&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;las la-check&quot;</span><span style="color: #f92672">&gt;&lt;/i&gt;</span>
                          <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;fysio-icon&quot;</span><span style="color: #f92672">&gt;</span>
                            <span style="color: #f92672">&lt;i</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;las la-user&quot;</span><span style="color: #f92672">&gt;&lt;/i&gt;</span>
                            <span style="color: #f92672">&lt;h3</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;text-eph-purple&quot;</span><span style="color: #f92672">&gt;</span>Naam hier<span style="color: #f92672">&lt;/h3&gt;</span>
                          <span style="color: #f92672">&lt;/div&gt;</span>
                        <span style="color: #f92672">&lt;/span&gt;</span>
                      <span style="color: #f92672">&lt;/label&gt;</span></pre>
                            </div>
                        </div>

                        <h6 class=" text-eph-black prose mt-12 font-bold">CSS-code</h6>
                        <div class=" my-6 prose max-h-40 bg-eph-black overflow-hidden rounded-xl"
                            style="overflow-y: scroll;">
                            <pre style="margin: 0; line-height: 125% border-md"><span style="color: #a6e22e">.custom-radio</span> <span style="color: #f92672">input</span> <span style="color: #f8f8f2">{</span>
      <span style="color: #66d9ef">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #a6e22e">.radio-btn</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">margin</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">315px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">140px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">3px</span> <span style="color: #66d9ef">solid</span> <span style="color: #66d9ef">transparent</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">display</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">inline</span><span style="color: #f92672">-</span><span style="color: #66d9ef">block</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">border</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">10px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">relative</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">text-align</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">center</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">box</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">shadow</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">0</span> <span style="color: #ae81ff">20px</span> <span style="color: #ae81ff">#c3c3c367</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">cursor</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">pointer</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #a6e22e">.radio-btn</span> <span style="color: #f92672">&gt;</span> <span style="color: #f92672">i</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#fff</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">background-color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#a850ff</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">20px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">-15px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">100</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">transform</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">translate(</span><span style="color: #ae81ff">-50</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">scale(</span><span style="color: #ae81ff">2</span><span style="color: #f8f8f2">);</span>
        <span style="color: #66d9ef">border</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">radius</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">padding</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">3px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">transition</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0.1s</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">pointer</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">events</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">none</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #a6e22e">.radio-btn</span> <span style="color: #a6e22e">.fysio-icon</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">width</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">position</span><span style="color: #f92672">:</span> <span style="color: #66d9ef">absolute</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">top</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">40</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">left</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">50</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">transform</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">translate(</span><span style="color: #ae81ff">-50</span><span style="color: #f92672">%,</span> <span style="color: #ae81ff">-50</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #a6e22e">.radio-btn</span> <span style="color: #a6e22e">.fysio-icon</span> <span style="color: #f92672">i</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#a850ff</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">line-height</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">80px</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">font-size</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">60px</span><span style="color: #f8f8f2">;</span>
      <span style="color: #f8f8f2">}</span>



      <span style="color: #a6e22e">.custom-radio</span> <span style="color: #f92672">input</span><span style="color: #a6e22e">:checked</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">.radio-btn</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">border</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">3px</span> <span style="color: #66d9ef">solid</span> <span style="color: #ae81ff">#a850ff</span><span style="color: #f8f8f2">;</span>
        <span style="color: #66d9ef">background-color</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">#f6edff</span><span style="color: #f8f8f2">a1;</span>
        <span style="color: #f8f8f2">transition</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">0.1s</span> <span style="color: #f8f8f2">ease</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">in</span><span style="color: #f92672">-</span><span style="color: #f8f8f2">out;</span>
      <span style="color: #f8f8f2">}</span>

      <span style="color: #a6e22e">.custom-radio</span> <span style="color: #f92672">input</span><span style="color: #a6e22e">:checked</span> <span style="color: #f92672">+</span> <span style="color: #a6e22e">.radio-btn</span> <span style="color: #f92672">&gt;</span> <span style="color: #f92672">i</span> <span style="color: #f8f8f2">{</span>
        <span style="color: #66d9ef">opacity</span><span style="color: #f92672">:</span> <span style="color: #ae81ff">1</span><span style="color: #f8f8f2">;</span>
        <span style="color: #f8f8f2">transform</span><span style="color: #f92672">:</span> <span style="color: #f8f8f2">translateX(</span><span style="color: #ae81ff">-50</span><span style="color: #f92672">%</span><span style="color: #f8f8f2">)</span> <span style="color: #f8f8f2">scale(</span><span style="color: #ae81ff">1</span><span style="color: #f8f8f2">);</span>
      <span style="color: #f8f8f2">}</span>
      </pre>
                        </div>

                    </div>

                    <style>
                        .custom-radio input {
                            display: none;
                        }

                        .radio-btn {
                            margin: 10px;
                            width: 315px;
                            height: 140px;
                            border: 3px solid transparent;
                            display: inline-block;
                            border-radius: 10px;
                            position: relative;
                            text-align: center;
                            box-shadow: 0 0 20px #c3c3c367;
                            cursor: pointer;
                        }

                        .radio-btn>i {
                            color: #fff;
                            background-color: #a850ff;
                            font-size: 20px;
                            position: absolute;
                            top: -15px;
                            left: 100%;
                            transform: translate(-50%) scale(2);
                            border-radius: 50px;
                            padding: 3px;
                            transition: 0.1s;
                            pointer-events: none;
                            opacity: 0;
                        }

                        .radio-btn .fysio-icon {
                            width: 80px;
                            height: 80px;
                            position: absolute;
                            top: 40%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                        }

                        .radio-btn .fysio-icon i {
                            color: #a850ff;
                            line-height: 80px;
                            font-size: 60px;
                        }

                        .custom-radio input:checked+.radio-btn {
                            border: 3px solid #a850ff;
                            background-color: #f6edffa1;
                            transition: 0.1s ease-in-out;
                        }

                        .custom-radio input:checked+.radio-btn>i {
                            opacity: 1;
                            transform: translateX(-50%) scale(1);
                        }

                    </style>

                    <div class="flex flex-col md:w-1/2 md:pl-12 items-center">
                        <label class="custom-radio">
                            <input type="radio" name="radio" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="fysio-icon">
                                    <i class="las la-user"></i>
                                    <h3 class="text-eph-purple">Fysio 1</h3>
                                </div>
                            </span>
                        </label>

                        <label class="custom-radio">
                            <input type="radio" name="radio" />
                            <span class="radio-btn p-3"><i class="las la-check"></i>
                                <div class="fysio-icon">
                                    <i class="las la-user"></i>
                                    <h3 class="text-eph-purple">Fysio 2</h3>
                                </div>
                            </span>
                        </label>

                        <label class="custom-radio">
                            <input type="radio" name="radio" />
                            <span class="radio-btn"><i class="las la-check"></i>
                                <div class="fysio-icon">
                                    <i class="las la-user"></i>
                                    <h3 class="text-eph-purple">Fysio 3</h3>
                                </div>
                            </span>
                        </label>
                    </div>

                </div>
                <!-- End  Content -->
            </div>
        </section>

        <!-- Section  -->
        <!-- Section 2 -->
        <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24" style="background-color: #ffffff;">
            <div
                class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">


                <!-- Content -->
                <div class="container flex flex-wrap px-5 py-24 mx-auto items-center">
                    <div
                        class="md:w-1/2 md:pr-12 md:py-8 md:border-r md:border-b-0 mb-10 md:mb-0 pb-10 border-b border-gray-200">
                        <h5 class="heading-h5 sm:text-3xl text-2xl font-medium title-font mb-2" style="color: #2C303D;">
                            Skeleton loader</h5>
                        <p class="leading-relaxed text-base" style="color: #929DB1;">Laat de gebruiker zien wat er geladen
                            gaat worden. Kan worden toegepast bij content wat uit een database opgehaald moet gaan worden
                            waardoor de laadtijd langer kan duren. Bijvoorbeeld bij afbeeldingen en het ophalen van
                            fysiotherapeuten</p>

                        <div class="mt-7 flex items-center bg-eph-purple-light text-eph-purple rounded-full text-sm font-bold px-4 py-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>Kopieër onderstaande code om de animatie te gebruiken.</p>
                        </div>

                        <h6 class="text-eph-black prose mt-12 font-bold">Classes</h6>
                        <div class=" text-sm leading-snug rounded-xl overflow-hidden bg-eph-black prose">
                            <div style="overflow:auto;width:auto;">
                                <pre style="margin: 0; line-height: 125%"><span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;border border-eph-grey shadow rounded-md p-4 max-w-sm w-full mx-auto&quot;</span><span style="color: #f92672">&gt;</span>
                            <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;animate-pulse flex space-x-4&quot;</span><span style="color: #f92672">&gt;</span>
                                <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;rounded-full bg-eph-grey h-12 w-12&quot;</span><span style="color: #f92672">&gt;&lt;/div&gt;</span>
                                  <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;flex-1 space-y-4 py-1&quot;</span><span style="color: #f92672">&gt;</span>
                                    <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;h-4 bg-eph-grey rounded w-3/4&quot;</span><span style="color: #f92672">&gt;&lt;/div&gt;</span>
                                    <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;space-y-2&quot;</span><span style="color: #f92672">&gt;</span>
                                      <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;h-4 bg-eph-grey rounded&quot;</span><span style="color: #f92672">&gt;&lt;/div&gt;</span>
                                      <span style="color: #f92672">&lt;div</span> <span style="color: #a6e22e">class=</span><span style="color: #e6db74">&quot;h-4 bg-eph-grey rounded w-5/6&quot;</span><span style="color: #f92672">&gt;&lt;/div&gt;</span>
                                    <span style="color: #f92672">&lt;/div&gt;</span>
                                  <span style="color: #f92672">&lt;/div&gt;</span>
                                <span style="color: #f92672">&lt;/div&gt;</span>
                              <span style="color: #f92672">&lt;/div&gt;</span></pre>
                            </div>
                        </div>
                    </div>

                    <div class="border border-eph-grey shadow rounded-md p-4 max-w-sm w-full mx-auto">
                        <div class="animate-pulse flex space-x-4">
                            <div class="rounded-full bg-eph-grey h-12 w-12"></div>
                            <div class="flex-1 space-y-4 py-1">
                                <div class="h-4 bg-eph-grey rounded w-3/4"></div>
                                <div class="space-y-2">
                                    <div class="h-4 bg-eph-grey rounded"></div>
                                    <div class="h-4 bg-eph-grey rounded w-5/6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- End  Content -->
            </div>
        </section>

        <style>
            .language-html {
                font-family: Menlo, ui-monospace, SFMono-Regular, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            }

            .token .tag {
                color: rgba(232, 121, 249, var(--tw-text-opacity));
            }

            .token.attr-name {
                color: rgba(34, 211, 238, var(--tw-text-opacity));
            }

            .token.attr-value {
                color: rgba(190, 242, 100, var(--tw-text-opacity));
            }

            .token .punctuation {
                color: rgba(186, 230, 253, var(--tw-text-opacity));
            }

        </style>


        </section>

    </x-test-layout>
