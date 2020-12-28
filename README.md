<img src="http://getkirby.com/assets/images/github/plainkit.jpg" width="300">


**General considerations**  

I worked on the MAMP local environment, and the website is made in this way: the mobile version has 1 page for each component (archive, broadcasts, about etc.) while the desktop contains all of them in 1 single page. To achieve this, I had to make every component as snippet, and then include these snippets in the templates. The only exception in terms of structure is for the homepage, that has large and mobile version in the same template, to allow resizing.

There are three main folders that you may have to look at:

**1) assets**

Where you have all the css and js files

**2) site > snippets**

Where you have the components (snippets) which are contained in the pages. Each of them has a specific role (i.e. archive, broadcast, about etc.)

**2) site > templates**

Where you have the actual pages, which are mostly containers for the snippets.



**Current issues**

1) Draggable column. This effect seem to be very buggy, especially on trackpad. The js file is **resize.js**

2) Chat. For some reason, I can't embed the same chat in the mobile / tablet / desktop version. I think it may be caused by a conflict with the id, but I really couldn't figure out how to fix it. The relative js is here http://tlk.io/embed.js or the file **chat.js**

The reason why there is also a chat-large.js in the folder, is because I tried to put different ids and different reference files, but is not working properly anyway.
