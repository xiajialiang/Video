(function () {
    'use strict';

    // Does the browser actually support the video element?
    var supportsVideo = !!document.createElement('video').canPlayType;

    if (supportsVideo) {

        //字幕
        var subtitles = document.getElementById('subtitles');


        // Only add the events if addEventListener is supported (IE8 and less don't support it, but that will use Flash anyway)
        if (document.addEventListener) {

            //字幕
            // 打开字幕文件,读取总段数
            for (var i = 0; i < video.textTracks.length; i++) {
                video.textTracks[i].mode = 'hidden';
            }

            // Creates and returns a menu item for the subtitles language menu
            var subtitleMenuButtons = [];
            var createMenuItem = function(id, lang, label) {
                var listItem = document.createElement('li');
                var button = listItem.appendChild(document.createElement('button'));
                button.setAttribute('id', id);
                button.className = 'subtitles-button';
                if (lang.length > 0) button.setAttribute('lang', lang);
                button.value = label;
                button.setAttribute('data-state', 'inactive');
                button.appendChild(document.createTextNode(label));
                button.addEventListener('click', function(e) {
                    // Set all buttons to inactive
                    subtitleMenuButtons.map(function(v, i, a) {
                        subtitleMenuButtons[i].setAttribute('data-state', 'inactive');
                    });
                    // Find the language to activate
                    var lang = this.getAttribute('lang');
                    for (var i = 0; i < video.textTracks.length; i++) {
                        // For the 'subtitles-off' button, the first condition will never match so all will subtitles be turned off
                        if (video.textTracks[i].language == lang) {
                            video.textTracks[i].mode = 'showing';
                            this.setAttribute('data-state', 'active');
                        }
                        else {
                            video.textTracks[i].mode = 'hidden';
                        }
                    }
                    subtitlesMenu.style.display = 'none';
                });
                subtitleMenuButtons.push(button);
                return listItem;
            };
            // 显示选择的字幕，其他隐藏
            var subtitlesMenu;
            if (video.textTracks) {
                var df = document.createDocumentFragment();
                var subtitlesMenu = df.appendChild(document.createElement('ul'));
                subtitlesMenu.className = 'subtitles-menu';
                subtitlesMenu.appendChild(createMenuItem('subtitles-off', '', 'Off'));
                for (var i = 0; i < video.textTracks.length; i++) {
                    subtitlesMenu.appendChild(createMenuItem('subtitles-' + video.textTracks[i].language, video.textTracks[i].language, video.textTracks[i].label));
                }
                videoContainer.appendChild(subtitlesMenu);
            }
            subtitles.addEventListener('click', function(e) {
                if (subtitlesMenu) {
                    subtitlesMenu.style.display = (subtitlesMenu.style.display == 'block' ? 'none' : 'block');
                }
            });

        }
    }

})();