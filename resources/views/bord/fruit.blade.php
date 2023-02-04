@vite('resources/js/app.js')

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/fruit.css') }}">
    <title>Fruit</title>

    <!--<link rel="manifest"  href="http://localhost:5173/manifest.json">-->

  </head>

  <body>
    <header class="header">
      <h1>Fruit</h1>
      <button class="scanModeBtn">Touch: On</button>
      <a class="airBtn" href="{{ route('bord.index') }}">Go to Air</a>
    </header>



    <div id="layout-fruit">
      <style>
        @keyframes rotate1 {
          0% {
            transform: rotate(initial);
          }

          100% {
            transform: rotate(31deg);
            /* Value is set in exakt kcal, to calculate degrees, use 0,2 * y ammount of kcal*/
          }
        }

        @keyframes rotate2 {
          0% {
            transform: rotate(initial);
          }

          100% {
            transform: rotate(162deg);
            /* This value is correct for the right side, for the left side, double the value*/
          }
        }

        @keyframes rotate3 {
          0% {
            transform: rotate(initial);
          }

          100% {
            transform: rotate(144deg);
            /* This value is correct for the right side, for the left side, double the value*/
          }
        }
      </style>

      <div class="grid">
        <div class="graph">
          <div class="circle">
            <svg width="100mm" height="100mm" viewBox="0 0 100 99.999994" version="1.1" id="svg5"
              inkscape:version="1.2.1 (9c6d41e410, 2022-07-14)" sodipodi:docname="circle.svg"
              xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
              xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"
              xmlns:svg="http://www.w3.org/2000/svg">
              <sodipodi:namedview id="namedview7" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0"
                inkscape:pageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="true"
                inkscape:document-units="mm" showgrid="false" inkscape:snap-page="true"
                inkscape:snap-text-baseline="true" inkscape:snap-center="true" inkscape:snap-object-midpoints="true"
                inkscape:snap-midpoints="true" inkscape:snap-smooth-nodes="true" inkscape:snap-intersection-paths="true"
                inkscape:object-paths="true" inkscape:snap-bbox="true" inkscape:bbox-nodes="true"
                inkscape:bbox-paths="true" inkscape:snap-bbox-edge-midpoints="true" inkscape:snap-bbox-midpoints="true"
                inkscape:zoom="1.4151596" inkscape:cx="305.26591" inkscape:cy="119.77447" inkscape:window-width="1920"
                inkscape:window-height="991" inkscape:window-x="-9" inkscape:window-y="-9" inkscape:window-maximized="1"
                inkscape:current-layer="layer1" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0"
                fit-margin-bottom="0" inkscape:showpageshadow="false" inkscape:deskcolor="#d1d1d1" showborder="false"
                shape-rendering="crispEdges" borderlayer="false" />
              <defs id="defs2">
                <linearGradient inkscape:collect="always" id="linearGradient7590">
                  <stop style="stop-color: #e10014; stop-opacity: 1" offset="0" id="stop7586" />
                  <stop style="stop-color: #fb2b77; stop-opacity: 1" offset="0.85063761" id="stop7820" />
                  <stop style="stop-color: #e10014; stop-opacity: 0" offset="1" id="stop7588" />
                </linearGradient>
                <linearGradient inkscape:collect="always" xlink:href="#linearGradient7590" id="linearGradient7592"
                  x1="394.89648" y1="893.43164" x2="394.18939" y2="-29.731527" gradientUnits="userSpaceOnUse" />
              </defs>
              <g inkscape:label="Lager 1" inkscape:groupmode="layer" id="layer1"
                transform="translate(-0.59633237,-28.615825)">
                <g id="g1203-5" transform="matrix(0,0.48129596,0.48129844,0,-13.176419,28.328817)"
                  inkscape:label="g1203">
                  <path id="path2315" style="
                      fill: #ed217c;
                      fill-opacity: 1;
                      fill-rule: evenodd;
                      stroke-width: 1.40606;
                    " inkscape:label="path589"
                    d="M 2.2538204 500.79335 A 392.63908 392.63908 0 0 1 394.89084 108.1543 A 392.63908 392.63908 0 0 1 394.8949 108.1543 A 392.63908 392.63908 0 0 1 787.53598 500.79335 A 392.63908 392.63908 0 0 1 394.8949 893.43241 A 392.63908 392.63908 0 0 1 394.89084 893.43241 A 392.63908 392.63908 0 0 1 2.2538204 500.79335 z M 69.702737 500.79335 A 325.19061 325.19061 0 0 0 73.69992 551.5634 A 325.19061 325.19061 0 0 0 73.736443 551.79471 A 325.19061 325.19061 0 0 0 85.573786 601.08764 A 325.19061 325.19061 0 0 0 85.71176 601.50968 A 325.19061 325.19061 0 0 0 105.04839 648.18923 A 325.19061 325.19061 0 0 0 105.29999 648.6762 A 325.19061 325.19061 0 0 0 131.64082 691.65888 A 325.19061 325.19061 0 0 0 132.03445 692.1986 A 325.19061 325.19061 0 0 0 164.72613 730.47803 A 325.19061 325.19061 0 0 0 165.20904 730.96093 A 325.19061 325.19061 0 0 0 203.50084 763.66056 A 325.19061 325.19061 0 0 0 204.01621 764.03796 A 325.19061 325.19061 0 0 0 247.01129 790.38677 A 325.19061 325.19061 0 0 0 247.49826 790.63837 A 325.19061 325.19061 0 0 0 294.17806 809.9749 A 325.19061 325.19061 0 0 0 294.59603 810.11693 A 325.19061 325.19061 0 0 0 343.89328 821.95015 A 325.19061 325.19061 0 0 0 344.12458 821.98668 A 325.19061 325.19061 0 0 0 394.89084 825.98384 A 325.19061 325.19061 0 0 0 394.8949 825.98384 A 325.19061 325.19061 0 0 0 445.66521 821.98668 A 325.19061 325.19061 0 0 0 445.89652 821.95015 A 325.19061 325.19061 0 0 0 495.18971 810.11693 A 325.19061 325.19061 0 0 0 495.60768 809.9749 A 325.19061 325.19061 0 0 0 542.29154 790.63837 A 325.19061 325.19061 0 0 0 542.77851 790.38677 A 325.19061 325.19061 0 0 0 585.77359 764.03796 A 325.19061 325.19061 0 0 0 586.28896 763.66056 A 325.19061 325.19061 0 0 0 624.58076 730.96093 A 325.19061 325.19061 0 0 0 625.06367 730.47803 A 325.19061 325.19061 0 0 0 657.75535 692.1986 A 325.19061 325.19061 0 0 0 658.14898 691.65888 A 325.19061 325.19061 0 0 0 684.48981 648.6762 A 325.19061 325.19061 0 0 0 684.74141 648.18923 A 325.19061 325.19061 0 0 0 704.07804 601.50968 A 325.19061 325.19061 0 0 0 704.21601 601.08764 A 325.19061 325.19061 0 0 0 716.0493 551.79471 A 325.19061 325.19061 0 0 0 716.08988 551.5634 A 325.19061 325.19061 0 0 0 720.08706 500.79335 A 325.19061 325.19061 0 0 0 719.61633 483.47772 A 325.19061 325.19061 0 0 0 719.55546 482.54438 A 325.19061 325.19061 0 0 0 718.22036 466.12557 A 325.19061 325.19061 0 0 0 718.06209 464.75802 A 325.19061 325.19061 0 0 0 715.90321 448.90734 A 325.19061 325.19061 0 0 0 715.60291 447.13398 A 325.19061 325.19061 0 0 0 712.65676 431.77838 A 325.19061 325.19061 0 0 0 712.22661 429.85082 A 325.19061 325.19061 0 0 0 708.47697 414.77928 A 325.19061 325.19061 0 0 0 707.94536 412.85983 A 325.19061 325.19061 0 0 0 703.38411 397.99526 A 325.19061 325.19061 0 0 0 702.77134 396.15697 A 325.19061 325.19061 0 0 0 697.34978 381.41007 A 325.19061 325.19061 0 0 0 696.72079 379.80309 A 325.19061 325.19061 0 0 0 690.36587 365.02779 A 325.19061 325.19061 0 0 0 689.83427 363.85096 A 325.19061 325.19061 0 0 0 682.36339 348.79566 A 325.19061 325.19061 0 0 0 682.13208 348.34116 A 325.19061 325.19061 0 0 0 673.5777 333.21281 A 325.19061 325.19061 0 0 0 673.42756 332.96527 A 325.19061 325.19061 0 0 0 664.24012 318.59578 A 325.19061 325.19061 0 0 0 663.63547 317.71519 A 325.19061 325.19061 0 0 0 654.11528 304.46571 A 325.19061 325.19061 0 0 0 653.18192 303.25641 A 325.19061 325.19061 0 0 0 643.23563 290.88347 A 325.19061 325.19061 0 0 0 642.03851 289.48345 A 325.19061 325.19061 0 0 0 631.60119 277.84907 A 325.19061 325.19061 0 0 0 630.25392 276.43281 A 325.19061 325.19061 0 0 0 619.26877 265.44366 A 325.19061 325.19061 0 0 0 617.81598 264.06393 A 325.19061 325.19061 0 0 0 606.1856 253.63478 A 325.19061 325.19061 0 0 0 604.81398 252.45795 A 325.19061 325.19061 0 0 0 592.48561 242.54824 A 325.19061 325.19061 0 0 0 591.19109 241.54996 A 325.19061 325.19061 0 0 0 577.97401 232.05822 A 325.19061 325.19061 0 0 0 577.09341 231.44546 A 325.19061 325.19061 0 0 0 562.72384 222.26213 A 325.19061 325.19061 0 0 0 562.48036 222.11198 A 325.19061 325.19061 0 0 0 547.38845 213.57794 A 325.19061 325.19061 0 0 0 546.80004 213.27359 A 325.19061 325.19061 0 0 0 531.81364 205.84333 A 325.19061 325.19061 0 0 0 530.72203 205.34825 A 325.19061 325.19061 0 0 0 515.83303 198.94467 A 325.19061 325.19061 0 0 0 514.35995 198.36843 A 325.19061 325.19061 0 0 0 499.52776 192.91849 A 325.19061 325.19061 0 0 0 497.71787 192.31385 A 325.19061 325.19061 0 0 0 482.80858 187.73638 A 325.19061 325.19061 0 0 0 480.9297 187.2129 A 325.19061 325.19061 0 0 0 465.84186 183.46328 A 325.19061 325.19061 0 0 0 463.91022 183.03312 A 325.19061 325.19061 0 0 0 448.46933 180.07076 A 325.19061 325.19061 0 0 0 446.83799 179.79481 A 325.19061 325.19061 0 0 0 430.97912 177.63594 A 325.19061 325.19061 0 0 0 429.52227 177.4655 A 325.19061 325.19061 0 0 0 413.0344 176.12229 A 325.19061 325.19061 0 0 0 412.26337 176.0736 A 325.19061 325.19061 0 0 0 394.8949 175.60287 A 325.19061 325.19061 0 0 0 394.89084 175.60287 A 325.19061 325.19061 0 0 0 377.52643 176.0736 A 325.19061 325.19061 0 0 0 376.7554 176.12229 A 325.19061 325.19061 0 0 0 360.26752 177.4655 A 325.19061 325.19061 0 0 0 358.81068 177.63594 A 325.19061 325.19061 0 0 0 342.95181 179.79481 A 325.19061 325.19061 0 0 0 341.32047 180.07076 A 325.19061 325.19061 0 0 0 325.87552 183.03312 A 325.19061 325.19061 0 0 0 323.94388 183.46328 A 325.19061 325.19061 0 0 0 308.86009 187.2129 A 325.19061 325.19061 0 0 0 306.98122 187.73638 A 325.19061 325.19061 0 0 0 292.07193 192.31385 A 325.19061 325.19061 0 0 0 290.25798 192.91849 A 325.19061 325.19061 0 0 0 275.42579 198.36843 A 325.19061 325.19061 0 0 0 273.95677 198.94467 A 325.19061 325.19061 0 0 0 259.06777 205.34825 A 325.19061 325.19061 0 0 0 257.97616 205.84333 A 325.19061 325.19061 0 0 0 242.98976 213.27359 A 325.19061 325.19061 0 0 0 242.40134 213.57794 A 325.19061 325.19061 0 0 0 227.30944 222.11198 A 325.19061 325.19061 0 0 0 227.06596 222.26213 A 325.19061 325.19061 0 0 0 212.69639 231.44546 A 325.19061 325.19061 0 0 0 211.81579 232.05822 A 325.19061 325.19061 0 0 0 198.59871 241.54996 A 325.19061 325.19061 0 0 0 197.30419 242.54824 A 325.19061 325.19061 0 0 0 184.97582 252.45795 A 325.19061 325.19061 0 0 0 183.60014 253.63478 A 325.19061 325.19061 0 0 0 171.97382 264.06393 A 325.19061 325.19061 0 0 0 170.52103 265.44366 A 325.19061 325.19061 0 0 0 159.53182 276.43281 A 325.19061 325.19061 0 0 0 158.18861 277.84907 A 325.19061 325.19061 0 0 0 147.75129 289.48345 A 325.19061 325.19061 0 0 0 146.55416 290.88347 A 325.19061 325.19061 0 0 0 136.60382 303.25641 A 325.19061 325.19061 0 0 0 135.67452 304.46571 A 325.19061 325.19061 0 0 0 126.15433 317.71519 A 325.19061 325.19061 0 0 0 125.54968 318.59578 A 325.19061 325.19061 0 0 0 116.36224 332.96527 A 325.19061 325.19061 0 0 0 116.21209 333.21281 A 325.19061 325.19061 0 0 0 107.65772 348.34116 A 325.19061 325.19061 0 0 0 107.42235 348.79566 A 325.19061 325.19061 0 0 0 99.95553 363.85096 A 325.19061 325.19061 0 0 0 99.419867 365.02779 A 325.19061 325.19061 0 0 0 93.064954 379.80309 A 325.19061 325.19061 0 0 0 92.440014 381.41007 A 325.19061 325.19061 0 0 0 87.018454 396.15697 A 325.19061 325.19061 0 0 0 86.405687 397.99526 A 325.19061 325.19061 0 0 0 81.844435 412.85983 A 325.19061 325.19061 0 0 0 81.31283 414.77928 A 325.19061 325.19061 0 0 0 77.563188 429.85082 A 325.19061 325.19061 0 0 0 77.133034 431.77838 A 325.19061 325.19061 0 0 0 74.186887 447.13398 A 325.19061 325.19061 0 0 0 73.886591 448.90734 A 325.19061 325.19061 0 0 0 71.727706 464.75802 A 325.19061 325.19061 0 0 0 71.569442 466.12557 A 325.19061 325.19061 0 0 0 70.234342 482.54438 A 325.19061 325.19061 0 0 0 70.173471 483.47772 A 325.19061 325.19061 0 0 0 69.702737 500.79335 z "
                    transform="scale(0.26458333)" />
                </g>
                <g id="g307" transform="matrix(0,0.38503677,0.37300629,0,1.1724495,38.386219)"
                  style="fill: #77b6ea; fill-opacity: 1" inkscape:label="g1016">
                  <path id="path305" style="
                      fill: #77b6ea;
                      fill-opacity: 1;
                      fill-rule: evenodd;
                      stroke-width: 1.40606;
                    " inkscape:label="path589-7-5-0"
                    d="M 2.2528978 500.79347 A 392.63908 392.63908 0 0 1 394.89499 108.15389 A 392.63908 392.63908 0 0 1 787.53708 500.79347 A 392.63908 392.63908 0 0 1 394.89499 893.43305 A 392.63908 392.63908 0 0 1 2.2528978 500.79347 z M 69.702829 500.79347 A 325.19061 325.19061 0 0 0 73.700012 551.56339 A 325.19061 325.19061 0 0 0 73.740592 551.79378 A 325.19061 325.19061 0 0 0 85.56982 601.08711 A 325.19061 325.19061 0 0 0 85.711852 601.51123 A 325.19061 325.19061 0 0 0 105.04848 648.18647 A 325.19061 325.19061 0 0 0 105.29704 648.67343 A 325.19061 325.19061 0 0 0 131.63888 691.66241 A 325.19061 325.19061 0 0 0 132.03454 692.19649 A 325.19061 325.19061 0 0 0 164.72724 730.47815 A 325.19061 325.19061 0 0 0 165.20913 730.95987 A 325.19061 325.19061 0 0 0 203.50194 763.65977 A 325.19061 325.19061 0 0 0 204.01427 764.03677 A 325.19061 325.19061 0 0 0 247.00935 790.38519 A 325.19061 325.19061 0 0 0 247.49632 790.63652 A 325.19061 325.19061 0 0 0 294.17916 809.97371 A 325.19061 325.19061 0 0 0 294.59511 810.11508 A 325.19061 325.19061 0 0 0 343.89032 821.94883 A 325.19061 325.19061 0 0 0 344.12366 821.99072 A 325.19061 325.19061 0 0 0 394.89499 825.98592 A 325.19061 325.19061 0 0 0 445.66632 821.99072 A 325.19061 325.19061 0 0 0 445.89458 821.94883 A 325.19061 325.19061 0 0 0 495.18979 810.11508 A 325.19061 325.19061 0 0 0 495.61082 809.97371 A 325.19061 325.19061 0 0 0 542.28858 790.63652 A 325.19061 325.19061 0 0 0 542.78062 790.38519 A 325.19061 325.19061 0 0 0 585.77571 764.03677 A 325.19061 325.19061 0 0 0 586.28804 763.65977 A 325.19061 325.19061 0 0 0 624.58085 730.95987 A 325.19061 325.19061 0 0 0 625.06274 730.47815 A 325.19061 325.19061 0 0 0 657.75544 692.19649 A 325.19061 325.19061 0 0 0 658.14603 691.66241 A 325.19061 325.19061 0 0 0 684.48787 648.67343 A 325.19061 325.19061 0 0 0 684.7415 648.18647 A 325.19061 325.19061 0 0 0 704.07813 601.51123 A 325.19061 325.19061 0 0 0 704.21509 601.08711 A 325.19061 325.19061 0 0 0 716.04939 551.79378 A 325.19061 325.19061 0 0 0 716.08997 551.56339 A 325.19061 325.19061 0 0 0 720.08715 500.79347 A 325.19061 325.19061 0 0 0 719.6154 483.47745 A 325.19061 325.19061 0 0 0 719.55453 482.54541 A 325.19061 325.19061 0 0 0 718.22044 466.12478 A 325.19061 325.19061 0 0 0 718.05812 464.75814 A 325.19061 325.19061 0 0 0 715.90228 448.90824 A 325.19061 325.19061 0 0 0 715.603 447.13318 A 325.19061 325.19061 0 0 0 712.65584 431.77549 A 325.19061 325.19061 0 0 0 712.22467 429.84858 A 325.19061 325.19061 0 0 0 708.47604 414.77888 A 325.19061 325.19061 0 0 0 707.94342 412.86244 A 325.19061 325.19061 0 0 0 703.38318 397.99694 A 325.19061 325.19061 0 0 0 702.7694 396.15905 A 325.19061 325.19061 0 0 0 697.3519 381.40875 A 325.19061 325.19061 0 0 0 696.7229 379.80648 A 325.19061 325.19061 0 0 0 690.36698 365.03001 A 325.19061 325.19061 0 0 0 689.83436 363.85187 A 325.19061 325.19061 0 0 0 682.36754 348.79264 A 325.19061 325.19061 0 0 0 682.12913 348.34233 A 325.19061 325.19061 0 0 0 673.57678 333.20979 A 325.19061 325.19061 0 0 0 673.4246 332.96893 A 325.19061 325.19061 0 0 0 664.23818 318.59564 A 325.19061 325.19061 0 0 0 663.63455 317.71596 A 325.19061 325.19061 0 0 0 654.11334 304.46321 A 325.19061 325.19061 0 0 0 653.18506 303.25889 A 325.19061 325.19061 0 0 0 643.23775 290.88058 A 325.19061 325.19061 0 0 0 642.03555 289.48252 A 325.19061 325.19061 0 0 0 631.60128 277.84775 A 325.19061 325.19061 0 0 0 630.25705 276.43398 A 325.19061 325.19061 0 0 0 619.26987 265.44326 A 325.19061 325.19061 0 0 0 617.81404 264.06614 A 325.19061 325.19061 0 0 0 606.18772 253.63569 A 325.19061 325.19061 0 0 0 604.81305 252.45755 A 325.19061 325.19061 0 0 0 592.48671 242.54548 A 325.19061 325.19061 0 0 0 591.18814 241.5506 A 325.19061 325.19061 0 0 0 577.9741 232.05742 A 325.19061 325.19061 0 0 0 577.09147 231.44479 A 325.19061 325.19061 0 0 0 562.72596 222.26578 A 325.19061 325.19061 0 0 0 562.4774 222.1087 A 325.19061 325.19061 0 0 0 547.38651 213.57897 A 325.19061 325.19061 0 0 0 546.80317 213.27528 A 325.19061 325.19061 0 0 0 531.81373 205.84515 A 325.19061 325.19061 0 0 0 530.72313 205.34771 A 325.19061 325.19061 0 0 0 515.83007 198.94387 A 325.19061 325.19061 0 0 0 514.35903 198.36789 A 325.19061 325.19061 0 0 0 499.52684 192.91704 A 325.19061 325.19061 0 0 0 497.71593 192.31488 A 325.19061 325.19061 0 0 0 482.80766 187.73847 A 325.19061 325.19061 0 0 0 480.93081 187.21485 A 325.19061 325.19061 0 0 0 465.84499 183.46051 A 325.19061 325.19061 0 0 0 463.91234 183.03115 A 325.19061 325.19061 0 0 0 448.46637 180.07271 A 325.19061 325.19061 0 0 0 446.83808 179.79519 A 325.19061 325.19061 0 0 0 430.97616 177.63265 A 325.19061 325.19061 0 0 0 429.52034 177.4651 A 325.19061 325.19061 0 0 0 413.03449 176.12464 A 325.19061 325.19061 0 0 0 412.26346 176.07227 A 325.19061 325.19061 0 0 0 394.89499 175.60102 A 325.19061 325.19061 0 0 0 377.52652 176.07227 A 325.19061 325.19061 0 0 0 376.75549 176.12464 A 325.19061 325.19061 0 0 0 360.26964 177.4651 A 325.19061 325.19061 0 0 0 358.80874 177.63265 A 325.19061 325.19061 0 0 0 342.9519 179.79519 A 325.19061 325.19061 0 0 0 341.31853 180.07271 A 325.19061 325.19061 0 0 0 325.87763 183.03115 A 325.19061 325.19061 0 0 0 323.94499 183.46051 A 325.19061 325.19061 0 0 0 308.85917 187.21485 A 325.19061 325.19061 0 0 0 306.98232 187.73847 A 325.19061 325.19061 0 0 0 292.07404 192.31488 A 325.19061 325.19061 0 0 0 290.25807 192.91704 A 325.19061 325.19061 0 0 0 275.42588 198.36789 A 325.19061 325.19061 0 0 0 273.95483 198.94387 A 325.19061 325.19061 0 0 0 259.06685 205.34771 A 325.19061 325.19061 0 0 0 257.97625 205.84515 A 325.19061 325.19061 0 0 0 242.98681 213.27528 A 325.19061 325.19061 0 0 0 242.39839 213.57897 A 325.19061 325.19061 0 0 0 227.31257 222.1087 A 325.19061 325.19061 0 0 0 227.06402 222.26578 A 325.19061 325.19061 0 0 0 212.69344 231.44479 A 325.19061 325.19061 0 0 0 211.81588 232.05742 A 325.19061 325.19061 0 0 0 198.60184 241.5506 A 325.19061 325.19061 0 0 0 197.30327 242.54548 A 325.19061 325.19061 0 0 0 184.97693 252.45755 A 325.19061 325.19061 0 0 0 183.60226 253.63569 A 325.19061 325.19061 0 0 0 171.97086 264.06614 A 325.19061 325.19061 0 0 0 170.52011 265.44326 A 325.19061 325.19061 0 0 0 159.53293 276.43398 A 325.19061 325.19061 0 0 0 158.1887 277.84775 A 325.19061 325.19061 0 0 0 147.74935 289.48252 A 325.19061 325.19061 0 0 0 146.55223 290.88058 A 325.19061 325.19061 0 0 0 136.60492 303.25889 A 325.19061 325.19061 0 0 0 135.67664 304.46321 A 325.19061 325.19061 0 0 0 126.15543 317.71596 A 325.19061 325.19061 0 0 0 125.54672 318.59564 A 325.19061 325.19061 0 0 0 116.36538 332.96893 A 325.19061 325.19061 0 0 0 116.2132 333.20979 A 325.19061 325.19061 0 0 0 107.65578 348.34233 A 325.19061 325.19061 0 0 0 107.42244 348.79264 A 325.19061 325.19061 0 0 0 99.955621 363.85187 A 325.19061 325.19061 0 0 0 99.423002 365.03001 A 325.19061 325.19061 0 0 0 93.067075 379.80648 A 325.19061 325.19061 0 0 0 92.438076 381.40875 A 325.19061 325.19061 0 0 0 87.020574 396.15905 A 325.19061 325.19061 0 0 0 86.406793 397.99694 A 325.19061 325.19061 0 0 0 81.841483 412.86244 A 325.19061 325.19061 0 0 0 81.313936 414.77888 A 325.19061 325.19061 0 0 0 77.560236 429.84858 A 325.19061 325.19061 0 0 0 77.13414 431.77549 A 325.19061 325.19061 0 0 0 74.186978 447.13318 A 325.19061 325.19061 0 0 0 73.887697 448.90824 A 325.19061 325.19061 0 0 0 71.726783 464.75814 A 325.19061 325.19061 0 0 0 71.569533 466.12478 A 325.19061 325.19061 0 0 0 70.230376 482.54541 A 325.19061 325.19061 0 0 0 70.169505 483.47745 A 325.19061 325.19061 0 0 0 69.702829 500.79347 z "
                    transform="scale(0.26458333)" />
                </g>
                <g id="g311" transform="matrix(0,0.28877757,0.28877906,0,12.332682,48.44362)"
                  style="fill: #006ee6; fill-opacity: 1" inkscape:label="g18">
                  <path id="path309" style="
                      fill: #006ee6;
                      fill-opacity: 1;
                      fill-rule: evenodd;
                      stroke-width: 1.40606;
                    " inkscape:label="path589-7-5-0-0-4"
                    d="M 2.2513733 500.79361 A 392.63908 392.63908 0 0 1 394.89517 108.15184 A 392.63908 392.63908 0 0 1 787.53219 500.79361 A 392.63908 392.63908 0 0 1 394.89517 893.42861 A 392.63908 392.63908 0 0 1 2.2513733 500.79361 z M 69.702997 500.79361 A 325.19061 325.19061 0 0 0 73.70018 551.5596 A 325.19061 325.19061 0 0 0 73.740761 551.78956 A 325.19061 325.19061 0 0 0 85.569988 601.0879 A 325.19061 325.19061 0 0 0 85.71202 601.50723 A 325.19061 325.19061 0 0 0 105.04865 648.18814 A 325.19061 325.19061 0 0 0 105.29889 648.6751 A 325.19061 325.19061 0 0 0 131.64243 691.6632 A 325.19061 325.19061 0 0 0 132.03471 692.19751 A 325.19061 325.19061 0 0 0 164.7291 730.47829 A 325.19061 325.19061 0 0 0 165.2093 730.95849 A 325.19061 325.19061 0 0 0 203.50381 763.65947 A 325.19061 325.19061 0 0 0 204.01783 764.03822 A 325.19061 325.19061 0 0 0 247.01291 790.38838 A 325.19061 325.19061 0 0 0 247.49988 790.63863 A 325.19061 325.19061 0 0 0 294.18103 809.97516 A 325.19061 325.19061 0 0 0 294.60036 810.11719 A 325.19061 325.19061 0 0 0 343.89219 821.94636 A 325.19061 325.19061 0 0 0 344.12214 821.98694 A 325.19061 325.19061 0 0 0 394.89517 825.9841 A 325.19061 325.19061 0 0 0 445.66819 821.98694 A 325.19061 325.19061 0 0 0 445.89814 821.94636 A 325.19061 325.19061 0 0 0 495.18997 810.11719 A 325.19061 325.19061 0 0 0 495.60931 809.97516 A 325.19061 325.19061 0 0 0 542.29046 790.63863 A 325.19061 325.19061 0 0 0 542.77742 790.38838 A 325.19061 325.19061 0 0 0 585.77251 764.03822 A 325.19061 325.19061 0 0 0 586.28653 763.65947 A 325.19061 325.19061 0 0 0 624.58103 730.95849 A 325.19061 325.19061 0 0 0 625.06123 730.47829 A 325.19061 325.19061 0 0 0 657.75562 692.19751 A 325.19061 325.19061 0 0 0 658.1479 691.6632 A 325.19061 325.19061 0 0 0 684.49144 648.6751 A 325.19061 325.19061 0 0 0 684.74168 648.18814 A 325.19061 325.19061 0 0 0 704.07831 601.50723 A 325.19061 325.19061 0 0 0 704.21358 601.0879 A 325.19061 325.19061 0 0 0 716.04957 551.78956 A 325.19061 325.19061 0 0 0 716.09015 551.5596 A 325.19061 325.19061 0 0 0 720.08733 500.79361 A 325.19061 325.19061 0 0 0 719.62066 483.47933 A 325.19061 325.19061 0 0 0 719.55979 482.54599 A 325.19061 325.19061 0 0 0 718.22063 466.12448 A 325.19061 325.19061 0 0 0 718.05831 464.75827 A 325.19061 325.19061 0 0 0 715.90078 448.90489 A 325.19061 325.19061 0 0 0 715.60318 447.13288 A 325.19061 325.19061 0 0 0 712.65433 431.77999 A 325.19061 325.19061 0 0 0 712.22824 429.85242 A 325.19061 325.19061 0 0 0 708.47454 414.77683 A 325.19061 325.19061 0 0 0 707.94699 412.86279 A 325.19061 325.19061 0 0 0 703.38168 397.99686 A 325.19061 325.19061 0 0 0 702.76621 396.15722 A 325.19061 325.19061 0 0 0 697.3487 381.40627 A 325.19061 325.19061 0 0 0 696.71971 379.80335 A 325.19061 325.19061 0 0 0 690.36885 365.03211 A 325.19061 325.19061 0 0 0 689.83454 363.84851 A 325.19061 325.19061 0 0 0 682.36772 348.79321 A 325.19061 325.19061 0 0 0 682.131 348.34006 A 325.19061 325.19061 0 0 0 673.57527 333.21036 A 325.19061 325.19061 0 0 0 673.42648 332.96688 A 325.19061 325.19061 0 0 0 664.24175 318.59468 A 325.19061 325.19061 0 0 0 663.63304 317.71544 A 325.19061 325.19061 0 0 0 654.11014 304.46596 A 325.19061 325.19061 0 0 0 653.18355 303.25532 A 325.19061 325.19061 0 0 0 643.23455 290.88508 A 325.19061 325.19061 0 0 0 642.03743 289.48506 A 325.19061 325.19061 0 0 0 631.60146 277.85203 A 325.19061 325.19061 0 0 0 630.25554 276.43172 A 325.19061 325.19061 0 0 0 619.26498 265.44121 A 325.19061 325.19061 0 0 0 617.81761 264.06148 A 325.19061 325.19061 0 0 0 606.18452 253.63233 A 325.19061 325.19061 0 0 0 604.81154 252.46227 A 325.19061 325.19061 0 0 0 592.48859 242.54714 A 325.19061 325.19061 0 0 0 591.19001 241.54616 A 325.19061 325.19061 0 0 0 577.97428 232.05712 A 325.19061 325.19061 0 0 0 577.09503 231.44842 A 325.19061 325.19061 0 0 0 562.72276 222.26374 A 325.19061 325.19061 0 0 0 562.47927 222.10818 A 325.19061 325.19061 0 0 0 547.39008 213.57954 A 325.19061 325.19061 0 0 0 546.80166 213.27519 A 325.19061 325.19061 0 0 0 531.81391 205.84223 A 325.19061 325.19061 0 0 0 530.71824 205.3485 A 325.19061 325.19061 0 0 0 515.83194 198.94357 A 325.19061 325.19061 0 0 0 514.36428 198.36868 A 325.19061 325.19061 0 0 0 499.53209 192.91739 A 325.19061 325.19061 0 0 0 497.71949 192.31545 A 325.19061 325.19061 0 0 0 482.80615 187.73664 A 325.19061 325.19061 0 0 0 480.93268 187.21586 A 325.19061 325.19061 0 0 0 465.84348 183.46217 A 325.19061 325.19061 0 0 0 463.90914 183.03608 A 325.19061 325.19061 0 0 0 448.46824 180.07372 A 325.19061 325.19061 0 0 0 446.83826 179.79642 A 325.19061 325.19061 0 0 0 430.97803 177.63213 A 325.19061 325.19061 0 0 0 429.52389 177.46305 A 325.19061 325.19061 0 0 0 413.03467 176.1239 A 325.19061 325.19061 0 0 0 412.26364 176.07655 A 325.19061 325.19061 0 0 0 394.89517 175.60312 A 325.19061 325.19061 0 0 0 377.52669 176.07655 A 325.19061 325.19061 0 0 0 376.75566 176.1239 A 325.19061 325.19061 0 0 0 360.26644 177.46305 A 325.19061 325.19061 0 0 0 358.8123 177.63213 A 325.19061 325.19061 0 0 0 342.95207 179.79642 A 325.19061 325.19061 0 0 0 341.32209 180.07372 A 325.19061 325.19061 0 0 0 325.87443 183.03608 A 325.19061 325.19061 0 0 0 323.94685 183.46217 A 325.19061 325.19061 0 0 0 308.85765 187.21586 A 325.19061 325.19061 0 0 0 306.98419 187.73664 A 325.19061 325.19061 0 0 0 292.07084 192.31545 A 325.19061 325.19061 0 0 0 290.25824 192.91739 A 325.19061 325.19061 0 0 0 275.42605 198.36868 A 325.19061 325.19061 0 0 0 273.95839 198.94357 A 325.19061 325.19061 0 0 0 259.06533 205.3485 A 325.19061 325.19061 0 0 0 257.97642 205.84223 A 325.19061 325.19061 0 0 0 242.98867 213.27519 A 325.19061 325.19061 0 0 0 242.40025 213.57954 A 325.19061 325.19061 0 0 0 227.31106 222.10818 A 325.19061 325.19061 0 0 0 227.06757 222.26374 A 325.19061 325.19061 0 0 0 212.6953 231.44842 A 325.19061 325.19061 0 0 0 211.81605 232.05712 A 325.19061 325.19061 0 0 0 198.60032 241.54616 A 325.19061 325.19061 0 0 0 197.30175 242.54714 A 325.19061 325.19061 0 0 0 184.97202 252.46227 A 325.19061 325.19061 0 0 0 183.59905 253.63233 A 325.19061 325.19061 0 0 0 171.97272 264.06148 A 325.19061 325.19061 0 0 0 170.51859 265.44121 A 325.19061 325.19061 0 0 0 159.53479 276.43172 A 325.19061 325.19061 0 0 0 158.18887 277.85203 A 325.19061 325.19061 0 0 0 147.7529 289.48506 A 325.19061 325.19061 0 0 0 146.55578 290.88508 A 325.19061 325.19061 0 0 0 136.60678 303.25532 A 325.19061 325.19061 0 0 0 135.67343 304.46596 A 325.19061 325.19061 0 0 0 126.15729 317.71544 A 325.19061 325.19061 0 0 0 125.54859 318.59468 A 325.19061 325.19061 0 0 0 116.36386 332.96688 A 325.19061 325.19061 0 0 0 116.21506 333.21036 A 325.19061 325.19061 0 0 0 107.65933 348.34006 A 325.19061 325.19061 0 0 0 107.42261 348.79321 A 325.19061 325.19061 0 0 0 99.95579 363.84851 A 325.19061 325.19061 0 0 0 99.42148 365.03211 A 325.19061 325.19061 0 0 0 93.063862 379.80335 A 325.19061 325.19061 0 0 0 92.441627 381.40627 A 325.19061 325.19061 0 0 0 87.017361 396.15722 A 325.19061 325.19061 0 0 0 86.408653 397.99686 A 325.19061 325.19061 0 0 0 81.843342 412.86279 A 325.19061 325.19061 0 0 0 81.315795 414.77683 A 325.19061 325.19061 0 0 0 77.562095 429.85242 A 325.19061 325.19061 0 0 0 77.135999 431.77999 A 325.19061 325.19061 0 0 0 74.187146 447.13288 A 325.19061 325.19061 0 0 0 73.889556 448.90489 A 325.19061 325.19061 0 0 0 71.72526 464.75827 A 325.19061 325.19061 0 0 0 71.569702 466.12448 A 325.19061 325.19061 0 0 0 70.230544 482.54599 A 325.19061 325.19061 0 0 0 70.169673 483.47933 A 325.19061 325.19061 0 0 0 69.702997 500.79361 z "
                    transform="scale(0.26458333)" />
                </g>
              </g>
            </svg>
          </div>

          <div class="contient one">
            <ul>
              <li>Energi Innehåll (kcal/100g)</li>
              <li>CO<under>2</under> 0-1 kg CO<under>2</under>e/kg</li>
              <li>CO<under>2</under> 1-40 kg CO<under>2</under>e/kg</li>
            </ul>
          </div>

          <div class="contient two">
            <ul>
              <li>Energi Innehåll (kcal/100g)</li>
              <li>CO<under>2</under> 0-1 kg CO<under>2</under>e/kg</li>
              <li>CO<under>2</under> 1-40 kg CO<under>2</under>e/kg</li>
            </ul>
          </div>
        </div>

        <iframe id="leftIframe" scrolling="no" class="left" title="Inline Frame Example" src=""></iframe>
        <button class="changeSideBtnLeft"></button>

        <iframe id="rightIframe" scrolling="no" class="right" title="Inline Frame Example" src=""></iframe>
        <button class="changeSideBtnRight"></button>

      </div>
    </div>

    <script src="{{ asset('js/fruit_change_side.js') }}"></script>

    <script>
      // if ("serviceWorker" in navigator) {
        // window.addEventListener("load", () => {
          // navigator.serviceWorker &&
            // navigator.serviceWorker.register(`http://localhost:5173/js/sw.js`);
        // });
      // }
    </script>
  </body>

</html>