<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Контент')
    // Контакты
    ->add_tab('Контакты', array(
        Field::make('text', 'contacts_mail', 'Email'),
        Field::make('text', 'contacts_tel', 'Телефон')
    ))
    ->add_tab('Логотип', array(
        Field::make('file', 'main_logo', 'Логотип')->set_value_type('url')->set_width(33)
    ))
    // Второй экран
    ->add_tab('Второй экран', array(
        Field::make('text', 'second-screen_title', 'Заголовок'),
        Field::make('rich_text', 'second-screen_txt1', 'Первый абзац'),
        Field::make('rich_text', 'second-screen_txt2', 'Второй абзац'),
        Field::make('rich_text', 'second-screen_txt3', 'Третий абзац')
    ))
    // Первое видео
    ->add_tab('Первое видео', array(
        Field::make('text', 'video1_id', 'VIDEO_ID (идентификатор видео из ссылки https://youtu.be/VIDEO_ID)'),
        Field::make('rich_text', 'video1_txt', 'Текст под видео')
    ))
    // Вопросы
    ->add_tab('Вопросы первый блок', array(
        Field::make('complex', 'questions1_items', 'Разделы')->set_max(3)
            ->add_fields(array(
                Field::make('file', 'image', 'Иконка')->set_value_type('url')->set_width(33),
                Field::make('text', 'title', 'Заголовок'),
                Field::make('rich_text', 'text', 'Текст')
            )),
    ))
    // Второе видео
    ->add_tab('Второе видео', array(
        Field::make('text', 'video2_id', 'VIDEO_ID (идентификатор видео из ссылки https://youtu.be/VIDEO_ID)'),
        Field::make('rich_text', 'video2_txt', 'Текст под видео')
    ))
    // Вопросы
    ->add_tab('Вопросы второй блок', array(
        Field::make('complex', 'questions2_items', 'Разделы')->set_max(3)
            ->add_fields(array(
                Field::make('file', 'image', 'Иконка')->set_value_type('url')->set_width(33),
                Field::make('text', 'title', 'Заголовок'),
                Field::make('rich_text', 'text', 'Текст')
            )),
    ))

    // Третье видео
    ->add_tab('Третье видео', array(
        Field::make('text', 'video3_id', 'VIDEO_ID (идентификатор видео из ссылки https://youtu.be/VIDEO_ID)'),
        Field::make('rich_text', 'video3_txt', 'Текст под видео')
    ))
    //Промо текст
    ->add_tab('Промо текст', array(
        Field::make('rich_text', 'promo_txt', 'Текст')
    ));
