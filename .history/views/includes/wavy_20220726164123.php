<div id="blob-motion">
    <div id="myInfooo" style="border: 1px solid green">
    <svg class="blob-motion" id="visual" viewBox="0 0 500 480"  width="500" height="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
        <g transform="translate(240.7256843113689 250.4942824330989)">
            <path id="blob1" d="M148.7 -134.9C193.7 -103.7 231.9 -51.9 232.4 0.6C233 53 196.1 106.1 151.1 128.6C106.1 151.1 53 143 -4.4 147.4C-61.8 151.8 -123.5 168.5 -151.2 146C-178.8 123.5 -172.4 61.8 -172.8 -0.4C-173.1 -62.5 -180.3 -124.9 -152.6 -156.1C-124.9 -187.3 -62.5 -187.1 -5.3 -181.8C51.9 -176.5 103.7 -166 148.7 -134.9" fill="#BB004B"></path>
        </g>
        <g transform="translate(230.7256843113689 250.4942824330989)" style="visibility: show" >
            <path id="blob2" d="M115.4 -137.9C137.9 -92.9 136.4 -46.4 133.6 -2.8C130.8 40.8 126.6 81.6 104.1 118.4C81.6 155.2 40.8 188.1 -8.4 196.5C-57.5 204.8 -115 188.7 -151 151.9C-187 115 -201.5 57.5 -190.8 10.7C-180.1 -36.1 -144.1 -72.1 -108.1 -117.1C-72.1 -162.1 -36.1 -216.1 5.2 -221.2C46.4 -226.4 92.9 -182.9 115.4 -137.9" fill="#BB004B"></path>
        </g>

</svg>
        <script>
            const tween = KUTE.fromTo(
                '#blob1', {
                    path: '#blob1'
                }, {
                    path: '#blob2'
                }, {
                    repeat: 999,
                    duration: 3000,
                    yoyo: true
                }
            ).start();
            const tween2 = KUTE.fromTo(
                '#blob2', {
                    path: '#blob2'
                }, {
                    path: '#blob1'
                }, {
                    repeat: 999,
                    duration: 3000,
                    yoyo: true
                }
            ).start();
        </script>
        <!-- <g transform="matrix(1 0 0 1 500.5 250.55)" style="" id="f761edfb-55a2-497e-aab1-8d1a2a7145c0">
                <text  xml:space="preserve" font-family="Arial" font-size="20" font-style="normal" font-weight="400" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(0,0,255); fill-rule: nonzero; opacity: 0.5; white-space: pre;" >
                <tspan x="-100.18" y="-64.62" >Bader Binsunbil</tspan><tspan x="-130.05" y="-15.47" >Full Stack Developer</tspan><tspan x="-26.32" y="33.69" style="white-space: pre; ">and </tspan><tspan x="-167.3" y="82.84" >System Engineer Assistant</tspan>
                </text>
            </g> -->
        <div id="myInfo">
            <img src="" alt="" id="myInfo-img">
        </div>
        <div id="mySkills">
            <?php require 'views/includes/dynamic_txt.php'; ?>
        </div>
    </div>
</div>