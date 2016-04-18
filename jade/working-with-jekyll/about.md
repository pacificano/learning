--
layout: page
title: About
permalink: /about/
--

This is the base Jekyll theme. You can find out more info about customizing your Jekyll theme, as well as basic Jekyll usage documentation at [jekyllrb.com](http://jekyllrb.com/)

You can find the source code for the Jekyll new theme at:
{% include icon-github.html username="jglovier" %} /
[jekyll-new](https://github.com/jglovier/jekyll-new)

You can find the source code for Jekyll at
{% include icon-github.html username="jekyll" %} /
[jekyll](https://github.com/jekyll/jekyll)


Do your coding in jade.
Include the liquid front matter thing by writing 
	| ---
	| ---
Let codekit compile it to html.
It will do so but put a blank line at the beginning. 
Delete that line and Jekyll will compile it to _site with all the {{ content }} and {{ includes }}
Add an exclude to your _config.yml to ignore *.jade files.
Add an exclude to your codekit to ignore *.md files.
