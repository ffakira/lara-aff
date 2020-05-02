(()=> {
    //TODO: implement later
    let main = {
        val: {
            counter: 0,
            changeText: ["Fullstack Developer", "test", "lol"]
        },

        init: function() {
            setInterval(main.change, 1000);
        },

        change: function() {
            let changeTextInterval = document.getElementById('textInterval');
            if (main.val.counter < main.val.changeText.length) {
                changeTextInterval.innerText = main.val.changeText[main.val.counter];
                main.val.counter++;
            }
            else {
                main.val.counter = 0;
            }
        }
    }
    main.init();
})();
