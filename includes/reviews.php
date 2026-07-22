<?php
// Dictionary mapping strings to keys
if ($currentLang === 'de') {
    $reviewsTxt = [

        // GOOGLE RATINGS
        'ratings_subtitle' => '4,9/5 bei 70+ Google-Bewertungen',
        'ratings_role' => 'Sprachschüler',

    ]; 
} else {
    $reviewsTxt = [
        // GOOGLE RATINGS
        'ratings_subtitle' => '4,9/5 from 70+ Google Reviews',
        'ratings_role' => 'Language Student',

    ];
}
?>



<section class="reviews-section grey-bg">
    <div class="container">

        <!-- first row -->
        <div class="row">
        <div class="row w-100 d-flex align-items-center justify-content-center">
            <img src="pics/star-icon.svg" alt="Star icon"><img src="pics/star-icon.svg" alt="Star icon"><img src="pics/star-icon.svg" alt="Star icon"><img src="pics/star-icon.svg" alt="Star icon"><img src="pics/star-icon.svg" alt="Star icon">
        </div>
        
        <div class="row w-100 mt-2">
            <h3 class="text-center w-100"><?= htmlspecialchars($reviewsTxt['ratings_subtitle']) ?></h3>
        </div>
        </div>

        <!-- second row -->
        <div class="row d-flex mt-5 justify-content-center">

            <div class="card p-4 mr-4 mb-4" style="width: 100%;">
                <div class="card-body">

                <div class="container">
                    <div class="row d-flex">
                    <img class="mr-3" src="pics/a-initial.svg" alt="A">
                    
                    <div class="col">
                        <div class="row"><p class="reviews-user no-spacing">Araceli Stubbe</p></div>
                        <div class="row"><p class="caption no-spacing"><?= htmlspecialchars($reviewsTxt['ratings_role']) ?></p></div>
                    </div>
                    </div>
                </div>
                <p class="card-text mt-3">“I took a couple of months of an intensive German course and I enjoyed them thoroughly. Educated profesional teachers, with dedication and commitment to the learning process of the students plus an incredibly welcoming community lead by June, right there in the reception space of the school. You learn German, faster, and better, and surround yourself with nice people, and opportunities to bond outside the classroom in get-togethers in little garden spaces, barbecues, walks or strawberry picking events that they organize. It’s the interest to make something worth everyone’s time that separates this school from the rest.”</p>
                </div>
            </div>

            <div class="card p-4 mr-4 mb-4" style="width: 100%;">
                <div class="card-body">

                <div class="container">
                    <div class="row d-flex">
                    <img class="mr-3" src="pics/chinese-initial.svg" alt="A">
                    
                    <div class="col">
                        <div class="row"><p class="reviews-user no-spacing">楊雪榕</p></div>
                        <div class="row"><p class="caption no-spacing"><?= htmlspecialchars($reviewsTxt['ratings_role']) ?></p></div>
                    </div>
                    </div>
                </div>
                <p class="card-text mt-3">“Aviva is not only a language school but also my home in Germany. Good location, helpful teachers and fun activities are what you can get from there. :3”</p>
                </div>
            </div>

            <div class="card p-4 mr-4 mb-4" style="width: 100%;">
                <div class="card-body">

                <div class="container">
                    <div class="row d-flex">
                    <img class="mr-3" src="pics/n-initial.svg" alt="N">
                    
                    <div class="col">
                        <div class="row"><p class="reviews-user no-spacing">Nitsuga Apiat</p></div>
                        <div class="row"><p class="caption no-spacing"><?= htmlspecialchars($reviewsTxt['ratings_role']) ?></p></div>
                    </div>
                    </div>
                </div>
                <p class="card-text mt-3">“For anyone wanting to learn Deutsch or other languages, A-Viva is the best place to learn! The teachers are qualified and really care about teaching. The classes are small so you can really ask questions without feeling embarrassed or if you're overwhelmed, the teachers are extremely helpful! The small class sizes are perfect as you get to meet your fellow classmates. There is always food at Aviva too! ;) June has been incredibly helpful and she is such a great person overall. I'm so grateful to have found a school where there is a sense of community. I highly recommend you check it out!”</p>
                </div>
            </div>

        </div>

    </div>
</section>