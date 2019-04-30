# Changelog

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](http://semver.org/).

## 1.2.0 (30. April 2019)

+ [#7](https://github.com/nadar/quill-delta-parser/pull/7) Makes sure input and attributes from delta is escaped before mixing it with html. Listeners should use `$line->getInput()` instead of `$line->input` to read input. This will properly escape if it is not done already. Values from attributes should be passed through `$line->getLexer()->escape()`. See the [Color listener](src/listener/Color.php) for an example of both. Obviously, escaping should be skipped in case a listener is meant to output raw html.

## 1.1.1 (17. April 2019)

+ [#6](https://github.com/nadar/quill-delta-parser/pull/6) Fixed bug in exception messaged. Added unit tests and improved message.

## 1.1.0 (8. March 2019)

+ [#5](https://github.com/nadar/quill-delta-parser/issues/5) Fixed a bug where paragraphs with attributes where not rendered (color attribute). Added new parameter to disable the rendering of attributes.

## 1.0.2 (7. February 2019)

+ Added Image-Tag for image output.

## 1.0.1 (25. November 2018)

+ Improve Video-Tag output (Remove frameborder, use youtube embed code allow tag).

## 1.0.0 (21. October 2018)

+ First stable API release.
