<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'site_carbon');
function site_carbon()
{

    // Container::make('theme_options', 'Настройки темы')

    //     ->set_page_menu_position(1)
    //     ->set_icon('dashicons-admin-tools')
    //     ->add_tab(__('Hero'), array(

    //         Field::make('image', 'crb_hero_img', 'Изображение для декстопа')
    //             ->set_width(50),
    //         Field::make('image', 'crb_hero_img_mob', 'Изображение для мобильной версии)')
    //             ->set_width(50),
    //         Field::make('rich_text', 'crb_svg', 'SVG')
    //             ->set_width(50),
    //         Field::make('image', 'crb_png_img', 'Картинка PNG')
    //             ->set_width(50),
    //         Field::make('rich_text', 'crb_hero_heading', 'Заголовок')
    //             ->set_width(33),
    //         Field::make('rich_text', 'crb_hero_desc', 'Описание')
    //             ->set_width(33),
    //         Field::make('text', 'crb_hero_link', 'Ссылка кнопки')
    //             ->set_width(50),
    //         Field::make('text', 'crb_hero_link_text', 'Текст ссылки кнопки')
    //             ->set_width(50),

    //     ));

    Container::make('theme_options', 'Настройки')

        ->set_page_menu_position(2)
        ->set_icon('dashicons-admin-generic')

        ->add_tab(__('Контакты'), array(

            Field::make('complex', 'crb_header_links', 'Ссылки в шапке')
                ->add_fields(array(
                    Field::make('image', 'crb_header_link_icon', 'Иконка ссылки')
                        ->set_width(33),
                    Field::make('text', 'crb_header_link_text', 'Текст ссылки')
                        ->set_width(33),

                    Field::make('text', 'crb_header_link_link', 'Ссылка')
                        ->set_width(33),
                )),

            // Field::make('text', 'crb_address', 'Адрес')
            //     ->set_width(33),
            // Field::make('image', 'crb_address_icon', 'Иконка адреса')
            //     ->set_width(33),
            // Field::make('text', 'crb_address_link', 'Ссылка адреса')
            //     ->set_width(33),

            // Field::make('text', 'crb_shedule', 'Режим работы')
            //     ->set_width(50),
            // Field::make('image', 'crb_shedule_icon', 'Иконка')
            //     ->set_width(50),

            // Field::make('text', 'crb_mail_label', 'Текст поля mail')
            //     ->set_width(50),
            // Field::make('text', 'crb_mail_link', 'Ссылка mail')
            //     ->set_width(50),
            // Field::make('image', 'crb_mail_img', 'Иконка mail')
            //     ->set_width(50),

            Field::make('complex', 'messengers', 'Ссылки на контакты')
                ->add_fields(array(

                    Field::make('text', 'crb_mes_name', 'Название')
                        ->set_width(33),

                    Field::make('text', 'crb_mes_link', 'Ссылка на контакт')
                        ->set_width(33),

                    Field::make('image', 'crb_mes_image', 'Иконка контакта')
                        ->set_width(33),

                    Field::make('color', 'crb_contact_background', 'Цвет иконки')
                        ->set_width(33),
                )),
            Field::make('text', 'crb_phone_label', 'Текст поля телефона')
                ->set_width(33),
            Field::make('text', 'crb_phone_link', 'Ссылка телефона')
                ->set_width(33),
            Field::make('image', 'crb_phone_img', 'Иконка')
                ->set_width(33),

        ))

        ->add_tab(__('Настройки футера'), array(
            Field::make('rich_text', 'crb_footer_info', 'Юридическая информация под логотипом'),
            Field::make('complex', 'footer_messengers', 'Ссылки')
                ->add_fields(array(
                    Field::make('text', 'crb_fmes_name', 'Название')
                        ->set_width(33),

                    Field::make('text', 'crb_fmes_link', 'Ссылка на ресурс')
                        ->set_width(33),

                    Field::make('image', 'crb_fmes_image', 'Иконка')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('Код Яндекс-карты'), array(
            Field::make('text', 'crb_map_code', 'Код карты')
        ))

        ->add_tab(__('Формы обратной связи'), array(
            Field::make('text', 'crb_feedback_button_shortcode', 'Контактная форма для страницы')
                ->help_text('вставьте шорткод для формы обратной связи в это поле'),
            Field::make('text', 'crb_form1_shortcode', 'Шорткод для формы калькулятора')
                ->help_text('вставьте шорткод для формы обратной связи, которая отображается на первом экране главной страницы, и на страницах отдельной услуги (форма расчета)')
                ->set_width(50),
        ));

    // ->add_tab(__('Фото как нас найти'), array(
    //     Field::make('complex', 'found_images', 'Фото Как нас найти')
    //         ->add_fields(array(
    //             Field::make('image', 'crb_found_image', 'Фото')
    //                 ->set_width(50),
    //             Field::make('rich_text', 'crb_found_caption', 'Описание к фото')
    //                 ->set_width(50)
    //         ))
    // ))

    // ->add_tab(__('Форма обратной связи(в футере)'), array(
    //     Field::make('text', 'crb_footer_form_shortcode', 'Контактная форма для страницы')
    //         ->help_text('вставьте шорткод для формы обратной связи в это поле')
    // ))

    // ->add_tab(__('Другие настройки'), array(
    //     Field::make('image', 'crb_footer_bg', 'Фоновое изображение для футера'),
    //     Field::make('complex', 'crb_footer_docs', 'Ссылки на оф. документы в футере')
    //         ->add_fields(array(
    //             Field::make('text', 'crb_footer_doc_text', 'Текст ссылки')
    //                 ->set_width(50),
    //             Field::make('text', 'crb_footer_doc_link', 'Cсылка на страницу')
    //                 ->set_width(50),
    //         ))
    // ));



    /*POST META*/

    Container::make('post_meta', 'Контент страницы')
        ->show_on_template('page-trainers.php')
        ->add_fields(array(
            Field::make('complex', 'crb_trainers_content_blocks', 'Контент для внутренней страницы тренеров')
                ->add_fields(array(
                    Field::make('rich_text', 'crb_trainers_content_text', 'Текстовый абзац')
                        ->set_width(50),
                    Field::make('image', 'crb_trainers_content_img', 'Фото для текстового блока')
                        ->set_width(50),
                ))
        ));
    Container::make('post_meta', 'Контент для услуги')
        ->show_on_post_type('services')
        ->add_tab(__('Слайдер страницы'), array(

            Field::make('complex', 'crb_service_slider_items', 'Слайдер услуги')
                ->add_fields(array(
                    Field::make('rich_text', 'crb_service-slide_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_service-slide_desc', 'Краткое описание')
                        ->help_text('Для акцентного текста используется класс .accent-text')
                        ->set_width(33),
                    Field::make('text', 'crb_service-slide_link', 'Ссылка слайда')
                        ->set_width(33),
                    Field::make('image', 'crb_service-slide_img', 'Изображение слайда')
                        ->set_width(33),
                )),
        ))

        ->add_tab(__('Перечень услуг с ценами'), array(
            Field::make('rich_text', 'crb_service_heading', 'Заголовок блока'),
            Field::make('text', 'crb_service_phone', 'Номер телефона для связи по услуге')
                ->help_text('Номер телефона, указанный в этом поле будет применяться для всех услуг перечня на этой странице.')
                ->set_width(50),
            Field::make('text', 'crb_service_phone_link', 'Ссылка номера телефона')
                ->set_width(50),
            Field::make('complex', 'crb_service_price', 'Перечень услуг')
                ->add_fields(array(
                    Field::make('text', 'crb_service_price_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('text', 'crb_service_price_value', 'Стоимость')
                        ->set_width(33),
                    Field::make('image', 'crb_service_price_img', 'Изображение слайда')
                        ->set_width(33),
                )),
        ));

    Container::make('post_meta', 'Контент страницы')
        ->show_on_page('main')
        ->add_tab(__('Первый экран'), array(
            Field::make('complex', 'crb_slider_items', 'Слайдер')
                ->add_fields(array(
                    Field::make('rich_text', 'crb_slide_head', 'Заголовок')
                        ->set_width(33),
                    Field::make('rich_text', 'crb_slide_desc', 'Краткое описание')
                        ->help_text('Для акцентного текста используется класс .accent-text')
                        ->set_width(33),
                    Field::make('text', 'crb_slide_link', 'Ссылка слайда')
                        ->set_width(33),
                    Field::make('image', 'crb_slide_img', 'Изображение слайда')
                        ->set_width(33),
                ))
        ))

        ->add_tab(__('ликс в цифрах'), array(

            Field::make('complex', 'crb_nums', 'Блоки')

                ->add_fields(array(

                    Field::make('text', 'crd_num_head', 'Заголовок')
                        ->set_width(33),

                    Field::make('text', 'crb_num_text', 'Краткое описание')
                        ->set_width(33),
                    Field::make('image', 'crb_num_img', 'Фоновая картинка')
                        ->set_width(33),
                    Field::make('color', 'crb_num_color', 'Фоновый цвет')
                        ->set_width(50),
                    Field::make('color', 'crb_num_color_text', 'Цвет текста')
                        ->set_width(50),
                )),
        ))

        ->add_tab(__('Формы обратной связи'), array(
            // Field::make('complex', 'crb_forms', 'Формы обратной связи')
            // ->add_fields(array(
            Field::make('text', 'crb_form_head2', 'Заголовок формы обратной связи2'),
            Field::make('rich_text', 'crb_form_desc2', 'Краткое описание формы'),
            Field::make('text', 'crb_form_shortcode2', 'Шорткод для формы "Получить консультацию #2"'),
            //))

            Field::make('text', 'crb_form_head3', 'Заголовок формы обратной связи2'),
            Field::make('rich_text', 'crb_form_desc3', 'Краткое описание формы'),
            Field::make('text', 'crb_form_shortcode3', 'Шорткод для формы "Получить консультацию #3"'),

            Field::make('text', 'crb_form_head4', 'Заголовок формы обратной связи2'),
            Field::make('rich_text', 'crb_form_desc4', 'Краткое описание формы'),
            Field::make('text', 'crb_form_shortcode4', 'Шорткод для формы "Получить консультацию #4"')
        ))

        ->add_tab(__('Слайдер "Наши работы"'), array(
            Field::make('rich_text', 'crb_head', 'Заголовок блока')
                ->set_width(50),
            Field::make('rich_text', 'crb_desc', 'Краткое описание')
                ->set_width(50),
            Field::make('complex', 'crb_works', 'Слайды наши работы')
                ->add_fields(array(
                    Field::make('image', 'crb_work_item', 'Изображение для слайда'),
                ))
        ))

        ->add_tab(__('Контент блока О компании'), array(

            Field::make('text', 'crb_about_head', 'Заголовок блока')
                ->set_width(100),
            Field::make('rich_text', 'crb_about_desc', 'Краткий подзаголовок')
                ->set_width(25),
            Field::make('rich_text', 'crb_about_text', 'Текст блока')
                ->set_width(50),
            Field::make('image', 'crb_about_image', 'Фото')
                ->set_width(25),
        ))

        // ->add_tab(__('Блок "Наши клиенты"'), array(

        //     Field::make('text', 'crb_ourClients_head', 'Заголовок блока')
        //     ->set_width(50),
        //     Field::make('rich_text', 'crb_ourClients_desc', 'Краткий подзаголовок')
        //     ->set_width(50),
        //     Field::make('complex', 'crb_clients', 'Слайды наши клиенты')
        //     ->add_fields(array(
        //         Field::make('image', 'crb_clients_item', 'Лого для слайда')
        //     ))   
        // ))

        ->add_tab(__('Слайдер "Наши клиенты"'), array(
            Field::make('text', 'crb_clients_head', 'Заголовок блока')
                ->set_width(50),
            Field::make('rich_text', 'crb_clients_desc', 'Краткое описание')
                ->set_width(50),
            Field::make('complex', 'crb_clients', 'Слайды наши клиенты')
                ->set_classes('complex-grid')
                ->add_fields(array(
                    Field::make('image', 'crb_clients_item', 'Логотип'),
                    Field::make('text', 'crb_clients_item_link', 'Ссылка логотипа'),
                ))
        ))

        ->add_tab(__('Слайдер "Слова благодарности"'), array(
            Field::make('text', 'crb_fdb_head', 'Заголовок блока')
                ->set_width(50),
            Field::make('rich_text', 'crb_fdb_desc', 'Краткое описание')
                ->set_width(50),
            Field::make('complex', 'crb_fdb', 'Слайды наши клиенты')
                ->add_fields(array(
                    Field::make('image', 'crb_fdb_item', 'Изображение'),
                ))
        ))

        // ->add_tab(__('Форма обратной связи2'), array(

        //     Field::make('text', 'crb_form3_consult', 'Шорткод для формы "Получить консультацию"')

        // ))

        ->add_tab(__('FAQ'), array(
            Field::make('text', 'crb_faq_head', 'Заголовок блока')
                ->set_width(33),
            Field::make('rich_text', 'crb_faq_desc', 'Краткий подзаголовок блока')
                ->set_width(33),

            Field::make('complex', 'crb_faq_items', 'Вопрос-ответ')
                ->add_fields(array(
                    Field::make('text', 'crb_faq_question', 'Вопрос')
                        ->set_width(50),
                    Field::make('rich_text', 'crb_faq_answer', 'Ответ')
                        ->set_width(50)
                ))
        ));



    // Field::make('image', 'crb_aboutus_background', 'Фон для inner')
    //     ->set_width(50),
    // Field::make('text', 'crb_aboutus_link', 'Ссылка')
    //     ->set_width(50),
    // Field::make('text', 'crb_aboutus_link_text', 'Текст ссылки')
    //     ->set_width(50),
    // Field::make('complex', 'crb_aboutus_slides', 'Слайдер блока')
    //     ->add_fields(array(
    //         Field::make('image', 'crb_aboutus_slide_image', 'Фото слайда')
    //             ->set_width(33),
    //         Field::make('rich_text', 'crb_aboutus_slide_image_caption', 'Описание к фото')
    //             ->set_width(33),
    //         Field::make('text', 'crb_aboutus_slide_image_alt', 'Alt для фото')
    //             ->set_width(50)
    //     ))
    // ))

    //->add_tab(__('Контент блока Наши услуги'), array(
    // Field::make('text', 'crb_services_head', 'Заголовок блока')
    //     ->set_width(33),
    // Field::make('rich_text', 'crb_services_desc', 'Краткий подзаголовок блока')
    //     ->set_width(33),
    // Field::make('rich_text', 'crb_services_description', 'Текст')
    //     ->set_width(33),
    //))



    // ->add_tab(__('Форма обратной связи'), array(
    //     Field::make('text', 'crb_cf_form_heading', 'Заголовок формы'),
    //     Field::make('text', 'crb_cf_form_description', 'Подзаголовок формы'),
    //     Field::make('rich_text', 'crb_cf_form_text', 'Текст формы'),
    //     Field::make('Image', 'crb_cf_form_image', 'Изображение для блока с формой'),
    //     Field::make('text', 'crb_cf_form_shortcode', 'Шорткод формы для страницы')
    //         ->help_text('вставьте шорткод для формы обратной связи в это поле')
    //         ->set_width(33),
    // ));

    //Field::make('time', 'time', 'Time')



    // Field::make('complex', 'crb_tuesday', 'Вторник')
    // ->set_classes('shedule-day')
    //     ->add_fields(array(
    //         /*********** */
    //     )),
    // Field::make('complex', 'crb_wednesday', 'Среда')
    // ->set_classes('shedule-day')
    //     ->add_fields(array(
    //         /*********** */
    //     )),
    // Field::make('complex', 'crb_thursday', 'Четверг')
    // ->set_classes('shedule-day')
    //     ->add_fields(array(
    //         /*********** */
    //     )),
    // Field::make('complex', 'crb_friday', 'Пятница')
    // ->set_classes('shedule-day')
    //     ->add_fields(array(
    //         /*********** */
    //     )),
    // Field::make('complex', 'crb_saturday', 'Суббота')
    // ->set_classes('shedule-day')
    //     ->add_fields(array(
    //         /*********** */
    //     )),
    // Field::make('complex', 'crb_sunday', 'Воскресенье')
    // ->set_classes('shedule-day')

    // ->set_classes('shedule-day')
    //     ->add_fields(array(
    //         /*********** */
    //     )),



}
