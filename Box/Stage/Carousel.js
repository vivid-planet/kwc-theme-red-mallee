Ext.namespace("Theme.Box.Stage");
Laschenskyhof.Box.Stage.Carousel = Ext.extend(Kwf.EyeCandy.List.Plugins.Abstract, {
    numberShown: 5,
    //animationConfig: { duration: 0.25 },
    //fadeAnimationConfig: { duration: 0.25 }, //optional, by default animationConfig will be used
    useFade: true, //if elements will be faded in/out in addition to the moving
    moveElementSelector: false, //if false list.el, else list.child(moveElementSelector)

    _currentListIndex: 0,
    init: function() {
        Ext.applyIf(this, {
            animationConfig: { duration: 0.60, easing: 'easeBothStrong' }
        });
        if (!this.fadeAnimationConfig) {
            this.fadeAnimationConfig = this.animationConfig;
        }
        this.animationConfig.concurrent = true;
        this.fadeAnimationConfig.concurrent = true;

        this.moveElement = this.list.el;
        if (this.moveElementSelector) {
            this.moveElement = this.moveElement.child(this.moveElementSelector);
        }

        if (this.list.items.length > this.numberShown) {
            for(var i=this.numberShown; i<this.list.getItems().length; ++i) {
                this.list.getItem(i).el.hide();
            }
        }
        this.list.setActiveItem(this.list.items[0]);
        if (this.list.items.length > 2) {
            this.list.setActiveItem(this.list.items[1]);
            this._currentListIndex = 1;
        }
        
        this.list.on('activeChanged', function(item) {
            if (item.listIndex > this._currentListIndex) {
                this.onMoveNext();
            } else {
                this.onMovePrevious();
            }
        }, this);
    },

    onMoveNext: function() {
        // fade out first one
        this.list.setActiveChangeLocked(true);
        if (this.useFade) {
            var cfg = Ext.applyIf({
                endOpacity: 0.01
            }, this.fadeAnimationConfig);
            this.list.getItem(0).el.fadeOut(cfg);
        }

        // fade in new one
        if (this.useFade) {
            var cfg = Ext.applyIf({
                endOpacity: 0.99
            }, this.fadeAnimationConfig);
            this.list.getItem(this.numberShown).el.fadeIn(cfg);
        } else {
            this.list.getItem(this.numberShown).el.show();
        }

        var firstElWidth = this.list.getItem(0).getWidthIncludingMargin();

        var cfg = Ext.applyIf({
            callback: function() {

                if (this.useFade) {
                    //fully hide & show (as we have endOpacity)
                    this.list.getItem(0).el.hide();
                    this.list.getItem(this.numberShown).el.show();
                }

                // push moved left element to back
                this.list.getItem(0).el.insertAfter(this.list.getLastItem().el); //move element
                this.list.items.push(this.list.items.shift()); //adapt array

                //adapt listIndex property
                var idx = 0;
                this.list.items.each(function(i) {
                    i.listIndex = idx++;
                }, this);

                // left von wrapper wieder setzen
                this.moveElement.move('right', firstElWidth, false);

                this._currentListIndex = this.list.getActiveItem().listIndex;
                this.list.setActiveChangeLocked(false);
            },
            scope: this
        }, this.animationConfig);
        this.moveElement.move('left', firstElWidth, cfg);
    },

    onMovePrevious: function()
    {
        this.list.setActiveChangeLocked(true);
        // rechts rausgeschobenes element vorn dran
        this.list.getLastItem().el.insertBefore(this.list.getItem(0).el);
        this.list.items.unshift(this.list.items.pop());

        //adapt listIndex property
        var idx = 0;
        this.list.items.each(function(i) {
            i.listIndex = idx++;
        }, this);

        // left von wrapper setzen
        this.moveElement.move('left', this.list.getItem(0).getWidthIncludingMargin(), false);

        // fade in first
        if (this.useFade) {
            var cfg = Ext.applyIf({
                useDisplay: false,
                endOpacity: 0.99
            }, this.fadeAnimationConfig);
            this.list.getItem(0).el.fadeIn(cfg);
        } else {
            this.list.getItem(0).el.show();
        }

        // fade out last
        if (this.useFade) {
            var cfg = Ext.applyIf({
                useDisplay: false,
                endOpacity: 0.01
            }, this.fadeAnimationConfig);
            this.list.getItem(this.numberShown).el.fadeOut(cfg);
        }

        var cfg = Ext.applyIf({
            callback: function() {
                this._currentListIndex = this.list.getActiveItem().listIndex;
                if (this.useFade) {
                    //fully hide & show (as we have endOpacity)
                    this.list.getItem(this.numberShown).el.hide();
                    this.list.getItem(0).el.show();
                }
                this.list.setActiveChangeLocked(false);
            },
            scope: this
        }, this.animationConfig);
        this.moveElement.move('right', this.list.getItem(0).getWidthIncludingMargin(), cfg);
    }

});
