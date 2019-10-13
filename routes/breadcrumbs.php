<?php
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Головна', route('home'));
});
Breadcrumbs::for('announcements', function ($trail) {
    $trail->parent('home');
    $trail->push('Оголошення студентам', route('announcements'));
});
Breadcrumbs::for('foto', function ($trail) {
    $trail->parent('home');
    $trail->push('Фотогалерея', route('photo'));
});
Breadcrumbs::for('applicants', function ($trail) {
    $trail->parent('home');
    $trail->push('Допомога абітурієнту', route('applicants'));
});
Breadcrumbs::for('posts', function ($trail) {
    $trail->parent('home');
    $trail->push('Новини кафедри', route('posts'));
});
Breadcrumbs::for('publication', function ($trail) {
    $trail->parent('home');
    $trail->push('Публікації кафедри', route('publications'));
});
Breadcrumbs::for('science', function ($trail) {
    $trail->parent('home');
    $trail->push('Наукова діяльність', route('science'));
});
Breadcrumbs::for('single-post', function ($trail, $post) {
    $trail->parent('posts');
    $trail->push($post->title, route('single-post', $post->id));
});
Breadcrumbs::for('state', function ($trail) {
    $trail->parent('home');
    $trail->push('Штат кафедри', route('states'));
});
Breadcrumbs::for('study', function ($trail) {
    $trail->parent('home');
    $trail->push('Навчальні матеріали', route('studies'));
});
Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('home');
    $trail->push('Наші контакти', route('contacts'));
});
