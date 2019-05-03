# dummy_acf_register_block
example for troubleshooting wpautop on render_block when using acf_register_block function.

1. enable plugin
2. add post or page
3. add new component
4. select formatting > dummy
5. prebuilt template will render
6. note that spans do not have added line breaks in Gutenberg preview
7. publish post/page
8. note the empty `<p>` and that spans now have `<br>` rendered after due line breaks applied wpautop


Rendered output:
```
<div class="dummy-block">
<div class="dummy-header">
<h2>Dummy Title</h2>
<p></p></div>
<p class="dummy-body">Nunc sed sodales ligula. Phasellus quis semper nisi, ac mattis libero. Nam tincidunt fringilla purus ornare lobortis. Fusce id leo vitae nunc pellentesque pretium vel quis enim. Fusce eleifend at sapien et dapibus. Nunc a tellus at nisl pretium semper. Aliquam sollicitudin feugiat lobortis. Nullam volutpat enim at mollis bibendum.</p>
<div class="dummy-meta">
        <span>Dummy Aardvark</span><br>
        <span>Dummy Basilisk</span><br>
        <span>Dummy Capybara</span>
    </div>
</div>
```

Expected output:
```
<div class="dummy-block">
    <div class="dummy-header">
        <h2>Dummy Title</h2>
    </div>
    <p class="dummy-body">Nunc sed sodales ligula. Phasellus quis semper nisi, ac mattis libero. Nam tincidunt fringilla purus ornare lobortis. Fusce id leo vitae nunc pellentesque pretium vel quis enim. Fusce eleifend at sapien et dapibus. Nunc a tellus at nisl pretium semper. Aliquam sollicitudin feugiat lobortis. Nullam volutpat enim at mollis bibendum.</p>
    <div class="dummy-meta">
        <span>Dummy Aardvark</span>
        <span>Dummy Basilisk</span>
        <span>Dummy Capybara</span>
    </div>
</div>
```
