# dummy_acf_register_block
example for troubleshooting wpautop on render_block when using acf_register_block function.

1. enable plugin
2. add post or page
3. add new component
4. select formatting > dummy
5. prebuilt template will render
6. note that spans do not have added line breaks in Gutenberg preview
7. publish post/page
8. note that spans now have <br> rendered due line breaks applied wpautop
