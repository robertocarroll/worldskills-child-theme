## Build process and npm  
- [Instructions from Understrap](https://docs.understrap.com/#/understrap-child/npm)
- `npm install` dependencies 
- `npm run watch` to compile SASS files 

## Writing custom CSS
- Write custom CSS in worldskills-child-1.0.1/src/sass/theme/_child_theme.scss
- `npm run watch` will compile and minify all the CSS 

## Logos
1. Appearance > Customise > Site identity 
2. Without logo will show site title 
3. Upload logo is for all pages except home
4. Homepage logo is for homepage only to allow the full logo to be used 

## Homepage
1. Appearance > Customise > Homepage settings
2. Choice between a static page and your latest post

## Top navigation 
One menu for the header: Primary Menu

## Footer navigation 
Four menus for the footer: 

1. Footer Menu 1	
2. Footer Menu 2	
3. Footer Menu 3	
4. Footer Menu Social

Fallback is set to false, so if there is no menu it is left blank. 

## Footer social icons 
Added a menu filter to replace short codes with SVG icons (in functions.php). To show an icon and the word use:
- %FACEBOOK_SVG%Facebook
- %TWITTER_SVG%Twitter
- %YOUTUBE_SVG%YouTube
- %FLICKR_SVG%Flickr
- %INSTAGRAM_SVG%Instagram
- %LINKEDIN_SVG%LinkedIn