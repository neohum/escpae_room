<?php

it('can render', function () {
    $contents = $this->view('articles.index', [
        //
    ]);

    $contents->assertSee('');
});
