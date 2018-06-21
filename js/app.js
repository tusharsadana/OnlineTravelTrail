$(function () {
    // Slideshow 3
    $("#slider3").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
            $('.events').append("<li>after event fired.</li>");
        }
    });

});



// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";

    }
}

document.getElementById("package1").onclick = function() {

    modal.style.display = "block";


    

    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    
    var country = document.getElementById("country");
    country.innerHTML= "Singapore";
    price.innerHTML = "Rs 31,500 /-per person";
    hotel.innerHTML = "Aqueen lavender / similar (3*)";
    duration.innerHTML = " 5Nights / 6 DAYS";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<li> Meet and Greet by Airport Representative </li>" +
        "<li>Daily breakfast at hotel (except day of arrival)</li>" +
        "<li>Night Safari : (Tram ride , animal show , Fire and Dance show )</li>" +
        "<li>Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom with tea and Wings of Time</li>"+
        "<li>Universal studio</li>"+
        "<li>City Tour of Singapore</li>"+
        "<li>Visa charges of Singapore</li>"+
        "<li>All transfer on Sic Basis</li>"+
        "<li>Singapore visa</li>"+
        "<br><span class='font-4'>Exclusion</span>"+
        "<li>Meal plan : Lunch<br>" +
        "<li>Meal plan : Dinner</li>" +
        "<li>Travel insurance</li>" +
        "<li>Optional tour or other arrangement</li>" +
        "<li>lunch / dinner</li>" +
        "<li>insurance</li>" +
        "<li>tipping guided /driver</li>" +
        "<li>Anything not mentioned above.</li>" +
        "<li>Items of Personal Nature</li>" +
        "<li>Applicable Peak Season, Christmas, New Year surcharges.</li>" +
        "<li>Any pvt transfer</li>"+
    "<b>Itinary</b><br>"+
    "Day 1 : Arriving at Airport.:- Night safari\n" +
        "Arrive at Singapore airport . Afterward Proceeding to the hotel for your refreshment check in the hotel @ 2:00 pm Rest of the Day is free at leisure .At evening get ready for night safari \"Hop onboard the tram and psyche yourself for a 40-minute journey of wild animal encounters! Journey from the Himalayan foothills to wild Equitorial Africa, this tram ride offers live commentary. Get a chance to come up-close with lions, tigers, tapirs, deer and more! Set in a forest clearing, the Creatures of the Night Show a 20-minute animal presentation will introduce you to nocturnal animals, from the elusive owl to nimble binturongs to intuitive civets. Over night stay in hotel\n" +
        "<br>" +
        "" +
        "<b>Day 2</b>:- Free for shopping or take optional tour of Singapore zoo Rs 2000 per person \n" +
        "After breakfast free for shopping or take optional tour Zigapore zoo An exciting ecological adventure awaits you at the Singapore Zoo, with over 3,000 animals in their natural spacious habitats. Stroll along the shaded boardwalks and observe the animals as they frolic amidst lush surroundings. Bring your whole family to the Singapore Zoo, and be thrilled by entertaining and educational shows and adventures.                                         \n" +
        "<br>" +
        "" +
        "" +
        "<b>Day 3</b>: City tour + sentosa\n" +
        "After breakfast get ready for city tour Proceed for a Half day Singapore City Tour including Merlion photostop, Suntec City, Fountain of Wealth, Orchard Road, Little India and Chinatown Than at noon getready for Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom. Over night stay in hotel\n" +
        "<br>" +
        "\n" +
        "<b>Day 4</b>: Universal studio\n" +
        "After breakfast get ready for Universal studio \"Live The Movies at the many exclusive attractions found only at the region’s first Hollywood movie theme park, Universal Studios Singapore. Featuring movie-themed rides and attractions, which are unique to Singapore, thrill seekers and families will be the first to experience many new rides and shows based on blockbuster hits. The young and young at heart will be entertained by Shrek and gang on an incredible 4-D adventure in the world’s first Far Far Away Castle. Thrill seekers can face warrior mummies on Revenge of the Mummy a psychological thrill ride in total darkness. Other highlights include Madagascar, New York, Hollywood, Sci Fi City and The Lost World.\n" +
        "\n" +
        "<br>" +
        "<b>Day 5</b>:- Free for leisure or take optional tour of Garden by the bay Rs 2300 pp\n" +
        "After breakfast free for shopping or take optional tour by own Garden by the way  \n" +
        "Spanning 101 hectares, and just a five-minute walk from the downtown Marina Bay area, this super park is home to over a quarter of a million rare plants. The entire park comprises three gardens; Bay South,Bay East and Bay Central. From the waterfront promenade, one can enjoy an amazing view of the Marina Bay financial district skyline.  You’ve visited gardens and parks before, but have you ever stepped into a super park spanning over 100 hectares, featuring more than a quarter of a million rare plants in huge domed conservatories – and in the heart of the city                                        \n" +
        "<br>" +
        "\n" +
        "<b>Day 6</b>: Back to home\n" +
        "After breakfast check out from the hotel @ 12 :00 noon then drop to airport. Fly for your onward destination\n";
        
        var email = document.getElementById("email").value;
        var name = document.getElementById("name").value;



    var pack = "<b>Booked By: </b>"+name+"<br><b>Email </b>"+email+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",pack);

}

///////// Package ----  2  /////////////////////


document.getElementById("package2").onclick = function() {
    modal.style.display = "block";

    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;


    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Singapore";
    price.innerHTML = "Rs 29000 /-per person";
    hotel.innerHTML = "Aqueen lavender / similar (3*)";
    duration.innerHTML = " 4 Nights / 5 DAYS";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<li>Meet and Greet by Airport Representative</li>" +
        "<li>04 Nights accommodation in Singapore</li>" +
        "<li>Daily breakfast at hotel (except day of arrival)</li>" +
        "<li>Night Safari : (Tram ride , animal show , Fire and Dance show )</li>" +
        "<li>Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom</li>" +
        "<li>Universal studio</li>" +
        "<li>City Tour of Singapore</li>" +
        "<li>Visa charges of Singapore</li>" +
        "<li>All transfer on Sic Basis</li>" +
        "<li>Singapore visa</li>"+
    "<br><b>Itinerary</b><br>"+
    "Day 1 : Arriving at Airport.:- Night safari\n" +
        "Arrive at Singapore airport . Afterward Proceeding to the hotel for your refreshment check in the hotel @ 2:00 pm Rest of the Day is free at leisure .At evening get ready for night safari \"Hop onboard the tram and psyche yourself for a 40-minute journey of wild animal encounters! Journey from the Himalayan foothills to wild Equitorial Africa, this tram ride offers live commentary. Get a chance to come up-close with lions, tigers, tapirs, deer and more! Set in a forest clearing, the Creatures of the Night Show a 20-minute animal presentation will introduce you to nocturnal animals, from the elusive owl to nimble binturongs to intuitive civets. Over night stay in hotel\n" +
        "<br>" +
        "\n" +
        "Day 2:- Free for shopping or take optional tour of Singapore zoo Rs 2000 per person \n" +
        "After breakfast free for shopping or take optional tour Zigapore zoo An exciting ecological adventure awaits you at the Singapore Zoo, with over 3,000 animals in their natural spacious habitats. Stroll along the shaded boardwalks and observe the animals as they frolic amidst lush surroundings. Bring your whole family to the Singapore Zoo, and be thrilled by entertaining and educational shows and adventures.                                         \n" +
        "<br>" +
        "\n" +
        "\n" +
        "Day 3: City tour + sentosa\n" +
        "After breakfast get ready for city tour Proceed for a Half day Singapore City Tour including Merlion photostop, Suntec City, Fountain of Wealth, Orchard Road, Little India and Chinatown Than at noon getready for Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom. Over night stay in hotel\n" +
        "<br>" +
        "\n" +
        "Day 4: Universal studio\n" +
        "After breakfast get ready for Universal studio \"Live The Movies at the many exclusive attractions found only at the region’s first Hollywood movie theme park, Universal Studios Singapore. Featuring movie-themed rides and attractions, which are unique to Singapore, thrill seekers and families will be the first to experience many new rides and shows based on blockbuster hits. The young and young at heart will be entertained by Shrek and gang on an incredible 4-D adventure in the world’s first Far Far Away Castle. Thrill seekers can face warrior mummies on Revenge of the Mummy a psychological thrill ride in total darkness. Other highlights include Madagascar, New York, Hollywood, Sci Fi City and The Lost World.\n" +
        "\"\n" +
        "<br>" +
        "\n" +
        "Day 5: Back to home\n" +
        "After breakfast check out from the hotel @ 12 :00 noon then drop to airport. Fly for your onward destination\n" +
        "<br>";

    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);

}


////    Package 3


document.getElementById("package_3").onclick = function() {
    modal.style.display = "block";
    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;

    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Singapore";
    price.innerHTML = "Rs 23500 /-per person";
    hotel.innerHTML = "Aqueen lavender / similar (3*)";
    duration.innerHTML = " 3Nights / 4 DAYS";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<li>Meet and Greet by Airport Representative" +
        "</li><li>03 Nights accommodation in Singapore" +
        "</li><li>Daily breakfast at hotel (except day of arrival)" +
        "</li><li>Night Safari : (Tram ride , animal show , Fire and Dance show )" +
        "</li><li>Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom City Tour of Singapore" +
        "</li><li>Visa charges of Singapore" +
        "</li><li>All transfer on Sic Basis" +
        "</li><li>Singapore visa</li>" +
        "<br>" +
        "<br>" +
        "<br>" +
        "<b>Itinerary :</b> <br>" +
        "<br>" +
        "<b>Day 1 :</b> Arriving at Airport.<br> Night safari <br>" +
        "Arrive at Singapore airport  . Afterward Proceeding to the hotel for your refreshment check in the hotel @ 2:00 pm Rest of the Day is free at leisure .At evening get ready for night safari \"Hop onboard the tram and psyche yourself for a 40-minute journey of wild animal encounters! Journey from the Himalayan foothills to wild Equitorial Africa, this tram ride offers live commentary. Get a chance to come up-close with lions, tigers, tapirs, deer and more! Set in a forest clearing, the Creatures of the Night Show a 20-minute animal presentation will introduce you to nocturnal animals, from the elusive owl to nimble binturongs to intuitive civets.   Over night stay in hotel<br>" +
        "<br>" +
        "<b>Day 2:</b> City tour + sentosa <br>" +
        "After breakfast get ready for city tour Proceed for a Half day Singapore City Tour including Merlion photostop, Suntec City, Fountain of Wealth, Orchard Road, Little India and Chinatown Than at noon getready for Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom. Over night stay in hotel <br>" +
        "<br>" +
        "\t\t\t\t\t\t\t\t\t\t <br>" +
        "<b>Day  3:</b> Universal studio <br>" +
        "After breakfast get ready for  Universal studio \"Live The Movies at the many exclusive attractions found only at the region’s first Hollywood movie theme park, Universal Studios Singapore. Featuring movie-themed rides and attractions, which are unique to Singapore, thrill seekers and families will be the first to experience many new rides and shows based on blockbuster hits. The young and young at heart will be entertained by Shrek and gang on an incredible 4-D adventure in the world’s first Far Far Away Castle. Thrill seekers can face warrior mummies on Revenge of the Mummy  a psychological thrill ride in total darkness. Other highlights include Madagascar, New York, Hollywood, Sci Fi City and The Lost World.  <br>" +
        "\"\t<br>" +
        "<br>" +
        "<b>Day 4:</b>  Back to home <br>" +
        "After breakfast check out from the hotel @ 12 :00 noon then drop to airport. Fly for your onward destination";

    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);


}


/////// Package 4

document.getElementById("package_4").onclick = function() {
    modal.style.display = "block";
    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;



    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Singapore +Malaysia ";
    price.innerHTML = "Rs 39,500 /- per person with  air fare (As on date )";
    hotel.innerHTML = "Singapore: Aqueen lavender / Similar<br>" +
        "<br>" +
        " Kuala Lumpur:  Citin Seacare Pudu Hotel /  Similar<br>" +
        "<br>" +
        " Genting: -First world hotel/similar";
    duration.innerHTML = " 6Night/7Days <br>(3 Night Singapore | 2 Night Kuala Lumpur | 1 Night Genting)";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<li>Daily breakfast" +
        "</li><li>02 Night accommodation in Kuala Lumpur." +
        "</li><li>01 Nights accommodation in Genting" +
        "</li><li>03Nights accommodation in Singapore." +
        "</li><li>Half day City Tour of Kuala Lumpur on SIC basis" +
        "</li><li>Genting Snow World ticket" +
        "</li><li>Genting Skyway Cable Car ticket" +
        "</li><li>City tour of Singapore" +
        "</li><li>Night safari" +
        "</li><li>Sentosa island Extreme including aincluding admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom" +
        "</li><li>Return airport Transfer" +
        "</li><li>All local transfers (Airport – Hotel – Airport) SIC basis" +
        "</li><li>Singapore +Malaysia  Visa</li>" +
        "<br>" +
        " <br>" +
        "Exclusions:<br>" +
        "Items of Personal Nature, Anything not mentioned above<br>" +
        "Applicable Peak Season, Christmas, New year surcharge<br>" +
        "<br>" +
        "<br>" +
        " Itinerary:- <br>" +
        " <br>" +
        " Day 1 : Arriving at Airport..Night safari <br>" +
        "Arrive at Ngurah Rai Airport Denpasar Bali . Afterward proceeding to the hotel for your refreshment check in the hotel @ 2:00 pm Rest of the Day is free at leisure .At evening get ready for night safari \"Hop onboard the tram and psyche yourself for a 40-minute journey of wild animal encounters! Journey from the Himalayan foothills to wild Equitorial Africa, this tram ride offers live commentary. Get a chance to come up-close with lions, tigers, tapirs, deer and more! Set in a forest clearing, the Creatures of the Night Show a 20-minute animal presentation will introduce you to nocturnal animals, from the elusive owl to nimble binturongs to intuitive civets.   Overnight stay in hotel<br>" +
        "<br>" +
        "<br>" +
        "Day 2:- City tour + sentosa <br>" +
        "After breakfast get ready for city tour Proceed for a Half day Singapore City Tour including Merlion photostop, Suntec City, Fountain of Wealth, Orchard Road, Little India and Chinatown Than at noon getready for Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom. Over night stay in hotel <br>" +
        "<br>" +
        "\t\t\t\t\t\t\t\t\t\t \"\t<br>" +
        "Day 3:- Free for Leisure <br>" +
        "After breakfast Free for shopping. Overnight stya in hotel <br>" +
        "<br>" +
        "<br>" +
        "Day 4:- Check out from the Singapore<br>" +
        "After breakfast check out from the Singapore hotel @1200 noon & drop at coach stand or airport. Check in the hote kaula lumpur hotel .Over night stay in kaula lumpur <br>" +
        "<br>" +
        "Day 5:-City tour of Kuala lumpur <br>" +
        "After breakfast Get ready for  city tour  of  Kuala lumpur Will brings you to the confluence of two rivers (Gombak & Klang River) where the name of Kuala Lumpur originated from, then to the King's Palace, the National Monument, drive pass Lake Gardens, photostop at National Mosque, theMoorish Styled Railway Station, then proceed to the Independence Square and Sultan Abdul Samad Building, nicknameas the Clock Tower of Kuala Lumpur, which used to be Malaysia High Court bases. You should notice that abundantgreenery in the city, particularly at the Lake Gardens. Over night stay in hotel <br>" +
        "<br>" +
        "Day 6:- Check out from the hotel & transfer to genting <br>" +
        "After breakfast check out from the Kaula lumpur  hotel @1200 noon & Transfer to genting Amidst the freshness of cool, Crisp Mountainairs about 6,000 feet (above sea level lies Malaysia only casino resort and is a World-Class City ofEntertainment). Fringed by one of the oldesttropical jungles in the world, you can enjoyyourselves with the numerous indoor amusement rides,<br>" +
        "casino, cinemas,restaurants and shopping malls.Transfer back to KUL hotel is 1830hrs / 06:30pm.<br>" +
        "<br>" +
        "<br>" +
        "<br>" +
        "<br>" +
        "Day 7:-  Back to home <br>" +
        "After breakfast check out from the hotel @ 12 :00 noon then drop to airport. Fly for your onward destination<br>";

    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);

}


////// package 5

document.getElementById("package_5").onclick = function() {
    modal.style.display = "block";

    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;


    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Singapore cruise";
    price.innerHTML = "Rs 45,999 /-per person";
    hotel.innerHTML = "Aqueen lavender / similar (3*)";
    duration.innerHTML = "  3 Night Singapore| 2 Nights Cruise";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<b>Package Inclusions</b><br>" +
        "<li>Daily breakfast<br></li>" +
        "<li>03Nights accommodation in Singapore. <br>" +
        "<li>02Nights accommodation in Cruise<br>" +
        "<li>All Meals in cruise <br>" +
        "<li>City tour of Singapore<br>" +
        "<li>Night safari<br>" +
        "<li>Sentosa island Extreme including admission, one way cable car,Luge & sky ride , Sea aquriam  wings of time<br>" +
        "<li>Return airport Transfer<br>" +
        "<li>All local transfers (Airport – Hotel – Airport) SIC basis Singapore Visa<br>" +
        "<li>cruise transfer <br>" +
        " <br>" +
        "<b>Exclusions:<br></b>" +
        "<li>Items of Personal Nature, Anything not mentioned above<br>" +
        "<li>Applicable Peak Season, Christmas, New year surcharge<br>" +
        "<li>Air fare <br>" +
        "<br>" +
        "<br>" +
        "<br>" +
        "<b>Day 1 :</b> Arriving at Airport..Night safari <br>" +
        "Arrive at Singapore airport  . Afterward Proceeding to the hotel for your refreshment check in the hotel @ 2:00 pm Rest of the Day is free at leisure .At evening get ready for night safari \"Hop onboard the tram and psyche yourself for a 40-minute journey of wild animal encounters! Journey from the Himalayan foothills to wild Equitorial Africa, this tram ride offers live commentary. Get a chance to come up-close with lions, tigers, tapirs, deer and more! Set in a forest clearing, the Creatures of the Night Show a 20-minute animal presentation will introduce you to nocturnal animals, from the elusive owl to nimble binturongs to intuitive civets.   Over night stay in hotel<br>" +
        "<br>" +
        "<b>Day 2:</b> Transfer to cruise <br>" +
        "After breakfast  . Transfer to cruise . Overnight stay in cruise <br>" +
        "<br>" +
        "<br>" +
        "<b>Day 3 :</b> Cruise stay <br>" +
        "Enjoy cruise stay with all meals <br>" +
        "<br>" +
        "<b>Day 4:</b> Sunset sentosa <br>" +
        "After breakfast check out from the cruise . Check in the hotel than take at noon getready for Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom. Over night stay in hotel <br>" +
        "<br>" +
        "\t\t\t\t\t\t\t\t\t\t <br>" +
        "<b>Day  5:</b> Universal studio <br>" +
        "After breakfast get ready for  Universal studio \"Live The Movies at the many exclusive attractions found only at the region’s first Hollywood movie theme park, Universal Studios Singapore. Featuring movie-themed rides and attractions, which are unique to Singapore, thrill seekers and families will be the first to experience many new rides and shows based on blockbuster hits. The young and young at heart will be entertained by Shrek and gang on an incredible 4-D adventure in the world’s first Far Far Away Castle. Thrill seekers can face warrior mummies on Revenge of the Mummy  a psychological thrill ride in total darkness. Other highlights include Madagascar, New York, Hollywood, Sci Fi City and The Lost World.  <br>" +
        "\"\t<br>" +
        "<br>" +
        "<b>Day 6:</b>  Back to home <br>" +
        "After breakfast check out from the hotel @ 12 :00 noon then drop to airport. Fly for your onward destination";

    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);


}





document.getElementById("package_6").onclick = function() {
    modal.style.display = "block";

    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;


    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Singapore + Bali";
    price.innerHTML = "Rs 39,999 /-per person";
    hotel.innerHTML = "3 Nights Grand ixora hotel kuta <br>" +
        "3 Nights in Aqueen lavendor ";
    duration.innerHTML = " 6 Nights / 7 DAYS";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<b>Package Inclusions :</b> <br>" +
        "<li>Daily breakfST breakfast </li>" +
        "<li>Ubud+ Kintamani tour on pvt transfer</li>" +
        "<li>Water activities (Pearasailing + banana boat + jet ski)</li>" +
        "<li>Uluwatu temple + kuta beach </li>" +
        "<li>Night safari with transfer </li>" +
        "<li>City tour +  sentosa (one way cable ride + wings of fly+ luge and sky ride )</li>" +
        "<li>Airport transfer </li>" +
        "<li>Singapore visa </li>" +
        "<li>Bali visa on arrival </li>" +
        "<br>" +
        "<br>" +
        "<br>" +
        "<b>Suggested Itinerary :</b>" +
        "<br>" +
        "<b>Day 1 :</b> Arriving at Airport.....<br>" +
        "<br>" +
        "Arrive at Nagurah Rai Airport Denpasar Bali . Afterward Proceeding to the hotel for your refreshment check in the hotel @ 2:00 pm Rest of the Day is free at leisure. Overnight at Hotel. <br>" +
        "<br>" +
        "<b>Day 2 :</b> Ubud kintamani tour <br>" +
        "The highlight of this tour is the magnificent view of Mount and Lake Batur with the smoky Agung Volcano in the background. Enroute stops at Celuk the center of gold and silver works, Mas the center of woodcarvings, Ubud the center of Balinese paintings, Goa Gajah (elephant cave) and the holy springs of Tirta Empul at Tampaksiring.<br>" +
        "<br>" +
        "<b>Day 3 :</b> water sports(jetskii parasailing+banana boat) + Uluwatu temple & kuta beach tour <br>" +
        "Have your breakfast after breakfast you will be picked from the hotel for the most happening day at Bali i.e. Water sport activities at Benoa Water Sport Center at Nusa Dua which includes your Parasailing, i & Banana Boat Ride. Dont worry if you dont know about the water sport they will teach you first and then will take you for the water sport. <br>" +
        "A trip to the most southern tip of the island: Uluwatu temple hanging on a cliff over a 100 meter sheer drop to the ocean. On the way back a short stop at the famous Kuta beach to watch the sunset.Overnight At Bali hotel.<br>" +
        "<br>" +
        "<br>" +
        "<b> Day 4 :</b> Arriving at Airport..Night safari <br>" +
        "Arrive at Ngurah Rai Airport Denpasar Bali . Afterward proceeding to the hotel for your refreshment check in the hotel @ 2:00 pm Rest of the Day is free at leisure .At evening get ready for night safari \"Hop onboard the tram and psyche yourself for a 40-minute journey of wild animal encounters! Journey from the Himalayan foothills to wild Equitorial Africa, this tram ride offers live commentary. Get a chance to come up-close with lions, tigers, tapirs, deer and more! Set in a forest clearing, the Creatures of the Night Show a 20-minute animal presentation will introduce you to nocturnal animals, from the elusive owl to nimble binturongs to intuitive civets.   Overnight stay in hotel<br>" +
        "<br>" +
        "<br>" +
        "<b>Day 5:</b> City tour + sentosa <br>" +
        "After breakfast get ready for city tour Proceed for a Half day Singapore City Tour including Merlion photostop, Suntec City, Fountain of Wealth, Orchard Road, Little India and Chinatown Than at noon getready for Sentosa Extreme including admission, one way cable car, Luge & Skyride, Butterfly Park & Insect Kingdom. Over night stay in hotel <br>" +
        "<br>" +
        "<b>Day 6 :</b> Free for Leisure <br>" +
        "After breakfast Free for shopping. Overnight stya in hotel <br>" +
        "<br>" +
        "<b>Day 7 :</b> Back to home<br>" +
        "After breakfast check out from the Hotel@ 12 :00 noon then drop to airport. Fly for your onward destination<br>";

    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);


}




document.getElementById("package_7").onclick = function() {
    modal.style.display = "block";

    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;


    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Dubai";
    price.innerHTML = "Rs 34,999 /-per person";
    hotel.innerHTML = "ASTORIA & AMBASSADOR HOTEL";
    duration.innerHTML = " 4 Nights / 5 DAYS";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<b>PACKAGE INCLUSION-</b><br>" +
        "<li>04 NIGHTS ACCOMODATION IN HOTEL WITH 04 BREAKFAST<br>" +
        "</li><li>HALF DAY CITY TOUR SS WITH ONE WAY MONORAIL<br>" +
        "</li><li>DESERT SAFARI WITH BELLY DANCE & DINNER<br>" +
        "</li><li>MARINA DHOW CRUISE WITH DINNER<br>" +
        "</li><li>BURJ KHALIFA ENTRY & DUBAI MALL WITH TRANSFER<br>" +
        "</li><li>NORMAL VISA + OTB<br>" +
        "</li><li>DXB APT / HTL / APT DXB<br>" +
        "</li><li>DXB TAXES\t<br>" +
        "<br>" +
        "<b>Day 1:</b> Arrival At Dubai - <br>" +
        "Upon arrival at Dubai International Airport, you will be transfered to hotel and check in (Normal Check in time is at 14:00 hrs – Early check in is subject to availability and may cost extra). Over night stay in hotel<br>" +
        "<br>" +
        "<b>Day 2 </b> Evening Dhow Cruise with dinner<br>" +
        "After breakfast at evening time . In evening pick up from hotel around 6:30 pm and proceed to enjoy Dhow Cruise. Cruising down Dubai creek is a novel experience, one which you cannot miss when in Dubai. Dividing the charming 'city of lights' into two commercial districts, Dubai Creek epitomizes the city's personality. The view of the city is intertwining of traditional and modern architect and culture. On dhow cruise; international buffet dinner will be served with soft drinks in the silence along Dubai Creek. Overnight stay at hotel. less<br>" +
        "<br>" +
        " <br>" +
        "<b>Day 3 </b>Evening Desert Safari With Dinner<br>" +
        "After breakfast at evening   In the evening take a thrilling ride through the deserts. Relish authentic Arabic cuisine. Be spellbound by the enthralling performances by exotic dancers. Watch the stars blinking at you in the wildness of the desert. All this and more for the tourist. Trip to the desert is full of Fun and adventure. <br>" +
        "<br>" +
        "<br>" +
        "<b>Day 4 </b>  Morning Half Day City Tour<br>" +
        "After breakfast proceed for a panoramic half day city tour of Dubai. You will tour the Jumeirah Mosque, Bastakiya square, drive in front of the Atlantis, the Gold Souk and the Spice Souk, Over night stay in hotel <br>" +
        "<br>" +
        "<br>" +
        "<b>Day 5:</b> Check out <br>" +
        "After breakfast check out from the hotel @ 12 :00 noon then drop to airport. Fly for your onward destination .";

    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);

}



document.getElementById("package_8").onclick = function() {
    modal.style.display = "block";

    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;


    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Mauritius";
    price.innerHTML = "Rs  20,999 /-per person";
    hotel.innerHTML = "Le grand blue";
    duration.innerHTML = " 6 Nights / 7 DAYS";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<b>Inclusions</b><br>" +
        "<li>Visa <br>" +
        "</li><li>06 Night Accommodation on Breakfast & Dinner basis. <br>" +
        "</li><li>Airport - Hotel - Airport transfer <br>" +
        "</li><li>Full Day Ile Aux Cerf Tour with speed boat transfer<br>" +
        "</li><li>Full Day North Tour <br>" +
        "</li><li>Full Day South Tour <br>" +
        "</li><li>ONE GSM SIM CARD </li>" +
        "<br>" +
        "<br>" +
        "<b>Day 1 :</b> Arrival at airport<br>" +
        "Mauritius Welcome Mauritius -a tropical paradise. Our local representative welcomes you when in Mauritius at the airport arrival. Get transferred to your hotel. Free day to relax or stroll along the beautiful beaches of Mauritius. Overnight in Mauritius.<br>" +
        "<br>" +
        "<b>Day 2 :</b> NORTH TOUR<br>" +
        "Mauritius -City Tour of Port Louis (North Tour) After breakfast, its time to leave for a half day in Port Louis, capital of Mauritius. Where you can visit the port, set in a semicircle of mountains, the Natural History Museum - known for some very rare birds now extinct as the Dodo, the national bird of Mauritius. See the Citadel, a stone fortress atop a hill. The next stop is the Port Louis market, where you can buy on the shelves of local and duty free shops.Overnight in Mauritius.<br>" +
        "<br>" +
        "<b>Day 3 :</b> Free for lasiure<br>" +
        "Free for lasiure<br>" +
        "<br>" +
        "<b>Day 4 :</b> lle ux tour<br>" +
        "Mauritius -Ile-aux-Cerfs. Undersea Walk (East Tour) This morning after breakfast, proceed to Deer Island, a beautiful resort on a Robinson Crusoe, as an island. Get mesmerized by the scenic beauty of miles of white sand beaches and crystalline waters. Relax on the beach, go swimming and enjoy the many water activities, at a nominal cost. You can also tour the famous promenade on the water at a nominal cost,the opportunity to walk on the ocean floor. Overnight in Mauritius.<br>" +
        "<br>" +
        "<b>Day 5 :</b> SOUTH TOUR<br>" +
        "Mauritius -Visit Chamarel & Grand Bassin (South Tour) After breakfast, you will be taken from the hotel lobby for the entire day Chamarel and Great Basin, where you will first see the single;Seven Colors of the Earth\" on Chamarel. Enjoy the water drip and silent forests. See mounds of yellow, red, blue and green of earth. Enjoy the magnificent view of the Black River Gorges. Also visit Grand Bassin, one of the islands natural lakes. Overnight in Mauritius.<br>" +
        "<br>" +
        "<b>Day 6 :</b> Free for lasiure<br>" +
        "Free for lasiure<br>" +
        "<br>" +
        "<b>Day 7 :</b> Check out from the hotel and transfer to the airport<br>" +
        "Check out from the hotel and transfer to the airport<br>";

    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);

}





document.getElementById("package_9").onclick = function() {
    modal.style.display = "block";

    var email = document.getElementById("email").value;
    var name = document.getElementById("name").value;



    var country = document.getElementById("country");


    var price = document.getElementById("Price");
    var hotel = document.getElementById("hotel");
    var duration = document.getElementById("duration");
    var details = document.getElementById("Details");
    // var image = document.getElementById("Modal_image");
    // var details = document.getElementById("");
    country.innerHTML= "Thailand";
    price.innerHTML = "Rs 10,999 /-per person";
    hotel.innerHTML = "Grand Alpine Pratunam BKK \t<br>" +
        "Beverly Plaza Hotel Pattaya";
    duration.innerHTML = " 4 Nights / 5 DAYS";
    // image.setAttribute("src", "bg-1.jpg")

    details.innerHTML="<b>PACKAGE DETAILS -</b> <br>" +
        "<li>02 nts Bangkok accommodation with ABF<br>" +
        "</li><li>Temple & City Tour (SIC)<br>" +
        "</li><li>Transfer: Airport - Bangkok - Pattaya - Airport (SIC)<br>" +
        "</li><li>Alcazar Show (SIC)<br>" +
        "</li><li>Coral Island with lunch (SIC)<br>" +
        "</li><li>Safari World with Marine Park (SIC)<br>" +
        "** Free Phone SIM Card per booking<br>" +
        "<br>" +
        "<b>Detail itinerary</b><br>" +
        "<b>DAY 1</b> Arrive at Bangkok. After custom clearance, visa processing and baggage claim, Local Tour representative will meet you & guide you through all the procedures. Thereafter, he will transfer you to Pattaya. Enjoy outside views on your way to Pattaya. Check in at the hotel and relax. Rest of the day is at your own leisure.<br>" +
        "Stay overnight at hotel in Pattaya.<br>" +
        "<br>" +
        "<b>DAY 2</b> Charge yourself with morning breakfast at hotel and set out for an exciting tour to Coral Island. A few miles off coast Pattaya, Coral Island or Koh Larn is an exciting place to spend a day on white sandy beach and enjoy water sports. One can explore beautiful and extensive coral while scuba or deep sea diving and enjoy snorkeling in crystal clear sea waters. Laze around on the beach and bask in the sun or get playful and indulge in exciting water sports like parasailing, water-skiing and jet skis. Later return to hotel and relax after an eventful day.<br>" +
        "Stay overnight at hotel in Pattaya.<br>" +
        "<br>" +
        "<b>DAY 3</b> Have your fill at morning breakfast at the hotel, pack your bags and check out from the hotel. Today we return back to Bangkok. En-route we take a panoramic city tour of Pattaya and visit World’s biggest Gem Gallery. Proceed for the drive to Bangkok and check in at hotel on arrival. Rest of the day is at leisure. You may opt for some optional evening sightseeing tour (on an extra cost) or go to explore the famous Bangkok nightlife. Later return to hotel and get some sleep.<br>" +
        "<br>" +
        "Stay overnight at hotel in Bangkok<br>" +
        "<br>" +
        "<b>DAY 4</b> today is free for your own leisure. Catch up on left shopping deals or go for self exploration of the city. Or else, opt for a thrill-filled day at Safari World & Marine Park (on an extra cost). Safari World is Thailand’s greatest open zoo and leisure park that offers loads of thrills and entertainment for all ages. Enjoy a spectacular and nerve-tickling safari drive through African wilderness setting, get close to the friendliest dolphins, watch the unique tiger & lion feeding show, etc. and have loads of fun with your loved ones. Later return to hotel and relax.Stay overnight in Bangkok.<br>" +
        "<br>" +
        "<b>DAY 5</b><br>" +
        "Pack your bags in the morning & take transfer to the Bangkok Airport for your flight back home. Hope you relished your tour <br>";
    var package = "<b>Booked By: </b>"+name.innerHTML+"<br><b>Email </b>"+email.innerHTML+"<br><b>"+price.innerHTML+ "</b><br>"+country.innerHTML+"<br>"+details.innerHTML;

    document.getElementById("message").setAttribute("value",package);

}

