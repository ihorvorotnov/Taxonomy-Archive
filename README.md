# Taxonomy-Archive

**WORK IN PROGRESS / NOT READY FOR PRODUCTION** [![Build Status](https://travis-ci.org/ihorvorotnov/Taxonomy-Archive.svg?branch=master)](https://travis-ci.org/ihorvorotnov/Taxonomy-Archive)

A WordPress plugin for taxonomy archive pages (a missing core feature).

When you go to `site.com/category/uncategorized/`, you'll see a list of posts in this category, called Uncategorized. However, if you delete that exact term from the URL and go to `site.com/category/`, you'll get 404 error. Many of us expect to see a list of categories there, like tag cloud (category cloud in this case). Same applies to tags or any custom taxonomy.

This plugin fixes the problem. It adds custom rewrite rules and loads custom templates to show the list of terms in a given taxonomy.
