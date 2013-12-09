Ext.namespace("Theme.Box.Stage");
Theme.Box.Stage.NextPreviousLinks = Ext.extend(Kwf.EyeCandy.List.Plugins.ActiveChanger.NextPreviousLinks, {
    onPrevious: function() {
        if (!this.list.getActiveChangeLocked()) {
            var item;
            if (this.list.getActiveItem() === this.list.getFirstItem()) {
                item = this.list.getLastItem();
            } else {
                item = this.list.getItem(this.list.getActiveItem().listIndex-1);
            }

            if (item) {
                this.list.setActiveItem(item);
            }
        }
    },
    onNext: function() {
        if (!this.list.getActiveChangeLocked()) {
            var item;
            if (this.list.getActiveItem() === this.list.getLastItem()) {
                item = this.list.getFirstItem();
            } else {
                item = this.list.getItem(this.list.getActiveItem().listIndex+1);
            }

            if (item) {
                this.list.setActiveItem(item);
            }
        }
    }
});
