Kwf.Utils.ResponsiveEl('.themeBoxStage', [{minWidth: 1099, cls: 'fullwidth'}]);
Kwf.Utils.ResponsiveEl('.themeBoxStage', function(el) {
    var listWrapper = el.child('.listWrapper');
    el.query('.listItem').each(function(listItem){
        listItem = Ext.get(listItem);
        if (el.getWidth() < 1100) {
            listItem.setWidth(el.getWidth());
            var invertedWidth = el.getWidth() * -1;
            listWrapper.setLeft(invertedWidth);
        } else {
            listWrapper.setLeft(-1140);
            listItem.setWidth(el.getWidth());
        }
    }, this);
});
Ext.namespace("Theme.Box.Stage");
Theme.Box.Stage.Component = Ext.extend(Kwf.EyeCandy.List, {
    childSelector: '.listItem',
    _activeChangeLocked: false,
    _init: function() {
        this.plugins = [
            new Theme.Box.Stage.Carousel({
                numberShown: 3,
                moveElementSelector: '.listWrapper'
            }),
            new Theme.Box.Stage.NextPreviousLinks()
        ];

        Theme.Box.Stage.Component.superclass._init.call(this);
    },
    getActiveChangeLocked: function() {
        return this._activeChangeLocked;
    },
    setActiveChangeLocked: function(value) {
        this._activeChangeLocked = value;
    }
});

Kwf.onElementReady('.themeBoxStage', function(el){
    var stage = new Theme.Box.Stage.Component({
        el: el
    });
    
    

//     el.query('.listItem').each(function(listElement){
//         var img = Ext.get(listElement).child('img');
//         img.on('dragstart', function(event) {
//             event.stopEvent()
//         });
//         var hammertime = Hammer(listElement, {
//             drag_lock_to_axis: true
//         });
//         hammertime.on("release dragleft dragright swipeleft swiperight", function(event) {
//             handleHammer(event);
//         });
//     }, this);
//     function handleHammer(ev) {
//         ev.gesture.preventDefault();
// 
//         switch(ev.type) {
//             case 'dragright':
//             case 'dragleft':
//                 // stick to the finger
//                 debugger;
//                 break;

//             case 'swipeleft':
//                 self.next();
//                 ev.gesture.stopDetect();
//                 break;
// 
//             case 'swiperight':
//                 self.prev();
//                 ev.gesture.stopDetect();
//                 break;
// 
//             case 'release':
//                 // more then 50% moved, navigate
//                 if(Math.abs(ev.gesture.deltaX) > pane_width/2) {
//                     if(ev.gesture.direction == 'right') {
//                         self.prev();
//                     } else {
//                         self.next();
//                     }
//                 }
//                 else {
//                     self.showPane(current_pane, true);
//                 }
//                 break;
//         }
//     }
}, this);