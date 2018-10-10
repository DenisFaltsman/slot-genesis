<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Slot</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/slot.js') }}"></script>
</head>


<body>
<div class="wrap">
    <div class="textBlock">Nam sagittis cursus sodales. Nulla facilisi. Donec at lacus est. Nunc eget rhoncus massa, volutpat aliquam neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam porttitor nisi sapien, at mattis arcu viverra vel. Donec facilisis eget quam sed molestie. Sed auctor pharetra blandit. Donec porta vestibulum nisl vel fringilla.

        Suspendisse potenti. Morbi lacinia orci ut interdum elementum. Vivamus vel consequat odio, non viverra dui. Quisque sed mi lobortis, lacinia nibh semper, faucibus augue. Aliquam a tellus eget lorem sodales commodo a dictum lectus. Praesent volutpat ligula vitae lectus gravida malesuada. Sed lacinia dictum risus eget pretium. Mauris vel velit euismod, lacinia orci a, imperdiet lectus. Suspendisse lacus nisi, accumsan nec risus et, malesuada tempor elit. Nunc ligula neque, lobortis eget ex eget, porta fringilla urna. Quisque viverra convallis consequat. Nam vitae pharetra dui.

        Sed eget orci pulvinar dui faucibus luctus. Donec pellentesque commodo ex vitae lacinia. Sed condimentum imperdiet elit, eget consequat orci finibus a. Sed blandit, elit consectetur feugiat tempus, justo justo maximus risus, vitae mattis metus diam ac neque. Morbi placerat mauris quis metus pellentesque, non viverra ex porta. Vestibulum sem orci, rutrum eget dapibus vel, luctus quis tortor. Morbi tincidunt dictum lectus, quis consectetur sem ultrices ut.</div>
    <div class="sidebar">
        <div class="controlBlock">
            <h2>ADV</h2>
            <div><label for="isAvailable">on/off</label><input type="checkbox" id="isAvailable" class="isAvailable"></div>
            <div><label for="isLazy">lazy</label><input type="checkbox" id="isLazy" class="isLazy"></div>
            <div class="showAdv">Show adv</div>
        </div>
        <div class="slot">SLOT</div>
    </div>
</div>
</body>
</html>