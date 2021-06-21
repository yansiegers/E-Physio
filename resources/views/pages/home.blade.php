<x-general-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>



<!--Overige css-->
<style>
   .line{
        position:relative;
    }
    .line:after{
        content:"";
        background: #D9EDF8;
        position:absolute;
        left:0;
        right:0;
        top:65%;
        bottom:0;
        margin:auto;
        height:20%;
        z-index:-1;
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

<!--Hero section1-->
<section class="container m-auto px-6"">
    <div class="lg:flex justify-between items-center">
        <div class="lg:w-6/12 lg:p-0 p-7">
            <small class="text-eph-purple font-bold">Online fysiotherapie</small>
            <h1 class="heading-h1">Waar en wanneer het jou uitkomt</h1>
            <p class="text-eph-grey text-base mt-6 mr-16 leading-loose">Behandeld worden door professionele fysiotherapeuten door heel Nederland.</p>

            <style>
            </style>

            <div class="py-5">
                <button class="btn-primary rounded-full mt-8 font-bold text-base py-5 px-8" href="#">Hoe werkt het?</button>
            </div>
        </div>
        <div class="lg:w-5/12">
            <img class="rounded" src="img/header_img.svg">
        </div>
    </div>
</section>

<!--Tags section2-->
<section class="container m-auto mt-36 mb-36 px-6">
    <div class="flex items-center justify-center">
        <div class="text-center">
            <h1 class="heading-h5 py-5 mt-6">Online fysiotherapie is o.a. geschikt voor:</h1>
            <div class="max-w-2xl mt-6">
                <span class="m-1 rounded-md py-3 px-2 font-bold text-sm cursor-pointer" style="background-color:#F6F1FE; color: #9F62F6;"">Fysiotherapeutisch advies</span>
                <span class="m-1 rounded-md py-3 px-2 font-bold text-sm cursor-pointer" style="background-color:#F6F1FE; color: #9F62F6;">Lage rugklachten</span>
                <span class="m-1 rounded-md py-3 px-2 font-bold text-sm cursor-pointer" style="background-color:#F6F1FE; color: #9F62F6;">Nekklachten</span>
                <span class="m-1 rounded-md py-3 px-2 font-bold text-sm cursor-pointer" style="background-color:#F6F1FE; color: #9F62F6;">Gewrichtsklachten</span>
                <div class="pt-7">
                    <span class="m-1 rounded-md py-3 px-2 font-bold text-sm cursor-pointer" style="background-color:#F6F1FE; color: #9F62F6;">Sportblessures</span>
                    <span class="m-1 rounded-md py-3 px-2 font-bold text-sm cursor-pointer" style="background-color:#F6F1FE; color: #9F62F6;">Revalideren na een operatie</span>
                    <span class="m-1 rounded-md py-3 px-2 font-bold text-sm cursor-pointer" style="background-color:#F6F1FE; color: #9F62F6;">Herstellen na COVID-19</span>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--Slider heading section-->
 <section class="container m-auto px-6">
        <div class="flex items-center justify-center">
            <div class="text-center">
                <h1 class="heading-h2 py-5 mt-6 mx-16">Hoe werkt e-physio?</h1>
                <div class="mt-6 max-w-2xl">
                    <p class="text-eph-grey text-base mt-6 leading-loose">De gediplomeerde en ervaren fysiotherapeuten van e-physio staan met online fysiotherapie voor jou klaar waar en wanneer je ze nodig hebt. De intake, het onderzoek en de behandeling vindt allemaal plaats online via onze <strong>5 stappen!</strong></p>
                    <p class="mt-12" style="font-size:2em"><i class="bi bi-mouse"></i></p>
                </div>
            </div>
        </div>
 </section>


<!--Slider section-->
<section class="m-auto flex flex-col my-24 ml-24">
    <div id="scrolling-content" class="flex overflow-scroll gap-x-12">

        <div class="w-96 h-auto pl-4 flex-shrink-0">
            <img class="rounded-md" src="img/afspraak_maken.svg"/>
            <h6 class="heading-h6 mt-8 ">1. Afspraak maken</h6>
            <p class="text-eph-grey mt-6 text-base">Plan je afspraak of vervolgafspraak op het moment wanneer het jou uitkomt.</p>
        </div>

        <div class="w-96 h-auto pl-4 flex-shrink-0">
            <img class="rounded-md" src="img/Online_intake.svg"/>
            <h6 class="heading-h6 mt-8">2. Online intake</h6>
            <p class="text-eph-grey mt-6 text-base">De intake en het onderzoek vindt plaats middels een beveiligd videogesprek met een E-Physiotherapeut.</p>
        </div>

        <div class="w-96 h-64 pl-4 flex-shrink-0">
            <img class="rounded-md" src="img/diagnose.svg"/>
            <h6 class="heading-h6 mt-8">3. Diagnose</h6>
            <p class="text-eph-grey mt-6 text-base">Jouw E-Physiotherapeut stelt een diagnose en aan de hand van perssonlijke doelen wordt er een herstelplan opgesteld.</p>
        </div>

        <div class="w-96 h-64 pl-4 flex-shrink-0">
            <img class="rounded-md" src="img/behandelplan.svg"/>
            <h6 class="heading-h6 mt-8">4. Behandelplan</h6>
            <p class="text-eph-grey mt-6 text-base">Het herstelprogramma is online beschikbaar via Physitrack , je werkt gestructureerd aan je herstel wanneer het jou uitkomt.</p>
        </div>

        <div class="w-96 h-64 pl-4 flex-shrink-0 mr-24">
            <img class="rounded-md" src="img/preventieplan.svg"/>
            <h6 class="heading-h6 mt-8">5. Preventieplan</h6>
            <p class="text-eph-grey mt-6 text-base">Houd je lichaam in conditie, zorg ervoor dat jouw blessure niet terugkeert en volg het preventieplan.</p>
        </div>
    </div>
</section>


<!--Usp section1-->
<section class="relative py-20 bg-white mt-36">
    <div class="container mx-auto px-4">
       <!--Left-->
        <div class="items-center flex flex-wrap">
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    <h2 class="heading-h2"><span class="line">E-physio</span> is geschikt voor:</h2>

                <!--Bullet list-->
                    <ul class="list-none mt-6">
                        <li class="py-2">
                            <div class="flex flex-items">
                                <div>
                                    <span class="inline-block text-eph-blue mr-3"><i class="bi bi-check"></i></span>
                                </div>
                                <div>
                                    <p class="text-eph-grey">Overal beschikbaar</p>
                                </div>
                            </div>
                        </li>

                        <li class="py-2">
                            <div class="flex flex-items">
                                <div>
                                    <span class="inline-block text-eph-blue mr-3"><i class="bi bi-check"></i></span>
                                </div>
                                <div>
                                    <p class="text-eph-grey">Online contact</p>
                                </div>
                            </div>
                        </li>

                        <li class="py-2">
                            <div class="flex flex-items">
                                <div>
                                    <span class="inline-block text-eph-blue mr-3"><i class="bi bi-check"></i></span>
                                </div>
                                <div>
                                    <p class="text-eph-grey">Wanneer het jou uitkomt</p>
                                </div>
                            </div>
                        </li>

                        <li class="py-2">
                            <div class="flex flex-items">
                                <div>
                                    <span class="inline-block text-eph-blue mr-3"><i class="bi bi-check"></i></span>
                                </div>
                                <div>
                                    <p class="text-eph-grey">Persoonlijke begeleiding</p>
                                </div>
                            </div>
                        </li>

                        <li class="py-2">
                            <div class="flex flex-items">
                                <div>
                                    <span class="inline-block text-eph-blue mr-3"><i class="bi bi-check"></i></span>
                                </div>
                                <div>
                                    <p class="text-eph-grey">e-consult €29,95</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        <!--Right-->
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <img class="rounded" src="img/usp1.svg"/>
            </div>
        </div>
    </div>
</section>




<!--Uspp section2-->
<section id="usp" class="relative py-20 bg-white text-black">
    <div class="container mx-auto px-4">
    <!--Left-->
        <div class="items-center flex flex-wrap">
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <img class="rounded" src="img/usp2.svg"/>
            </div>
    <!--Right-->
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    <!--<small class="text-eph-purple">Dummy sub</small>-->
                    <h2 class="heading-h2">Kies <span class="line">jouw</span> fysiotherapeut</h2>
                    <p class="text-eph-grey mt-6">Het idee voor online fysiotherapie is ontstaan uit passie voor het vak en de eigenzinnigheid in ons werk...</p>
                    <p class="text-link inline-block cursor-pointer mt-10 text-eph-purple"><a href="#">Lees verder<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Usp section 3-->
<section id="usp" class="relative py-20 bg-white text-black">
    <div class="container mx-auto px-4">
        <!--Left-->
        <div class="items-center flex flex-wrap">
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    <!--<small class="text-eph-purple">Dummy sub</small>-->
                    <h2 class="heading-h2 mr-4"><span class="line">Altijd toegang</span> tot jouw behandelplan</h2>
                    <p class="text-eph-grey mt-6">Wij willen jou de beste zorg geven en dus hoort daar de laatste wetenschap bij. We hebben een aantal studies voor je samengevat...</p>
                    <p class="text-link inline-block cursor-pointer mt-10 text-eph-purple"><a href="#">Lees verder<i class="bi bi-arrow-right-short"></i></a></p>
                </div>
            </div>
        <!--Right-->
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
            <img class="rounded" src="img/usp3.svg"/>
            </div>
        </div>
    </div>
</section>

 <!--Reviews header section-->
<section class="container m-auto mt-8 max-w-full px-6 pt-28 pb-28" style="background-color: #F7FBFE;">
    <div class="flex items-center justify-center">
        <div class="text-center">
            <h1 class="heading-h2 mx-16">Recente Reviews</h1>
            <div class="mt-6 max-w-2xl">
                <p class="text-eph-grey text-base mt-6 leading-loose mb-12">Wat zeggen klanten over ons?</p>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-center mt-12">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-col-2 gap-10">

            <div class=" w-96 h-auto mt-20 bg-eph-white p-3 rounded shadow-sm">
                <h6 class="heading-h6 mt-5 ml-5">Anoniem</h6>
                <p class="mt-6 ml-5 text-eph-grey text-base leading-loose mb-12">Zondagochtend door mijn enkel gegaan en zondag middag een consult gehad bij e-physio. Ik ben Jeroen eeuwig dankbaar! </p>
            </div>

            <div class=" w-96 h-auto bg-eph-white p-4 rounded shadow-sm">
                <h6 class="heading-h6 mt-5 ml-5">Jose</h6>
                <p class="mt-6 ml-5 text-eph-grey text-base leading-loose mb-12">Dank, dank, dank! voor de snelle service de adequate benadering en behandeling en snelle reacties. Je doet wat je zegt. Ik voelde me erg gehoord door de tijd die je voor mij nam. Nogmaals bedankt</p>
            </div>

            <div class=" w-96 h-60 bg-eph-white p-3 rounded shadow-sm">
                <h6 class="heading-h6 mt-5 ml-5">Wim bakkers</h6>
                <p class="mt-6 ml-5 text-eph-grey text-base leading-loose mb-12">Zondagochtend door mijn enkel gegaan en zondag middag een consult gehad bij e-physio. Ik ben Jeroen eeuwig dankbaar! </p>
            </div>

            <div class=" w-96 h-auto bg-eph-white p-4 rounded shadow-sm">
                <h6 class="heading-h6 mt-5 ml-5">M. van Duijvenwoude</h6>
                <p class="mt-6 ml-5 text-eph-grey text-base leading-loose mb-12">De therapeuten van e-physio zijn zeer kundig en correct. Ik heb mijn klachten kunnen verminderen na 1 maand en heb veel aan het preventie advies en plan. Ik ga niet meer naar de praktijk om de hoek maar kies voortaan voor de fysiotherapeut die ik overal kan consulten. </p>
            </div>
        </div>
    </div>
</section>




<!--Call to action section-->
<section class="relative bg-white text-black my-20">
    <div class="container mx-auto px-4">
        <div class="items-center flex flex-wrap">
            <!--Text + Button-->
            <div class="w-full md:w-6/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    <h3 class="heading-h3">Snel van je klacht af?</h3>
                    <p class="text-eph-grey mt-4">Vragen of verzoeken zijn van harte welkom.</p>
                    <div class="py-5">
                        <button class="btn-primary rounded-full mt-8 font-bold text-base py-5 px-8" href="#">Maak je afspraak</button>
                    </div>
                </div>
            </div>
        <!--Foto-->
            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <img class="rounded" src="img/foto-cta.svg"/>
            </div>
        </div>
    </div>
</section>





</x-general-layout>
