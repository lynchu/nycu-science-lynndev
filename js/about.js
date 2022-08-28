var animation_second_row, animation_third_row;
$(() => {
    animation_second_row = bodymovin.loadAnimation({
    // animationData: { /* ... */ },
    container: document.getElementById('second-row-img'), // required
    path: templateUrl+"/images/about/flowerpot.json", // required
    renderer: 'svg', // required
    loop: true, // optional
    autoplay: true, // optional
    name: "Demo Animation", // optional
    rendererSettings: {
        /* ref: https://pjchender.blogspot.com/2017/03/svg-viewport-viewbox-zoomdrag.html */
        /* 
            in brief, this image is orignally 2000 * 2000
            the attribute 1200 1200 means it only shows a part of this image
            in which that part is a 1200 * 1200 square, which name ViewBox.
            The ViewBox is start from the Topleft corner in deafult
            and 400 0 means it will move left 400px.
            (in visual, this will show like the picture move 'right' 400px) 
        */
        viewBoxSize: '400 0 1200 1200',
    }
    });

    animation_third_row = bodymovin.loadAnimation({
        // animationData: { /* ... */ },
        container: document.getElementById('third-row-img'), // required
        path: templateUrl+"/images/about/flowerpot.json", // required
        renderer: 'svg', // required
        loop: true, // optional
        autoplay: true, // optional
        name: "Demo Animation", // optional
        rendererSettings: {
            viewBoxSize: '0 700 1200 1200',
        }
        });
});
