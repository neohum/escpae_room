<?php

it('can render', function () {
    $contents = $this->view('articles.show', [
        //
    ]);

    $contents->assertSee('');
});
