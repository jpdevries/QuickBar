#Quickbar

QuickBar adds an Evo-style Quick Edit bar to the front end of your site. For logged in users only of course.

You'll see a thin green strip at the top. Hovering over it will slide down a bar with Edit Resource, Dashboard and Create Here buttons.

Supports Articles, meaning if you are viewing an Article Container, clicking Create Here, will take you to a page to create a new Article within that container. If you are viewing an Article, you'll be taken to a page to create a new Article in the same Article Container.

This is the initial commit so leaving the 'pieces' of the addon as Chunks and Snippets viewable in the admin. Overtime, may move them to be more behind the scenes.

## Included Themes
### aquanight
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/aquanight.png)

### clouds
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/clouds.png)

### html5
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/html5.png)

### sassy
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/sassy.png)

### pier29
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/pier29.png)

### pier31
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/pier31.png)

### purplenight
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/purplenight.png)

### sublime
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/sublime.png)

### trycatch
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/trycatch.png)

### pedometer
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/pedometer.png)

### stork
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/stork.png)

### taos
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/taos.png)

### mirage
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/mirage.png)

### modx
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/modx_2.png)

### interverse-light
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/interverse-light.png)

### interverse
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/interverse.png)

### subtractive
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/subtractive.png)

### additive
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/additive.png)

### fpo
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/fpo.png)

### retro
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/retro%20copy.png)

### fungi
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/fungi.png)

### dallas
![](http://jpdevries.s3.amazonaws.com/assets/uploads/quickbar/dallas.png)

## Creating a Theme
Themes are written using Object-Oriented Sass. Below is an example of the aquanights theme. Simply clone an existing theme and change properties, and override styles if you need to. Or, if you want to go old school grab some [example css](https://gist.github.com/jpdevries/16aa30688636fd1c2f4e). Once your stylesheet is ready, simply update the quickbar.css System Setting to point to your custom theme.

##Contributing Themes
Submit me a pull request with your coolest themes and I will add them!

## Using the Sass Component
If you are up and running on Sass, creating themes couldn't be easier. Here's a look at how the aquanight works.
````
@import "box-sizing";
@import "transition";
@import "gradients";

@import "quickbar-layout";
@import "quickbar-style";

$sliverH:4px;

$white:white;
$offwhite:#ECECEC;
$black:black;


/* start layout */
/* properties */
$sliverH:4px;
$barH:40px;
$buttonH:24px;
$barPadding:9px;
$buttonP:4px 8px 1px 8px;

@include quickbar-layout(
  $sliverH,
  $barH,
  $buttonH,
  $barPadding,
  $buttonP
);
/* end layout */ 

/* start style */
/* properties */
$borderB:rgb(70,70,70);
$barBGL:rgb(30,30,30);
$barBG:rgba(30,30,30,0.96);
$barShadow:0 1px 1px rgba(0, 0, 0, 0.5);
$textColor:#5AC4E8;
$textShadow:none;
$buttonHighlight:rgb(90,90,90);
$buttonLowLight:black;
$fontWeight:normal;
$fontFamily:"Lucida Console", Monaco, monospace;
$fontSize:12px;

$buttonGradientFrom:rgb(72,72,72) 42%;
$buttonGradientTo:rgb(72,72,72) 100%;

@include quickbar-style( /* call quickbar component, pass in properties */
  $textColor,
  $borderB,
  $barBGL,
  $barBG,
  $barShadow,
  $textColor,
  $textShadow,
  $buttonHighlight,
  $buttonLowLight,
  $fontWeight,
  $sliverH
); 

@include quickbar-fontfamily {
  font-family:"Lucida Console", Monaco, monospace;
}

#quickbar-wrapper {
  text-transform: lowercase;
}

/* add a gradient and a rollover effect */
#quickbar-wrapper .quickbar ul {
  li {
    @include transition(all, 240ms, ease-out);
    background:rgb(72,72,72);
    /*@include gradient( background-image, linear-gradient(180deg, $buttonGradientFrom, $buttonGradientTo ) );*/
    &:hover {
      /*color: $white;*/
      opacity: 0.86;
    }
  }
}
/* end style */

````
